<?php 
	
//script for single portfolio	
function rdn_single_portfolio() {
	if ( 'portfolio' == get_post_type() ) {
	wp_enqueue_script( 'rdn_single_portfolio', get_template_directory_uri() . '/js/single-portfolio.js',array(),'', 'in_footer');
	}   
} 

			

function rdn_about_portfolio() {
?>
		<script type="text/javascript">
					(function ($) {
					"use strict";
					
						//about slider setting
						<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'about_slider_delay')) :  ?>
						$('#about-slide').carousel({
							interval: <?php echo ot_get_option( 'about_slider_delay'); ?>
						})
					
						<?php  else :  ?>
						$('#about-slide').carousel({
							interval: 5000
						})
						<?php endif ; endif; ?>
						
						
						//portfolio ajax setting
						$(document).ready(function () {
							var hash = window.location.hash.substr(1);
							var href = $('.port-item a').each(function () {
								var href = $(this).attr('data-link');
								if (hash == href.substr(0, href.length - 5)) {
									var toLoad = hash + '.html .worksajax > *';
									$('.worksajax').load(toLoad)
								}
							});
						
							$('.port-item a').click(function () {
						
								var toLoad = $(this).attr('data-link') + ' .worksajax > *';
								$('.worksajax').slideUp('slow', loadContent);
						
								function loadContent() {
									$('.worksajax').load(toLoad, '', showNewContent)
								}
						
								function showNewContent() {
									$.getScript("<?php echo get_template_directory_uri(); ?>/js/portfolio.js");
									$('.worksajax').slideDown('slow');
						
								}
						
								return false;
						
						
							});
						
						});
					})(jQuery);
		</script>
<?php
}