(function($){ $(function() {
    // Handle button click 
    $('#sketch-offer').on('click', function(ev) {
        ev.preventDefault();
        
        $('#sketch-offer-wrapper').fadeOut('fast')
        $('#sketch-offer-details').fadeIn('fast');
    });
    
    // Handle outside click
    $('body').on('click', function(ev) { 
        if (
            !($(ev.target).closest("#sketch-offer-wrapper").length > 0) &&
            !($(ev.target).closest("#sketch-offer-details").length > 0) 
        ) {
            var isDetailsShown = !($('#sketch-offer-details').css('display') === 'none');
            
            if (isDetailsShown) {
                $('#sketch-offer-details').fadeOut('fast');  
                $('#sketch-offer-wrapper').fadeIn('fast');            
            }
        }
    })
}); })(jQuery);
