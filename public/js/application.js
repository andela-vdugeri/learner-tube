/**
 * Created by andela on 10/30/15.
 */


$(document).ready(function(){

    //change the image click event to file
    $('#profile-pic').on('click', function(e){
        e.preventDefault();
        $('#image').click();

    });


    //handle image preview
    $('#image').on('change', function(e){
        previewImage(e);
    });

     function previewImage(e){
        e.preventDefault();

        var preview = document.getElementById('profile-pic');
        var image = document.querySelector('input[type=file').files[0];
        var reader = new FileReader();

        reader.onloadend = function(){
            preview.src = reader.result;

        };

        if (image) {
            reader.readAsDataURL(image)
        } else {
            preview.src = " ";
        }
    }
})(JQuery);
