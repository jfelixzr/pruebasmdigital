<?php

/** Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/shortcodes.php';

// Cuando el tema es activado
function cinemax_setup() {

    // Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // Agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'cinemax_setup');

// Menus de navegación, agregar más utilizando el arreglo
function cinemax_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'cinemax' )
    ));
}

add_action('init', 'cinemax_menus');

// Scripts y Styles 
function cinemax_scripts_styles() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap|Poppins:ital,wght@0,400;0,700;1,400', array(), '1.0.0' );


  

    // la hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
   
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    if(is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.4.5');
    }
    if(is_front_page()) {
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.4.5', true);
 
    }
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
    
    wp_enqueue_script('axios-js', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array(), true);
}
add_action('wp_enqueue_scripts', 'cinemax_scripts_styles');


// Definir Zona de Widgets
function cinemax_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1', 
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar( array(
        'name' => 'Sidebar 2', 
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'cinemax_widgets' );

/** Imagen Hero */

// function cinemax_hero_image() {
    
//     // obtener id pagina principal
//     $front_page_id = get_option('page_on_front');
//     // Obtener id imagen
//     $id_imagen = get_field('imagen_hero',  $front_page_id);
//     // Obtener la imagen
//     $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

//     // Style CSS
//     wp_register_style('custom', false);
//     wp_enqueue_style('custom');

//     $imagen_destacada_css = "
//         body.home .site-header {
//             background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)  ), url($imagen) ;
//         }
//     ";

//     wp_add_inline_style('custom', $imagen_destacada_css);
// }
// add_action('init', 'cinemax_hero_image');