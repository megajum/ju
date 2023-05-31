<?php

// Posts Grid Widget.
require get_template_directory() . '/inc/widgets/posts-grid-widget.php';

// Posts List Widget.
require get_template_directory() . '/inc/widgets/posts-list-widget.php';

// Posts Small List Widget.
require get_template_directory() . '/inc/widgets/posts-small-list-widget.php';

// Posts Tile Widget.
require get_template_directory() . '/inc/widgets/posts-tile-widget.php';

// Two Column Posts Widget.
require get_template_directory() . '/inc/widgets/two-column-posts-widget.php';

// Posts Slider Widget.
require get_template_directory() . '/inc/widgets/posts-slider-widget.php';

// Author Info Widget.
require get_template_directory() . '/inc/widgets/info-author-widget.php';

// Social Icons Widget.
require get_template_directory() . '/inc/widgets/social-icons-widget.php';

/**
 * Register Widgets
 */
function world_news_pro_register_widgets() {

	register_widget( 'World_News_Posts_Grid_Widget' );

	register_widget( 'World_News_Posts_List_Widget' );

	register_widget( 'World_News_Posts_Small_List_Widget' );

	register_widget( 'World_News_Posts_Tile_Widget' );

	register_widget( 'World_News_Two_Column_Posts_Widget' );

	register_widget( 'World_News_Posts_Slider_Widget' );

	register_widget( 'World_News_Author_Info_Widget' );

	register_widget( 'World_News_Social_Icons_Widget' );

}
add_action( 'widgets_init', 'world_news_pro_register_widgets' );
