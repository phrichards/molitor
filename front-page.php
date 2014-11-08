<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<div class="main">
  
	<div class="content content-front clearfix">

		<div class="portfolio-front clearfix">
    		<h2>Recent Work</h2>
			<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => 3,
					'post_type' => 'portfolio',
					'order' => 'ASC'
					)
			); ?>

			<?php if ( $onePageQuery->have_posts() ) : ?>

				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

					<div class="featured">
						<section id="<?php echo $post->post_name; ?>">
							<?php the_content(); ?>
							<div class="images">
								<?php while( has_sub_field('images') ): ?>
									<div class="image">
										<p><?php the_sub_field('caption'); ?></p>
										<?php $image = get_sub_field('image'); ?>
										<img src="<?php echo $image['sizes']['large'] ?>">
									</div>
								<?php endwhile; ?>
							</div><!-- /.images -->
							<h3><a href=<?php the_field('live-url'); ?> class="featuredLink"><?php the_title(); ?></a></h3>
						
							<div class="description">
								<?php the_field('short_description') ?>
							</div><!-- /.description -->
							<div class="terms">
								<?php the_terms( $post->ID, 'technologies', 'This site uses ', ', '); ?>
							</div><!-- /.terms -->
						</section>
					</div> <!-- /.featured -->
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>
			<button><a href="<?php echo get_template_directory_uri() . '/portfolio-2' ?>" class="front-button">See More</a></button>
		</div><!-- /.portfolio-front -->

		<div class="about">
			<div class="container clearfix">
				<h2>About Me</h2>
				<h5>Librarian turned front-end web developer</h5>

				<p>I graduated from the University of Toronto in 2010 with a Master of Information Studies, specializing in librarianship. I became a librarian to pursue my passion for helping people find information and answer questions, but after working for some time I wanted a chance to combine this love of finding and presenting information with a chance to be more creative. With a job ending and a HackerYou cohort beginning, it seemed like a chance to pursue another longtime passion, coding.</p>

				<p>I had a fantastic time at HackerYou, and developed strong knowledge of HTML, CSS, Sass, jQuery, and Git, along with a love of Javascript and APIs. Now that my time at HackerYou is over, I'd like to continue coding at a small agency or company where I can both teach and learn from other developers. If you have an opening on your team, please check out my resume and <a href="#footer">get in touch</a>.</p>

			</div><!-- /.container -->
		</div><!-- /.about -->
	</div> <!--/.content -->

 
</div> <!-- /.main -->

<?php get_footer(); ?>