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
	  <li><a href="<? echo linkCategory('noticias'); ?>">Noticias</a></li>
	  
	  <li><a href="<? echo linkCategory('papeles-voladores'); ?>" aria-haspopup="true">Papeles Voladores</a></li>
	  <li><a href="<? echo linkCategory('resenas'); ?>" aria-haspopup="true">Reseñas</a>
	    <ul>
	      <li><a href="<? echo linkCategory('conciertos'); ?>">Conciertos</a></li>
	      <li><a href="<? echo linkCategory('galeria'); ?>">Galerías</a></li>
	      <li><a href="<? echo linkCategory('resena-album'); ?>">Discos</a></li>
	      <li><a href="<? echo linkCategory('peliculas'); ?>">Cine Soundtracks</a></li>
	    </ul>
	  </li>
	  <li><a href="<? echo linkCategory('editorial'); ?>" aria-haspopup="true">Editorial</a>
	    <ul>
	      <li><a href="<? echo linkCategory('musica-a-traves-de-imagenes'); ?>">MATDI</a></li>
	      <li><a href="<? echo linkCategory('la-nota-ilustrada'); ?>">La nota ilustrada</a></li>
	      <li><a href="<? echo linkCategory('musica-a-traves-de-imagenes'); ?>">Playlist</a></li>
	      <li><a href="<? echo linkCategory('nuevos-pero-chidos'); ?>">Nuevos pero chidos</a></li>
	      <li><a href="<? echo linkCategory('viernes-de-clasicos'); ?>">Viernes de Clásicos</a></li>
	      <li><a href="<? echo linkCategory('entrevistas'); ?>">Entrevistas</a></li>
	      <li><a href="">Especiales</a></li>
	      <li><a href="<? echo linkCategory('moda'); ?>">Moda</a></li>
	      <li><a href="<? echo linkCategory('cultura'); ?>">Cooltura</a></li>
	    </ul>
	  </li>
	  <li><a href="<? echo linkCategory('coberturas'); ?>" aria-haspopup="true">Coberturas</a>
	    <ul>
	      <li><a href="<? echo linkCategory('corona-capital'); ?>" aria-haspopup="true">Corona Capital 14</a></li>
	    </ul>
	  </li>
	  <li><a href="<?php echo home_url(); ?>/contacto">Contacto</a>
	    <ul>
	      <li><a href="" aria-haspopup="true">Contacto</a></li>
	      <li><a href="">Staff</a></li>
	      <li><a href="">Colaboradores</a></li>
	    </ul>
	  </li>
	</ul>
      </nav>
      

      
      
      
    </section>
    <section id="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GloboHeader.png" width="90px" height="90px"> </a> </section>
  </section>

						


 


