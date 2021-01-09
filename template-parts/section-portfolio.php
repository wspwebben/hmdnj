<?php
/**
 * Portfolio Section
 */

?>

<div class="portfolio-wrap-contents">
    <div class="ak-container">
        <div class="section-title-sub-wrap wow fadeInUp">
            <div class="section-title"><h5>OUR WORKS</h5></div>
            <div class="section-sub-title"><h2>WHAT WE HAVE DONE</h2></div>
        </div>
    </div>
    <?php
        $portfolio_args = array(
            'post_type' => 'project',
            'order' => 'DESC',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        );
        $portfolio_query = new WP_Query($portfolio_args);

        if($portfolio_query->have_posts()):
    ?>
        <div class="portfoli-works wow fadeInUp">
            <div id="portfolio-workd-wrap" class="owl-carousel">
                <?php while($portfolio_query->have_posts()):
                        $portfolio_query->the_post();
                        $portfolio_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'construction-portfolio-image');
                        $portfolio_image_url = $portfolio_image_src[0]; 
                ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="images-content">
                            <?php if ($portfolio_image_url): ?>
                                <div class="image-wrap">
                                    <img src="<?php echo esc_url($portfolio_image_url); ?>" >
                                </div>
                            <?php endif; ?>
                            <div class="work-title"><h3><?php the_title(); ?></h3></div>
                        </div>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>