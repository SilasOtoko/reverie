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

        <div class="testimonials clearfix">

          <div class="testimony clearfix">

            <i class="fa fa-quote-left fa"></i>

            <p>I recently took a needle felting class here, and it was amazing! Love the shop and all the people we came in contact with were so sweet and friendly! We will most definitely be coming back!</p>
            <p>- Kelly Sanford Provo</p>

          </div>

          <div class="testimony clearfix">

            <i class="fa fa-quote-left fa"></i>

            <p>I love Reverie! Their customer service is awesome! They also have beautiful gift items as well as being a full service yarn shop!!</p>
            <p>- Elizabeth Sohrab</p>

          </div>

          <div class="testimony clearfix">

            <i class="fa fa-quote-left fa"></i>

            <p>Quite possibly the nicest yarn shop I have ever been to. Lovely selection, lovely owners and super friendly! About an hour drive, but I will be going back!</p>
            <p>- Lisa L Kage</p>

          </div>

          <div class="testimony clearfix">

            <i class="fa fa-quote-left fa"></i>

            <p>I recently took a needle felting class here, and it was amazing! Love the shop and all the people we came in contact with were so sweet and friendly! We will most definitely be coming back!</p>
            <p>- Kelly Sanford Provo</p>

          </div>

        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
