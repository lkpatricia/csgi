<?php
/**
 * SIDEBAR
 * @package CSG_-_Together_you_win
 */
 
if ( is_blog() ) : 
	
	include( get_template_directory() . '/template-parts/widgets/widget-popular.php' );
	
	include( get_template_directory() . '/template-parts/widgets/widget-tags.php' );
	
	include( get_template_directory() . '/template-parts/widgets/widget-industry.php' );
	
	include( get_template_directory() . '/template-parts/widgets/widget-date.php' );

elseif ( is_tax( 'resource_type' ) ) :

	include( get_template_directory() . '/template-parts/widgets/widget-industry.php' );

elseif ( is_tax( 'media_type' ) ) :

	include( get_template_directory() . '/template-parts/widgets/widget-industry.php' );
	
	include( get_template_directory() . '/template-parts/widgets/widget-date.php' );

endif;
