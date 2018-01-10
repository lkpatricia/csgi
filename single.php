<?php
/**
 * The template for displaying all single posts
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-simple.php' );
?>

<div class="section">
	
	<div class="wrapper">
		
		<div class="has-sidebar flex-wrapper">
			
			<main>

			<?php
			while ( have_posts() ) : the_post();
	
				get_template_part( 'template-parts/content', get_post_format() );
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
			endwhile; // End of the loop.
			?>
			
			</main>
		
			<aside class="sidebar">
				
				<?php get_template_part( 'template-parts/author' ); ?>
				
			</aside>
		
		</div>
		
	</div>
	
</div>

<?php
get_footer();
