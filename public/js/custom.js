jQuery(document).ready(function () {

	var navOffset = jQuery("nav").offset().top;
	
	jQuery("nav").wrap('<div class="nav-placeholder"></div>');
	jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

	jQuery(window).scroll(function () {
		var scrollPos = jQuery(window).scrollTop();
		
		if (scrollPos >= navOffset) {
			jQuery("nav").addClass("fixed");
		} else {
			jQuery("nav").removeClass("fixed");
		}
	})
})

$(function () {
    $('a[href="#srch"]').on('click', function(event) {
        event.preventDefault();
        $('#srch').addClass('open');
        $('#srch > form > input[type="search"]').focus();
    });
    
    $('#srch, #srch button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});
