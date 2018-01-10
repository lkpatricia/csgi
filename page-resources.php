<?php
/*
 * Template for Resources landing page
*/

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' ); 
?>
	
	<div class="section split-bkg-rev">
		
		<div class="wrapper flex-wrapper split-wrapper">
			
			<?php
			$terms = get_terms( array(
				'taxonomy' => 'resource_type',
				'hide_empty' => 0
			));
			
			foreach ( $terms as $term ) :
				
				// Get Sample Image
				$upload = get_field( 'resource_type_sample_image', $term );
				$img_id = $upload['id'];
				$img = wp_get_attachment_image( $img_id );
				
				// Get Title, Description and Archive URL
				$title = $term->name;
				$desc = $term->description;
				$url = get_term_link( $term );
			?>
			
			<div class="split-item content-intro has-img">
			
				<div class="content-intro-img">
					<?php echo $img; ?>
				</div>
				
				<div class="content-intro-content">
					
					<header class="content-intro-header">
												
						<h3 class="content-intro-title"><a href="<?php echo esc_url( $url ); ?>"><?php echo $title; ?></a></h3>		
										
					</header>
					
					<div class="content-intro-excerpt">
						
						<p><?php echo $desc; ?></p>
						
						<div class="">
							
							<a class="btn btn-simple" href="<?php echo esc_url( $url ); ?>"><i class="i-arrow-long"></i></a>
						
						</div>
						
					</div>
					
				</div>
				
			</div><!-- Item -->
			
			<?php
			endforeach;
			?>
		
		</div>
		
	</div>

<?php
get_footer();