<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*/

/**
* Enqueue scripts and styles
*/
function suesdesign_css_styles() {
	wp_enqueue_style( 'suesdesign', get_template_directory_uri() . '/assets/css/styles.css', array(),'','screen' );
}

add_action( 'wp_enqueue_scripts', 'suesdesign_css_styles' );

function suesdesign_js() {

	wp_register_script('superfish', get_template_directory_uri() . '/assets/js/superfish.min.js',array('jquery'), '', 1);
	wp_register_script( 'mobile_menu', get_template_directory_uri() . '/assets/js/mobile_menu.js', '', '', 1 );
	wp_register_script( 'suesdesign_themejs', get_template_directory_uri() . '/assets/js/suesdesign_themejs.js', array('jquery', 'superfish', 'mobile_menu'), '', 1 );
	wp_enqueue_script( 'superfish' );
	wp_enqueue_script( 'mobile_menu' );
	wp_enqueue_script( 'suesdesign_themejs' );

}

add_action( 'wp_enqueue_scripts',  'suesdesign_js' );

/**
* Sidebars
*/

function suesdesign_widgets_init() {

// Register widgetized areas

	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'suesdesign' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );

	register_sidebar(array(
		'name'          => __( 'Footer 1', 'suesdesign' ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

	register_sidebar(array(
		'name'          => __( 'Footer 2', 'suesdesign' ),
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name'          => __( 'Footer 3', 'suesdesign' ),
		'id'            => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

}
add_action( 'widgets_init', 'suesdesign_widgets_init' );

/**
* Custom menu
*/

add_theme_support( 'menus' );

function register_suesdesign_menu() {
	register_nav_menu('main_navigation',__( 'Main Navigation' ));
}

add_action( 'init', 'register_suesdesign_menu' );

/**
*Featured image in post excerpt
*/

add_theme_support( 'post-thumbnails' );

/**
* Comments
*/

add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );


if ( ! function_exists( 'suesdesign_comment_nav' ) ) :
/**
* Display navigation to next/previous comments when applicable.
*
* Based on Twenty Fifteen 1.0
*/
function suesdesign_comment_nav() {
// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'suesdesign' ); ?></h2>
		<div class="nav-links">
	<?php
		if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'suesdesign' ) ) ) :
		printf( '<div class="nav-previous">%s</div>', $prev_link );
		endif;

		if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'suesdesign' ) ) ) :
		printf( '<div class="nav-next">%s</div>', $next_link );
		endif;
	?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
<?php
endif;

}
endif;

/**
* Add WooCommerce Support
*/

function custom_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

// Remove WooCommerce theme wrappers

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Add own wrappers

add_action('woocommerce_before_main_content', 'suesdesign_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'suesdesign_wrapper_end', 10);

function suesdesign_wrapper_start() {
  echo '<div class="outer-wrapper shadow">
			<div class="container">
				<main id="maincontent" role="main">';
}

function suesdesign_wrapper_end() {
  echo '</main>';
}