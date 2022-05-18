<?php
/* @var $this ClientesController */
/* @var $model Clientes */
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
));
?>	

<div class="col-md-8">
<?php echo $form->errorSummary($model); ?>
</div>

 <!-- Main content -->
          
 	<div class="col-md-8">
 		<div class="box box-success">
 			<div class="box-body">

 				<div class="col-md-6">
 				<div class="form-group">	
 					<?php echo $form->labelEx($model,'Nombre'); ?>
 					<?php echo $form->textField($model,'cliente',array('size'=>60,'maxlength'=>200,'class' => 'form-control')); ?>
 				</div>
 				<?php echo $form->error($model,'nombre'); ?>
				</div>
				<div class="clearfix"></div>

 				<div class="col-md-12">
 				<div class="form-group">
 					<?php echo $form->labelEx($model,'descripcion'); ?>

 					<?php            
 					$this->widget(
 						'booster.widgets.TbCKEditor',
 						array(
 							'attribute' => 'descripcion',
 							'model'=> $model,
 							'value'=> $model->descripcion,
 							'editorOptions' => array(
 								'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
 								)));
 								?>
 							</div>	


 							<div class="form-group">
 								<?php echo $form->labelEx($model,'logo'); ?>
 								<?php echo CHtml::activeFileField($model, 'logo'); ?> 
 								<?php echo $form->error($model,'logo'); ?>
 							</div>

							</div>

    						<div class="col-md-2">
    						<div class="form-group">
								<?php echo $form->labelEx($model,'posicion'); ?>
								<?php echo $form->textField($model,'posicion',array('class' => 'form-control')); ?>
								<?php echo $form->error($model,'posicion'); ?>
							</div>
							</div>
							<div class="clearfix"></div>

							<div class="col-md-3"> 							
 							<div class="form-group">
 								<?php echo $form->labelEx($model,'Estado '); ?>
 								<?php echo $form->dropDownList($model,'estado',array (1=>'Activado','0'=>'Desactivado'), array ('class' => 'form-control')); ?>
 							</div>
 							<?php echo $form->error($model,'estado'); ?>
							</div>
						<div class="clearfix"></div>							

 						</div><!-- /.box-body -->

 						<div class="box-footer">
 							<div class="col-md-12">
 								<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
 							</div><div class="clearfix"></div>
 						</div>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-8 -->

 				<!-- derecha -->
 				<div class="col-md-4">
 					<!-- general form elements -->
 					<div class="box box-success">

 						<?php if($model->isNewRecord!='1'){ ?>
 						<?php echo CHtml::image(Yii::app()->request->baseUrl.'/pics/clientes/'.$model->logo,"logo"); ?>  
 						<?php } ?>

 					</div><!-- /.box -->
 				</div><!-- /.col-lg-6 -->

<?php $this->endWidget(); ?>