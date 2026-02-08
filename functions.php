<?php

function aura_scripts() {
    
    // common.css を読み込む
    wp_enqueue_style( 'aura-common', get_template_directory_uri() . '/assets/css/common.css' );

    // index.css を読み込む
    wp_enqueue_style( 'aura-index', get_template_directory_uri() . '/assets/css/index.css' );

}

add_action( 'wp_enqueue_scripts', 'aura_scripts' );