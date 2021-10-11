<?php
/*
Template Name: Test All Function
*/

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php
echo "<h1>Hi</h1>";

global $wpdb;
echo '<h1>this is test</h1>';
$email = $wpdb->get_var("SELECT user_email from ".$wpdb->prefix."users WHERE ID = 1");

echo '<p>';
print_r($email);
echo '</p>';
?>

<?php get_footer(); ?>
