
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


$(".galeriaitem").fancybox();