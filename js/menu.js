jQuery(document).ready(function() {
	if(jQuery(window).width() >= 768)
	{
		jQuery('.navbar-default .navbar-nav > li.dropdown').hover(function() {
			jQuery('ul.dropdown-menu', this).stop(true, false).slideDown(400);
			jQuery(this).addClass('open');
		}, function() {
			jQuery('ul.dropdown-menu', this).stop(true, false).slideUp(400);
			jQuery(this).removeClass('open');
		});
	}
});