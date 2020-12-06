<?php
/**
 * The header for our theme.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construction lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} 
?>
<input type="hidden" id="ajax-url" url="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" />
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'construction-lite' ); ?></a>
    
    <?php get_template_part('template-parts/page-header'); ?>

    <?php if(is_home() || is_front_page()): ?>
        <?php
        $construct_slider_cat = get_theme_mod('construction_lite_slider_cat');
        $construct_slider_args = array(
            'post_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name' => $construct_slider_cat
        );
        $construct_slider_query = new WP_Query($construct_slider_args);

        if($construct_slider_query->have_posts()): ?>
            <?php
                while($construct_slider_query->have_posts()):
                    $construct_slider_query->the_post();
                    $construction_lite_slider_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-slider-image');
                    $construction_lite_image_url = $construction_lite_slider_image_src[0];
            ?>
            <section class="hero" style="background-image: url('<?php echo esc_url($construction_lite_image_url); ?>')">
                <div class="hero__container ak-container">
                    <h2 class="hero__title"><?php the_title(); ?></h2>
                    <div class="hero__content"><?php echo construction_lite_esc_slider_content(get_the_content()); ?></div>
                </section>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    
    <?php endif; ?>
    
	<div id="content" class="site-content">