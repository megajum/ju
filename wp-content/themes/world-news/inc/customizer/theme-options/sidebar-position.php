<?php
/**
 * Sidebar Position
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'world-news' ),
		'panel' => 'world_news_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'world_news_sidebar_position',
	array(
		'sanitize_callback' => 'world_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'world_news_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'world-news' ),
		'section' => 'world_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'world-news' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'world-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'world-news' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'world_news_post_sidebar_position',
	array(
		'sanitize_callback' => 'world_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'world_news_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'world-news' ),
		'section' => 'world_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'world-news' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'world-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'world-news' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'world_news_page_sidebar_position',
	array(
		'sanitize_callback' => 'world_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'world_news_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'world-news' ),
		'section' => 'world_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'world-news' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'world-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'world-news' ),
		),
	)
);
