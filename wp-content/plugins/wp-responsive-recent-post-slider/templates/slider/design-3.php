<?php
/**
 * 'recent_post_slider' Design 3 Shortcodes HTML
 *
 * @package WP Responsive Recent Post Slider
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wppsac-post-slides">
	<div class="wppsac-post-overlay">
		<div class="wppsac-post-image-bg">
			<a href="<?php the_permalink(); ?>">
				<?php if( has_post_thumbnail()  ) { ?>
					<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url($feat_image); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($feat_image); } ?>" alt="<?php the_title_attribute(); ?>" />
				<?php  } ?>
			</a>
		</div>
		<?php if( $showCategory ) { ?>
			<div class="wppsac-post-categories"><?php echo $cat_list; ?></div>
		<?php } ?>
		<div class="wppsac-post-short-content">
			<div class="wppsac-item-meta bottom">
			  	<h2 class="wppsac-post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<?php if( $showDate || $showAuthor ) { ?>
				<div class="wppsac-post-date">
					<?php if( $showAuthor ) { ?> 
						<span><?php esc_html_e( 'By', 'wp-responsive-recent-post-slider' ); ?> <?php the_author(); ?></span>
					<?php }
					$authorPar = ( $showAuthor && $showDate ) ? '&nbsp;/&nbsp;' : '';
					echo $authorPar;
					if( $showDate ) { echo get_the_date(); } ?>
				</div>
				<?php } ?>

				<?php if( $showContent ) { ?>
				<div class="wppsac-post-content">
					<?php
					$customExcerpt = get_the_excerpt();
					if ( has_excerpt($post->ID) )  { ?>
						<div class="wppsac-sub-content"><?php echo $customExcerpt ; ?></div> 
					<?php } else {
						$excerpt = strip_shortcodes(strip_tags(get_the_content())); ?>
						<div class="wppsac-sub-content"><?php echo wprps_limit_words($excerpt,$words_limit); ?></div>
					<?php } ?>

					<?php if( $showreadmore ) { ?>
						<a class="wppsac-readmorebtn" href="<?php the_permalink(); ?>"><?php _e('Read More', 'wp-responsive-recent-post-slider'); ?></a>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>