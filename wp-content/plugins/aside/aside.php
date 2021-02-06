<?php
/*
Plugin Name:	Aside widget
Plugin URI:	http://wordpress.org/extend/plugins/aside/
Description:	Display some page content in an aside.
Author:		Paul Reeve
Version:	0.9
Author URI:	http://www.pdjr.eu/paulreeve/
License:	GPL2

    Copyright 2010 Paul Reeve (email : preeve@pdjr.eu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2, 
    as published by the Free Software Foundation. 
    
    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    The license for this software can likely be found here: 
    http://www.gnu.org/licenses/gpl-2.0.html
    
*/

class Aside_Widget extends WP_Widget {

	function Aside_Widget() {
		$widget_ops = array('classname' => 'widget_aside', 'description' => __('Display some page-related content in a sidebar'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('aside', __('Aside'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		global $post;
		extract($args);

		if (!function_exists('widget_parse')) {
			function widget_parse($text) {
				ob_start(); eval('?>' . $text); $text = ob_get_contents(); ob_end_clean();
				return($text);
			}
		}

		if (is_array($asides = get_post_meta($post->ID, 'aside'))) {
			foreach ($asides as $aside) {
				if (strlen($aside) > 0) {
					switch ($aside[0]) {
                        			case '#' :
						case '!' :	$parts = explode(',', $aside); $prefix = ""; $suffix = "";
								switch (count($parts)) {
									case 3 :	$prefix = ($instance['parse'])?widget_parse($parts[1]):$parts[1];
											$suffix = ($instance['parse'])?widget_parse($parts[2]):$parts[2];
									case 1 :	switch ($parts[0][0]) {
												case '#' :	$id = substr($parts[0], 1);
														if ((ctype_digit($id)) && ($page = get_page($id))) {
															$aside = "<h2>" . $page->post_title . "</h2>" . wpautop($page->post_content);
				   										} else {
				       	    										$aside = "Aside: page " . $id . " not found";
														}
														break;
												case '!' :	$id = ((strlen($parts[0]) > 1) && ($parts[0][1] != '!'))?substr($parts[0], 1):substr($parts[0], 2);
														if (preg_match("/\<(div|DIV)([[:space:]])+(id|ID)\=(\"|')" . $id . "(\"|')(.*?)\<\/(div|DIV)\>/s", $post->post_content, $matches)) {
															$aside = $matches[0];
														} else {
															$aside = "Aside: div " . $id . " not found";
														}
														break;
				   							}
                                   							break;
									default :	$aside = "Aside: syntax error";
											break;
								}
				       	    			$aside = $prefix . $aside . $suffix;
								break;
                        			default :	if ($instance['parse']) { $aside = widget_parse($aside); }
								break;
					}
                		}
				echo $before_widget . $aside . $after_widget;
			}
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['parse'] = isset($new_instance['parse']);
		return $instance;
	}

	function form( $instance ) {
?>
		<p><input id="<?php echo $this->get_field_id('parse'); ?>" name="<?php echo $this->get_field_name('parse'); ?>" type="checkbox" <?php checked(isset($instance['parse']) ? $instance['parse'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('parse'); ?>"><?php _e('Parse PHP (embedded in &lt;?php...?&gt;)'); ?></label></p>
		<p>Specify output for this widget by including a custom field named 'aside' in a post/page</p>
<?php
	}

}

function aside_content_filter($text) {
	global $post;

	if (is_array($asides = get_post_meta($post->ID, 'aside'))) {
		foreach ($asides as $aside) {
			if ((strlen($aside) > 2) && ($aside[0] == '!') && ($aside[1] != '!')) {
				$parts = explode(',', $aside);
				$id = substr($parts[0], 1);
				$text = preg_replace("/\<(div|DIV)([[:space:]])+(id|ID)=(\"|')" . $id . "(\"|')/s", "<div id=\"$id\" style=\"display: none;\"", $text); 
			}
		}
	}
	return($text);
}

add_action('widgets_init', create_function('', 'return register_widget("Aside_Widget");'));
add_filter('the_content', 'aside_content_filter');
