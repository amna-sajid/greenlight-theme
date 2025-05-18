<?php

function mytheme_enqueue_styles() {

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');

    // Google Material Symbols
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined');

    // Font Awesome v4
    wp_enqueue_style('font-awesome-v4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    // Font Awesome v6 (latest)
    wp_enqueue_style('font-awesome-v6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

    // Google Font: Poppins
    wp_enqueue_style('google-font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    // Custom Main CSS (local)
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', microtime());
	
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');



function mytheme_enqueue_scripts() {

    // jQuery
    wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), null, true);

    // Popper.js
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery-custom'), null, true);

    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery-custom', 'popper'), null, true);

    // Owl Carousel JS
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array('jquery-custom'), null, true);

    // Custom Main JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery-custom'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// Navbar
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme-name'), 
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');



// To Registered Template into Edit Page
function custom_theme_setup() {
    add_theme_support('page-templates'); 
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_page_templates_register($templates) {
    $templates['single-home-page.php'] = 'Custom Layout';
    return $templates;
}
add_filter('theme_page_templates', 'custom_page_templates_register');