<?php
if (!post_password_required()) { ?>
    <ul class="list-inline">
        <?php
            wp_list_comments(array(
                'avatar_size'    => 60,
                'style'            => 'ul',
                'callback'        => 'political_comments',
                'type'            => 'all'
            ));

            ?>
    </ul>
<?php
}
?>
<div class="comment-pagination <?php if (empty(get_comments_number())) {
                                    echo 'minus-comment-spacing';
                                } ?>">
    <?php
    paginate_comments_links(array(
        'prev_text' => esc_html__('<', 'political'),
        'next_text' => esc_html__('>', 'political'),
        'mid_size'  => 3
    ));
    ?>
</div>
<?php
$comments_args = array(
    // Change the title of send button 
    'label_submit' => esc_html__('Add Comment', 'political'),
    // Change the title of the reply section
    'title_reply' => esc_html__('Leave a Comment', 'political'),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    // Redefine your own textarea (the comment body).
    'fields' => array(
        'author' => '<div class="form-group mb-1"><input type="text" name="author" class="form-control" id="1" placeholder="' . esc_attr__('Your Name*', 'political') . '" required> </div>',
        'email' => '<div class="form-group mb-1"><input type="email" name="email" class="form-control" id="1" placeholder="' . esc_attr__('Your Email*', 'political') . '" required> </div>',
    ),
    'comment_field' => '<div class="form-group mb-1"><textarea class="form-control" name="comment" rows="6" placeholder="' . esc_attr__('Your Feedback', 'political') . '" required></textarea> </div>',
    'id_form'           => 'entry-form-id',
    'class_form'      => 'entry-form',
    'id_submit'         => 'submit',
    'class_submit'   => 'btn btn-danger',
    'title_reply_to'    => esc_html__('Leave a Reply to ', 'political') . '%s',
    'cancel_reply_link' => esc_html__('Cancel Reply', 'political'),
    'format'            => 'xhtml',
);
comment_form($comments_args);
?>