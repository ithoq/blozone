<?php 
//color scheme
function rdn_color_scheme() {
		
		//menu background color
		$menu =  ot_get_option( 'menu_bg' );
        $menu_css = "
		.menu{
			background:$menu;
		}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'menu_bg' )) {           
        wp_add_inline_style( 'custom-style', $menu_css );
		}
		
		//footer shadow
		$footer =  ot_get_option( 'footer_shadow_color' );
        $footer_css = "
		.copyright{
			border-bottom-color:$footer;
		}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_shadow_color' )) {           
        wp_add_inline_style( 'custom-style', $footer_css );
		}
		
		//dark color scheme
        $dark =  ot_get_option( 'dark_bg' );
        $dark_css = "
		.dark-bg,.black-btn,.menu-btn:hover,.testi-img,.testi-icon,.white-btn{
		background: $dark;
		}
		.menu-btn,.white-btn:hover, .white-btn:focus{
			color:$dark;
		}
		.copyright{border-top-color:$dark;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'dark_bg' )) {           
        wp_add_inline_style( 'custom-style', $dark_css );
		}
		
		//light color scheme
		$light =  ot_get_option( 'light_bg' );
        $light_css = "
		.light-bg,#about .slide-nav,.team-social li a ,.service-icon ,.post-pagination a ,.tagcloud a,#wp-calendar caption{
		background: $light;
		}
		.strong,#about .slide-nav:hover, #about .slide-nav:focus,.port-title,.project-desc ,.news-title ,.white-bg .meta ,.contact-title,.social-icon li a,#respond h3,
		.comment-inner .comment-author,.comment-inner .comment-author a,#comments label ,.widgettitle{
			color:$light;
		}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'light_bg' )) {           
        wp_add_inline_style( 'custom-style', $light_css );
		}
		
		//color scheme(red)
		$color =  ot_get_option( 'color_scheme' );
        $color_css = "
		.color-bg,.black-btn:hover, .black-btn:focus,.logo,.navigation li a:hover, .navigation .current a ,.page-404 i,.scroll-icon ,.team-social li a:hover,.client li a:hover ,
		#services [class*='span']:hover .service-icon,#testimonial-slide:hover .testi-img, #testimonial-slide:hover .testi-icon ,.port-icon ,.portfolio-body .port-item:hover .padding,
		.port-line,.single-port-title ,.portajax-line,.news-line,.social-icon li a:hover,.blog-desc li i,.post-pagination a:hover,.widgettitle:after,.tagcloud a:hover ,.widget 
		.slickr-flickr-gallery img:hover{
		background: $color;
		}
		.title-page span,a,.motto h2 span,.about-icon,.team-title,.color-title,.testi-author,.nav-testi li a:hover ,.portajax-title,
		.news-icon ,.contact-title span,.blog-desc li,.comment-inner .comment-meta ,.widget a:hover{
			color:$color;
		}
		#MyContactForm .wpcf7-submit:hover,#comments #submit {color:$color !important;border-color:$color !important;}
		.blog-desc li {border-bottom-color:$color;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme' )) {           
        wp_add_inline_style( 'custom-style', $color_css );
		}
		
		//dark red scheme
		$dark_color =  ot_get_option( 'dark_color_scheme' );
        $dark_css = "
		a:hover, a:focus,.darker-title {
			color:$dark_color;
		}
		#comments #submit:hover {color:$dark_color !important;border-color:$dark_color !important;}
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'dark_color_scheme' )) {           
        wp_add_inline_style( 'custom-style', $dark_css );
		}
		 
}