<?php
function get_first_image() {
    global $post, $posts;
    $first_img = "";
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)) //Definimos una imagen por defecto en caso que no la tenga
    { 
        $first_img = get_stylesheet_directory_uri(). "/images/globo.png"; 
    }
    return $first_img;
}


function ajusteImagen(){
    
    if(!@getimagesize(get_first_image() )){  
         $idImagenPost="vacio";
     }
    else{
        list($width, $height, $type, $attr) = getimagesize(get_first_image() );   
        if($width > $height)
         {
            $idImagenPost="imgHorizontal";
         }
         else
         {
             $idImagenPost="imgVertical";  
         } 
     }
     return $idImagenPost;
}

function existeImagen($idImagenPost){
    if($idImagenPost!="vacio")
    { 
        $ruta=get_first_image(); 
    }else
    { 
        $ruta=get_stylesheet_directory_uri(). "/images/globo.png";
    }   
    return $ruta;
}

function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    echo $excerpt;
}

function titleCut($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_title(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    echo $excerpt;
}


function linkCategory($categoria){
    // Get the ID of a given category
    $category_id = get_cat_ID( $categoria );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
    return $category_link;
}

function wpb_vistas_por_posts($postID) {
    $count_key = 'wpb_vistas_por_posts';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/*   ------------------  PAGINATION ----------------------*/


function pagination($prev = '«', $next = '»') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo paginate_links( $pagination );
};


/* --------------   END PAGINATION  ---------------------  */


?>