<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header clearfix">

	<h1 class="entry-title">
		<?php the_title(); ?>
	</h1>

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
		<?php the_content( __( 'Read More &rarr;', 'it-l10n-Builder-Parker' ) ); ?>
	</div>

	<div class="entry-footer clearfix">
		<?php edit_post_link( __( 'Edit this entry.', 'it-l10n-Builder-Parker' ), '<div class="entry-utility edit-entry-link">', '</div>' ); ?>
	</div>

</div>
<!-- end .post -->