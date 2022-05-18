<?php
/* @var $this TblnoticiasController */
/* @var $model Tblnoticias */


$this->menu_noticias = 'active';

$this->breadcrumbs=array(
	'Noticias'=>array('admin'),
	$model->titulo,
);

$this->titulo='<span class="glyphicon glyphicon-list-alt"></span> Noticia '. $model->titulo;

?>



<div class="col-md-8">
<div class="box box-success">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		'descripcion:html',
        'Noticia destacada' => array(
           'name' => 'destacada',
           'value'=>($model->destacada=="on")?("SI"):("NO"),
		           ),
   		'estado' => array(
           'name' => 'estado',
           'value'=>($model->estado=="1")?("Activado"):("Desactivado"),
		           ),

   	),
)); ?>

<div class="box-footer">

<?php

	echo CHtml::link('<span class="glyphicon glyphicon-trash"></span> Borrar', array('Tblnoticias/delete', 'id'=>$model->idNoticia),
	array(
	'submit'=>array('Tblnoticias/delete', 'id'=>$model->idNoticia),
	'class' => 'btn btn-danger','confirm'=>'Esta seguro de borrar la Noticia?'
	));
?>

<?php
	echo CHtml::link('<span class="glyphicon glyphicon-edit"></span> Editar', array('Tblnoticias/update', 'id'=>$model->idNoticia),
	array(
	'submit'=>array('Tblnoticias/update', 'id'=>$model->idNoticia),
	'class' => 'btn btn-success'
	));
?>
     
</div>

</div>
</div>

<div class="col-md-4">
<div class="box box-success">
	<?php if($model->isNewRecord!='1'){ ?>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/../pics/noticias/'.$model->imagen,"imagen", array('class' => 'img-responsive')); ?>  
	<?php } ?>
</div>
</div>





