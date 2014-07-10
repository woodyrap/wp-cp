<?php 
if ( ! function_exists('myblog_products_post_type') ) {

// Register Custom Post Type
function myblog_products_post_type() {

	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'myblog' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'myblog' ),
		'menu_name'           => __( 'Products', 'myblog' ),
		'parent_item_colon'   => __( 'Parent Item:', 'myblog' ),
		'all_items'           => __( 'All Product', 'myblog' ),
		'view_item'           => __( 'View Product', 'myblog' ),
		'add_new_item'        => __( 'Add New Product', 'myblog' ),
		'add_new'             => __( 'Add New', 'myblog' ),
		'edit_item'           => __( 'Edit Product', 'myblog' ),
		'update_item'         => __( 'Update Product', 'myblog' ),
		'search_items'        => __( 'Search Product', 'myblog' ),
		'not_found'           => __( 'Not found Product', 'myblog' ),
		'not_found_in_trash'  => __( 'Not found Product in Trash', 'myblog' ),
	);
	$args = array(
		'label'               => __( 'product', 'myblog' ),
		'description'         => __( 'Catalog of Products', 'myblog' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'product', $args );

}

// Hook into the 'init' action
add_action( 'init', 'myblog_products_post_type', 0 );

}

//-----------------------------------------------------
// Add an icon to CUSTOM POST TYPE Products
//-----------------------------------------------------
function rp503_products_icon(){
	?>
	<style type="text/css" media="screen">
		#adminmenu #menu-posts-product .wp-menu-image::before{
			content: "\f318";
		}
	</style>
	<?php
}

add_action('admin_head', 'rp503_products_icon');

//-----------------------------------------------------
// Add CUSTOM TAXONOMY FOR Products
//-----------------------------------------------------

if ( ! function_exists( 'rp503_category_products_taxonomy' ) ) {

// Register Custom Taxonomy
function rp503_category_products_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Family of Product', 'Taxonomy General Name', 'myblog' ),
		'singular_name'              => _x( 'Family of Product', 'Taxonomy Singular Name', 'myblog' ),
		'menu_name'                  => __( 'Family of Products', 'myblog' ),
		'all_items'                  => __( 'All families', 'myblog' ),
		'parent_item'                => __( 'Parent family', 'myblog' ),
		'parent_item_colon'          => __( 'Parent family:', 'myblog' ),
		'new_item_name'              => __( 'New Item Family', 'myblog' ),
		'add_new_item'               => __( 'Add New Family', 'myblog' ),
		'edit_item'                  => __( 'Edit Family', 'myblog' ),
		'update_item'                => __( 'Update Family', 'myblog' ),
		'separate_items_with_commas' => __( 'Separate families with commas', 'myblog' ),
		'search_items'               => __( 'Search families', 'myblog' ),
		'add_or_remove_items'        => __( 'Add or remove families', 'myblog' ),
		'choose_from_most_used'      => __( 'Choose from the most used families', 'myblog' ),
		'not_found'                  => __( 'Not Found Family', 'myblog' ),
	);
	$rewrite = array(
		'slug'                       => 'family_products',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'categories_product', array( 'product' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'rp503_category_products_taxonomy', 0 );

}

?>