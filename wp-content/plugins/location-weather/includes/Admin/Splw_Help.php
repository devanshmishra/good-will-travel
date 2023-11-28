<?php
/**
 * This is to plugin help page.
 *
 * @package location-weather
 */

namespace ShapedPlugin\Weather\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * The help page handler class.
 */
class Splw_Help {

	/**
	 * The instance of the class.
	 *
	 * @var object
	 */
	private static $_instance;

	/**
	 * The Constructor of the class.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'help_page' ), 80 );
	}

	/**
	 * The instance function of the class.
	 *
	 * @return object
	 */
	public static function getInstance() {
		if ( ! self::$_instance ) {
			self::$_instance = new Splw_Help();
		}

		return self::$_instance;
	}

	/**
	 * Add SubMenu Page
	 */
	public function help_page() {
		add_submenu_page( 'edit.php?post_type=location_weather', __( 'Location Weather Help', 'location-weather' ), __( 'Help', 'location-weather' ), 'manage_options', 'splw_help', array( $this, 'help_page_callback' ) );
	}

	/**
	 * Help Page Callback
	 */
	public function help_page_callback() {
		wp_enqueue_style( 'splw__admin-help', LOCATION_WEATHER_ASSETS . '/css/help-page.min.css', array(), LOCATION_WEATHER_VERSION );
		$add_shortcode_link = admin_url( 'post-new.php?post_type=location_weather' );
		?>
		<div class="sp-location-weather-help">
				<!-- Header section start -->
				<section class="splw__help header">
					<div class="header-area">
						<div class="container">
							<div class="header-logo">
								<img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/location-weather-logo.svg' ); ?>" alt="">
								<span><?php echo esc_html( LOCATION_WEATHER_VERSION ); ?></span>
							</div>
							<div class="header-content">
								<p>Thank you for installing Location Weather plugin! This video will help you get started with the plugin.</p>
							</div>
						</div>
					</div>
					<div class="video-area">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/OpfcigkrtDE?list=PLoUb-7uG-5jO40tUXGTe8cyGrbvMzZBqc" frameborder="0" title="location-weather" allowfullscreen=""></iframe>
					</div>
					<div class="content-area">
						<div class="container">
							<div class="content-button">
								<a href="<?php echo esc_url( $add_shortcode_link ); ?>">Start Managing Weather</a>
								<a href="https://locationweather.io/docs/" target="_blank">Read Documentation</a>
							</div>
						</div>
					</div>
				</section>
				<!-- Header section end -->

				<!-- Upgrade section start -->
				<section class="splw__help upgrade">
					<div class="upgrade-area">
					<div class="upgrade-img"> 
					<img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/lw-icon.svg' ); ?>" alt="">
					</div>
						<h2>Upgrade To Unleash the Power of Location Weather Pro</h2> 
						<p>Get the most out of Location Weather by upgrading to unlock all of its powerful features. With Location Weather Pro, you can unlock amazing features like:</p>
					</div>
					<div class="upgrade-info">
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<ul class="upgrade-list">
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">4 Exclusive Ready Weather Layouts (Vertical Card, Horizontal, Tabs, Table)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">17+ Beautiful Ready Weather Templates</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Weather by 4 Location Types: City Name, City ID, ZIP, and Geo Coordinates (Latitude and Longitude)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Set a Custom Location Name that overrides the Open Weather Map Name</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Weather From Custom Fields</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Automatically Detect Visitor’s Location via IP</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Temperature Unit in Celsius °C, Fahrenheit °F, Both °C & °F & Degree Symbol °</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Atmospheric or Air Pressure Unit (mb, hPa)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Wind Speed Unit in (mph, m/s, km/h, kn)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Visibility Unit (Kilometers, Miles)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Animated Weather Condition Icon</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Real Feel (Feels-like) Statement</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Show/Hide Weather High & Low Temperature</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Up-to-date Weather Additional Data Display Control</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">10+ Weather Additional Data Layouts, including (List, Justified, Grid, and Carousels)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Weather Additional Data Style (Clean, Divided, & Striped Style)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Full-featured Carousel for Weather Additional Data (AutoPlay, Delay Time, Stop on Hover, Columns, Navigation)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Show/Hide 16+ Weather Additional Data Fields (Pressure, Humidity, Wind Speed, Precipitation, Clouds, Rain Chance, Snow, Wind Gust, UV Index, Dew Point, Air Quality, Visibility, Sunrise & Sunset, Moonrise & Moonset Time, Moon Phase)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display National Weather Emergency Alerts</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Weather Additional Data in Several List Alignments (Center, Left, Justified)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">3 Selectable Weather Additional Data Icon Packs (Regular, Fill, Light)</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="upgrade-list">
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Adjust the Weather Additional Data Icon Color and Size</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Set Space Between the Additional Data</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Daily basis Weather Forecast Data for up to 16 days</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Display Hourly based Weather Forecast Data (1-Hour, 3-Hour) 4 days/5 days</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Choose Daily, Hourly, or a Combination of both formats for displaying Weather Forecast Data</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Weather Forecast Daily and Hourly Toggle Button</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Set Forecast Days' name Length Type to be between Full and Short</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">5 Selectable Weather Forecast Data Icon Sets (Animated, Normal, Light, Fill, and Glass Morphism)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Configure Weather Forecast Data Icon Color and Size</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Adjust the Weather Forecast Data Background Color</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Full-featured Carousel for Weather Forecast Data (AutoPlay, Delay Time, Stop on Hover, Loop, Columns, Navigation)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Stylize your Weather View using Color (Solid or Gradient), Weather-based Images, and Videos.</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Weather-based Background includes (Sunny, Cloudy, Drizzly, Rainy, Snowy, Stormy, and Foggy)</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Adjust the Weather-based image Opacity</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Customize Weather View Content Padding, Border, and Border Radius</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Adjust the size of the Weather View maximum Width to match your Website Design</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Stylize your Weather View with Color and Typography with 1000+ Google Fonts</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Export and Import Weather shortcodes using the Location Weather Exporter/Importer Tools</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Top-notch Dedicated Customer Support</li>
										<li><img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/checkmark.svg' ); ?>" alt="">Regular Updates and Adding New Features</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="upgrade-pro">
							<div class="pro-content">
								<div class="pro-icon">
									<img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/lwp-icon.svg' ); ?>" alt="">
								</div>
								<div class="pro-text">
									<h2>Upgrade To Location Weather Pro, Best Value!</h2>
									<p>Boost sales of weather-dependent goods and services.</p>
								</div>
							</div>
							<div class="pro-btn">
								<a href="https://locationweather.io/pricing/?ref=1" target="_blank">Upgrade To Pro Now</a>
							</div>
						</div>
					</div>
				</section>
				<!-- Upgrade section end -->
				<!-- Testimonial section start -->
				<section class="splw__help testimonial">
					<div class="row">
						<div class="col-lg-6">
							<div class="testimonial-area">
								<div class="testimonial-content">
									<p>Awesome guys and Awesome plugin for geting different city weather updates easily. The plugin works great and is a simple weather app that does exactly what it is supposed to. Customer support is also top-notch and answered a question I had very quickly! Thanks.</p>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/Jeffrey-DiFilippo-min.jpeg' ); ?>" alt="">
									</div>
									<div class="info">
										<h3>Jeffrey DiFilippo</h3>
										<p>Web Developer</p>
										<div class="star">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="testimonial-area">
								<div class="testimonial-content">
									<p>The free trial worked great upon testing, but needed the advanced features and upgraded. At first the advanced features (i.e. auto location weather and multiple day forecast) did not work as advertised. The vendor’s support is great as they worked to get the problem resolved... I can recommend this plugin.</p>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<img src="<?php echo esc_url( LOCATION_WEATHER_ASSETS . '/images/Dawie-Hanekom-min.png' ); ?>" alt="">
									</div>
									<div class="info">
										<h3>Dawie Hanekom</h3>
										<p>Managing Director, Newbe Marketing</p>
										<div class="star">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Testimonial section end -->

		</div>
		<?php
	}

}
