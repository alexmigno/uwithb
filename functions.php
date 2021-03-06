<?php

/**
 * uwithb functions and definitions
 *
 * @package uwithb
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width))
    $content_width = 620; /* pixels */

if (!function_exists('uwithb_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function uwithb_setup() {

        /**
         * Enable support for editor-style.css
         */
        add_editor_style();

        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * If you're building a theme based on uwithb, use a find and replace
         * to change 'uwithb' to the name of your theme in all the template files
         */
        load_theme_textdomain('uwithb', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to head
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for Post Thumbnails on posts and pages
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        /**
         * This theme uses wp_nav_menu() in one location.
         */
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'uwithb'),
        ));

        /**
         * Enable support for Post Formats
         */
        // add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    }

endif; // uwithb_setup
add_action('after_setup_theme', 'uwithb_setup');

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function uwithb_register_custom_background() {
    $args = array(
        'default-color' => 'ffffff',
        'default-image' => '',
    );

    $args = apply_filters('uwithb_custom_background_args', $args);

    if (function_exists('wp_get_theme')) {
        add_theme_support('custom-background', $args);
    } else {
        define('BACKGROUND_COLOR', $args['default-color']);
        if (!empty($args['default-image']))
            define('BACKGROUND_IMAGE', $args['default-image']);
        add_custom_background();
    }
}

add_action('after_setup_theme', 'uwithb_register_custom_background');

/**
 * Register widgetized area and update sidebar with default widgets
 */
function uwithb_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'uwithb'),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'uwithb_widgets_init');

/**
 * Enqueue scripts and styles
 */
function uwithb_scripts() {
    wp_enqueue_style('uwithb-style', get_stylesheet_uri());


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'uwithb_scripts');

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




/* * ************** Inclusione TGM PLUGIN ACTIVATION *************** */
/* * ************************************************************** */
require_once 'plugins/class-tgm-plugin-activation.php';
require_once 'plugins/plugins-list.php';


/* * ************** opzioni Tema con Advanced Custom Fields *************** */
/* * ************************************************************** */
add_filter('acf/options_page/settings','my_options_page_settings');
function my_options_page_settings($options){   
    $options["title"] = "Opzioni tema";
    return $options;
}


/* * ************** Inclusioni dalla cartella CRIMSON *************** */
/* * ************************************************************** */
//Decommentare quelle che servono, a seconda del progetto
include "crimson/crimsonAddACFNoteIntoAdminArea.php";
include "crimson/crimsonAddCSSAndJavascriptLibraries.php";
include "crimson/crimsonAddCrimsonNoteIntoAdminArea.php";
//include "crimson/crimsonBootstrapWalkerNavMenu.php";
// include "crimson/crimsonAddOpenGraphForPosts.php";
include "crimson/crimsonCreateCustomImageSize.php";
include "crimson/crimsonCreateCustomPostType.php";
// include "crimson/crimsonCreateCustomTaxonomies.php";
// include "crimson/crimsonCreateOptionsPage.php";
// include "crimson/crimsonCreatePagination.php";
include "crimson/crimsonCreatePrivacy.php";
include "crimson/crimsonCustomLoginLogo.php";
include "crimson/crimsonCustomPath.php";
// include "crimson/crimsonFilterPostTypeByTaxonomyIntoAdmin.php";
// include "crimson/crimsonGetCurrentCleanURL.php";
include "crimson/crimsonRemoveAttachmentImageLinkFromContent.php";
// include "crimson/crimsonSocialLikeByThemeOptions.php";
// include "crimson/crimsonSocialShareByThemeOptions.php";


/* * ************** Opzioni del tema CRIMSON *************** */
/* * ************************************************************** */
$crimson = array();
$crimson = get_option('crimson_theme_options');



/* * ************** funzioni UTILI *************** */
/* * ************************************************************** */
include 'inc/uwbGetCurrentURL.php';
include 'inc/uwbGetItemsIDByArgs.php';
include "inc/uwbGetThumbnailByIDPost.php";
include "inc/uwbGetCustomExcerpt.php";




