<?php
/**
 * Event Archives
 * @package CSG_-_Together_you_win
 */

get_header(); 

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>
<div class="section">
	
	<div class="wrapper">
		
		<div class="filter-area">
			
			<?php 
			include( get_template_directory() . '/template-parts/widgets/widget-industry.php' );
			?>
			
		</div>
		
		<main>
			
			<div class="flex-wrapper half">

			<?php    
            if ( have_posts() ) :
	
				while ( have_posts() ) : the_post();

					include( get_template_directory() . '/template-parts/events-parts/content-events.php' );
	
				endwhile;
	
			else :
	
				get_template_part( 'template-parts/content', 'none' );
	
			endif;
			?>
			
			</div>
			
			<?php csgi_pagination(); ?>

		</main>
		
	</div>
	
</div>
<?php
get_footer();
