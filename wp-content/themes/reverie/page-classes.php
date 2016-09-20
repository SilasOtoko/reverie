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
        <h1><?php the_field( 'page_title' ); ?></h1>
        <div class="fancy-underline">
          <span class="line"></span>
          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
          <span class="line"></span>
        </div>
      </div>

      <div class="main-content">
        <h3>Upcoming Classes</h3>
        <div class="classes">

          <?php

      	    $args = array(
      	      'post_type' => 'class',
      	      'orderby' => 'date',
      	      'order' => 'ASC',
      	    );
      	    $query = new WP_Query( $args );

      	  ?>

          <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="class">
              <a href="<?php the_permalink(); ?>">
                <div class="class-title">
                  <h2><?php the_field( 'class_title' ); ?></h2>
                  <h4>Taught By <?php the_field( 'instructor' ); ?></h4>
                </div>
                <div class="class-info">
                  <span><strong>Description: </strong><?php the_field( 'description' ); ?></span>
                  <span><strong>Dates: </strong><?php the_field( 'dates' ); ?></span>
                  <span><strong>Time: </strong><?php the_field( 'time' ); ?></span>
                  <span><strong>Cost: </strong><?php the_field( 'cost' ); ?></span>
                </div>
              </a>
            </div>

          <?php endwhile; ?>

          <?php endif; ?>

        </div>
      </div>

    </main>
  </div>

</div>

<?php get_footer(); ?>
