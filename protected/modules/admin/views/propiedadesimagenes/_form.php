<?php
/* @var $this PromosimagenesController */
/* @var $model Promosimagenes */
/* @var $form CActiveForm */
?>

<?php $this->layout='//layouts/dashboard_admin'; ?>

<?php $this->menu_propiedades = 'active'; ?>

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'horizontalForm',
'type' => 'horizontal',
'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)
);?>


<div class="col-md-9">
	<?php echo $form->errorSummary($model); ?>
</div>

<div class="col-md-9">
<div class="box box-primary">
<div class="box-body">

	<?php echo $form->hiddenField($model,'idPropiedad',array('value'=>$_REQUEST['idPropiedad'])); ?>
	<?php echo $form->hiddenField($model,'estado',array('value'=>1)); ?>

<!--
	<div class="col-md-10">
	<div class="form-group">
		<?php //echo $form->labelEx($model,'Imágen'); ?>
	    <?php //echo CHtml::activeFileField($model, 'imagen'); ?> 
	    <?php //echo $form->error($model,'imagen'); ?>
	</div>
	</div>
-->

<?php 
$this->widget('ext.coco.CocoWidget'
        ,array(
            'id'=>'cocowidget1',
            'onCompleted'=>'function(id,filename,jsoninfo){  }',
            'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
            'onMessage'=>'function(m){ alert(m); }',
            'allowedExtensions'=>array('jpeg','jpg','gif','png'),
            'sizeLimit'=>2000000,
            'uploadDir' => 'pics/propiedades/',
            // para recibir el archivo subido:
            'receptorClassName'=>'application.models.Propiedadesimagenes',
            'methodName'=>'onFileUploaded',
            'userdata'=>7,
        ));
   ?>

<?php Yii::app()->user->setState('idPropiedad',$_REQUEST['idPropiedad']); ?>

</div>

    <div class="box-footer">
    <div class="col-md-12">
      <!--<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Volver</button>-->
      <a class="btn btn-primary" href='<?php echo Yii::app()->createUrl("admin/propiedadesimagenes/admin", array("id"=>$_REQUEST["idPropiedad"]))?>' role="button"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>
      </div><div class="clearfix"></div>
    </div>


</div>
</div>


<?php $this->endWidget(); ?>