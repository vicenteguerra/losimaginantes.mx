<?php get_header(); ?>


 <div class="ia-container">
				
							
										<figure>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/6.jpg" alt="image06" />
											<input type="radio" name="radio-set" />
											<figcaption><span>Lovely Midnight</span></figcaption>
								
											<figure>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/7.jpg" alt="image07" />
												<input type="radio" name="radio-set" />
												<figcaption><span>Illuminated Darkness</span></figcaption>											

												<figure>
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/8.jpg" alt="image08" />
													<input id="ia-selector-last" type="radio" name="radio-set" />
													<figcaption><span>Happy Child</span></figcaption>
												</figure>
												
											</figure>
								
										</figure>	
											
						
					
			
        </div>

  <section class="menudes">
  <ul>
    <li><a href="">Musica</a></li>
    <li><a href="">Moda</a></li>
    <li><a href="">Cooltura</a></li>
   <div class="marca"></div>
    <section id="linea">
  
    </section>
 </ul>
</section>

  <section id="publicaciones"> <!--  ********  INICIA PUBLICACIONES ******** -->
  	<section id="contenedorPublicaciones">

  		<!-- / / / / / / / / / / / / / / /  POST / / / / / / / / / / / // -->

  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<section id="publicacion" class="grises">
  			<img src="http://lorempixel.com/330/260/">
  			<section class="textoPublicacion">
  				<section id="tituloPostHome">
  					<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>
  					<p id="autor"> Autor: <?php the_author() ?> </p>

  				</section>
  				
  			</section> <!-- Fin  section textoPublicacion -->
	  	</section> <!-- Fin  section publicacion -->
  	


		<?php endwhile; else: ?>Lo sentimos, no se han encontrado entradas.
		<?php endif; ?>
	</section><!-- Fin Contenedor -->
  	
  </section> <!--  ********  TERMINA PUBLICACIONES ******** -->
  
  		  <section id="Widgets"><!--  ********  INICIA WIDGETS ******** -->
  

  		  	<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li>
						<section id="FacebookWidget">
     					 	<iframe id="WidgetFacebook" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FImaginantesMX&amp;width=330&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; " allowTransparency="true"></iframe>
						 </section>
					</li>
					<li>

						<section id="TwitterWidget">
					      <a class="twitter-timeline" href="https://twitter.com/losimaginantes" data-widget-id="423161448521408512">Tweets por @losimaginantes</a>
					      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      					</section>

					</li>
					<li>

						  <section id="InstagramWidget">
					      		<script src="http://instansive.com/widget/js/instansive.js"></script><iframe src="http://instansive.com/widgets/ic73a113cf256862bf940a9a5b57c3a2.html" scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					    </section>

					</li>
					
				</ul>
			</div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>



      

      

    

  </section> <!--  ********  TERMINA WIDGETS ******** -->






<?php get_sidebar(); ?>
<?php get_footer(); ?>