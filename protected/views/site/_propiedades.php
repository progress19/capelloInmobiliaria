<?php 

if (isset($_REQUEST['idTipo'])) {
	$propiedades = Propiedades::getPropiedades($_REQUEST['idTipo'],$_REQUEST['idCondicion'],$_REQUEST['idLocalidad']);	
} else {
	$propiedades = Propiedades::getPropiedadesTodas();	
}



?>

    <div class="row">

      <?php foreach ($propiedades as $propiedad): ?>

        <div class="col-md-6 col-lg-4">
          <div class="listing-box animated fadeIn"> 

            <?php $imagen = Propiedadesimagenes::getImagen($propiedad->idPropiedad);
            if ($imagen) {
              $foto = URLRAIZ.'/pics/propiedades/'.$imagen[0]['imagen'];
            } else {
              $foto = URLRAIZ.'/images/no-image.png';
            }
            ?>

            <div class="listing-box-image" style="background-image: url(<?php echo $foto ?>)">
              <div class="listing-box-image-label"><?php echo $propiedad->tipo->nombre ?></div><!-- /.listing-box-image-label -->

              <span class="listing-box-image-links">
                <a href="<?php echo 'site/propiedadDetalle/'.$propiedad->idPropiedad ;?>"><i class="fa fa-search"></i> <span>Ver detalles</span></a>
              </span>   
            </div><!-- /.listing-box-image -->

            <div class="listing-box-title">
              <h2>
                <a href="<?php echo 'site/propiedadDetalle/'.$propiedad->idPropiedad ;?>"> <?php echo $propiedad->titulo ?> </a>
              </h2>
              <h3> Precio : <?php echo $propiedad->precio ?></h3>
            </div><!-- /.listing-box-title -->

            <div class="listing-box-content">
              <dl>
                <dt>Tipo</dt><dd> <?php echo $propiedad->tipo->nombre ?> </dd>
                <dt>Condición</dt><dd><?php echo $propiedad->condicion->nombre ?></dd>
                <dt>Localidad</dt><dd><?php echo $propiedad->localidad->nombre ?></dd>
              </dl>
            </div><!-- /.listing-box-cotntent -->
          </div><!-- /.listing-box -->      
        </div><!-- /.col-* -->

      <?php endforeach ?>

    </div><!-- /.row -->  


  <script type="text/javascript">

window.parent.$('#cantEncontrados').html("<?php echo count($propiedades) ?>");

  </script>




