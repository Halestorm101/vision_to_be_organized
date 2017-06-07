<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

	</div>

	<!-- post content -->
	<div class="entry-content clearfix">
		<?php the_content( __( 'Read More&rarr;', 'it-l10n-Builder-Parker' ) ); ?>
	</div>

	<!-- categories, tags and comments -->
	<div class="entry-footer clearfix">
		<div class="entry-meta alignleft">
			<?php wp_link_pages( array( 'before' => '<div class="entry-utility entry-pages">' . __( 'Pages:', 'it-l10n-Builder-Parker' ) . '', 'after' => '</div>', 'next_or_number' => 'number' ) ); ?>
			<div class="categories"><?php printf( __( 'Categories : %s', 'it-l10n-Builder-Parker' ), get_the_category_list( ', ' ) ); ?></div>
			<?php the_tags( '<div class="tags">' . __( 'Tags : ', 'it-l10n-Builder-Parker' ), ', ', '</div>' ); ?>
		</div>
		<?php edit_post_link( __( 'Edit', 'it-l10n-Builder-Parker' ), '<div class="entry-utility edit-entry-link">', '</div>' ); ?>
	</div>
</div>