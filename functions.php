<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


/**
 * WordPress Widgets start right here.
 */
function custom_widgets_init() {

      register_sidebar(array(
        'name' => __('Footer COL1', 'gents'),
        'description' => __('footer.php', 'gents'),
        'id' => 'footer-col1',
        'before_title' => '<div class="footer-title"><h4>',
        'after_title' => '</h4></div>',
        'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
        'after_widget' => '</div>'
    ));

      register_sidebar(array(
        'name' => __('Footer COL2', 'gents'),
        'description' => __('footer.php', 'gents'),
        'id' => 'footer-col2',
        'before_title' => '<div class="footer-title"><h4>',
        'after_title' => '</h4></div>',
        'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
        'after_widget' => '</div>'
    ));

      register_sidebar(array(
        'name' => __('Footer COL3', 'gents'),
        'description' => __('footer.php', 'gents'),
        'id' => 'footer-col3',
        'before_title' => '<div class="footer-title"><h4>',
        'after_title' => '</h4></div>',
        'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
        'after_widget' => '</div>'
    ));

      register_sidebar(array(
        'name' => __('Footer COL4', 'gents'),
        'description' => __('footer.php', 'gents'),
        'id' => 'footer-col4',
        'before_title' => '<div class="footer-title"><h4>',
        'after_title' => '</h4></div>',
        'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
        'after_widget' => '</div>'
    ));

}

add_action('widgets_init', 'custom_widgets_init');

?>
