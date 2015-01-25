<?php get_header(); $postcount = 1;?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/tabstyles.css" />

<section id="slide">

    <div class="ia-container">
				
        <?php query_posts("category_name=noticias"); ?>
        
        
							
										<figure>
                                            <?php the_post(); ?>
                                            <section id="contImgSlide">
                                                <img id="<?php echo ajusteImagen();?>" src="<?php echo existeImagen(ajusteImagen()); ?>" alt="image06" />
                                                
                                            </section>
                                            <input type="radio" name="radio-set" />
                                            <figcaption><a href="<?php the_permalink() ?>"><span><?php  the_title(); ?></span></a></figcaption>
											
											<figure> 
                                                <?php the_post(); ?>
                                                <section id="contImgSlide">
                                                <img id="<?php echo ajusteImagen();?>" src="<?php echo existeImagen(ajusteImagen()); ?>" alt="image07" />
                                                </section>
												
												<input type="radio" name="radio-set" checked="checked"/>
												<figcaption><a href="<?php the_permalink() ?>"><span><?php  the_title(); ?></span></a></figcaption>											

												<figure>
                                                    <?php the_post(); ?>
                                                    
                                                    <section id="contImgSlide">
                                                <img id="<?php echo ajusteImagen();?>" src="<?php echo existeImagen(ajusteImagen()); ?>" alt="image08" />
                                                        
                                                    </section>
                                                    <input id="ia-selector-last" type="radio" name="radio-set" />
                                                       <figcaption><a href="<?php the_permalink() ?>"><span><?php  the_title(); ?></span></a></figcaption>
													
												</figure>
												
											</figure>
								
										</figure>								
        </div>    
    
</section>
 
<!--  -  --- - - --  -- - - --  MENU ACTIVE MUSICA CULTURA  -------------------- - -->
  



<section id="contenedorCatMenu">
                <section id="bandaCatMenu">
                </section>
                <!--
                <section id="catMenu">
                    <div class="tabs tabs-style-linemove">
                        <nav>
                            <ul>
                                <li><a href="#section-linemove-1" ><span>Musica<?php //echo linkCategory('noticias');?></span></a></li>
                                <li><a href="#section-linemove-2" ><span>Moda</span></a></li>
                                <li><a href="#section-linemove-3" ><span>Cooltura</span></a></li>

                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <section id="section-linemove-1"><p>1</p></section>
                            <section id="section-linemove-2"><p>2</p></section>
                            <section id="section-linemove-3"><p>3</p></section>
                        </div>
                    </div>
                </section>-->
                
            </section>
                
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/cbpFWTabs.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>

<!--  -  --- - - --  -- - - --  TERMINA MENU ACTIVE MUSICA CULTURA  -------------------- - -->
  
<section id="container">
  <section id="publicaciones"> <!--  ********  INICIA PUBLICACIONES ******** -->


<div class="pagination">
   <div class="right"> <?php next_posts_link(' &#10140; ', $new_query->max_num_pages) ?> </div>
   <div class="left rotate180"> <?php previous_posts_link(' &#10140;') ?></div>
</div>

  	<section id="contenedorPublicaciones">

  		<!-- / / / / / / / / / / / / / / /  POST / / / / / / / / / / / // -->
        
        

<?php
$new_query = new WP_Query();
$new_query->query('post_type=post&showposts=9'.'&paged='.$paged);
?>
        
       <?php while ($new_query->have_posts()) : $new_query->the_post(); ?> 


  		<section id="publicacion" class="grises" id="post-<?php echo $postcount ?>">
            
            <!-- Verifica imagen horizontal o vertical -->
            
             <? 
                        $idImagenPost=ajusteImagen();   
            ?>
            
            <!-- Termina verificacion tama;o de imagen -->
            
            <section id="contenedorImagenPost" >
               <a href="<?php the_permalink() ?>" ><img id="<?php echo $idImagenPost; ?>" src="<?php echo existeImagen($idImagenPost); ?>" ></a>  <!-- Si no existe la imagen coloca el globo -->
            </section>
            
  			<section class="textoPublicacion">
  				<section id="tituloPostHome">
  					<h2 id="tituloPublicacion"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>  
                  
                    <a id="resumen">  <?php echo  excerpt('22'); ?></a>
  					 <!-- <p id="autor"> Autor:  </p> -->
                    

  				</section>
  				
  			</section> <!-- Fin  section textoPublicacion -->
	  	</section> <!-- Fin  section publicacion -->  	

       		<?php $postcount++; endwhile;  ?>




    
     


	</section><!-- Fin Contenedor -->

  
      
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




<?php get_footer(); ?>