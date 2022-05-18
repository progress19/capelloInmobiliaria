<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCliente'); ?>
		<?php echo $form->textField($model,'idCliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente'); ?>
		<?php echo $form->textField($model,'cliente',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'web'); ?>
		<?php echo $form->textField($model,'web',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posicion'); ?>
		<?php echo $form->textField($model,'posicion'); ?>
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