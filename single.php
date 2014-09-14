<?php get_header();?>
<?php get_sidebar(); ?>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '224245647630343',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/es_LA/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
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
                <div class="fb-comments" data-href="http://example.com/comments" data-width="650" data-numposts="5" data-colorscheme="light"></div>
            </section>
            <?php endwhile; else: ?>
            <h2>No encontrado</h2>
            <p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
            <?php endif; ?>
        </section>
    </section>
</section>
<?php get_footer(); ?>