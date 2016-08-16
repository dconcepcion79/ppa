<?php
/**
 * ppa functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ppa
 */

if ( ! function_exists( 'ppa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ppa_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ppa, use a find and replace
	 * to change 'ppa' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ppa', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ppa' ),
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
    
     /*
  * Enable support for custom logo.
  *
  *  @since Fresh Recipes 1.1
  */
    add_theme_support( 'custom-logo', array(
       'width'      => 200,
       'flex-width' => true,
    ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ppa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ppa_setup' );

include_once(get_template_directory() . '/inc/meta-boxes.php');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ppa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ppa_content_width', 640 );
}
add_action( 'after_setup_theme', 'ppa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ppa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ppa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ppa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ppa_widgets_init' );

/**
 * Load Google Web Fonts.
 *
 */
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300|Cormorant:400,600,700', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/**
 * Enqueue scripts and styles.
 */
function ppa_scripts() {
	wp_enqueue_style( 'ppa-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'ppa-fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.css' );
    
    wp_enqueue_style( 'ppa-flexslider-css', get_stylesheet_directory_uri() . '/css/flexslider.css' );

	wp_enqueue_script( 'ppa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'ppa-accordian', get_template_directory_uri() . '/js/accordian.js', array(), '20151215', true );

	wp_enqueue_script( 'ppa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
	wp_enqueue_script( 'ppa-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ppa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//logo
function ppa_custom_logo() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    }
    else {
        if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <?php
    endif;

    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
    <?php
    endif;
    }
}

/*-----------------------------------------------------------------------------------*/
/*	Breadcrumb
/*-----------------------------------------------------------------------------------*/
function ppa_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo home_url();
		echo '">';
		echo 'Home';
		echo "</a>";
		if (is_category() || is_single()) {
			echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
			the_category(' &bull; ');
			if (is_single()) {
				echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
				the_time(get_option('date_format'));
                the_title();
			}
		} elseif (is_page()) {
			echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
			echo the_date('c');;
			echo the_title();
		}
	}
	elseif (is_tag()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		single_tag_title();
		}
	elseif (is_day()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo"Archive for "; the_time('F jS, Y');
		}
	elseif (is_month()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo"Archive for "; the_time('F, Y');
		}
	elseif (is_year()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo"Archive for "; the_time('Y');
		}
	elseif (is_author()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo"Author Archive";
		}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo "Blog Archives";
		}
	elseif (is_search()) {
		echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
		echo"Search Results"; 
		}
}