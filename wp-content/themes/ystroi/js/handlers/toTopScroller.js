(function($){ $(function() {
    // Tracking of neccessity of showing button
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('#scroller').fadeIn();
		} else {
			$('#scroller').fadeOut();
		}
	});
	
	// Handle click on the scroller
	$('#scroller').click(function(ev) {
        ev.preventDefault();
        
		$('html, body').animate({scrollTop : 0},800);
	});
}); })(jQuery);
