<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reverie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="medium-wrapper">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	        <h2><?php the_title(); ?></h2>

          <?php the_field( 'scheduled_classes' ); ?>

	      <?php endwhile; else : ?>

	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	      <?php endif; ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
