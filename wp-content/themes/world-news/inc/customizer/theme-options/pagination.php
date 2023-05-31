<?php
/**
 * Pagination
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_pagination',
	array(
		'panel' => 'world_news_theme_options',
		'title' => esc_html__( 'Pagination', 'world-news' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'world_news_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'world-news' ),
			'section'  => 'world_news_pagination',
			'settings' => 'world_news_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'world_news_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'world-news' ),
		'section'         => 'world_news_pagination',
		'settings'        => 'world_news_pagination_type',
		'active_callback' => 'world_news_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'world-news' ),
			'numeric' => __( 'Numeric', 'world-news' ),
		),
	)
);
