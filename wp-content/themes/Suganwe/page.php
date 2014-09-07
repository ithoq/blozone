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
            <?php 
            while (have_posts()) :
            the_post();
            ?>
            <div id="post-<?php the_ID(); ?>"  <?php post_class('blog-post span8 white-bg'); ?>>
            	<div class="spacing-40 clearfix"></div>
                <div class="padding clearfix">
                	<div class="blog-desc clearfix">
                        <ul>
                            <li><i class="icon-calendar"></i> <?php  the_time(get_option('date_format')); ?></li>
                            <li><i class="icon-comments"></i><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></li>
                        </ul>
                    </div><!--/.blog-desc-->
                    
                    <?php the_post_thumbnail(); ?>
                    <div class="spacing-20 clearfix"></div>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                    <div class="news-line clearfix"></div>
                    <div class="blog-inner clearfix">
                    	<div class="clearfix">
                    		<?php the_content(); ?>
                        </div><!--/.clearfix-->
                        <div class="post-footer clearfix">
                            <div class="tag-area clearfix">
                                <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                            </div><!--/.tag-area-->
                            <div class="share-area clearfix">
                                <?php if ( function_exists('show_share_buttons') ) {
                                echo do_shortcode('[ssba]');
                                } ?>
                            </div><!--/.share-area-->
                        </div><!--/.post-footer-->
                    
                        <div class="post-pager clearfix">
                    		<?php wp_link_pages('before=<p><span>Pages:</span> &after=</p>&next_or_number=number'); ?>
						</div>
                    </div><!--/.blog-inner-->
                
                	<?php if ( comments_open() ) { ?>
                    	<div id="comments" class="comments clearfix"><?php comments_template(); ?></div>
                    <?php } ?>
                    
                    <div class="post-pagination clearfix">
                        <div class="pull-left"><?php previous_post_link('%link','&larr; Previous Post', 'no'); ?></div>
						<div class="pull-right"><?php next_post_link('%link','Next Post &rarr;', 'no'); ?> </div>
                	</div>
                   
                    
            	</div><!--/.padding-->   
            </div><!--/.blog-post-->
           	<?php  endwhile; ?>
            
            <?php get_sidebar(); ?>
            
            
        </div><!--/.row-->
    </div><!--/.blog-wrapper-->
    
        
<?php  get_footer(); ?>