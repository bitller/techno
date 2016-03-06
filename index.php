<?php

get_header();

if (have_posts()):
    ?>
    <div class="row posts">
    <?php
    while(have_posts()) : the_post(); ?>

        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">

            <!-- BEGIN Article well -->
            <article class="well-custom">

                <!-- BEGIN Post image -->
                <div class="post-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail([320,320]);
                        }?>
                    </a>
                </div>
                <!-- END Post image -->

                <!-- BEGIN Date and category -->
                <div class="date-and-category">

                    <div class="content">
                        <!-- BEGIN Post date -->
                        <div class="date pull-left">
                            <span class="glyphicon glyphicon-time"></span>
                            <?php the_date('d-m-Y') ?>
                        </div>
                        <!-- END Post date -->

                        <!-- BEGIN Post category -->
                        <div class="category pull-right">
                            <span class="glyphicon glyphicon-tag"></span>
                            <?php $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                            } ?>
                        </div>
                        <!-- END Post category -->
                    </div>

                </div>
                <!-- END Date and category -->

                <div class="post-content">

                    <!-- BEGIN Article title -->
                    <div class="title">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </div>
                    <!-- END Article title -->

                    <!-- BEGIN Article content -->
                    <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- END Article content -->

                </div>

            </article>
        </div>

    <?php endwhile ?>
    </div>

<?php else:
    echo '<p>No content found</p>';
endif;

get_footer();

?>
