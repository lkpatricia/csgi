<?php
/**
 * The template for displaying all single resouce posts
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-simple.php' );
?>
<div class="section half">
	
	<div class="wrapper">
		
		<div class="has-sidebar flex-wrapper">

			<?php
			while ( have_posts() ) : the_post();
	
				include_once( get_template_directory() . '/template-parts/resources-parts/content-single-resource.php' );

			endwhile; // End of the loop.
			?>

		</div>
		
	</div>
	
</div>

<?php
get_template_part( 'template-parts/prefooter' );

get_footer();
