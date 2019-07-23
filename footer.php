<footer>
  <div class="whatsapp box-shadow">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=31640253134">
      <img class="icon" src="<?php bloginfo('template_url'); ?>/static/img/whatsapp-white.svg" alt="whatsapp" width="30">
    </a>
  </div>
  <div class="bg-shark py-5">
    <div class="container">
      <div class="row">
        <?php if( have_rows('footer', 'option') ): ?>
          <?php while( have_rows('footer', 'option') ): the_row();
            $h5 = get_sub_field('h5');
            ?>
            <div class="col-6 col-lg-3">
              <h5><?php echo $h5; ?></h5>
              <?php if( have_rows('list') ): ?>
                <ul class="list-unstyled">
                  <?php while( have_rows('list') ): the_row(); ?>
                    <?php
                    $link = get_sub_field('href');
                    if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <li>
                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                      <?php echo esc_html($link_title); ?>
                    </a>
                  </li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>


            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="bg-woodsmoke py-2">
    <div class="container container-copyright">
      <div class="row">
        <div class="col-12 text-center">
          <span>Copyright <?php echo date("Y"); ?> &copy Taxidelft015.nl Alle rechten voorbehouden. Algemene voorwaarden</span>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap.native@2.0.15/dist/bootstrap-native-v4.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>