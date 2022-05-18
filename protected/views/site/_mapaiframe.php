<?php 
//print_r($_REQUEST);

if (isset($_REQUEST['idTipo'])) {$idTipo = $_REQUEST['idTipo'];} else {$idTipo='null';}
if (isset($_REQUEST['idCondicion'])) {$idCondicion = $_REQUEST['idCondicion'];} else {$idCondicion='null';}
if (isset($_REQUEST['idLocalidad'])) {$idLocalidad = $_REQUEST['idLocalidad'];} else {$idLocalidad='null';}

?>

<iframe frameborder="0" allowtransparency="true"
src="<?php echo Yii::app()->request->baseUrl?>/site/llenarMapa?idTipo=<?php echo $idTipo ?>&idCondicion=<?php echo $idCondicion ?>&idLocalidad=<?php echo $idLocalidad ?>" style="width: 100%; height: 100%; min-height:450px" scrolling="no">
</iframe>