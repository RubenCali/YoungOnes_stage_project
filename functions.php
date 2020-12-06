<?php




function load_stylesheets()
{

    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_scripts()
{
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', 1.12, true);
    wp_enqueue_script('FAlink', 'https://kit.fontawesome.com/f28585beb5.js', true);
    wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 1.12, true);

}
add_action('wp_enqueue_scripts', 'load_scripts');
