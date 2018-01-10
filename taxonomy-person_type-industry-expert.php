<?php
/**
 * Person Type Archive Page
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
		
						get_template_part( 'template-parts/content', 'media' );
		
					endwhile;
		
					csgi_pagination();
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif;
				?>
			</div>
			
			<aside class="sidebar" data-swiftype-index="false">
				
				<div class="widget custom-filter-widget">
					
					<h3 class="widget-title">Industry</h3>
					
					<div class="form-group custom-select">
	                    <input type="text" class="in-behind" value="Select Industry" placeholder="Select Industry" disabled="disabled" />
	                    <select name="select">
		                    <option selected="selected">Filter</option>
		                    <option>Filter One</option>
		                    <option>Filter Two</option>
		                    <option>Filter Three</option>
		                    <option>Filter Four</option>
						</select>
						
					</div>
					
				</div>
				
				<div class="widget custom-archive-widget">
					
					<h3 class="widget-title">Archive</h3>
					
					<div class="form-group custom-select">
	                    <input type="text" class="in-behind" value="Select Month" placeholder="Select Month" disabled="disabled" />
	                    <select name="select">
		                    <option selected="selected">August 2017</option>
		                    <option>June 2017</option>
		                    <option>March 2017</option>
		                    <option>February 2017</option>
		                    <option>January 2017</option>
						</select>
						
					</div>
					<?php
/*
					$args = array(
						'post_type' => 'resource',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'resource_type',
				                'field' => 'slug',
				                'terms' => 'white-papers'
				            ),
				        ),
				     );
				
					$loop = new WP_Query($args);
					while ( $loop->have_posts() ) : $loop->the_post();
					
						the_date();
					
					endwhile;
					wp_reset_postdata();
	                
                    ?>
                    <?php
	                    $today = getdate();

						$args = array(
							'tax_query' => array(
								array(
									'taxonomy' => 'resource_type',
									'field' => 'slug',
									'terms' => 'white-papers'
								)
							),
							'year' => $today['year'],
							'monthnum' => $today['mon'],	
						);

						$the_query = new WP_Query( $args );

						echo 'Total Number of Posts For Current Month: ' . $the_query->found_posts;
*/
					?>
				</div>
				
			</aside>
			
		</div>
		
	</div>
</div>

<?php
get_footer();