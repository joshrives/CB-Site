function toggleNav() {
	jQuery('.toggle-nav').click(function() {
		jQuery('body').toggleClass('show-nav');
		if(jQuery('body').hasClass('show-nav')) {
			jQuery('.toggle-nav').html('Close');
		} else {
			jQuery('.toggle-nav').html('Menu');
		}
		return false;
	});
}

jQuery(document).ready(function() {
	toggleNav();
});

jQuery(window).load(function() {

});

jQuery(window).resize(function() {
	jQuery('body').removeClass('show-nav');
});