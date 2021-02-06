<?php 
	$hs_blog					=	get_theme_mod('hs_blog','1');	
	$spintech_blog_title		= get_theme_mod('blog_title');
	$spintech_blog_subtitle		= get_theme_mod('blog_subtitle');
	$spintech_blog_desc			= get_theme_mod('blog_description');
	$spintech_blog_num			= get_theme_mod('blog_display_num','3');
	if($hs_blog == '1') {
?>
	<section id="post-section" class="post-section st-py-default home-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 mx-lg-auto mb-5 text-center">
                    <div class="heading-default wow fadeInUp">
                       <?php if ( ! empty( $spintech_blog_title ) ) : ?>
							 <span class="badge bg-primary ttl"><?php echo esc_html($spintech_blog_title); ?></span>
						<?php endif; ?>
						<?php if ( ! empty( $spintech_blog_subtitle ) ) : ?>		
							<h2><?php echo wp_kses_post($spintech_blog_subtitle); ?></h2>   							
						<?php endif; ?>	
						<?php if ( ! empty( $spintech_blog_desc ) ) : ?>		
							<p><?php echo esc_html($spintech_blog_desc); ?></p>    
						<?php endif; ?>	
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-5 wow fadeInUp">
				<?php 	
				$spintech_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $spintech_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
					$spintech_blog_wp_query = new WP_Query($spintech_blogs_args);
					if($spintech_blog_wp_query)
					{	
					while($spintech_blog_wp_query->have_posts()):$spintech_blog_wp_query->the_post(); ?>
                <div class="col">
                   <?php get_template_part('template-parts/content/content','page');  ?>
                </div>
				<?php 
					endwhile; 
					}
					wp_reset_postdata();
				?>
            </div>
        </div>
        <div class="shape10"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape10.png" alt="image"></div>
        <div class="shape28"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape28.png" alt="image"></div>
        <div class="shape25"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape25.png" alt="image"></div>
        <div class="shape2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape2.png" alt="image"></div>
        <div class="shape29"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape29.png" alt="image"></div>
        <div class="shape30"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape29.png" alt="image"></div>
        <div class="shape31"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape31.png" alt="image"></div>
        <div class="shape19"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/clipArt/shape19.png" alt="image"></div>
    </section>
<?php } ?>	