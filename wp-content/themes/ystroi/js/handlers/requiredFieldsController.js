(function($){ $(function() {
    $('#form_main input, #form_main textarea').on('keyup focusin focusout', function() {             
        if ($(this).attr('required') === 'required') {
            var fieldName = $(this).attr('name');
            var fieldData = $(this).val();
            var resultField = $('[data-field="'+fieldName+'"]');        

            var isFilled = function(value) {
                var result = false;

                if (
                    typeof value !== typeof undefined &&
                    value.length > 0
                ) {
                    result = true;
                }

                return result; 
            }

            if (resultField.length > 0) {
                if (isFilled(fieldData)) {
                    resultField
                        .removeClass('required_unfilled')
                        .addClass('required_filled')
                    ;
                } else {
                    resultField
                        .removeClass('required_filled')
                        .addClass('required_unfilled')
                    ; 
                }   
            }                 
        }
    });
}); })(jQuery);
