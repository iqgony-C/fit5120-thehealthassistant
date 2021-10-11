<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'astra-style'; // This is 'astra-style' for the Astra theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script('jquery-ui-widget');
}

// pass ajaxurl to front end, referencing: https://wordpress.stackexchange.com/questions/190297/ajaxurl-not-defined-on-front-end
add_action('wp_head', 'myelement_ajaxurl');

function myelement_ajaxurl() {

   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

add_action( 'wp_ajax_nopriv_search_for_recipes_in_main', 'search_for_recipes_in_main_callback' );
add_action( 'wp_ajax_search_for_recipes_in_main', 'search_for_recipes_in_main_callback' );

function search_for_recipes_in_main_callback() {
    global $wpdb; // this is how you get access to the database

    // echo 'hahaha';

	$foodName = $_POST['foodName'];

    // echo $foodName;

    if (strlen($foodName) > 0) {
		// $number = $wpdb->get_var("SELECT count(*) FROM ".$wpdb->prefix."recipes_from_edam");
		$number = $wpdb->get_var("SELECT count(*) FROM ".$wpdb->prefix."queryed_food_name WHERE food_name = '".strtolower($foodName)."'");
		if ($number > 0) {
			// echo '<h1>'.$number.'</h1>';
			$wpdb->update($wpdb->prefix."queryed_food_name",array("is_querying" => 1), array("food_name" => strtolower($foodName)));
		} else {
			$wpdb->insert($wpdb->prefix."queryed_food_name", array("food_name" => strtolower($foodName), "is_querying" => 1));
			return false;
		}
	}

    die(); // this is required to terminate immediately and return a proper response
}

add_action( 'wp_ajax_nopriv_like_recipe', 'like_recipe_callback' );
add_action( 'wp_ajax_like_recipe', 'like_recipe_callback' );

function like_recipe_callback() { //  core function to respond search action
	global $wpdb;

    // echo '<pre>'.$foodName.$needLowCalorie.$needLowSugar.$needLowFat.$needLowSodium.'</pre>';
    // echo '<pre>'.$dataSource.$password.'</pre>';

	$recipeid = $_POST['recipeid'];

    // echo $recipeid;
    // echo '<script>console.log("id: '.$recipeid.'");</script>';


    if (is_numeric($recipeid)) {
        echo $recipeid;
        $numberOfLikes = $wpdb->get_var("SELECT likes FROM ".$wpdb->prefix."recipes_from_edam WHERE recipeid = ".(int)$recipeid);
        echo $numberOfLikes;
        $wpdb->update($wpdb->prefix."recipes_from_edam",array("likes" => ($numberOfLikes + 1)), array("recipeid" => (int)$recipeid));
	}

	die(); // this is required to terminate immediately and return a proper response
}
