<?php 
//preloader custom setting
function rdn_preloader_set() {
        $color =  ot_get_option( 'loader_bg' );
        $loader_bg = "
		#preloader{background: $color;}
		";   
		$img =  ot_get_option( 'loader_image' );
        $loader_img = "
		#status{background-image: url('$img');}
		";
		if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'loader_image' )) {           
        wp_add_inline_style( 'custom-style', $loader_img );
		} 
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'loader_bg' )) {           
        wp_add_inline_style( 'custom-style', $loader_bg );
		}
		 
}


function rdn_preloader() {
	$preload = ot_get_option( 'preloader_set' );
	if ( function_exists( 'ot_get_option' ) ) : if ($preload == 'show_home') :
		wp_enqueue_script( 'preloader', get_template_directory_uri() . '/js/loader.js',array(),'', 'in_footer');
		endif ;  endif;
	if ( function_exists( 'ot_get_option' ) ) : if ($preload == 'show_all') :
		wp_enqueue_script( 'preloader', get_template_directory_uri() . '/js/loader.js',array(),'', 'in_footer');
		endif ;  endif;
}    



