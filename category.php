<?php get_header(); $postcount = 1;?>


 <? // echo wp_list_pages(); ?>




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