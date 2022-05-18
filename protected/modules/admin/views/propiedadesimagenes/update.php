<?php
/* @var $this PropiedadesimagenesController */
/* @var $model Propiedadesimagenes */

$this->breadcrumbs=array(
	'Imágenes Propiedades'=>array('admin','id'=>$model->idPropiedad),
	'Editar',
);

$this->titulo='Editar imágen '. $model->imagen;

?>

<?php $this->renderPartial('_formOrden', array('model'=>$model)); ?>