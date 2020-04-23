$( document ).ready(function() {

    $("#deleteMessage").hide();

    $('#imagesDisplay').bind('click', function(event) {
        if (event.target.parentNode.parentNode.parentNode.id == 'imagesDisplay') {
            let image = $(event.target.parentNode.parentNode);
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

    } else {
        p_image.prop('class', 'relative m-2 border-solid border-2 border-red-500 shadow-2xl rounded');
        p_image.children().find("input").prop("checked", true);
        p_image.children().find("svg").show();
    }
};


    $("#btnDelete").click(function() {

        checkedBoxes = document.querySelectorAll('input:checked');

        [].forEach.call(checkedBoxes, function (image) {
            id =  {"id": image.parentNode.parentNode.id};

            $.post("/deleteimage", id, function (responce) {
                [].forEach.call(checkedBoxes, function (image) {
                    image = image.parentNode.parentNode;
                    image.remove();

                    $("#title").text(responce.message.title);
                    $("#content").text( responce.message.content);
                    $("#deleteMessage").show('slow');
                    setTimeout( () => {  $("#deleteMessage").hide('slow') }, 5000);

                    if (responce.message.type == 'ko'){
                        $("#svgSuccess").hide();
                    }else{
                        $("#svgError").hide();
                    }


                });
            });
        });

    });


    function hideMessage() {
        $("#message").hide('slow');
    }
    setTimeout(hideMessage, 5000);





});

