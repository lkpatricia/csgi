<?php
/**
 * HOME PAGE
 * @package CSG_-_Together_you_win
 */

get_header(); 
?>
	<div class="fullpage">
		
		<div class="hero-block"></div>
		
	<?php		
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'home' );

	endwhile;
	
	get_footer();
	?>
	
	</div>

<?php
