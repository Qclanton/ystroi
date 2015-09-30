(function($){ $(function() {
    $('#callback_form').on('submit', function(ev) { 
        ev.preventDefault();
        
        // Perepare 
        var data = $(this).serialize() + '&action=send_callback_form';
        var url = '/wp-admin/admin-ajax.php';
        
        // Make request
        $.post(url, data, function(response) {
            if (response == 10 || response == 1) {
                location.reload();
            }         
        });   
    });
}); })(jQuery);
