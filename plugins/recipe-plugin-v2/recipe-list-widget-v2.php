<?php
/*
    Plugin Name: Recipe List widget v2.0
    Description: Display recipe list
    Author: Yongqi Chen
    Version: 2.0
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function register_recipe_script(){
	wp_enqueue_style( 'widget-recipe', plugins_url( '/widget-recipe-list.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'register_recipe_script', 50 );

add_action('widgets_init', 'register_recipe_widget');
function register_recipe_widget(){
	register_widget( 'WP_Widget_Recipe' );
}

// custom widget class
class  WP_Widget_Recipe extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'recipe_list_v2', // widget id
			esc_html__('Recipe List 2.0', 'yongqi'), // widget name
			array( 'description' => esc_html__('Display recipe list', 'yongqi'))
		);
	}

	// widget function - front-end layout
	public function widget( $args, $instance ) {
		extract($args); // extract key-value pair to variable => $key = value

		$title          = apply_filters( 'widget_title', $instance['title'] );
		$datasource  = (isset($instance['datasource']) && is_numeric($instance['datasource'])) ? esc_attr($instance['datasource']) : 1;
        $password = (isset($instance['password'])) ? esc_attr($instance['password']) : 'no';

		if ( ! empty( $title ) ){echo $before_title . $after_title;}
		echo $before_widget;

		$this->filter_implementation($datasource, $password);

		echo $after_widget;
	}

	// form function - admin panel layout
 	public function form( $instance ) {

 		$defaults = array(
 			'title'          => esc_html__('Recipe List', 'yongqi'),
 			'datasource'  => '0',
            'password' => ''
 		);

 		$instance = wp_parse_args((array) $instance, $defaults); //wp_parse_args - merge arrays

		 // get_field_id - create id for attribute
		 // get_field_name - create name for attribute
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__( 'Title:', 'yongqi' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" /> <!-- value populate the input box with saved value -->
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'datasource' ); ?>"><?php echo esc_html__( 'Data Source (0 for postman, 1 for edam):', 'yongqi' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'datasource' ); ?>" name="<?php echo $this->get_field_name( 'datasource' ); ?>" type="text" value="<?php echo $instance['datasource']; ?>" size="3" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'password' ); ?>"><?php echo esc_html__( 'Password:', 'yongqi' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'password' ); ?>" name="<?php echo $this->get_field_name( 'password' ); ?>" type="text" value="" /> <!-- value populate the input box with saved value -->
		</p>
		<?php
	}

	// update function - save/update data from widgets to database
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title']          = strip_tags( $new_instance['title'] ); // remove all tags under this attribute
		$instance['datasource']  = strip_tags( $new_instance['datasource'] );
        $instance['password']  = strip_tags( $new_instance['password'] );

		return $instance;
	}

	public function filter_implementation($datasource, $password) { // core dunction to display layout
		?>

		<h2>What do you want to eat?</h2>
        <form onsubmit="return false">
            <input id="food-input" type="text" required placeholder='For example: "fish"' style='width:calc(100% - 600px)'>
            
            <input id="food-search-btn" type="submit" value="search"/><br><br>
        </form>

		<input type="checkbox" id="low-calorie-chk">
		<label for="low-calorie-chk">Low Calorie</label><br>
		<input type="checkbox" id="low-sugar-chk">
		<label for="low-sugar-chk">Low Sugar</label><br>
		<input type="checkbox" id="low-fat-chk">
		<label for="low-fat-chk">Low Fat</label><br>
		<input type="checkbox" id="low-sodium-chk">
		<label for="low-sodium-chk">Low Sodium</label><br>
		<span id="recipe-list-span"></span>

        <?php
        // Check if search from main recipe page
        global $wpdb;
        $number = $wpdb->get_var("SELECT count(*) FROM ".$wpdb->prefix."queryed_food_name WHERE is_querying = 1");
		// echo '<h1>'.$number.'</h1>';
        if ($number == 1) { // from main search
            $searchingFoodName = $wpdb->get_var("SELECT food_name FROM ".$wpdb->prefix."queryed_food_name WHERE is_querying = 1");
            // Step 0: change the text in search box
            // echo '<h1>'.$searchingFoodName.'</h1>';
            echo '
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    console.log("test outside!!");
                    $(document).ready(function() {
                        console.log("test inside!!");
                        $("#food-input").val("'.$searchingFoodName.'");
                    });
                </script>';
            // Step 1: update the is_querying attr.
            $wpdb->update($wpdb->prefix."queryed_food_name",array("is_querying" => 0), array("is_querying" => 1));

            // Step 2: check if have data
            $ifHasData = query_food_name_or_store_and_check_if_has_data($searchingFoodName);
            if ($ifHasData == false) {
                // Step 2.1: if not, request api for food name
                $fetched_recipe_data = get_decoded_json_data_from_api(1, $searchingFoodName);
                // Step 2.2: store in db
                if ($fetched_recipe_data->count > 0) {
                    $fetched_recipes_array = isset($fetched_recipe_data->hits) ? $fetched_recipe_data->hits : array();
                    store_edam_in_database($fetched_recipes_array, $searchingFoodName);
                }
            } else {
                // echo '<h1>queryed</h1>';
            }
            // step 3: (if yes), query db
            $searching_recipes_list = query_recipe_from_db($searchingFoodName, 0, 0, 0, 0);
            print_recipe_list($searching_recipes_list);
		} elseif ($number > 1) { // something is wrong, refresh the data
            $wpdb->update($wpdb->prefix."queryed_food_name",array("is_querying" => 0), array("is_querying" => 1));
		}
        
        ?>

		<!-- Using Ajax referencing: https://stackoverflow.com/questions/27419220/unable-to-make-a-ajax-call-in-my-custom-wordpress-plugin -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
			$(document).ready(function() {
				$("#food-search-btn").click(function() {
					var foodName = $("#food-input").val();
					var needLowCalorie = false;
					var needLowSugar = false;
					var needLowFat = false;
					var needLowSodium = false;
					// get checkbox value(.attr or .val not working), referencing: https://stackoverflow.com/questions/6441654/html-input-checkbox-return-on-instead-of-true-when-submitting-form/6441675
					if ($("#low-calorie-chk").is(':checked') == true) {
						needLowCalorie = true;
					} else {
						needLowCalorie = false;
					}
					if ($("#low-sugar-chk").is(':checked') == true) {
						needLowSugar = true;
					} else {
						needLowSugar = false;
					}
					if ($("#low-fat-chk").is(':checked') == true) {
						needLowFat = true;
					} else {
						needLowFat = false;
					}
					if ($("#low-sodium-chk").is(':checked') == true) {
						needLowSodium = true;
					} else {
						needLowSodium = false;
					}
					console.log(needLowCalorie + "," + needLowSugar + "," + needLowFat + "," + needLowSodium);
					if (foodName.length > 0) {
						var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
						var data = {
							'action': 'query_db_for_recipes',
							'foodName': foodName,
							'needLowCalorie': needLowCalorie,
							'needLowSugar': needLowSugar,
							'needLowFat': needLowFat,
							'needLowSodium': needLowSodium,
                            'dataSource': <?php echo $datasource ?>,
                            'password': <?php echo $password ?>
						};
						// We can also pass the url value separately from ajaxurl for front end AJAX implementations
						jQuery.post(ajaxurl, data, function(response) {
							// alert('Got this from the server: ' + response);
							// console.log('Got this from the server: ' + response);
							$("#recipe-list-span").html(response);
						});
					}					
				});
				$('#low-sodium-chk').click(function(){ 
					// test here
				});
                $('#food-input').val
			});
		</script>

		<?php
	}
	
}

// response to ajax calling and process data
add_action( 'wp_ajax_nopriv_query_db_for_recipes', 'query_db_for_recipes_callback' );
add_action( 'wp_ajax_query_db_for_recipes', 'query_db_for_recipes_callback' );

function query_db_for_recipes_callback() { //  core function to respond search action
	global $wpdb;

    // echo '<pre>'.$foodName.$needLowCalorie.$needLowSugar.$needLowFat.$needLowSodium.'</pre>';
    // echo '<pre>'.$dataSource.$password.'</pre>';

	$foodName = $_POST['foodName'];
	$needLowCalorie = $_POST['needLowCalorie'];
	$needLowSugar = $_POST['needLowSugar'];
	$needLowFat = $_POST['needLowFat'];
	$needLowSodium = $_POST['needLowSodium'];

    $dataSource = $_POST['dataSource'];
    $password = $_POST['password'];

    if ($password == 960203) {
        // echo '<pre>'.$foodName.$needLowCalorie.$needLowSugar.$needLowFat.$needLowSodium.'</pre>';
        // echo '<pre>'.$dataSource.$password.'</pre>';

        ?>

        <!-- recipe list content -->
        <h2>Search Results</h2>

        <?php
        // ***step 1: query food name whether it already in db and have data, if not store it and request data
        $ifHasData = query_food_name_or_store_and_check_if_has_data($foodName);
        if ($ifHasData == false) {
            // echo '<h1>not queryed</h1>';

            // ***step 2: if not, request api for food name
            $recipe_data = get_decoded_json_data_from_api($dataSource, $foodName);
            
            // ***step 2.1: store in db
            if ($recipe_data->count > 0) {
                $recipes_array = isset($recipe_data->hits) ? $recipe_data->hits : array();
                store_edam_in_database($recipes_array, $foodName);
            }
        } else {
            // echo '<h1>queryed</h1>';
        }
        
        // step 3: (if yes), query db
        $recipes_list = query_recipe_from_db($foodName, $needLowFat, $needLowSodium, $needLowCalorie, $needLowSugar);
        // if results is less than 5, request from edam
        if (count($recipes_list) < 0 && $dataSource == 1) {
            $expanded_recipe_json = get_recipes_from_edam_api($foodName, $needLowFat, $needLowSodium, $needLowCalorie, $needLowSugar);
            $expanded_recipe_data = json_decode($expanded_recipe_json);
            if ($expanded_recipe_data->count > 0) {
                $expanded_recipes_array = isset($expanded_recipe_data->hits) ? $expanded_recipe_data->hits : array();
                store_edam_in_database($expanded_recipes_array, $foodName);
            }
            $recipes_list = query_recipe_from_db($foodName, $needLowFat, $needLowSodium, $needLowCalorie, $needLowSugar);
        }
        // step 4: print result
        print_recipe_list($recipes_list);
    }

	die(); // this is required to terminate immediately and return a proper response
}

function get_decoded_json_data_from_api($dataSource, $foodName) {
    if ($dataSource == 1) {
        $recipe_json = get_recipes_from_edam_api($foodName, 0, 1, 0, 1);
    }
    elseif ($dataSource == 0) {
        $recipe_json = get_mock_data_from_postman();
    }

    // print json on the site
    // echo '<pre>';
    // print_r($recipe_json);
    // echo '</pre>';

    $recipe_data = json_decode($recipe_json);
    return $recipe_data;
}

function query_recipe_from_db($foodName, $needLowFat, $needLowSodium, $needLowCalorie, $needLowSugar) {
	global $wpdb;

	$selectQuery = " WHERE food_name = '".$foodName."'";
	if ($needLowFat == "true") {
		$selectQuery .= "  AND low_fat = 1";
	}
	if ($needLowSodium == "true") {
		$selectQuery .= "  AND low_sodium = 1";
	}
	if ($needLowCalorie == "true") {
		$selectQuery .= "  AND low_calorie = 1";
	}
	if ($needLowSugar == "true") {
		$selectQuery .= "  AND low_sugar = 1";
	}

	$recipes_list = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."recipes_from_edam".$selectQuery);
	
	// echo "SELECT * FROM ".$wpdb->prefix."recipes_from_edam".$selectQuery;
	return $recipes_list;
}

function print_recipe_list($recipes_list) {
	$recipes_layout_data = "";
	// $all_recipes = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."recipes_from_edam");

    if (count($recipes_list) == 0) {
        echo "<h5>No result found...</h5>";
        return;
    }
	foreach ($recipes_list as $key => $value) {
		$label_layout_data = "";
		if ($value->low_fat == 1) {
			$label_layout_data .= "<div class='label low-fat'>Low Fat</div>";
		}
		if ($value->low_sodium == 1) {
			$label_layout_data .= "<div class='label low_sodium'>Low Sodium</div>";
		}
		if ($value->low_calorie == 1) {
			$label_layout_data .= "<div class='label low_calorie'>Low Calorie</div>";
		}
		if ($value->low_sugar == 1) {
			$label_layout_data .= "<div class='label low_sugar'>Low Sugar</div>";
		}
		$recipes_layout_data .= '<div class="gallery">
									<a target="_blank" href="'.$value->url.'">
									<img src="'.$value->image.'" alt="Cinque Terre" width="600" height="400">
									</a>
									<div class="desc">
									<b>
									'.$value->label.'
									</b>
									</div>
									<div class="label-container">
									'.$label_layout_data.'
									</div>
								</div>';
	}
	echo '<div class="recipe-container">
		'.$recipes_layout_data.'
	</div>';
}

function store_edam_in_database($recipes_array, $foodName) {
	global $wpdb;
	foreach ($recipes_array as $key => $value) {
		// Test for output single element
		// echo '<pre>';
		// print_r($value->recipe->uri);
		$recipe_info = $value->recipe;
        
        // check duplicate value
        if (strlen($recipe_info->label) > 0) {
	    $number = $wpdb->get_var('SELECT count(*) FROM '.$wpdb->prefix.'recipes_from_edam WHERE label = "'.$recipe_info->label.'" OR uri = "'.$recipe_info->uri.'"');
            if ($number > 0) {
                // echo '<h1>'.$number.'</h1>';
                return;
            }
        }

		$is_low_sodium = 0;
		$is_low_fat = 0;
		$is_low_sugar = 0;
		$is_low_calorie = 0;
		foreach($recipe_info->dietLabels as $dietLabel) {
			switch ($dietLabel) {
				case "Low-Sodium":
					$is_low_sodium = 1;
					break;
				case "Low-Fat":
					$is_low_fat = 1;
					break;
			}
		}
		foreach($recipe_info->healthLabels as $healthLabel) {
			if ($healthLabel == "Low Sugar") {
				$is_low_sugar = 1;
			}
		}
		if (($recipe_info->calories)/($recipe_info->yield) <= 200) {
			$is_low_calorie = 1;
		}
		$cuisineType = "";
		foreach($recipe_info->cuisineType as $cuisineT) {
			$cuisineType .= ucfirst($cuisineT) . " ";
		}
		$mealType = "";
		foreach($recipe_info->mealType as $mealT) {
			$mealType .= ucfirst($mealT) . " ";
		}
		$cautions = "";
		foreach($recipe_info->cautions as $cautionsT) {
			$cautions .= ucfirst($cautionsT) . " ";
		}
		
		$wpdb->insert($wpdb->prefix."recipes_from_edam", array(
			"uri" => $recipe_info->uri,
			"label" => $recipe_info->label,
			"image" => $recipe_info->image,
			"source" => $recipe_info->source,
			"url" => $recipe_info->url,
			"yield" => $recipe_info->yield,
			"low_fat" => $is_low_fat,
			"low_sodium" => $is_low_sodium,
			"low_calorie" => $is_low_calorie,
			"low_sugar" => $is_low_sugar,
			"ingredients" => json_encode($recipe_info->ingredients),
			"calories" => $recipe_info->calories,
			"totalTime" => $recipe_info->totalTime,
			"cuisineType" => trim($cuisineType),
			"mealType" => trim($mealType),
			"totalNutrients" => json_encode($recipe_info->totalNutrients),
			"cautions" => trim($cautions),
			"food_name" => strtolower($foodName)
		));
	}
    $wpdb->update($wpdb->prefix."queryed_food_name", array("has_data" => 1), array("food_name" => $foodName));
}

function query_food_name_or_store_and_check_if_has_data($foodName) {
	global $wpdb;

	if (strlen($foodName) > 0) {
		// $number = $wpdb->get_var("SELECT count(*) FROM ".$wpdb->prefix."recipes_from_edam");
		$number = $wpdb->get_var("SELECT count(*) FROM ".$wpdb->prefix."queryed_food_name WHERE food_name = '".strtolower($foodName)."'");
		if ($number > 0) {
			// echo '<h1>'.$number.'</h1>';
            $has_data = $wpdb->get_var("SELECT has_data FROM ".$wpdb->prefix."queryed_food_name WHERE food_name = '".strtolower($foodName)."'");
            if ($has_data == 1) {
                return true;
            } else {
                return false;
            }
		} else {
			$wpdb->insert($wpdb->prefix."queryed_food_name", array("food_name" => strtolower($foodName)));
			return false;
		}
	}
}

function get_recipes_from_edam_api($foodName, $lowFat, $lowSodium, $lowCalorie, $lowSugar) {
	$curl = curl_init();

	$query = '&q='.$foodName.'&app_id=adfac6ba&app_key=a9601cc36ab066e4f3fd8490a0fa1aa3';
	if ($lowFat == 1) {
		$query .= '&diet=low-fat';
	}
	if ($lowSodium == 1) {
		$query .= '&diet=low-sodium';
	}
	if ($lowSugar == 1) {
		$query .= '&health=low-sugar';
	}
	// echo '<h1>https://api.edamam.com/api/recipes/v2?type=public'.$query.'</h1>';
	
	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://api.edamam.com/api/recipes/v2?type=public'.$query,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	));

	$response = curl_exec($curl);

	curl_close($curl);
	return $response;
}

function get_mock_data_from_postman() {
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://6bcaea1a-26f2-4d82-b2e7-2791ebc4e9bb.mock.pstmn.io?id=1',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	));

	$response = curl_exec($curl);

	curl_close($curl);
	return $response;
}

$recipe_widget = new WP_Widget_Recipe();
?>
