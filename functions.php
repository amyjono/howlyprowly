<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyfifteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* ---- Register Widget Areas ---- */

function howly_widget_init() {
    // About Page widget below content
        register_sidebar( array(
                'name' => __( 'Widget on "About" Page', '' ),
                'id' => 'widget-below-about-content',
                'description' => __( 'Widgets added here will appear on all pages using the About Template'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after-widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
        ));
        // About Page widget below content
        register_sidebar( array(
                'name' => __( 'Widget on "For Sale" Page', '' ),
                'id' => 'widget-below-for-sale-content',
                'description' => __( 'Widgets added here will appear on all pages using the For Sale Template'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after-widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
        ));
    
}

add_action( 'widgets_init', 'howly_widget_init');

?>

