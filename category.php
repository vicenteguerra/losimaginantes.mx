<?php get_header(); $postcount = 1;?>


 <? // echo wp_list_pages(); ?>

<section id="contenedorPublicacion">
    <section id="postBarra">
        <br>
    </section>
    <section class="triangulo_top_right">
    
    </section>
    <section id="postPublicacion">
            <section id="postTexto">
                <section id="postTitle">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flecha.png"><a><?php single_cat_title(); ?></a>
                </section>
                <br><br>
                
                <?php query_posts("category_name='noticias'"); ?>

                <?php if ( have_posts() ) : while ( have_posts()&&$postcount<6 ) : the_post(); ?>
                
                <!-- Verifica imagen horizontal o vertical -->
            
             <? 
                        $idImagenPost=ajusteImagen();   
            ?>
            
            <!-- Termina verificacion tama;o de imagen -->
                
                
                <section id="contImagenCategory">
                    <img  id="<?php echo $idImagenPost; ?>" src="<?php echo existeImagen($idImagenPost); ?>">
                </section>
                <section id="textoCategory">
                <section id="tituloPostHome">
  					<h2 id="tituloPublicacion"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>  
                  
                    <a id="resumen">  <?php echo  excerpt('25'); ?></a>
  					 <!-- <p id="autor"> Autor:  </p> -->
                    

  				</section>
  				
  			</section> <!-- Fin  section textoPublicacion -->
                </section>
                
                <?php $postcount++; endwhile; else: ?>Lo sentimos, no se han encontrado entradas.
		      <?php endif; ?>
                
            </section>
    </section>
    
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