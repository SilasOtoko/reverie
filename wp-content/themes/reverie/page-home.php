<?php get_header( 'home' ); ?>

<div class="subscribe">
  <div class="main-wrapper clearfix">
    <h3>Sign up for our newsletter!</h3>
    <div class="subscribe-form"><?php the_field( 'subscription_form' ); ?></div>
  </div>
</div>

<div class="content-area">
  <main class="home-main">

    <h1 class="welcome">Welcome to Rêverie</h1>
    <h3>Where creativity meets inspiration!</h3>
    <div class="fancy-underline">
      <span class="line"></span>
      <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
      <span class="line"></span>
    </div>

    <p>Rêverie is a yarn, décor & gifts shop located in the heart of the vibrant arts community of downtown Goshen. We also offer classes for those who want to learn!</p>

    <div class="navigation-buttons">

      <?php if( have_rows('navigation_links') ): ?>

        <?php while( have_rows('navigation_links') ): the_row(); ?>

          <a class="button button-blue" href="<?php the_sub_field( 'page_link' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>

    <div class="tagline">
      <h4>Rêverie</h4>
      <h4>To daydream. A time to sit, ponder, create, and gather wool. We are a shop of dreams.</h4>
    </div>

    <div class="featured-products">
      <h2>See some of our products</h2>
      <div class="flexslider">
        <ul class="slides">

          <?php if( have_rows( 'featured_products' ) ): ?>

            <?php while( have_rows( 'featured_products' ) ): the_row(); ?>

              <?php

                $image = get_sub_field('featured_product');
                $size = 'medium-small';
                $src = $image['url'];
                $alt = $image['alt'];
                $thumb = $image['sizes'][ $size ];

              if( $image ): ?>

                <li>
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
                </li>

              <?php endif; ?>

            <?php endwhile; ?>

          <?php endif; ?>

        </ul>
      </div>
      <script>
        jQuery(window).load(function() {
          jQuery('.flexslider').flexslider({
            animation: "slide",
            slideshow: false
          });
        });
      </script>
    </div>

    <div class="association">
      <p>Rêverie is a Member of the <a href="http://www.tnna.org" class="blue-text">National Needle Association</a></p>
    </div>

  </main>
</div>

<?php get_footer(); ?>
