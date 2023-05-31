<?php
if ( ! get_theme_mod( 'world_news_enable_banner_section', false ) ) {
	return;
}

$grid_content_ids          = $editor_picks_ids = array();
$gird_content_type         = get_theme_mod( 'world_news_banner_grid_content_type', 'post' );
$editor_picks_content_type = get_theme_mod( 'world_news_editor_picks_content_type', 'post' );

if ( $gird_content_type === 'post' ) {
	for ( $i = 1; $i <= 5; $i++ ) {
		$grid_content_ids[] = get_theme_mod( 'world_news_banner_grid_content_post_' . $i );
	}
	$banner_grid_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);
	if ( ! empty( array_filter( $grid_content_ids ) ) ) {
		$banner_grid_args['post__in'] = array_filter( $grid_content_ids );
		$banner_grid_args['orderby']  = 'post__in';
	} else {
		$banner_grid_args['orderby'] = 'date';
	}
} else {
	$cat_content_id   = get_theme_mod( 'world_news_banner_grid_content_category' );
	$banner_grid_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}
$banner_grid_args = apply_filters( 'world_news_banner_section_args', $banner_grid_args );

if ( $editor_picks_content_type === 'post' ) {
	for ( $i = 1; $i <= 3; $i++ ) {
		$editor_picks_ids[] = get_theme_mod( 'world_news_editor_picks_content_post_' . $i );
	}
	$editor_picks_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $editor_picks_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id    = get_theme_mod( 'world_news_editor_picks_content_category' );
	$editor_picks_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}
$editor_picks_args = apply_filters( 'world_news_banner_section_args', $editor_picks_args );

world_news_render_banner_section( $banner_grid_args, $editor_picks_args );

/**
 * Render Banner Section.
 */
function world_news_render_banner_section( $banner_grid_args, $editor_picks_args ) {
	$editor_picks_title = get_theme_mod( 'world_news_editor_picks_title', __( 'Editor\'s Picks', 'world-news' ) );
	?>

	<section id="world_news_banner_section" class="banner-section style-1">
		<?php
		if ( is_customize_preview() ) :
			world_news_section_link( 'world_news_banner_section' );
		endif;
		?>
		<div class="ascendoor-wrapper">
			<div class="banner-section-wrapper">
				<div class="banner-grid-section">
					<?php
					$grid_query = new WP_Query( $banner_grid_args );
					if ( $grid_query->have_posts() ) :
						while ( $grid_query->have_posts() ) :
							$grid_query->the_post();
							?>
							<div class="mag-post-single has-image tile-design">
								<div class="mag-post-img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'post-thumbnail' ); ?>
									</a>
								</div>
								<div class="mag-post-detail">
									<div class="mag-post-category with-background">
										<?php world_news_categories_list( true ); ?>
									</div>
									<h3 class="mag-post-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="mag-post-meta">
										<span class="post-author">
											<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fas fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
										</span>
										<span class="post-date">
											<a href="<?php the_permalink(); ?>"><i class="far fa-clock"></i><?php echo esc_html( get_the_date() ); ?></a>
										</span>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<div class="editor-advedr">
					<div class="banner-editor-picks-section">
						<?php if ( ! empty( $editor_picks_title ) ) { ?>
							<div class="section-header banner-section-header">
								<h3 class="section-title"><?php echo esc_html( $editor_picks_title ); ?></h3>
							</div>
						<?php } ?>
						<div class="editor-picks-wrapper">
							<?php
							$editor_picks_query = new WP_Query( $editor_picks_args );
							if ( $editor_picks_query->have_posts() ) :
								while ( $editor_picks_query->have_posts() ) :
									$editor_picks_query->the_post();
									?>
									<div class="mag-post-single has-image list-design">
										<div class="mag-post-img">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail( 'post-thumbnail' ); ?>
											</a>
										</div>
										<div class="mag-post-detail">
											<div class="mag-post-detail-inner">
												<h3 class="mag-post-title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<div class="mag-post-meta">
													<span class="post-author">
														<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fas fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
													</span>
													<span class="post-date">
														<a href="<?php the_permalink(); ?>"><i class="far fa-clock"></i><?php echo esc_html( get_the_date() ); ?></a>
													</span>
												</div>
											</div>
										</div>
									</div>
									<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>
					</div>
					<div class="banner-adver">
						<?php
						$banner_ads     = get_theme_mod( 'world_news_banner_advertisement_area' );
						$banner_ads_url = get_theme_mod( 'world_news_banner_advertisement_link' );

						if ( ! empty( $banner_ads ) ) {
							?>
							<a href="<?php echo esc_url( $banner_ads_url ); ?>">
								<img src="<?php echo esc_url( $banner_ads ); ?>" alt="<?php esc_attr_e( 'Advertisement Image', 'world-news' ); ?>">
							</a>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
}
