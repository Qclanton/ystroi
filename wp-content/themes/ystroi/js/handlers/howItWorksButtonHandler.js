(function($){ $(function() {
    $('#how-it-works').on('click', function(ev) { 
        ev.preventDefault();
        
        $('.manage-video a[data-video-id="second-video"][data-action="fullscreen"]').click();
        var fullscreenVideo = document.getElementById('fullscreen-second-video');
        fullscreenVideo.play();
    });
}); })(jQuery);
