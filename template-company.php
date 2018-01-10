<?php
/*
 * Template Name: Company
*/

get_header();
$depth = get_page_depth();

if ( $depth == 0 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-full.php' );
	
elseif ( $depth == 1 || $depth == 2 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
	
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-swiftype-index="true">
		
	<?php
	if ( $depth == 0 ) :
	
		include_once( get_template_directory() . '/template-parts/company-parts/company-about.php' );
		
	elseif ( $depth == 1 ) :
	
		if ( is_page( 'client-list') ) :
	
			include_once( get_template_directory() . '/template-parts/company-parts/company-client-list.php' );	
			
		elseif ( is_page( 'awards' ) ) :
		
			include_once( get_template_directory() . '/template-parts/company-parts/company-awards.php' );
			
		elseif ( is_page( 'industry-associations' ) ) :
		
			include_once( get_template_directory() . '/template-parts/company-parts/company-assoc.php' );
		
		elseif ( is_page( 'partners' ) ) :
		
			include_once( get_template_directory() . '/template-parts/company-parts/company-partners.php' );
			
		elseif ( is_page ( 'leadership' ) ) :
		
			include_once( get_template_directory() . '/template-parts/company-parts/company-leadership.php' );
		
		endif;
	
	endif; 
	?>

</article>

<?php
get_footer();