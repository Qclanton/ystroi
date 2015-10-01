(function($){ $(function() {
    // Add handler for progressbars
    var videos = document.getElementsByClassName('main-video');
    
    for (var i=0; i<videos.length; i++) {
        var video = videos[i];
        
        video.addEventListener(
            'timeupdate', 
            function() { 
                var videoId = video.getAttribute('id');
                var progressBar = document.querySelector('progress[data-video-id="' + videoId +'"]');
                var percentage = Math.floor((100 / video.duration) * video.currentTime);
                
                progressBar.value = percentage;
            }, 
            false
        );
    }
    

    // Handle buttons click
    $('.manage-video a').on('click', function(ev) { 
        ev.preventDefault();
        
        var videoId = $(this).attr('data-video-id');
        var video = document.getElementById(videoId);
        var action = $(this).attr('data-action');
        
        switch (action) {
            case 'play/pause':
                if ($(this).hasClass('paused')) {
                    video.play();
                    
                    $(this)
                        .removeClass('paused')
                        .addClass('playing')
                    ;
                } else {
                    video.pause();
                    
                    $(this)
                        .removeClass('playing')
                        .addClass('paused') 
                    ; 
                }
                break;
                
            case 'fullscreen':
                console.log('fullscreen pressed');
                // video.play();
                break;
        }
        
    });   
}); })(jQuery);
