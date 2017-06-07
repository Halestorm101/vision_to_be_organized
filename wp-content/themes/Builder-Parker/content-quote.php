<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrapper">
		<!-- post content -->
		<div class="entry-content clearfix">
			<?php the_content(); ?>
		</div>
	</div>

	<div class="entry-footer clearfix">
		<?php edit_post_link( __( 'Edit this entry.', 'it-l10n-Builder-Parker' ), '<div class="entry-utility edit-entry-link">', '</div>' ); ?>
	</div>


</div>
<!-- end .post -->