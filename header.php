<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <!-- BEGIN Fluid container -->
    <div class="container-fluid">

        <!-- BEGIN Header -->
        <header class="site-header">

            <div class="navbar navbar-default navbar-fixed-top <?php if(is_user_logged_in()):?>margin-top<?php endif?>" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <div class="navbar-collapse collapse pull-right navigation-bar">
                        <?php
                        wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>

        </header>
        <!-- END Header -->

    </div>
    <!-- END Fluid container -->

    <div class="sub-header">
        <div class="container">
            <h3>Școala dedicată tehnologiei!</h3>
        </div>
    </div>

    <!-- BEGIN Container -->
    <div class="container margin-top">