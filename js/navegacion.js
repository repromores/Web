
/*
Nvegacion menu lateral
*/
var navLat = {
	init : function(){
		NavLat = this;
		NavLat.$menu = $('.menu-left');
		NavLat.$headers = $(".nav-header");
		NavLat.list = ".menu-list";

		NavLat.bindEvents();
		},
		bindEvents: function(){
		NavLat.$headers.on("click", NavLat.headerClicked);
	},
	headerClicked : function(){
	    clase = $(this).data("menu");
	    $(NavLat.list +":not(."+ clase +")").slideUp("fast");
	    $(NavLat.list + "."+clase).slideToggle("fast");
	}
}
navLat.init();

var carousel = {
	init : function(){
		Carousel = this;
		Carousel.clase = ".carousel";
		Carousel.esCiclico = true;
		Carousel.tiempo = 3000;

		if(Carousel.esCiclico){
			Carousel.cycleCarousel();
		}
	},
	cycleCarousel : function(){
		$(Carousel.clase).carousel({interval : Carousel.tiempo})
	}

}
carousel.init();

$(function(){
		$('#myGallery').galleryView({
		transition_speed: 1000, 		//INT - duration of panel/frame transition (in milliseconds)
		transition_interval: 4000, 		//INT - delay between panel/frame transitions (in milliseconds)
		easing: 'swing', 				//STRING - easing method to use for animations (jQuery provides 'swing' or 'linear', more available with jQuery UI or Easing plugin)
		show_panels: true, 				//BOOLEAN - flag to show or hide panel portion of gallery
		show_panel_nav: true, 			//BOOLEAN - flag to show or hide panel navigation buttons
		enable_overlays: true, 			//BOOLEAN - flag to show or hide panel overlays
		
		panel_width: 583, 				//INT - width of gallery panel (in pixels)
		panel_animation: 'slide', 		//STRING - animation method for panel transitions (crossfade,fade,slide,none)
		panel_scale: 'crop', 			//STRING - cropping option for panel images (crop = scale image and fit to aspect ratio determined by panel_width and panel_height, fit = scale image and preserve original aspect ratio)
		overlay_position: 'bottom', 	//STRING - position of panel overlay (bottom, top)
		show_filmstrip: true, 			//BOOLEAN - flag to show or hide filmstrip portion of gallery
		show_filmstrip_nav: true, 		//BOOLEAN - flag indicating whether to display navigation buttons
		enable_slideshow: false,			//BOOLEAN - flag indicating whether to display slideshow play/pause button
		autoplay: true,				//BOOLEAN - flag to start slideshow on gallery load
		show_captions: false, 			//BOOLEAN - flag to show or hide frame captions	
		filmstrip_size: 3, 				//INT - number of frames to show in filmstrip-only gallery
		filmstrip_style: 'scroll', 		//STRING - type of filmstrip to use (scroll = display one line of frames, scroll filmstrip if necessary, showall = display multiple rows of frames if necessary)
		filmstrip_position: 'bottom', 	//STRING - position of filmstrip within gallery (bottom, top, left, right)
		frame_opacity: 0.5, 			//FLOAT - transparency of non-active frames (1.0 = opaque, 0.0 = transparent)
		frame_scale: 'crop', 			//STRING - cropping option for filmstrip images (same as above)
		frame_gap: 5, 					//INT - spacing between frames within filmstrip (in pixels)
		show_infobar: true,				//BOOLEAN - flag to show or hide infobar
		infobar_opacity: 1				//FLOAT - transparency for info bar
		});
	});