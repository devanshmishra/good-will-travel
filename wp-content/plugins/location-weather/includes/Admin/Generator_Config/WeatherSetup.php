<?php
/**
 * The weather setup configuration.
 *
 * @package Location_Weather
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Set a unique slug-like ID.
 */
$splw_opts_prefix = 'sp_location_weather_generator';

/**
 * Preview metabox.
 *
 * @param string $prefix The metabox main Key.
 * @return void
 */
SPLW::createMetabox(
	'sp_location_weather_live_preview',
	array(
		'title'        => __( 'Live Preview', 'location-weather' ),
		'post_type'    => 'location_weather',
		'show_restore' => false,
		'preview'      => false,
		'context'      => 'normal',
	)
);
SPLW::createSection(
	'sp_location_weather_live_preview',
	array(
		'fields' => array(
			array(
				'type' => 'preview',
			),
		),
	)
);

/**
 * Create metabox.
 */
SPLW::createMetabox(
	$splw_opts_prefix,
	array(
		'title'        => __( 'Location Weather Generation Options', 'location-weather' ),
		'post_type'    => 'location_weather',
		'show_restore' => true,
		'class'        => 'splw-shortcode-options',
	)
);

/**
 * Weather setting section.
 */
SPLW::createSection(
	$splw_opts_prefix,
	array(
		'title'  => __( 'Weather Settings', 'location-weather' ),
		'icon'   => '<span><svg height="14px" width="14px"  fill="#000000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g><path d="M46.5,18.0599995c0.0999985-0.5100002,0.1500015-1.039999,0.1500015-1.5599995c0-4.4099998-3.5900002-8-8-8   C37.9500008,8.5,37.25,8.5900002,36.5800018,8.7799997C34.7700005,4.9899998,30.8899994,2.5,26.6499996,2.5   c-5.0599995,0-9.3199997,3.3499999-10.6000004,8.0699997C15.0600004,9.8800001,13.8800001,9.5,12.6499996,9.5   c-3.3099995,0-5.9999995,2.6899996-5.9999995,6c0,0.7199993,0.1300001,1.4200001,0.3800001,2.0799999   C4.1799998,18.0400009,2,20.5200005,2,23.5c0,3.3099995,2.6999998,6,6,6h4.9583998   c0.1851006-0.5034924,0.3908005-0.9996929,0.6342001-1.4799995l-2.3647995-3.3110008l5.2031994-5.2030926l3.3105011,2.3647003   c0.6190987-0.3134995,1.2582989-0.5790997,1.914999-0.7953987l0.6685009-4.0107002h7.3583984l0.6685009,4.0107002   c0.6567001,0.2162991,1.2959003,0.4818993,1.9144955,0.7953987l3.3110008-2.3647003l5.2032013,5.2030926l-2.3647995,3.3110008   c0.2434006,0.4803066,0.4487991,0.9763069,0.6338005,1.4799995H44c3.3100014,0,6-2.6900005,6-6   C50,21.1399994,48.5999985,19.0300007,46.5,18.0599995z"></path><path d="M36.0455971,27.8969078l2.1225014-2.9715004l-2.8070984-2.8071003l-2.9715042,2.1225014   c-1.1490955-0.7322998-2.4287968-1.274601-3.8008957-1.5785999l-0.5997009-3.5976009h-3.9696999l-0.599699,3.5976009   c-1.3719997,0.3039989-2.6518002,0.8463001-3.8008995,1.5785999l-2.9715004-2.1225014l-2.8071003,2.8071003l2.1224995,2.9715004   c-0.7322998,1.1490917-1.2746,2.4288006-1.5784998,3.8008995l-3.5976,0.5996017v3.969799l3.5976,0.5997009   c0.3038998,1.3720894,0.8462,2.6517982,1.5784998,3.8008995l-2.1224995,2.9715004l2.8071003,2.8070984l2.9715004-2.1225014   c1.1490993,0.7322998,2.4288998,1.2745018,3.8008995,1.5786018L24.0191994,49.5h3.9696999l0.5997009-3.5974922   c1.3720989-0.3041,2.6518002-0.846302,3.8008957-1.5786018l2.9715042,2.1225014l2.8070984-2.8070984l-2.1225014-2.9715004   c0.7322998-1.1491013,1.274601-2.4288101,1.5784988-3.8008995l3.5976028-0.5997009v-3.969799l-3.5976028-0.5996017   C37.3201981,30.3257084,36.7778969,29.0459995,36.0455971,27.8969078z M26.0041008,40.2283058   c-3.2839012,0-5.9460011-2.6620979-5.9460011-5.9459991c0-3.2837982,2.6620998-5.9458981,5.9460011-5.9458981   c3.2838001,0,5.9459,2.6620998,5.9459,5.9458981C31.9500008,37.5662079,29.2879009,40.2283058,26.0041008,40.2283058z"></path></g></svg></span>',
		'class'  => 'splw-weather-settings-meta-box',
		'fields' => array(
			array(
				'id'         => 'weather-view',
				'type'       => 'image_select',
				'class'      => 'weather_view',
				'title'      => __( 'Weather Layout', 'location-weather' ),
				'options'    => array(
					'vertical'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/weather-view/vertical.svg' ),
						'name'  => __( 'Vertical Card', 'location-weather' ),
					),
					'horizontal' => array(
						'image' => SPLW::include_plugin_url( 'assets/images/weather-view/horizontal.svg' ),
						'name'  => __( 'Horizontal', 'location-weather' ),
					),
					'tabs'       => array(
						'image' => SPLW::include_plugin_url( 'assets/images/weather-view/tabs.svg' ),
						'name'  => __( 'Tabs', 'location-weather' ),
					),
					'table'      => array(
						'image' => SPLW::include_plugin_url( 'assets/images/weather-view/table.svg' ),
						'name'  => __( 'Table', 'location-weather' ),
					),
				),
				'default'    => 'vertical',
				'title_info' => __( '<div class="lw-info-label">Weather Layout</div> <div class="lw-short-content">The Weather Layout determines how weather information is displayed, with choices like vertical, horizontal.</div>', 'location-weather' ),
			),
			array(
				'id'         => 'weather-template',
				'type'       => 'image_select',
				'class'      => 'weather-template',
				'title'      => __( 'Templates', 'location-weather' ),
				'options'    => array(
					'template-one'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-one.svg' ),
						'name'  => __( 'Template One', 'location-weather' ),
					),
					'template-two'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-two.svg' ),
						'name'  => __( 'Template Two', 'location-weather' ),
					),
					'template-three' => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-three.svg' ),
						'name'  => __( 'Template Three', 'location-weather' ),
					),
					'template-four'  => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-four.svg' ),
						'name'  => __( 'Template Four', 'location-weather' ),
					),
					'template-five'  => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-five.svg' ),
						'name'  => __( 'Template Five', 'location-weather' ),
					),
					'template-six'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/vertical-layout/template-six.svg' ),
						'name'  => __( 'Template Six', 'location-weather' ),
					),
				),
				'title_info' => __( '<div class="lw-info-label">Vertical Weather Template</div> <div class="lw-short-content">Choose a ready weather template. You can easily customize it on your way to match your website design.</div><div class="info-button"><a class="lw-open-live-demo" href="https://locationweather.io/demos/lite-version-demo/" target="_blank">Live Demo</a></div>', 'location-weather' ),
				'desc'       => 'All disabled layouts are premium features. To unlock, <a class="lw-open-live-demo" href="https://locationweather.io/pricing/?ref=1" target="_blank"><strong>Upgrade To Pro!</strong></a>',
				'default'    => 'template-one',
				'dependency' => array( 'weather-view', '==', 'vertical' ),
			),
			array(
				'id'         => 'weather-horizontal-template',
				'type'       => 'image_select',
				'class'      => 'weather-horizontal-template',
				'title'      => __( 'Templates', 'location-weather' ),
				'options'    => array(
					'horizontal-one'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/horizontal-layout/template-one.svg' ),
						'name'  => __( 'Template One', 'location-weather' ),
					),
					'horizontal-two'   => array(
						'image' => SPLW::include_plugin_url( 'assets/images/horizontal-layout/template-two.svg' ),
						'name'  => __( 'Template Two', 'location-weather' ),
					),
					'horizontal-three' => array(
						'image' => SPLW::include_plugin_url( 'assets/images/horizontal-layout/template-three.svg' ),
						'name'  => __( 'Template Three', 'location-weather' ),
					),
					'horizontal-four'  => array(
						'image' => SPLW::include_plugin_url( 'assets/images/horizontal-layout/template-four.svg' ),
						'name'  => __( 'Template Four', 'location-weather' ),
					),
				),
				'title_info' => __( '<div class="lw-info-label">Horizontal Weather Template</div> <div class="lw-short-content">Choose a ready weather template. You can easily customize it on your way to match your website design.</div> <div class="info-button"><a class="lw-open-live-demo" href="https://locationweather.io/demos/lite-version-demo/" target="_blank">Live Demo</a></div>', 'location-weather' ),
				'default'    => 'horizontal-one',
				'desc'       => 'All disabled layouts are premium features. To unlock, <a class="lw-open-live-demo" href="https://locationweather.io/pricing/?ref=1" target="_blank"><strong>Upgrade To Pro!</strong></a>',
				'dependency' => array( 'weather-view', '==', 'horizontal' ),
			),
			array(
				'id'    => 'lw-get-weather-data-by-heading',
				'type'  => 'subheading',
				'title' => __( 'Get Weather Data By', 'location-weather' ),
			),
			array(
				'id'         => 'get-weather-by',
				'type'       => 'button_set',
				'title'      => __( 'Display Weather For Specific Location', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Display Weather For Specific Location</div> <div class="lw-short-content">Choose an option from the City Name, City ID, ZIP Code, and Geo Coordinates to display the weather of a <strong>specific location</strong>. </div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-display-weather-details-for-a-specific-location/" target="_blank">Open Docs</a>', 'location-weather' ),
				'options'    => array(
					'city_name' => __( 'City Name', 'location-weather' ),
					'city_id'   => __( 'City ID', 'location-weather' ),
					'zip'       => __( 'ZIP Code', 'location-weather' ),
					'latlong'   => __( 'Coordinates', 'location-weather' ),
				),
				'default'    => 'city_name',
			),
			array(
				'id'          => 'lw-city-name',
				'type'        => 'text',
				'class'       => 'splw-text-fields',
				'title'       => __( 'Enter City Name', 'location-weather' ),
				'placeholder' => __( 'London, GB', 'location-weather' ),
				'desc'        => __( 'Write your city name and country code only.', 'location-weather' ),
				'dependency'  => array( 'get-weather-by', '==', 'city_name' ),
			),
			array(
				'id'          => 'lw-city-id',
				'type'        => 'text',
				'class'       => 'splw-text-fields',
				'title'       => __( 'Enter City ID', 'location-weather' ),
				'title_info'  => __( '<div class="lw-info-label">City ID</div> <div class="lw-short-content">Set your city ID. </div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-display-weather-details-with-city-id/" target="_blank">Open Docs</a>', 'location-weather' ),
				'placeholder' => __( '2643743', 'location-weather' ),
				'desc'        => __( 'Set your city ID. <a href="https://openweathermap.org/find" target="_blank">Get city ID</a>', 'location-weather' ),
				'dependency'  => array( 'get-weather-by|lw-location-from-custom-fields', '==|!=', 'city_id|true' ),
			),
			array(
				'id'          => 'lw-zip',
				'class'       => 'splw_custom_fields',
				'type'        => 'text',
				'class'       => 'splw-text-fields',
				'title'       => __( 'Enter ZIP Code', 'location-weather' ),
				'placeholder' => __( '77070, US', 'location-weather' ),
				'desc'        => __( 'Set your zip code.See ', 'location-weather' ) . '<a href="https://www.unitedstateszipcodes.org/" target="_blank">instructions</a>',
				'dependency'  => array( 'get-weather-by|lw-location-from-custom-fields', '==|!=', 'zip|true' ),
			),
			array(
				'id'          => 'lw-latlong',
				'class'       => 'splw_custom_fields',
				'type'        => 'text',
				'class'       => 'splw-text-fields',
				'title'       => __( 'Enter Geo Coordinates', 'location-weather' ),
				'placeholder' => __( '51.509865,-0.118092', 'location-weather' ),
				'desc'        => __( 'Set coordinates (latitude & longitude). <a href="https://www.latlong.net/" target="_blank">Get coordinates</a>', 'location-weather' ),
				'dependency'  => array( 'get-weather-by|lw-location-from-custom-fields', '==|!=', 'latlong|true' ),
			),
			array(
				'id'         => 'lw-custom-name',
				'type'       => 'text',
				'title'      => __( 'Custom Location Name', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Custom Location Name</div> <div class="lw-short-content">Set your own or custom location name that will be displayed in the weather view. This will <strong>replace or override</strong> the actual name of the city. </div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-set-custom-location-name/" target="_blank">Open Docs</a>', 'location-weather' ),
			),
			array(
				'id'         => 'lw-location-from-custom-fields',
				'class'      => 'lw-location-from-custom-fields',
				'type'       => 'checkbox',
				'title'      => __( 'Location from Custom Fields', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Location from Custom Fields (Pro)</div> <div class="lw-short-content">Check it to display the weather of a location from custom fields of any post type.</div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-display-weather-details-from-a-custom-field/" target="_blank">Open Docs</a>', 'location-weather' ),
				'default'    => false,
			),
			array(
				'id'         => 'lw-visitors-location',
				'type'       => 'switcher',
				'class'      => 'splw_show_hide auto-location',
				'title'      => __( 'Display Weather For Visitors Location (Auto Detect)', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Display Weather For Visitors Location (Auto Detect)</div> <div class="lw-short-content">If you <strong>enable</strong> this option, the widget will automatically determine where your visitor is by their IP address and will display the correct weather of the visitors’ location.</div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-display-weather-details-for-visitors-location/" target="_blank">Open Docs</a><a class="lw-open-live-demo" href="https://locationweather.io/demos/auto-detect-visitors-location/" target="_blank">Live Demo</a>', 'location-weather' ),
				'text_on'    => __( 'Enabled', 'location-weather' ),
				'text_off'   => __( 'Disabled', 'location-weather' ),
				'text_width' => 99,
				'default'    => false,
			),
			array(
				'id'    => 'lw-measurement-units-heading',
				'type'  => 'subheading',
				'title' => __( 'Measurement Units', 'location-weather' ),
			),
			array(
				'id'         => 'lw-units',
				'class'      => 'splw_custom_button_fields',
				'type'       => 'select',
				'title'      => __( 'Display Temperature Unit', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Display Temperature Unit</div> <div class="lw-short-content">Choose a Temperature unit based on your Location. </div> <a class="lw-open-docs" href="https://locationweather.io/docs/how-to-configure-and-display-temperature-unit/" target="_blank">Open Docs</a>', 'location-weather' ),
				'options'    => array(
					'metric'   => __( 'Celsius (°C)', 'location-weather' ),
					'imperial' => __( 'Fahrenheit (°F) ', 'location-weather' ),
					'auto'     => __( 'Both (°C & °F)', 'location-weather' ),
					'none'     => __( 'Degree Symbol (°)', 'location-weather' ),
				),
				'default'    => 'metric',
			),
			array(
				'id'         => 'active-lw-units',
				'type'       => 'button_set',
				'class'      => 'splw-active-lw-units',
				'title'      => __( 'Active Temperature Unit', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Active Temperature Unit</div> <div class="lw-short-content">Set an active temperature unit that will remain selected on the front end. If you select <strong>Auto</strong>, it will detect the visitor’s location and show the preferred unit of that location selected automatically.</div>', 'location-weather' ),
				'options'    => array(
					'metric'   => __( '°C ', 'location-weather' ),
					'imperial' => __( '°F ', 'location-weather' ),
					'auto'     => __( 'Auto', 'location-weather' ),
				),
				'desc'       => 'This is a <a class="lw-open-live-demo" href="https://locationweather.io/pricing/?ref=1" target="_blank">Pro feature!</a>',
				'default'    => 'metric',
				'dependency' => array( 'lw-units', 'any', 'auto,none', true ),
			),
			array(
				'id'         => 'lw-pressure-unit',
				'class'      => 'splw_pressure_unit',
				'type'       => 'select',
				'title'      => __( 'Pressure Unit ', 'location-weather' ),
				'title_info' => __( '<div class="lw-info-label">Atmospheric or Air Pressure Unit</div> <div class="lw-short-content">Select an atmospheric or air pressure unit.</div>', 'location-weather' ),
				'options'    => array(
					'mb'  => __( 'Millibars (mb)', 'location-weather' ),
					'hpa' => __( 'Hectopascals (hPa)', 'location-weather' ),
					'1'   => __( 'kilopascal (kPa) (Pro)', 'location-weather' ),
					'2'   => __( 'Inches of Mercury (inHg) (Pro)', 'location-weather' ),
					'3'   => __( 'Pounds per Square Inch (psi) (Pro)', 'location-weather' ),
					'4'   => __( 'Millimeters of Mercury (mmHg / Torr) (Pro)', 'location-weather' ),
					'5'   => __( 'Kilogram per Square centimeter (kg/cm²) (Pro)', 'location-weather' ),
				),
				'default'    => 'mb',
			),
			array(
				'id'      => 'lw-precipitation-unit',
				'class'   => 'splw_precipitation_unit',
				'type'    => 'select',
				'title'   => __( ' Precipitation Unit ', 'location-weather' ),
				'options' => array(
					'mm'   => __( 'Millimeters (mm)', 'location-weather' ),
					'inch' => __( 'Inches (inch)', 'location-weather' ),
				),
				'default' => 'mm',
			),
			array(
				'id'      => 'lw-wind-speed-unit',
				'class'   => 'splw_wind_speed_unit',
				'type'    => 'select',
				'title'   => __( ' Wind Speed Unit ', 'location-weather' ),
				'options' => array(
					'mph' => __( 'Miles per hour (mph)', 'location-weather' ),
					'kmh' => __( 'Kilometer per hour (km/h)', 'location-weather' ),
					'3'   => __( 'Meter per second (m/s) (Pro)', 'location-weather' ),
					'4'   => __( 'Knot (kn) (Pro)', 'location-weather' ),

				),
				'default' => 'mph',
			),
			array(
				'id'      => 'lw-visibility-unit',
				'type'    => 'select',
				'title'   => __( ' Visibility Unit ', 'location-weather' ),
				'options' => array(
					'km' => __( 'Kilometers', 'location-weather' ),
					'mi' => __( 'Miles', 'location-weather' ),
				),
				'default' => 'km',
			),
			// Samples.
		),
	)
);
