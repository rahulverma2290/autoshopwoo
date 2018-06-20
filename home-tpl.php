<?php
/* Template Name: Home */
get_header();
?>

<section id="hero" class="hero">
		<div id="hero-slider" class="hero-slider">
			<!-- Slide #1 -->
			
			<?php
				//global $wpdb;
				global $post;
				$args = array( 'post_type' => 'sliders', 'posts_per_page' => 3, 'order' => 'ASC' );
				$the_query = new WP_Query( $args );
				?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post();
					$headin = get_post_meta( $the_query->post->ID, 'slider_heading', true );
					$checkbutonlink = get_post_meta( $the_query->post->ID, 'check_now_button_link', true );
					$checkbuton = get_post_meta( $the_query->post->ID, 'check_now_button', true );
					$purchasebuton = get_post_meta( $the_query->post->ID, 'purchase_button', true );
					$purchasebutonlink = get_post_meta( $the_query->post->ID, 'purchase_button_link', true );
				?>
				<div class="slide bg-overlay">
					<div class="bg-section">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="container vertical-center">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
								<div class="slide-content">
								<?php if($the_query->post->ID == '43'){ ?>
								<div class="slide-icon">
									<i class="icon icon-Settings"></i>
								</div>
								<?php } ?>
									<div class="slide-heading"> <?php the_title(); ?> </div>
									<div class="slide-title">
										<h2><?php echo $headin; ?></h2>
									</div>
									<div class="slide-desc"> <?php the_content(); ?> </div>
									<?php //echo $the_query->post->ID; ?>
									<?php
										if($the_query->post->ID == '40'){ ?>
											<div class="slide-action"></div>
									<?php } elseif($the_query->post->ID == '43') { ?>
											<div class="slide-action">
												<a class="btn btn-primary" href="<?php echo $checkbutonlink; ?>"><?php echo $checkbuton; ?></a>
												<a class="btn btn-primary btn-white" href="<?php echo $purchasebutonlink; ?>"><?php echo $purchasebuton; ?></a>
											</div>
									<?php } else{ ?>
											<div class="slide-action">
												<a class="btn btn-primary" href="<?php echo $checkbutonlink; ?>"><?php echo $checkbuton; ?></a>
											</div>
									<?php } ?>
									
								</div>
							</div>
							<!-- .col-md-12 end -->
						</div>
						<!-- .row end -->
					</div>
					<!-- .container end -->
				</div>
				<?php endwhile; ?>
			<!-- .slide end -->
			<!-- Slide #2 -->
			<!--<div class="slide bg-overlay">
				<div class="bg-section">
					<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/sliders/4.jpg" alt="Background"/>
				</div>
				<div class="container vertical-center">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<div class="slide-content">
								<div class="slide-heading"> The Best Theme For Auto Shops </div>
								<div class="slide-title">
									<h2>Say Hello To <span class="color-theme">Car Shop !</span></h2>
								</div>
								<div class="slide-desc"> Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres. </div>
							</div>
						</div>
						<!-- .col-md-12 end
					</div> -->
					<!-- .row end 
				</div>-->
				<!-- .container end 
			</div>-->
			<!-- .slide end -->
			
			<!-- Slide #1 -->
			<!--<div class="slide bg-overlay">
				<div class="bg-section">
					<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/sliders/1.jpg" alt="Background"/>
				</div>
				<div class="container vertical-center">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<div class="slide-content">
								<div class="slide-icon">
									<i class="icon icon-Settings"></i>
								</div>
								<div class="slide-heading"> The Best Theme For Auto Shops </div>
								<div class="slide-title">
									<h2>Say Hello To <span class="color-theme">Car Shop !</span></h2>
								</div>
								<div class="slide-desc"> Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres. </div>
								<div class="slide-action">
									<a class="btn btn-primary" href="#">Check It Now</a>
									<a class="btn btn-primary btn-white" href="#">Purchase Now</a>
								</div>
							</div>
						</div>
						<!-- .col-md-12 end 
					</div>-->
					<!-- .row end 
				</div>-->
				<!-- .container end 
			</div>-->
			<!-- .slide end -->
		</div>
		<!-- #hero-slider end -->
	</section>
	<!-- #hero -->
	
	<!-- Shop product grid right sidebar
============================================= -->
	<section id="shopgrid" class="shop shop-grid shop-items">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">we get</p>
					<h2>New Items</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<div class="container">
			<div class="row">
				<!-- Product #1 -->
				
				<?php
					$args = array(
						'post_type' => 'product',
						'stock' => 1,
						'posts_per_page' => 8,
						'orderby' =>'date',
						'order' => 'DESC'
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<!--<div class="span3">
					<a id="id-<?php /* the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
					<h3><?php the_title(); ?></h3>
					<span class="price"><?php echo $product->get_price_html(); ?></span>
					</a>
					<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); */ ?>
					</div><!-- /span3 -->

				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; ?>
						<div class="product-hover">
							<div class="product-action">
								<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?><!-- For add to cart button -->
								<a class="btn btn-primary" href="<?php the_permalink(); ?>">Item Details</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
						<?php
							  global $post, $product;
							  $categ = $product->get_categories();
							  echo $categ;
						?>
							<!--<a href="#">Opel</a>-->
						</div>
						<!-- .product-cat end -->
						<div class="prodcut-title">
							<h3>
								<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h3>
						</div>
						<!-- .product-title end -->
						<div class="product-price">
							<!--<span class="symbole">$</span>--><span><?php echo $product->get_price_html(); ?></span>
						</div>
						<!-- .product-price end -->
						
					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			<?php
			   global $post;
					$existing_terms = get_terms('product_cat', array(
					'meta_key' => 'show_category',
					'meta_value' => 'yes'
					)
				  );
				  //print_r($existing_terms);
			   if($existing_terms) {
			?>

			<div class="col-md-12 featured-section">
				<div class="col-md-12">
					<h2>Featured Category</h2>
				</div>
			</div>
				<?php
					$taxonomy     = 'product_cat';
					$orderby      = 'name';
					$show_count   = false;
					$pad_counts   = true;
					$hierarchical = true;
					$title        = '';
					$field        = 'show_category';
					 
					$args1 = array(
					  'taxonomy'     => $taxonomy,
					  'orderby'      => $orderby,
					  'show_count'   => $show_count,
					  'pad_counts'   => $pad_counts,
					  'hierarchical' => $hierarchical,
					  'title_li'     => $title,
					  'meta_key'     => 'show_category',
					  'meta_value'   => 'yes'
					);
					?>

				
						<?php
							$get_featured_cats = array(
								'taxonomy'     => 'product_cat',
								'orderby'      => $orderby,
							    'show_count'   => $show_count,
							    'pad_counts'   => $pad_counts,
							    'hierarchical' => $hierarchical,
							    'title_li'     => $title,
							    'meta_key'     => 'show_category',
							    'meta_value'   => 'yes'
							);
							$all_categories = get_categories( $get_featured_cats );
							$j = 1;
							foreach ($all_categories as $cat) {
								$cat_id   = $cat->term_id;
								$cat_link = get_category_link( $cat_id );

								$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
								$image = wp_get_attachment_url( $thumbnail_id );
								?>
							<div class="col-md-12 name-cat">
							
								<div class="col-md-12">
									<a href="<?php echo $cat_link; ?>"><h3><?php echo $cat->name; // Get Category Name ?></h3></a>
								</div>
							
							</div>

							<div class="col-md-12">
								<div class="col-md-12 image"><a href="<?php echo $cat_link; ?>"><img src="<?php echo $image; ?>"></a></div>
							</div>

							<div class="col-md-12">
								<div class="col-md-12 descrip"><?php echo $cat->description; // Get Category Description ?></div>
							</div>

							<?php	$j++;

							}
									wp_reset_query();
							?>
			   <?php } ?>

				 <?php /* fetch defaults category
				 $categories = get_categories();
				foreach($categories as $category) {
				   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
				} */
				?>

				<!-- Product #2
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/2.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end
					</div>-->
					<!-- .product-img end
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Subaru</a>
						</div>-->
						<!-- .product-cat end
						<div class="prodcut-title">
							<h3>
								<a href="#">OIL FILTER</a>
							</h3>
						</div>-->
						<!-- .product-title end
						<div class="product-price">
							<span class="symbole">$</span><span>40.00</span>
						</div>-->
						<!-- .product-price end
					</div>-->
					<!-- .product-bio end
				</div>-->
				<!-- .product end -->

				<!-- Product #3
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/3.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end
					</div>-->
					<!-- .product-img end
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Opel</a>
						</div>-->
						<!-- .product-cat end 
						<div class="prodcut-title">
							<h3>
								<a href="#">Belt Car Engine</a>
							</h3>
						</div>-->
						<!-- .product-title end 
						<div class="product-price">
							<span class="symbole">$</span><span>180.00</span>
						</div>-->
						<!-- .product-price end 
						
					</div>-->
					<!-- .product-bio end 
				</div>-->
				<!-- .product end -->
				
				<!-- Product #4 
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/4.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end 
					</div>-->
					<!-- .product-img end 
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Bmw</a>
						</div>-->
						<!-- .product-cat end 
						<div class="prodcut-title">
							<h3>
								<a href="#">Front LIGHTING</a>
							</h3>
						</div>-->
						<!-- .product-title end 
						<div class="product-price">
							<span class="symbole">$</span><span>28.00</span>
						</div>-->
						<!-- .product-price end 
						
					</div>-->
					<!-- .product-bio end
				</div> -->
				<!-- .product end -->
				
				<!-- Product #5 
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/5.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end 
					</div>-->
					<!-- .product-img end 
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Audi</a>
						</div>-->
						<!-- .product-cat end 
						<div class="prodcut-title">
							<h3>
								<a href="#">Thermal Fan</a>
							</h3>
						</div>-->
						<!-- .product-title end 
						<div class="product-price">
							<span class="symbole">$</span><span>240.00</span>
						</div>-->
						<!-- .product-price end 
						
					</div>-->
					<!-- .product-bio end 
				</div>-->
				<!-- .product end -->
				
				<!-- Product #6 
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/6.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end 
					</div>-->
					<!-- .product-img end 
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Toyota</a>
						</div>-->
						<!-- .product-cat end
						<div class="prodcut-title">
							<h3>
								<a href="#">Cold Air System</a>
							</h3>
						</div>-->
						<!-- .product-title end
						<div class="product-price">
							<span class="symbole">$</span><span>68.00</span>
						</div>-->
						<!-- .product-price end

					</div>-->
					<!-- .product-bio end
				</div>-->
				<!-- .product end -->

				<!-- Product #7 
				<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/1.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>-->
						<!-- .product-overlay end 
					</div>-->
					<!-- .product-img end 
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Opel</a>
						</div>-->
						<!-- .product-cat end 
						<div class="prodcut-title">
							<h3>
								<a href="#">Brake Discs</a>
							</h3>
						</div>-->
						<!-- .product-title end 
						<div class="product-price">
							<span class="symbole">$</span><span>68.00</span>
						</div>-->
						<!-- .product-price end 
						
					</div>-->
					<!-- .product-bio end 
				</div>-->
				<!-- .product end -->
				
				<!-- Product #8 -->
				<!--<div class="col-xs-12 col-sm-6 col-md-3 product">
					<div class="product-img">
						<img  src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/grid/2.jpg" alt="Product"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="#">Add To Cart</a>
								<a class="btn btn-primary" href="#">Item Details</a>
							</div>
						</div>
						<!-- .product-overlay end 
					</div>-->
					<!-- .product-img end 
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Subaru</a>
						</div>-->
						<!-- .product-cat end 
						<div class="prodcut-title">
							<h3>
								<a href="#">OIL FILTER</a>
							</h3>
						</div>-->
						<!-- .product-title end 
						<div class="product-price">
							<span class="symbole">$</span><span>40.00</span>
						</div>-->
						<!-- .product-price end 
						
					</div>-->
					<!-- .product-bio end 
				</div>-->
				<!-- .product end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #shopgrid end -->
	
	<!-- Clients
============================================= -->
	<section id="clients" class="clients bg-gray">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">Awesome</p>
					<h2>Our Brands</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="#">Check All Brands</a>
				</div>
				<!-- .client end -->
			</div>
			<!-- .row end -->
			
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="clients-bg">
				<div class="row">
					<div class="col-xs-12 colsm-12 col-md-12 client-carousel">
						<!-- Client #1 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/1.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #2 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/2.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #3 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/3.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #4 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/4.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #5 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/5.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #6 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/6.png" alt="client">
						</div>
						<!-- .client end -->
						<!-- Client #4 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/4.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #5 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/5.png" alt="client">
						</div>
						<!-- .client end -->
						
						<!-- Client #6 -->
						<div class="client">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clients/6.png" alt="client">
						</div>
						<!-- .client end -->
					</div>
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .container end -->
	</section>
	<!-- #clients end -->
	
	<!-- Offers
============================================= -->
	<section id="offers" class="offers">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="widget widget-recent-products">
						<div class="widget-title">
							<h5>Special Offer</h5>
						</div>
						<div class="widget-content">
							<!-- Product #1 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/4.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Front LIGHTING Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$13.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #2 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/5.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Thermal Fan Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$15.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #3 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/6.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Cold Air System Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$11.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
						</div>
						<!-- .widget-content end -->
					</div>
					<!-- .widget-recent-product end -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="widget widget-recent-products">
						<div class="widget-title">
							<h5>Best Sellers</h5>
						</div>
						<div class="widget-content">
							<!-- Product #1 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/7.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Front LIGHTING Name Goes Here </a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$103.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #2 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/8.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Thermal Fan Name Goes Here </a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$150.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #3 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/9.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Cold Air System Name Goes Here </a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$61.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
						</div>
						<!-- .widget-content end -->
					</div>
					<!-- .widget-recent-product end -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="widget widget-recent-products">
						<div class="widget-title">
							<h5>Featured</h5>
						</div>
						<div class="widget-content">
							<!-- Product #1 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/4.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Front LIGHTING Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$13.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #2 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/5.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Thermal Fan Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$95.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							
							<!-- Product #3 -->
							<div class="product">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/6.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Cold Air System Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="color-theme">$71.99</span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
						</div>
						<!-- .widget-content end -->
					</div>
					<!-- .widget-recent-product end -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="widget widget-recent-products">
						<div class="widget-title">
							<h5>Sales</h5>
						</div>
						<div class="widget-content">
							<?php
								global $post;
								$args = array(
								'post_type'      => array('product', 'product_variation'), /* for both products variable (product_variation) and simple (product)*/
								'posts_per_page' => 3,
								'order' => 'ASC',
								'meta_query'     => array(
									'relation' => 'BETWEEN',
									array( // Simple products type
										'key'           => '_sale_price',
										'value'         => 0,
										'compare'       => '>',
										'type'          => 'numeric'
									),
									 array( // Variable products type
										/* 'key'           => '_min_variation_sale_price',
										'value'         => 0,
										'compare'       => '>',
										'type'          => 'numeric' */
									)
								)
							);

							global $product;
							global $woocommerce;
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							//print_r($price);
							$sale = get_post_meta( get_the_ID(), '_sale_price', true);
							?>

							<!-- Product #1 -->
							<div class="product">
							<?php
								if (has_post_thumbnail( $loop->post->ID )) ?>
								<?php echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); ?>
								<div class="product-desc">
									<div class="product-title">
										<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"><?php the_title(); ?></a>
									</div>
									<div class="product-meta">
									   <span class="discount"><?php echo $price; ?></span><span class="color-theme"><?php echo $sale; ?></span>
									</div>
								</div>
							</div>
							<!-- .recent-product end -->
							<?php endwhile;
								wp_reset_query();
							?>
							<!-- Product #2
							<div class="product">
								<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/8.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Thermal Fan Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="discount">$60.99</span><span class="color-theme">$19.99</span>
									</div>
								</div>
							</div>-->
							<!-- .recent-product end -->

							<!-- Product #3
							<div class="product">
								<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shop/thumb/9.jpg" alt="product"/>
								<div class="product-desc">
									<div class="product-title">
										<a href="#">Cold Air System Name Goes Here</a>
									</div>
									<div class="product-meta">
										<span class="discount">$100.99</span><span class="color-theme">$71.99</span>
									</div>
								</div>
							</div>-->
							<!-- .recent-product end -->
						</div>
						<!-- .widget-content end -->
					</div>
					<!-- .widget-recent-product end -->
				</div>
			</div>
		</div>
		<!-- .container end -->
	</section>
	<!-- #offers end -->

<?php
get_footer();
?>