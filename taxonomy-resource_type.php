<?php
/**
 * Resource Type Archive Page
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-no-img.php' );
?>

<div class="section">
	<div class="wrapper">
		
		<div class="flex-wrapper has-sidebar">
			
			<div class="entry-content">
				<?php
				if ( have_posts() ) :
					
					while ( have_posts() ) : the_post();
		
						include( get_template_directory() . '/template-parts/resources-parts/content-resources.php' );
		
					endwhile;
		
					csgi_pagination();
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif;
				?>
			</div>
			
			<aside class="sidebar" data-swiftype-index="false">
				
				<?php get_sidebar(); ?>
				
			</aside>
			
		</div>
		
	</div>
</div>

<?php
get_footer();