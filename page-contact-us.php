<?php
/**
 * The template for displaying contact us page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package construction lite
 */

get_header();?>
    <div class="ak-container">
    	<div class="page-contact-us p-t-60" id="primary">
    		<main id="main" class="site-main" role="main">
					<div class="section-sub-title">
						<h2>Сontact us</h2>
					</div>
    
    			<?php
    			while ( have_posts() ) : the_post();
    
    				get_template_part( 'template-parts/content', 'page' );
    
    			endwhile; // End of the loop.
    			?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div>
<?php
get_footer();