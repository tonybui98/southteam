<?php 
add_action( 'init', 'register_design', 0 );
function register_design() {
// Set UI labels for Custom Post Type
 $labels = array(
        'name'                => _x( 'Mẫu thiết kế', 'Post Type General Name', 'southteam' ),
        'singular_name'       => _x( 'Mẫu thiết kế', 'Post Type Singular Name', 'southteam' ),
        'menu_name'           => __( 'Mẫu thiết kế', 'southteam' ),
        'parent_item_colon'   => __( 'Mục gốc', 'southteam' ),
        'all_items'           => __( 'Tất cả mẫu thiết kế', 'southteam' ),
        'view_item'           => __( 'Xem mẫu thiết kế', 'southteam' ),
        'add_new_item'        => __( 'Thêm mẫu thiết kế mới', 'southteam' ),
        'add_new'             => __( 'Thêm mẫu thiết kế', 'southteam' ),
	    	'edit_item'           => __( 'Sửa  mẫu thiết kế', 'southteam' ),
        'update_item'         => __( 'Cập nhật', 'southteam' ),
        'search_items'        => __( 'Tìm kiếm', 'southteam' ),
        'not_found'           => __( 'Không tìm thấy', 'southteam' ),
        'not_found_in_trash'  => __( 'Không tìm thấy trong thư mục rác', 'southteam' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Mẫu thiết kế', 'southteam' ),
        'description'         => __( 'Xem tất cả mẫu thiết kế hiện có', 'southteam' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => true,
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
	     	'menu_icon'	          => 'dashicons-art',
        'taxonomies'          => array( '' ),
				'rewrite'   => array( 'slug' => 'design', 'with_front' => true ),
    );

    // Registering your Custom Post Type
    register_post_type( 'design', $args );
}

// Hook into the 'init' action
add_action( 'init', 'design_category', 0 );
function design_category() {
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name'      => 'Các loại mẫu thiết kế',
                'singular'  => 'Loại mẫu thiết kế',
                'menu_name' => 'Loại mẫu thiết kế'
        );

        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
								'rewrite'           => array( 'slug' => 'design-category' ),
        );

        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('design-category', array( 'design' ), $args);
}
