<?php
if ( ! get_theme_mod( 'world_news_enable_flash_news_section', false ) ) {
	return;
}

$content_ids  = array();
$content_type = get_theme_mod( 'world_news_flash_news_content_type', 'post' );

if ( $content_type === 'post' ) {

	for ( $i = 1; $i <= 5; $i++ ) {
		$content_ids[] = get_theme_mod( 'world_news_flash_news_content_post_' . $i );
	}

	$args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);
	if ( ! empty( array_filter( $content_ids ) ) ) {
		$args['post__in'] = array_filter( $content_ids );
		$args['orderby']  = 'post__in';
	} else {
		$args['orderby'] = 'date';
	}
} else {
	$cat_content_id = get_theme_mod( 'world_news_flash_news_content_category' );
	$args           = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}

$args = apply_filters( 'world_news_flash_news_section_args', $args );

world_news_render_flash_news_section( $args );

/**
 * Render Flash News Section.
 */
function world_news_render_flash_news_section( $args ) {
	$section_title    = get_theme_mod( 'world_news_flash_news_title', __( 'Flash News', 'world-news' ) );
	$speed_controller = get_theme_mod( 'world_news_flash_news_speed_controller', 600 );

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		?>
		<section id="world_news_flash_news_section" class="flash-news-ticker">
			<?php
			if ( is_customize_preview() ) :
				world_news_section_link( 'world_news_flash_news_section' );
			endif;
			?>
			<div class="ascendoor-wrapper">
				<div class="flash-news-ticker-wrapper">
					<div class="title-part">
						<div class="title-wrap">
							<span class="flash-loader">
								<span> <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/globe.gif' ); ?>"> </span>
							</span>
							<span class="flash-title">
								<?php echo esc_html( $section_title ); ?>
							</span>
						</div>
					</div>
					<div class="flash-news-part" dir="ltr">
						<div class="marquee flash-news-slide" data-speed="<?php echo absint( $speed_controller ); ?>">
							<?php
							while ( $query->have_posts() ) :
								$query->the_post();
								?>
								<div class="mag-post-title-wrapper">
									<div class="mag-post-title-wrap">
										<span class="flash-img"><?php the_post_thumbnail( array( 40, 40 ) ); ?></span>
										<span class="flash-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
}
