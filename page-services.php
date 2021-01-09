<?php
/**
 * The template for displaying services page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package construction lite
 */

get_header();
do_action('construction_lite_header_banner');?>
    <div class="ak-container">
    	<div id="primary" class="content-area">
    		<main id="main" class="site-main" role="main">

					<?php
						$service_args = array(
							'post_type' => 'service',
							'order' => 'DESC',
							'posts_per_page' => -1,
							'post_status' => 'publish',
						);
						$service_query = new WP_Query($service_args);
						
						if($service_query->have_posts()):
					?>
						<div class="features">
							<ul class="features__list">
								<?php
									while($service_query->have_posts()):
										$service_query->the_post();
										$service_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-feature-image')[0];
								?>
									<li class="features__item">
										<article class="features__wrapper">
											<img src="<?php echo esc_url($service_image_url); ?>" alt="" />
											<h3 class="features__title">
												<a class="features__link" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
												</a>
											</h3>
											<div class="feature__content">
												<?php echo esc_html(wp_trim_words(get_the_content(),'15','...')); ?>
											</div>
											<a class="feature__button" href="<?php the_permalink(); ?>">Read more</a>
										</article>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

    		</main><!-- #main -->
    	</div><!-- #primary -->

<?php
get_sidebar();
?> </div> <?php
get_footer();