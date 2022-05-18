<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCliente), array('view', 'id'=>$data->idCliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('web')); ?>:</b>
	<?php echo CHtml::encode($data->web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posicion')); ?>:</b>
	<?php echo CHtml::encode($data->posicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>