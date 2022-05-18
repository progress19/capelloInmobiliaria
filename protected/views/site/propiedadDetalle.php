<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBhh9bdv02x8XPknaSceyUsPFrz6ap4SE" type="text/javascript"></script>

<?php $propiedad = Propiedades::getPropiedad($_REQUEST['id']); ?>
<?php $imagenes = Propiedadesimagenes::getImagenes($_REQUEST['id']); ?>

<?php $linksocial = Yii::app()->getBaseUrl(true).'/site/propiedadDetalle/'.$propiedad->idPropiedad; ?>

<div class="content-title">
	<div class="content-title-inner">
		<div class="container">		
			<h1><?php echo $propiedad->titulo ?></h1>		

			<ol class="breadcrumb">
				<li><a href="<?php echo URLRAIZ ?>/home">Home</a></li>
				<li><a href="<?php echo URLRAIZ ?>/propiedades">Propiedades</a></li>
				<li class="active">Detalles</li>
			</ol>			
		</div><!-- /.container -->
	</div><!-- /.content-title-inner -->
</div><!-- /.content-title -->

<div class="content">
   <div class="container">
    <div class="row">
     
<div class="col-sm-12">
<div class="listing-detail-attributes">

    <div class="listing-detail-attribute">
        <div class="key">Tipo</div>
        <div class="value"><?php echo $propiedad->tipo->nombre ?></div>
    </div><!-- /.listing-detail-attribute -->                                             
                            
    <div class="listing-detail-attribute">
        <div class="key">Condición</div>
        <div class="value"><?php echo $propiedad->condicion->nombre ?></div>
    </div><!-- /.listing-detail-attribute -->

    <div class="listing-detail-attribute">
        <div class="key">Localidad</div>
        <div class="value"><?php echo $propiedad->localidad->nombre ?></div>
    </div><!-- /.listing-detail-attribute -->

    <div class="listing-detail-attribute">
        <div class="key">Precio</div>
        <div class="value"><?php echo $propiedad->precio ?></div>
    </div><!-- /.listing-detail-attribute -->

</div><!-- /.listing-detail-attributes -->            
</div><!-- /.col-sm-12 -->

    <div class="listing-detail col-md-7 col-lg-8">
		
		<div class="gallery">
		    
		    <?php if ($imagenes): ?>
		    	
			    <?php foreach ($imagenes as $imagen): ?>
			    
			    <div class="gallery-item" style="background-image: url('<?php echo URLRAIZ.'/pics/propiedades/'.$imagen->imagen ?>');">
			    </div>

			    <?php $face_imagen=Yii::app()->getBaseUrl(true).'/pics/propiedades/'. $imagen->imagen; ?>

			    <?php endforeach ?>

			<?php else: ?>

				<div class="gallery-item" style="background-image: url('<?php echo URLRAIZ.'/images/no-image.png' ?>');">
			    </div>

		    <?php endif ?>
		    
    	</div><!-- /.gallery -->

<div class="row">            
    <div class="col-lg-4">
        <div class="overview">
            <ul>
                <li><strong>Precio</strong><span> <?php echo $propiedad->precio ?> </span></li> 
                <li><strong>Localidad</strong><span> <?php echo $propiedad->localidad->nombre ?> </span></li>
                <li><strong>Tipo</strong><span><?php echo $propiedad->tipo->nombre ?> </span></li>
                <li><strong>Condicion</strong><span><?php echo $propiedad->condicion->nombre ?> </span></li>
                <li><strong>Plantas</strong><span> <?php echo $propiedad->plantas ?> </span></li>
                <li><strong>Habitaciones</strong><span> <?php echo $propiedad->habitaciones ?> </span></li>
                <li><strong>Baños</strong><span> <?php echo $propiedad->baños ?> </span></li>
                <li><strong>Superficie</strong><span><?php echo $propiedad->superficie ?></span></li>                    
            </ul>
        </div><!-- /.overview -->
    </div><!-- /.col-* -->

    <div class="col-lg-8">
		<strong>Dirección : </strong> <?php echo $propiedad->direccion; ?> <br> <br>
		<strong>Descripción : </strong><?php echo $propiedad->descripcion; ?>
    </div><!-- /.col-* -->

</div><!-- /.row -->            

<ul class="amenities">
    
	<?php $class = ($propiedad->cochera == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Cochera</li>

	<?php $class = ($propiedad->piscina == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Piscina</li>

	<?php $class = ($propiedad->calefaccion == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Calefacción</li>
		
	<?php $class = ($propiedad->escolar == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Zona Escolar</li>

	<?php $class = ($propiedad->telefono == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Teléfono</li>

	<?php $class = ($propiedad->luz == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Luz</li>

	<?php $class = ($propiedad->gas == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Gas</li>

	<?php $class = ($propiedad->agua == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Agua</li>

	<?php $class = ($propiedad->cloaca == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Cloaca</li>

	<?php $class = ($propiedad->internet == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Internet</li>

	<?php $class = ($propiedad->tvcable == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Tv Cable</li>

	<?php $class = ($propiedad->aire == 'on') ? 'yes' : 'no'; ?>
	<li class="<?php echo $class; ?>">Aire Acondicionado</li>
		
</ul>    

<hr style="margin: 0 0 15px 0;">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=324844947896951";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

        </div><!-- /.col-* -->
        <div class="col-md-5 col-lg-4">
 
<div class="widget widget-background-white">
    <h3 class="widgettitle">Consultá por esta propiedad</h3>
    <div id="mensajeProp"></div>
    <form id="frmConsulta" role="form">
        
	    <div class="form-group">
	    	<label for="ContactNombre">Nombre</label>
	        <input type="text" class="form-control" name="nombre" id="ContactNombre">
	    </div>
        
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" id="ContactEmail">
        </div><!-- /.form-group -->

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="ContactTelefono">
        </div><!-- /.form-group -->                

        <div class="form-group">
            <label>Consulta</label>
            <textarea rows="3" class="form-control" name="consulta" id="ContactConsulta"></textarea>
        </div><!-- /.form-group -->                                
		
		<input type="hidden" class="form-control" name="url" id="URLRAIZ" value="<?php echo URLRAIZ  ?>">
		<input type="hidden" class="form-control" name="idPropiedad" id="idPropiedad" value="<?php echo $propiedad->idPropiedad; ?>">
        
        <div class="form-group-btn">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </div><!-- /.form-group-btn -->
    </form>
</div><!-- /.widget -->

<div class="widget widget-background-white">
	<div id="google-map-detalle" style="height: 400px;"></div>
</div>
         
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.content -->

<?php 

/* og face */
$this->face_titulo = $propiedad->titulo;
$this->face_descripcion = $propiedad->descripcion;
$this->face_link = $linksocial;
$this->face_imagen = $face_imagen;

?> 

<script>

/* ==============================================
Google Map
=============================================== */
$(document).ready(function() {
	'use strict';
			// Map Coordination

			var latlng = new google.maps.LatLng(<?php echo $propiedad->map; ?>);

			// Map Options
			var myOptions = {
				zoom: 15,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				/*disableDefaultUI: true,*/
				/*scrollwheel: false,*/
				/*draggable: false*/
			};

			var map = new google.maps.Map(document.getElementById('google-map-detalle'), myOptions);

			// Marker Image
			var image = '../../images/mano.png';
			
		  	/* ========= First Marker ========= */

		  	// First Marker Coordination
			
			var myLatlng = new google.maps.LatLng(<?php echo $propiedad->map; ?>);

			// Your Texts 

			 var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h5>' + ' <?php echo $propiedad->titulo; ?> ' + '</h5>'+
			  
			  '<p>' + ' <?php echo $propiedad->direccion; ?> ' +
			  ' <?php echo $propiedad->localidad->nombre; ?> <br>'+
			  
			  '</p>'+
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