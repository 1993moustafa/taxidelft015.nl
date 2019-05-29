<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



<div class="bg-gray py-5 my-5">
  <div class="container container-pricing">
    <div class="row">
      <div class="col-12 py-5 text-center">
        <strong>VEILIG VAN A NAAR B? RIJ MET DELFT TAXI SERVICE MEE!</strong>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-12 col-md-4">
        <div class="card border-0 rounded-0 bg-woodsmoke">
          <div class="icon text-center rounded-circle bg-white">
            <img src="<?php bloginfo('template_url'); ?>/static/img/taxi.svg" width="45">
          </div>
          <div class="card-body pt-5 text-center">
            <h5 class="card-title my-3">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-dodgerblue rounded-pill">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0 rounded-0 bg-woodsmoke">
          <div class="icon text-center rounded-circle bg-white">
            <img src="<?php bloginfo('template_url'); ?>/static/img/taxi.svg" width="45">
          </div>
          <div class="card-body pt-5 text-center">
            <h5 class="card-title my-3">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-dodgerblue rounded-pill">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0 rounded-0 bg-woodsmoke">
          <div class="icon text-center rounded-circle bg-white">
            <img src="<?php bloginfo('template_url'); ?>/static/img/taxi.svg" width="45">
          </div>
          <div class="card-body pt-5 text-center">
            <h5 class="card-title my-3">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-dodgerblue rounded-pill">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container container-info">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Hoe kunnen we helpen?</h2>
        <p>Heeft u opmerkingen, suggesties of vragen, aarzel dan niet om contact met ons op te nemen. Ons serviceteam helpt u om al uw vragen te beantwoorden.</p>
      </div>
    </div>
    <div class="row mt-5">
     <div class="col-4 text-center border-right">
      <div class="d-flex justify-content-center">
        <div class="icon text-center rounded-circle bg-dodgerblue mb-3 d-flex justify-content-center">
          <img src="<?php bloginfo('template_url'); ?>/static/img/map.svg" width="45">
        </div>
      </div>
      <h6>ONS ADRES</h6>
      <p>Californiëdreef 35, 3565 BJ Utrecht</p>
    </div>
    <div class="col-4 text-center border-right">
      <div class="d-flex justify-content-center">
        <div class="icon text-center rounded-circle bg-dodgerblue mb-3 d-flex justify-content-center">
          <img src="<?php bloginfo('template_url'); ?>/static/img/map.svg" width="45">
        </div>
      </div>
      <h6>ONS ADRES</h6>
      <p>Californiëdreef 35, 3565 BJ Utrecht</p>
    </div>
    <div class="col-4 text-center">
      <div class="d-flex justify-content-center">
        <div class="icon text-center rounded-circle bg-dodgerblue mb-3 d-flex justify-content-center">
          <img src="<?php bloginfo('template_url'); ?>/static/img/map.svg" width="45">
        </div>
      </div>
      <h6>ONS ADRES</h6>
      <p>Californiëdreef 35, 3565 BJ Utrecht</p>
    </div>
  </div>
</div>
</div>