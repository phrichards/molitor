<!-- this is broken -->

<?php get_header('home'); ?>

<div class="main">
  <div class="content technology-term">
    <div class="container">

      <?php if ( have_posts() ) the_post(); ?>

      <h1>
        <?php if ( is_day() ) : ?>
          Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          Monthly Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          Yearly Archives: <?php the_date('Y'); ?>
        <?php else : ?>
          Javascript
        <?php endif; ?>
      </h1>

      <?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();
      ?>

    <!-- 	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */ -->
      
      <div class="technology-page">
      <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'portfolio',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                  'taxonomy' => 'technologies',
                  'terms' => 'javascript',
                ),
            ),
          );
        $onePageQuery = new WP_Query($args); // close wp query 
      ?> 

      <?php if ( $onePageQuery->have_posts() ) : ?>

        <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
          
          
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

      <?php endif; ?>
      

    </div><!--/technology-page-->

    

  </div> <!-- /.content -->
</div> <!-- /.main -->

<?php get_footer(); ?>