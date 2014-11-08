<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container clearfix">
            <h1>
                <a href="<?php echo home_url( '/' ); ?>" rel="home">
                    <img src="wp-content/themes/molitor/img/phrichards-small.png" alt="">
            </a>
            </h1>

        </div> <!-- /.container -->
        <nav>
            <a href="http://phrichards.ca"><img src="<?php echo get_template_directory_uri() . '/img/phlettermark-small.png'?>" alt="" class="lettermark"></a>
            <?php wp_nav_menu( array(
            'container' => false,
            'menu' => 'header'
            )); ?>
        </nav>
    </header><!--/.header-->

