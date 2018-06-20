<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!-- Document Wrapper
	============================================= -->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/external.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="wrapper clearfix">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="navbar-spy" class="header header-1 site-header" role="banner">

		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="list-inline top-contact">
							<li><span>Phone :</span> + 2 0106 5370701</li>
							<li><span>Email :</span> 7oroof@7oroof.com</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-7">
						<ul class="list-inline pull-right top-links">
							<li>
								<a href="#">Login</a>
								/
								<a href="#">Register</a>
							</li>
							<li>
								<a href="#">Wishlist</a>
							</li>
							<li>
								<a href="#">Checkout</a>
							</li>
							<li>
								<a href="#">Stores</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">Arabic</a>
									</li>
									<li>
										<a href="#">German</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</div>
		

		<nav id="primary-menu" class="navbar navbar-fixed-top affix-top" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
				<div class="container">
						<!-- .top-bar end -->
						<?php if ( has_nav_menu( 'top' ) ) : ?>
							<!--<div class="navigation-top">
								<div class="wrap">-->
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								<!-- </div><!-- .wrap -->
							<!-- </div><!-- .navigation-top -->
						<?php endif; ?>
				</div>
		</nav>
	</header>
	
	<!-- Hero #2
============================================= -->
