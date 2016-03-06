<?php get_header(); ?>

<div class="col-md-12">
    <div class="well well-custom">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>

</div>


<?php get_footer(); ?>
