
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
	    $(NavLat.list +":not(."+ clase +")").hide("fast");
	    $(NavLat.list + "."+clase).toggle("fast");
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