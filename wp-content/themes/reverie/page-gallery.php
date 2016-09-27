<?php
/**
 * Template Name: Gallery
**/
?>

<?php get_header(); ?>

<?php
  $banner = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner' );
?>

<?php if( $banner ): ?>
  <div class="banner" style="background-image: url(<?php echo $banner[0]; ?>"></div>
<?php else: ?>
  <div class="banner"></div>
<?php endif; ?>

  <div class="content-area">
    <main>

      <div class="page-title">
        <h1><?php the_title(); ?></h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
        <!-- <h3>Each of these ladies is a specialist in their respective interest</h3> -->
      </div>

      <div class="main-content">

        <div class="gallery-images">

          <?php if( have_rows('gallery_images') ): ?>

            <?php while( have_rows('gallery_images') ): the_row(); ?>

              <div class="gallery-image-wrapper">
                <div class="gallery-image lightbox">

                  <?php

                    $image = get_sub_field('gallery_image');
                    $size = 'profile';
                    $src = $image['url'];
                    $alt = $image['alt'];
                    $thumb = $image['sizes'][ $size ];

                  if( $image ): ?>

                    <a class="lightbox-link" href="<?php echo $src; ?>">
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
                    </a>

                  <?php endif; ?>

                </div>
              </div>

            <?php endwhile; ?>

          <?php endif; ?>

        </div>

      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
