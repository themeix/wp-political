<!-- ==================== Footer Area ========================= -->
<footer class="footer-area position-relative bg-primary">
  <div class="footer-top pt-5 pb-4">
    <div class="container">
      <div class="row">
        <?php if (is_active_sidebar('footer1')) : ?>
          <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="footer-bottom py-2">

      <?php if (get_theme_mod('footer_copyright_text')) : ?>
        <p class="footer-copywright  m-0 text-light">
          <?php echo wp_kses_post(get_theme_mod('footer_copyright_text')); ?>
        </p>
      <?php else :
        political_copyright();
      endif; ?>
      </p>
      <ul class="footer-bottom-nav  small-text list-inline m-0">
        <li class="list-inline-item"><a href="privacy-policy.html"> Privacy Policy</a></li>
        <li class="list-inline-item"><a href="terms-conditions.html"> Terms & Conditions</a></li>
      </ul>
    </div>
  </div>

  <?php if (get_theme_mod('back_to_top_settings', '1')) : ?>
    <a href="#" class="footer-back"><i class="im im-angle-up"></i></a>
  <?php endif; ?>

</footer>