<?php
    // logo	//
    add_theme_support( 'custom-logo' );

  add_theme_support( 'post-thumbnails' );

 


     // nav menu

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            
        )
    );
}
   add_action( 'init', 'register_my_menus' );





    function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );








//For Custom Post product:-

$labels = array(
    'name'               => _x('product', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'product', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'product', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'product', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New product', 'book', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New product', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New product', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit product', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View product', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All product', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search product', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent product:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No product found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No product found in Trash.', 'your-plugin-textdomain' )
);

$args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'product' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);

register_post_type( 'product', $args );






///////////////////////////////////////
///How to submit custom post type in wordpress from the Front-End

if(isset($_POST['title'])){
	
	//echo $_POST['title']; // print title variable value
	
	// create post object
	
	$my_post = array(
			'post_type' => 'product',
			'post_title' => $_POST['title'],
			'post_content' => $_POST['description'],
			'post_status' => 'publish', // and more status like publish,draft,private 
			
		);
	
	
	// i'm use wordpres predefine function/
	
    $pid = wp_insert_post($my_post);
	///
	

    if(!empty($_FILES['my-file']['name'])){

        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );
        
        
        $attachment_id = media_handle_upload( 'my-file', $pid );
        set_post_thumbnail( $pid, $attachment_id );
        }
        

	// echo 'New Post Saved !';
	
	
	// die; // stop script after form submit
}






// mobile // email
add_action('customize_register', 'theme_contact_customizer');
function theme_contact_customizer($wp_customize) {
    $wp_customize->add_section( 'contact_settings_section', array(
        'title' => 'Contact Info'
    ) );
    $wp_customize->add_setting( 'address', array(
        'default' => '',
    ) );
    $wp_customize->add_control( 'address', array(
        'label'       => 'Address',
        'description' => 'Add details here',
        'section'     => 'contact_settings_section',
        'type'        => 'textarea',
    ) );
    $wp_customize->add_setting( 'phone-number', array(
        'default' => '',
    ) );
    $wp_customize->add_control( 'phone-number', array(
        'label'       => 'Phone Number',
        'description' => 'Add details here',
        'section'     => 'contact_settings_section',
        'type'        => 'text',
    ) );
    $wp_customize->add_setting( 'email', array(
        'default' => '',
    ) );
    $wp_customize->add_control( 'email', array(
        'label'       => 'Email',
        'description' => 'Add details here',
        'section'     => 'contact_settings_section',
        'type'        => 'email',
    ) );

    $wp_customize->add_setting( 'footer-title', array(
        'default' => '',
    ) );
    $wp_customize->add_control( 'footer-title', array(
        'label'       => 'footer Title',
        'description' => 'Add details here',
        'section'     => 'contact_settings_section',
        'type'        => 'text',
    ) );
    // $wp_customize->add_setting( 'footer-text', array(
    //     'default' => '',
    // ) );
    // $wp_customize->add_control( 'footer-text', array(
    //     'label'       => 'footer Text',
    //     'description' => 'Add details here',
    //     'section'     => 'contact_settings_section',
    //     'type'        => 'textarea',
    // ) );
    // $wp_customize->add_setting( 'fax', array(
    //     'default' => '',
    // ) );
    // $wp_customize->add_control( 'fax', array(
    //     'label'       => 'fax',
    //     'description' => 'Add details here',
    //     'section'     => 'contact_settings_section',
    //     'type'        => 'text',
    // ) );
}
