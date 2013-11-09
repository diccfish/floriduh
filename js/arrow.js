jQuery.extend( jQuery.easing, {
	def: 'easeInOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[$.easing.def](x, t, b, c, d);
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	}
});

$(document).ready( function($) {
	
	var arrows = $('#land-wrap i');
		
	arrows.click( function(e) {
		e.preventDefault();
		
		var offset_left = false;

		switch( $(this).attr('id') ) {
			case 'arrow-left':
				offset_left = $('#drag').offset().left + 500;
				if ( offset_left > 0 ) {
					offset_left = '0px';
				}
				break;
			case 'arrow-right':
				offset_left = $('#drag').offset().left - 250;
				if ( offset_left < $('body').width() - $('#drag').width() ) {
					offset_left = $('body').width() - $('#drag').width();
				}
				break;
		}
			
		if ( offset_left != false ) {
			if ( $('#drag').width() != $('body').width() ) {
				$('#drag').stop(false, false).animate({
					left: offset_left
				}, 1000, 'easeInOutQuart');
			}
		}
	});
});