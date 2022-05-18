<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->menu_clientes = 'active';
$this->menu_clientes_n = 'active';

$this->breadcrumbs=array(
	'Partners'=>array('admin'),
	'Nuevo',
);

$this->titulo='<span class="glyphicon glyphicon-briefcase"></span> Nuevo Partner '. $model->cliente;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>