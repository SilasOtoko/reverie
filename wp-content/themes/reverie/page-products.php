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
        <div class="products">

          <?php if( have_rows('product_categories') ): ?>

          <?php while( have_rows('product_categories') ): the_row(); ?>

            <h3><?php the_sub_field( 'category_name' ); ?></h3>

            <div class="product">
              <?php the_sub_field( 'products' ); ?>
            </div>

          <?php endwhile; ?>

          <?php endif; ?>
          
        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
