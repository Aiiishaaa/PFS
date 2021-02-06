<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spintech
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-items'); ?>>
	<figure class="post-image">
		<div class="featured-image mask-effect">
			<a href="<?php esc_url(the_permalink()); ?>" class="post-hover">
			   <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</a>
			<?php 
				if ( is_single() ) :
				
				the_title('<h5 class="post-title post-image-text">', '</h5>' );
				
				else:
				
				the_title( sprintf( '<h5 class="post-title post-image-text"><a href="%s" rel="bookmark" class="mask">', esc_url( get_permalink() ) ), '</a></h5>' );
				
				endif; 
			?>
		</div>
		<div class="post-meta post-img-meta">
			<div class="post-line">
				<span class="comments-link"> <i class="fa fa-comment"></i> <a href="javascript:void(0);"><?php echo esc_html(get_comments_number($post->ID)); ?></a></span>
			</div>
		</div>
	</figure>
	<div class="post-content">
		<div class="post-meta">
			<span class="author-name">
			<?php  $user = wp_get_current_user(); ?>
				<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>" class="author meta-info hide-on-mobile"> <span class="author-image" style="background-image: url('<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>');"></span> <span class="author-name"><?php esc_html(the_author()); ?></span> </a>
				
			</span>
			<span class="post-date">
				<time datetime="<?php echo esc_attr(get_the_date('j-M-Y')); ?>" class="meta-info"><?php echo esc_html(get_the_date('j, M, Y')); ?></time>
			</span>
		</div>
		
		<div class="post-meta post-tags">
			<ul class="post-categories">
				<li>
					<i class="fa fa-tag"></i>
					<a href="<?php esc_url(the_permalink()); ?>" rel="category"><?php the_category(', '); ?></a>
				</li>
			</ul>
		</div>
		<?php if ( !has_post_thumbnail() ) { 
				if ( is_single() ) :
				
					the_title('<h5 class="post-title post-image-text">', '</h5>' );
					
					else:
					
					the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
					
					endif; 
			} 
		?>
		
		<?php 
			the_content( 
					sprintf( 
						__( 'Read More', 'spintech' ), 
						'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
					) 
				);
		?>
	</div>
</article>