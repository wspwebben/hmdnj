<?php
/**
 * Feature Section
 */
 $construciton_feature_section_title = get_theme_mod('construction_lite_feature_title');
 $construciton_feature_section_sub_title = get_theme_mod('construction_lite_feature_sub_title');
 $construction_lite_feature_section_image = get_theme_mod('construction_lite_feature_image');
 ?>
 
<?php if($construciton_feature_section_title || $construciton_feature_section_sub_title){ ?>
    <div class="section-title-sub-wrap wow fadeInUp">
        <div class="ak-container">
            <?php if($construciton_feature_section_title){ ?><div class="section-title"><h5><?php echo esc_html($construciton_feature_section_title); ?></h5></div><?php } ?>
            <?php if($construciton_feature_section_sub_title) { ?><div class="section-sub-title"><h2><?php echo esc_html($construciton_feature_section_sub_title); ?></h2></div><?php } ?>
        </div>
    </div>
<?php } ?>
<?php
    $construction_lite_feature_category = get_theme_mod('construction_lite_feature_cat');
    if($construction_lite_feature_category){
        wp_reset_postdata();
        $construction_lite_feature_args = array(
            'poat_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name' => $construction_lite_feature_category
        );
        $construction_lite_feature_query = new WP_Query($construction_lite_feature_args);
        if($construction_lite_feature_query->have_posts() || $construction_lite_feature_section_image):
        ?>
            <div class="wow fadeInUp features">
			  <div class="ak-container">
				<ul class="features__list">
				  <?php
					while($construction_lite_feature_query->have_posts()): $construction_lite_feature_query->the_post();
					$construction_lite_feature_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-feature-image')[0];
				  ?>
					<li class="features__item">
					  <article class="features__wrapper">
						<img src="<?php echo esc_url($construction_lite_feature_image_url); ?>" alt="" />
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
        <?php 
        endif;
        } ?>