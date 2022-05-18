<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */

$this->breadcrumbs=array(
	'Propiedades'=>array('admin'),
	'Editar',
);

$this->menu_propiedades = 'active';

$this->titulo='<span class="fa fa-fw fa-bars"></span> Editar Propiedad';


$this->renderPartial('_form', array('model'=>$model)); ?>