<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mediafuel_starter
 */

if ( ! is_active_sidebar( 'product_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'product_sidebar' ); ?>
</aside><!-- #secondary -->
