<?php get_header();?>
<?php get_sidebar(); ?>
<section id="contenedorPublicacion">
    <section id="postBarra">
        <br>
    </section>
    <section id="postPublicacion">
        <section id="postTexto">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section id="postTitle">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flecha.png"><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </section>
            <?php
                $date=get_the_date('j \d\e F, Y');
                $autor = get_the_author();
                echo '<p id="postAutor">'.$date.' <i>Por: '.$autor.'</i></p>';
            ?>
            <section id="postContent">
                <?php the_content();?>
            </section>
            <section id="postComments">
                <h3 class="postRev">REVELATE, ¿QUÉ PIENSAS?</h3>
                <?php echo do_shortcode('[fbcomments url="https://www.facebook.com/ImaginantesMX?fref=ts" width="650px" count="off" num="3" countmsg="wonderful comments!"]'); ?>
            </section>
            <?php endwhile; else: ?>
            <h2>No encontrado</h2>
            <p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
            <?php endif; ?>
        </section>
    </section>
</section>
<?php get_footer(); ?>