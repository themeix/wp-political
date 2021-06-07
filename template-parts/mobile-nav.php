<header class="header-area header-4 mobile-nav">

    <div class="header-bottombar">
        <div class="container">

            <nav class="mobile-header-navbar navbar navbar-expand-lg">
                <?php get_template_part('template-parts/custom-logo'); ?>

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="mobile-navbar-mean ms-auto">
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
                    <?php if (function_exists('WC')) : ?>
                        <li class="nav-item"> <a class="nav-link cart-bar" href="<?php echo wc_get_cart_url(); ?>"><i class="im im-shopping-cart"></i><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
                    <?php endif; ?>

                    <li class="nav-item"> <a class="nav-link search-bar" data-bs-toggle="modal" data-bs-target="#searchmodal" href="#"><i class="im im-magnifier"></i></a></li>
                </ul>

                <?php get_template_part('template-parts/modal-search'); ?>

            </nav>

        </div>
    </div>
</header>