(function($){ $(function() {
    $('#form_main').on('submit', function(ev) { 
        ev.preventDefault();        
        
        var url = '/wp-admin/admin-ajax.php';
        var data = FormData(this);
        data.append('action', 'send_partner_form');   
        
        // Here will be ajax-function for handle form
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
