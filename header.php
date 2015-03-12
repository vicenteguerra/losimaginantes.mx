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
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/doubletaptogo.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styleSlide.css" />

<?php if ( is_category() or is_single() ) {
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".get_stylesheet_directory_uri()."/css/category.css\" />

"; } ?>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.js"></script>



</head>
<body>

    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MWHNPC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MWHNPC');</script>
<!-- End Google Tag Manager -->

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55606331-1', 'auto');
  ga('send', 'pageview');

</script>

  <header >

 <?php get_template_part( 'ads' ); ?>

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
	  <li><a href="<?php echo home_url(); ?>/category/noticias">Noticias</a></li>

	  <li><a href="<?php echo home_url(); ?>/category/papeles-voladores" aria-haspopup="true">Papeles Voladores</a></li>
	  <li><a href="<?php echo home_url(); ?>/category/resenas" aria-haspopup="true">Reseñas</a>
	    <ul>
	      <li><a href="<?php echo home_url(); ?>/category/conciertos">Conciertos</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/galeria">Galerías</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/resena-album">Discos</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/peliculas">Cine Soundtracks</a></li>
	    </ul>
	  </li>
	  <li><a href="<?php echo home_url(); ?>/category/editorial" aria-haspopup="true">Editorial</a>
	    <ul>
	      <li><a href="<?php echo home_url(); ?>/category/musica-a-traves-de-imagenes">MATDI</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/la-nota-ilustrada">La nota ilustrada</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/musica-a-traves-de-imagenes">Playlist</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/nuevos-pero-chidos">Nuevos pero chidos</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/viernes-de-clasicos">Viernes de Clásicos</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/entrevistas">Entrevistas</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/moda">Moda</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/cultura">Cooltura</a></li>
	    </ul>
	  </li>
	  <li><a href="<?php echo home_url(); ?>/category/coberturas" aria-haspopup="true">Coberturas</a>
	    <ul>
          <li><a href="<?php echo home_url(); ?>/category/vive-latino" aria-haspopup="true">Vive Latino</a></li>
	      <li><a href="<?php echo home_url(); ?>/category/corona-capital" aria-haspopup="true">Corona Capital 14</a></li>

	    </ul>
	  </li>
	  <li><a href="<?php echo home_url(); ?>/contacto">Contacto</a>
	  <!--  <ul>
 	      <li><a href="">Staff</a></li>
	      <li><a href="">Colaboradores</a></li>
	    </ul> -->
	  </li>
	</ul>
      </nav>





    </section>
    <section id="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GloboHeader.png" width="90px" height="90px"> </a> </section>
  </section>







