(function($){ $(function() {
    $('#form_vacancy').on('submit', function(ev) { 
        ev.preventDefault();        
        
        var url = '/wp-admin/admin-ajax.php';
        var data = new FormData();
        
        // Add action for AJAX
        data.append('action', 'send_vacancy_form');  
        
        
        // Add text fields
        data.append('vacancy[job]', $(this).find('[name="vacancy[job]"]').val());
        data.append('vacancy[name]', $(this).find('[name="vacancy[name]"]').val()); 
        data.append('vacancy[phone]', $(this).find('[name="vacancy[phone]"]').val()); 
        data.append('vacancy[email]', $(this).find('[name="vacancy[email]"]').val()); 
        data.append('vacancy[message]', $(this).find('[name="vacancy[message]"]').val()); 

        
        
        // Add files
        var files = $(this).find('input[type="file"]').prop('files');   
             
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
