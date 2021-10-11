<?php
/**
 * AMPAE LIB
 * PHP Version 5.5.
 *
 * @see       https://www.ampae.com/
 *
 * @author    AMPAE <info@ampae.com>
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GNU GENERAL PUBLIC LICENSE
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
**/
if ( ! function_exists( 'gogoshared_add_image_category_filter' ) && is_admin() ) {
/**
 * ADMIN - Shared Admin function - Add a category filter to images
 *
 * @uses   apply_filters
 * @since   1.0.0
 * @param
 * @void
 */
    function gogoshared_add_image_category_filter() {
        $screen = get_current_screen();
        if ( 'upload' == $screen->id ) {
            $dropdown_options = array (
                'show_option_all' => __( 'View all categories', 'gogomedia' ),
		        'taxonomy' => 'attachment_category',
                'value_field' => 'slug',
                'name' => 'attachment_category',
                'hide_empty' => false,
                'hierarchical' => true,
                'orderby' => 'name',
            );
            wp_dropdown_categories( $dropdown_options );
        }
    }
    add_action( 'restrict_manage_posts', 'gogoshared_add_image_category_filter' );
}
