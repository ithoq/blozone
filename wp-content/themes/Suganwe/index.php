<?php  get_header(); ?>

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
       
    <div class="blog-wrapper container">
    
    	<div class="row white-bg">
        	<div class="span8 white-bg">
				<?php 
                while (have_posts()) :
                the_post();
                ?>
                <div id="post-<?php the_ID(); ?>"  <?php post_class('blog-post white-bg'); ?>>
                    <div class="spacing-40 clearfix"></div>
                    <div class="padding clearfix">
                        <div class="blog-desc clearfix">
                            <ul>
                                <li><i class="icon-calendar"></i> <?php  the_time(get_option('date_format')); ?></li>
                                <li><i class="icon-file-text"></i> <?php the_category(','); ?></li>
                                <li><i class="icon-comments"></i><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></li>
                            </ul>
                        </div><!--/.blog-desc-->
                        
                        <?php the_post_thumbnail(); ?>
                        <div class="spacing-20 clearfix"></div>
                        <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="news-line clearfix"></div>
                        <div class="blog-inner no-border clearfix">
                            <div class="clearfix">
                                <?php the_excerpt(); ?>
                                <div class="spacing-20"></div>
                                <a class="more" href="<?php the_permalink(); ?>">En savoir plus...</a>
                            </div><!--/.clearfix-->
                        </div><!--/.blog-inner-->
                        
                        
                       
                        
                    </div><!--/.padding-->   
                </div><!--/.blog-post-->
                <?php  endwhile; ?>

				<div class="post-pagination padding clearfix">
                	<div class="pull-left"> <?php  previous_posts_link('&larr; Previous Page')  ?> </div>
                	<div class="pull-right"> <?php  next_posts_link('Next Page &rarr;','')  ?>  </div>
                </div>       
            </div><!--/.span8-->
            <?php get_sidebar(); ?>
            
            
        </div><!--/.row-->
    </div><!--/.blog-wrapper-->
    
<?php  get_footer(); ?>