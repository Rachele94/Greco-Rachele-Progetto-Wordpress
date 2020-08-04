<?php

/* Imposto main.css come stylesheet del progetto*/
function ecotraveller_enqueue(){
	wp_enqueue_style( "main-theme", get_template_directory_uri()."/CSS/main.css", array(), "1.0.0", "all" );

	wp_enqueue_script( "script", get_template_directory_uri()."/JS/script.js", array(), "1.0.0", true );
	wp_localize_script("script", "url", array(get_template_directory_uri()) );
}

   add_action( "wp_enqueue_scripts", "ecotraveller_enqueue" );


/* Creo un menù gestibile dalla dashboard*/ 
add_action( 'init', 'crea_menu' );
  function crea_menu() {
   register_nav_menu( 'menu-wip', 'Menu principale' );
    }


add_filter( 'wp_nav_menu_items', 'home_link', 10, 2 );
    function home_link($items, $args) {
     if (is_home() || is_front_page())
       $class = 'class="current-menu-item"';
     else
      $class = '';

$home = '<li '.$class.'><a href="' . get_bloginfo('url') . '">' . __('Home')
  .'</a></li>';
    $items = $home.$items;
     return $items;
    }




/* aggiungo il supporto alle THUMBNAILS */

add_theme_support( 'post-thumbnails' );
if ( has_post_thumbnail() ) {
    the_post_thumbnail(array(300,200));
 }


/* aggiungo le widget areas per il FOOTER */

function register_widget_areas() {

	register_sidebar( array(
	  'name'          => 'Footer area one',
	  'id'            => 'footer_area_one',
	  'description'   => 'This widget area discription',
	  'before_widget' => '<section class="footer-area footer-area-one">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));
  
	register_sidebar( array(
	  'name'          => 'Footer area two',
	  'id'            => 'footer_area_two',
	  'description'   => 'This widget area discription',
	  'before_widget' => '<section class="footer-area footer-area-two">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));
  
	register_sidebar( array(
	  'name'          => 'Footer area three',
	  'id'            => 'footer_area_three',
	  'description'   => 'This widget area discription',
	  'before_widget' => '<section class="footer-area footer-area-three">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h4>',
	  'after_title'   => '</h4>',
	));
  
  
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );




 /* rendo lo sfondo modificabile dalla dashboard*/ 
	if( version_compare( $wp_version, '3.4', '>=' ) ):
		add_theme_support( 'custom-background' );
		else:
		add_custom_background();
		endif;
		

		add_image_size( 'sml_size', 300 ); 
		add_image_size( 'mid_size', 600 ); 
		add_image_size( 'lrg_size', 1200 ); 
		add_image_size( 'sup_size', 2400 );
	

?>