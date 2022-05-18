<?php
/* @var $this PropiedadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propiedades',
);

$this->menu=array(
	array('label'=>'Create Propiedades', 'url'=>array('create')),
	array('label'=>'Manage Propiedades', 'url'=>array('admin')),
);
?>

<h1>Propiedades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
