<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


/**
*	Custom About Page background image 
*/ 
function my_styles_method() {
		if(!is_page_template('about.php')) {
			return;
		}
	$url = CFS()->get('about_background_image');
	$custom_css = "
					.about-hero{
						background-image: url({$url}),linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) );
						}";
				wp_add_inline_style( 'red-starter-style', $custom_css);
}
			add_action('wp_enqueue_scripts' , 'my_styles_method');


/**
*	Set product archive to 16 posts 
*/ 
function get_all_product_posts( $query ) {
  if( is_post_type_archive( 'product' ) ) {
    $query->set('posts_per_page', '16');
        return;
  }
}
add_action( 'pre_get_posts', 'get_all_product_posts' );