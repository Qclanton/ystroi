(function($){ $(function() {
    // Disable text field
    $('.files-text').on('keydown', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
    });

    // Handle button click
    $('.add-file').on('click', function(ev) {
        ev.preventDefault();
        
        var inputId = $(this).attr('data-input-id');
        var input = $('#'+inputId);
        
        input.click();
    });
    
    
    // Handle file attachment
    $('input[name="files"]').on('change', function() {
        var id = $(this).attr('id'); 
        var files = $(this).prop('files');        
        var textField = $('input.files-text[data-input-id="'+id+'"]');
        var listString = '';
        
        if (textField.length > 0 && files.length > 0) {
            $.each(files, function(index, file) { 
                listString += file.name;
                
                if (index < files.length-1) {
                    listString += '; ';   
                }
            });
            
            textField.val(listString);
            
            // Mark field as filled
            var textFieldName = textField.attr('name');
            var checkerField = $('[data-field="'+textFieldName+'"]');

            if (checkerField.length > 0) {
                checkerField
                    .removeClass('required_unfilled')
                    .addClass('required_filled')
                ;
            }
        }
    });
    
    // Handle file remover
    $('.files-remover').on('click', function(ev) { 
        ev.preventDefault();
        
        var inputId = $(this).attr('data-input-id');
        var input = $('#'+inputId);

        
        // Remove files
        input.attr('files', false);
        
        
        // Mark field as unfilled
        var textField = $('input.files-text[data-input-id="'+inputId+'"]');
        var textFieldName = textField.attr('name');
        var checkerField = $('[data-field="'+textFieldName+'"]');
        
        textField.val('');
        
        if (checkerField.length > 0) {
            checkerField
                .removeClass('required_filled')
                .addClass('required_unfilled')
            ;
        }
        
    });
}); })(jQuery);
