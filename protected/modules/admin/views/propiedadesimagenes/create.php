<?php
/* @var $this PropiedadesimagenesController */
/* @var $model Propiedadesimagenes */

$this->breadcrumbs=array(
	'Galeria'=>array('admin','id'=>$_REQUEST['idPropiedad']),
	'Nueva Imágen',
);
 
	$galeria = new Propiedadesimagenes();
	$galeria->idPropiedad = $_REQUEST['idPropiedad']; 

$this->titulo='Nueva Imágen : '.$galeria->propiedad->titulo;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>