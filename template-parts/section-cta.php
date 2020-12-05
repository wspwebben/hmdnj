<?php
/**
 * CTA Section
 */
 $construction_lite_cta_title = get_theme_mod('construction_lite_cta_title');
 $construction_lite_cta_description = get_theme_mod('construction_lite_cta_section_description');
 $construction_lite_cta_button_text = get_theme_mod('construction_lite_cta_button_text');
 $construction_lite_cta_button_link = get_theme_mod('construction_lite_cta_button_link');

 $construction_lite_cta_bg_image = get_theme_mod('construction_lite_cta_bg_image');
?>

<section class="call-to-action"  style="background-image: url('<?php echo esc_url($construction_lite_cta_bg_image) ?>')">
    <div class="call-to-action__container ak-container">
        <div class="wow fadeInUp">
            <h2 class="call-to-action__title"><?php echo esc_html($construction_lite_cta_title); ?></h2>
            <p class="call-to-action__text"><?php echo wp_kses_post($construction_lite_cta_description); ?></p>
            <a class="call-to-action__button" href="<?php echo esc_url($construction_lite_cta_button_link); ?>">
                <?php echo esc_html($construction_lite_cta_button_text); ?>
            </a>
        </div>
    </div>
</section>