<?php
/**
 * The template for displaying projects page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package construction lite
 */

$portfolio_args = array(
  'post_type' => 'project',
  'order' => 'DESC',
  'posts_per_page' => -1,
  'post_status' => 'publish',
);
$portfolio_query = new WP_Query($portfolio_args);

get_header();?>
    <div class="ak-container">
    	<div id="primary">
    		<main id="main" class="site-main p-t-60" role="main">
          <div class="section-sub-title">
						<h2>Our projects</h2>
					</div>
            
          <?php if($portfolio_query->have_posts()): ?>
            <ul class="portfolio">
              <?php
                while($portfolio_query->have_posts()):
                      $portfolio_query->the_post();
                      $portfolio_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-portfolio-image');
                      $portfolio_image_url = $portfolio_image_src[0]; 
              ?>
                <li class="portfolio__item">
                  <article class="portfolio-item" style="background-image: url(<?php echo esc_url($portfolio_image_url) ?>)">
                    <h3 class="portfolio-item__title">
                      <a class="portfolio-item__link" href="<?php the_permalink() ?>">
                        <span><?php the_title(); ?></span>
                      </a>
                    </h3>
                  </article>
                </li>
              <?php endwhile;?>
              
              <li class="portfolio__item portfolio__item--form">
                <?php
                  echo do_shortcode( '[wpforms id="209" title="true"]' );
                ?>
              </li>
            </ul>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div> <?php
get_footer();