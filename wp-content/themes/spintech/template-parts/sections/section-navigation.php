<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
 <header id="main-header" class="main-header">
<?php do_action( 'spintech_above_header');  ?>
        <!--===// Start: Navigation Wrapper
        =================================-->
        <div class="navigation-wrapper">
            <!--===// Start: Main Desktop Navigation
            =================================-->
            <div class="main-navigation-area d-none d-lg-block">
                <div class="main-navigation <?php echo esc_attr(spintech_sticky_menu()); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 my-auto">
                                <div class="logo">
                                    <?php
										if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<h4 class="site-title">
												<?php 
													echo esc_html(get_bloginfo('name'));
												?>
											</h4>
										</a>	
									<?php 						
										}
									?>
									<?php
										$spintech_site_desc = get_bloginfo( 'description');
										if ($spintech_site_desc) : ?>
											<p class="site-description"><?php echo esc_html($spintech_site_desc); ?></p>
									<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-10 my-auto">
                                <nav class="navbar-area">
                                    <div class="main-navbar">
                                        <?php 
											wp_nav_menu( 
												array(  
													'theme_location' => 'primary_menu',
													'container'  => '',
													'menu_class' => 'main-menu',
													'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
													'walker' => new WP_Bootstrap_Navwalker()
													 ) 
												);
										?>                         
                                    </div>
                                    <div class="main-menu-right">
                                        <ul class="menu-right-list">
											<?php 
												$spintech_hs_nav_search		=	get_theme_mod('hs_nav_search','1');
											?>	
											<?php if($spintech_hs_nav_search == '1') { ?>
												<li class="search-button">
													<button type="button" id="header-search-toggle" class="header-search-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Search Popup', 'spintech' ); ?>"><i class="fa fa-search"></i></button>
												</li>
											<?php } ?>
											<?php 
											$spintech_hs_nav_contact	=	get_theme_mod('hs_nav_contact');
											$spintech_nav_contact_icon	=	get_theme_mod('nav_contact_icon');
											$spintech_nav_contact_ttl	=	get_theme_mod('nav_contact_ttl');
											$spintech_nav_contact_text	=	get_theme_mod('nav_contact_text');
											if($spintech_hs_nav_contact == '1') {
											?>	
												<li class="widget-list">
													<aside class="widget widget-contact">
														<div class="contact-area">
															<div class="contact-icon">
																<div class="contact-corn">
                                                                    <?php if ( ! empty( $spintech_nav_contact_icon ) ) : ?>
                                                                    <i class="fa <?php echo esc_attr( $spintech_nav_contact_icon ); ?>"></i>
                                                                    <?php else : ?>
                                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chat-icon.png">
                                                                    <?php endif; ?>
                                                                </div>
															</div>
															<div class="contact-info">
																<h6 class="title"><?php echo esc_html( $spintech_nav_contact_ttl ); ?></h6>
																<p class="text"><a href="tel:<?php echo esc_html($spintech_nav_contact_text); ?>"><?php echo esc_html( $spintech_nav_contact_text ); ?></a></p>
															</div>
														</div>
													</aside>
												</li>
											<?php } ?>
                                        </ul>                            
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===// End:  Main Desktop Navigation
            =================================-->
            <!--===// Start: Main Mobile Navigation
            =================================-->
            <div class="main-mobile-nav <?php echo esc_attr(spintech_sticky_menu()); ?>"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-mobile-menu">
                                <div class="mobile-logo">
                                    <div class="logo">
                                       <?php
											if(has_custom_logo())
											{	
												the_custom_logo();
											}
											else { 
											?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<h4 class="site-title">
													<?php 
														echo esc_html(bloginfo('name'));
													?>
												</h4>
											</a>	
										<?php 						
											}
										?>
										<?php
											$spintech_site_desc = get_bloginfo( 'description');
											if ($spintech_site_desc) : ?>
												<p class="site-description"><?php echo esc_html($spintech_site_desc); ?></p>
										<?php endif; ?>
									</div>
                                </div>
                                <div class="menu-collapse-wrap">
                                    <div class="hamburger-menu">
                                        <button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e( 'Menu Collaped', 'spintech' ); ?>">
                                            <div class="top-bun"></div>
                                            <div class="meat"></div>
                                            <div class="bottom-bun"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-mobile-wrapper">
                                    <div id="mobile-menu-build" class="main-mobile-build">
                                        <button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e( 'Header Close Menu', 'spintech' ); ?>"></button>
                                    </div>
                                    <div class="main-mobile-overlay" tabindex="-1"></div>
                                </div>
                                <?php if ( function_exists( 'burger_companion_activated' ) ) { ?>
                                <div class="header-above-btn">
                                    <button type="button" class="header-above-collapse" aria-label="<?php esc_attr_e( 'Header Above Collapse', 'spintech' ); ?>"><span></span></button>
                                </div>
                                <div class="header-above-wrapper">
                                    <div id="header-above-bar" class="header-above-bar"></div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <!--===// End: Main Mobile Navigation
            =================================-->
        </div>
        <!--===// End: Navigation Wrapper
        =================================-->
        <!--===// Start: Header Search PopUp
        =================================-->
        <div class="header-search-popup">
            <div class="header-search-flex">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'spintech' ); ?>">
                    <input type="search" class="form-control header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'spintech' ); ?>" name="s" id="search">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
                <button type="button" id="header-search-close" class="close-style header-search-close" aria-label="<?php esc_attr_e( 'Search Popup Close', 'spintech' ); ?>"></button>
            </div>
        </div>
        <!--===// End: Header Search PopUp
        =================================-->
    </header>
    <!-- End: Main Header
    =================================-->