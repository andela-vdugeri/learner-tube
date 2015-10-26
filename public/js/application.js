$(document).ready(function () {

    $('#addVideo').hide();
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

    //$('#post-video').on('submit', function (event) {
    //
    //    event.preventDefault();
    //
    //    var videoUrl = $('#url').val();
    //    var title = $('#title').val();
    //    var videoCategory = $('#category').val();
    //    var description = $('#description').val();
    //
    //
    //    $.ajax({
    //        url: "video",
    //        type: "POST",
    //        data: {
    //            videoUrl: videoUrl,
    //            title: title,
    //            videoCategory: videoCategory,
    //            description: description
    //        },
    //
    //        success: function (data) {
    //            Materialize.toast('Video uploaded successfully', 4000);
    //            $('#addVideo').hide();
    //
    //            $.ajax({
    //                url: 'dashboard',
    //                type: 'GET'
    //            })
    //        },
    //
    //        error: function (data) {
    //            Materialize.toast("Error uploading video please try again",4000)
    //        }
    //
    //    });
    //});



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


    $('#show-form').on('click', function(e){
        e.preventDefault();
        $('#addVideo').show();
        $('#show-form').hide();
        $('#videos').hide();
    })

});