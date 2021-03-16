<header class="header-area header-4">

    <div class="header-bottombar">
        <div class="container">

            <nav class="header-navbar navbar navbar-expand-lg">
                <?php if (has_custom_logo()) : ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php the_custom_logo(); ?></a>
                <?php endif; ?>

                <?php if (!empty(get_bloginfo('name')) && display_header_text()) : ?>
                    <div class="site-identity">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <p class="site-description"><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
                    </div>
                <?php endif; ?>

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <nav class="navbar-mean ms-auto">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container'         => 'div',
                            'menu_class'        => 'navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </nav>
                    <?php get_template_part( 'template-parts/modal-search' ); ?>
                </div>

            </nav>

        </div>
    </div>
</header>