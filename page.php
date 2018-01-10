<?php
/**
 * PAGE
 * @package CSG_-_Together_you_win
 */

get_header(); 

include_once( get_template_directory(). '/template-parts/heroes/hero-half.php' );
 
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile;

get_footer();
