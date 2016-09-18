<?php
/**
 * Template Name: Products
**/
?>

<?php get_header(); ?>

<div id="products-page">

  <div class="banner"></div>

  <div class="content-area">
    <main>

      <div class="page-title">
        <h1>Products</h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
        <!-- <h3>Each of these ladies is a specialist in their respective interest</h3> -->
      </div>

      <div class="main-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>

      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
