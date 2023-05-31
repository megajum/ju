<?php
/**
 * Front Page Options
 *
 * @package World News
 */

$wp_customize->add_panel(
	'world_news_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'world-news' ),
		'priority' => 130,
	)
);

// Flash News Section.
require get_template_directory() . '/inc/customizer/front-page-options/flash-news.php';

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';
