<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spintech
 */

get_header();
?>

<section id="post-section" class="post-section st-py-default">
	<div class="container">
		<div class="row gy-lg-0 gy-5 wow fadeInUp">
			<div class="<?php esc_attr(spintech_post_layout()); ?>">
				<?php 		
					if( have_posts()) : the_post();
				?>
				<article class="post-items">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
					endif;
					
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
			</div>
			<?php  get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>