<!-- ==================== Footer Area ========================= -->
<footer class="footer-area position-relative bg-primary">
  <div class="footer-top pt-5 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-widget text-light ">
            <a href="index1.html" class="footer-brand mb-2"><img src="assets/image/footer-brand.png" alt="image"></a>

            <ul class="contact-nav mt-2 list-inline">
              <li><i class="im im-location"></i>4732 Elk Creek Road, GA, <br />30085, USA</li>
              <li><i class="im im-phone"></i>666 777 888</li>
              <li><i class="im im-mail"></i>support@themeix.com</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 offset-md-1">
          <div class="footer-widget text-light ">
            <h5 class="mb-2">Useful Links</h5>
            <ul class="footer-nav list-inline">
              <li><a href="volenteer.html">Volenteers</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-widget text-light  m-0">
            <h5 class="mb-2">Subscribe Now</h5>
            <p>The continued my minutes arm used one walls anyone into cities so, called vows</p>
            <form class="footer-newsletter mt-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email">
                <div class="input-group-append d-flex">
                  <button type="submit" class="input-group-text"><i class="im im-paperplane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="footer-bottom py-2">
      <p class="footer-copywright  m-0 text-light">&copy; <script>
          document.write(new Date().getFullYear())
        </script> Political - HTML5 Template <i class="im im-heart"></i> Developed by <a href="https://themeix.com">Themeix</a></p>
      <ul class="footer-bottom-nav  small-text list-inline m-0">
        <li class="list-inline-item"><a href="privacy-policy.html"> Privacy Policy</a></li>
        <li class="list-inline-item"><a href="terms-conditions.html"> Terms & Conditions</a></li>
      </ul>
    </div>
  </div>
  <?php if (class_exists('kirki')) : ?>
    <?php if(get_theme_mod( 'back_to_top' , '1')): ?>
    <a href="#" class="footer-back"><i class="im im-angle-up"></i></a>
    <?php endif; ?>
  <?php endif; ?>
</footer>