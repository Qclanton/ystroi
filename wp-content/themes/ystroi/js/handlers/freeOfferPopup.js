(function($){ $(function() {
    // Disable real checkbox
    $('#free-offer-real-agree-indicator').on('click', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
    });
    
    // Show popup
    $('#free_offer-button, #free-offer-agree-indicator').on('click', function() { 
        $('#free-offer').arcticmodal();
    }); 
    
    // Handle agreement
    $('#free_offer_agree-button').on('click', function() { 
        // Collect user data
        
        // Mark field as checked
        $('#free-offer-agree-indicator')
            .removeClass('required_unfilled')
            .addClass('required_filled')
        ;
        
        $('#free-offer-real-agree-indicator').prop('checked', true);


        // Close modal window
        $('#free-offer').arcticmodal('close');
    }); 
}); })(jQuery);
