<?php
/**
 * Enqueue script with script.aculo.us as a dependency.
 */

function add_style_and_script() {
    wp_enqueue_style( 'customstyle', get_template_directory_uri() .'/css/style.css' , array(), 1, 'all');
    wp_enqueue_style( 'mainstyle', get_template_directory_uri() .'/style.css' , array(), 1, 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css' , array(), 1, 'all');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/css/font-awesome.min.css' , array(), 1, 'all');
    wp_enqueue_style( 'responsivecss', get_template_directory_uri() .'/css/responsive.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/linericon/style.css', get_template_directory_uri() .'/vendors/linericon/style.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/owl-carousel/owl.carousel.min.css', get_template_directory_uri() .'/vendors/owl-carousel/owl.carousel.min.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/lightbox/simpleLightbox.css', get_template_directory_uri() .'/vendors/lightbox/simpleLightbox.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/nice-select/css/nice-select.css', get_template_directory_uri() .'/vendors/nice-select/css/nice-select.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/animate-css/animate.css', get_template_directory_uri() .'/vendors/animate-css/animate.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/popup/magnific-popup.css', get_template_directory_uri() .'/vendors/popup/magnific-popup.css' , array(), 1, 'all');
    wp_enqueue_style( '/vendors/flaticon/flaticon.css', get_template_directory_uri() .'/vendors/flaticon/flaticon.css' , array(), 1, 'all');



    wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery-3.3.1.min.js', array( ) ,'3.3.1', true);
    wp_enqueue_script( '/js/popper.js', get_template_directory_uri() .'/js/popper.js', array( ) );
    wp_enqueue_script( 'js/bootstrap.min.js', get_template_directory_uri() .'/js/bootstrap.min.js' , array( ), 1, true );
    wp_enqueue_script( 'js/stellar.js', get_template_directory_uri() .'/js/stellar.js' , array(  ) );
    wp_enqueue_script( '/vendors/lightbox/simpleLightbox.min.js', get_template_directory_uri() .'/vendors/lightbox/simpleLightbox.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/nice-select/js/jquery.nice-select.min.js', get_template_directory_uri() . '/vendors/nice-select/js/jquery.nice-select.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/isotope/imagesloaded.pkgd.min.js', get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/isotope/isotope.pkgd.min.js', get_template_directory_uri() .'/vendors/isotope/isotope.pkgd.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/owl-carousel/owl.carousel.min.js', get_template_directory_uri() .'/vendors/owl-carousel/owl.carousel.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/popup/jquery.magnific-popup.min.js', get_template_directory_uri() .'/vendors/popup/jquery.magnific-popup.min.js' , array(  ) );
    wp_enqueue_script( 'js/jquery.ajaxchimp.min.js', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/counter-up/jquery.waypoints.min.js', get_template_directory_uri() .'/vendors/counter-up/jquery.waypoints.min.js' , array(  ) );
    wp_enqueue_script( '/vendors/counter-up/jquery.counterup.min.js', get_template_directory_uri() .'/vendors/counter-up/jquery.counterup.min.js' , array(  ) );
    wp_enqueue_script( 'js/mail-script.js', get_template_directory_uri() .'/js/mail-script.js' , array(  ) );
    wp_enqueue_script( 'js/theme.js', get_template_directory_uri() .'/js/theme.js' , array(  ) );
    wp_enqueue_script( 'js/contact.js', get_template_directory_uri() .'/js/contact.js' , array(  ) );
    wp_enqueue_script( 'js/custom.js', get_template_directory_uri() .'/js/custom.js' , array(  ) );
    wp_enqueue_script( 'js/gmaps.min.js', get_template_directory_uri() .'/js/gmaps.min.js' , array(  ) );
    wp_enqueue_script( 'js/jquery.form.js', get_template_directory_uri() .'/js/jquery.form.js' , array(  ) );
    wp_enqueue_script( 'jquery.validate.min.js', get_template_directory_uri() .'/js/jquery.validate.min.js' , array(  ) );


}
add_action( 'wp_enqueue_scripts', 'add_style_and_script' );

/**
 * Registering Nav Menu
 */

function theme_register_nav_menu() {
    register_nav_menu( 'top-menu', 'Top Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

//Default WordPress
the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );

add_theme_support( 'post-thumbnails' );


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
		return '<nav class="blog-pagination justify-content-center d-flex navigation %1$s" role="navigation">
        <ul class="pagination page-item">%3$s<li class="page-link">test
        <li class="page-item active">test2</li>
        </li>
        </ul>
	</nav>';
}


