$(document).ready(function () {

    $('.modal-trigger').leanModal();
    $('select').material_select();

    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

    $('#post-video').on('submit', function (event) {

        event.preventDefault();

        var videoUrl = $('#url').val();
        var title = $('#title').val();
        var videoCategory = $('#category').val();
        var description = $('#description').val();


        $.ajax({
            url: "video",
            type: "POST",
            data: {
                videoUrl: videoUrl,
                title: title,
                videoCategory: videoCategory,
                description: description
            },

            success: function (data) {
                parsedData = $.parseJSON(data);

                firstDiv = document.createElement("div")
                firstDiv.addClass('col', 's6', 'm6');
                secondDiv = document.createElement("div");
                secondDiv.addClass('card', 'card-right', 'section');
                thirdDiv = document.createElement('video-container');
                iframe = document.createElement("iframe");
                iframe.height = 360;
                iframe.width = 640;
                iframe.src = data['VideoUrl'];
                iframe.frameBorder = 0;
                iframe.allow('fullScreen');

                $('#video').append(firstDiv).append(secondDiv).append(thirdDiv).append(iframe);


            },

            error: function (data) {

                var errors = $.parseJSON(data.responseText);

                $.each(errors, function (index, value) {
                    alert(index + " - " + value);
                });
            }

        });
    });



    //change image click to file click
    $('#profile-pic').on('click', function(){
        $('#file').click();
    });

    $('#file').change(function(event){
        event.preventDefault();

        if(typeof(FileReader) !== "undefined") {
            var imagePreview = $('#imagePreview');
            imagePreview.html("");
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function(){
               var file = $(this);
                if(regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        var img = $("<img/>");
                        img.attr("style", "height:100px; width:100px");
                        img.attr("src", e.target.result);
                        imagePreview.append(img);
                    };

                    reader.readAsDataURL(file[0]);
                } else {
                    alert(file[0].name + "is not a valid image file");
                    imagePreview.html("");
                    return false;
                }
            });
        }

    });

});