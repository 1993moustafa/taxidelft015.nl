<nav class="navbar navbar-expand-md navbar-dodgerblue bg-dodgerblue p-lg-0" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <a class="navbar-brand" href="/">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/img/logo.svg" alt="Delfstad Taxi" class="logo_retina" style="width: 160px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="hamburg-icon"></span>
    <span class="hamburg-icon"></span>
    <span class="hamburg-icon"></span>
  </button>
    <?php
    wp_nav_menu( array(
      'theme_location'    => 'primary',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'bs-example-navbar-collapse-1',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
    <a href="tel:+31640253134" class="call-now" rel="nofollow">
      <div class="mypage-alo-phone">
        <div class="animated infinite zoomIn mypage-alo-ph-circle"></div>
        <div class="animated infinite pulse mypage-alo-ph-circle-fill"></div>
        <div class="animated infinite tada mypage-alo-ph-img-circle"></div>
      </div>
    </a>
  </div>
</nav>