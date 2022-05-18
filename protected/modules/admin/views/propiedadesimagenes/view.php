<script>
	$("#content").removeClass( "fade out" );   
	$("#viewModal").removeClass( "fade" );   
</script>

<?php
/* @var $this PromosimagenesController */
/* @var $model Promosimagenes */

$this->layout='//layouts/';


$this->breadcrumbs=array(
	'Imagen Galeria Propiedad'=>array('admin'),
	$model->idImagen,
);

$this->titulo='Imagen '. $model->imagen;
?>


<?php 
	if($model->isNewRecord!='1'){ ?>
	   <?php echo CHtml::image(Yii::app()->request->baseUrl.'/pics/propiedades/'.$model->imagen,"imagen",array('class' => 'img-responsive' )); ?>  
	<?php } 
?>
