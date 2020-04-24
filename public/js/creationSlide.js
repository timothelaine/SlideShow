$( document ).ready(function() {


    var listSlide = []; // Stock the liste of slide
    var slideNumber = 0; // Number of image into slide preview

    $("#slideName").hide(); // Hide the input to insert slideName
    $("#contentSlide").hide(); // Hide the creation slide  fonctionnality as long as a slide is not created
    $("#timer").hide(); // Hide of ken burn effect time input
    $("#messageSlide").hide();




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
                img.setAttribute('class', 'h-64 object-cover'); <!-- Class define -->
                img.setAttribute('id',image.parentNode.parentNode.id ); <!-- Give the Image ID as attribut ID -->
                var div = document.getElementById("slide");
                div.classList.remove("imageContainer"); // Remove the last ken burn effect
                div.innerHTML = "";
                div.appendChild(img);
            });
        });
    });

    /****************   Save slide function   ****************************/
    /**           Allow to select image to add on slide                  */
    /*********************************************************************/
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


    // Save the slide data in DB
    $("#save").click(function() {

        $.post("/slide/store", { listSlide }, function (message) {
            $("#messageSlide").show(slow);
        });
    });




    // Increment the timer of Ken burn effect and the image timer value when it's clicked
    $(".btnUp").click(function(e) {

        if ( e.target.id == "timerUp"){ // For the kenBurn Effect timer

            value = parseInt( $("#inputTimer").val()) + 1;
            $("#inputTimer").val(value);

        } else{  // For the image timer
            $("#inputNbr").val(parseInt( $("#inputNbr").val()) + 1);
        }
    });

    // Increment the timer of Ken burn effect and the image timer value when it's clicked
    $(".btnDown").click(function(e) {

        if ( e.target.id == "timerDown"){  // For the kenBurn Effect timer

            value = parseInt( $("#inputTimer").val()) - 1;
            $("#inputTimer").val(value);

        } else{ // For the image timer
            $("#inputNbr").val(parseInt( $("#inputNbr").val()) - 1);
        }
    });

    // Show timer input when user click on KenBurn effect button
    $("#kenburnEffect").click(function() {

        $("#timer").show();

    });

    // Apply the ken burn effect when the timer is defined
    $("#valideTimer").click(function() {

        $("#timer").hide();
        // document.documentElement.style.setProperty('--timer', $("#inputNbr").val() + "s");
        $("#slide").addClass('imageContainer');

    });

    // show the input name slide
    $("#slideCreate").click(function() {

        $("#slideName").show('slow');

    });


    $("#slideNameSend").click(function() {

          $("#slideName").hide();
          $("#contentSlide").show('slow');
    });

});

