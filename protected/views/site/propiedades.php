<div class="content-title">
	<div class="content-title-inner">
		<div class="container">		
			<h1>Propiedades</h1>		
			<ol class="breadcrumb">
				<li><a href="<?php echo URLRAIZ ?>/home">Home</a></li>
				<li><a href="<?php echo URLRAIZ ?>/propiedades">Propiedades</a></li>
			</ol>			
		</div><!-- /.container -->
	</div><!-- /.content-title-inner -->
</div><!-- /.content-title -->

<div class="content">
<div class="container">
<div class="row">

<div class="col-md-3">

<div class="bus-filter-wrapper">
<div class="bus-filter filter filtro-oscuro">

<?php /** @var TbActiveForm $form */
$form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'horizontalForm',
		//'type' => 'horizontal',
		'htmlOptions' => array(
			'enctype' => 'multipart/form-data',
			),
		)
	);
	?>

	<div class="form-group">
		<?php echo $form->labelEx(Tipos::model(),'Tipo de Propiedad'); ?>
		<?php echo $form->dropDownList(Tipos::model(),'idTipo', array('0'=>'Todos') +
			CHtml::listData(Tipos::model()->findAll(array('order' => 'nombre ASC')), 'idTipo', 'nombre'),
			array(
				'onchange' => 'mostrarResultados()',
				'class' => 'form-control',
				))?>
			</div>  

			<div class="form-group">
				<?php echo $form->labelEx(Condiciones::model(),'Condicion'); ?>
				<?php echo $form->dropDownList(Condiciones::model(),'idCondicion', CHtml::listData(Condiciones::model()->findAll(array('order' => 'nombre ASC')), 'idCondicion', 'nombre'),
					array(
						'onchange' => 'mostrarResultados()',
						'class' => 'form-control',
						))?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx(Localidades::model(),'Localidad'); ?>
						<?php echo $form->dropDownList(Localidades::model(),'idLocalidad', array('0'=>'Todos') +
							CHtml::listData(Localidades::model()->findAll(array('order' => 'nombre ASC')), 'idLocalidad', 'nombre'),
							array(
								'onchange' => 'mostrarResultados()',
								'class' => 'form-control',
								))?>
							</div>

							<?php $this->endWidget(); ?>

							<div id="cantEncontrados"></div>
							<p style="color: #FFF; text-align: center;">Propiedades encontradas</p>

						</div><!-- /.filter -->
					</div><!-- /.filter-wrapper -->

				</div>	

				<div class="col-md-9">
					<div id="resultados"></div>
				</div>

			</div>
		</div>
	</div>

<script>
   $('#cantEncontrados').html('<img src="./images/loader.gif" alt="" />');
     $.ajax({   
        url: "site/mostrarResultadosTodosAjax",   
        success: function(msg){    
           $('#resultados').html(msg);
         } 
    });
</script>