<?php 
	$spintech_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	
if($spintech_hs_breadcrumb == '1') {	
?>
	<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-heading">
								<h2>
									<?php if (function_exists('spintech_breadcrumb_title')) spintech_breadcrumb_title();?>
								</h2>
                        </div>
							<ol class="breadcrumb-list">
								<?php if (function_exists('spintech_breadcrumbs')) spintech_breadcrumbs();?>
							</ol>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
<?php } ?>	