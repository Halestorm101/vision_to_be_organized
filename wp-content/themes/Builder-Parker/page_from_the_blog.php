<?php

/*
Template Name: From the Blog
*/

function render_content() {

// Args
$args = array(
	'ignore_sticky_posts' => true,
	'posts_per_page'      => 6
);

// The Query
$the_query = new WP_Query( $args );


if ( $the_query->have_posts() ) : ?>

	<h2 class="it-from-blog-title"><?php _e('From the Blog', 'it-l10n-Builder-Parker'); ?></h2>

	<div class="loop">
		<div class="loop-content">
			<?php while ( $the_query->have_posts() ) : ?>

				<?php $the_query->the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('it-from-blog'); ?>>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="it-featured-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'index_thumbnail', array( 'class' => 'index-thumbnail' ) ); ?>
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

	</div>

	<?php else : ?>

		<?php do_action( 'builder_template_show_not_found' ); ?>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>

	<?php

}

add_action( 'builder_layout_engine_render_content', 'render_content' );

do_action( 'builder_layout_engine_render', basename( __FILE__ ) );