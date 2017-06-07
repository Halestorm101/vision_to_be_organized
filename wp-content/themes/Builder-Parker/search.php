<?php

function render_content() {
	$show_paging = false;

?>
	<div class="loop">
		<div class="loop-header">
			<h4 class="loop-title">
				<?php
					$title = sprintf( __( 'Search Results for "<em>%s</em>"', 'it-l10n-Builder-Parker' ), get_search_query() );

					if ( is_paged() )
						printf( __( '%s &ndash; Page %d', 'it-l10n-Builder-Parker' ), $title, get_query_var( 'paged' ) );
					else
						echo $title;
				?>
			</h4>
		</div>

		<div class="loop-content">
			<?php if ( have_posts() ) : ?>
				<?php $show_paging = true; ?>
				<?php while ( have_posts() ) : // The Loop ?>
					<?php the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- title, meta, and date info -->
						<div class="entry-header clearfix">

							<h3 class="entry-title clearfix">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<?php // Do not print author, comments, or date information for pages ?>
							<?php if ( 'page' !== $GLOBALS['post']->post_type ) : ?>

							<div class="entry-meta-wrapper clearfix">
								<!-- meta, and date info -->
								<div class="entry-meta">
									<?php printf( __( 'Posted by %s on', 'it-l10n-Builder-Parker' ), '<span class="author">' . builder_get_author_link() . '</span>' ); ?>
								</div>

								<div class="entry-meta date">
									<a href="<?php the_permalink(); ?>">
										<span>&nbsp;<?php echo get_the_date(); ?></span>
									</a>
								</div>

								<div class="entry-meta">
									<?php do_action( 'builder_comments_popup_link', '<span class="comments">&nbsp; &middot; ', '</span>', __( '%s', 'it-l10n-Builder-Parker' ), __( 'No Comments', 'it-l10n-Builder-Parker' ), __( '1 Comment', 'it-l10n-Builder-Parker' ), __( '% Comments', 'it-l10n-Builder-Parker' ) ); ?>
								</div>
							</div>

							<?php endif; ?>
						</div>

						<!-- post content -->
						<div class="entry-content clearfix">
							<?php the_excerpt(); ?>
						</div>

						<?php // Do not print category, tag, or comment information for pages ?>
						<?php if ( 'page' !== $GLOBALS['post']->post_type ) : ?>

						<div class="entry-footer clearfix">
							<div class="entry-meta alignleft">
								<?php wp_link_pages( array( 'before' => '<div class="entry-utility entry-pages">' . __( 'Pages:', 'it-l10n-Builder-Parker' ) . '', 'after' => '</div>', 'next_or_number' => 'number' ) ); ?>
								<div class="categories"><?php printf( __( 'Categories : %s', 'it-l10n-Builder-Parker' ), get_the_category_list( ', ' ) ); ?></div>
								<?php the_tags( '<div class="tags">' . __( 'Tags : ', 'it-l10n-Builder-Parker' ), ', ', '</div>' ); ?>
							</div>
							<?php edit_post_link( __( 'Edit', 'it-l10n-Builder-Parker' ), '<div class="entry-utility edit-entry-link">', '</div>' ); ?>
						</div>

						<?php endif; ?>
					</div>
					<!-- end .post -->

					<?php comments_template(); // include comments template ?>
				<?php endwhile; // end of one post ?>
			<?php else : // do not delete ?>
				<div class="hentry">
					<div class="entry-content">
						<p><?php _e( 'No results found.', 'it-l10n-Builder-Parker' ); ?></p>

						<?php get_search_form(); ?>
					</div>
				</div>
			<?php endif; // do not delete ?>
		</div>

		<?php if ( $show_paging ) : ?>
			<div class="loop-footer">
				<!-- Previous/Next page navigation -->
				<div class="loop-utility clearfix">
					<div class="alignleft"><?php previous_posts_link( __( '&larr; Previous Page', 'it-l10n-Builder-Parker' ) ); ?></div>
					<div class="alignright"><?php next_posts_link( __( 'Next Page &rarr;', 'it-l10n-Builder-Parker' ) ); ?></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php

}

add_action( 'builder_layout_engine_render_content', 'render_content' );

do_action( 'builder_layout_engine_render', basename( __FILE__ ) );


?>
