<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */
/* @var $form CActiveForm */
?>

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
);
?>

<div class="col-md-9">
  <?php echo $form->errorSummary($model); ?>
</div>

<div class="col-md-9">
  <div class="box box-primary">
    <div class="box-body">

      <div class="col-md-3">
          <div class="form-group">
             <?php echo $form->labelEx($model,'Orden '); ?>
             <?php echo $form->dropDownList($model,'orden',array (1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12,13=>13,14=>14,15=>15), array ('class' => 'form-control')); ?>
              <?php echo $form->error($model,'orden'); ?>   
          </div>
      </div>

    <div class="clearfix"></div>

    </div>

    <div class="box-footer">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
    </div><div class="clearfix"></div>
    </div>

  </div>
</div><!-- col izq -->

<?php $this->endWidget(); ?>
































