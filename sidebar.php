<aside id="lateral">
        <section id="postBarra">
        </section>

        <section id="recomendacionesTitle">
            
        RECOMENDACIONES<br /><br />
 
        </section>
        
        

        
        
        
          <?php
	           
	          query_posts( 'posts_per_page=4' );
        while ( have_posts() ) : the_post();
                   
                ?>  
        
					<h3 class="textCircle"> <?php titleCut(6); ?></h3>
         <section id="postCirculo">
              <!-- Verifica imagen horizontal o vertical -->
            
             <? 
                        $idImagenPost=ajusteImagen();   
            ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <img  id="<?php echo $idImagenPost; ?>" src="<?php echo existeImagen($idImagenPost); ?>"></a>
             
            
        </section>
        
		        <?php // echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	           
               
               endwhile;
            ?>
       
        
        <?php wp_reset_query(); ?>
				
				
			
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
    <?php echo "<script type=\"text/javascript\" src=\"".get_stylesheet_directory_uri()."/js/jquery.arctext.js\" ></script>"; ?>
        
        
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		
			
			var $example1	= $('.textCircle').hide();

			google.load('webfont','1');
			
			google.setOnLoadCallback(function() {
				WebFont.load({
					google		: {
						families	: ['Montserrat','Concert One']
					},
					fontactive	: function(fontFamily, fontDescription) {
						init();
					},
					fontinactive	: function(fontFamily, fontDescription) {
						init();
					}
				});
			});
			
			function init() {
			

				
				$example1.show().arctext({radius: 100});
				
			
			};
		</script>
        
        
        <section id="spotifyList">
    <section class='embed-container'><iframe src='https://embed.spotify.com/?uri=spotify:user:losimaginantesmx:playlist:6t1MuJvN9VQgJCPKAmYg7p' frameborder='0' allowtransparency='true'></iframe></section>
        </section>
       
    </aside>