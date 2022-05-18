<?php
/* @var $this TblnoticiasController */
/* @var $data Tblnoticias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNoticia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNoticia), array('view', 'id'=>$data->idNoticia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destacada')); ?>:</b>
	<?php echo CHtml::encode($data->destacada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>