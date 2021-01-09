<?php
/**
 * Feature Section
 */

?>
 
<div class="section-title-sub-wrap wow fadeInUp">
	<div class="ak-container">
		<div class="section-title"><h5>WHAT WE OFFER</h5>
		<div class="section-sub-title"><h2>OUR SERVICES</h2></div>
	</div>
</div>

<?php
	wp_reset_postdata();
	$feature_args = array(
			'post_type' => 'service',
			'order' => 'DESC',
			'posts_per_page' => -1,
			'post_status' => 'publish',
	);
	$feature_query = new WP_Query($feature_args);
	
	if($feature_query->have_posts()):
?>
	<div class="wow fadeInUp features">
		<div class="ak-container">
			<ul class="features__list">
				<?php while($feature_query->have_posts()):
								$feature_query->the_post();
								$feature_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-feature-image');
								$feature_image_url = $feature_image_src[0];
				?>
					<li class="features__item">
					  <article class="features__wrapper">
							<img src="<?php echo esc_url($feature_image_url); ?>" alt="" />
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
	</div>
<?php endif; ?>