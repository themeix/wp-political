<?php if (has_custom_logo()) :
    $logo = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($logo, 'full');
    ?>
    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($image[0]); ?>" alt="<?php bloginfo('name'); ?>"></a>
<?php endif; ?>
<?php if (!empty(get_bloginfo('name')) && display_header_text()) : ?>
    <div class="site-identity">
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <p class="site-description"><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
    </div>
<?php endif; ?>