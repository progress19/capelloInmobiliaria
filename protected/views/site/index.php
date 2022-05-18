  <div class="map-google-wrapper pull-top">
  
  <div class="map-filter-wrapper">
    <div class="map-filter filter filtro-oscuro">
      
  <?php /** @var TbActiveForm $form */
  $form = $this->beginWidget(
      'booster.widgets.TbActiveForm',
      array(
          'id' => 'horizontalForm',
          //'type' => 'horizontal',
          'htmlOptions' => array(
              'enctype' => 'multipart/form-data',
              ),
          )
      );
    ?>
  
    <div class="form-group">
      <?php echo $form->labelEx(Tipos::model(),'Tipo de Propiedad'); ?>
      <?php echo $form->dropDownList(Tipos::model(),'idTipo', array('0'=>'Todos') +
        CHtml::listData(Tipos::model()->findAll(array('order' => 'nombre ASC')), 'idTipo', 'nombre'),
          array(
           'onchange' => 'mostrarMapa()',
           'class' => 'form-control',
            ))?>
    </div>  

    <div class="form-group">
      <?php echo $form->labelEx(Condiciones::model(),'Condicion'); ?>
      <?php echo $form->dropDownList(Condiciones::model(),'idCondicion', CHtml::listData(Condiciones::model()->findAll(array('order' => 'nombre ASC')), 'idCondicion', 'nombre'),
          array(
           'onchange' => 'mostrarMapa()',
           'class' => 'form-control',
           ))?>
    </div>

    <div class="form-group">
      <?php echo $form->labelEx(Localidades::model(),'Localidad'); ?>
      <?php echo $form->dropDownList(Localidades::model(),'idLocalidad', array('0'=>'Todos') +
        CHtml::listData(Localidades::model()->findAll(array('order' => 'nombre ASC')), 'idLocalidad', 'nombre'),
          array(
           'onchange' => 'mostrarMapa()',
           'class' => 'form-control',
           ))?>
    </div>

    <?php $this->endWidget(); ?>

    <div id="cantEncontrados"></div>
     <p style="color: #FFF; text-align: center;">Propiedades encontradas</p>

    </div><!-- /.filter -->
  </div><!-- /.filter-wrapper -->

   <div id="map-google">
     <iframe frameborder="0" allowtransparency="true"
       src="<?php echo Yii::app()->request->baseUrl?>/site/llenarMapa" style="width: 100%; height: 100%; min-height:450px" scrolling="no">
     </iframe>
  </div> 

</div><!-- /.map-google-wrapper -->

<div class="content fondo">
  <div class="container">

    <div class="page-header">
      <h2><strong><i class="fa fa-home fa-2" aria-hidden="true"></i> PROPIEDADES DESTACADAS</strong></h2>
    </div>

<?php $destacadas = Propiedades::getDestacadas(); ?>

<div class="row">

  <div class="col-md-12 col-lg-12">
    <div class="row">

      <?php foreach ($destacadas as $destacada): ?>

        <div class="col-md-6 col-lg-3">
          <div class="listing-box">

            <?php $imagen = Propiedadesimagenes::getImagen($destacada->idPropiedad);
            if ($imagen) {
              $foto = URLRAIZ.'/pics/propiedades/'.$imagen[0]['imagen'];
            } else {
              $foto = URLRAIZ.'/images/no-image.png';}
            ?>

            <div class="listing-box-image" style="background-image: url(<?php echo $foto ?>)">
              <div class="listing-box-image-label"><?php echo $destacada->tipo->nombre ?></div><!-- /.listing-box-image-label -->

              <span class="listing-box-image-links">
                <a href="<?php echo 'site/propiedadDetalle/'.$destacada->idPropiedad ;?>"><i class="fa fa-search"></i> <span>Ver detalles</span></a>
              </span>   
            </div><!-- /.listing-box-image -->

            <div class="listing-box-title">
              <h2>
                <a href="<?php echo 'site/propiedadDetalle/'.$destacada->idPropiedad ;?>"> <?php echo $destacada->titulo ?> </a>
              </h2>
              <h3> Precio : <?php echo $destacada->precio ?></h3>
            </div><!-- /.listing-box-title -->

            <div class="listing-box-content">
              <dl>
                <dt>Tipo</dt><dd> <?php echo $destacada->tipo->nombre ?> </dd>
                <dt>Condición</dt><dd><?php echo $destacada->condicion->nombre ?></dd>
                <dt>Localidad</dt><dd><?php echo $destacada->localidad->nombre ?></dd>
              </dl>
            </div><!-- /.listing-box-cotntent -->
          </div><!-- /.listing-box -->      
        </div><!-- /.col-* -->

      <?php endforeach ?>

    </div><!-- /.row -->  
  </div><!-- /.col-sm-* -->

</div><!-- /.row -->  

    <div class="" style="text-align: center;">
      <a href="<?php echo URLRAIZ ?>/propiedades" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
 VER TODAS LAS PROPIEDADES</a>
    </div>
    <br>
    <br>

  </div>
</div>