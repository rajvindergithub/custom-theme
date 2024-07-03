<?php

//Add Theme Support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-format', ['aside','gallery','image','link','quote','status','video','audio','chat'] );

add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// load in our CSS

function wphierarchy_enqueue_styles(){
    wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/style.css', [], time());
}

add_action('wp_enqueue_scripts','wphierarchy_enqueue_styles');

//registor menu


register_nav_menus( array(
	    	
                'header-menu' => esc_html__('Header Menu', 'rajvinder'),
                
            ) );


//registor widget area


function rajvinder_widgets_init(){
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar', 'rajvinder'), 
        'id'            => 'main-sidebar',
        'description'   => 'Add widgets for sidebar',
        'before_widget' => '<section class="widget sideBarWidgetRajvinder">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',  
    ]); 
    
    
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar Other', 'rajvinder'), 
        'id'            => 'main-sidebar-other',
        'description'   => 'Add widgets for sidebar',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',  
    ]); 
    
}

add_action('widgets_init', 'rajvinder_widgets_init');

  


?>
 
<?php
 
// Creating the widget
class wpb_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'wpb_widget',
 
            // Widget name will appear in UI
            __( 'WPBeginner Widget', 'textdomain' ),
 
            // Widget description
            [
                'description' => __( '', 'textdomain' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
 
        // This is where you run the code and display the output
        echo __( 'Hello, World!', 'textdomain' );
        echo $args['after_widget'];
    }
 
    // Widget Settings Form
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'textdomain' );
        }
 
        // Widget admin form
        ?>
        <div id="accordionBlog">
            <div><input type="text" /></div>    
            <div><textarea id="getText"></textarea></div>    
        </div>


    <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' ); 
}
 
add_action( 'widgets_init', 'wpb_load_widget' );

?>

