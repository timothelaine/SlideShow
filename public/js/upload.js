$( document ).ready(function() {

    $("#upload_submit").click(function (e) {

        e.preventDefault(); <!-- Stoping redirection submit action -->

        var form = $("#formUpload")[0]; <!-- Get the file -->

        var formData = new FormData(form); <!-- Create the DataForm Object -->

        <!-- AJAX Request to send file to deposit.php the file -->
        $.ajax({
            type: 'POST',
            enctype: 'multipart/form-data',
            url: '/api/Upload',
            cache: false,
            timeout: 800000,
            processData: false,
            contentType: false,
            data: formData,
            success: function (message, status) {
                let messageTab = JSON.parse(message);

                messageTab.forEach(function (file) {
                    if (file.messageType == 's') {

                        $("#message").val('');
                        $("#message").append(file.message);
                        addFile(file.name, 'f', file.size, file.author);
                    } else {
                        $("#message").val('');
                        $("#message").append(file.message);
                    }

                })
            },
            error: function (message, status, error) {
                $("#message").val('');
                $("#message").append("Une erreur est survenu, veuillez réessayer.");
            }
        });
    })
});

