<?php
/**
 * Section Client (Awards)
 */

?>
 
<?php 
    $client_args = array(
        'post_type' => 'award',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );

    $client_query = new WP_Query($client_args);
    
    if($client_query->have_posts()):
?>
    <section class="awards">
        <div class="awards__container ak-container">
            <ul class="awards__list">
                <?php
                    while($client_query->have_posts()):
                        $client_query->the_post();
                        $client_logo_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-client-logo');
                        $client_logo_url = $client_logo_src[0];
                    ?>

                    <?php if($client_logo_url): ?>
                        <li class="awards__item wow fadeInUp">
                            <img class="awards__image" src="<?php echo esc_url($client_logo_url); ?>" alt="<?php the_title_attribute() ?>" />
                        </li>
                    <?php endif; ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
