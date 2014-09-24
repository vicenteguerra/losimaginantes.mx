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
?>