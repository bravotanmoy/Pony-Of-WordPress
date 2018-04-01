<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">

		<h1><?php the_title();?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>

		<?php $prefix = "_fifteen";?>

		<h2><?php echo get_post_meta(get_the_ID(), $prefix.'bravo-opinion', true);?></h2>
		<h3><?php echo get_post_meta(get_the_ID(), $prefix.'bravo-opinion2', true);?></h3>
		<h3><?php echo get_post_meta(get_the_ID(), $prefix.'your-email', true);?></h3>
		<!-- Text Editor -->
		<h3><?php echo get_post_meta(get_the_ID(), $prefix.'your-wysiwyg', true);?></h3>
		<img src="<?php echo get_post_meta(get_the_ID(), $prefix.'your-uploded-file ', true);?>" alt="Image Name">
	</div><!-- .entry-content -->

  <h3>This is testing text</h3>

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
