<?php get_header(); ?>

<?php
  $banner = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner' );
?>

<?php if( $banner ): ?>
  <div class="banner" style="background-image: url(<?php echo $banner[0]; ?>"></div>
<?php endif; ?>

<div id="product-page" class="content-area clearfix">

  <?php if ( is_active_sidebar( 'product_sidebar' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
      <div class="sidebar-toggle">Filter Results <span class="plus-symbol">✚</span></div>
      <div class="sidebar-content">
        <?php dynamic_sidebar( 'product_sidebar' ); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="products-section">

    <?php woocommerce_content(); ?>

  </div>

</div>

<?php get_footer(); ?>
