<?php get_header(); ?>

	<div class="spacing-40 clearfix"></div>
	<div id="home" class="container top">
    	<div class="header">
            <div class="container header-inner">
                <div class="row">
                    <div class="span3 logo clearfix">
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'website_logo')) :  ?>
                            <a  href=" <?php  echo home_url(); ?> "><img src='<?php echo ot_get_option( 'website_logo' ); ?>' alt='logo'></a>
                        <?php  else :  ?>
                            <a  href=" <?php  echo home_url(); ?> "><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>" alt="logo"/></a>
						<?php endif ; endif; ?>
                    </div><!--/.logo-->
                    <div class="span9 menu clearfix">
                        <div class="menu-btn" data-target=".nav-collapse" data-toggle="collapse">
                            <span class="icon-collapse"></span>
                        </div>
                        <?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="navigation external nav-collapse %2$s">%3$s</ul>', 'theme_location' => 'header-menu-blog' ) ); ?>
                    </div><!--/.menu-->
                </div><!--/.row-->
            </div><!--/.header-inner-->
        </div><!--/.header-->
    </div><!--/home-->
       
            
	<div class="container page-404 center white-bg">
    	<div class="spacing-40 clearfix"></div>
        <h2>404!</h2>
        <h3><i class="icon-exclamation-sign"></i> Im sorry, page not found</h3>
        <p>return to  <a href="<?php echo home_url(); ?>">homepage</a> now!</p>
        <div class="spacing-40 clearfix"></div>
	</div><!--/.container-->
    

    
<?php get_footer(); ?> 