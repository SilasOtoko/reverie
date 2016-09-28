<?php get_header(); ?>

<?php
/**
 * Template Name: Cart
**/
?>

<?php
  $banner = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner' );
?>

<?php if( $banner ): ?>
  <div class="banner" style="background-image: url(<?php echo $banner[0]; ?>"></div>
<?php else: ?>
  <div class="banner"></div>
<?php endif; ?>

<div id="product-page" class="content-area">
  <main>
    <?php woocommerce_content(); ?>
  </main>
</div>

<?php get_footer(); ?>
