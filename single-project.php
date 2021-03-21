<?php

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
                <a class="hmd-breadcrumbs__link" href="/projects">Projects</a>
              </li>
            </ol>
						<h2><?php the_title(); ?></h2>
					</div>

    		<?php while ( have_posts() ) : the_post() ?>
          <div class="project project--reverse">
            <div class="project__aside project__aside--image">
              <?php the_post_thumbnail(); ?>
            </div>

            <div class="project__content">
              <?php the_content(); ?>
            </div>
          </div>
    		<?php endwhile; ?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div> <?php
get_footer();