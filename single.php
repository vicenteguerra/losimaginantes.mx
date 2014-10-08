<?php 
get_header();
wpb_vistas_por_posts(get_the_ID());
?>

<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '281387682050732',
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
<section id="mainContainer">
    <?php get_sidebar();?>
    <section id="postPublicacion">
        <section id="postBarra">
        </section>
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
                <div data-width="650" class="fb-comments" data-href="http://losimaginantes.mx/" data-num-posts="2" mobile="false" ></div>
<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
            </section>
            <?php endwhile; else: ?>
            <h2>No encontrado</h2>
            <p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
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