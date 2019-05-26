<?php
/**
 * pustDepartment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pustDepartment
 */

require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/metabox/homemeta.php');
require_once get_theme_file_path('/inc/metabox/facultymetabox.php');
require_once get_theme_file_path('/inc/metabox/downloadsmeta.php');
require_once get_theme_file_path('/inc/metabox/notice-ventmeta.php');

if ( ! function_exists( 'pustdepartment_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pustdepartment_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pustDepartment, use a find and replace
		 * to change 'pustdepartment' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pustdepartment', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'depevent', 280, 150 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top-menu' => esc_html__( 'Top Main Menu', 'pustdepartment1' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pustdepartment_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pustdepartment_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pustdepartment_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pustdepartment_content_width', 640 );
}
add_action( 'after_setup_theme', 'pustdepartment_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( ! function_exists( "pustdepartment_pagination" ) ) {
	function pustdepartment_pagination() {
		global $wp_query;
		$links = paginate_links( array(
			'current'  => max( 1, get_query_var( 'paged' ) ),
			'total'    => $wp_query->max_num_pages,
			'type'     => 'list',
			'mid_size' => apply_filters( "philosophy_pagination_mid_size", 3 )
		) );
		$links = str_replace( "page-numbers", "page-link", $links );
		$links = str_replace( "<ul class='page-link'>", "<ul class='pagination justify-content-center'>", $links );
		$links = str_replace( "<li>", "<li class='page-item'>", $links );
		$links = str_replace( "next page-item", "page-link", $links );
		$links = str_replace( "prev page-item", "page-link", $links );
		echo wp_kses_post( $links );
	}
}
function pustdepartment_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pustdepartment' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pustdepartment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pustdepartment_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
if ( site_url() == "http://localhost:8080/wordpress" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function pustdepartment_scripts() {
	wp_enqueue_style( 'pustdepartment-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pustdepartment-style-bootstrap', get_template_directory_uri() .'/asset/css/bootstrap.css', null, VERSION  );
	wp_enqueue_style( 'pustdepartment-style-menue', get_template_directory_uri() .'/asset/css/jquery.mmenu.all.css', null, VERSION );
	wp_enqueue_style( 'pustdepartment-style-style-1', get_template_directory_uri() .'/asset/css/style.css', null, VERSION );
	wp_enqueue_style( 'pustdepartment-style-style-2', get_template_directory_uri() .'/asset/css/style2.css', null,VERSION);
	wp_enqueue_style( 'pustdepartment-style-style3', get_template_directory_uri() .'/asset/css/style3.css', null, VERSION);
	wp_enqueue_style( 'pustdepartment-style-style4', get_template_directory_uri() .'/asset/css/style4.css', null, VERSION );
	wp_enqueue_style( 'pustdepartment-style-font-wasam', get_template_directory_uri() .'/asset/css/font-awesome.css', null, VERSION);
	wp_enqueue_style( 'pustdepartment-style-responsive', get_template_directory_uri() .'/asset/css/style-responsive.css', null, VERSION );

	wp_enqueue_script( 'pustdepartment-jquery', get_template_directory_uri() . '/asset/code.jquery.com/jquery-1.8.2.min.js', array('jquery'),VERSION, false );
	wp_enqueue_script( 'pustdepartment-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), VERSION, true );

	wp_enqueue_script( 'pustdepartment-mordanizer', get_template_directory_uri() . '/asset/js/modernizr.min.js', array('jquery'), VERSION, false );
	wp_enqueue_script( 'pustdepartment-bootstrap', get_template_directory_uri() . '/asset/js/bootstrap.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'pustdepartment-mmenu', get_template_directory_uri() . '/asset/js/jquery.mmenu.min.all.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'pustdepartment-scriptjs1', get_template_directory_uri() . '/asset/js/script.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'pustdepartment-scroll', get_template_directory_uri() . '/asset/js/jquery.easeScroll.js', array('jquery'), VERSION, true );
	wp_enqueue_script( 'pustdepartment-validate', get_template_directory_uri() . '/asset/js/jquery.validate.js', array('jquery'), VERSION, true );

	wp_enqueue_script( 'pustdepartment-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pustdepartment_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function pustdep_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left footer',
		'id'            => 'lfooter',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Middle footer',
		'id'            => 'mfooter',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Right Footer Up',
		'id'            => 'rfooterup',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Right Footer middle',
		'id'            => 'rfootermiddle',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Right Footer bottom',
		'id'            => 'rfooterbottom',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => 'Total bottom',
		'id'            => 'tbfooter',
		'before_widget' => '<div class="abc">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="border-bottom: 2px solid #fff;">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Mobile menu',
		'id'            => 'mmenu',
		'before_widget' => '<nav id="menu">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'pustdep_widgets_init' );