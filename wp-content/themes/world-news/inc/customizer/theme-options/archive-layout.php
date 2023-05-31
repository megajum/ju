<?php
/**
 * Archive Layout
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'world-news' ),
		'panel' => 'world_news_theme_options',
	)
);

// Archive Layout - Grid Style.
$wp_customize->add_setting(
	'world_news_archive_grid_style',
	array(
		'default'           => 'grid-column-3',
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_archive_grid_style',
	array(
		'label'   => esc_html__( 'Column Layout', 'world-news' ),
		'section' => 'world_news_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'grid-column-2' => __( 'Column 2', 'world-news' ),
			'grid-column-3' => __( 'Column 3', 'world-news' ),
		),
	)
);
