<div class="slider">
<div class="container">
  <div class="row">
    <div class="p-4 py-5 mt-5 mx-auto text-center">
      <h1><?php the_field('h1', 'option'); ?></h1>
      <h2><?php the_field('h2', 'option'); ?></h2>
    </div>
    <div class="d-sm-flex justify-content-center mb-5 w-100">
      <div class="col-12 col-sm-3">
        <div class="text-center">
          <?php 
          $link = get_field('btn-white', 'option');
          if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <button type="button" class="btn btn-lg btn-white w-100 my-3 rounded-0">
              <a class="onze-diensten-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </button>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-12 col-sm-3">
        <div class="text-center">
          <?php 
          $link = get_field('btn-dodgerblue', 'option');
          if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
          <button type="button" class="btn btn-lg btn-dodgerblue w-100 my-3 rounded-0">
            <a class="reserveren-link" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          </button>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
</div>