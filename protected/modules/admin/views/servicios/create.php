<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->menu_servicios = 'active';
$this->menu_servicios_n = 'active';

$this->breadcrumbs=array(
	'Servicios'=>array('admin'),
	'Nuevo',
);

$this->titulo='<span class="glyphicon glyphicon-list"></span> Nuevo Servicio ';

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>