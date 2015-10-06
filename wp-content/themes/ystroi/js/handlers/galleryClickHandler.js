(function($){ $(function() {
    function showGalleryModal(image) {
        var imageBlock = $('#gallery-modal').find('.image');
        image
            .removeAttr('width')
            .removeAttr('height')
        ;
        
        imageBlock.html('').append(image);
        $('#gallery-modal').arcticmodal();
    }
    
    // Add handlers
    $('.gallery--item').on('click', function(ev) {
        ev.preventDefault();
        
        var img = $(this).find('img').clone();
        
        showGalleryModal(img);
    });
    
    $('body').on('click', '.carousel-slides img', function() { 
        showGalleryModal($(this).clone());
    });
}); })(jQuery);
