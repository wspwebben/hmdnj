<?php
function construction_lite_dynamic_css(){
    echo '<style>';
    $construction_lite_breadcrumb_bg_image = get_theme_mod('construction_lite_page_bg_image');
    if($construction_lite_breadcrumb_bg_image){
        ?> 
        .header-banner-container{
            background: url('<?php echo esc_url($construction_lite_breadcrumb_bg_image) ?>') no-repeat center fixed;
        }
        <?php
    }

    $construction_lite_disable_about_image_frame = get_theme_mod('construction_lite_disable_feature_image_frame');
    if($construction_lite_disable_about_image_frame){
        ?>
        .about-content-wrap .right-about-content:before{
            border: none!important;
        }
        <?php
    }
    $construction_lite_skin_color = get_theme_mod('construction_lite_skin_color', '#FEA100');
    $construction_lite_rgbs = construction_lite_hex2rgb($construction_lite_skin_color);
    if($construction_lite_skin_color){
        ?>
        .item-wrap .price, .woocommerce ul.products li.product .price, 
        .site-footer .site-info a:hover, .bottom-footer a:hover, 
        .bottom-footer .widget_construction_lite_recent_post .recent-posts-content a:hover, 
        .woocommerce .product-rating, .woocommerce ul.products li.product .star-rating, .widget a:hover, 
        .woocommerce-info::before, .comment-author-date a:hover, .entry-title a:hover, 
        .comments-area .reply .comment-reply-link, .woocommerce.widget_shopping_cart ul.cart_list li a:hover, 
        .product-name a:hover, .product-name a:focus, .product-name a:active, .about-post-title a:hover, 
        .edit-link a:hover, .edit-link a:focus, .edit-link a:active, 
        .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap,
        #construction-breadcrumb a, .portfolio_section .owl-controls .owl-nav .owl-prev:hover:before, .portfolio_section .owl-controls .owl-nav .owl-next:hover:before, .testimonial_section .top-quote:before, .testimonial_section .bottom-quote:before, a:hover, a:focus, a:active {
            color: <?php echo esc_attr($construction_lite_skin_color) ?>;
        }
        .widget_aptf_widget .aptf-tweet-content .aptf-tweet-name, .site-footer .site-info a{
            color: <?php echo esc_attr($construction_lite_skin_color) ?> !important;
        }
        .section-sub-title h2::before, .about-button a:hover, .feature_section .posts-feature, 
        .member-name-designation-social .member-designation::after, .blog_section .blog-left .blog-date, 
        .item-wrap .add-to-cart-shop a:hover, .blog_section .blogs-loop .blog-title::after, 
        .title-cta::after, .cta-button a, 
        .test-psots-wrap .owl-controls .owl-dot:hover, .test-psots-wrap .owl-controls .owl-dot.active, 
        .bottom-footer .widget-title::after, 
        .mail-slider-header-wrap .owl-prev:hover, .mail-slider-header-wrap .owl-next:hover,
        .archive.woocommerce a.button, .woocommerce nav.woocommerce-pagination ul li a:hover, 
        .widget-title::after, .comments-area .comment-reply-title::after, 
        .nav-links .page-numbers.current, .nav-links a.page-numbers:hover, .navigation a, 
        .comments-area .reply .comment-reply-link:hover, .comments-area input[type="submit"], 
        .page-content .search-form input[type="submit"], 
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
        .contact-area .contact-form-post input[type="submit"], 
        .calendar_wrap caption, .slider-content div span a {
            background-color: <?php echo esc_attr($construction_lite_skin_color) ?>;
        }
        .navigation a{
            border: 2px solid <?php echo esc_attr($construction_lite_skin_color) ?>;
        }
        .site-header .ak-search input[type="submit"], .slider-content a:hover, .about-button a:hover, 
        .cta-button a, .woocommerce nav.woocommerce-pagination ul li a:hover, 
        .nav-links .page-numbers.current, .nav-links a.page-numbers:hover, 
        .comments-area .reply .comment-reply-link:hover, .comments-area input[type="submit"], 
        .page-content .search-form input[type="submit"], 
        .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
        .contact-area .contact-form-post input[type="submit"], 
        .top-footer .social-icons .fa_link_wrap a:hover .fa_wrap, .slider-content div span a {
            border-color: <?php echo esc_attr($construction_lite_skin_color) ?>;
        }
        <?php
    }
    echo '</style>';
}

add_action('wp_head', 'construction_lite_dynamic_css',100);

function construction_lite_hex2rgb($hex) {
            $hex = str_replace("#", "", $hex);

            if (strlen($hex) == 3) {
                $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
                $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
                $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
            } else {
                $r = hexdec(substr($hex, 0, 2));
                $g = hexdec(substr($hex, 2, 2));
                $b = hexdec(substr($hex, 4, 2));
            }
            $rgb = array($r, $g, $b);
            //return implode(",", $rgb); // returns the rgb values separated by commas
            return $rgb; // returns an array with the rgb values
        }