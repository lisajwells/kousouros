/**
 * Theme: Flat Bootstrap
 * 
 * Javascript for touch-enabled carousels and smooth scrolling internal links.
 *
 * @package flat-bootstrap
 */
 
( function( $ ) {

	// Bootstrap youtube modal
	// $(function () {
	// 	$(".youtube").YouTubeModal({autoplay:0, width:640, height:480});
	// });

// $('#exampleModal').on('show.bs.modal', function (event) {
//   var button = $(event.relatedTarget) // Button that triggered the modal
//   var recipient = button.data('whatever') // Extract info from data-* attributes
//   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//   var modal = $(this)
//   // modal.find('.modal-title').text('New message to ' + recipient)
//   $('#exampleModal .modal-body').html(recipient);
//   // modal.find('.modal-body').html(recipient)
// })

  // autoPlayYouTubeModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  // function autoPlayYouTubeModal() {
  //     var trigger = $("body").find('[data-toggle="modal"]');
  //     trigger.click(function () {
  //         var theModal = $(this).data("target"),
  //             videoSRC = $(this).attr("data-theVideo"),
  //             videoSRCauto = videoSRC + "?autoplay=1";
  //         $(theModal + ' iframe').attr('src', videoSRCauto);
  //         $(theModal + ' button.close').click(function () {
  //             $(theModal + ' iframe').attr('src', videoSRC);
  //         });
  //         $('.modal').click(function () {
  //             $(theModal + ' iframe').attr('src', videoSRC);
  //         });
  //     });
  // };


  /////////


  // this is stashed for cookie experiment for opener modal
//   $(document).ready(function() {
//     if ($.cookie('modal_shown') == null) {
//         $.cookie('modal_shown', 'yes', { expires: 1, path: '/' });
//         $('#myModal').reveal();
//     }
// });


} )( jQuery );