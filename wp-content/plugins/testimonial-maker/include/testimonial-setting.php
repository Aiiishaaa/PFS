<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$testimonial_settings = get_option('testimonial_settings');
//js
wp_enqueue_script( 'awl-tml-bootstrap-js',  TML_PLUGIN_URL .'assets/js/bootstrap.js', array( 'jquery' ), '', true );
	
//css
wp_enqueue_style ( 'tml-bootstrap-css', TML_PLUGIN_URL . 'assets/css/bootstrap.css');
wp_enqueue_style ( 'tml-metabox-css', TML_PLUGIN_URL . 'assets/css/metabox.css');
wp_enqueue_style ( 'tml-toggle-css', TML_PLUGIN_URL . 'assets/css/toogle-button.css');
wp_enqueue_style ( 'tml-font-awesome-css', TML_PLUGIN_URL . 'assets/css/font-awesome.css');

?>
	<div style="text-align:center">
		<h1><?php _e('How to show Testimonial on page ?', TML_TXTDM); ?></h1>
		<hr>
		<p class="input-text-wrap">
			<p><?php _e('Copy & Embed shortcode into any Page/ Post / Text to display Testimonial on site.', TML_TXTDM); ?><br></p>
			<input type="text" name="shortcode" id="shortcode" value="[TML]" readonly style="height: 60px; text-align: center; font-size: 24px; width: 15%; border: 2px dashed;" onmouseover="return pulseOff();" onmouseout="return pulseStart();">
		</p>
		<hr>
	</div>
	<form id="testimonial_form_setting">
		<div class="row setting-css">
			<div class="col-lg-12 bhoechie-tab-container">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
					<div class="list-group">
						<a href="#" class="list-group-item active text-center">
							<span class="dashicons dashicons-format-image"></span><br/><?php _e('Template Design', TML_TXTDM); ?>
						</a>
						<a href="#" class="list-group-item text-center">
							<span class="dashicons dashicons-admin-generic"></span><br/><?php _e('Config', TML_TXTDM); ?>
						</a>
						<a href="#" class="list-group-item text-center">
							<span class="dashicons dashicons-admin-appearance"></span><br/><?php _e('Color Setting', TML_TXTDM); ?>
						</a>
						<a href="#" class="list-group-item text-center">
							<span class="dashicons dashicons-media-code"></span><br/><?php _e('Custum Css', TML_TXTDM); ?>
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">

					<div class="bhoechie-tab-content active">
						<h1><?php _e('Template Design', TML_TXTDM); ?></h1>
						<hr>	
						<div class="col-md-4" id="carousal_effect">
							<div class="ma_field p-4">
								<?php if(isset($testimonial_settings['testimonial_carousel_design'])) $testimonial_carousel_design = $testimonial_settings['testimonial_carousel_design']; else $testimonial_carousel_design = 1; ?>
								<select id="testimonial_carousel_design" name="testimonial_carousel_design" class="form-control" style="margin-left: 15px; width: 300px;">
									<option value="template1" <?php if($testimonial_carousel_design == "template1") echo "selected=selected"; ?>><?php _e('Template 1', TML_TXTDM); ?></option>
									<option value="template2" <?php if($testimonial_carousel_design == "template2") echo "selected=selected"; ?>><?php _e('Template 2', TML_TXTDM); ?></option>
									<option value="template3" <?php if($testimonial_carousel_design == "template3") echo "selected=selected"; ?>><?php _e('Template 3', TML_TXTDM); ?></option>
									<option value="template4" <?php if($testimonial_carousel_design == "template4") echo "selected=selected"; ?>><?php _e('Template 4', TML_TXTDM); ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-8">
							<div class="ma_field p-4">
								<div class="testimonial_img_preview">
										<img style="display:none;" src="<?php echo TML_PLUGIN_URL .'assets/img/templet-1.png'; ?>" class="temp_1"/>
										<img style="display:none;" src="<?php echo TML_PLUGIN_URL .'assets/img/templet-2.png'; ?>" class="temp_2"/>
										<img style="display:none;" src="<?php echo TML_PLUGIN_URL .'assets/img/templet-3.png'; ?>" class="temp_3"/>
										<img style="display:none;" src="<?php echo TML_PLUGIN_URL .'assets/img/templet-4.png'; ?>" class="temp_4"/>
								</div>
							</div>
						</div>
					</div>
					
					<div class="bhoechie-tab-content">
						<h1><?php _e('Transitions Settings', TML_TXTDM); ?></h1>
						<hr>
						<!--Theme 1 lighbox -->
						
						<div class="col-md-4">
							<div class="ma_field_discription">
								<h5><?php _e('Transitions Effect', TML_TXTDM); ?></h5>
								<p><?php _e('Select Effect', TML_TXTDM); ?></p> 
							</div>
						</div>
						<div class="col-md-8">
							<div class="ma_field p-4">
								<p class="switch-field em_size_field">
									<?php if(isset($testimonial_settings['carousal_effect'])) $carousal_effect = $testimonial_settings['carousal_effect']; else $carousal_effect = "none"; ?>
									<input type="radio" name="carousal_effect" id="carousal_effect1" value="none" <?php if($carousal_effect == "none") echo "checked=checked"; ?>>
									<label for="carousal_effect1"><?php _e('None', TML_TXTDM); ?></label>
									<input type="radio" name="carousal_effect" id="carousal_effect2" value="fadeUp" <?php if($carousal_effect == "fadeUp") echo "checked=checked"; ?>>
									<label for="carousal_effect2"><?php _e('Fadup', TML_TXTDM); ?></label>
								</p>
							</div>
						</div>
						
						
						
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Auto Play', TML_TXTDM); ?></h5>
									<p><?php _e('Select Auto play yes or no for testimonial slide.', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<p class="switch-field em_size_field">
										<?php if(isset($testimonial_settings['auto_play_carousel'])) $auto_play_carousel = $testimonial_settings['auto_play_carousel']; else $auto_play_carousel = "true"; ?>
										<input type="radio" name="auto_play_carousel" id="auto_play_carousel1" value="true" <?php if($auto_play_carousel == "true") echo "checked=checked"; ?>>
										<label for="auto_play_carousel1"><?php _e('Yes', TML_TXTDM); ?></label>
										<input type="radio" name="auto_play_carousel" id="auto_play_carousel2" value="false" <?php if($auto_play_carousel == "false") echo "checked=checked"; ?>>
										<label for="auto_play_carousel2"><?php _e('No', TML_TXTDM); ?></label>
									</p>
								</div>
							</div>
					
				
					
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Pagination Bullets', TML_TXTDM); ?></h5>
									<p><?php _e('Enable or disable pagination', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<p class="switch-field em_size_field">
										<?php if(isset($testimonial_settings['pagination11'])) $pagination11 = $testimonial_settings['pagination11']; else $pagination11 = "false"; ?>
										<input type="radio" name="pagination11" id="pagination1" value="true" <?php if($pagination11 == "true") echo "checked=checked"; ?>>
										<label for="pagination1"><?php _e('Yes', TML_TXTDM); ?></label>
										<input type="radio" name="pagination11" id="pagination2" value="false" <?php if($pagination11 == "false") echo "checked=checked"; ?>>
										<label for="pagination2"><?php _e('No', TML_TXTDM); ?></label>
									</p>
								</div>
							</div>
					
						
						
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Testimonial Column Layout', TML_TXTDM); ?></h5>
									<p><?php _e('Select how many columns of testimonial you want to show', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<p class="switch-field em_size_field">
										<?php if(isset($testimonial_settings['testimonial_column_layout'])) $testimonial_column_layout = $testimonial_settings['testimonial_column_layout']; else $testimonial_column_layout = "1"; ?>
										<input id="testimonial_column_layout" name="testimonial_column_layout" class="range-slider__range" style="width: 200px !important;" type="range" value="<?php echo $testimonial_column_layout; ?>" min="1" max="4" step="1" style="width: 300px !important; margin-left: 10px;">
										<span id="testimonial_column" class="range-slider__value"><?php echo $testimonial_column_layout; ?></span>
									</p>	
								</div>
							</div>
						</div>
					
					
					<div class="bhoechie-tab-content">
						<h1><?php _e('Color Setting', TML_TXTDM); ?></h1>
						<hr>	
						
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Title Color Settings', TML_TXTDM); ?></h5>
									<p><?php _e('Change Testimonial Title [Name] color', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<div class="custom-radios">
										<?php if(isset($testimonial_settings['title_color'])) $title_color = $testimonial_settings['title_color']; else $title_color = "#000000"; ?>
										<input type="radio" id="title_color_1" name="title_color" value="#000000" <?php if($title_color == "#000000") echo "checked=checked"; ?> >
										<label for="title_color_1">
										  <span>
										  </span>
										</label>
										<input type="radio" id="title_color_2" name="title_color" value="#ffffff" <?php if($title_color == "#ffffff") echo "checked=checked"; ?> >
										<label for="title_color_2">
										  <span>
										  </span>
										</label>
										<input type="radio" id="title_color_3" name="title_color" value="#1e73be" <?php if($title_color == "#1e73be") echo "checked=checked"; ?> >
										<label for="title_color_3">
										  <span>
										  </span>
										</label>
										<input type="radio" id="title_color_4" name="title_color" value="#dd3333" <?php if($title_color == "#dd3333") echo "checked=checked"; ?> >
										<label for="title_color_4">
										  <span>
										  </span>
										</label>
									</div>
								</div>
							</div>
					
						
					
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Description Text Color', TML_TXTDM); ?></h5>
									<p><?php _e('Change Testimonial description text color.', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<div class="custom-radios">
										<?php if(isset($testimonial_settings['description_color'])) $description_color = $testimonial_settings['description_color']; else $description_color = "#000000"; ?>
										<input type="radio" id="description_color1" name="description_color" value="#000000" <?php if($description_color == "#000000") echo "checked=checked"; ?> >
										<label for="description_color1">
										  <span>
										  </span>
										</label>
										<input type="radio" id="description_color2" name="description_color" value="#ffffff" <?php if($description_color == "#ffffff") echo "checked=checked"; ?> >
										<label for="description_color2">
										  <span>
										  </span>
										</label>
										<input type="radio" id="description_color3" name="description_color" value="#1e73be" <?php if($description_color == "#1e73be") echo "checked=checked"; ?> >
										<label for="description_color3">
										  <span>
										  </span>
										</label>
										<input type="radio" id="description_color4" name="description_color" value="#dd3333" <?php if($description_color == "#dd3333") echo "checked=checked"; ?> >
										<label for="description_color4">
										  <span>
										  </span>
										</label>
									</div>
								</div>
							</div>
					
						
					
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Designation Text Color', TML_TXTDM); ?></h5>
									<p><?php _e('Change Testimonial Designation text color.', TML_TXTDM); ?></p> 
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<div class="custom-radios">
										<?php if(isset($testimonial_settings['designation_color'])) $designation_color = $testimonial_settings['designation_color']; else $designation_color = "#000000"; ?>
										<input type="radio" id="designation_color1" name="designation_color" value="#000000" <?php if($designation_color == "#000000") echo "checked=checked"; ?> >
										<label for="designation_color1">
										  <span>
										  </span>
										</label>
										<input type="radio" id="designation_color2" name="designation_color" value="#ffffff" <?php if($designation_color == "#ffffff") echo "checked=checked"; ?> >
										<label for="designation_color2">
										  <span>
										  </span>
										</label>
										<input type="radio" id="designation_color3" name="designation_color" value="#1e73be" <?php if($designation_color == "#1e73be") echo "checked=checked"; ?> >
										<label for="designation_color3">
										  <span>
										  </span>
										</label>
										<input type="radio" id="designation_color4" name="designation_color" value="#dd3333" <?php if($designation_color == "#dd3333") echo "checked=checked"; ?> >
										<label for="designation_color4">
										  <span>
										  </span>
										</label>
									</div>
								</div>
							</div>
						</div>
				
					
					<div class="bhoechie-tab-content">
						<h1><?php _e('Custom Css', TML_TXTDM); ?></h1>
						<hr>	
					
							<div class="col-md-4">
								<div class="ma_field_discription">
									<h5><?php _e('Custom Css', TML_TXTDM); ?></h5>
								</div>
							</div>
							<div class="col-md-8">
								<div class="ma_field p-4">
									<p class="switch-field em_size_field">
										<?php if(isset($testimonial_settings['maker_custom_css'])) $maker_custom_css = $testimonial_settings['maker_custom_css']; else $maker_custom_css = ""; ?>
										<textarea name="maker_custom_css" id="maker_custom_css" style="width: 50%;" rows="5" placeholder="Type direct CSS code here. Don't use <style>...</style> tag."><?php echo $maker_custom_css; ?></textarea>
									</p>
								</div>
							</div>
						</div>
					
					
				</div>
			</div>
		</div>
			
		<!--end-->
		<input type="hidden" id="snow_action" name="snow_action" value="save_tmlsetting">
		<div id="loading_icon" name="loading_icon" style="display:none; text-align: center"> 
			<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
			<span class=""><?php _e('Please wait...', TML_TXTDM); ?></span>
		</div>
		<div class="p-4" style="text-align:center">
			<button type="button" id="save_tmlsetting" class="btn btn-primary btn-lg" onclick="TmlSaveSettings();"><?php _e('Save Settings', TML_TXTDM); ?></button>
		</div>
	</form> 		
<?php		
//Default settings
register_activation_hook( __FILE__, 'testimonial_defaultsettings' );
function testimonial_defaultsettings() {
	$tmldefaultsettings = array(
		"testimonial_carousel_design" 		 	 			=> "1",
		"carousal_effect"									=> "none",
		"auto_play_carousel"								=> "true",
		"title_color"										=> "#000000",
		"description_color"									=> "#000000",
		"designation_color"									=> "#000000",
		"pagination11"										=> "false",
		"maker_custom_css"									=> "",
		"testimonial_column_layout"							=> "1",
	);
	add_option( 'testimonial_settings', $tmldefaultsettings);
}

	//save settings
	if(isset($_POST['tml_setting_action'])){
		$tml_save_nonce_value = $_POST['security'];
		if(wp_verify_nonce( $tml_save_nonce_value, 'tml_save_nonce' )) {
			$testimonial_carousel_design 			= sanitize_text_field($_POST['testimonial_carousel_design']);
			$carousal_effect 						= sanitize_text_field($_POST['carousal_effect']);
			$auto_play_carousel 					= sanitize_text_field($_POST['auto_play_carousel']);
			$title_color 							= sanitize_text_field($_POST['title_color']);
			$description_color 						= sanitize_text_field($_POST['description_color']);
			$designation_color 						= sanitize_text_field($_POST['designation_color']);
			$pagination11 							= sanitize_text_field($_POST['pagination11']);
			$maker_custom_css 						= sanitize_text_field($_POST['maker_custom_css']);
			$testimonial_column_layout 				= sanitize_text_field($_POST['testimonial_column_layout']);
			
			$testimonial_settings = array(
				'testimonial_carousel_design' 		=> $testimonial_carousel_design,
				'carousal_effect' 		 			=> $carousal_effect,
				'auto_play_carousel' 		 		=> $auto_play_carousel,
				'title_color' 		 				=> $title_color,
				'description_color' 		 		=> $description_color,
				'designation_color' 		 		=> $designation_color,
				'pagination11' 		 				=> $pagination11,
				'maker_custom_css' 		 			=> $maker_custom_css,
				'testimonial_column_layout' 		 => $testimonial_column_layout,
			);
			update_option( 'testimonial_settings', $testimonial_settings);
		}
	} // end of save if	
// end of setting page fuction
?>
<script>
function TmlSaveSettings() {
	jQuery("#loading_icon").show();
	jQuery("#save_tmlsetting").hide();
	jQuery.ajax({
		dataType : 'html',
		type: 'POST',
		url : location.href,
		cache: false,
		data : jQuery('#testimonial_form_setting').serialize() + '&tml_setting_action=save_tmlsetting' + '&security=' + '<?php echo wp_create_nonce( "tml_save_nonce" ); ?>',
		complete : function() {  },
		success: function(data) {
			jQuery("#loading_icon").hide();
			jQuery("#save_tmlsetting").show();
		}
	});
}

	// start pulse on page load
	function pulseEff() {
	   jQuery('#shortcode').fadeOut(600).fadeIn(600);
	};
	var Interval;
	Interval = setInterval(pulseEff,1500);

	// stop pulse
	function pulseOff() {
		clearInterval(Interval);
	}
	// start pulse
	function pulseStart() {
		Interval = setInterval(pulseEff,1500);
	}

// testimonial img start
	var testimonial_carousel_design = jQuery("#testimonial_carousel_design option:selected").val();
	if(testimonial_carousel_design == "template1") {
		jQuery(".temp_1").show();
		jQuery(".temp_2").hide();
		jQuery(".temp_3").hide();
		jQuery(".temp_4").hide();
	}
	if(testimonial_carousel_design == "template2") {
		jQuery(".temp_1").hide();
		jQuery(".temp_2").show();
		jQuery(".temp_3").hide();
		jQuery(".temp_4").hide();
	}
	if(testimonial_carousel_design == "template3") {
		jQuery(".temp_1").hide();
		jQuery(".temp_2").hide();
		jQuery(".temp_3").show();
		jQuery(".temp_4").hide();
	}
	if(testimonial_carousel_design == "template4") {
		jQuery(".temp_1").hide();
		jQuery(".temp_2").hide();
		jQuery(".temp_3").hide();
		jQuery(".temp_4").show();
	}
	
	jQuery(document).ready(function(){
		jQuery('#testimonial_carousel_design').change(function() {
			var testimonial_carousel_design = jQuery('#testimonial_carousel_design').val();
			if(testimonial_carousel_design == "template1") {
				jQuery(".temp_1").show();
				jQuery(".temp_2").hide();
				jQuery(".temp_3").hide();
				jQuery(".temp_4").hide();
			};
			if(testimonial_carousel_design == "template2") {
				jQuery(".temp_1").hide();
				jQuery(".temp_2").show();
				jQuery(".temp_3").hide();
				jQuery(".temp_4").hide();
			};
			if(testimonial_carousel_design == "template3") {
				jQuery(".temp_1").hide();
				jQuery(".temp_2").hide();
				jQuery(".temp_3").show();
				jQuery(".temp_4").hide();
			};
			if(testimonial_carousel_design == "template4") {
				jQuery(".temp_1").hide();
				jQuery(".temp_2").hide();
				jQuery(".temp_3").hide();
				jQuery(".temp_4").show();
			};
		});
	});

///range bar
	var testimonial_column_layout = document.getElementById("testimonial_column_layout");
		var testimonial_column = document.getElementById("testimonial_column");
		testimonial_column.innerHTML = testimonial_column_layout.value;
		testimonial_column_layout.oninput = function() {
		  testimonial_column.innerHTML = this.value;
	}
	
	// tab
		jQuery("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		e.preventDefault();
		jQuery(this).siblings('a.active').removeClass("active");
		jQuery(this).addClass("active");
		var index = jQuery(this).index();
		jQuery("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		jQuery("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
		});
</script>
