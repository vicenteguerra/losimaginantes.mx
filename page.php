<?php
/*
Template Name: Archivos con Contenido
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 <div class="post">
  <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
  <div class="entrytext">
   <?php the_content('<p class="serif">Leer el resto de esta página &raquo;</p>'); ?>
  </div>
 </div>
 <?php endwhile; endif; ?>
 <?php edit_post_link('Editar esta entrada.', '<p>', '</p>'); ?>

</div>
<div id="main">



<h2>Archivos por Categorías:</h2>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>

</div>
<?php get_footer(); ?>