(function($){ //create closure so we can safely use $ as alias for jQuery

	// Skip Link
	$(".tab_accessibility").focus(function(){
		$(this).addClass("tab_visible");
	});

	// Dropdown mobile menu
	//$('#main-nav').addClass('menu-closed');

	// Show or hide menu
	/*$('.mobile-menu-button').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('mobile-menu-clicked');
		$('#main-nav').toggleClass('mobile-menu-expand');
	});*/

	// Superfish menu
	// Kill superfish for mobile view
	var windowWidth = $(window).width();
	function superfishInitialise() {
		if (windowWidth > 768) {

		// Superfish setup

				$('#main-menu').superfish({
					delay:       100,								// 0.1 second delay on mouseout 
					speed:       'fast',
					animation:   {opacity:'show',height:'show'},	// fade-in and slide-down animation 
					dropShadows: false								// disable drop shadows 
			});
		} else {
			$('#main-menu').superfish('destroy');
		}
	}
	superfishInitialise();
	$( window ).resize(function() {
  		windowWidth = $(window).width();
  		superfishInitialise();
	
});
})(jQuery);