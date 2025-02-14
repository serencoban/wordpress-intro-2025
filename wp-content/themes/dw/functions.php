<?php  //c'est un controller, on va pas afficher, on va interagire avec wordpress, code pure et dur php pas de html

//Gutenberg est l'éditeur de contenu propre à wordpress
// il ne nous interesse pas pour l'utilisation du thème que nous alons créer
// On va donc le désactiver :


// Disable Gutenberg on the back end.   Ce sont des methode qui viennet ajouter certains comportement par défaut de wordpress
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {            //unqueue : au momement où on en aura besoin , on va l'enlever
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );


