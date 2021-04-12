<header class="header-area header-3">
    <nav class="header-topbar">
        <div class="container">
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <i class="im im-location"></i>Texas, USA
                </li>
            </ul>
            <ul class="list-inline m-0">
                <li class="list-inline-item">
                    <a href="#"><i class="im im-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><i class="im im-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><i class="im im-youtube"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><i class="im im-pinterest"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-bottombar">
        <div class="container">

            <nav class="header-navbar navbar navbar-expand-lg">

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <nav class="navbar-mean">
                        <ul class="navbar-nav">
                            <li class="left-item">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'header_3_left_menu',
                                    'container'         => '',
                                    'menu_class'        => 'navbar-nav',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                            </li>
                            <li class="middle-item">
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
                            </li>
                            <li class="right-item">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'header_3_right_menu',
                                    'container'         => '',
                                    'menu_class'        => 'navbar-nav',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ));
                                ?>
                            </li>
                        </ul>
                    </nav>
                    <?php get_template_part('template-parts/modal-search'); ?>
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