
<?php get_header(); $postcount = 1;?> 

<?php $current_category = single_cat_title("", false);
    $consulta=""."category_name='".$current_category."'";
?>


 
 <? // echo wp_list_pages(); ?>
<section id="mainContainer">
    
    <section id="catContenedor">       
        <section id="postBarra">
        </section>
           
        <section id="categoryTitle">  ► <?php echo $current_category;?>  </section>
        
        
        <?php query_posts($consulta); ?>

                <?php if ( have_posts() ) : while ( have_posts()&&$postcount<6 ) : the_post(); ?>
                
                <!-- Verifica imagen horizontal o vertical -->
            
             <? 
                        $idImagenPost=ajusteImagen();   
            ?>
            
            <!-- Termina verificacion tama;o de imagen -->
        
            <section id="imagenPostCategory" class="grises">
               
                    <img  id="<?php echo $idImagenPost; ?>" src="<?php echo existeImagen($idImagenPost); ?>">
                
            </section>
        
            <section id="contPostCategory">
                <h2 id="tituloPublicacion"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>  
                
                <a id="resumenCat">  <?php echo  excerpt('30'); ?></a>
  					 

            </section>
        
          <?php $postcount++; endwhile; else: ?> Lo sentimos, no se han encontrado entradas.
        <?php endif; ?>
   

    </section> <!-- FIN CATCONTENEDOR -->
    
    <?php get_sidebar();?>
    
</section>




<section id="postRelated">
        <?php  
        $mes = date( 'm' );
        $año = date( 'Y' );
        $my_query =new wp_query( array('posts_per_page'=>4,'meta_key'=>'wpb_vistas_por_posts','orderby'=>'meta_value_num','order'=>'DESC','year='.$año.'&monthnum='.$mes));
        ?>
        <ul id="tableThumbs">
        <h2 id="plusleido">LO MÁS LEÍDO</h2>
        <?php
        while( $my_query->have_posts() ) {  
        $my_query->the_post();  
        ?>
        <a class="linkrelPost" rel="external" href="<?php echo the_permalink()?>">
            <li class="relatedThumbs" style="background-image: url(<?php echo get_first_image()?>)">
                <p class="titlePost"><?php echo the_title(); ?></p>
            </li>
        </a>
        <?php }  
        $post = $orig_post;  
        wp_reset_query();  
        ?>
        </ul>
</section>

<?php get_footer(); ?>