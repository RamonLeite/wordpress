( function( $ ) {
	$(document).ready(function() {
		
		if( $(window).width() > 943 )
		{
			
			//for default menu sticky
			$(window).scroll(function () {
				
				var h = $('#navbar').height();
				
				if( $(this).scrollTop() > h )
				{
					$('#navbar').addClass('seopress_sticky_menu_top');
				}
				else
				{
					$('#navbar').removeClass('seopress_sticky_menu_top');
				}
				
			});
			//for default menu sticky END

			
			//for other menu sticky
			$(window).scroll(function () {
				
				var h = $('.mega-menu-wrap').height();
				
				if( $(this).scrollTop() > h )
				{
					$('.mega-menu-wrap').addClass('seopress_sticky_menu_top');
				}
				else
				{
					$('.mega-menu-wrap').removeClass('seopress_sticky_menu_top');
				}
				
			});
			//for other menu sticky END
			
		}
	});
})( jQuery );
