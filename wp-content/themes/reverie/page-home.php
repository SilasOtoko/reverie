<?php get_header( 'home' ); ?>

<div class="subscribe">
  <div class="main-wrapper clearfix">
    <h3>Sign up for our newsletter!</h3>
    <input type="email" placeholder="Email Address">
    <input class="subscribe-button" type="submit" value="Subscribe">
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
      <a class="button button-blue" href="">Products</a>
      <a class="button button-blue" href="">Classes</a>
      <a class="button button-blue" href="">Gallery</a>
      <a class="button button-blue" href="/about-us">Meet Us</a>
    </div>

    <div class="tagline">
      <h4>Rêverie</h4>
      <h4>To daydream. A time to sit, ponder, create, and gather wool. We are a shop of dreams.</h4>
    </div>

    <div class="featured-products">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/stuffed-jungle-animals.jpg" />
          </li>
          <li>
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/stuffed-chicken.jpg" />
          </li>
          <li>
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/stuffed-rabbit.jpg" />
          </li>
          <li>
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/soaps.jpg" />
          </li>
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
