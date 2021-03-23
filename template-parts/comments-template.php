<?php // If comments are open or we have at least one comment, load up the comment template.
if (comments_open() && get_comments_number()) {
    comments_template();
} else if (!comments_open() && get_comments_number()) {
    comments_template();
    ?>
    <p class="comments-closed"> <?php esc_html_e('Comments are closed', 'political'); ?> </p>
<?php
} else if (comments_open() && !get_comments_number()) {
    comments_template();
} else {
    echo '';
}

?>