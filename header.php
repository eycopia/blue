<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1">
    <meta name="author" content="HEXAGONO COMPANY">
    <meta name="description" content="Diseño y Desarrollo de páginas web, aplicaciones móbiles y de escritorio, consultoria y asesoría informática">
    <title> <?php echo (!isset($title_window)) ?  "Diseño Web | Seguridad| Tarapoto | Hexágono, especialistas en el desarrollo de soluciones informáticas" : $title_window; ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/logo_black.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/font-awesome.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr_2.6.2.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/withinViewport.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-39850035-1', 'hexagonosoluciones.com');
      ga('send', 'pageview');

    </script>
</head>
<body>

    <nav>
        <div class="logo animated swing">
            <a "<?php echo esc_url( home_url( '/' ) ); ?>" title="Logo de Hexágono Company">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_white.png" alt="Logo Hexágono" title="Hexágono Company" class="visible-desktop">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_32x32_white.png" alt="Logo Hexágono" title="Hexágono Company" class="visible-phone visible-tablet">
                <strong>HEXÁGONO</strong>
            </a>
        </div>

        <ul class="right-ul ul-inline span8 hidden-phone">
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página Principal"  class="hidden-tablet"><i class="icon-home ico-grande"></i>Inicio</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" title="Actualidad, publicaciones"><i class="icon-bullhorn ico-grande"></i>Blog</a>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-fire ico-grande"></i>Avances <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="http://www.hexagonosoluciones.com/indugroup/index.html" target="_blank">InduGroup</a></li><li><a href
                  <li><a href="http://www.hexagonosoluciones.com/molino/" target="_blank">Moliselva</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/nosotros" title="Información de Hexágono Company"><i class="icon-cog ico-grande"></i>Nosotros</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contactar" title="Contactar con Hexágono"><i class="icon-phone ico-grande"></i>Contactar</a>
            </li>
        </ul>

        <div class="navbar navbar-inverse visible-phone">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="nav-collapse collapse">
        <ul class="nav">
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página Principal"><i class="icon-home ico-grande"></i>Inicio</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" title="Actualidad, publicaciones"><i class="icon-bullhorn ico-grande"></i>Blog</a>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-fire ico-grande"></i>Avances <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="http://www.hexagonosoluciones.com/molino/" target="_blank">Moliselva</a></li>
                  <li><a href="http://www.hexagonosoluciones.com/plazadelbosque" target="_blank">Hotel Plaza del Bosque</a></li><li><a href="http://www.hexagonosoluciones.com/amazon/index.php" target="_blank">Amazon Perú Travel</a></li>
                </ul>
            </li>

            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/nosotros" title="Información de Hexágono Company"><i class="icon-cog ico-grande"></i>Nosotros</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contactar" title="Contactar con Hexágono"><i class="icon-phone ico-grande"></i>Contactar</a>
            </li>
        </ul>
        </div>
        </div>
        <span class="clear"></span>
    </nav>