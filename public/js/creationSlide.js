$( document ).ready(function() {

    var nameOfSlide = "";
    var listSlide = []; // Stock the liste of slide
    var slideNumber = 0; // Number of image into slide preview

    $("#slideName").hide(); // Hide the input to insert slideName
    $("#contentSlide").hide(); // Hide the creation slide  fonctionnality as long as a slide is not created
    $("#timer").hide(); // Hide of ken burn effect time input
    $("#messageSlide").hide(); // Hide of success message
    $("#errorSlide").hide();



/****************   Select image function   **************************/
/**           Allow to select image to add on slide                  */
/*********************************************************************/

    // change the style image (border red + check icon) when image is selected
    $('#imagesDisplay').bind('click', function(event) {

        if (event.target.parentNode.parentNode.parentNode.id == 'imagesDisplay') {

            var image = $(event.target.parentNode.parentNode);
            changeStyle(image);

        }else if(event.target.parentNode.parentNode.id == 'imagesDisplay'){

            var image = $(event.target.parentNode);
            changeStyle(image);
        }
    });

    // Image must be added one by one, so only one image must be selected,
    // when an image is selected, all other image must be unchecked
    function uncheckAll() {

        let checkedBoxes = document.querySelectorAll('input:checked'); // Get all image selected

        [].forEach.call(checkedBoxes, function (checked) {

           parent = checked.parentElement.parentElement;
           parent.className = "relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded";
           svg = parent.children[0].children[0];
           input = parent.children[0].children[1];
           input.checked = false;
           svg.style.display = "none";

        });
    }

    // Allow to select check an image
    function changeToCheck(p_image) {

        uncheckAll(); // Uncheck all image before check this image

        // Change the image style to be 'selected'
        p_image.prop('class', 'relative m-2 border-solid border-2 border-green-500 shadow-2xl rounded');
        p_image.children().find("input").prop("checked", true);
        p_image.children().find("svg").show();
    }

    // Allow to deselected an image
    function changeToUncheck(p_image) {
        p_image.prop('class', 'relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded');
        p_image.children().find("input").prop("checked", false);
        p_image.children().find("svg").hide();
    }

    // Call changeToUncheck is image is checked and changeToCheck if the image was not selected
    function changeStyle(p_image) {

        if (document.getElementById(p_image.children().find("input").attr('id')).checked || document.getElementById(p_image.children().find("input").attr('id')).checked) { <!-- Change layout if the line is checked -->

            changeToUncheck(p_image);

        } else {
            changeToCheck(p_image);
        }
    };


    // Allow to add an image selected to the slide temporarily
    // Image selected will be moved into slide construction section
    $("#selectImage").click(function() {

        // Get all image checked
        let checkedBoxes = document.querySelectorAll('input:checked');

        [].forEach.call(checkedBoxes, function (image) {

            // prepare the request
            data = { "id":image.parentNode.parentNode.id };

            // Use Ajax to add image into slide section
            $.post("add", data, function (message) {

                // insert the image in section
                url = '/uploads/' +  message.imageName; // url image storage
                let img = document.createElement("img");   <!-- Image element creation -->
                img.src = url; // Add url
                img.setAttribute('class', 'h-64 object-cover border-solid border-2 border-black shadow-2xl'); <!-- Class define -->
                img.setAttribute('id',image.parentNode.parentNode.id ); <!-- Give the Image ID as attribut ID -->
                var div = document.getElementById("slide");
                div.classList.remove("imageContainer"); // Remove the last ken burn effect
                div.innerHTML = "";
                div.appendChild(img);

            });
        });
    });

    /****************   Save slide function   **************************/
    /**           Allow to select image to add on slide                  */
    /*********************************************************************/
    $("#confirm").click(function() {

        var slide = document.getElementById("slide");
        imageId = slide.children[0].id;
        let div = document.createElement("div");   <!-- Element creation -->
        div.setAttribute('class', 'snap-start w-full h-full flex items-center justify-center flex-shrink-0'); <!-- Class define -->
        div.setAttribute('id', 'slide' + slideNumber);

        var slideShow = document.getElementById("slideShow");
        div.innerHTML = slide.innerHTML;
        slideShow.appendChild(div);

        let a = document.createElement("a");   <!-- Element creation -->
        a.setAttribute('class', 'w-8 mr-1 h-8 text-gray-900 border-solid border-2 rounded-full border-gray-900 hover:border-gray-900 hover:bg-gray-800 hover:text-white flex justify-center items-center'); <!-- Class define -->
        a.setAttribute('href', '#' + 'slide' + slideNumber); <!-- Class define -->
        a.innerHTML = slideNumber + 1;
        var index = document.getElementById("index");
        index.appendChild(a);

        slideNumber++;

        if ($("#inputTimer").val() < 0 ) { $("#inputTimer").val(0) }
        if ($("#inputNbr").val() < 0 ) { $("#inputNbr").val(0) }
        data = { "id":imageId, "x" : 40, "y" : 40, "z" : 0, 'timer' : $("#inputTimer").val(), 'kenburnTimer' :  $("#inputNbr").val() };
        listSlide.push(data);
    });

    // hide success message
    function hideMessage() {
        $("#messageSlide").hide('slow');
    }

    // Save the slide data in DB
    $("#save").click(function() {
        $.post("/slide/store", { listSlide, nameOfSlide }, function (message) {
            $("#errorSlideDisplay").innerHTML = "";
            $("#errorSlide").hide();

            if(message.result === "error") {
                message.errors.forEach(element => {
                    let error = element;
                    let msgError = document.createTextNode(error);
                    let br = document.createElement("br");
                    $("#errorSlideDisplay").append(msgError);
                    $("#errorSlideDisplay").append(br);
                });

                $("#errorSlide").show('slow');
            }

            else {
                $("#messageSlide").show('slow');
            }

            setTimeout(hideMessage, 5000);
        });
    });



    // Increment the timer of 1
    $(".btnUp").click(function(e) {

        if ( e.target.id == "timerUp"){ // For a Ken burn timer

            value = parseInt( $("#inputTimer").val()) + 1;
            $("#inputTimer").val(value);

        } else{
            $("#inputNbr").val(parseInt( $("#inputNbr").val()) + 1); // For a image timer
        }
    });

    // Decrement the timer of 1
    $(".btnDown").click(function(e) {

        if ( e.target.id == "timerDown"){  // For a Ken burn timer

            value = parseInt( $("#inputTimer").val()) - 1;

            if (value < 0){ value = 0;}

            $("#inputTimer").val(value);

        } else{

            value = parseInt( $("#inputNbr").val()) - 1;
            if (value < 0){ value = 0;}
            $("#inputNbr").val(value);  // For a image timer
        }
    });


    // Display the ken burn timer
    $("#kenburnEffect").click(function() {

        $("#timer").show();

    });

    // Apply the ken burn effect when the timer is defined
    $("#valideTimer").click(function() {

        $("#timer").hide();
        // document.documentElement.style.setProperty('--timer', $("#inputNbr").val() + "s");
        $("#slide").addClass('imageContainer');

    });

    // Display the input slide name
    $("#slideCreate").click(function() {

        $("#contentSlide").hide();
        $("#slideName").show('slow');

    });

    // Display the content slide creation
    $("#slideNameSend").click(function() {
        nameOfSlide = $("#nameOfSlide").val();
        $("#slideName").hide();
        $("#contentSlide").show('slow');

    });

});

