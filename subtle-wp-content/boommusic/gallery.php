<?php
/*
Template Name: Gallery Page
*/
get_header(); ?>


<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">

		<?php query_posts( array(
				'post_type' => 'zoom-gallery'
		) );?>
		<?php while(have_posts()): the_post();?>
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					</article>
				</div>
			</div>
		<?php endwhile; ?>
		</div>


	</div>
</section>
<?php get_footer();?>