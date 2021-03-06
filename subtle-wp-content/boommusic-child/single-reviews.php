<?php get_header();?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

				<?php while(have_posts()) : the_post()?>

					<article>
                        
                        <div class="taxonomies">
                            <div class="product-type">
                                <?php echo get_the_term_list( $post->ID, 'product-type', 'Type of product: ', ', ', '' ); ?> 
                            </div>
                            <div class="price-range">
                                <?php echo get_the_term_list( $post->ID, 'price', 'Price Range: ', ', ', '' ); ?> 
                            </div>
                            <div class="mood">
                                <?php echo get_the_term_list( $post->ID, 'mood', 'The mood this puts me in: ', ', ', '' ); ?> 
                            </div>
                        </div>
                        
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author();?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('NO Comment','01 Comment','% Comments','tanmoy-class','Comment Disable');?></div>
						<?php the_content();?>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<?php comments_template();?>
						</div>
					</article>

				<?php endwhile; ?>

				</div>
			</div>
			<div class="col-1-3">
				<?php //  Get HTML from sidebar.php
				get_sidebar();
				?>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>