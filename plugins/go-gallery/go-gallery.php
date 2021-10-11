<?php
/**
 * Plugin Name: Go Gallery
 * Plugin URI:  https://www.ampae.com/wp/go-gallery/
 * Text Domain: gogomedia
 * Description: Responsive filterable gallery with media categories. Easy to use, lightweight yet powerful shortcode driven gallery plugin to display beautiful galleries without slowing down your page.
 * Version:     1.2
 * Author:      AMPAE
 * Author URI:  https://www.ampae.com/wp/
 * License:     GPL
 */

if (! defined('ABSPATH')) {
    exit;
}

define('GO_GALLERY_VERSION', '1.2');

function go_gallery_lte_enqueue_scripts()
{
    wp_enqueue_script('imagesloaded', plugins_url('/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js', __FILE__), array('jquery'), GO_GALLERY_VERSION, true);
    wp_enqueue_script('isotope', plugins_url('/assets/plugins/isotope/isotope.pkgd.min.js', __FILE__), array('jquery'), GO_GALLERY_VERSION, true);
    wp_enqueue_script('go-gallery', plugins_url('/assets/js/go-gallery.js', __FILE__), array('jquery', 'isotope', 'imagesloaded'), GO_GALLERY_VERSION, true);
    wp_enqueue_style('go-gallery', plugins_url('/assets/css/go-gallery.css', __FILE__), null, GO_GALLERY_VERSION);
    wp_enqueue_style('go-gallery-effects', plugins_url('/assets/css/effects.css', __FILE__), null, GO_GALLERY_VERSION);
    wp_enqueue_script('qtlb', plugins_url('/assets/plugins/qtlb/scripts.js', __FILE__), array('jquery'), GO_GALLERY_VERSION, true);
    wp_enqueue_style('qtlb', plugins_url('/assets/plugins/qtlb/styles.css', __FILE__), null, GO_GALLERY_VERSION);
}
add_action('wp_enqueue_scripts', 'go_gallery_lte_enqueue_scripts');

//add_filter( 'wp_calculate_image_srcset', '__return_false' );

include_once plugin_dir_path(__FILE__).'assets/lib/shared/admin/alvimedia.php';
include_once plugin_dir_path(__FILE__).'assets/lib/shared/runtime/ampae-functions.php';
include_once plugin_dir_path(__FILE__).'assets/lib/shared/runtime/setup-taxonomies.php';
include_once plugin_dir_path(__FILE__).'assets/lib/shared/admin/filter-taxonomies.php';

include_once plugin_dir_path(__FILE__).'assets/lib/runtime/shortcode.php';

include_once plugin_dir_path(__FILE__).'assets/plugins/qtlb/qtlb.php';

if (is_admin()) {
    //add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'alvimedia_plugin_action_links');
}
