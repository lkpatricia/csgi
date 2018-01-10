<?php
/*
 * Template Name: Media
 *
 * For use with Media Path
*/

get_header();
$depth = get_page_depth();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-swiftype-index="true">
	
	<?php
	if ( $depth == 0 ) :
	
		include_once( get_template_directory() . '/template-parts/media-parts/media-landing.php' );
	
	elseif ( $depth == 1 ) :

		$this_page = get_queried_object();
		$title = $this_page->post_name;
		
		if ( $title == 'videos' ) :
		
			include_once( get_template_directory() . '/template-parts/media-parts/content-videos.php' );
			
		endif;
	
	endif; 
	?>
	
</div>

<?php
get_footer();