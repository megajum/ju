<?php
/**
 * Excerpt
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_excerpt_options',
	array(
		'panel' => 'world_news_theme_options',
		'title' => esc_html__( 'Excerpt', 'world-news' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'world_news_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'world_news_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'world_news_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'world-news' ),
		'section'     => 'world_news_excerpt_options',
		'settings'    => 'world_news_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
	)
);
