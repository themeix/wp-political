<footer class="footer-area position-relative bg-primary footer-4">
    <div class="footer-top py-5">
        <div class="container">
            <div class="row political-sidebar">
                <?php if (is_active_sidebar('footer3')) : ?>
                    <?php dynamic_sidebar('footer3'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class='footer-flag'></div>
    <div class="footer-bottom py-2">
        <div class="container">
            <?php if (get_theme_mod('footer_copyright_text')) : ?>
                <p class="footer-copyright  m-0 text-light">
                    <?php echo wp_kses_post(get_theme_mod('footer_copyright_text')); ?>
                </p>
            <?php else : ?>
                <p class="footer-copyright  m-0 text-light">
                    <?php political_copyright(); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    <?php if (get_theme_mod('back_to_top_settings', '1')) : ?>
        <a href="#" class="footer-back"><i class="im im-angle-up"></i></a>
    <?php endif; ?>
</footer>