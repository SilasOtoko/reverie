<?php
/**
 * Template Name: Classes
**/
?>

<?php get_header(); ?>

<div id="classes-page">

  <!-- <div class="banner">
    <img src="<?php bloginfo( 'template_directory' ); ?>/img/reverie-ladies.jpg">
  </div> -->

  <div class="content-area">
    <main>

      <div class="page-title">
        <h1>Classes</h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
      </div>

      <div class="main-content">
        <h3>Upcoming Classes</h3>
        <div class="classes">

          <?php the_content(); ?>

        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
