<?php
// Template name : Océane LOUËRAT

?> 

Ceci est mon nouveau template hookocéane.php

{            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    } 
echo 'template Oceane'
}

// <?php
// $pages = get_pages();
// echo '<p>LISTE</p>';
// Foreach ($pages as page) {
// 	echo($page->post_tittle . '<br>');
// }

// echo 'DEBUG';
// echo '<pre> ;
// print_r($pages);
// echo '</prez>';