<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="main">
		<article>
			<?php while(have_posts()) : the_post(); ?>	

				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>

			<?php endwhile; ?>
		</article>
	</div>

<?php get_footer(); ?>
