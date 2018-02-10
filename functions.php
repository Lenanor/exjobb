<?php

// Enqueues style.css
function ronnells_styles() {
	wp_enqueue_style( 'main_css', get_stylesheet_uri() );
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action( 'wp_enqueue_scripts', 'ronnells_styles' );


// Enqueues scripts (app.js with dependencies slick and jquery)
function ronnells_js() {
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array('jquery'),'1', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/src/js/app.js', array('slick', 'jquery'), '1', true );
}
add_action( 'wp_enqueue_scripts', 'ronnells_js');


// Additional Image Size
// add_theme_support( 'post-thumbnails' );
// add_image_size( 'page-thumb', 300, 300 ); // Soft 

// Menues
register_nav_menus( array(
	'header-menu' => 'Header-meny',
) );

add_theme_support( 'post-thumbnails' );

// Hide adminbar
add_filter('show_admin_bar', '__return_false');

// Hide editor on specific pages.
function hide_editor() {
	global $pagenow;
	if( !('post.php' == $pagenow) ) return;
	// Get the Post ID
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	if( !isset( $post_id) ) return;
	//Hide editor on pages with specific page templates
	// Get the name of the Page template file
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	if($template_file == 'page-startsida.php' || 'page-publishing.php' || 'page-friends.php' || 'page-events.php' || 'page-buyandsell.php' || 'page-books.php' || 'page-aboutus.php'){
		remove_post_type_support('page', 'editor');
	}
}
add_action( 'admin_head', 'hide_editor' );



// Custom Excerpt function for Advanced Custom Fields Events
function custom_field_excerpt() {
	global $post;
	if(is_page_template('page-events.php')) {
	$text = get_field('event_presentation'); 
	}elseif(is_page_template('page-books.php')) {
	$text = get_field('about_book');
	}elseif(is_page_template('page-other.php')) {
	$text = get_field('other_presentation');
	}elseif(is_page_template('page-publishing.php')) {
	$text = get_field('om_boken');
	}else{
		$text = "";
	}

	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 30; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}
?>