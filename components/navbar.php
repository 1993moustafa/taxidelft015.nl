<nav class="navbar navbar-expand-md navbar-shark bg-shark" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Navbar</a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>

<!--
<nav class="navbar navbar-expand-lg navbar-shark bg-shark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler border-0 menu btn14" type="button" data-menu="14" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="icon"></div>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <hr>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown megamenu-li">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-3">
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Leiden CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Rotterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag HS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Amsterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Schiedam CS</a>
                  <hr />
                </div>
                <div class="col-12 col-lg-3">
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Leiden CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Rotterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag HS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Amsterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Schiedam CS</a>
                  <hr />
                </div>
                <div class="col-12 col-lg-3">
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Leiden CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Rotterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag HS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Amsterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Schiedam CS</a>
                  <hr />
                </div>
                <div class="col-12 col-lg-3">
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Leiden CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Rotterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag HS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Den Haag CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Amsterdam CS</a>
                  <a class="dropdown-item p-0 py-2" href="#">Taxi naar Schiedam CS</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
-->