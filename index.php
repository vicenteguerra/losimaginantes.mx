<?php get_header(); $postcount = 1;?>

<section id="slide">

    <div class="ia-container">
				
        <?php query_posts("category_name=ceremonia"); ?>
        
							
										<figure>
											<img src="http://lorempixel.com/680/480/" alt="image06" />
											<input type="radio" name="radio-set" />
											<figcaption><span>Lovely Midnight</span></figcaption>
								
											<figure>
												<img src="http://lorempixel.com/680/480/" alt="image07" />
												<input type="radio" name="radio-set" checked="checked"/>
												<figcaption><span>Illuminated Darkness</span></figcaption>											

												<figure>
													<img src="http://lorempixel.com/680/480/" alt="image08" />
													<input id="ia-selector-last" type="radio" name="radio-set" />
													<figcaption><span>Happy Child</span></figcaption>
												</figure>
												
											</figure>
								
										</figure>								
        </div>    
    
</section>
 

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
<section id="container">
  <section id="publicaciones"> <!--  ********  INICIA PUBLICACIONES ******** -->
  	<section id="contenedorPublicaciones">

  		<!-- / / / / / / / / / / / / / / /  POST / / / / / / / / / / / // -->
        
        
         <?php query_posts("category_name=ceremonia,viernes-de-clasicos"); ?>
        
  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<section id="publicacion" class="grises" id="post-<?php echo $postcount ?>">
            
            <!-- Verifica imagen horizontal o vertical -->
            
             <? 
                        list($width, $height, $type, $attr) = getimagesize(get_first_image() ); 
                        if($width > $height)
                        {
                            $idImagenPost="imgHorizontal";
                        }
                        else
                        {
                            $idImagenPost="imgVertical";  
                        }
            ?>
            
            <!-- Termina verificacion tama;o de imagen -->
            
            <section id="contenedorImagenPost" >
                <img  id="<?php echo $idImagenPost; ?>" src="<?php echo get_first_image() ?>">
            </section>
            
  			<section class="textoPublicacion">
  				<section id="tituloPostHome">
  					<h2 id="tituloPublicacion"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>  
                  
                    <a id="resumen"><?php echo  the_excerpt(); ?></a>
  					 <!-- <p id="autor"> Autor:  </p> -->
                    

  				</section>
  				
  			</section> <!-- Fin  section textoPublicacion -->
	  	</section> <!-- Fin  section publicacion -->  	


		<?php $postcount++; endwhile; else: ?>Lo sentimos, no se han encontrado entradas.
		<?php endif; ?>
	</section><!-- Fin Contenedor -->
  	
      
      <?php 
    $the_last_page = $wp_query->max_num_pages; 
    $loaded_page = intval($paged); 
?> 
<?php if ( $the_last_page == $loaded_page) { ?> 
    <a href="<?php previous_posts(); ?>#anchor" class="previous" style="margin-left:40px;">Posts Recientes</a> 
<?php } elseif ($loaded_page == 0) { ?> 
    <a href="<?php next_posts(); ?>#anchor" class="next">Posts Anteriores</a> 
<?php } else { ?> 
    <a href="<?php previous_posts(); ?>#anchor" class="previous" style="margin-left:40px;">Posts Recientes</a>  <a href="<?php next_posts(); ?>#anchor" class="next">Posts Anteriores</a> 
<?php } ?>
      
      
  </section> <!--  ********  TERMINA PUBLICACIONES ******** -->
</section>  
  		 

<section id="Widgets"><!--  ********  INICIA WIDGETS ******** -->
    
    <section id="containerWidgets">
    
        <div id="cbp-fwslider" class="cbp-fwslider">
            <ul>

                <li>

            <section id="FacebookWidget">
                                      <iframe id="WidgetFacebook" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FImaginantesMX&amp;width=330&amp;height=330&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:297px; height:297px;" allowTransparency="true"></iframe>
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
    
    </section>


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:s
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