/**
 * Theme: Flat Bootstrap
 * 
 * @package flat-bootstrap
 */
 
( function( $ ) {

console.log('i see you');

// this is stashed for cookie experiment for opener modal
//   $(document).ready(function() {
//     if ($.cookie('modal_shown') == null) {
//         $.cookie('modal_shown', 'yes', { expires: 1, path: '/' });
//         $('#myModal').reveal();
//     }
// });

} )( jQuery );

//function to get and autoplay youtube video from datatag:
// STILL NEEDS TO TURN OFF VIDEO WHEN MODAL CLOSES !!!!!!!!!!!!!!!!! //////
function autoPlayYouTubeModal(){
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
        var theModal = $(this).data( "target" ),
                videoSRC = $(this).attr( "data-theVideo" ),
                videoSRCauto = videoSRC+"?autoplay=1" ;
        $(theModal+' iframe').attr('src', videoSRCauto);
        $(theModal+' button.close').click(function () {
            $(theModal+' iframe').attr('src', videoSRC);
        });
    });
    // either of these turn off video when modal closes, but then it won't open again
// $('#videoModal').on('hidden.bs.modal', function () {
//     $('#videoModal .modal-body').html('');
// });

        // $('#videoModal').on('hide.bs.modal', function (e) {
        //     $('div.modal-body div').html('');
        // }); 


}

//the function call:

$(document).ready(function(){
  autoPlayYouTubeModal();

});


