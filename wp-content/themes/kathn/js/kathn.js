(function( $ ) {
	$.throttle = function(fn, threshhold, scope) {
		threshhold || (threshhold = 250);
		var last, deferTimer;
		return function () {
			var context = scope || this;
			var now = +new Date,
				args = arguments;
			if (last && now < last + threshhold) {
				// hold on to it
				clearTimeout(deferTimer);
				deferTimer = setTimeout(function () {
					last = now;
					fn.apply(context, args);
				}, threshhold);
			} else {
			  last = now;
			  fn.apply(context, args);
			}
		};
	}





	$(document).ready(function() {

		var $menu = $(".white-stripe");
		var $menuNextEl = $menu.next();
		var menuHeight = parseInt($menu.outerHeight(true));
		var originalTop = $menu.offset().top;

		$(window).on('scroll', $.throttle(function(e) {
			if( $(window).scrollTop() > originalTop ) {
				if (!$menu.hasClass('sticky-menu') ) {
					console.log('add');
					$menu.addClass('sticky-menu');
					$menuNextEl.css('margin-top', parseInt($menuNextEl.css('margin-top')) + menuHeight);
				}
			} else if( $menu.hasClass('sticky-menu') ) {
				$menu.removeClass('sticky-menu'); 
				$menuNextEl.css('margin-top', parseInt($menuNextEl.css('margin-top')) - menuHeight);
				console.log('remove');
			}
			return;
		}, 50));

	});



	


})(jQuery);

