<?php
/**
 * Template Name: Protfolio
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

				<div class="entry-content">
						<?php

							$portfolio = new WP_Query( array(
								'post_type' => 'protfolios',
								//'posts_per_page' => 3  
							));

						?>	
						<?php while($portfolio->have_posts()) : $portfolio->the_post();?>

							<h3><?php the_title(); ?></h3>
							<?php the_post_thumbnail(array('class' => 'tanmoyimage')); ?>

						<p><?php 
							//the_content(); 

							$readmore = '<p><a href="'.get_permalink().'">Read More</a></p>';
							echo wp_trim_words(get_the_content(), 32, $readmore);
						?></p>

						<p>
							<?php 
								$topic = get_the_terms(get_the_ID(), 'protfolio-topic');
								foreach($topic as $topics){
									$portfoliotopic = $topics->name;
									$link = get_term_link($topics, 'protfolio-topic');


									echo '<a href="'.$link.'">'.$portfoliotopic.'</a>  ';

								}

							?>
						</p>


						<p>
						Keywords:
						<?php
							 $keyword = get_the_terms(get_the_ID(), 'protfolio-keywords');

							 foreach($keyword as $keywords){
							 		$keywordurl = get_term_link($keywords, 'protfolio-keywords');

							 		$keywordname = $keywords->name;

							 		echo '<a href="'.$keywordurl.'">'.$keywordname.'</a> ';

							 }


						?>
						</p>


						<?php endwhile; ?>
				</div><!-- .entry-content -->


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
