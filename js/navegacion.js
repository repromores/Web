
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


$(".galeriaitem").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
});
$(".mapa").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',	
});



var contacto = {
	init : function(){
		Contacto = this;
		Contacto.$form = $(".contacto");
		Contacto.$required = $(".required");
		Contacto.$privacidad = $("#privacidad");
		Contacto.$mensaje = $(".mensaje-error");

		Contacto.bindEvents();
	},
	bindEvents: function(){
		Contacto.$form.on("submit", Contacto.validate);
	},
	validate : function(){
		error = 0;
		Contacto.$required.each(function(index, ele){
			if($.trim($(ele).val()) ==""){
				error++;
				$(ele).parents(".control-group").addClass("error");
			}else{
				$(ele).parents(".control-group").removeClass("error");
			}

		});
		if(!Contacto.$privacidad.is(":checked")){
			error++;
			Contacto.$privacidad.parents(".controls").addClass("error");
		}

		if(error=="0"){
			Contacto.$mensaje.hide();
			return true;
		}else{
			Contacto.$mensaje.show();
			return false;
		}
	}
};

contacto.init();

$('.contacto').ajaxForm({
	target: 	'.mensaje-exito',
	clearForm: 	true,
}); 