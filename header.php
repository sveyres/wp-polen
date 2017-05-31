<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polen</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap.min.css';?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap-theme.min.css';?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/font-awesome/css/font-awesome.min.css'; ?>">
        <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" >
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <?php require_once('wp-bootstrap-navwalker.php'); ?>
            <nav class="navbar_top">
                <div class="container navbar">
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'navbar_top',
                        'theme_location'    => '',
                        'depth'             => 2,
                        'container'         => 'div',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                    ?>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/static/img/lozere_nouvelle_vie.png';?>" alt="">
            </nav>
            <div class="container">
                <div class="rowone">
                    <?php echo do_shortcode("[metaslider id=84]");?>
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                <a class="navbar-brand" href="#"><img src="./static/img/brand-white.png" alt=""></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <?php
                            $args = array (
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'menu' => 'navbar_header',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker());

                                wp_nav_menu($args)
                            ?>
                        </div>
                    </nav>
                </div>
            </div>


        </header>
