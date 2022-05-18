function mostrarMapa() {

	var idTipo = $( "#Tipos_idTipo" ).val();
	var idCondicion = $( "#Condiciones_idCondicion" ).val();
	var idLocalidad = $( "#Localidades_idLocalidad" ).val();

	   $('#cantEncontrados').html('<img src="./images/loader.gif" alt="" />');
	     $.ajax({   
	        url: "site/mostrarMapaAjax",   
	        data: "idTipo="+idTipo+"&idCondicion="+idCondicion+"&idLocalidad="+idLocalidad,   
	        success: function(msg){    
	            $('html, body').animate({scrollTop: $('#map-google').offset().top}, 1000); 
	            $('#map-google').html(msg);
	         } 
	    });
}

function mostrarResultados() {

	var idTipo = $( "#Tipos_idTipo" ).val();
	var idCondicion = $( "#Condiciones_idCondicion" ).val();
	var idLocalidad = $( "#Localidades_idLocalidad" ).val();
	   
	   $('#cantEncontrados').html('<img src="./images/loader.gif" alt="" />');
	     $.ajax({   
	        url: "site/mostrarResultadosAjax",   
	        data: "idTipo="+idTipo+"&idCondicion="+idCondicion+"&idLocalidad="+idLocalidad,   
	        success: function(msg){    
	         //   $('html, body').animate({scrollTop: $('#map-google').offset().top}, 1000); 
	            $('#resultados').html(msg);
	         } 
	    });

}

$(document).ready(function() {
	'use strict';
	
	/**
	 * Image gallery
	 */
	 $('.gallery').owlCarousel({
	 	autoplay: 3000,
	 	items: 1,
	 	nav: true,
	 	navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
	 });



/* FORM CONTACTO */

$("#mensaje").hide();

    $("#frmContacto").validate({
        event: "blur",rules: {'nombre': "required",'email': "required email",'telefono': "required",'consulta': "required"},
        messages: {
            'nombre': "Por favor ingrese su nombre",
            'email': "Ingrese un e-mail válido",
            'telefono': "Ingrese un teléfono válido",
            'consulta': "Por favor, complete el campo"
        },
        debug: true,errorElement: "label",
        submitHandler: function(form){
            $("#frmContacto").hide();
            $("#mensaje").show();
            $("#mensaje").html("<span class='col-md-12' style='text-align:center; top:100px; font-size:18px '><img src='images/ajax_gray.gif' style='vertical-align:middle;margin:0 10px 0 0' />Enviando consulta...</span>");
            $.ajax({
                type: "POST",
                url:$('#URLRAIZ').val()+"/site/enviarcontacto",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "nombre="+escape($('#ContactNombre').val())
                +"&email="+escape($('#ContactEmail').val())
                +"&asunto="+escape($('#ContactAsunto').val())
                +"&telefono="+escape($('#ContactTelefono').val())
                +"&consulta="+escape($('#ContactConsulta').val()),
                success: function(msg){
                    $("#mensaje").html("<div class='row'><span class='col-md-12' style='text-align:center; top:100px; font-size:18px '>Consulta enviada correctamente.<br>En breve recibir&aacute; respuesta.<br>Gracias!</span></div>");
                    setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000000);

                }
            });
        }
    }); 


    $("#mensajeProp").hide();

    $("#frmConsulta").validate({
        event: "blur",rules: {'nombre': "required",'email': "required email",'telefono': "required",'consulta': "required"},
        messages: {
            'nombre': "Por favor ingrese su nombre",
            'email': "Ingrese un e-mail válido",
            'telefono': "Ingrese un teléfono válido",
            'consulta': "Por favor, complete el campo"
        },
        debug: true,errorElement: "label",
        submitHandler: function(form){
            $("#frmConsulta").hide();
            $("#mensajeProp").show();
            $("#mensajeProp").html("<span class='col-md-12' style='text-align:center; top:100px; font-size:18px '><img src='../../images/ajax_gray.gif' style='vertical-align:middle;margin:0 10px 0 0' />Enviando consulta...</span>");
            $.ajax({
                type: "POST",
                url:$('#URLRAIZ').val()+"/site/enviarconsulta",
                contentType: "application/x-www-form-urlencoded",
                processData: true,
                data: "nombre="+escape($('#ContactNombre').val())
                +"&email="+escape($('#ContactEmail').val())
                +"&telefono="+escape($('#ContactTelefono').val())
                +"&consulta="+escape($('#ContactConsulta').val())
                +"&id="+escape($('#idPropiedad').val()),
                success: function(msg){
                    $("#mensajeProp").html("<div class='row'><span class='col-md-12' style='text-align:center; top:100px; font-size:18px '>Consulta enviada correctamente.<br>En breve recibir&aacute; respuesta.<br>Gracias!</span></div>");
                    setTimeout(function() {$('#mensajeProp').fadeOut('fast');}, 3000000);

                }
            });
        }
    }); 

});	 