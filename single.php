<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <!-- BEGIN Column -->
    <div class="col-md-8">

        <!-- BEGIN Post container -->
        <div class="post-container">

            <!-- BEGIN Post title -->
            <h3><?php the_title(); ?></h3>
            <!-- END Post title -->

            <!-- BEGIN Post meta -->
            <div class="post-meta">
                <?php the_meta(); ?>
            </div>
            <!-- END Post meta -->

            <!-- BEGIN Post content -->
            <div class="content">
                <?php the_content(); ?>
            </div>
            <!-- END Post content -->

        </div>
        <!-- END Post container -->

        <!-- BEGIN Post comments container -->
        <div class="comments-container">
            <?php comments_template(); ?>
        </div>
        <!-- END Post comments container -->

    </div>
    <!-- END Column -->

    <!-- BEGIN Between column -->
    <div class="col-md-1"></div>
    <!-- END Between column -->

    <!-- BEGIN Sidebar column -->
    <div class="col-md-3 sidebar-container">
        <?php get_sidebar(); ?>
    </div>
    <!-- END Sidebar column -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
