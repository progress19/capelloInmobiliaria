<?php
/* @var $this TblnoticiasController */
/* @var $model Tblnoticias */

$this->menu_noticias = 'active';
$this->menu_noticias_l = 'active';

$this->breadcrumbs=array(
	'Noticias'=>array('admin'),
	'Administrador',
);

$this->titulo='<i class="fa fa-fw fa-bullhorn"></i> Noticias';


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tblnoticias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="col-md-9">

<div class="box box-success">
    <div class="box-header">
    <a class="btn btn-success" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nueva Noticia</a>


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
       'value' => 'CHtml::link($data->titulo, Yii::app()->createUrl("admin/tblnoticias/update",array("id"=>$data->primaryKey)))',
       'headerHtmlOptions'=>array('width'=>'450px'),
       'type'=>'raw'
),
             array(
            'name'=>'imagen',
            'filter'=>'',
            'type'=>'html',
            'value'=>'(!empty($data->imagen))?CHtml::image(Yii::app()->baseUrl."/pics/noticias/".$data->imagen,"",array("style"=>"width:75px")):"no image"',
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
            'viewButtonUrl'=>'Yii::app()->createUrl("/admin/tblnoticias/update?id=$data->idNoticia" )', // url de la acción 'update'
            )
    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>  



