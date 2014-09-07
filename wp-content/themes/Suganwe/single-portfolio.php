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

    <?php 
    while (have_posts()) :
    the_post();
    ?>
            
    <div class="container worksajax">
    <a class="close" href="#"><i class="icon-remove-sign"></i></a>
    <div class="row">
	 <?php if ( has_post_format( 'video' )) { ?>
     	<div class="span6 video"> 
        	<iframe width="570" src="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'embed_post', true)); ?>?wmode=opaque;vq=hd720;rel=0;showinfo=0;controls=0" height="380"></iframe>   
        </div>
     <?php } else if( has_post_format( 'gallery' )) { ?>       
     <div class="span6 gallery-portfolio">
     	<?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_port', true)); ?>
     </div>
     
     <?php } else if( has_post_format( 'audio' )) { ?>
     <div class="span6 audio">
     <div class="audio-inner">
		 <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
         <h2 class="portajax-title"><?php the_title (); ?></h2> 
          <!--<span class="port-divide">/</span>
        <p class="portajax-client"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'client_name', true)); ?></p>-->
     </div>
     </div>
     <?php } else { ?>
     	<div class="span6 work-img"> 
            <div class="portajax-head">
                <h2 class="portajax-title"><?php the_title (); ?></h2>
                <!--<span class="port-divide">/</span>
                <p class="portajax-client"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'client_name', true)); ?></p>-->
            </div><!--/.portajax-head-->
            <?php  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
   			echo '<a href="' . $large_image_url[0] . '"  data-rel="prettyPhoto">';
			 ?>
            
                <i class="icon-plus-sign hovers"></i>
                <?php echo '<img src="' . $large_image_url[0] . '" alt="' . the_title_attribute('echo=0') . '" >'; ?>
            </a> 
      	</div>
      <!--/.span6-->
     <?php } ?>     
      
      <div class="span6">
            <div class="padding clearfix">
                <h2><?php the_title(); ?></h2>
              <?php the_excerpt(); ?>
              <div class="portajax-line clearfix"></div>
              <!--INUTILE<?php $taxonomy = 'portfolio_category'; $terms = get_terms($taxonomy);  ?>
              <p class="strong">Category: <span class="condensed"><?php $cats = array();  foreach ( $terms as $term ) { $cats[] =   $term->name ;   } echo implode(' ,', $cats);?></span></p>
              
              <p class="strong">Date: <span class="condensed"><?php the_time('F j, Y'); ?></span></p>
              <div class="spacing-20"></div>
              <a class="more" href="<?php the_permalink(); ?>">Découvrez la gamme <i class="icon-long-arrow-right"></i></a>
              <div class="spacing-40"></div>-->
            </div><!--/.padding-->
        </div>
        <!--/.span6--> 
      </div>
      <!--/.row-->
    </div>
    <!--/.worksajax-->
    <?php  endwhile; ?> 
    
    <!--SHOW IN SINGLE PORTFOLIO PAGE-->
    <?php 
    while (have_posts()) :
    the_post();
    ?>
            
    <div id="post-<?php  the_ID(); ?>" <?php  post_class('container single-portfolio white-bg'); ?>>
    <div class="row dark-bg">
	 <?php if ( has_post_format( 'video' )) { ?>
     	<div class="span8 video"> 
        	<iframe width="570" src="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'embed_post', true)); ?>?wmode=opaque;vq=hd720;rel=0;showinfo=0;controls=0" height="380"></iframe>   
        	<div class="padding white-bg clearfix">
                <p class="project-desc">Les autres photo de la gamme :</p>
                <span class="single-line clearfix"></span>
                <?php the_content(); ?>
        	</div>
        </div>
        
     <?php } else if( has_post_format( 'gallery' )) { ?>       
     <div class="span8 gallery-portfolio">
     	<?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_port', true)); ?>
        <div class="padding white-bg clearfix">
                <p class="project-desc">Les autres photos de la gamme :</p>
                <span class="single-line clearfix"></span>
                <?php the_content(); ?>
        </div>
     </div>
     
     <?php } else if( has_post_format( 'audio' )) { ?>
     <div class="span8 audio">
         <div class="audio-inner">
             <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
             <h2 class="portajax-title"><?php the_title (); ?></h2> 
             <!--<span class="port-divide">/</span>
             <p class="portajax-client"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'client_name', true)); ?></p>-->
         </div>
     	 <div class="padding white-bg clearfix">
                <p class="project-desc">Les autre photos de la gamme :</p>
                <span class="single-line clearfix"></span>
                <?php the_content(); ?>
         </div>
     </div>
     <?php } else { ?>
     	<div class="span8">
        	<div class="work-img clearfix"> 
				<?php  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                echo '<a href="' . $large_image_url[0] . '"  data-rel="prettyPhoto">';
                 ?>
                
                    <i class="icon-plus-sign hovers"></i>
                    <?php echo '<img src="' . $large_image_url[0] . '" alt="' . the_title_attribute('echo=0') . '" >'; ?>
                </a> 
            </div>
            <div class="padding white-bg clearfix">
                <p class="project-desc">Les autre photos de la gamme :</p>
                <span class="single-line clearfix"></span>
                <?php the_content(); ?>
            </div>
      	</div>
      <!--/.span8-->
     <?php } ?>     
      
      <div class="span4">
      		<h2 class="single-port-title"><?php the_title (); ?></h2>
            <div class="padding clearfix">
              <div class="spacing-20"></div>
              <p class="project-detail">Détails de la gamme</p>
              <span class="single-line clearfix"></span>
              <?php $taxonomy = 'portfolio_category'; $terms = get_terms($taxonomy);  ?>
              <p class="strong">Nom de la gamme: 
              <span class="condensed"><?php $cats = array();  foreach ( $terms as $term ) { $cats[] =   $term->name ;   } echo implode(' ,', $cats);?></span></p>
              
              <!--<p class="strong">Date: 
              <span class="condensed"><?php the_time('F j, Y'); ?></span></p>-->
              
              <!--<p class="strong">Client: 
              <span class="condensed"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'client_name', true)); ?></span></p>-->
             
              
              <div class="spacing-40"></div>
            </div><!--/.padding-->
        </div>
        <!--/.span6--> 
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
    <?php  endwhile; ?> 
	<!--SHOW IN SINGLE PORTFOLIO PAGE END-->
    
    

<?php  get_footer(); ?>