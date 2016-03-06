<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="col-md-8">
        <div class="post-container">
            <h3><?php the_title(); ?></h3>
            <div class="post-meta">
                <?php the_meta(); ?>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="comments-container">
            <?php comments_template(); ?>
        </div>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-3 sidebar-container">
        <?php get_sidebar(); ?>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
