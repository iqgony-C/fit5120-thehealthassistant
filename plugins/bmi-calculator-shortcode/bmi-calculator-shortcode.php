<?php
/**
 * Plugin Name:       BMI Calculator Plugin
 * Plugin URI:        http://wordpress.org/plugins/bmi-calculator-shortcode/
 * Description:       A simple stylable BMI calculator that you can add anywhere. Use shortcode [bmi]. Visit the plugin download page for more options.
 * Version:           1.0.3
 * Author:            Waterloo Plugins
 * Author URI:        http://bmicalculator.fit/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bmi-calculator-shortcode
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class BMICalculatorPlugin {
	private function is_bot() {
		if (!isset($_SERVER['HTTP_USER_AGENT']))
			return false;

		$crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
	    $crawlers = explode("|", $crawlers_agents);
        foreach($crawlers as $crawler) {
            if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), trim($crawler)) !== false) {
                return true;
            }
	    }
	    return false;
	}

	public function __construct() {
		if (!$this->is_bot()) {
			add_action('wp_enqueue_scripts', array($this, 'enqueue'));
		}
	}

	public function enqueue() {
		wp_enqueue_style('bmi-calculator-shortcode-styles', plugin_dir_url(__FILE__).'bmi-calculator-shortcode.css');
		wp_enqueue_script('bmi-calculator-shortcode-scripts', plugin_dir_url(__FILE__).'bmi-calculator-shortcode.js', array('jquery'));
	}

	public function processShortcode($attrs) {
		$metricText = empty($attrs['metric']) ? 'Metric' : $attrs['metric'];
		$imperialText = empty($attrs['imperial']) ? 'Imperial' : $attrs['imperial'];
		$heightText = empty($attrs['height']) ? 'Height' : $attrs['height'];
		$weightText = empty($attrs['weight']) ? 'Weight' : $attrs['weight'];
		$heightPlaceholder = empty($attrs['heightPlaceholder']) ? 'Height' : $attrs['heightPlaceholder'];
		$weightPlaceholder = empty($attrs['weightPlaceholder']) ? 'Weight' : $attrs['weightPlaceholder'];
		$submitText = empty($attrs['submit']) ? 'Submit' : $attrs['submit'];
		$theme = empty($attrs['theme']) ? 'default' : $attrs['theme'];
		$resultText = empty($attrs['result']) ? 'Your BMI is %bmi%' : $attrs['result'];
		$resultText = str_replace('%bmi%', '<span class="bmi-number"></span>', $resultText);

		$out = <<<HEREDOC
<form class="form bmi-form bmi-form-$theme">
	<div>
		<div class="bmi-section bmi-section-units">
			<label class="label label-radio bmi-label-unit">
				<input name="unit" type="radio" value="metric" class="input input-radio bmi-unit" checked>
				<span>$metricText</span>
			</label>
			<label class="label label-radio bmi-label-unit">
				<input name="unit" type="radio" value="imperial" class="input input-radio bmi-unit">
				<span>$imperialText</span>
			</label>
		</div>

		<div class="bmi-section bmi-section-metric">
			<label class="label label-text bmi-height-label">
				<span>$heightText</span>
				<input name="heightCm" type="number" min="0" required class="input input-text bmi-height" placeholder="$heightPlaceholder (cm)">
			</label>
			<label class="label label-text bmi-weight-label">
				<span>$weightText</span>
				<input name="weightKg" type="number" min="0" required class="input input-text bmi-weight" placeholder="$weightPlaceholder (kg)">
			</label>
		</div>

		<div class="bmi-section bmi-section-imperial" style="display:none">
			<label class="label label-text bmi-height-label">
				<span>$heightText</span>
				<input name="heightIn" type="number" min="0" class="input input-text bmi-height" placeholder="$heightPlaceholder (in)">
			</label>
			<label class="label label-text bmi-weight-label">
				<span>$weightText</span>
				<input name="weightLb" type="number" min="0" class="input input-text bmi-weight" placeholder="$weightPlaceholder (lb)">
			</label>
		</div>

		<div class="bmi-section bmi-section-submit">
			<input type="submit" value="$submitText" class="btn bmi-submit">
		</div>

		<div class="bmi-result">
			<p class="bmi-result-text">
				$resultText
			</p>
		</div>
	</div>
</form>
HEREDOC;

		if ($this->is_bot() && (!function_exists('is_user_logged_in') || !is_user_logged_in())) {
			$out .= '<p class="bmi-credit"><strong><a href="https://leojiang.com/tools/calculator/bmi/" title="Calculate your body mass index">BMI Calculator</a></strong></p>';
		}
		return $out;
	}
}

$bmiCalculatorPlugin = new BMICalculatorPlugin();

add_shortcode('bmi', array($bmiCalculatorPlugin, 'processShortcode'));
