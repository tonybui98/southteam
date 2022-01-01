<?php
/**
 * Declaring widgets
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add filter to the parameters passed to a widget's display callback.
 * The filter is evaluated on both the front and the back end!
 *
 * @link https://developer.wordpress.org/reference/hooks/dynamic_sidebar_params/
 */
add_filter( 'dynamic_sidebar_params', 'understrap_widget_classes' );

if ( ! function_exists( 'understrap_widget_classes' ) ) {
	/**
	 * Count number of visible widgets in a sidebar and add classes to widgets accordingly,
	 * so widgets can be displayed one, two, three or four per row.
	 *
	 * @global array $sidebars_widgets
	 *
	 * @param array $params {
	 *     @type array $args  {
	 *         An array of widget display arguments.
	 *
	 *         @type string $name          Name of the sidebar the widget is assigned to.
	 *         @type string $id            ID of the sidebar the widget is assigned to.
	 *         @type string $description   The sidebar description.
	 *         @type string $class         CSS class applied to the sidebar container.
	 *         @type string $before_widget HTML markup to prepend to each widget in the sidebar.
	 *         @type string $after_widget  HTML markup to append to each widget in the sidebar.
	 *         @type string $before_title  HTML markup to prepend to the widget title when displayed.
	 *         @type string $after_title   HTML markup to append to the widget title when displayed.
	 *         @type string $widget_id     ID of the widget.
	 *         @type string $widget_name   Name of the widget.
	 *     }
	 *     @type array $widget_args {
	 *         An array of multi-widget arguments.
	 *
	 *         @type int $number Number increment used for multiples of the same widget.
	 *     }
	 * }
	 * @return array $params
	 */
	function understrap_widget_classes( $params ) {

		global $sidebars_widgets;

		/*
		 * When the corresponding filter is evaluated on the front end
		 * this takes into account that there might have been made other changes.
		 */
		$sidebars_widgets_count = apply_filters( 'sidebars_widgets', $sidebars_widgets );

		// Only apply changes if sidebar ID is set and the widget's classes depend on the number of widgets in the sidebar.
		if ( isset( $params[0]['id'] ) && strpos( $params[0]['before_widget'], 'dynamic-classes' ) ) {
			$sidebar_id   = $params[0]['id'];
			$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );

			$widget_classes = 'widget-count-' . $widget_count;
			if ( 0 === $widget_count % 4 || $widget_count > 6 ) {
				// Four widgets per row if there are exactly four or more than six.
				$widget_classes .= ' col-md-3';
			} elseif ( 6 === $widget_count ) {
				// If two widgets are published.
				$widget_classes .= ' col-md-2';
			} elseif ( $widget_count >= 3 ) {
				// Three widgets per row if there's three or more widgets.
				$widget_classes .= ' col-md-4';
			} elseif ( 2 === $widget_count ) {
				// If two widgets are published.
				$widget_classes .= ' col-md-6';
			} elseif ( 1 === $widget_count ) {
				// If just on widget is active.
				$widget_classes .= ' col-md-12';
			}

			// Replace the placeholder class 'dynamic-classes' with the classes stored in $widget_classes.
			$params[0]['before_widget'] = str_replace( 'dynamic-classes', $widget_classes, $params[0]['before_widget'] );
		}

		return $params;

	}
} // endif function_exists( 'understrap_widget_classes' ).

add_action( 'widgets_init', 'understrap_widgets_init' );

if ( ! function_exists( 'understrap_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function understrap_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Right Sidebar', 'understrap' ),
				'id'            => 'right-sidebar',
				'description'   => __( 'Right sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Left Sidebar', 'understrap' ),
				'id'            => 'left-sidebar',
				'description'   => __( 'Left sidebar widget area', 'understrap' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Slider', 'understrap' ),
				'id'            => 'hero',
				'description'   => __( 'Hero slider area. Place two or more widgets here and they will slide!', 'understrap' ),
				'before_widget' => '<div class="carousel-item">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas', 'understrap' ),
				'id'            => 'herocanvas',
				'description'   => __( 'Full size canvas hero area for Bootstrap and other custom HTML markup', 'understrap' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Top Full', 'understrap' ),
				'id'            => 'statichero',
				'description'   => __( 'Full top widget with dynamic grid', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .static-hero-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer Full', 'understrap' ),
				'id'            => 'footerfull',
				'description'   => __( 'Full sized footer widget with dynamic grid', 'understrap' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .footer-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

	}
} // endif function_exists( 'understrap_widgets_init' ).
// News custom
class News_Custom extends WP_Widget {
 
    function __construct() {
        parent::__construct(
            'news_custom',
            'Tin tức mới',
            array( 'description'  =>  'Hiển thị tin tức' )
        );
    }
 
    function form( $instance ) {
        $default = array(
            'title' => 'Tiêu đề',
            'post_number' => 5,
            'post_cat'=>5,
        );
        $instance = wp_parse_args( (array) $instance, $default );
        $title = esc_attr($instance['title']);
        $post_number = esc_attr($instance['post_number']);
        $post_cat = esc_attr($instance['post_cat']);
         $args = array(
        'taxonomy' => 'category',
        'hide_empty' => 0,
    );
        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
       ?> 
<p>Chọn danh mục <select name="<?php echo $this->get_field_name('post_cat'); ?>">
    <?php
     $inra = array('Tất cả danh mục' => 0);
    $cates = get_terms($args);
    foreach ($cates as $cate) {
        $titledm = $cate->name;
        $iddm = $cate->term_id; ?>
        <option value="<?php echo $iddm; ?>" <?php echo ($iddm==$post_cat)?'selected':''; ?>><?php echo $titledm; ?></option>
      <?php
    }
    ?>
    </select></p>
           <?php
    }
 
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['post_number'] = strip_tags($new_instance['post_number']);
        $instance['post_cat'] = strip_tags($new_instance['post_cat']);
        return $instance;
    }
 
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $post_number = $instance['post_number'];
        $post_cat = $instance['post_cat'];
        echo $before_widget;
        echo $before_title.$title.$after_title;   
        $args = array(
         'post_type' => array('post'),
        'posts_per_page' => $post_number,
            'tax_query' => array(
	array(
		'taxonomy'         => 'category',
		'terms'            => $post_cat,
		'field'            => 'term_id',
	)));
        $random_query = new WP_Query($args);
 
        if ($random_query->have_posts()):
            echo '<div class="tin-tuc-widget"><div class="post-list p-2 bg-white">';
            while( $random_query->have_posts() ) :
                $random_query->the_post(); ?>
    <div class="widget-list-item py-2">
        <div class="media">
            <a href="<?php the_permalink(); ?>" class="list-news-thumb"><?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?></a>
            <div class="media-body">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            </div>
        </div>
            <?php endwhile; wp_reset_postdata();
            echo '</div></div>';
        endif;
        echo $after_widget;
 
    }
 
}
 
add_action( 'widgets_init', 'create_news_widget' );
function create_news_widget() {
    register_widget('News_Custom');
}
