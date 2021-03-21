<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package construction lite
 */

get_header();
?>
    <div class="ak-container">
    	<div id="primary">
    		<main id="main" class="site-main p-t-60" role="main">
					<div class="section-sub-title">
            <ol class="hmd-breadcrumbs">
              <li class="hmd-breadcrumbs__item">
                <a class="hmd-breadcrumbs__link" href="/">Home</a>
              </li>
              <li class="hmd-breadcrumbs__item">
                <a class="hmd-breadcrumbs__link" href="/services">Services</a>
              </li>
            </ol>
						<h2><?php the_title(); ?></h2>
					</div>

					<?php while ( have_posts() ) : the_post();  ?>
						<div class="project">
							<div class="project__content">
								<?php the_content(); ?>
							</div>

							<div class="project__aside">
								<?php echo do_shortcode( '[wpforms id="209" title="true"]' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
			
    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div> <?php
get_footer();