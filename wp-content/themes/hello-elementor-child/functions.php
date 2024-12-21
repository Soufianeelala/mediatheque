<?php
//fonction pour charger les styles de théme parent
add_action('wp_enqueue_scripts','projetmedia_enqueue_styles');
function projetmedia_enqueue_styles(){

    wp_enqueue_style(
        'child-styles',
        get_stylesheet_uri(),array('hello-elementor')

    );


}