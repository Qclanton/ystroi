(function($){ $(function() {
	$('a').on('click', function(ev) {
		var link = $(this).attr('href');

		if (
            typeof link !== typeof undefined &&
            link.length > 1 && 
            link[0] === '#'
        ) {
			ev.preventDefault();
			
			var	speed = 1000;
            		
			$('html, body').animate(
                {'scrollTop': $(link).offset().top},
                speed
            );
		}
	});    
}); })(jQuery);
