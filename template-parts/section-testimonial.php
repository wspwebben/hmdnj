<?php
/**
 * Testimonial Section
 */

?>

<div class="ak-container">
    <div class="section-title-sub-wrap wow fadeInUp">
        <div class="section-title"><h5>WHAT CUSTOMER SAY</h5></div>
        <div class="section-sub-title"><h2>TESTIMONIALS</h2></div>
    </div>

    <div class="test-psots-wrap">
        <div class="test-post-loop-wrap owl-carousel">
            <?php
                $test_args = array(
                    'post_type' => 'testimonial',
                    'order' => 'DESC',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );
                $test_query = new WP_Query($test_args);

                if($test_query->have_posts()):
            ?>
                <?php while($test_query->have_posts()):
                        $test_query->the_post();
                        $test_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-testimonial-image');
                        $test_image_url = $test_image_src[0];
                ?>
                    <div class="test-content wow fadeInUp">
                        <?php if ($test_image_url): ?>
                            <div class="image-test">
                                <img src="<?php echo esc_url($test_image_url) ?>" alt="<?php the_title_attribute() ?>" />
                            </div>
                        <?php endif ?>

                        <div class="title-desc-test">
                            <div class="test-desc">
                                <span class="top-quote"></span>
                                <p><?php echo esc_html(wp_trim_words(get_the_content(),'30','...')); ?></p>
                                <span class="bottom-quote"></span>
                            </div>
                            <div class="test-title"><?php echo wp_kses(get_the_title(), array( 'span' => array( 'class' => array() ) ) ); ?></div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
