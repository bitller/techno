<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- BEGIN Head -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<!-- END Head -->

<!-- BEGIN Body -->
<body <?php body_class(); ?>>

    <!-- BEGIN Fluid container -->
    <div class="container-fluid">

        <!-- BEGIN Header -->
        <header class="site-header">

            <!-- BEGIN Navigation bar -->
            <div class="navbar navbar-default navbar-fixed-top <?php if(is_user_logged_in()):?>margin-top<?php endif?>" role="navigation">

                <!-- BEGIN Navigation bar content -->
                <div class="container">

                    <!-- BEGIN Theme title -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <!-- END Theme title -->

                    <!-- BEGIN Navigation menu -->
                    <div class="navbar-collapse collapse pull-right navigation-bar">
                        <?php wp_nav_menu([
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                        ]); ?>
                    </div>
                    <!-- END Navigation menu -->

                </div>
                <!-- END Navigation bar content -->

            </div>
            <!-- END Navigation bar -->

        </header>
        <!-- END Header -->

    </div>
    <!-- END Fluid container -->

    <!-- BEGIN Sub header -->
    <div class="sub-header">
        <div class="container">
            <h3>Școala dedicată tehnologiei!</h3>
        </div>
    </div>
    <!-- END Sub header -->

    <!-- BEGIN Container -->
    <div class="container margin-top">