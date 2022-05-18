<?php
/* @var $this PromosimagenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promosimagenes',
);

$this->menu=array(
	array('label'=>'Create Promosimagenes', 'url'=>array('create')),
	array('label'=>'Manage Promosimagenes', 'url'=>array('admin')),
);
?>

<h1>Promosimagenes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
