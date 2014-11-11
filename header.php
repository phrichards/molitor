<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="wp-content/themes/molitor/img/favicons/favicon.ico" type="image/x-icon" />
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="wp-content/themes/molitor/img/favicons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="wp-content/themes/molitor/img/favicons/apple-touch-icon-152x152.png" />
    <!-- Windows 8 Tile Icons -->
        <meta name="msapplication-square70x70logo" content="smalltile.png" />
    <meta name="msapplication-square150x150logo" content="mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="widetile.png" />
    <meta name="msapplication-square310x310logo" content="largetile.png" />


    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container clearfix">
            <h1>
                <a href="<?php echo home_url( '/' ); ?>" rel="home">
                    <img src="wp-content/themes/molitor/img/phrichards-big.png" alt="" class="header-logo">
            </a>
            </h1>

        </div> <!-- /.container -->
        <nav id="nav">
            <a href="http://phrichards.ca"><img src="<?php echo get_template_directory_uri() . '/img/phlettermark-small.png'?>" alt="" class="lettermark"></a>
            <?php wp_nav_menu( array(
            'container' => false,
            'menu' => 'header'
            )); ?>
        </nav>
    </header><!--/.header-->

