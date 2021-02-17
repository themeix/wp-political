<header class="header-area">
  <nav class="header-topbar">
    <div class="container">
      <ul class="list-inline m-0">
        <li class="list-inline-item">
          <i class="im im-location"></i>New York, USA
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
        <a class="navbar-brand" href="index1.html"><img src="assets/image/header-logo.png" alt="image"></a>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar-mean ms-auto">

            <?php
              wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'political-nav_cotainer',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ));
            ?>
            <ul class="navbar-nav nav-search-cart">
              <li class="nav-item"> <a class="nav-link cart-bar" href="cart.html"><i class="im im-shopping-cart"></i><span>2</span></a></li>
              <li class="nav-item"> <a class="nav-link search-bar" data-bs-toggle="modal" data-bs-target="#searchmodal" href="#"><i class="im im-magnifier"></i></a></li>
            </ul>

          </div>
          <div class="modal fade" id="searchmodal" tabindex="-1" role="dialog">
            <button type="button" class="close" data-bs-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-dialog " role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <form action="#">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search Here">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="im im-magnifier"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>