/**
 * Theme: Flat Bootstrap
 * @package flat-bootstrap
 */
 
$(document).ready(function(){
    
    // BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
    // Modal Window for dynamically opening videos
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.on('click', function(e){

        // Prevent opening of external page
        e.preventDefault();

        // Get YouTube URL from data-theVideo attribute from page
        var videoSRC = $(this).attr( "data-theVideo" );
        var iFrameCode = '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><div><iframe width="100%" height="350" style="border:12px solid #14343a;" src="' + videoSRC + '?autoplay=1"></iframe></div>';

        // Replace Modal HTML with iFrame Embed
        $('#videoModal .modal-body').html(iFrameCode);

        // Open Modal
        $('#videoModal').modal('toggle');
    
    });

    // Clear modal contents on close. 
    // There was mention of videos that kept playing in the background.
    $('#videoModal').on('hidden.bs.modal', function () {
        $('#videoModal .modal-body').html('');
    });

    // Prevent parent pages of Site Content sidebar menu (search pages) from linking to non-existent pages //
    $(".page_item_has_children > a").removeAttr("href");


}); 

  $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }