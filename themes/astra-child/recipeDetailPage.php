<?php
/*
Template Name: Recipe Detail Page Template v2.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php the_content(); // use elementor, referencing: https://www.youtube.com/watch?v=fzssXUfUFGY ?>

<?php

$recipeid = isset($_GET['recipeid']) ? $_GET['recipeid'] : "";

global $wpdb;
$recipe = $wpdb->get_row("SELECT * FROM ".$wpdb->prefix."recipes_from_edam WHERE recipeid = ".$recipeid);
$recipeName = $recipe->label;
$image = $recipe->image;
$cuisineType = (strlen($recipe->cuisineType)>0) ? $recipe->cuisineType : "Undifined";
$mealType = (strlen($recipe->mealType)>0) ? $recipe->mealType : "Undifined";
$cautions = (strlen($recipe->cautions)>0) ? $recipe->cautions : "None";
$ingredients = json_decode($recipe->ingredients);
$totalNutrients = json_decode($recipe->totalNutrients);
$sourceUrl = $recipe->url;


// echo '<pre>';
// print_r($ingredients);
// print_r($totalNutrients);
// echo '</pre>';

// process ingredients
$ingredientsHtml = "<ol>";
$ingredientsPicturesHtml = "";
foreach ($ingredients as $key => $value) {
    // echo '<pre>'.$value->text.'</pre>';
    $ingredientsHtml .= '<li>'.$value->text.'</li>';
    $ingredientsPicturesHtml .= '<img src="'.$value->image.'">';
}
$ingredientsHtml .= "</ol>";
// echo $ingredientsPicturesHtml;
// echo '<ol>'.$ingredientsHtml.'</ol>';

// process nutrients
$nutrientsTableHtml = '<table>';
$nutrientsTableHtml .= '<tr>';
$nutrientsTableHtml .= '<th>Nutrient</th><th>Quantity</th>';
$nutrientsTableHtml .= '</tr>';
foreach ($totalNutrients as $key => $value) {
    $nutrientsTableHtml .= '<tr>';
    $nutrientsTableHtml .= '<td>'.$value->label.'</td>';
    $quantityNumber = number_format((float)$value->quantity, 2, '.', '');
    $nutrientsTableHtml .= '<td>'.$quantityNumber.' ('.$value->unit.')</td>';
    $nutrientsTableHtml .= '</tr>';
}
$nutrientsTableHtml .= '</table>';

// echo $nutrientsTableHtml;

$sourceUrlHtml = "<h3><a target='_blank' href='".$sourceUrl."'>Click Here to Get Instructions</a></h3>";

$ajaxUrl = admin_url("admin-ajax.php");

echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#recipe-detail-name").text("'.$recipeName.'");
    $("#recipe-detail-image").attr("src", "'.$image.'");
    $("#meal-type").text("'.$cuisineType.'");
    $("#cuisine-type").text("'.$mealType.'");
    $("#cautions").text("'.$cautions.'");
    $("#ingredients").html("'.$ingredientsHtml.'");
    $("#nutrients-table").html("'.$nutrientsTableHtml.'");
    $("#source-url").html("'.$sourceUrlHtml.'");

    $("#like-btn").click(function() {
	$(this).attr("disabled", "true").css("background-color", "#D5D5D5");
	var ajaxurl = "'.$ajaxUrl.'";
        var data = {
            "action": "like_recipe",
            "recipeid": "'.$recipeid.'"
        };
        jQuery.post(ajaxurl, data, function(response) {
            // alert(response);
            console.log(response);
        });
    });
});
</script>';

?>

<?php get_footer();


