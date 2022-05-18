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
    
      <div class="col-md-6">
      <div class="form-group">
          <?php echo $form->labelEx($model,'titulo'); ?>
          <?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
          <?php echo $form->error($model,'titulo'); ?>
        </div>
      </div>  

      <div class="clearfix"></div>

          <div class="col-md-3">
          <div class="form-group">
              <?php echo $form->labelEx($model,'Tipo'); ?>
              <?php echo $form->dropDownList($model,'idTipo', CHtml::listData(Tipos::model()->findAll(array('order' => 'nombre ASC')), 'idTipo', 'nombre'), array('empty'=>'Seleccione Tipo','class' => 'form-control'))?>
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
              <?php echo $form->labelEx($model,'Condición'); ?>
              <?php echo $form->dropDownList($model,'idCondicion', CHtml::listData(Condiciones::model()->findAll(array('order' => 'nombre ASC')), 'idCondicion', 'nombre'), array('empty'=>'Seleccione Condición','class' => 'form-control'))?>
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
              <?php echo $form->labelEx($model,'Localidad'); ?>
              <?php echo $form->dropDownList($model,'idLocalidad', CHtml::listData(Localidades::model()->findAll(array('order' => 'nombre ASC')), 'idLocalidad', 'nombre'), array('empty'=>'Seleccione Localidad','class' => 'form-control'))?>
          </div>
          </div>

          <div class="clearfix"></div>

        <div class="col-md-5">
          <div class="form-group">
            <?php echo $form->labelEx($model,'Dirección'); ?>
            <?php echo $form->textField($model,'direccion',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'direccion'); ?>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <?php echo $form->labelEx($model,'Map'); ?>
            <?php echo $form->textField($model,'map',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'map'); ?>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <?php echo $form->labelEx($model,'Precio'); ?>
            <?php echo $form->textField($model,'precio',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'precio'); ?>
          </div>
        </div>

<div class="clearfix"></div>

    <div class="col-md-12">
    <div class="form-group">
      <?php echo $form->labelEx($model,'descripcion'); ?>
      <?php $this->widget('booster.widgets.TbCKEditor',
        array('attribute' => 'descripcion',
          'model'=> $model,
          'value'=> $model->descripcion,
          'editorOptions' => array(
            'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
            )));
            ?>
          </div>
          </div>

<div class="clearfix"></div>

        <div class="col-md-2">
          <div class="form-group">
            <?php echo $form->labelEx($model,'superficie'); ?>
            <?php echo $form->textField($model,'superficie',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'superficie'); ?>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <?php echo $form->labelEx($model,'habitaciones'); ?>
            <?php echo $form->textField($model,'habitaciones',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'habitaciones'); ?>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <?php echo $form->labelEx($model,'baños'); ?>
            <?php echo $form->textField($model,'baños',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'baños'); ?>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <?php echo $form->labelEx($model,'plantas'); ?>
            <?php echo $form->textField($model,'plantas',array('class' => 'form-control')); ?>
            <?php echo $form->error($model,'plantas'); ?>
          </div>
        </div>

        <div class="clearfix"></div>

<div class="col-md-4" style="padding-left: 0;">
<div class="panel panel-default">
<div class="panel-heading">Opciones de Publicación</div>
  <div class="panel-body">

<div class="col-md-12">
<div class="form-group">

<?php echo $form->labelEx($model,'destacada', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'destacada', array('value'=>'on', 'uncheckValue'=>'')); ?>

</div> 
</div>
</div>

</div>
</div>

<div class="col-md-8" style="padding-left: 0;">
<div class="panel panel-default">
<div class="panel-heading">Items</div>
<div class="panel-body">      


<div class="col-md-12">
<div class="form-group">

<?php echo $form->labelEx($model,'cochera', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'cochera', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'piscina', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'piscina', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'calefaccion', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'calefaccion', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'escolar', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'escolar', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'telefono', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'telefono', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'luz', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'luz', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'agua', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'agua', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'gas', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'gas', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'cloaca', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'cloaca', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'internet', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'internet', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'tvcable', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'tvcable', array('value'=>'on', 'uncheckValue'=>'')); ?>

<?php echo $form->labelEx($model,'aire', array('style' => 'padding-right: 10px;')); ?>
<?php echo $form->checkBox($model,'aire', array('value'=>'on', 'uncheckValue'=>'')); ?>

</div> 
</div>
</div> 

</div>
</div>

<div class="col-md-3">
    <div class="form-group">
      <?php echo $form->labelEx($model,'Orden '); ?>
      <?php echo $form->numberField($model,'orden', array ('class' => 'form-control')); ?>
      <?php echo $form->error($model,'orden'); ?>   
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-3">
<div class="form-group">
   <?php echo $form->labelEx($model,'Estado '); ?>
   <?php echo $form->dropDownList($model,'estado',array (1=>'Activado','0'=>'Desactivado'), array ('class' => 'form-control')); ?>
    <?php echo $form->error($model,'estado'); ?>   
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
































