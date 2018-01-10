<?php
/**
 * The template for displaying all single Media posts
 *
 * @package CSG_-_Together_you_win
 */

get_header();

if ( has_term( 'perspectives', 'media_type' ) ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-simple.php' );
	
else :

	include_once( get_template_directory() . '/template-parts/heroes/hero-no-img.php' );
	
endif;
?>

<div class="section">
	
	<div class="wrapper">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-media' );

		endwhile;
		?>
					
	</div>
	
</div>

<?php
get_footer();
