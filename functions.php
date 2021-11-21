<?php

// adding the css and js files

function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap');
    wp_enqueue_style('fontawsome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri(), null, microtime(),);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'),null,microtime(),true);
}

add_action('wp_enqueue_scripts','gt_setup');

//* adding theme support

function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
      array('comment-list' , 'comment-form' , 'search-from')
);
}

add_action('after_setup_theme','gt_init');

// projects post type
function gt_custom_post_type() {
    register_post_type('project',
    array(
        'rewrite' => array('slug' => 'projects'),
        'lables'  => array(
            'name'=> 'projects',
            'singular_name' => 'projects',
            'add_new_items' => 'add new projects' ,
            'edit_items' => 'edit projects'
        ),
        'menu-icon' => 'dashicons-clipkboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor' , 'excerpt' , 'comments'
        )
        )
        );
}
add_action('init' , 'gt_custom_post_type');
// sidebar

function gt_widgets() {
    register_sidebar(
        array(
            'name' => 'main sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init','gt_widgets');