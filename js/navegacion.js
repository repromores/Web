
/*
Nvegacion menu lateral
*/
var navLat = {
	init : function(){
		NavLat = this;
		NavLat.$menu = $('.menu-left');
		NavLat.$headers = $(".nav-header");
		NavLat.list = ".menu-list";

		NavLat.initialPosition();
		NavLat.bindEvents();
		},
		bindEvents: function(){
		NavLat.$headers.on("click", NavLat.headerClicked);
	},
	headerClicked : function(a){
		if(typeof a == "object"){
	    	clase = $(this).data("menu");
	    }else{
	    	clase = a;
	    }
	    $(NavLat.list +":not(."+ clase +")").slideUp("fast");
	    $(NavLat.list + "."+clase).slideToggle("fast");
	    localStorage.setItem("menuclicked", clase);
	},
	initialPosition : function(){
		item = localStorage.getItem("menuclicked");
		if(item != null){
			NavLat.headerClicked(item);
		}
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




//Control de plugins


$('.contacto').ajaxForm({
	target: 	'.mensaje-exito',
	clearForm: 	true,
}); 


$(function() {
    $("#uploader").pluploadQueue({
        // General settings
        runtimes : 'html5,gears,flash,silverlight,',
        url : 'inc/subir.php',
        max_file_size : '1024mb',


        // Specify what files to browse for
        filters : [
            {title : "Image files", extensions : "jpg,gif,png,tiff"},
            {title : "Zip files", extensions : "zip,rar"},
            {title : "Adobe files", extensions : "psd,ai,pdf,eps"},
            {title : "Other files", extensions : "dwg"}
        ],
 
        // Flash settings
        flash_swf_url : 'js/plupload/plupload.flash.swf',
 
        // Silverlight settings
        silverlight_xap_url : 'js/plupload/plupload.silverlight.xap',
        

    });
 
    // Client side form validation
    $('#archivos').submit(function(e) {
        var uploader = $('#uploader').pluploadQueue();
 
        // Files in queue upload them first
        if (uploader.files.length > 0) {
            // When all files are uploaded submit form
            uploader.bind('StateChanged', function() {
                if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
                    $('#archivos')[0].submit();
                }
            });
                 
		uploader.start();
		} else {
		       alert('No has adjuntado ningún archivo.');
		}
 
        return false;
    });
	

    $('#uploader').pluploadQueue().bind('FileUploaded', function(up, file, info) {
    	size = file.size;
		size = size/(1024*1024);
		size = size.toFixed(2);
		input = $("#archivossubidos").val();
        $("#archivossubidos").val(input + "<li>" + file.name + " (" +size+"MB)</li>");
   	});
});
