<?php
/**
 * Section Client
 */
 $construction_lite_client_cat = get_theme_mod('construction_lite_client_cat');
 if($construction_lite_client_cat):
    $construction_lite_client_args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => $construction_lite_client_cat
    );
    $construction_lite_client_query = new WP_Query($construction_lite_client_args);
  if($construction_lite_client_query->have_posts()):
?>

    <section class="awards">
    <div class="awards__container ak-container">
        <ul class="awards__list">
            <?php
                while($construction_lite_client_query->have_posts()):
                    $construction_lite_client_query->the_post();
                    $construction_lite_client_logo_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-client-logo');
                    $construction_lite_client_logo_url = $construction_lite_client_logo_src[0];
                ?>

                <?php if($construction_lite_client_logo_url): ?>
                    <li class="awards__item wow fadeInUp">
                        <img class="awards__image" src="<?php echo esc_url($construction_lite_client_logo_url); ?>" alt="<?php the_title_attribute() ?>" />
                    </li>
                <?php endif; ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
    <?php
  endif;
endif;
