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
			<div id="single-class-page" class="medium-wrapper">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	        <div class="page-title">
		        <h1><?php the_title(); ?></h1>
		        <div class="fancy-underline">
		          <span class="line"></span>
		          <img class="fancy-swirl" src="<?php bloginfo( 'template_directory' ); ?>/img/art.svg" alt="fancy swirl">
		          <span class="line"></span>
		        </div>
						<h4><em>*Registration Required for all events.</em></h4>
		      </div>

          <?php the_field( 'scheduled_classes' ); ?>

					<?php
					$event = get_the_title()->_event_title; ?>

					<h1><?php echo $id; ?></h1>

					<?php echo EM_Events::output(array('tag'=>$event,  'limit'=>10, 'pagination'=>1)); ?>

	      <?php endwhile; else : ?>

	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	      <?php endif; ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
