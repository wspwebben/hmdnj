<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package construction lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		$feature_img_enable 	= get_theme_mod('construction_lite_feature_img_enable',1);
		$post_author_enable 	= get_theme_mod('construction_lite_post_authr_enable',1);
		$post_date_enable 		= get_theme_mod('construction_lite_post_date_enable',1);
		$post_comments_enable 	= get_theme_mod('construction_lite_post_comments_enable',1);
        if($feature_img_enable){
	        $construction_lite_post_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'construction-single-page');
	        if($construction_lite_post_image){
	            the_post_thumbnail();
	        }
	    }
		if ( !is_single() ) :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="comment-author-date">
			<?php if($post_author_enable){ ?>
                <span class="post-author"><?php  echo esc_url(the_author_posts_link()); ?> </span>
            <?php } ?>
			<?php if($post_date_enable){ ?>
                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo esc_html(get_the_date('d M Y')); ?></span>
            <?php } ?>
			<?php if($post_comments_enable){ ?>
                <span class="post-comment">
                	<a href="<?php comments_link(); ?>">
                		<i class="fa fa-comment-o" aria-hidden="true"></i>
                		<?php
						$construction_lite_comment_count = get_comments_number();
						if ( '1' === $construction_lite_comment_count ) {
							printf(
								/* translators: 1: title. */
								esc_html__( '1 Comment', 'construction-lite' ),
								'<span>' . get_the_title() . '</span>'
							);
						} else {
							printf( // WPCS: XSS OK.
								/* translators: 1: comment count number, 2: title. */
								esc_html( _nx( '%1$s Comment', '%1$s Comments', $construction_lite_comment_count, 'comments title', 'construction-lite' ) ),
								number_format_i18n( $construction_lite_comment_count ),
								'<span>' . get_the_title() . '</span>'
							);
						}
						?>
            		</a>
        		</span>
        	<?php } ?>
            </div>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else:
            echo apply_filters('the_content' , wp_kses_post(wp_trim_words(get_the_content(),70,'...')));
            ?>
                <a class="read-more" href="<?php the_permalink() ?>"><?php esc_html_e('Read More','construction-lite'); ?><i class="fa fa-angle-right " aria-hidden="true"></i></a>
            <?php
        endif;
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'construction-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->