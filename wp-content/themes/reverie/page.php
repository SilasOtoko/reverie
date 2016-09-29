<?php get_header(); ?>

<?php
  $banner = wp_get_attachment_image_src ( get_field( 'banner_image' ), 'banner' );
?>

<?php if( $banner ): ?>
  <div class="banner" style="background-image: url(<?php echo $banner[0]; ?>"></div>
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

    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

  </main>
</div>

<?php get_footer(); ?>
