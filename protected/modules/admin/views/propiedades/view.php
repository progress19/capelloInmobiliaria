<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */

$this->breadcrumbs=array(
	'Propiedades'=>array('index'),
	$model->idPropiedad,
);

$this->menu=array(
	array('label'=>'List Propiedades', 'url'=>array('index')),
	array('label'=>'Create Propiedades', 'url'=>array('create')),
	array('label'=>'Update Propiedades', 'url'=>array('update', 'id'=>$model->idPropiedad)),
	array('label'=>'Delete Propiedades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPropiedad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propiedades', 'url'=>array('admin')),
);
?>

<h1>View Propiedades #<?php echo $model->idPropiedad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPropiedad',
		'idTipo',
		'idCondicion',
		'idLocalidad',
		'titulo',
		'precio',
		'destacada',
		'map',
		'direccion',
		'descripcion',
		'superficie',
		'habitaciones',
		'baños',
		'cochera',
		'piscina',
		'calefaccion',
		'escolar',
		'plantas',
		'telefono',
		'luz',
		'gas',
		'agua',
		'cloaca',
		'internet',
		'tvcable',
		'aire',
		'estado',
	),
)); ?>
