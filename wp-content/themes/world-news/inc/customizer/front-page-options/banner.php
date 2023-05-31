<?php
/**
 * Banner Section
 *
 * @package World_News
 */

$wp_customize->add_section(
	'world_news_banner_section',
	array(
		'panel'    => 'world_news_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'world-news' ),
		'priority' => 20
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'world_news_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'world_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new World_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'world_news_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'world-news' ),
			'section'  => 'world_news_banner_section',
			'settings' => 'world_news_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'world_news_enable_banner_section',
		array(
			'selector' => '#world_news_banner_section .section-link',
			'settings' => 'world_news_enable_banner_section',
		)
	);
}

// Banner Section - Banner Grid Content Type.
$wp_customize->add_setting(
	'world_news_banner_grid_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_banner_grid_content_type',
	array(
		'label'           => esc_html__( 'Select Banner\'s Grid Content Type', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_banner_grid_content_type',
		'type'            => 'select',
		'active_callback' => 'world_news_is_banner_grid_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'world-news' ),
			'category' => esc_html__( 'Category', 'world-news' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Banner Section - Select Post.
	$wp_customize->add_setting(
		'world_news_banner_grid_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'world_news_banner_grid_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'world-news' ), $i ),
			'section'         => 'world_news_banner_section',
			'settings'        => 'world_news_banner_grid_content_post_' . $i,
			'active_callback' => 'world_news_is_banner_grid_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => world_news_get_post_choices(),
		)
	);

}

// Banner Section - Select Category.
$wp_customize->add_setting(
	'world_news_banner_grid_content_category',
	array(
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_banner_grid_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_banner_grid_content_category',
		'active_callback' => 'world_news_is_banner_grid_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => world_news_get_post_cat_choices(),
	)
);

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'world_news_banner_grid_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new World_News_Customize_Horizontal_Line(
		$wp_customize,
		'world_news_banner_grid_horizontal_line',
		array(
			'section'         => 'world_news_banner_section',
			'settings'        => 'world_news_banner_grid_horizontal_line',
			'active_callback' => 'world_news_is_banner_grid_section_enabled',
			'type'            => 'hr',
		)
	)
);

// Banner Section - Editor Pick Title.
$wp_customize->add_setting(
	'world_news_editor_picks_title',
	array(
		'default'           => __( 'Editor\'s Picks', 'world-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'world_news_editor_picks_title',
	array(
		'label'           => esc_html__( 'Editors Picks\'s Section Title', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_editor_picks_title',
		'type'            => 'text',
		'active_callback' => 'world_news_is_banner_grid_section_enabled',
	)
);

// Banner Section - Editor Pick Content Type.
$wp_customize->add_setting(
	'world_news_editor_picks_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_editor_picks_content_type',
	array(
		'label'           => esc_html__( 'Select Editor Picks\'s Content Type', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_editor_picks_content_type',
		'type'            => 'select',
		'active_callback' => 'world_news_is_banner_grid_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'world-news' ),
			'category' => esc_html__( 'Category', 'world-news' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Banner Section - Editor Picks Select Post.
	$wp_customize->add_setting(
		'world_news_editor_picks_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'world_news_editor_picks_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'world-news' ), $i ),
			'section'         => 'world_news_banner_section',
			'settings'        => 'world_news_editor_picks_content_post_' . $i,
			'active_callback' => 'world_news_is_editor_picks_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => world_news_get_post_choices(),
		)
	);

}

// Banner Section - Editor picks Select Category.
$wp_customize->add_setting(
	'world_news_editor_picks_content_category',
	array(
		'sanitize_callback' => 'world_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'world_news_editor_picks_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_editor_picks_content_category',
		'active_callback' => 'world_news_is_editor_picks_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => world_news_get_post_cat_choices(),
	)
);

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'world_news_editor_picks_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new World_News_Customize_Horizontal_Line(
		$wp_customize,
		'world_news_editor_picks_horizontal_line',
		array(
			'section'         => 'world_news_banner_section',
			'settings'        => 'world_news_editor_picks_horizontal_line',
			'active_callback' => 'world_news_is_banner_grid_section_enabled',
			'type'            => 'hr',
		)
	)
);

// Banner Section - Advertisement Area.
$wp_customize->add_setting(
	'world_news_banner_advertisement_area',
	array(
		'default'           => '',
		'sanitize_callback' => 'world_news_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'world_news_banner_advertisement_area',
		array(
			'label'           => esc_html__( 'Advertisement Area', 'world-news' ),
			'section'         => 'world_news_banner_section',
			'settings'        => 'world_news_banner_advertisement_area',
			'active_callback' => 'world_news_is_banner_grid_section_enabled',
		)
	)
);

// Banner Section - Advertisement Link.
$wp_customize->add_setting(
	'world_news_banner_advertisement_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'world_news_banner_advertisement_link',
	array(
		'label'           => esc_html__( 'Advertisement Link', 'world-news' ),
		'section'         => 'world_news_banner_section',
		'settings'        => 'world_news_banner_advertisement_link',
		'type'            => 'url',
		'active_callback' => 'world_news_is_banner_grid_section_enabled',
	)
);

