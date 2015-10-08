(function($){ $(function() {
    $('#form_main').on('submit', function(ev) { 
        ev.preventDefault();        
        
        var url = '/wp-admin/admin-ajax.php';
        var data = new FormData();
        
        // Add action for AJAX
        data.append('action', 'send_main_form');  
        
        
        // Add text fields
        data.append('main[message]', $(this).find('[name="main[message]"]').val());
        data.append('main[name]', $(this).find('[name="main[name]"]').val()); 
        data.append('main[phone]', $(this).find('[name="main[phone]"]').val()); 
        data.append('main[email]', $(this).find('[name="main[email]"]').val()); 

        
        
        // Add files
        var files = (typeof attachedFiles !== undefined && attachedFiles != []
            ? attachedFiles
            : (this).find('input[type="file"]').prop('files')
        );

             
        $.each(files, function(index, file) { 
            data.append(index, file);
        });
        
        
        // Send form
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response) {
                location.reload();
            }	        
		});
    });
}); })(jQuery);
