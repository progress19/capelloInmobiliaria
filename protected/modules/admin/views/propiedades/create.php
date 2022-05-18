<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */

$this->menu_propiedades = 'active';
$this->menu_propiedades_n = 'active';

$this->breadcrumbs=array(
	'Propiedades'=>array('admin'),
	'Nueva',
);

?>

<?php $this->titulo='<span class="fa fa-fw fa-bars"></span> Nueva Propiedad'; ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>