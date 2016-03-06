<!-- BEGIN Number of comments -->
<div class="number-of-comments">
    <h3><?php echo comments_number(); ?></h3>
</div>
<!-- END Number of comments -->

<div class="divider"></div>

<?php if(have_comments()): foreach(get_comments() as $comment): ?>

    <div class="comment">
        <div class="avatar">
            <?php echo get_avatar($comment); ?>
        </div>
        <div class="comment-details">
            <div class="author-and-date">
                <div class="author">
                    <strong><?php echo $comment->comment_author; ?></strong>
                </div>
                <div class="date pull-right">
                    <?php echo $comment->comment_date; ?>
                </div>
            </div>
            <div class="text">
                <?php echo $comment->comment_content; ?>
            </div>
        </div>
    </div>

    <div class="divider"></div>

<?php endforeach; endif; ?>