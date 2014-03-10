/*
	Original concept by Sam Dunn 	
	Modified by Jake Toolson - February 2013
	Added the ability for the overlay to slide to the full heighth of the parent element.
*/

(function($){

	var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
	
    if( !$.omr )
    {
        $.omr = new Object();
    };
    
    $.omr.tiler = function(el, options){
    
        var base = this;
        
        // Access to jQuery and DOM versions of element
        base.$el = $(el);
        base.el = el;
        
        // Add a reverse reference to the DOM object
        base.$el.data("omr.tiler", base);
        
        base.init = function(){
            base.options = $.extend({},$.omr.tiler.defaultOptions, options);
            
            base.load_box();
        };
        
        // Preload Images
        base.load_box = function(){
        	// Hide until window loaded, then fade in
			if (base.options.preload){
				$(base.options.backdrop, base.el).hide();
				$(base.options.overlay, base.el).hide();
			
				$(window).load(function()
				{
					// IE transparency fade fix
					if(base.options.options.animation == 'fade' && $(base.options.overlay, base.el).css('opacity') == 0 ) $(base.options.overlay, base.el).css('filter', 'alpha(opacity=0)');
					
					$(base.options.overlay, base.el).fadeIn(200, function(){
						$(base.options.backdrop, base.el).fadeIn(200);
					});
					
					base.allow_hover();
				});
			}
			else
			{
				$(base.options.backdrop, base.el).show();
				$(base.options.overlay , base.el).show();
				base.allow_hover();
			}
        };
        
        // Initialize hover animations
        base.allow_hover = function(){
        	// Select animation
			switch(base.options.animation){
			

				case 'fade':
					$(base.el).hover(function () {
			        	$(base.options.overlay, base.el).stop().fadeTo(base.options.speed, base.options.opacity);
			        },function () {
			        	$(base.options.overlay, base.el).stop().fadeTo(base.options.speed, 0);
			      	});
			      	
			    	break;
			    
	      		case 'slide':
	      			// Grab default overlay x,y position
					startX = $(base.options.overlay, base.el).css(base.options.anchor_x) != 'auto' ? $(base.options.overlay, base.el).css(base.options.anchor_x) : '0px';
					startY = $(base.options.overlay, base.el).css(base.options.anchor_y) != 'auto' ? $(base.options.overlay, base.el).css(base.options.anchor_y) : '0px';
					startHeight = $(base.options.overlay, base.el).css('height');
	      			
			      	var hoverState = {};
			      	hoverState[base.options.anchor_x] = base.options.hover_x;
			      	hoverState[base.options.anchor_y] = base.options.hover_y;

			      	
			      	var endState = {};
			      	endState[base.options.anchor_x] = startX;
			      	endState[base.options.anchor_y] = startY;
			      	
			      	if (base.options.grow_full == true)
			      	{
			      		hoverState['height'] = $(base.options.overlay, base.el).parent().css('height');
			      		endState['height'] = startHeight;
			      	}
			      	
					$(base.el).hover(function () {
			        	$(base.options.overlay, base.el).stop().animate(hoverState, base.options.speed);
			        },function () {
			        	$(base.options.overlay, base.el).stop().animate(endState, base.options.speed);
			      	});

			      	
			      	break;
			};
        };

        base.init();
    };
    
    $.omr.tiler.defaultOptions = {
		animation	: 'fade',
		speed		: 150,
		opacity		: 1,
		preload		: 0,
		anchor_x	: 'left',
		anchor_y	: 'bottom',
		hover_x		: '0px',
		hover_y		: '0px',
		grow_full	: true,
        overlay		: '.tile-overlay',
		backdrop	: '.tile-backdrop'
    };
    
    $.fn.tiler = function(options){
        return this.each(function(){
            (new $.omr.tiler(this, options));
        });
    };
    
})(jQuery);