
$(document).ready(function(){
   $('#post-video').click(function(){

       var videoUrl = $('#url').val();
       var title = $('#title').val();
       var videoCategory = $('#category').val();

       console.log(title);

       $.ajax({
           url : "tubes.dev/video",
           method: "POST",
           data: {
               videoUrl: videoUrl,
               title: title,
               videoCategory: videoCategory
           },

           success : function(data) {
               console.log('saved');
           }

       })
   });
});