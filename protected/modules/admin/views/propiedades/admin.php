<?php
/* @var $this PropiedadesController */
/* @var $model Propiedades */

  $this->menu_propiedades = 'active';
  $this->menu_propiedades_l = 'active';
  $this->titulo='<span class="fa fa-fw fa-bars"></span> Propiedades';

?>
<?php

$this->breadcrumbs=array(
  'Administrador',);

?>  
<div class="col-md-12">  
<div class="box box-primary">
    <div class="box-header">

    <a class="btn btn-primary" href="create" role="button"><span class="glyphicon glyphicon-plus"></span> Nueva Propiedad</a>

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
           'name'=>'idPropiedad',
           'value' => 'CHtml::link($data->idPropiedad, Yii::app()->createUrl("admin/propiedades/update",array("id"=>$data->primaryKey)))',
           'headerHtmlOptions'=>array('width'=>'5px'),
           'type'=>'raw'
        ),

        array(
            'name'=>'orden',
            'htmlOptions'=>array('style' => 'text-align: right;'),
            'headerHtmlOptions'=>array('width'=>'10px'),
        ),

        array(
           'name'=>'titulo',
           'value' => 'CHtml::link($data->titulo, Yii::app()->createUrl("admin/propiedades/update",array("id"=>$data->primaryKey)))',
           'headerHtmlOptions'=>array('width'=>'250px'),
           'type'=>'raw'
        ),
   
        array( 'name'=>'idTipo', 
           'value'=>'isset($data->tipo)? $data->tipo->nombre:"--"',
           'header'=>'Tipo',
           'filter'=> CHtml::listData(Tipos::model()->findAll(array('order'=>'nombre')),'idTipo','nombre'),
           ),

        array( 'name'=>'idCondicion', 
           'value'=>'isset($data->condicion)? $data->condicion->nombre:"--"',
           'header'=>'Condición',
           'filter'=> CHtml::listData(Condiciones::model()->findAll(array('order'=>'nombre')),'idCondicion','nombre'),
           ),

        array( 'name'=>'idLocalidad', 
           'value'=>'isset($data->localidad)? $data->localidad->nombre:"--"',
           'header'=>'Localidad',
           'filter'=> CHtml::listData(Localidades::model()->findAll(array('order'=>'nombre')),'idLocalidad','nombre'),
           ),

        array('name'=>'precio','htmlOptions'=>array('style' => 'text-align: right;')),
  		
    array(
       	'name'=>'destacada',
       	'filter'=>'',
        'header' => 'Destacada',
        'type'=>'raw',
        'value' => '($data->destacada == "on") ? "<a><span class=\"glyphicon glyphicon-ok-circle\"></span></a>" : ""',
    ),
		    
     array(
        'class'=>'CButtonColumn',
        'template'=>'{galeria}',
        'header'=>'Galeria',
        'buttons'=>array
        (  
            'galeria' => array
            (    
                 'label'=>'', 
                 'options'=>array( 'class'=>'glyphicon glyphicon-picture' ),
                 'url'=>'Yii::app()->createUrl("admin/propiedadesimagenes/admin", array("id"=>$data->idPropiedad))',
            ),
          ),
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
    'viewButtonUrl'=>'Yii::app()->createUrl("admin/promos/update?id=$data->idPropiedad" )', // url de la acción 'update'
    'updateButtonUrl'=>'Yii::app()->createUrl("admin/promos/update?id=$data->idPropiedad" )', // url de la acción 'update'
    )

    ),
    )
    );

?>

</div><!-- /.box-header -->
</div>

<!--
		'idPropiedad',
		'idTipo',
		'idCondicion',
		'idLocalidad',
		'titulo',
		'precio',
		'destacada',
		'map',
		'direccion',
		'descripcion',
		'superficie',
		'habitaciones',
		'baños',
		'cochera',
		'piscina',
		'calefaccion',
		'escolar',
		'plantas',
		'telefono',
		'luz',
		'gas',
		'agua',
		'cloaca',
		'internet',
		'tvcable',
		'aire',
		'estado',
-->