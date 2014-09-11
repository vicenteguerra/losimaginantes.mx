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
        $first_img = "http://lorempixel.com/330/260/"; 
    }
    return $first_img;
}
?>

