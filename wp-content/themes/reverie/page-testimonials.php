<?php
/**
 * Template Name: Testimonials
**/
?>

<?php get_header(); ?>

<div id="testimonials-page">

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
        <h1>From our Customers</h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
        <!-- <h3>Each of these ladies is a specialist in their respective interest</h3> -->
      </div>

      <div class="main-content">

        <div class="gallery-intro">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile; ?>

          <?php endif; ?>

        </div>

        <div class="testimonials clearfix">

          <?php if( have_rows('testimonials') ): ?>

            <?php while( have_rows('testimonials') ): the_row(); ?>

              <div class="testimony clearfix">

                <i class="fa fa-quote-left fa"></i>

                <div><?php the_sub_field( 'testimonial' ); ?></div>
                <div>- <?php the_sub_field( 'author' ); ?></div>

              </div>

            <?php endwhile; ?>

          <?php endif; ?>

        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
