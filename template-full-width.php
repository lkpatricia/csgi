<?php
/*
 * Template Name: Full Width
 *
 * Template with full width content area
*/

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>
<div class="section">
	
	<div class="wrapper">

		<?php
		if ( have_posts() ) :
			
			while ( have_posts() ) : the_post();
	
				get_template_part( 'template-parts/content', 'full-width' );

			endwhile; // End of the loop.
			
		endif;
		?>
		
	</div>
	
</div>

<?php
get_footer();