<?php
/**
 * Theme Options
 *
 * @package World_News
 */

$wp_customize->add_panel(
	'world_news_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'world-news' ),
		'priority' => 130,
	)
);

// Topbar.
require get_template_directory() . '/inc/customizer/theme-options/header-options.php';

// Frontpage Sidebar Position.
require get_template_directory() . '/inc/customizer/theme-options/frontpage-sidebar-position.php';

// Typography.
require get_template_directory() . '/inc/customizer/theme-options/typography.php';

// Excerpt.
require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

// Breadcrumb.
require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

// Archive Layout.
require get_template_directory() . '/inc/customizer/theme-options/archive-layout.php';

// Sidebar Position.
require get_template_directory() . '/inc/customizer/theme-options/sidebar-position.php';

// Post Options.
require get_template_directory() . '/inc/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/inc/customizer/theme-options/footer-options.php';
