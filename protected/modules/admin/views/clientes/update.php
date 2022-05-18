<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->menu_clientes = 'active';

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Editar',
);

$this->titulo='<span class="glyphicon glyphicon-briefcase"></span> Editar Partners '. $model->cliente;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>