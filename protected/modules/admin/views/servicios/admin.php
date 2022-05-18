<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->menu_servicios = 'active';
$this->menu_servicios_l = 'active';

$this->breadcrumbs=array(
	'Servicios'=>array('admin'),
	'Administrador',
);

$this->titulo='<span class="glyphicon glyphicon-list"></span> Servicios';

$this->menu=array(
	array('label'=>'Servicios', 'url'=>array('index')),
	array('label'=>'Nuevo cliente', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#servicios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="col-md-9">

<div class="box box-success">
    <div class="box-header">
        <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo Servicio</a>
  
<?php

    $this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
    // 40px is the height of the main navigation at bootstrap
    'filter'=>$model,
    'type' => 'striped',
    'dataProvider'=>$model->search(),
    'responsiveTable' => true,
    'template'=>'{summary}{items}{pager}',
    'enablePagination' => true,
    'columns'=>array(
              array(
       'name'=>'titulo',
       'value' => 'CHtml::link($data->titulo, Yii::app()->createUrl("admin/servicios/update",array("id"=>$data->primaryKey)))',
       'headerHtmlOptions'=>array('width'=>'350px'),
       'type'=>'raw'
),
             array(
            'name'=>'imagen',
            'filter'=>'',
            'type'=>'html',
            'value'=>'(!empty($data->imagen))?CHtml::image(Yii::app()->baseUrl."/pics/servicios/".$data->imagen,"",array("style"=>"width:75px")):"no image"',
         ), 
            array(
       'name'=>'posicion',
       'value' => 'CHtml::link($data->posicion, Yii::app()->createUrl("admin/servicios/update",array("id"=>$data->primaryKey)))',
       'type'=>'raw'
),   

         array(  
            'class' => 'booster.widgets.TbToggleColumn',
            'name' => 'estado',
            'header' => 'Estado',
            'filter'=>array('1'=>'Activado','0'=>'Desactivado'),
        ),
 array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
 //  'template' => '{update} {view}',
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("admin/servicios/update?id=$data->idServicio" )', // url de la acción 'update'

    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
       
</div>
</div>

