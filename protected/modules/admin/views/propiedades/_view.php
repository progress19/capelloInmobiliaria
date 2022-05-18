<?php
/* @var $this PropiedadesController */
/* @var $data Propiedades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPropiedad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPropiedad), array('view', 'id'=>$data->idPropiedad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipo')); ?>:</b>
	<?php echo CHtml::encode($data->idTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCondicion')); ?>:</b>
	<?php echo CHtml::encode($data->idCondicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLocalidad')); ?>:</b>
	<?php echo CHtml::encode($data->idLocalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destacada')); ?>:</b>
	<?php echo CHtml::encode($data->destacada); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('map')); ?>:</b>
	<?php echo CHtml::encode($data->map); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superficie')); ?>:</b>
	<?php echo CHtml::encode($data->superficie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habitaciones')); ?>:</b>
	<?php echo CHtml::encode($data->habitaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baños')); ?>:</b>
	<?php echo CHtml::encode($data->baños); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cochera')); ?>:</b>
	<?php echo CHtml::encode($data->cochera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piscina')); ?>:</b>
	<?php echo CHtml::encode($data->piscina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calefaccion')); ?>:</b>
	<?php echo CHtml::encode($data->calefaccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolar')); ?>:</b>
	<?php echo CHtml::encode($data->escolar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plantas')); ?>:</b>
	<?php echo CHtml::encode($data->plantas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luz')); ?>:</b>
	<?php echo CHtml::encode($data->luz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gas')); ?>:</b>
	<?php echo CHtml::encode($data->gas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agua')); ?>:</b>
	<?php echo CHtml::encode($data->agua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cloaca')); ?>:</b>
	<?php echo CHtml::encode($data->cloaca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet')); ?>:</b>
	<?php echo CHtml::encode($data->internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tvcable')); ?>:</b>
	<?php echo CHtml::encode($data->tvcable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aire')); ?>:</b>
	<?php echo CHtml::encode($data->aire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>