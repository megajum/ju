<?php
/**
 * Post Options
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'world-news' ),
		'panel' => 'world_news_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'world_news_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'world-news' ),
			'section' => 'world_news_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'world_news_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'world-news' ),
			'section' => 'world_news_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'world_news_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'world-news' ),
			'section' => 'world_news_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'world_news_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'world-news' ),
			'section' => 'world_news_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'world_news_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'world-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'world_news_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'world-news' ),
		'section'  => 'world_news_post_options',
		'settings' => 'world_news_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'world_news_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'world-news' ),
			'section' => 'world_news_post_options',
		)
	)
);
