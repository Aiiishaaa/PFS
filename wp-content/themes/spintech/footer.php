<!--===// Start: Footer
    =================================-->
    <footer id="footer-section" class="footer-section main-footer">
		<?php  if ( is_active_sidebar( 'spintech-footer-widget-area' ) ) { ?>	
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<?php  dynamic_sidebar( 'spintech-footer-widget-area' ); ?>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php 
			$footer_btm_logo_img		=	get_theme_mod('footer_btm_logo_img');
			$footer_copyright 			= get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
			$hs_footer_btm_menu		=	get_theme_mod('hs_footer_btm_menu','1');
		?>	
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6 col-12 text-lg-left text-md-left text-center">
						<?php  if ( ! empty( $footer_btm_logo_img ) ){ ?>
							<aside class="widget widget_text">
								<div class="textwidget">
									<div class="logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($footer_btm_logo_img); ?>" alt="Spintech"></a>
									</div>
								</div>
							</aside>
						<?php } ?>		
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-lg-center text-md-right text-center"> 
						<?php  if ( ! empty( $footer_copyright ) ){ ?>
							<?php 	
								$spintech_copyright_allowed_tags = array(
									'[current_year]' => date_i18n('Y'),
									'[site_title]'   => get_bloginfo('name'),
									'[theme_author]' => sprintf(__('<a href="https://burgerthemes.com/spintech-free/" target="_blank">Spintech WordPress Theme</a>', 'spintech')),
								);
							?>                          
							<div class="copyright-text">
								<?php
									echo apply_filters('spintech_footer_copyright', wp_kses_post(spintech_str_replace_assoc($spintech_copyright_allowed_tags, $footer_copyright)));
								?>
							</div>
						<?php } ?>	
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-right text-center">
						<?php if ($hs_footer_btm_menu == '1') {?>
							<aside class="widget widget_nav_menu">
								<div class="menu-pages-container">
									<?php 
										wp_nav_menu( 
											array(  
												'theme_location' => 'footer_menu',
												'container'  => '',
												'menu_class' => 'menu',
												'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
												'walker' => new WP_Bootstrap_Navwalker()
												 ) 
											);
									?>   
								</div>
							</aside>
						<?php } ?>	
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Footer
    =================================-->

    <!-- Scrolling Up -->	
	<button type="button" class="scrollingUp scrolling-btn" aria-label="scrollingUp"><i class="fa fa-angle-up"></i></button>
</div>
</div>	
<?php wp_footer(); ?>
</body>
</html>
