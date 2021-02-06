<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_shortcode('TML', 'testimonial_shortcode');
function testimonial_shortcode($post_id) {
	ob_start();

	// js and css
	wp_enqueue_style ( 'tml-bootstrap-css', TML_PLUGIN_URL . 'assets/css/bootstrap.css');
	wp_enqueue_style ( 'tml-font-awesome-css', TML_PLUGIN_URL . 'assets/css/font-awesome.css');
	
	//owl settings
	$testimonial_settings = get_option('testimonial_settings');
	if(isset($testimonial_settings['testimonial_carousel_design'])) $testimonial_carousel_design = $testimonial_settings['testimonial_carousel_design']; else  $testimonial_carousel_design = "template1";
	if(isset($testimonial_settings['carousal_effect'])) $carousal_effect = $testimonial_settings['carousal_effect']; else $carousal_effect = "none";
	if(isset($testimonial_settings['auto_play_carousel'])) $auto_play_carousel = $testimonial_settings['auto_play_carousel']; else $auto_play_carousel = "true";
	if(isset($testimonial_settings['title_color'])) $title_color = $testimonial_settings['title_color']; else $title_color = "black";
	if(isset($testimonial_settings['description_color'])) $description_color = $testimonial_settings['description_color']; else $description_color = "black";
	if(isset($testimonial_settings['designation_color'])) $designation_color = $testimonial_settings['designation_color']; else $designation_color = "black";
	if(isset($testimonial_settings['pagination11'])) $pagination11 = $testimonial_settings['pagination11']; else $pagination11 = "false";
	if(isset($testimonial_settings['maker_custom_css'])) $maker_custom_css = $testimonial_settings['maker_custom_css']; else $maker_custom_css = "";
	if(isset($testimonial_settings['testimonial_column_layout'])) $testimonial_column_layout = $testimonial_settings['testimonial_column_layout']; else $testimonial_column_layout = "1";
	
	?>
	<style>
		.testimonial-title	{
			color: <?php echo $title_color; ?>;
		}
		.description	{
			color: <?php echo $description_color; ?>;
		}
		 .testimonial-designation	{
			color: <?php echo $designation_color; ?>;	
		}
		<?php echo $maker_custom_css; ?>
	</style>
	<?php
	// fetch all testimonials
	$all_testimonial = array(  'post_type' => 'testimonial-maker', 'orderby' => 'ASC');
	$testimonial_loop = new WP_Query( $all_testimonial );

	if ( $testimonial_loop->have_posts() ) { ?>
		
		<div class="col-sm-12">
			<div id="testimonial-slider" class="owl-carousel">
				<?php
				while ( $testimonial_loop->have_posts() ) : $testimonial_loop->the_post();
					$testimonial_post_id = get_the_ID();
					$testimonial_post_settings = get_post_meta(get_the_ID(), 'awl_testimonial'.get_the_ID(), true);
					$website_link = $testimonial_post_settings['website_link'];
					$designation = $testimonial_post_settings['designation'];
					
					// get testimonial data
					$t_text = get_the_content();
					$t_website_url = $website_link;
					$t_designation = $designation;
					$t_fe_image_id = get_post_thumbnail_id( $testimonial_post_id ); // featured image id
					$t_fe_image_thumb = wp_get_attachment_image_src($t_fe_image_id, 'thumbnail', true);
					
					// template settings
					wp_enqueue_script('tml-owl-js', TML_PLUGIN_URL .'assets/js/owl.carousel.min.js', array('jquery'), '', false);
			
					if($testimonial_carousel_design == "template1") { $template_number = "template1"; wp_enqueue_style ( 'tml-owl-t1-css', TML_PLUGIN_URL . 'assets/css/owl-carousal/owl-t1".css'); 	}
					if($testimonial_carousel_design == "template2") { $template_number = "template2"; wp_enqueue_style ( 'tml-owl-t2-css', TML_PLUGIN_URL . 'assets/css/owl-carousal/owl-t2".css'); 	}
					if($testimonial_carousel_design == "template3") { $template_number = "template3"; wp_enqueue_style ( 'tml-owl-t3-css', TML_PLUGIN_URL . 'assets/css/owl-carousal/owl-t3".css'); 	}
					if($testimonial_carousel_design == "template4") { $template_number = "template4"; wp_enqueue_style ( 'tml-owl-t4-css', TML_PLUGIN_URL . 'assets/css/owl-carousal/owl-t4".css'); 	}
					
					wp_enqueue_style ( 'tml-owl-carousel-css', TML_PLUGIN_URL . 'assets/css/owl.carousel.min.css');
					wp_enqueue_style ( 'tml-owl-theme-css', TML_PLUGIN_URL . 'assets/css/owl.theme.min.css');
					wp_enqueue_style ( 'tml-owl-transitions-css', TML_PLUGIN_URL . 'assets/css/owl.transitions.css'); ?>
					
					<?php if($testimonial_carousel_design == "template1") { ?>
							<div class="testimonial">
								<div class="testimonial-content">
									<div class="description"><?php echo ucwords($t_text); ?></div>
									<div class="pic">
										<img src="<?php echo $t_fe_image_thumb[0]; ?>">
									</div>
									<h3 class="testimonial-title"><?php the_title(); ?></h3>
									<p class="testimonial-designation"><?php echo ucwords($t_designation); ?></p>
									<p class="testimonial-link"><a href ="<?php echo $t_website_url; ?>"><?php echo ucwords($t_website_url); ?></a></p>	
								</div>
							</div>
					<?php } else if($testimonial_carousel_design == "template2") { ?>
							<div class="testimonial">
								<div class="pic">
									<img src="<?php echo $t_fe_image_thumb[0]; ?>">
								</div>
								<div class="testimonial-content">
									<div class="description"><?php echo ucwords($t_text); ?></div>
									<h3 class="testimonial-title"><?php the_title(); ?>
										<p class="testimonial-designation"><?php echo ucwords($t_designation); ?></p>
										<p class="testimonial-link"><a href ="<?php echo $t_website_url; ?>"><?php echo ucwords($t_website_url); ?></a></p>
									</h3>
								</div>
							</div>
					<?php } else if($testimonial_carousel_design == "template3") { ?>
							<div class="testimonial">
								<div class="testimonial-content">
									<div class="description"><?php echo ucwords($t_text); ?></div>
									<div class="pic">
										<img src="<?php echo $t_fe_image_thumb[0]; ?>">
									</div>
									<h4 class="testimonial-title"><?php the_title(); ?>
									<p class="testimonial-designation"><?php echo ucwords($t_designation); ?></p>
									<p class="testimonial-link"><a href ="<?php echo $t_website_url; ?>"><?php echo ucwords($t_website_url); ?></a></p>
									</h4>
								</div>
							</div>
							
					<?php } else if($testimonial_carousel_design == "template4") { ?>
							<div class="testimonial">
								<div class="pic">
									<img src="<?php echo $t_fe_image_thumb[0]; ?>">
								</div>
								<div class="testimonial-content">
									<h3 class="testimonial-title"><?php the_title(); ?>
										<small class="testimonial-designation"><?php echo ucwords($t_designation); ?></small>
										<small class="testimonial-link"><a href ="<?php echo $t_website_url; ?>"><?php echo ucwords($t_website_url); ?></a></small>
									</h3>
									<div class="description"><?php echo ucwords($t_text); ?></div>
								</div>
							</div>
					<?php } ?>
					<?php
				endwhile; ?>
			</div>
		</div> <?php 
		wp_reset_query();
	}
	?>
	<script>
		jQuery( window ).load(function() {
			jQuery(document).ready(function(){
				jQuery("#testimonial-slider").owlCarousel({
					items: <?php echo $testimonial_column_layout; ?>,
					itemsDesktop:[1000,1],
					itemsDesktopSmall:[990,2],
					itemsTablet:[768,2],
					itemsMobile:[650,1],
					pagination:<?php echo $pagination11; ?>,
					<?php if($carousal_effect != "none") { ?>
					transitionStyle:"<?php echo $carousal_effect; ?>",
					<?php } ?>
					navigationText:[""],
					autoPlay:<?php echo $auto_play_carousel; ?>,
					slideSpeed:1000,
					
				});
			});
		});
	</script>
	<?php
	return ob_get_clean(); 
}?>