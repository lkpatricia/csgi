<?php
/**
 * The template for displaying all single event posts
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-no-img.php' );
?>

<div class="section">
	
	<div class="wrapper">
		
		<div class="has-sidebar flex-wrapper">

			<?php
			while ( have_posts() ) : the_post();
	
				include( get_template_directory() . '/template-parts/events-parts/content-single-event.php' );

			endwhile;
			?>

		</div>
		
	</div>
	
</div>

<?php
get_template_part( 'template-parts/prefooter' );

get_footer();
