<?php
/*
* Template Name: Suganwe Fullwidth Homepage
* Description: Suganwe Homepage
*/
get_header(); ?>
 
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
                        <?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="navigation nav-collapse %2$s">%3$s</ul>', 'theme_location' => 'header-menu' ) ); ?>
                    </div><!--/.menu-->
                </div><!--/.row-->
            </div><!--/.header-inner-->
        </div><!--/.header-->
    </div><!--/home-->
        
     
    <div class="container home-slider">
    	<div class="overlay"></div>
        <ul class="slider">
        <!--SLIDER LOOP HERE-->
          <?php
                wp_enqueue_script( 'rdn_slider_home', get_template_directory_uri() . '/js/slider-home.js',array(),'', 'in_footer');
                /* get the slider array */
                $slides = ot_get_option( 'slider_home', array() );
                
                if ( ! empty( $slides ) ) {
                    foreach( $slides as $slide ) {
                        echo '
                  <li>
                    <img src="' . $slide['slider_homeimage'] . '" alt="' . $slide['title'] . '" />
                  </li>';
                    }
        
                }
        
          ?>
        <!--SLIDER LOOP END-->
        </ul>
        
        <!--WELCOME TEXT START-->
        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'welcome_text_title')  || ot_get_option( 'welcome_text_description') 
		|| ot_get_option( 'welcome_text_button_link') && ot_get_option( 'welcome_text_button')  ) : ?>
        
        <div class="offset6 span6 motto">
        	<div class="padding clearfix">
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'welcome_text_title')) :  
				echo '<h2> '.ot_get_option( 'welcome_text_title' ) .'</h2>
					  <div class="motto-line clearfix"></div>'; 
				endif ; endif; ?>
                
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'welcome_text_description')) :  echo '<p> '.ot_get_option( 'welcome_text_description' ).' </p>'; 
				endif ; endif; ?>
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'welcome_text_button') && ot_get_option( 'welcome_text_button_link') ) : ?>
                <a class="black-btn move-to" href="<?php echo ot_get_option( 'welcome_text_button_link' ); ?>">
					<?php echo ot_get_option( 'welcome_text_button' ); ?>
                </a>
                <?php endif ; endif; ?>
            </div><!--/.padding-->
        </div><!--/.span6-->
        
        <?php endif ;  endif; ?>
        <!--WELCOME TEXT END-->
        
    </div><!--/.slider-->
    
    <!--ABOUT SECTION START-->
    <div id="about" class="container">
    	<div class="row dark-bg">
        	<div class="span6 big-text">
                <div class="padding clearfix">
                	<div class="spacing-100 clearfix"></div>
                    <div class="spacing-40 clearfix"></div>
                    <h2 class="title-page">
                    	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'heading_title_about')) :  echo ot_get_option( 'heading_title_about' ); endif ; endif; ?>
                    </h2>
                </div><!--/.padding-->
            </div><!--/.dark-bg-->
            <div class="span6 color-bg">
            	<div class="padding clearfix">
                    <div  id="about-slide" class="carousel slide">
                        <div class="carousel-inner" >
                             <?php
									/* get the slider description array */
									$slides_about = ot_get_option( 'slider_about_desc', array() );
									
									if ( ! empty( $slides_about ) ) {
										foreach( $slides_about as $slide_about ) {
											echo '
									  <div class="item">
									  	<i class="' . $slide_about['about_desc_icon'] . ' about-icon"></i>
										<h3 class="title-about">' . $slide_about['title'] . '</h3>
										<p class="strong">' . $slide_about['about_desc_list_bold'] . '</p>
										<p>' . $slide_about['about_desc_normal'] . '</p>
										<div class="spacing-40 clearfix"></div>
									  </div>';
										}
							
									}
							
							  ?>
                              <?php
									/* get the slider video array */
									$slides_av = ot_get_option( 'slider_about_video', array() );
									
									if ( ! empty( $slides_av ) ) {
										foreach( $slides_av as $slide_av ) {
											echo '
									  <div class="item video">
									  	<i class="' . $slide_av['about_video_icon'] . ' about-icon"></i>
										<h3 class="title-about">' . $slide_av['title'] . '</h3>
										<iframe width="570" src="' . $slide_av['about_video_link'] . '" height="320"></iframe> 
										<div class="spacing-40 clearfix"></div>
									  </div>';
										}
							
									}
							
							  ?>
                            
                             
                        </div><!--/.carousel-inner-->
                    </div><!--/.carousel-->
                    <!-- Carousel nav -->
                        <a class="slide-nav inleft" href="#about-slide" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="slide-nav inright" href="#about-slide" data-slide="next"><i class="icon-angle-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.color-bg-->
        </div><!--/.row-->
    </div><!--/about-->
    <!--ABOUT SECTION END-->
     
    <!--TEAM SECTION START-->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'team_list')) : ?>
    <div class="container team">
    	<div class="row">
			<?php
                /* get the slider video array */
                $teamlist = ot_get_option( 'team_list', array() );
                
                if ( ! empty( $teamlist ) ) {
                    foreach( $teamlist as $teams ) {
                        echo '
						<div class="span4 team-inner">
							<div class="team-top bg-dark  clearfix">
								<img class="team-img" alt="' . $teams['title'] . '" src="' . $teams['image_team'] . '">
								<div class="team-name clearfix">
									<div class="padding">
										<h3 class="team-title">' . $teams['title'] . '</h3>
										<p class="position">' . $teams['team_position'] . '</p> 
										<i class="' . $teams['team_icon'] . ' scroll-icon"></i>
									</div>
								</div>
							</div> 
							<div class="team-bottom clearfix">
								<div class="padding team-text clearfix">
								<p class="strong">' . $teams['team_bold'] . '</p>
								<p class="team-desc">' . $teams['team_normal'] . '</p> 
								<div class="spacing-20"></div>
								<ul class="team-social">'; ?>
									<?php if ($teams['twitter_team'] ) :   ?>
                                        <li><a href='<?php echo $teams['twitter_team']; ?>' target="_blank"><i class='icon-twitter'></i></a></li>
                                    <?php endif ; ?> 
                                    <?php if ($teams['facebook_team'] ) :   ?>
                                        <li><a href='<?php echo $teams['facebook_team']; ?>' target="_blank"><i class='icon-facebook'></i></a></li>
                                    <?php endif ; ?> 
                                    <?php if ($teams['google_team'] ) :   ?>
                                        <li><a href='<?php echo $teams['google_team']; ?>' target="_blank"><i class='icon-google-plus'></i></a></li>
                                    <?php endif ; ?> 
                                    <?php if ($teams['dribble_team'] ) :   ?>
                                        <li><a href='<?php echo $teams['dribble_team']; ?>' target="_blank"><i class='icon-dribble'></i></a></li>
                                    <?php endif ; ?> 
                                    <?php if ($teams['flickr_team'] ) :   ?>
                                        <li><a href='<?php echo $teams['flickr_team']; ?>' target="_blank"><i class='icon-flickr'></i></a></li>
                                    <?php endif ; ?> 
								<?php echo'
								</ul>
								</div>         	
							</div>
							<img alt="bg" src="'.get_template_directory_uri().'/images/team/team-bg.jpg"> 
						</div>
                             ';
                    }
            
                }
        
            ?>
            
        </div><!--/.row-->
    </div><!--/.team-->
    <?php endif ; endif; ?>
    <!--TEAM SECTION END-->

    <!--SERVICES SECTION START-->
    <div id="services" class="container">
    	<!--SERVICES LIST START-->
    	<div class="row">
    	<div class="clearfix dark-bg">
        	<div class="span5 big-text devis">
                <div class="padding clearfix">
                    <div class="spacing-60 clearfix"></div>
                    <h2 class="title-page">
						<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'services_head_title')) :  echo ot_get_option( 'services_head_title' ); endif ; endif; ?>
                    </h2>
                </div><!--/.padding-->
            </div><!--/.span5-->
            
            <?php
			$services = ot_get_option( 'services_list', array() );
			foreach ($services as $service) {
				if ($service === reset($services)) {
					// first
					echo'
						<div class="span7 white-bg">
							<div class="padding clearfix">
								<h3 class="color-title"><i class="service-icon ' . $service['services_icon'] . '"></i> ' . $service['title'] . '</h3>
								<p class="border-top strong">' . $service['services_bold'] . '</p>
								<p>' . $service['services_normal'] . '.</p>
								<div class="spacing-40 clearfix"></div>
							</div>
						</div>
					</div>
					';
				} else if ($service === end($services)) {
					// last
					echo'
					<div class="clearfix"></div>
					<div class="clearfix color-bg">
					<div class="span7 white-bg">
						<div class="padding clearfix">
							<h3 class="color-title"><i class="service-icon ' . $service['services_icon'] . '"></i> ' . $service['title'] . '</h3>
							<p class="border-top strong">' . $service['services_bold'] . '</p>
							<p>' . $service['services_normal'] . '.</p>
							<div class="spacing-40 clearfix"></div>
						</div>
					</div>
					';
				} else {
					echo'
					<div class="span6 white-bg">
						<div class="padding clearfix">
							<h3 class="color-title"><i class="service-icon ' . $service['services_icon'] . '"></i> ' . $service['title'] . '</h3>
							<p class="border-top strong">' . $service['services_bold'] . '</p>
							<p>' . $service['services_normal'] . '.</p>
							<div class="spacing-40 clearfix"></div>
						</div>
					</div>
					';
				}
			}
			?>
            
            <div class="span5 big-text">
            	<div class="padding clearfix">
                	<div class="spacing-100 clearfix"></div>
                	<a href="<?php  echo ot_get_option( 'services_banner_link' ); ?>" class="darker-title move-to"><?php  echo ot_get_option( 'services_banner_text' ); ?></a>
                </div><!--/.padding-->
            </div><!--/.span5-->
            </div><!--/.color-bg-->
        </div><!--/.row-->
        <!--SERVICES LIST END-->
         
        <!--TESTIMONIAL START-->
        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'testi_list')) : ?>
        <div class="row light-bg">
        	<div class="span12">
            	<div class="padding clearfix">
            		<ul id="testimonial-slide" class="clearfix">
                    	<?php
							 /* get the testimonial list */
							 $testimons = ot_get_option( 'testi_list', array() );
							 
							 if ( ! empty( $testimons ) ) {
								 foreach( $testimons as $testi ) {
									 echo '
									<li class="clearfix">
										<div  class="testi-img">
											<img alt="' . $testi['title'] . '" src="' . $testi['testi_image'] . '">
											<i class="icon-comment testi-icon"></i>
										</div>
										<div class="testi-inner">
											<div class="spacing-40 clearfix"></div>
											<p class="testi-comment">' . $testi['testi_text'] . '!</p>
											<p class="testi-author">' . $testi['title'] . '</p>
											<p class="testi-position">/ ' . $testi['testi_position'] . '</p>
										</div>
									</li>
									';
								 }
							 }				
						?>
                           
                        
                    </ul><!--/testimonial-slide-->
            	</div><!--/.padding-->        
            </div><!--/.span12-->
        </div><!--/.light-bg-->
        <?php  endif ; endif; ?> 
        <!--TESTIMONIAL END-->
          
    </div><!--/services-->
    <!--SERVICES SECTION END-->
    
    <div id="portfolio" class="container">
    	<div class="row dark-bg">
        	<div class="span5 big-text">
                <div class="padding clearfix">
                    <div class="spacing-70 clearfix"></div>
                    <h2 class="title-page">
						<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'portfolio_head_title')) :  echo ot_get_option( 'portfolio_head_title' ); endif ; endif; ?>
                    </h2>
                </div><!--/.padding-->
            </div><!--/.span5-->
            <div class="span7 color-bg">
            	<div class="padding clearfix">
                    <div class="spacing-100 clearfix"></div>
                    <div class="spacing-20 clearfix"></div>
                    <ul class="port-filter">
                    	<!--<li><a class="white-btn" data-filter="*" href="#">All</a></li>-->
                    	<?php
						$taxonomy = 'portfolio_category';
						$terms = get_terms($taxonomy, 'orderby=slug'); // Get all terms of a taxonomy						
						//var_dump($terms);
						if ( $terms && !is_wp_error( $terms ) ) :
							foreach ( $terms as $term ) { ?>
                                	<li><a class="white-btn" data-filter=".<?php echo  strtolower(preg_replace('/\s+/', '-', $term->name)); ?>" href="#">
									<?php echo $term->name; ?></a></li>
								<?php } 
						endif;?>
                    </ul>
                    <div class="spacing-70 clearfix"></div>
                </div><!--/.padding-->
            </div><!--/.color-bg-->
       </div><!---/.dark-bg-->
       
       <div class="portfolio-body row clearfix">
       			<!--PORTFOLIO LOOP START-->
				<?php  
					$ports = new WP_Query(array(  
							'post_type' =>  'portfolio',  
							'posts_per_page'  =>'-1',
							//'portfolio_category' => 'apremont'
						)  
					);  
					
				if ($ports->have_posts()) : while  ($ports->have_posts()) : $ports->the_post();
					 ?>
                     <?php $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
					 //echo "<pre>" . var_dump(the_taxonomies()) . "</pre>";
					 //$taxo = get_the_taxonomies();
					 //var_dump($taxo);
					 //var_dump(preg_match("/apremont/i", $taxo['portfolio_category']));
					/*if(preg_match("/apremont/i", $taxo['portfolio_category'])) {*/ ?> 
					<div  id="post-<?php the_ID(); ?>" 
                    class="span3 port-item  <?php foreach ($terms as $term) { echo  strtolower(preg_replace('/\s+/', '-', $term->name)). ' '; } ?>
                    <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?> ">
                        <a data-link="<?php the_permalink(); ?>" href="#">
                        	<?php  if ( has_post_format( 'video' )) { ?>
                            <i class="icon-star-half-full port-icon"></i>
                            <?php } else if( has_post_format( 'gallery' )) { ?>
                            <i class="icon-moon port-icon"></i>
                            <?php } else if( has_post_format( 'audio' )) { ?>
                            <i class="icon-headphones port-icon"></i>
                            <?php } else { ?>
                            <i class="icon-sun port-icon"></i>
                            <?php } ?>
                            <?php the_post_thumbnail(); ?>
                            <div class="padding white-bg">
                                <h3 class="port-title"><?php the_title(); ?></h3>
                                <!--<div class="port-line clearfix"></div>
                                <p class="port-client"><span>Client:</span> <?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'client_name', true)); ?></p>-->
                            </div><!--/.padding-->
                        </a>
					
                   
					<?php 
                    
					
					echo '</div>';
					//}
					  
				endwhile; endif; wp_reset_query();
				?>
                <!--PORTFOLIO LOOP END-->
       </div><!--/.portfolio-body-->
        
        <div id="workslist" class="clearfix">
             <div class="container worksajax light-bg">
             </div><!--/.worksajax -->
        </div><!--/workslist-->
        
    </div><!--portfolio-->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'news_head_title')) : ?>
    <div id="news" class="container">
    	<div class="row dark-bg">
        	<div class="span4  big-text news-inner">
                <div class="padding clearfix">
                   <div class="spacing-100 clearfix"></div>
                   <div class="spacing-70 clearfix"></div>
                   <h2 class="title-page">
				   		<?php   echo ot_get_option( 'news_head_title' ); ?>
                   </h2>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
            
        	<!-- Start the Loop. -->
			 <?php $i = 1 ; ?>
             <?php query_posts('posts_per_page=3'); ?>
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ($i == 1){ ?>
            <div  id="post-<?php the_ID(); ?>"  <?php post_class('span8 white-bg news-inner'); ?>>
                <div class="padding clearfix">
                	<i class="icon-edit news-icon"></i>
                    <p class="meta"> <?php echo the_time('M '); ?><span><?php echo the_time('j '); ?></span></p>
                    <?php the_post_thumbnail(); ?>
                    <div class="spacing-40 clearfix"></div>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                    <div class="news-line clearfix"></div>
                    <p class="news-desc"><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>"  class="more">En savoir plus <i class="icon-long-arrow-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
            
            <?php } else { ?>
            
            <div id="post-<?php the_ID(); ?>"  <?php post_class('span6 white-bg news-inner'); ?>>
                <div class="padding clearfix">
                	<i class="icon-edit news-icon"></i>
                    <p class="meta"> <?php echo the_time('M '); ?><span><?php echo the_time('j '); ?></span></p>
                    <?php the_post_thumbnail(); ?>
                    <div class="spacing-40 clearfix"></div>
                    <h3 class="news-title"><?php the_title(); ?></h3>
                    <div class="news-line clearfix"></div>
                    <p class="news-desc"><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>"  class="more">Read more <i class="icon-long-arrow-right"></i></a>
                </div><!--/.padding-->
            </div><!--/.news-inner-->
            
            <?php } ?>
            <?php $i++; endwhile; endif; ?>
            

        </div><!--/.row-->
    </div><!--/news-->
    <?php endif ; endif; ?>
    
    <div class="container light-bg twitter">
    	<div class="padding clearfix">
    		<div class="tweetfeed"><?php $textarea = ot_get_option( 'twitter_feed_place' ); echo do_shortcode( $textarea ); ?></div>
            <a class="white-btn strong" href="<?php echo ot_get_option( 'twitter_btn_link' ); ?>" target="_blank"><i class="icon-twitter"></i> <?php echo ot_get_option( 'twitter_btn_text' ); ?></a>
        </div><!--/.padding-->
    </div><!--/.twitter-->

 <!--CLIENT SECTION START-->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'client_list')) : ?>
    <div class="container light-bg">
    	<ul class="client">
        	<?php
				 /* get the client list */
				 $clients = ot_get_option( 'client_list', array() );
				 
				 if ( ! empty( $clients ) ) {
					 foreach( $clients as $client ) {
						 echo '
						<li><a href="' . $client['client_link'] . '" target="_blank"><img alt="' . $client['title'] . '" src="' . $client['client_image'] . '"></a></li>
						';
					 }
				 }				
			?>
        </ul>
    </div><!--/.client-->
	<?php endif ; endif; ?>
    <!--CLIENT SECTION END-->
    
    <div id="contact" class="container">
    	<div class="row dark-bg">
        	<div class="span4  big-text">
                <div class="padding clearfix">
                	<div class="spacing-10 clearfix"></div>
                    <h2 class="title-page">
						<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_head_title')) :  echo ot_get_option( 'contact_head_title' ); endif ; endif; ?>
                    </h2>
                    <div class="spacing-10 clearfix"></div>
                    <div id="MyContactForm">
                    	<?php $cform = ot_get_option( 'cform_shortcode' ); echo do_shortcode( $cform ); ?>
                	</div><!--form-wrapper-->
                </div><!--/.padding-->
            </div><!--/.span4-->
            <div class="span8 white-bg">
                <div class="padding clearfix">
                    <h3 class="contact-title">
						<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_detail_title')) :  echo ot_get_option( 'contact_detail_title' ); endif ; endif; ?>
                    </h3>
                    <div class="news-line clearfix"></div>
                    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_text')) :  echo ot_get_option( 'contact_text' ); endif ; endif; ?>
                    <div class="clearfix">
                        <div class="address">
                        	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_address')) :  ?>
                            	<p><span class="strong"><i class="icon-map-marker"></i>  Adresse :</span> <?php  echo ot_get_option( 'contact_address' ); ?></p>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_phone')) :  ?>
                            	<p><span class="strong"><i class="icon-phone"></i>  Téléphone :</span> <?php  echo ot_get_option( 'contact_phone' ); ?></p>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_fax')) :  ?>
                            	<p><span class="strong"><i class="icon-print"></i>  Fax :</span> <?php  echo ot_get_option( 'contact_fax' ); ?></p>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'contact_email')) :  ?>
                            	<p><span class="strong"><i class="icon-envelope-alt"></i>  Email :</span> <?php  echo ot_get_option( 'contact_email' ); ?></p>
                            <?php endif ; endif; ?>
                        </div><!--/.address-->
                        <ul class="social-icon">
                        	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_facebook')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_facebook' ); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_google_plus')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_google_plus' ); ?>"><i class="icon-google-plus"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_twitter')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_twitter' ); ?>"><i class="icon-twitter"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_dribble')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_dribble' ); ?>"><i class="icon-dribble"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_pinterest')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_pinterest' ); ?>"><i class="icon-pinterest"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_youtube')) :  ?>
                            	<li><a href="<?php  echo ot_get_option( 'social_youtube' ); ?>"><i class="icon-youtube"></i></a></li>
                            <?php endif ; endif; ?>
                            <!--ANOTHER SOCIAL ICON LIST-->
                            <?php
								 /* get the icon list */
								 $socials = ot_get_option( 'another_social_link', array() );
								 
								 if ( ! empty( $socials ) ) {
									 foreach( $socials as $social ) {
										 echo '
										 <li><a href="' . $social['own_link'] . '"><i class="' . $social['own_icon'] . '"></i></a></li>
										';
									 }
								 }				
							?>
                            <!--ANOTHER SOCIAL ICON LIST END-->
                            
                        </ul>
                    </div><!--/.clearfix-->
                    
                    <div class="spacing-40 clearfix"></div>
                    	<?php $gmap = ot_get_option( 'gmap_shortcode' ); echo do_shortcode( $gmap ); ?>
                    <div class="spacing-40 clearfix"></div>
                </div><!--/.padding-->
            </div><!--/.span8-->
            
        </div><!--/.dark-bg-->
    </div><!--/contact-->
    



<?php  get_footer(); ?>