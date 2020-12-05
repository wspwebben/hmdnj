<?php
function construction_lite_esc_slider_content($input){
    $construction_lite_slider_content = array(
        'a' => array(
            'class' => array(),
            'href' => array(),
            'target' => array(),
        ),
        'div'=>array(
            'class' => array(),
            'id' => array(),
        ),
        'span'=>array(
            'class' => array(),
            'id' => array(),
        )
    );
    return wp_kses($input,$construction_lite_slider_content);
}

function construction_lite_category_list(){
    $construction_lite_cat_lists = get_categories(
        array(
            'hide_empty' => '0',
            'exclude' => '1',
        )
    );
    $construction_lite_cat_array = array();
    $construction_lite_cat_array[''] = __('-- Choose --','construction-lite');
    foreach($construction_lite_cat_lists as $construction_lite_cat_list){
        $construction_lite_cat_array[$construction_lite_cat_list->slug] = $construction_lite_cat_list->name;
    }
    return $construction_lite_cat_array;
}
function construction_lite_posts_List(){
    wp_reset_postdata();
    $construction_lite_post_lists = get_posts(array('posts_per_page' => -1));
    $construction_lite_post_list_array = array();
    $construction_lite_post_list_array[''] = __('-- Choose --','construction-lite');
    foreach($construction_lite_post_lists as $construction_lite_post_list){
        $construction_lite_post_list_array[$construction_lite_post_list->ID] = $construction_lite_post_list->post_title;
    }
    return $construction_lite_post_list_array;
}
function construction_lite_enable_disable_section(){
    $construction_lite_sections = array('about','feature','team','portfolio','blog','cta','shop','testimonial','client');
    $construction_lite_enable_sections = array();
    foreach($construction_lite_sections as $construction_lite_section){
        if(get_theme_mod('construction_lite_'.$construction_lite_section.'_enable')){
            $construction_lite_enable_sections[] = array(
                'id' => 'construct_'.$construction_lite_section.'_section',
                'section' => $construction_lite_section,
            );
        }
    }
    return $construction_lite_enable_sections;
}
function construction_lite_escape_test_title($input){
    $pass_array = array(
            'span' => array(
                'class' => array(),
            ),
        );
        return wp_kses($input,$pass_array);
}
function construction_lite_header_social_link(){
                $social_link = array('facebook','twitter','youtube','pinterest','instagram','linkedin','googleplus','flickr');
                foreach($social_link as $social_links){
                    
                    $social_links_val = get_theme_mod('construction_lite_'.$social_links.'_link');
                    if($social_links == 'googleplus'){
                        if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?> <a target="_blank" href="<?php echo esc_url($social_links_val); ?>"> <?php
                                echo '<span class="fa_wrap">';
                                    echo '<i class="fa fa-google-plus" aria-hidden="true"></i>';
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>  
                                    <?php
                                echo '</div>';
                                ?></a>   <?php
                            echo '</div>';
                        }
                    }
                    elseif($social_links == 'pinterest'){
                        if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?><a target="_blank" href="<?php echo esc_url($social_links_val); ?>"><?php
                                echo '<span class="fa_wrap">';
                                echo '<i class="fa fa-pinterest-p" aria-hidden="true"></i>';
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>   
                                    <?php
                                echo '</div>';
                                ?> </a> <?php
                            echo '</div>';
                        }
                    }
                    else{
                            if($social_links_val){
                            echo '<div class="fa_link_wrap">';
                            ?> <a target="_blank" href="<?php echo esc_url($social_links_val) ?>"> <?php
                                echo '<span class="fa_wrap">';
                                    ?>
                                        <i class="fa fa-<?php echo esc_attr($social_links); ?>"></i>
                                    <?php
                                echo '</span>';
                                echo '<div class="link_wrap">';
                                    ?>
                                        <?php echo esc_attr($social_links); ?>    
                                    <?php
                                echo '</div>';
                                ?> </a> <?php
                            echo '</div>';
                        }
                    }
                }
}
add_action('construction_lite_header_social_link_acrion','construction_lite_header_social_link');
function construction_lite_header_banner_x() {
	if(!(is_page_template( 'template-home.php' ) || is_home() || is_front_page())) :
		?>
			<div class="header-banner-container">
                <div class="ak-container">
    				<div class="page-title-wrap">
    					<?php
    						if(is_archive()) {
    							the_archive_title( '<h1 class="page-title">', '</h1>' );
    							the_archive_description( '<div class="taxonomy-description">', '</div>' );
    						} elseif(is_single() || is_singular('page')) {
    							wp_reset_postdata();
    							the_title('<h1 class="page-title">', '</h1>');
    						} elseif(is_search()) {
                                ?>
                                <h1 class="page-title"><?php 
        /* translators: %1$s : Search Query */ printf( esc_html__( 'Search Results for: %s', 'construction-lite' ), '<span>' . esc_html(get_search_query()) . '</span>' ); ?></h1>
                                <?php
                            } elseif(is_404()) {
                                ?>
                                <h1 class="page-title"><?php esc_html_e( '404 Error', 'construction-lite' ); ?></h1>
                                <?php
                            }
    					?>
    					<?php construction_lite_breadcrumbs(); ?>
    				</div>
                </div>
			</div>
		<?php
	endif;
}
add_action('construction_lite_header_banner', 'construction_lite_header_banner_x');
function construction_lite_sanitize_bradcrumb($input){
    $all_tags = array(
        'a'=>array(
            'href'=>array()
        )
     );
    return wp_kses($input,$all_tags);
    
}
function construction_lite_breadcrumbs() {
    global $post;
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show

    $delimiter = '/';

    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $homeLink = home_url();

    if (is_home() || is_front_page()) {

        if ($showOnHome == 1)
            echo '<div id="construction-breadcrumb"><a href="' . esc_url($homeLink) . '">' . esc_html__('Home', 'construction-lite') . '</a></div></div>';
    } else {

        echo '<div id="construction-breadcrumb"><a href="' . esc_url($homeLink) . '">' . esc_html__('Home', 'construction-lite') . '</a> ' . wp_kses_post($delimiter) . ' ';

        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0)
                echo wp_kses_post(get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' '));
            echo '<span class="current">' . esc_html__('Archive by category','construction-lite').' "' . single_cat_title('', false) . '"' . '</span>';
        } elseif (is_search()) {
            echo '<span class="current">' . esc_html__('Search results for','construction-lite'). '"' . esc_html(get_search_query()) . '"' . '</span>';
        } elseif (is_day()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . wp_kses_post($delimiter) . ' ';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_url(get_the_time('F')) . '</a> ' . wp_kses_post($delimiter) . ' ';
            echo '<span class="current">' . esc_html(get_the_time('d')) . '</span>';
        } elseif (is_month()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . wp_kses_post($delimiter) . ' ';
            echo '<span class="current">' . esc_url(get_the_time('F')) . '</span>';
        } elseif (is_year()) {
            echo '<span class="current">' . esc_html( get_the_time('Y') ). '</span>';
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . esc_url($homeLink) . '/' . esc_attr($slug['slug']) . '/">' . esc_attr($post_type->labels->singular_name) . '</a>';
                if ($showCurrent == 1)
                    echo ' ' . wp_kses_post($delimiter) . ' ' . '<span class="current">' . esc_html(get_the_title()) . '</span>';
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                if ($showCurrent == 0)
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                echo construction_lite_sanitize_bradcrumb($cats);
                if ($showCurrent == 1)
                    echo '<span class="current">' . esc_html(get_the_title()) . '</span>';
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo '<span class="current">' . esc_attr($post_type->labels->singular_name) . '</span>';
        } elseif (is_attachment()) {
            if ($showCurrent == 1) echo ' ' . '<span class="current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1)
                echo '<span class="current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo construction_lite_sanitize_bradcrumb($breadcrumbs[$i]);
                if ($i != count($breadcrumbs) - 1)
                    echo ' ' . wp_kses_post($delimiter). ' ';
            }
            if ($showCurrent == 1)
                echo ' ' . wp_kses_post($delimiter) . ' ' . '<span class="current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_tag()) {
            echo '<span class="current">' . esc_html__('Posts tagged','construction-lite').' "' . esc_html(single_tag_title('', false)) . '"' . '</span>';
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo '<span class="current">' . esc_html__('Articles posted by ','construction-lite'). esc_attr($userdata->display_name) . '</span>';
        } elseif (is_404()) {
            echo '<span class="current">' . esc_html__('Error 404','construction-lite') . '</span>';
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
            echo esc_html__('Page', 'construction-lite') . ' ' . esc_html(get_query_var('paged'));
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ')';
        }

        echo '</div>';
    }
}
function construction_lite_font_size(){
     $font_size[''] = 'Default';
    for($i=12;$i<=70;$i++)
    {
        $font_size[$i] = $i;
    }
   
    return $font_size;
}
function construction_lite_fonts()
{
    return $fonts = array(
        ''=>'Default',
        'Raleway'=>'Raleway',
        'Source Sans Pro'=>'Source Sans Pro',
        'Josefin Sans'=>'Josefin Sans'
    );
}