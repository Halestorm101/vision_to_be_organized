<?php

if (is_admin())
	return;

/**
 * Set up the new content for the extension.
 */
function it_from_blog_extension_render_content() {

	global $post, $wp_query;

	// Args
	$args = array(
	    'ignore_sticky_posts' => true,
	    'posts_per_page' => 6
	);

	$args = wp_parse_args($args, $wp_query->query);

	query_posts($args);

	if (have_posts()) : ?>

		<div class="loop">
			<div class="loop-content">
				<?php while (have_posts()) : // the loop ?>

					<?php the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class('it-from-blog-extension'); ?>>

						<?php if (has_post_thumbnail()) : ?>
							<div class="it-featured-image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('index_thumbnail', array('class' => 'index-thumbnail')); ?>
								</a>
							</div>
						<?php endif; ?>

						<div class="entry-header clearfix">

							<h3 class="entry-title clearfix">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

						</div>

					</div>

				<?php endwhile; ?>
			</div>

			<div class="loop-footer">
				<div class="loop-utility clearfix">
					<div class="alignleft"><?php previous_posts_link(__('&larr; Previous Page', 'it-l10n-Builder-Parker')); ?></div>
					<div class="alignright"><?php next_posts_link(__('Next Page &rarr;', 'it-l10n-Builder-Parker')); ?></div>
				</div>
			</div>
		</div>

	<?php else : ?>

		<?php do_action('builder_template_show_not_found'); ?>

	<?php endif; ?>

	<?php
}

// Calling only if not on a singular
if (!is_singular()) {

	function it_from_blog_extension_change_render_content() {
		remove_action('builder_layout_engine_render_content', 'render_content');
		add_action('builder_layout_engine_render_content', 'it_from_blog_extension_render_content');
	}

	add_action('builder_layout_engine_render', 'it_from_blog_extension_change_render_content', 0);
}