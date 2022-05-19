<script src="https://maps.googleapis.com/maps/api/js?key=XXX" async="" defer="defer" type="text/javascript"></script>

<div class="content-title">
	<div class="content-title-inner">
		<div class="container">		
			<h1>Contacto</h1>		
			<ol class="breadcrumb">
				<li><a href="<?php echo URLRAIZ ?>/home">Home</a></li>
				<li><a href="<?php echo URLRAIZ ?>/contacto">Contacto</a></li>
			</ol>			
		</div><!-- /.container -->
	</div><!-- /.content-title-inner -->
</div><!-- /.content-title -->

<div class="content">
	<div class="container">
		<div class="row">	
			
			<div class="col-md-8">
			
		    <div id="mensaje"></div>
		    <form id="frmContacto" role="form">
		        
			    <div class="col-sm-6">
			    <div class="form-group">
			    	<label for="ContactNombre">Nombre</label>
			        <input type="text" class="form-control" name="nombre" id="ContactNombre">
			    </div>
			    </div>
		        
		        <div class="col-sm-6">
		        <div class="form-group">
		            <label>E-mail</label>
		            <input type="email" class="form-control" name="email" id="ContactEmail">
		        </div><!-- /.form-group -->
		        </div>

				<div class="col-sm-6">
		        <div class="form-group">
		            <label>Teléfono</label>
		            <input type="text" class="form-control" name="telefono" id="ContactTelefono">
		        </div><!-- /.form-group -->                
		        </div>

		        <div class="col-sm-6">
		        <div class="form-group">
		            <label>Asunto</label>
		            <input type="text" class="form-control" name="asunto" id="ContactAsunto">
		        </div><!-- /.form-group -->                
		        </div>

		        <div class="col-sm-12">
		        <div class="form-group">
		            <label>Consulta</label>
		            <textarea rows="3" class="form-control" name="consulta" id="ContactConsulta"></textarea>
		        </div><!-- /.form-group -->                                
		        </div>
				
				<input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ  ?>">
		        
		        <div class="col-sm-4">
		        <div class="form-group-btn">
		            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
		        </div><!-- /.form-group-btn -->
		        </div>
		    </form>

			</div>

			<div class="col-md-4">
				<div class="widget widget-background-white">
					<div id="google-map-contacto" style="height: 400px;"></div>
				</div>
			</div>


		</div>
	</div>
</div>


<script>

/* ==============================================
Google Map
=============================================== */
$(document).ready(function() {
	'use strict';
			// Map Coordination

			var latlng = new google.maps.LatLng(-32.925439, -68.848558);

			// Map Options
			var myOptions = {
				zoom: 15,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				/*disableDefaultUI: true,*/
				/*scrollwheel: false,*/
				/*draggable: false*/
			};

			var map = new google.maps.Map(document.getElementById('google-map-contacto'), myOptions);

			// Marker Image
			var image = 'images/mano.png';
			
		  	/* ========= First Marker ========= */

		  	// First Marker Coordination
			
			var myLatlng = new google.maps.LatLng(-32.925439, -68.848558);

			// Your Texts 

			 var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h5>' + 'Capello Inmobiliaria' + '</h5>'+
			  
			  '<p>' + 'Dirección : San Martín Sur 150 Godoy Cruz - Mendoza ' + ' <br>'+
			  
			  'Teléfono :  2616844712 / 2615087171</p>'+
			  '</div>';
		
			var marker = new google.maps.Marker({
				  position: myLatlng,
				  map: map,
				  title: 'Capello Inmobiliaria',
				  icon: image
			  });


			var infowindow = new google.maps.InfoWindow({
			  content: contentString
			  });

			  
			 google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			  });

			 /* ========= End First Marker ========= */

			 });	
</script>
