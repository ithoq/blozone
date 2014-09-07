<?php

	add_action( 'after_setup_theme', 'suganwe_theme_setup' );

		function suganwe_theme_setup() {
			/* Add filters, actions, and theme-supported features. */
			//THEME SUPORT FUNCTION
			//add thumbnail
			add_theme_support( 'post-thumbnails' );
			//custom background
			add_theme_support( 'custom-background' );
			//post format
			add_theme_support( 'post-formats', array( 'aside', 'gallery' ,'quote', 'video', 'audio' , 'link') );
			//automatic feed
			add_theme_support( 'automatic-feed-links' );
			//add menu homepage and blog
			add_action( 'init', 'register_rdn_menu' );
			add_action( 'init', 'register_rdn_menu_blog' );
			
			//width content
			if ( ! isset( $content_width ) )$content_width = 1170;
			
			//THEME SCRIPT AND STYLES
			//theme default script and styles
			add_action('wp_enqueue_scripts', 'rdn_theme_scripts');
			add_action('wp_enqueue_scripts', 'rdn_theme_styles');
			//color scheme option styles
			add_action( 'wp_enqueue_scripts', 'rdn_color_scheme' );
			//preloader script and styles
			add_action( 'wp_enqueue_scripts', 'rdn_preloader_set' );
			add_action('wp_enqueue_scripts', 'rdn_preloader');
			//custom font styles
			add_action( 'wp_enqueue_scripts', 'rdn_fonts_custom' );  
			//portfolio styles and script
			add_action( 'wp_enqueue_scripts', 'rdn_single_portfolio' );
			//script for about slider and portfolio ajax
			add_action( 'wp_footer', 'rdn_about_portfolio' , 100);
			
			//CUSTOM FILTER
			//custom search setting
			add_filter( 'get_search_form', 'html5_search_form' );
			//custom excerpt
			add_filter( 'excerpt_length', 'rdn_excerpt_length', 10 );
			//remove [..] in excerpt
			add_filter('get_the_excerpt', 'trim_excerpt');
			//custom comment styles
			add_filter('comment_form_default_fields','wpsites_modify_comment_form_fields');
	}
	
	
	//add menu for homepage
	function register_rdn_menu() {
		register_nav_menu('header-menu',__( 'Main Menu in Homepage' ));
	}

	
	
	//add menu for blog
	function register_rdn_menu_blog() {
		register_nav_menu('header-menu-blog',__( 'Menu in Blog and Pages' ));
	}

	
	//adding sidebar widget
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
		'name' => 'Default Sidebar',
		'id' => 'default-sidebar','description' => 'Appears as the sidebar on blog and pages',
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}

	
	//THEME SCRIPTS & STYLES
	// include theme-script
	include('inc/theme-script.php');
	// include theme-styles
	include('inc/theme-style.php');
	//preloader setting
	include('inc/preloader.php');
	//color scheme styles
	include('inc/color-scheme.php');
	//single portfolio setting
	include('inc/single-portfolio.php');
	//custom font styles
	include('inc/custom-font.php');
	
	
	//include TGM activation
	include('inc/plugin-install.php');
	
	/* Replacing the default WordPress search form with an HTML5 version */
	function html5_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" > 
		<input type="search" placeholder="'.__("Search and hit enter...").'" value="' . get_search_query() . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" />
		</form>';
		return $form;
	}

	
	//custom excerpt function
	function rdn_excerpt_length( $length ) {
		return 40;
	}
	// Remove [...]
	function trim_excerpt($text) {
		$text = str_replace('[', '', $text);
		$text = str_replace(']', '', $text);
		return $text;
	}

	
	//comment include
	include('inc/comment-template.php');
	//remove read more link
	function remove_more_jump_link($link) {
		$offset = strpos($link, '#more-');
		
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}

		
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}

		return $link;
	}

	//custom comment form
	function wpsites_modify_comment_form_fields($fields){
		$req = get_option('require_name_email');
		$commenter = wp_get_current_commenter();
		$aria_req = ( $req ? " aria-required='true'" : '' ); 
		
		$fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'wpsites.net' ) . '</label> ' . 
		
		( $req ? '' : '' ) .
						
		'<input id="author" name="author" type="text" placeholder="Your Name ..." value="' . 
						
		esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
						
		$fields['email'] = '<p class="comment-form-email"><label for="email">' . __( 'Email', 'wpsites.net' ) . '</label> ' .
		
		( $req ? '' : '' ) .
		
		'<input id="email" name="email" type="text" placeholder="Your Email ..." value="' . 
		
		esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
		
		$fields['url'] = '<p class="comment-form-url"><label for="url">' . __( 'Website', 'wpsites.net' ) . '</label>' .
		
		'<input id="url" name="url" type="text" placeholder="Your Website ..." value="' . 
		
		esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>';
		
		return $fields;
	}

	

	
//adding optiontree into themes
	/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages. */
 add_filter( 'ot_show_pages', '__return_false' );
	/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.*/
 add_filter( 'ot_show_new_layout', '__return_false' );
	/**
 * Required: set 'ot_theme_mode' filter to true.*/
 add_filter( 'ot_theme_mode', '__return_true' );
	/**
 * Required: include OptionTree.*/
 load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
	/**
 * Theme Options*/
 load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );
	 
	 

 	
	
