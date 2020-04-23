$( document ).ready(function() {

    $('#imagesDisplay').bind('click', function(event) {
        if (event.target.parentNode.parentNode.parentNode.id == 'imagesDisplay') {
            var image = $(event.target.parentNode.parentNode);
            changeStyle(image);
        }else if(event.target.parentNode.parentNode.id == 'imagesDisplay'){
            var image = $(event.target.parentNode);
            changeStyle(image);
        }
    });

    var changeStyle = (p_image) => {
        if (document.getElementById(p_image.children().find("input").attr('id')).checked || document.getElementById(p_image.children().find("input").attr('id')).checked) { <!-- Change layout if the line is checked -->
            p_image.prop('class', 'relative m-2 border-solid border-2 border-gray-800 shadow-2xl rounded');
            p_image.children().find("input").prop("checked", false);
            p_image.children().find("svg").hide();
            console.log("unchecked");


        } else {

            p_image.prop('class', 'relative m-2 border-solid border-2 border-green-500 shadow-2xl rounded');
            p_image.children().find("input").prop("checked", true);
            p_image.children().find("svg").show();
            console.log("checked");
        }
    };


    $("#selectImage").click(function() {

        // Get all image checked
        let checkedBoxes = document.querySelectorAll('input:checked');
        console.log("check" + checkedBoxes);
        [].forEach.call(checkedBoxes, function (image) {
            console.log("log" + image.parentNode.parentNode.id );

            data = { "id":image.parentNode.parentNode.id };

            // $.post("/add", data, function (message) {
            //
            //     url = '/uploads/' +  message.imageName;
            //     let img = document.createElement("img");   <!-- Element creation -->
            //     img.setAttribute('class', 'h-32 object-cover'); <!-- Class define -->
            //     img.setAttribute('src', url); <!-- Class define -->
            //     $("img").appendTo("#slide");
            //
            // });
        });
        checkedBoxes = undefined;
    });
});