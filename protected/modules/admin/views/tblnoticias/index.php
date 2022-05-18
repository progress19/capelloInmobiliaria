<?php
/* @var $this TblnoticiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tblnoticiases',
);

$this->menu=array(
	array('label'=>'Create Tblnoticias', 'url'=>array('create')),
	array('label'=>'Manage Tblnoticias', 'url'=>array('admin')),
);
?>

<h1>Tblnoticiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
