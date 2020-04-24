$( document ).ready(function() {

    var slideNumber = 0;
    $("#timer").hide();
    var listSlide = [];

    $('#imagesDisplay').bind('click', function(event) {
        if (event.target.parentNode.parentNode.parentNode.id == 'imagesDisplay') {
            var image = $(event.target.parentNode.parentNode);
            changeStyle(image);
        }else if(event.target.parentNode.parentNode.id == 'imagesDisplay'){
            var image = $(event.target.parentNode);
            changeStyle(image);
        }
    });

    function uncheckAll() {
        let checkedBoxes = document.querySelectorAll('input:checked');

        [].forEach.call(checkedBoxes, function (checked) {
           parent = checked.parentElement.parentElement;
           parent.className = "relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded";
           svg = parent.children[0].children[0];
           input = parent.children[0].children[1];
           input.checked = false;
           svg.style.display = "none";
        });
    }
    function changeToCheck(p_image) {

        uncheckAll();
        p_image.prop('class', 'relative m-2 border-solid border-2 border-green-500 shadow-2xl rounded');
        p_image.children().find("input").prop("checked", true);
        p_image.children().find("svg").show();
    }

    function changeToUncheck(p_image) {
        console.log(p_image);
        p_image.prop('class', 'relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded');
        p_image.children().find("input").prop("checked", false);
        p_image.children().find("svg").hide();
    }


    function changeStyle(p_image) {
        if (document.getElementById(p_image.children().find("input").attr('id')).checked || document.getElementById(p_image.children().find("input").attr('id')).checked) { <!-- Change layout if the line is checked -->
            changeToUncheck(p_image);
        } else {
            changeToCheck(p_image);
        }
    };


    $("#selectImage").click(function() {

        // Get all image checked
        let checkedBoxes = document.querySelectorAll('input:checked');
        [].forEach.call(checkedBoxes, function (image) {
            console.log("log" + image.parentNode.parentNode.id );

            data = { "id":image.parentNode.parentNode.id };

            $.post("add", data, function (message) {
                console.log(message.imageName);
                url = '/uploads/' +  message.imageName;
                let img = document.createElement("img");   <!-- Element creation -->
                img.src = url;
                img.setAttribute('class', 'h-64 object-cover'); <!-- Class define -->
                console.log(image.parentNode.parentNode.id);
                img.setAttribute('id',image.parentNode.parentNode.id ); <!-- Class define -->
                var div = document.getElementById("slide");
                div.classList.remove("imageContainer");
                div.innerHTML = "";
                div.appendChild(img);

            });
        });

    });

    $("#confirm").click(function() {

        var slide = document.getElementById("slide");
        imageId = slide.children[0].id;
        let div = document.createElement("div");   <!-- Element creation -->
        div.setAttribute('class', 'snap-start w-full h-full flex items-center justify-center flex-shrink-0 shadow-2xl p-2'); <!-- Class define -->
        div.setAttribute('id', 'slide' + slideNumber);

        var slideShow = document.getElementById("slideShow");
        div.innerHTML = slide.innerHTML;
        slideShow.appendChild(div);

        let a = document.createElement("a");   <!-- Element creation -->
        a.setAttribute('class', 'w-8 mr-1 h-8 text-white rounded-full bg-gray-800 flex justify-center items-center'); <!-- Class define -->
        a.setAttribute('href', '#' + 'slide' + slideNumber); <!-- Class define -->
        a.innerHTML = slideNumber;
        var index = document.getElementById("index");
        index.appendChild(a);

        slideNumber++;

        data = { "id":imageId, "x" : 40, "y" : 40, "z" : 0, 'timer' : 5, 'kenburnTimer' : 3 };
        listSlide.push(data);
        });


    });

$(".btnUp").click(function(e) {

    if ( e.target.id == "timerUp"){

        value = parseInt( $("#inputTimer").val()) + 1;
        $("#inputTimer").val(value);

    } else{
        $("#inputNbr").val(parseInt( $("#inputNbr").val()) + 1);
    }
});

$(".btnDown").click(function(e) {

    if ( e.target.id == "timerDown"){
        value = parseInt( $("#inputTimer").val()) - 1;
        $("#inputTimer").val(value);

    } else{
        $("#inputNbr").val(parseInt( $("#inputNbr").val()) - 1);
    }
});

$("#kenburnEffect").click(function() {

    $("#timer").show();

});

$("#valideTimer").click(function() {

    $("#timer").hide();
    document.documentElement.style.setProperty('--timer', $("#inputNbr").val() + "s");
    $("#slide").addClass('imageContainer');

});

    $("#slideShow").click(function() {

        $("#slide").addClass('imageContainer');

    });

    $("#save").click(function() {
        $.post("/slide/store", { listSlide }, function (message) {
            console.log(message);

        });

        var openmodal = document.querySelectorAll('.modal-open');
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault();
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay');
        overlay.addEventListener('click', toggleModal);

        var closemodal = document.querySelectorAll('.modal-close');
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event;
            var isEscape = false;
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal () {
            const body = document.querySelector('body');
            const modal = document.querySelector('.modal');
            modal.classList.toggle('opacity-0');
            modal.classList.toggle('pointer-events-none');
            body.classList.toggle('modal-active')
        }

});