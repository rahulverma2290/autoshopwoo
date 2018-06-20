<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<!--<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		//echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		//echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		//_e( 'Menu', 'twentyseventeen' );
		?>
	</button>-->
	<div class="navbar-header">
	
		<?php the_custom_logo(); ?>
	
	</div>

	<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">

	<?php /* wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => '',
		'menu_class'     => 'nav navbar-nav navbar-left'
	) ); */ ?>

	<?php
            wp_nav_menu( array(
                'menu'              => 'mainmenu',
                'theme_location'    => 'top',
                'depth'             => 2,
                'container'         => 'div', /* Nav or Div apply */
                'container_class'   => 'collapse navbar-collapse', /* div ki class */
                'container_id'      => 'bs-example-navbar-collapse-1', /* div ki id */
                'menu_class'        => 'nav navbar-nav navbar-left', /* ul ki class */
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
    ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
	</div>