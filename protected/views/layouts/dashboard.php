<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <title>CAPELLO INMOBILIARIA</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css" rel="stylesheet" type="text/css" id="css-primary">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" rel="stylesheet" type="text/css" id="css-primary">

    <!--Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <meta property="fb:app_id" content="324844947896951"/>
    <meta property='og:locale' content='es_ES'/>
    <meta property="og:title" content="<?php echo $this->face_titulo ?>"/>
    <meta property='og:description' content='<?php echo $this->face_descripcion ?>'/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo $this->face_link ?>"/>
    <meta property="og:image" content="<?php echo $this->face_imagen ?>" />
  
    <meta property="og:site_name" content="Capello Inmobiliaria"/>
 
</head>

<body>

<div class="page-wrapper">
  
  <div class="header-wrapper">
  <div class="header">
    <div class="header-inner">
      <div class="container">
        <div class="header-topbar">
          <div class="header-topbar-left">
            VENTA - COMPRA - ALQUILER - TASACIONES - ADMINISTRACION DE PROPIEDADES
          </div><!-- /.header-topbar-left -->
          
             <div class="header-information">
              <i class="fa fa-at"></i>
              <div class="header-information-block">
                <strong>info@capelloinmobiliaria.com.ar</strong>
              </div><!-- /.header-information-block -->
            </div><!-- /.header-information -->

            <div class="header-information">
              <i class="fa fa-phone"></i>
              <div class="header-information-block">
                <strong>261-684-4712 / 261-508-7171</strong>
              </div><!-- /.header-information-block -->
            </div><!-- /.header-information -->
        
        </div><!-- /.header-topbar -->

        <div class="header-top">
          <div class="header-top-inner">
            <a class="header-logo" href="<?php echo URLRAIZ ?>/home">
             <img class="logo" src="<?php echo URLRAIZ ?>/images/logo.png" alt="">
            </a><!-- /.header-logo -->

            <div class="header-separator"></div><!-- /.header-separator -->

<div class="nav-primary-wrapper collapse navbar-toggleable-sm">
  <ul class="nav nav-pills nav-primary">
    
    <li class="nav-item">
      <a href="<?php echo URLRAIZ ?>/home" class="nav-link ">
        Home
      </a>  
    </li>
    
    <li class="nav-item">
      <a href="<?php echo URLRAIZ ?>/propiedades" class="nav-link ">
        Propiedades
      </a>  
    </li> 

    <li class="nav-item">
      <a href="<?php echo URLRAIZ ?>/servicios" class="nav-link ">
        Servicios
      </a>  
    </li>  

    <li class="nav-item">
      <a href="<?php echo URLRAIZ ?>/contacto" class="nav-link ">
        CONTACTO
      </a>  
    </li>

  </ul><!-- /.nav -->
</div><!-- /.nav-primary -->

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target=".nav-primary-wrapper">
              <span></span>
              <span></span>
              <span></span>
            </button>             
          </div><!-- /.header-top-inner -->
        </div><!-- /.header-top -->

        <div class="header-bottom">
          <div class="header-bottom-inner">
          
          </div><!-- /.header-bottom-inner -->
        </div><!-- /.header-bottom -->
      </div><!-- /.container -->
    </div><!-- /.header-inner -->
  </div><!-- /.header -->
</div><!-- /.header-wrapper-->
        
<div class="main-wrapper">
  <div class="main">
    <div class="main-inner">
      <div class="content">
        <?php echo $content; ?>
      </div><!-- /.content -->
    </div><!-- /.main-inner -->
  </div><!-- /.main -->
</div><!-- /.main-wrapper -->

<div class="footer-wrapper">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-top">
        <div class="col-md-6">
          <h2>Capello Inmobiliaria</h2>

          <p>
            Capello Inmobiliaria se ha caracterizado por más de 10 años en ofrecer servicios de compra, venta, alquileres, subdivisiones, tasaciones y orientación a inversores.
          </p>
           
        </div><!-- /.footer-top-left -->

        <div class="col-md-6" style="text-align: center;">

              <i class="fa fa-at"></i>
              <div class="header-information-block">
                <strong>info@capelloinmobiliaria.com.ar</strong>
              </div><!-- /.header-information-block --> <br>

              <i class="fa fa-phone"></i>
              <div class="header-information-block">
                <strong>261-684-4712 / 261-508-7171</strong>
              </div><!-- /.header-information-block <--><br><br>

          <div class="social">
            <a href="#"><i class="fa fa-facebook"></i></a>
          </div><!-- /.social -->      

        </div><!-- /.footer-top-right -->
      </div><!-- /.footer-top -->

      <div class="footer-bottom">
        <div class="footer-left">
          &copy; 2018 Todos los derechos reservados por Capello Inmobiliaria
        </div><!-- /.footer-left -->

        <div class="footer-right">
          Desarrollado por <a href="http://itsoft-mza.tk" target="new">ItSoft.</a>
        </div><!-- /.footer-right -->     
      </div><!-- /.footer-bottom -->
    </div><!-- /.footer-inner -->
  </div><!-- /.container -->
</div><!-- /.footer-wrapper -->

</div><!-- /.page-wrapper -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-validate.bootstrap-tooltip.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/owl.carousel.min.js"></script>

<!-- End JS Files -->

</body>

</html>