(function($){ $(function() {
    $('#free_offer_agree-button').on('click', function(ev) {
        ev.preventDefault();
        
        // Perepare 
        var browser = $.browser.name.charAt(0).toUpperCase() + $.browser.name.slice(1);
        var data = 'browser='+browser+'&action=collect_info';
        var url = '/wp-admin/admin-ajax.php';
        
        // Make request
        $.post(url, data);        
    });    
}); })(jQuery);
