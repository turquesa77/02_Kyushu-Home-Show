(function($) {
	$(function() {
		var $header = $('nav');
		// Nav Fixed
		$(window).scroll(function() {
			if ($(window).scrollTop() > 350) {
				$header.addClass('fixed');
			} else {
				$header.removeClass('fixed');
			}
		});
		// Nav Toggle Button
		$('#navToggle').click(function(){
			$header.toggleClass('open');
		});
	});
})(jQuery);
