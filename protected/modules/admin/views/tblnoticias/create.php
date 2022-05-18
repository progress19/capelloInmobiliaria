<?php
/* @var $this TblnoticiasController */
/* @var $model Tblnoticias */

$this->menu_noticias = 'active';
$this->menu_noticias_n = 'active';

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Nueva Noticia',
);

$this->titulo='<i class="fa fa-fw fa-bullhorn"></i> Nueva Noticia';

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>