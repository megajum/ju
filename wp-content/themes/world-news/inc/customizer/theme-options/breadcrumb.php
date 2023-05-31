<?php
/**
 * Breadcrumb
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'world-news' ),
		'panel' => 'world_news_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'world_news_enable_breadcrumb',
	array(
		'sanitize_callback' => 'world_news_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'world-news' ),
			'section' => 'world_news_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'world_news_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'world_news_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'world-news' ),
		'active_callback' => 'world_news_is_breadcrumb_enabled',
		'section'         => 'world_news_breadcrumb',
	)
);
