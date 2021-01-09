<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction lite
 */

?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
		echo do_shortcode( '[wpforms id="197"]' );
	// dynamic_sidebar( 'construction-lite-sidebar-1' ); 
	?>
</aside><!-- #secondary -->