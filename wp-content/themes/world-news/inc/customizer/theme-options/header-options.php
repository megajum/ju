<?php
/**
 * Header Options
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_header_options',
	array(
		'panel' => 'world_news_theme_options',
		'title' => esc_html__( 'Header Options', 'world-news' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'world_news_enable_topbar',
	array(
		'sanitize_callback' => 'world_news_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'world-news' ),
			'section' => 'world_news_header_options',
		)
	)
);

// Header Section - Advertisement.
$wp_customize->add_setting(
	'world_news_header_advertisement',
	array(
		'sanitize_callback' => 'world_news_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'world_news_header_advertisement',
		array(
			'label'    => esc_html__( 'Advertisement', 'world-news' ),
			'section'  => 'world_news_header_options',
			'settings' => 'world_news_header_advertisement',
		)
	)
);

// Header Section - Advertisement URL.
$wp_customize->add_setting(
	'world_news_header_advertisement_url',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'world_news_header_advertisement_url',
	array(
		'label'    => esc_html__( 'Advertisement URL', 'world-news' ),
		'section'  => 'world_news_header_options',
		'settings' => 'world_news_header_advertisement_url',
		'type'     => 'url',
	)
);
