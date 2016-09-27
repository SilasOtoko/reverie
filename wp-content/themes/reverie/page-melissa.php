<?php
/**
 * Template Name: Melissa
**/
?>

<?php get_header(); ?>

<div id="melissa-page">

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
      <div class="medium-wrapper">

        <div class="page-title">
          <h1><?php the_field( 'page_title' ); ?></h1>
            <h3><?php the_field( 'page_subtitle' ); ?></h3>
          <div class="fancy-underline">
            <span class="line"></span>
            <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
            <span class="line"></span>
          </div>
        </div>

        <div class="main-content clearfix">

          <div class="melissa-photo">

            <?php

              $image = get_field('melissa_photo');
              $size = 'profile';
              $src = $image['url'];
              $alt = $image['alt'];
              $thumb = $image['sizes'][ $size ];

            if( $image ): ?>

              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">

            <?php endif; ?>

          </div>
          <div class="melissa-info">
            <h2><?php the_field( 'name' ); ?></h2>
            <div class="melissa-bio">
              <?php the_field( 'bio' ); ?>
            </div>

            <?php if( get_field( 'article_link' ) ): ?>
              <a href="<?php the_field( 'article_link' ); ?>" class="blue-link"><?php the_field( 'article_link_text' ); ?></a>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </main>
  </div>

</div>

<?php get_footer(); ?>
