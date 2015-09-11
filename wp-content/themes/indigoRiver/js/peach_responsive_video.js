(function( $ ) {
 
    $.fn.peach_video = function( options ) {

		var id = this;


    // Setup default options for slider.
        var settings = $.extend({
            // These are the defaults.
            color: "#000000",
            background: "#FFFFFF"
        }, options );

        id.wrap( "<div class='peach_video'></div>");

        id.css("width", "100%");
        var minWidth = $(".peach_video").parent().height() * 2;
        $(".peach_video").css("min-width",  minWidth);
        //var parentHeight = $(".peach_video").parent().height();
        //id.css("min-height", parentHeight)
        
        function resize() {
	        var parent = $(".peach_video").parent();
	    	var parentDimensions = parent.height() * parent.width();
	    	var child = $('.peach_video');
	    	var childDimensions = child.height() * child.width();
			child.css({top: parent.height()/2 - child.height()/2 , left: parent.width()/2 - child.width()/2 });
		}

		resize();

        $( window ).resize(function() {
			resize();
			//id.css("width", "100%");
		});


    }

}( jQuery ));