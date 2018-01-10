<?php
/*
 * Template Name: Content Half
 *
 * Template with two content bodies splitting the page 50/50
*/

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>
<div class="section half">
	
	<div class="wrapper">
		
		<div class="has-sidebar flex-wrapper">

			<?php
			while ( have_posts() ) : the_post();
	
				get_template_part( 'template-parts/content', 'page-half' );

			endwhile; // End of the loop.
			?>

		</div>
		
	</div>
	
</div>

<?php
get_footer();