    <footer>

      <h2>Explore Rêverie</h2>

      <?php

        $defaults = array(
          'container' => false,
          'div' => false,
          'theme_location' => 'main-menu'
        );

        wp_nav_menu( $defaults );

      ?>

      <span class="line"></span>
      <div class="social-icons">

        <?php if( have_rows('social_icons', 'options') ): ?>

          <?php while( have_rows('social_icons', 'options') ): the_row(); ?>

            <?php

              $image = get_sub_field('social_logo', 'options');
              $size = 'small-icon';
              $src = $image['url'];
              $alt = $image['alt'];
              $thumb = $image['sizes'][ $size ];

            if( $image ): ?>

              <a href="<?php the_sub_field( 'social_link', 'options' ); ?>" class="footer-icon"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"></a>

            <?php endif; ?>

          <?php endwhile; ?>

        <?php endif; ?>

      </div>
      <div class="legal">
        <h4>© Copyright 2016 Rêverie</h4>
        <h4><a href="">Website by Mandolin Marketing</a></h4>
      </div>

    </footer>

    <script>
      /* Set the width of the side navigation to 250px */
      function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
          if (screen.width > 400) {
            // $('.sidenav').css({'border-left' : '2px solid #fbb94d', 'border-bottom' : '2px solid #fbb94d'});
            jQuery('.sidenav').css('box-shadow', '0px 0px 30px 10px rgba(100,100,100,0.17)')
          }
          jQuery('#sidebar nav').removeClass('fade-out');
          jQuery('#sidebar nav').addClass('fade-in');
      }

      /* Set the width of the side navigation to 0 */
      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          jQuery('.sidenav').css('box-shadow', 'none');
          jQuery('#sidebar nav').removeClass('fade-in');
          jQuery('#sidebar nav').addClass('fade-out');
      }
    </script>

    <?php wp_footer(); ?>

  </body>
</html>
