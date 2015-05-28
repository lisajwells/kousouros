/**
 * Theme: Flat Bootstrap
 * 
 * @package flat-bootstrap
 */
 
( function( $ ) {

console.log('i see you');

} )( jQuery );

// REQUIRED: Include "jQuery Query Parser" plugin here or before this point: 
//       https://github.com/mattsnider/jquery-plugin-query-parser

$(document).ready(function(){
    
// BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
// Modal Window for dynamically opening videos
var trigger = $("body").find('[data-toggle="modal"]');
    trigger.on('click', function(e){
    {
        // Prevent opening of external page
        e.preventDefault();

        var videoSRC = $(this).attr( "data-theVideo" );
        console.log( videoSRC );
        var iFrameCode = '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><div><iframe width="100%" height="350" src="' + videoSRC + '"></iframe></div>';

        // Replace Modal HTML with iFrame Embed
        $('#videoModal .modal-body').html(iFrameCode);

        // Open Modal
        $('#videoModal').modal('toggle');
    }
});

// Clear modal contents on close. 
// There was mention of videos that kept playing in the background.
$('#videoModal').on('hidden.bs.modal', function () {
    $('#videoModal .modal-body').html('');
});

}); 

        // var iFrameCode = '<iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="http://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';




//function to get and autoplay youtube video from datatag:
// STILL NEEDS TO TURN OFF VIDEO WHEN MODAL CLOSES !!!!!!!!!!!!!!!!! //////
// function autoPlayYouTubeModal(){
//     var trigger = $("body").find('[data-toggle="modal"]');
//     trigger.click(function() {
//         var theModal = $(this).data( "target" ),
//                 videoSRC = $(this).attr( "data-theVideo" ),
//                 videoSRCauto = videoSRC+"?autoplay=1" ;
//         $(theModal+' iframe').attr('src', videoSRCauto);
//         $(theModal+' button.close').click(function () {
//             $(theModal+' iframe').attr('src', videoSRC);
//         });
//     });

    // any one of these turn off video when modal closes, but then it won't open again
    // $('#videoModal').on('hidden.bs.modal', function () {
    //     $('#videoModal .modal-body').html('');
    // });

    // $('#videoModal').on('hide.bs.modal', function (e) {
    //     $('div.modal-body div').html('');
    // }); 

// }

//the function call:

// $(document).ready(function(){
//   autoPlayYouTubeModal();


// });


