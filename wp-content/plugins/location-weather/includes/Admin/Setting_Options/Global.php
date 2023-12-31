<?php
/**
 * The settings configuration.
 *
 * @package Location_Weather
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

// Set a unique slug-like ID.
$prefix = 'location_weather_settings';

// Create options.
SPLW::createOptions(
	$prefix,
	array(
		'menu_title'         => __( 'Settings', 'location-weather' ),
		'menu_slug'          => 'lw-settings',
		'menu_parent'        => 'edit.php?post_type=location_weather',
		'menu_type'          => 'submenu',
		'show_search'        => false,
		'show_all_options'   => false,
		'show_reset_all'     => false,
		'framework_title'    => __( 'Settings', 'location-weather' ),
		'framework_class'    => 'splw-options',
		'theme'              => 'light',
		'show_reset_section' => true,

	)
);
// Create a section.
SPLW::createSection(
	$prefix,
	array(
		'title'  => 'API Settings',
		'icon'   => 'fa fa-wrench',
		'fields' => array(
			array(
				'id'    => 'open-api-key',
				'type'  => 'text',
				'title' => __( 'Add Your OpenWeather API Key', 'location-weather' ),
				'desc'  => __( 'Strongly recommended: <a href="https://home.openweathermap.org/api_keys" target="_blank">Get your API key for free!</a>', 'location-weather' ),
			),
		),
	)
);

// Custom CSS Field.
SPLW::createSection(
	$prefix,
	array(
		'class'  => 'splw_advance_setting',
		'title'  => __( 'Advanced Settings', 'location-weather' ),
		'icon'   => 'fa fa-cogs',
		'fields' => array(
			array(
				'id'         => 'splw_delete_on_remove',
				'type'       => 'checkbox',
				'title'      => __( 'Clean-up Data on Deletion', 'location-weather' ),
				'default'    => false,
				'title_info' => '<div class="lw-info-label">Clean-up Data on Deletion</div>Check this box if you would like location weather to completely clean-up all of its data when the plugin is deleted.',
			),
			array(
				'id'         => 'splw_skipping_cache',
				'type'       => 'switcher',
				'title'      => __( 'Skip Cache for Weather Update', 'location-weather' ),
				'default'    => false,
				'text_on'    => __( 'Enabled', 'location-weather' ),
				'text_off'   => __( 'Disabled', 'location-weather' ),
				'text_width' => '95',
			),
		),
	)
);


// Custom CSS Field.
SPLW::createSection(
	$prefix,
	array(
		'id'     => 'custom_css_section',
		'title'  => __( 'Custom CSS', 'location-weather' ),
		'icon'   => 'fa fa-css3',
		'fields' => array(
			array(
				'id'       => 'splw_custom_css',
				'type'     => 'code_editor',
				'title'    => __( 'Custom CSS', 'location-weather' ),
				'settings' => array(
					'mode'  => 'css',
					'theme' => 'monokai',
				),
			),
		),
	)
);
