<?php
/*
Template Name: News
*/
get_header(); ?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="one_half">
					<?php query_posts( array(    // One types of post query
							'post_type' => 'post',
							'posts_per_page' => 6,
							'category_name' => 'national'
					) );?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_title();"<br>" ?>
					<?php endwhile; ?>

				</div>

			<div class="one_half">
				<?php $international = new WP_Query( array(  // One types of post query
						'post_type' => 'post',
						'posts_per_page' => 8,
						'category_name' => 'international'
				) );?>
				<?php while ( $international->have_posts() ) : $international->the_post(); ?>
					<?php the_title(); ?>
				<?php endwhile; ?>
			</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>