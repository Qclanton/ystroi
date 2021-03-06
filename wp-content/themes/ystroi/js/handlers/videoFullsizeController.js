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
                
                if (percentage !== null) {   
                    progressBar.value = percentage;
                }
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
                var fullscreenModal = $('.fullscreen');
                var fullscreenModalVideo = fullscreenModal.find('.video');
                var $video = $('#' + videoId).parent();                        
                var closed = (fullscreenModalVideo.html() == '');
                
                if (closed) {
                    // Pause video
                    video.pause();                    
                    
                    // Clone video to the modal box
                    var fullscreenVideoWrapper = $video
                        .clone()
                        .removeClass()
                        .addClass('fullscreen-wrapper')
                    ;               
                    
                    // Set new id for fullscreen video
                    fullscreenVideoWrapper.find('#' + videoId).attr('id', 'fullscreen-' + videoId);
                    fullscreenVideoWrapper.find('.manage-video > *').attr('data-video-id', 'fullscreen-' + videoId);       
                                
                    // Put fullscreen video block into modal box
                    fullscreenModalVideo.html('').append(fullscreenVideoWrapper);                    
                    
                    // Get fullscreen video
                    var fullscreenVideo = document.getElementById('fullscreen-' + videoId);
                    
                    // Set time
                    // fullscreenVideo.currentTime = video.currentTime;

                   
                    // Open modal window
                    fullscreenModal.arcticmodal({ 
                        // Function to return in small size
                        afterClose: function() {
                            // Detect video status
                            var isFullscreenVideoPlaying = !fullscreenVideo.paused;
                            
                            // Pause fullscreen video
                            fullscreenVideo.pause();
                            
                            // Set status for 'start/pause' button
                            $(fullscreenVideoWrapper).find('a.video-button[data-action="play/pause"][data-video-id="' + videoId +'"]')
                                .removeClass('playing')
                                .addClass('paused')
                        
                            // Clone time to small video
                            // video.currentTime = fullscreenVideo.currentTime;
                            
                            // Clear block with video
                            fullscreenModalVideo.html('');
                            
                            // Remove special class
                            $('.arcticmodal-container').removeClass('fullscreen-container');
                        }
                    });
                    
                    // Add special class
                    $('.arcticmodal-container').addClass('fullscreen-container');
                    
                    // Set status for 'start/pause' button
                    $(fullscreenVideoWrapper).find('a.video-button[data-action="play/pause"]')
                        .removeClass('playing')
                        .addClass('paused')
                        
                    // Set new handler for 'start/pause' button
                    $(fullscreenVideoWrapper).find('a.video-button[data-action="play/pause"]').on('click', function(ev) {
                        ev.preventDefault();
                        
                        if ($(this).hasClass('paused')) {
                            fullscreenVideo.play();
                            
                            $(this)
                                .removeClass('paused')
                                .addClass('playing')
                            ;
                        } else {
                            fullscreenVideo.pause();
                            
                            $(this)
                                .removeClass('playing')
                                .addClass('paused') 
                            ; 
                        }                      
                    });
                    
                    // Set new handler on the 'fullscreen' button
                    $(fullscreenVideoWrapper).find('a.video-button[data-action="fullscreen"]').on('click', function(ev) {
                        ev.preventDefault();
                        
                        fullscreenModal.arcticmodal('close');                        
                    });
                }              

                break;
        }        
    });
    
    
    // Handle video clicks
    $('.main-video').on('click', function() { 
        var id = $(this).attr('id');
        
        // Emulate button click
        $('.manage-video a[data-action="play/pause"][data-video-id="' + id + '"]').click();
    })
}); })(jQuery);
