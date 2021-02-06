<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spintech
 */

get_header();
?>
<section id="404-v2-section" class="404-section st-py-default">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-12 text-center">
				<div class="card-404">
					<h1><?php esc_html_e('4','spintech'); ?><i class="fa fa-smile-o"></i><?php esc_html_e('4','spintech'); ?></h1>
					<h3><?php esc_html_e('Oops! Page Not Found','spintech'); ?></h3>
					<p><?php esc_html_e('The page you were looking for could not be found.','spintech'); ?></p>
					<div class="card-404-btn mt-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-secondary"><?php esc_html_e('Go to Home','spintech'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
