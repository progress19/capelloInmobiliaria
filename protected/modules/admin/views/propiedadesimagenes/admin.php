<?php
/* @var $this PropiedadesiagenesController */
/* @var $model Propiedadesimagenes */

  $this->menu_propiedades = 'active';
  $this->menu_propiedades_l = 'active';


$this->breadcrumbs=array(
	'Galeria'
);

/* GALERIA */
  $galeria = new Propiedadesimagenes();
  $galeria->idPropiedad = $_REQUEST['id']; // IMPORTANTE!!!
    if (isset($_GET['Propiedadesimagenes'])) {
        $galeria->attributes = $_GET['Propiedadesimagenes'];
    }

$this->titulo='Galeria '.$galeria->propiedad->titulo;

?>

<div class="col-md-6">

<div class="box box-primary">
    <div class="box-header">
    <h3 class="box-title"></h3>
     <a class="btn btn-primary" href="<?php echo URLRAIZ ?>/admin/propiedadesimagenes/create?idPropiedad=<?php echo $galeria->idPropiedad?>" role="button"><span class="glyphicon glyphicon-plus"></span> Nueva Imágen</a>

  <?php

   /* GALERIA */
    $this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
    'filter'=>$galeria,
    'type' => 'striped',
    'dataProvider'=>$galeria->search(),
    'responsiveTable' => true,
    'template'=>'{summary}{items}{pager}',
    'enablePagination' => true,
    'columns'=>array(
        

    array('name'=>'orden','htmlOptions'=>array('style' => 'text-align: right;')), 


          array(
           	'name'=>'imagen',
            'filter'=>'',
            'type'=>'html',
'value'=>'(!empty($data->imagen))?CHtml::image(Yii::app()->baseUrl."/pics/propiedades/".$data->imagen,"",array("style"=>"width:150px")):"no imagen"'),
          
         array(  
            'class' => 'booster.widgets.TbToggleColumn',
            'toggleAction' => 'propiedadesimagenes/toggle',
            'name' => 'estado',
            'header' => 'Estado',
            'filter'=>array('1'=>'Activado','0'=>'Desactivado'),
        ),


        array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'updateButtonUrl'=>'Yii::app()->createUrl("admin/propiedadesimagenes/update?id=$data->idImagen&idPropiedad=$data->idPropiedad" )',
    
                'buttons'=>array(
                'view'=>
                    array(
                        'url'=>'Yii::app()->createUrl("admin/propiedadesimagenes/view", array("id"=>$data->idImagen))',
                        'options'=>array(
                            'ajax'=>array(
                                'type'=>'POST',
                                'url'=>"js:$(this).attr('href')",
                                'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
                            ),
                        ),
                    ),
            ),
    )
    ),
    )
    );
?>

<!-- View Popup  -->
<?php $this->beginWidget('booster.widgets.TbModal', array('id'=>'viewModal')); ?>
<!-- Popup Content -->
<div class="modal-body">
<p></p>
</div>
<!-- Popup Footer -->
<div class="modal-footer">

<!-- close button -->
<?php $this->widget('booster.widgets.TbButton', array(
    'context' => 'primary',
    'label'=>'Cerrar',
    'url'=>'#',
    'htmlOptions'=>array('data-dismiss'=>'modal'),
)); ?>

<!-- close button ends-->
</div>
<?php $this->endWidget(); ?>
<!-- View Popup ends -->

</div><!-- /.box-header -->
</div>       
</div>

