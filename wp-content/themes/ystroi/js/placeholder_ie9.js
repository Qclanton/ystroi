(function($){ $(function() {
	$.fn.placeholder = function(placeholder_class) {
		placeholder_class = placeholder_class || 'placeholder';
		
		this.each(function() {
			var placeholder = $(this).attr('placeholder');
			if (typeof placeholder !== typeof undefined && placeholder !== false) {
				
				// Add placeholder to field				
				$(this).val(placeholder);
				if (!$(this).hasClass(placeholder_class)) {
					$(this).addClass(placeholder_class)
				}
				
				// Add handlers	
				$(this).on('keypress', function(event) {
					if ($(this).val() == placeholder) {
						$(this).val('');
					}
					$(this).removeClass(placeholder_class);

				});
				
				$(this).on('blur', function() {
					var placeholder_value = $(this).val() == '' ? placeholder : $(this).val();
					$(this).val(placeholder_value);
					if (placeholder_value == placeholder) {
						$(this).addClass(placeholder_class);
					}
				});	
			}
		});
	};
	
	$('input').placeholder();
}); })(jQuery);
