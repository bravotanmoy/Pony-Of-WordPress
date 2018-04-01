<?php get_header();?>

<!-- Content -->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">


					<?php while(have_posts()) : the_post();?>

						<article>
							<?php the_post_thumbnail();?>
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<div class="info">[By <?php the_author();?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('NO Comment','01 Comment','% Comments','tanmoy-class','Comment Disable');?></div>

							<?php /*the_content();*/?>
							<?php read_more(30); //the_content() for Excerpt?>...<a href="<?php the_permalink();?>">Read More</a>
						</article>

					<?php endwhile; ?>

					<ul id="pagi">
						<?php
							/*  'the_posts_pagination'  is for Page Pagination buttons
							*   
							*   'the_post_navigation'  is for Page Navigation buttons
							*/
							the_posts_pagination(array(
								'prev_text' => 'PREV',
								'next_text' => 'NEXT',
								'screen_reader_text' => ' ',
								'before_page_number' => '<b>',
								'after_page_number' => '</b>',
							));
						?>
					</ul>

					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
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