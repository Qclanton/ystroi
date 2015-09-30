(function($){ $(function() {
    $('#partner_form').on('submit', function(ev) { 
        ev.preventDefault();
        
        // Perepare 
        var data = $(this).serialize() + '&action=send_partner_form';
        var url = '/wp-admin/admin-ajax.php';
        
        // Make request
        $.post(url, data, function(response) {
            if (response == 10 || response == 1) {
                location.reload();
            } else {
                console.log(response);
            }        
        });   
    });
}); })(jQuery);
