$(document).ready(function () {

    //hide video upload form on document ready.
    $('#addVideo').hide();

    //activate dropdown links
    $(".dropdown-button").dropdown();

    //set up ajax request headers
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
    });

    //change image click to file click
    $('#profile-pic').on('click', function(){
        $('#file').click();
    });

    //preview images.
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
                        img.attr("style", "height:220px; width:130px");
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


    //show add video form and hide other content on page.
    $('#show-form').on('click', function(e){
        e.preventDefault();
        $('#addVideo').show();
        $('#show-form').hide();
        $('#videos').hide();
        $('#sidebar').hide();
    })

    //user closes the form
    $('#close-form').on('click', function(e){
        e.preventDefault();
        $('#addVideo').hide();
        $('#show-form').show();
        $('#videos').show();
        $('#sidebar').show();
    })
    
});