<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/skins/skin-black.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/nprogress.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/style.css" rel="stylesheet" type="text/css" />

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body class="skin-black sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin" class="logo">

            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="140px" style="padding-top: 0px;">

        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                       
              <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>

                                <?php if(!Yii::app()->user->isGuest and isset(Yii::app()->user->nombre)){
                                    echo Yii::app()->user->nombre.' '.Yii::app()->user->apellido; } ?> 

                                    <i class="caret">
                                    </i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->user->avatar; ?>" class="img-circle" alt="Imagen Usuario" />

                                    <p>
                                        <?php if(!Yii::app()->user->isGuest and isset(Yii::app()->user->nombre)){
                                            echo Yii::app()->user->nombre.' '.Yii::app()->user->apellido; } ?> 
                                            <small>
                                                <?php if(!Yii::app()->user->isGuest and isset(Yii::app()->user->ultimologin)){
                                                    echo "Ultimo Acceso: ".Yii::app()->dateFormatter->format("d-M-y h:m a", Yii::app()->user->ultimologin);} ?>                                         
                                                </small>
                                            </p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class="user-body">
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/usuario/admin" class="btn btn-default btn-flat">Perfil</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" class="btn btn-default btn-flat">Log out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->user->avatar; ?>" class="img-circle" alt="Imagen Usuario" />
            </div>
            <div class="pull-left info">
                <p>Hola,                 
                    <?php if(!Yii::app()->user->isGuest and isset(Yii::app()->user->nombre)){
                        echo Yii::app()->user->nombre; } ?> </p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>

            <li class="<?php echo $this->menu_home ?>">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="treeview <?php echo $this->menu_propiedades ?>">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/admin">
                   <i class="fa fa-fw fa-bars"></i>
                    <span>Propiedades</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->menu_propiedades_n ?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/propiedades/create"><i class="fa fa-angle-double-right"></i> Nueva Propiedad</a></li>
                    <li class="<?php echo $this->menu_propiedades_l ?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/propiedades/admin"><i class="fa fa-angle-double-right"></i> Listado</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo $this->menu_usuarios ?>">
                <a href="#">
                    <i class="fa fa-fw fa-user"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->menu_usuarios_n ?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/usuario/create"><i class="fa fa-angle-double-right"></i> Nuevo Usuario</a></li>
                    <li class="<?php echo $this->menu_usuarios_l ?>"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/usuario/admin"><i class="fa fa-angle-double-right"></i> Listado</a></li>
                </ul>
            </li>

            <li class="<?php echo $this->menu_configuracion ?>">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/config/update/1">
                    <i class="fa fa-fw fa-cog"></i>
                    <span>Configuración</span>
                </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
                                      
        <section class="content-header fade out">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title"><?php echo $this->titulo  ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            $this->widget('booster.widgets.TbBreadcrumbs',
                array(
                    'links'=>$this->breadcrumbs,
                    ));
                    ?>
        </section>


        <!-- Main content -->
        <section id="content" class="content fade out">

            <?php echo $content; ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong><a href="http://goldenlionarg.com/" target="new">Capello Inmobiliaria </a> - </strong> Todos los Derechos Reservados.
      </footer>
    
    </div><!-- ./wrapper -->

    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/app.min.js" type="text/javascript"></script>  
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/nprogress.js" type="text/javascript"></script>  
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/admin/scripts.js" type="text/javascript"></script> 
    
  <script>
    $('body').show();

    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

  </script>

  </body>

</html>
