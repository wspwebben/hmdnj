<?php
/**
 * The template for displaying projects page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package construction lite
 */

get_header();
do_action('header_banner');?>
    <div class="ak-container">
    	<div id="primary" class="content-area">
    		<main id="main" class="site-main" role="main">
    
    			<?php
            $portfolio_category = 'projects';
            $portfolio_args = array(
              'post_type' => 'post',
              'order' => 'DESC',
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'category_name' => $portfolio_category
            );
            $portfolio_query = new WP_Query($portfolio_args);
            
            if($portfolio_query->have_posts()):
          ?>
            <ul class="portfolio">
              <?php
                while($portfolio_query->have_posts()):
                      $portfolio_query->the_post();
                      $portfolio_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-portfolio-image');
                      $portfolio_image_url = $portfolio_image_src[0]; 
              ?>
                <li class="portfolio__item">
                  <article class="portfolio__wrapper portfolio-item" style="background-image: url(<?php echo esc_url($portfolio_image_url) ?>)">
                    <h3 class="portfolio-item__title">
                      <a class="portfolio-item__link" href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                  </article>
                </li>
              <?php endwhile;?>
            </ul>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->

<?php
get_sidebar();
?> </div> <?php
get_footer();