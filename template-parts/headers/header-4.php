<header class="header-area header-4">

    <div class="header-bottombar">
        <div class="container">

            <nav class="header-navbar navbar navbar-expand-lg">
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

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="navbar-mean ms-auto">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container'         => 'div',
                            'menu_class'        => 'navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </div>

                <ul class="navbar-nav nav-search-cart">
                    <li class="nav-item"> <a class="nav-link cart-bar" href="<?php echo wc_get_cart_url(); ?>"><i class="im im-shopping-cart"></i><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
                    <li class="nav-item"> <a class="nav-link search-bar" data-bs-toggle="modal" data-bs-target="#searchmodal" href="#"><i class="im im-magnifier"></i></a></li>
                </ul>

                <?php get_template_part('template-parts/modal-search'); ?>

            </nav>

        </div>
    </div>
</header>