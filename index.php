<?php
/**
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>
<div class="section">
	
	<div class="wrapper">
		
		<div class="has-sidebar flex-wrapper">
			
			<main>
				
				<div class="flex-wrapper posts-wrapper">
					
				<?php
				if ( have_posts() ) :
		
					while ( have_posts() ) : the_post();
		
						get_template_part( 'template-parts/content', 'blog' );
		
					endwhile;
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif;
				?>
				
				</div>
				
				<?php csgi_pagination(); ?>
				
			</main>
			
			<aside class="sidebar" data-swiftype-index="false">
				
				<?php get_sidebar(); ?>
				
			</aside>

		</div>
		
	</div>
	
</div>

<?php
get_footer();
