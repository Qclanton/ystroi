(function($){ $(function() {
	$.fn.Carousel = function(slides, buttons, speed, quantity) {
        // Properties
		var slides = slides || [];
		var buttons = buttons || {"back": "<", "forward": ">"};
		var speed = speed || "fast";
        var quantity = quantity || 5;
		
        // Vars
        var wrapper = this;
        var minIndex = 0;
        var maxIndex = slides.length-1;
        
        // Normalize quantity
        if (quantity > slides.length) { 
            quantity = slides.length
        }
         
        
        // Actions
        slides.back = function() {
            var firstShownSlide = wrapper.find('.carousel-slides > .first-shown');
            var firstShownSlideIndex = firstShownSlide.attr('data-slide-index');            
            var prevSlideIndex = firstShownSlideIndex-1;
            
            
            // Create previous slide if ot necessary
            if ($('.carousel-slides > [data-slide-index="'+prevSlideIndex+'"]').length === 0) {
                // Define slides
                var lastSlide = $('.carousel-slides > .last');
                var lastSlideIndex = lastSlide.attr('data-slide-index');
                var penultSlideIndex = lastSlideIndex-1;
                var penultSlide = $('.carousel-slides > [data-slide-index="'+penultSlideIndex+'"]');
                var firstSlide = $('.carousel-slides > .first');
                
                // Decrease values of maximum and minimum index
                maxIndex--;
                minIndex--;
                
                // Unmark first slide
                firstSlide.removeClass('first');                
                
                // Set last slide in the begin
                lastSlide
                    .removeClass('last')
                    .addClass('first')
                    .attr('data-slide-index', minIndex)
                    .hide(speed, function() { 
                		$(this)
                            .css('display', 'none')
                            .prependTo(wrapper.find('.carousel-slides'))
                            .show(speed)
                    }) 
                ;
                
                // Set penult slide as last
                penultSlide.addClass('last');          
            }
            
            
            // Show previous slide and mark it as first shown  
            var prevSlide = $('.carousel-slides > [data-slide-index="'+prevSlideIndex+'"]');
               
            prevSlide
                .show(speed)
                .addClass('first-shown');
            
            
            // Unmark previous first shown slide            
            firstShownSlide.removeClass('first-shown');
            
            
            
            
            // Move last shown slide
            var lastShownSlide = wrapper.find('.carousel-slides > .last-shown');
            var lastShownSlideIndex = lastShownSlide.attr('data-slide-index');
            var penultShownSlideIndex = lastShownSlideIndex-1;
            var penultShownSlide = $('.carousel-slides > [data-slide-index="'+penultShownSlideIndex+'"]');
                    
            lastShownSlide.removeClass('last-shown');
            
            if (slides.length > quantity) {
                lastShownSlide.hide(speed)
            }
            
            penultShownSlide
                .addClass('last-shown')
                .show(speed)
            ;            
        }
        
        slides.forward = function() {      
            var lastShownSlide = wrapper.find('.carousel-slides > .last-shown');  
            var lastShownSlideIndex = lastShownSlide.attr('data-slide-index');            
            var nextSlideIndex = lastShownSlideIndex*1+1;
            
            
            // Create next slide if ot necessary
            if ($('.carousel-slides > [data-slide-index="'+nextSlideIndex+'"]').length === 0) {
                // Define slides
                var firstSlide = $('.carousel-slides > .first');
                var firstSlideIndex = firstSlide.attr('data-slide-index');
                var secondSlideIndex = firstSlideIndex*1+1;
                var secondSlide = $('.carousel-slides > [data-slide-index="'+secondSlideIndex+'"]');
                var lastSlide = $('.carousel-slides > .last');
                
                // Increase values of maximum and minimum index
                maxIndex++;
                minIndex++;
                
                // Unmark last slide
                lastSlide.removeClass('last');
                
                // Set first slide in the end
                firstSlide
                    .removeClass('first')
                    .addClass('last')
                    .attr('data-slide-index', maxIndex)
                    .hide(speed, function() { 
                		$(this)
                            .css('display', 'none')
                            .appendTo(wrapper.find('.carousel-slides'))
                            .show(speed)
                    })
                ;
                
                // Set second slide as first
                secondSlide.addClass('first');          
            }
            
            
            // Show next slide and mark it as last shown
            var nextSlide = $('.carousel-slides > [data-slide-index="'+nextSlideIndex+'"]');
            
            nextSlide
                .show(speed)
                .addClass('last-shown');
            
            
            // Unmark previous last shown slide
            lastShownSlide.removeClass('last-shown');
        
        
            // Move first shown slide
            var firstShownSlide = wrapper.find('.carousel-slides > .first-shown');
            var firstShownSlideIndex = firstShownSlide.attr('data-slide-index');
            var secondShownSlideIndex = firstShownSlideIndex*1+1;
            var secondShownSlide = $('.carousel-slides > [data-slide-index="'+secondShownSlideIndex+'"]');
            
            firstShownSlide.removeClass('first-shown');
            
            if (slides.length > quantity) {
                firstShownSlide.hide(speed)
            }
            
            secondShownSlide
                .addClass('first-shown')
                .show(speed)
            ;  
        }

        
        
		
        
        
        
		// Render slides
		var slides_html = '';
		slides_html +=	'<div class="carousel-slides">';        
		slides.forEach(function(slide, index) { 
            var style = (index < quantity ? '' : 'style="display:none"');
            var classes = 'carousel-slide';
            
            if (index == 0) {
                classes += ' first first-shown';
            }
            
            if (index+1 == quantity) {
                 classes += ' last-shown';
            }
            
            if (index+1 == slides.length) {
                classes += ' last';
            }
            
			slides_html +=	'<img data-slide-index="'+index+'" '+style+' class="'+classes+'" src="'+slide+'"></img>';
		}); 
		slides_html +=	'</div>';
		this.prepend(slides_html);		
		
		
		// Render arrows
		if (slides.length > 1) {
			var arrows_html = '';
			arrows_html +=	'<div class="carousel-arrows">';
			arrows_html +=		'<a href="#" class="carousel-back">'+buttons.back+'</a>';
			arrows_html +=		'<a href="#" class="carousel-forward">'+buttons.forward+'</a>';
			arrows_html +=	'</div>';
			this.append(arrows_html);
		}
		
		
		// Set handler for bullets
		this.on('click', 'a.carousel-back', function(ev) { 
            ev.preventDefault();
            slides.back();	
		});
		this.on('click', 'a.carousel-forward', function(ev) { 
            ev.preventDefault();
            slides.forward();
		});
	}	
}); })(jQuery);
