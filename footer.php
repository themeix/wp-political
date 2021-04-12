<?php 
    if(class_exists('kirki')):
        get_template_part( 'template-parts/footers/footer-'.get_theme_mod('footer_design_settings', '1'));
    else:
        get_template_part( 'template-parts/footers/footer-1');
    endif;
?>


<?php wp_footer(); ?>
</body>

</html>