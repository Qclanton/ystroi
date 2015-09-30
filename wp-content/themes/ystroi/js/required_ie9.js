(function($){ $(function() {
	$('form').on('submit', function(event) { 
		event.preventDefault();
		var inputs = $(this).find('input');
		
		inputs.each(function() { 
			if ($(this).attr('required') === 'required') {
				if ($(this).attr('type') === 'checkbox') {
					if (!$(this).prop('checked')) {
						$(this).addClass('validation_failed');
					}
				}
				else {
					var placeholder = $(this).attr('placeholder');
					if ($(this).val() == placeholder || $(this).val() == '') { 
						$(this).addClass('validation_failed');
					}
				}				
			}
		});
		
		$('.validation_failed').on('change', function() { 
			$(this).removeClass('validation_failed');
		});
		
		
		
		if ($(this).find('.validation_failed').length == 0) {
			$(this).submit();
		}
	});
}); })(jQuery);
