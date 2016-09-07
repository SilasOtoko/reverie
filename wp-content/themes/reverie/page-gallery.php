<?php
/**
 * Template Name: Gallery
**/
?>

<?php get_header(); ?>

<div id="gallery-page">

  <div class="banner"></div>

  <div class="content-area">
    <main>

      <div class="page-title">
        <h1>Photo Gallery</h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
        <!-- <h3>Each of these ladies is a specialist in their respective interest</h3> -->
      </div>

      <div class="main-content">

        <div class="gallery-images">
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <a class="lightbox-link" href="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
                <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
              </a>
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
          <div class="gallery-image-wrapper">
            <div class="gallery-image">
              <img src="<?php bloginfo( 'template_directory' ); ?>/img/yarn-1.jpg">
            </div>
          </div>
        </div>

      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
