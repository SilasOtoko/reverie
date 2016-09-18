<?php
/**
 * Template Name: Blog
**/
?>

<?php get_header(); ?>

<div id="gallery-page">

  <div class="banner"></div>

  <div class="content-area">
    <main class="medium-wrapper">

      <div class="blog-posts">

        <?php query_posts('post_type=post&post_status=publish&posts_per_page=4&paged='. get_query_var('paged')); ?>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <div class="blog-post">
            <h2><?php the_title(); ?></h2>
            <h4 class="post-date"><?php the_time('F jS, Y'); ?></h4>
            <div class="blog-snippet"><?php the_content(); ?></div>
            <span class="button-wrapper"><a class="button button-medium button-blue" href="<?php the_permalink(); ?>">Read More</a></span>
          </div>

        <?php endwhile; ?>

          <div class="navigation">
            <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
          </div><!-- /.navigation -->

        <?php else : ?>

          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; wp_reset_query(); ?>

      </div>

    </div>
  </main>
</div>

<?php get_footer(); ?>
