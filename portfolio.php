<?php 
/* 
Template Name: Portfolio
*/
 ?>

<?php get_header('home');  ?>

<div class="main">
  
    <div class="content">
      <div class="portfolio-full clearfix">
        <!-- <div class="container"> -->
          <h2>My Sites</h2>
            <?php
            $onePageQuery = new WP_Query(
              array(
                'posts_per_page' => -1,
                'post_type' => 'portfolio',
                'order' => 'ASC'
                )
            ); ?>

            <?php if ( $onePageQuery->have_posts() ) : ?>

            <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

              <div class="portfolio-item">
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
                  <h3 class="portfolio-item-title"><a href=<?php the_field('live-url'); ?> class="portfolio-link"><?php the_title(); ?></a></h3>
                
                  <div class="portfolio-description">
                    <?php the_field('short_description') ?>
                  </div><!-- /.portfolio-description -->
                  <div class="portfolio-terms">
                    <?php the_terms( $post->ID, 'technologies', 'This site uses ', ', '); ?>
                  </div><!-- /.portfolio-terms -->
                </section>
              </div> <!-- /.portfolio-item -->
            <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>
      <!-- </div> --><!-- /.container -->
    </div><!-- /.portfolio-front -->


</div> <!-- /.main -->

<?php get_footer(); ?>