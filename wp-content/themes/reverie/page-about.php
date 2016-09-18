<?php
/**
 * Template Name: About Us
**/
?>

<?php get_header(); ?>

<div id="about-page">

  <div class="banner">

    <?php

      $image = get_field('group_photo');
      $size = 'large';
      $src = $image['url'];
      $alt = $image['alt'];
      $thumb = $image['sizes'][ $size ];

    if( $image ): ?>

      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">

    <?php endif; ?>

  </div>

  <div class="content-area">
    <main>

      <div class="page-title">
        <h1><?php the_field( 'page_title' ); ?></h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
        <h3><?php the_field( 'page_subtitle' ); ?></h3>
      </div>

      <div class="main-content">

        <div class="members">

          <?php if( have_rows('members') ): ?>

          <?php while( have_rows('members') ): the_row(); ?>

            <div class="member clearfix">
              <div class="member-photo">

                <?php

                  $image = get_sub_field('member_image');
                  $size = 'profile';
                  $src = $image['url'];
                  $alt = $image['alt'];
                  $thumb = $image['sizes'][ $size ];

                if( $image ): ?>

                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">

                <?php endif; ?>

              </div>
              <div class="member-bio">
                <h2><?php the_sub_field( 'member_name' ); ?></h2>
                <?php the_sub_field( 'member_bio' ); ?>
              </div>
            </div>
            <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">

          <?php endwhile; ?>

          <?php endif; ?>

        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
