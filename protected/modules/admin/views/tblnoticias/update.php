<?php
/* @var $this TblnoticiasController */
/* @var $model Tblnoticias */

$this->menu_noticias = 'active';

$this->breadcrumbs=array(
	'Noticias'=>array('admin'),
	'Actualizar',
);

$this->titulo='<i class="fa fa-fw fa-bullhorn"></i> Editar Noticia '. $model->titulo;

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>