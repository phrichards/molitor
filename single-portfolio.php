<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full  singlePortfolio">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 
		<h2><?php the_title(); ?></h2>
		<p class="client"><?php the_field('client_name'); ?></p> 

		<div class="shortDesc">
		  <?php the_field('short_description'); ?>
		</div>

		<?php the_content(); ?>

		<div class="images">
		  <?php while( has_sub_field('images') ): ?>
		    <div class="image">
		      <p><?php the_sub_field('caption'); ?></p>
		      <?php $image = get_sub_field('image'); ?>
		      <img src="<?php echo $image['sizes']['large'] ?>">
		    </div>
		  <?php endwhile; ?>
		</div>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>