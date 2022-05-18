<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->menu_servicios = 'active';

$this->breadcrumbs=array(
	'Servicios'=>array('admin'),
	'Editar',
);

$this->titulo='<span class="glyphicon glyphicon-list"></span> Editar Servicios '. $model->titulo;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>