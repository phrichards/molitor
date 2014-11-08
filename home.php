<!-- This is the blog front page -->

<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header('home'); ?>

<div class="main">
    <div class="content blogFront">
    	<div class="container blogFront">
			<?php get_template_part( 'loop', 'index' );	?>
		</div> <!-- /.container -->
	</div> <!--/.content -->
</div> <!-- /.main -->

<?php get_footer(); ?>