 <?php get_template_part( 'ads' ); ?>


<footer>








      <section id="textoFooter">


      <p>Términos y Condiciones | Los Imaginantes  | © Todos los derechos reservados | 2011 - 2014  </p>


      </section>




      <section id="RedesSociales">

        <!-- <img href="#" src="images/footer-iconos/footer-icono-busqueda.png"> -->
      <a class="icons" href="https://www.facebook.com/ImaginantesMX" target="_blank" id="iconoFacebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-facebook.png"></a>
      <a class="icons" href="http://twitter.com/losimaginantes" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-twitter.png"></a>
      <a class="icons" href="http://instagram.com/losimaginantesmx" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-instagram.png"></a>
      <a class="icons" href="https://plus.google.com/112571897408730390470" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-gplus.png"></a>
      <a class="icons" href="https://www.youtube.com/channel/UCmkJlyTNRM1BCupbQ-iPiEA" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-youtube.png"></a>
      <a class="icons" href="http://flickr.com/losimaginantesmx" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-flickr.png"></a>
      <a class="icons" href="http://spotify.com/losimaginantes" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-spotify.png"></a>
      <a class="icons" href="http://soundcloud.com/los-imaginantes" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/footer-icono-scloud.png"></a>

      </section>









      <section id="sb-search" class="sb-search">
            <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">

              <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="s" id="s" required>
              <span class="sb-icon-search"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-iconos/srch-icn.png"></span>

            </form>
        </section>



  </footer>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/uisearch.js"></script>
<script>
      new UISearch( document.getElementById( 'sb-search' ) );
</script>



<?php wp_footer(); ?>
</body>
</html>