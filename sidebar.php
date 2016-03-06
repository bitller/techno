<?php global $post;
    $categories = get_the_category();
    foreach ($categories as $category) :
?>
<!-- BEGIN Sidebar -->
<div class="sidebar">
    <h4>Alte episoade din acest curs</h4>
    <ul>
        <?php
        $posts = get_posts('numberposts=20&category='. $category->term_id);
        foreach($posts as $post) :?>
            <!-- BEGIN Other episode -->
            <li>
                <div class="episode">
                    <div class="thumb">
                        <?php echo get_the_post_thumbnail($post, [50, 60]) ?>
                    </div>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </li>
            <!-- END Other episode -->
        <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</div>
<!-- END Sidebar -->