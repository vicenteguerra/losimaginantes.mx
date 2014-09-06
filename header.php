<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
	<?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
	<?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
</title>
<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styleSlide.css" />

<link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400italic' rel='stylesheet' type='text/css'>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/doubletaptogo.js"></script>


</head>
<body>
  <header >
  	<section id="contenedorPublicidad">
  		<section id="publicidadL">
      	
    </section>
     <section id="publicidadR">
      	
    </section>


  	</section>
    
  </header>
  



  <section id="menu" >
  	<section id="SuperiorMenu">  <!-- Barra Transparente -->

  	</section>

    <section id="menuIn" >
      <nav id="menuInL"  role="navigation"> <!-- Letras en Menu -->

      	<!--Responsive Menu -->
      	

      		<a href="#menuInL" title="Show navigation" id="mostrar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Main_Menu.png"></a>
    		<a href="#" title="Hide navigation" id="ocultar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Main_Menu.png"></a>

      	 

      <ul id="lmenu" role="navigation">
	  <li><a href="">Noticias</a></li>
	  
	  <li><a href="" aria-haspopup="true">Papeles Voladores</a></li>
	  <li><a href="" aria-haspopup="true">Reseñas</a>
	    <ul>
	      <li><a href="">Conciertos</a></li>
	      <li><a href="">Galerías</a></li>
	      <li><a href="">Discos</a></li>
	      <li><a href="">Cine Soundtracks</a></li>
	    </ul>
	  </li>
	  <li><a href="" aria-haspopup="true">Editorial</a>
	    <ul>
	      <li><a href="">MATDI</a></li>
	      <li><a href="">La nota ilustrada</a></li>
	      <li><a href="">Playlist</a></li>
	      <li><a href="">Nuevos pero chidos</a></li>
	      <li><a href="">Viernes de Clásicos</a></li>
	      <li><a href="">Entrevistas</a></li>
	      <li><a href="">Especiales</a></li>
	      <li><a href="">Moda</a></li>
	      <li><a href="">Cooltura</a></li>
	    </ul>
	  </li>
	  <li><a href="" aria-haspopup="true">Coberturas</a>
	    <ul>
	      <li><a href="" aria-haspopup="true">Corona Capital 14</a></li>
	    </ul>
	  </li>
	  <li><a href="">Contacto</a>
	    <ul>
	      <li><a href="" aria-haspopup="true">Contacto</a></li>
	      <li><a href="">Staff</a></li>
	      <li><a href="">Colaboradores</a></li>
	    </ul>
	  </li>
	</ul>
      </nav>
      

      
      
      
    </section>
    <section id="logo"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GloboHeader.png" width="90px" height="90px"> </section>
  </section>

						


 


