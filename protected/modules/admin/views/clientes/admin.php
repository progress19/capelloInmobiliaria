<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->menu_clientes = 'active';
$this->menu_clientes_l = 'active';

$this->breadcrumbs=array(
	'Partners'=>array('admin'),
	'Administrador',
);

$this->titulo='<span class="glyphicon glyphicon-briefcase"></span> Partners';

$this->menu=array(
	array('label'=>'Clientes', 'url'=>array('index')),
	array('label'=>'Nuevo partner', 'url'=>array('create')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="col-md-9">

<div class="box box-success">
    <div class="box-header">
    <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo Partner</a>

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
       'name'=>'cliente',
       'value' => 'CHtml::link($data->cliente, Yii::app()->createUrl("/admin/clientes/update",array("id"=>$data->primaryKey)))',
       'headerHtmlOptions'=>array('width'=>'350px'),
       'type'=>'raw'
),
        array(
            'name'=>'logo',
            'filter'=>'',
            'type'=>'html',
            'value'=>'(!empty($data->logo))?CHtml::image(Yii::app()->baseUrl."/pics/clientes/".$data->logo,"",array("style"=>"width:75px")):"no image"',
         ), 
        array(
           'name'=>'posicion',
           'value' => 'CHtml::link($data->posicion, Yii::app()->createUrl("/admin/clientes/update",array("id"=>$data->primaryKey)))',
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
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("/admin/clientes/update?id=$data->idCliente" )', // url de la acción 'update'
    )
    ),
    )
    );

?>

</div><!-- /.box-header -->
       
</div>
</div>

