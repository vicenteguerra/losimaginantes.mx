<?php get_header(); $postcount = 1;?>

<p style="text-align: center">Category: <?php single_cat_title();  ?></p>
<p>
<br> <? echo wp_list_pages(); ?>
</p>

<?php get_footer(); ?>