<?php

//this feature allows us to set the max allowed width for and content in the theme, such as post images etc so the don’t break the design. 
// $content_width can also be accessed by plugins allowing our theme to integrate with other plugins.
if ( ! isset( $content_width ) ) {
    $content_width = 660;
}

function tranquilwp_setup() {

    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
     * Text domain can be found in the comments of styls.css or the themes folder name.
     */
    load_theme_textdomain('tranquilwp', get_template_directory() . '/languages');

    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );

    // Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tranquil-wp' ),
        'footer' => __( 'Footer Menu', 'tranquil-wp' ),
    ) );
}

/** Tell WordPress to run tranquilwp_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'tranquilwp_setup' );


/**
 * Proper way to enqueue scripts and styles
 */
function tranquil_scripts() {
    /* Add styles */
    wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css' );

    /* Add JS- Name, src, dependancies i.e bs requires jquery, */
    /* lastly in_footer = true - this adds script in footer with wp_footer tag  */
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'tranquil_scripts' );




function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * Register our sidebars and widgetized areas.
 *
 */
    function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar_blog',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

function featureText() {
    if ( is_front_page() ) {
        
        the_field('feature_text');
        // is_home = When the main blog page is being displayed. 
        
    } elseif ( is_home() || is_single() ) {
        
        _e('Theme Star Spa Official Blog', 'tranquilwp');
        
    } elseif ( is_archive() ) {
        
        _e( 'Theme Star Spa Official Blog', 'tranquilwp' );
        _e('<br>');

             // Add the category or tag name 
             single_term_title(__('Browsing: ', 'tranquilwp'));
       
            // Add the month and year of archive 
            if ( is_month() ) {
                $monthNum = get_query_var('monthnum');
                // mktime(hour,minute,second,month,day,year,is_dst);
                $month = date("F", mktime(0, 0, 0, $monthNum));
                $year = get_query_var('year');
                echo 'Posts from ' . $month .' '.$year;
            }

    } elseif ( is_page_template('page-news.php') 
              || is_page_template('page-about.php') 
              || is_page_template('page-contact.php') )  {
        
        bloginfo('name');
        _e('<br>');
        the_title();
        
    
    } elseif ( is_404() ) {
        
        _e( 'Whoops, were a little lost', 'tranquilwp' );
        
        // add else as fall back if other than above
    } elseif ( is_search() ) {
        
        _e('Tranquil Spa Official Blog', 'tranquilwp');
        _e('<br>');
        
        // using printf not echo because the sting has formatting %s
        printf( __( 'Search Results for: %s', 'tranquilwp'), get_search_query() ); 
   
            
    } else {

        _e('FULLY RESPONSIVE PREMIUM SPA THEME FOR WORDPRESS', 'tranquilwp');
        
    }
}

$args = array(
    // 'width'         => 980,
    // 'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/lakebg.jpg',
    // allow site owner to upload images
    'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

?>
