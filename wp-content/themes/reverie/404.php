<?php get_header(); ?>

<?php
  $banner = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner' );
?>

<?php if( $banner ): ?>
  <div class="banner" style="background-image: url(<?php echo $banner[0]; ?>"></div>
<?php endif; ?>

<div class="content-area">
  <main class="text-center">

    <h1>Oops! Page not found. Where did it go?</h1>
    <p>It's possible it never existed, but why don't you head back to the <a class="blue-text" href="<?php bloginfo( 'url' ); ?>">home page</a> and see if you can find what you were looking for from there?</p>

  </main>
</div>

<?php get_footer(); ?>
