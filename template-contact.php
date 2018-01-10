<?php
/*
 * Template Name: Contact
 *
*/

get_header();

include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-swiftype-index="true">

	<div class="section">
		
		<div class="wrapper">
			
			<div class="has-sidebar flex-wrapper">
				
				<main>
					
					<h2>Request Information</h2>
					
					<form>
						<input class="two-up" type="text" placeholder="First Name" />
						<input class="two-up" type="text" placeholder="Last Name" />
						<input class="two-up" type="text" placeholder="Job Title" />
						<input class="two-up" type="text" placeholder="Company" />
						<input type="text" placeholder="Country" />
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
						<input class="two-up" type="email" placeholder="Email" />
						<input class="two-up" type="text" placeholder="Phone" />
						<textarea rows="3" placeholder="Detailed Requests/Comments"></textarea>
						<button class="btn" type="submit">Submit</button>
					</form>
					
					<div class="map">
						
						
						
					</div>
					
				</main>
				
				<aside class="sidebar">
					
					<section class="widget widget-contact">
						<h2 class="widget-title">Global Locations</h2>
						
						<div>
							<h3>Corporate Headquarters</h3>
							
							<div class="address">
								<p>1234 Address Drive<br/>
									City, State 12345<br/>
									T: <a href="tel:1234567890">+1 123 456 7890</a><br/>
									T: <a href="tel:1234567890">+1 123 456 7890</a>
								</p>
							</div>
						</div>
						
						<div class="drawer-wrapper">
							
							<section class="drawer">
								
					            <h3 class="drawer-title">North America<span class=""><i class="i-add"></i></span></h3>
					            
					            <div class="drawer-content">
					                
					                <ul class="address-list un-list">
						                <li class="address-list-item">
						                		<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
					                </ul>
					                
					            </div>
					            
					        </section>
					        
					        <section class="drawer">
								
					            <h3 class="drawer-title">Asia Pacific<span class=""><i class="i-add"></i></span></h3>
					            
					            <div class="drawer-content">
					                
					                <ul class="address-list un-list">
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
					                </ul>
					                
					            </div>
					            
					        </section>
					        
					        <section class="drawer">
								
					            <h3 class="drawer-title">Caribbean & Latin America<span class=""><i class="i-add"></i></span></h3>
					            
					            <div class="drawer-content">
					                
					                <ul class="address-list un-list">
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
					                </ul>
					                
					            </div>
					            
					        </section>
					        
					        <section class="drawer">
								
					            <h3 class="drawer-title">Europe, Africa, & Middle East<span class=""><i class="i-add"></i></span></h3>
					            
					            <div class="drawer-content">
					                
					                <ul class="address-list un-list">
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
						                <li class="address-list-item">
											<div class="address">
												<h4>Londrina</h4>
												<p>Av. Higienopolis<br/>
													1601 - 2fl Londrina,<br/>
													Parana Brazil<br/>
													T: <a href="tel:1234567890">+1 123 456 7890</a>
												</p>
						                		</div>
						                </li>
					                </ul>
					                
					            </div>
					            
					        </section>
							
						</div>
						
					</section>
					
				</aside>
			</div>
			
		</div>
		
	</div>

</article>
<?
get_footer();