<?php
/**
 * Template Name: Contact Us
**/
?>

<?php get_header(); ?>

<div id="contact-page">

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

        <?php
        while ( have_posts() ) : the_post(); ?>

          <div class="regular-content">
            <?php the_content(); ?>
          </div>

        <?php endwhile; ?>

        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2984.263685236991!2d-85.83605668414812!3d41.58517797924646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8816ec6ca541cb6d%3A0x8234b1d9f2eb7a80!2sReverie~Yarn%2C+Decor+%26+Gifts!5e0!3m2!1sen!2sus!4v1474934813420"frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="contact-info">
        <span><?php the_field( 'street_address' ); ?></span>
        <span><?php the_field( 'phone' ); ?></span>
        <span><?php the_field( 'email' ); ?></span>
      </div>

      <div class="hours">
        <h3>Hours</h3>
        <?php the_field( 'hours' ); ?>
      </div>

      <div class="contact-form">
        <div class="contact-form-wrapper clearfix">
          <h3>Contact Us</h3>
          <?php the_field( 'contact_form' ); ?>
        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
