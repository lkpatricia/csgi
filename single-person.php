<?php
/**
 * The template for displaying all single person posts
 *
 * @package CSG_-_Together_you_win
 */

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-no-img.php' );
?>

<div class="section">
	
	<div class="wrapper">
		
		<img class="bio-image" src="http://placehold.it/350x350" alt="" />
		<h4 class="person-title"><?php the_field( 'person_title' ); ?></h4>
		<?php the_field( 'person_bio' ); ?>
		
	</div>
	
</div>

<?php
get_footer();
