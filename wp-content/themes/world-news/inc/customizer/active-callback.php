<?php

/**
 * Active Callbacks
 *
 * @package World_News
 */

// Theme Options.
function world_news_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'world_news_enable_pagination' )->value() );
}
function world_news_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'world_news_enable_breadcrumb' )->value() );
}

// Header Options.
function world_news_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'world_news_enable_topbar' )->value() );
}

// Flash News Section.
function world_news_is_flash_news_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'world_news_enable_flash_news_section' )->value() );
}
function world_news_is_flash_news_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_flash_news_content_type' )->value();
	return ( world_news_is_flash_news_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function world_news_is_flash_news_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_flash_news_content_type' )->value();
	return ( world_news_is_flash_news_section_enabled( $control ) && ( 'category' === $content_type ) );
}

// Banner Slider Section.
function world_news_is_banner_grid_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'world_news_enable_banner_section' )->value() );
}
function world_news_is_banner_grid_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_banner_grid_content_type' )->value();
	return ( world_news_is_banner_grid_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function world_news_is_banner_grid_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_banner_grid_content_type' )->value();
	return ( world_news_is_banner_grid_section_enabled( $control ) && ( 'category' === $content_type ) );
}
function world_news_is_editor_picks_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_editor_picks_content_type' )->value();
	return ( world_news_is_banner_grid_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function world_news_is_editor_picks_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'world_news_editor_picks_content_type' )->value();
	return ( world_news_is_banner_grid_section_enabled( $control ) && ( 'category' === $content_type ) );
}
