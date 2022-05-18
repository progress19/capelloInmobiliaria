<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPropiedad'); ?>
		<?php echo $form->textField($model,'idPropiedad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTipo'); ?>
		<?php echo $form->textField($model,'idTipo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCondicion'); ?>
		<?php echo $form->textField($model,'idCondicion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLocalidad'); ?>
		<?php echo $form->textField($model,'idLocalidad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destacada'); ?>
		<?php echo $form->textField($model,'destacada',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'map'); ?>
		<?php echo $form->textField($model,'map',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'superficie'); ?>
		<?php echo $form->textField($model,'superficie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habitaciones'); ?>
		<?php echo $form->textField($model,'habitaciones',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'baños'); ?>
		<?php echo $form->textField($model,'baños'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cochera'); ?>
		<?php echo $form->textField($model,'cochera',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piscina'); ?>
		<?php echo $form->textField($model,'piscina',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calefaccion'); ?>
		<?php echo $form->textField($model,'calefaccion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escolar'); ?>
		<?php echo $form->textField($model,'escolar',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plantas'); ?>
		<?php echo $form->textField($model,'plantas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luz'); ?>
		<?php echo $form->textField($model,'luz',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gas'); ?>
		<?php echo $form->textField($model,'gas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agua'); ?>
		<?php echo $form->textField($model,'agua',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cloaca'); ?>
		<?php echo $form->textField($model,'cloaca',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internet'); ?>
		<?php echo $form->textField($model,'internet',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tvcable'); ?>
		<?php echo $form->textField($model,'tvcable',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aire'); ?>
		<?php echo $form->textField($model,'aire',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->