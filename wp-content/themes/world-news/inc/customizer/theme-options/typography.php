<?php
/**
 * Typography
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_typography',
	array(
		'panel' => 'world_news_theme_options',
		'title' => esc_html__( 'Typography', 'world-news' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'world_news_site_title_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'world_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'world_news_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'world-news' ),
		'section'  => 'world_news_typography',
		'settings' => 'world_news_site_title_font',
		'type'     => 'select',
		'choices'  => world_news_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'world_news_site_description_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'world_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'world_news_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'world-news' ),
		'section'  => 'world_news_typography',
		'settings' => 'world_news_site_description_font',
		'type'     => 'select',
		'choices'  => world_news_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'world_news_header_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'world_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'world_news_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'world-news' ),
		'section'  => 'world_news_typography',
		'settings' => 'world_news_header_font',
		'type'     => 'select',
		'choices'  => world_news_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'world_news_body_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'world_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'world_news_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'world-news' ),
		'section'  => 'world_news_typography',
		'settings' => 'world_news_body_font',
		'type'     => 'select',
		'choices'  => world_news_get_all_google_font_families(),
	)
);
