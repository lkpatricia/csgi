<?php
/**
 * FOOTER
 * @package CSG_-_Together_you_win
 */

?>
<?php if( is_front_page() ) :

	if ( !is_mobile() ) :
	
		get_template_part( 'template-parts/prefooter' );
	
	else :
	
		echo '<section class="home-section fp-scrollable">';
		
	endif;

endif; ?>
<footer class="site-footer" data-swiftype-index="false">
	
	<div class="wrapper flex-wrapper">
		
		<div class="form-wrapper">
			
			<h2 class="form-header">Get in Touch</h2>
			
			<form>
				<input class="two-up" type="text" placeholder="First Name" />
				<input class="two-up" type="text" placeholder="Last Name" />
				<input type="email" placeholder="Email" />
				<div class="form-group custom-select">
                    <input type="text" class="in-behind" value="INDUSTRY" placeholder="Industry" />
                    <select name="select">
	                    <option value="0">INDUSTRY</option>
						<option>Broadband Cable & Satellite</option>
						<option>Wireless</option>
						<option>Wireline</option>
						<option>MVNO</option>
						<option>Internet of Things</option>
						<option>Media & Entertainment</option>
						<option>Financial Services</option>
						<option>Enterprise</option>
						<option>Logistics & Transportation</option>
						<option>Utilities</option>
					</select>
				</div>
				<button class="btn btn-white" type="submit">Submit</button>
			</form>
			
		</div>
		
		<div class="footer-nav-wrapper">
			
			<nav class="footer-nav">
				
				<?php 
				wp_nav_menu( 
					array(
						'menu' => 'footer-nav',
						'container' => ''
					)
				); 
				?>
				
			</nav>
			
			<nav class="social-nav">
				
				<?php if ( have_rows( 'social_instances', 'options' ) ) : ?>
				
				<ul>
					
					<?php 
					while ( have_rows( 'social_instances', 'options' ) ) : the_row(); 
					
					$account = strtolower( get_sub_field( 'social_account', 'options' ) );
					$social_url = get_sub_field( 'social_url', 'options' );
					?>
					
					<li><a href="<?php echo $social_url; ?>"><i class="i-<?php echo $account; ?>-square"></i></a></li>
					
					<?php endwhile; ?>
					
				</ul>
				
				<?php endif; ?>
				
			</nav>
			
		</div>
		
	</div>
	
	<div class="footer-color-bar">
		<svg height="9" x="0" y="0" viewBox="0 0 66.19 4.88"><rect class="blue" x="41.78" width="24.42" height="4.88"/><rect class="green" x="32.31" width="9.45" height="4.88"/><rect class="yellow" x="22.87" width="9.45" height="4.88"/><rect class="orange" x="7.38" width="15.49" height="4.88"/><rect class="purple" width="7.75" height="4.88"/></svg>
	</div>
	
</footer>

<?php if ( is_front_page() ) : ?>
</section><!-- home-section -->

<script>
jQuery(document).ready(function($) {
	$('.fullpage').fullpage({
		sectionSelector: '.home-section',
		navigation: true,
		paddingTop: '60px',
		scrollOverflow: true
	});
});
</script>

<?php 
endif;

wp_footer(); 

?>

</body>
</html>
