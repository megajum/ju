<?php
/**
 * Frontpage Sidebar Position
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_frontpage_sidebar',
	array(
		'panel' => 'world_news_theme_options',
		'title' => esc_html__( 'Frontpage Sidebar Position', 'world-news' ),
	)
);

// Frontpage Sidebar Position - Frontpage Sidebar Position.
$wp_customize->add_setting(
	'world_news_frontpage_sidebar_position',
	array(
		'default'           => 'frontpage-right-sidebar',
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_frontpage_sidebar_position',
	array(
		'label'    => esc_html__( 'Frontpage Sidebar Position', 'world-news' ),
		'section'  => 'world_news_frontpage_sidebar',
		'settings' => 'world_news_frontpage_sidebar_position',
		'type'     => 'select',
		'choices'  => array(
			'frontpage-left-sidebar'  => __( 'Left', 'world-news' ),
			'frontpage-right-sidebar' => __( 'Right', 'world-news' ),
		),
	)
);
