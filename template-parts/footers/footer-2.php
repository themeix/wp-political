<!-- ==================== Footer Area ========================= -->

<footer class="footer-area position-relative bg-primary footer-2">
    <div class="footer-top py-5 pb-3">
        <div class="container">
            <div class="row political-sidebar">
                <?php if (is_active_sidebar('footer2')) : ?>
                    <?php dynamic_sidebar('footer2'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container pb-3">
        <div class="footer-bottom bg-white p-2">
            <?php if (get_theme_mod('footer_copyright_text')) : ?>
                <p class="footer-copyright m-0 ">
                    <?php echo wp_kses_post(get_theme_mod('footer_copyright_text')); ?>
                </p>
            <?php else : ?>
                <p class="footer-copyright m-0 ">
                    <?php political_copyright(); ?>
                </p>
           <?php endif; ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_links',
                'menu_class'        => 'footer-bottom-nav small-text list-inline m-0',
            ));
            ?>
        </div>
    </div>
    <?php if (get_theme_mod('back_to_top_settings', '1')) : ?>
        <a href="#" class="footer-back"><i class="im im-angle-up"></i></a>
    <?php endif; ?>
</footer>