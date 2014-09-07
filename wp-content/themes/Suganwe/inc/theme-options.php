<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'Home Section'
      ),
      array(
        'id'          => 'about_option',
        'title'       => 'About Section'
      ),
      array(
        'id'          => 'team_section',
        'title'       => 'Team Section'
      ),
      array(
        'id'          => 'client_section',
        'title'       => 'Client Section'
      ),
      array(
        'id'          => 'services_section',
        'title'       => 'Services Section'
      ),
      array(
        'id'          => 'testimonial_section',
        'title'       => 'Testimonial Section'
      ),
      array(
        'id'          => 'portfolio_section',
        'title'       => 'Portfolio Section'
      ),
      array(
        'id'          => 'news_section',
        'title'       => 'News Section'
      ),
      array(
        'id'          => 'twitter_section',
        'title'       => 'Twitter Section'
      ),
      array(
        'id'          => 'contact_section',
        'title'       => 'Contact Section'
      ),
      array(
        'id'          => 'social_icon_link',
        'title'       => 'Social Icon Section'
      ),
      array(
        'id'          => 'google_map',
        'title'       => 'Google Map Section'
      ),
      array(
        'id'          => 'footer_section',
        'title'       => 'Footer Section'
      ),
      array(
        'id'          => 'preloader_section',
        'title'       => 'Preloader Section'
      ),
      array(
        'id'          => 'color_section',
        'title'       => 'Color Section'
      ),
      array(
        'id'          => 'font_section',
        'title'       => 'Font Setting Section'
      ),
      array(
        'id'          => 'custom_css_section',
        'title'       => 'Custom Css Section'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'website_logo',
        'label'       => 'Logo Website',
        'desc'        => 'Upload you website logo here. 
<br /><small><i>Recommended size 195x21pixel</i></small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'favicon_logo',
        'label'       => 'Favicon Logo',
        'desc'        => 'Insert your favicon logo here<br>
<small>Recommended size 50x50px</small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'touch_icon',
        'label'       => 'Touch Icon',
        'desc'        => 'Insert your touch logo here<br>
<small>Recommended size 130x130px</small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'slider_home',
        'label'       => 'Slider Setting',
        'desc'        => 'Set the slider for homepage. <br>
<small><i>Recommended size 1200x800px</i></small>',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'slider_homeimage',
            'label'       => 'Slider Image',
            'desc'        => 'Upload your slider image here',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'welcome_text_title',
        'label'       => 'Welcome Text Title',
        'desc'        => 'Input your welcome text title here
<br><small><i>use span tag for text color.</i></small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'welcome_text_description',
        'label'       => 'Welcome Text Description',
        'desc'        => 'Input your welcome text description here.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '3',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'welcome_text_button',
        'label'       => 'Welcome Text Button',
        'desc'        => 'Input your Text Button Here
<br><i>e.g: Find Out More</i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'welcome_text_button_link',
        'label'       => 'Welcome Text Button Link',
        'desc'        => 'Input your link for welcome text button.
<br><i>e.g: #about</i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'heading_title_about',
        'label'       => 'Heading Title for About section',
        'desc'        => 'Insert you heading title for About.<br>
<small><i>Use span tag for text color.</i></small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'slider_about_desc',
        'label'       => 'Slider for about section description',
        'desc'        => 'Insert the content for about section slider',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'about_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'about_desc_icon',
            'label'       => 'Icon',
            'desc'        => 'Input the icon for the title. eg: icon-play
<br><small>For icon list you can view it in <strong>http://fortawesome.github.io/Font-Awesome/icons</strong></small>',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'about_desc_list_bold',
            'label'       => 'Bold Text',
            'desc'        => 'Input your about bold text here',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '6',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'about_desc_normal',
            'label'       => 'Normal Text',
            'desc'        => 'Input your about normal text heretext',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '6',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'slider_about_video',
        'label'       => 'Slider for about section video type',
        'desc'        => 'Video/Screencast in about slider',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'about_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'about_video_icon',
            'label'       => 'Icon',
            'desc'        => 'insert icon',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'about_video_link',
            'label'       => 'Video Embed Link',
            'desc'        => 'Input your youtube/vimeo link here.<br>
<i><small>e.g: http://www.youtube.com/embed/kXkUj3xQJmU?wmode=opaque
<br>or http://player.vimeo.com/video/64078587?wmode=opaque</small></i><br>
<small><strong>never forget to add ?wmode=opaque after the link</strong></small>',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'about_slider_delay',
        'label'       => 'Slider delay time',
        'desc'        => 'Set delay time for slider in about section (in ms)<br>
input <strong>false</strong> if you dont want to auto cycle.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'team_list',
        'label'       => 'Team List',
        'desc'        => 'Create your team list in here.</br></br>
<strong>Please Noted:</strong></br>
<ul>
<small>
<li><strong>Title</strong> is for your team name.</li>
<li>Leave blank if you dont want use some of team social link.</li>
<li>For icon list you can view it in <strong>http://fortawesome.github.io/Font-Awesome/icons</strong></li>
<li>Try to create team list only in multiples of three</i>
</small>
</ul>',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'team_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'image_team',
            'label'       => 'Team Image/Photo',
            'desc'        => 'Your team Photo/Image<br>
<small>recommended size 768x768px</small>',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'team_position',
            'label'       => 'Team Position',
            'desc'        => 'Your team position',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'team_icon',
            'label'       => 'Team Icon',
            'desc'        => 'Your team icon',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'team_bold',
            'label'       => 'Team Bold Text',
            'desc'        => 'Team description in bold text',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '6',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'team_normal',
            'label'       => 'Team Normal Text',
            'desc'        => 'Team description in normal text',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '6',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'twitter_team',
            'label'       => 'Twitter Link',
            'desc'        => 'Twitter link for your team',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'facebook_team',
            'label'       => 'Facebook Link',
            'desc'        => 'Facebook link for your team',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'google_team',
            'label'       => 'Google + Link',
            'desc'        => 'Google + link for your team',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'dribble_team',
            'label'       => 'Dribble Link',
            'desc'        => 'Dribble link for your team',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'flickr_team',
            'label'       => 'Flickr Link',
            'desc'        => 'Flickr link for your team',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'client_list',
        'label'       => 'Client List',
        'desc'        => '<strong>Please noted:</strong> Try to create client list only in multiples of four',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'client_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'client_image',
            'label'       => 'Client Image/Logo',
            'desc'        => 'Upload your client logo here.
<br><small>Recommended size 160x50px</small>',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'client_link',
            'label'       => 'Client Link',
            'desc'        => 'Insert your client link here',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'services_head_title',
        'label'       => 'Heading Title',
        'desc'        => 'Insert you heading title for Services.
<br><small>Use span tag for text color.</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'services_list',
        'label'       => 'Services List',
        'desc'        => 'Insert your services list here
<br><small><strong>Please note:</strong>Try to create services list only in multiples of two</small>',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'services_icon',
            'label'       => 'Services Icon',
            'desc'        => 'Input your services icon here<br>
<small>For icon list you can view it in <strong>http://fortawesome.github.io/Font-Awesome/icons</strong></small>',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'services_bold',
            'label'       => 'Services Bold Text',
            'desc'        => 'Input your services bold text here',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '3',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'services_normal',
            'label'       => 'Services Normal Text',
            'desc'        => 'Input your services normal text here',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '3',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'services_banner_text',
        'label'       => 'Services Banner Text',
        'desc'        => 'Input your text for banner in here<br>
<small>use span tag for color text</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'services_banner_link',
        'label'       => 'Services Banner Link',
        'desc'        => 'Input your services banner link here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'services_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'testi_list',
        'label'       => 'Testimonial List',
        'desc'        => 'Insert your testimonial list here<br>
<strong>Note:</strong> Input testimonial author in <strong>Title</strong>.',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'testimonial_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'testi_image',
            'label'       => 'Testimonial Image',
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'testi_text',
            'label'       => 'Testimonial Text',
            'desc'        => 'Insert the testimonial text here',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '3',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'testi_position',
            'label'       => 'Testimonial Author Position',
            'desc'        => 'Position for the author',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'portfolio_head_title',
        'label'       => 'Head Title',
        'desc'        => 'Insert your title for portfolio section here.<br>
Use span tag for color text <br>
<strong>Noted:</strong> <br />Dont forget to install the suganwe plugin that included in this theme.<br />You can create your portfolio item in portfolio custom post.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'news_head_title',
        'label'       => 'Head Title',
        'desc'        => 'Insert your title for news section here.<br>
Use span tag for color text <br>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'news_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_feed_place',
        'label'       => 'Twitter Feed',
        'desc'        => 'After you finish set up the twitter setting in Settings-&gt;Rotating Tweets place the shortcode here.<br />
Here is the sample format:<br />
<strong>[rotatingtweets screen_name=\'envato\' rotation_type=\'fade\']</strong></br>
for more information about it you can view in <strong>http://wordpress.org/plugins/rotatingtweets/installation/</strong>
<br />Try to use <strong>rotation_type=\'fade\'</strong> for the best display position.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'twitter_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_btn_text',
        'label'       => 'Twitter Button Text',
        'desc'        => 'Input your text for twitter button here. 
<br /> eg: Follow Me',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'twitter_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_btn_link',
        'label'       => 'Twitter Button LInk',
        'desc'        => 'Input link for twitter button here. <br />
eg. https://twitter.com/envato',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'twitter_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_head_title',
        'label'       => 'Head Title',
        'desc'        => 'Insert your title for contact section here.<br>
Use span tag for color text <br>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'cform_shortcode',
        'label'       => 'Contact Form Shortcode',
        'desc'        => 'After you finish set up the contact form input the shortcode here. <br />
eg: [contact-form-7 id="103" title="Contact form 1"]',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_detail_title',
        'label'       => 'Contact Detail Title',
        'desc'        => 'Insert contact detail title here.
<br> Use span tag for coloring text',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_text',
        'label'       => 'Contact Detail Text',
        'desc'        => 'Input your contact detail text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact_section',
        'rows'        => '3',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_address',
        'label'       => 'Contact Address',
        'desc'        => 'Insert your contact address here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_phone',
        'label'       => 'Contact Phone',
        'desc'        => 'Input your contact phone here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_fax',
        'label'       => 'Contact Fax',
        'desc'        => 'Input your contact fax here.<br>
Leave blank if you dont want it.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'contact_email',
        'label'       => 'Contact Email',
        'desc'        => 'Input your contact email here.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_facebook',
        'label'       => 'Facebook Link',
        'desc'        => 'Input your facebook link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_google_plus',
        'label'       => 'Google Plus',
        'desc'        => 'Input your google plus link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_twitter',
        'label'       => 'Twitter Link',
        'desc'        => 'Input your twitter link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_dribble',
        'label'       => 'Dribble Link',
        'desc'        => 'Input your Dribble link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_pinterest',
        'label'       => 'Pinterest Link',
        'desc'        => 'Input your pinterest link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'social_youtube',
        'label'       => 'Youtube Link',
        'desc'        => 'Input your youtube link here<br>
Leave Blank if you dont want it',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'another_social_link',
        'label'       => 'Another  Social LInk',
        'desc'        => 'You can set another Social Icon here.',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social_icon_link',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'own_icon',
            'label'       => 'Icon',
            'desc'        => 'Enter your social icon here. eg "icon-flickr".<br>
You can check the full list of icon in here <Strong>http://fortawesome.github.io/Font-Awesome/icons/</strong>',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          ),
          array(
            'id'          => 'own_link',
            'label'       => 'Link',
            'desc'        => 'Input your link for social icon here',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'gmap_shortcode',
        'label'       => 'Google Map Shortcode',
        'desc'        => 'After your finish set up the google map in Maps, paste the shortcode into this field.<br>
eg: [wpgmza id="1"]',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'google_map',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_text',
        'label'       => 'Footer Text',
        'desc'        => 'Input your footer text here.',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer_section',
        'rows'        => '4',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'loader_text',
        'label'       => 'Preloader Text',
        'desc'        => 'Insert your text for preloader',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'preloader_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'preloader_set',
        'label'       => 'Preloader Setting',
        'desc'        => 'Choose how preloader display',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'preloader_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'show_home',
            'label'       => 'Only on Homepage',
            'src'         => ''
          ),
          array(
            'value'       => 'show_all',
            'label'       => 'Show in All Page',
            'src'         => ''
          ),
          array(
            'value'       => 'hide_all',
            'label'       => 'Hide in All Page',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'loader_bg',
        'label'       => 'Preloader Background Setting',
        'desc'        => 'Setting your preloader background',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'preloader_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'loader_image',
        'label'       => 'Preloader Image',
        'desc'        => 'Upload your preloader image here </br>
<small>Recommended size 128x128px </small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'preloader_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'menu_bg',
        'label'       => 'Menu Background Color',
        'desc'        => 'Pick your background color for menu in header',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'dark_bg',
        'label'       => 'Couleur de fond des cadres a gauche des rubriques',
        'desc'        => 'Fonds des rubriques, boutons de tri de la galerie, bouton twitter et formulaire mail<br>
Le couleur de base était #2C3E50',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'light_bg',
        'label'       => 'Couleur de fond du footer, des clients, des certains titre',
        'desc'        => 'Fond du footer, titres email et adresse, roll-over de la partie clients, fond du fil twitter, date et titre news, titres galerie, titres H2 des offres <br>
La couleur de base était #34495E',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'color_scheme',
        'label'       => 'Couleur de fond about, section besoin de devis, produits',
        'desc'        => 'Couleur de fond about, titres des offres, fond de la section besoin de devis, fond tri produits, roll over produits, titre après roll over produits <br>
La couleur de base était #E74C3C (red)',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'dark_color_scheme',
        'label'       => 'Couleur de fond about, section besoin de devis, produits plus foncé (ne pas utilisé)',
        'desc'        => 'Couleur de fond about, titres des offres, fond de la section besoin de devis, fond tri produits, roll over produits, titre après roll over produits <br>
La couleur de base était #C62B1B(dark red)',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'footer_shadow_color',
        'label'       => 'Ligne de fin du footer',
        'desc'        => 'effet ombre <br>
La couleur de base était #222F3D',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'heading_font_link',
        'label'       => 'Heading Title Font',
        'desc'        => 'Find your own font in here http://www.google.com/fonts <br>
Input your google font in here.<br>
example:<br />
&lt;<strong> link href=\'http://fonts.googleapis.com/css?family=Cinzel+Decorative\' rel=\'stylesheet\' type=\'text/css \'</strong>&gt;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'heading_font_family',
        'label'       => 'Heading Title Font Family',
        'desc'        => 'Add your font family css here.<br />
example. font-family: \'Cinzel Decorative\', cursive;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'title_font_link',
        'label'       => 'Strong Font',
        'desc'        => 'Find your own font in here http://www.google.com/fonts <br>
Input your google font in here.<br>
example:<br />
&lt;<strong> link href=\'http://fonts.googleapis.com/css?family=Cinzel+Decorative\' rel=\'stylesheet\' type=\'text/css \'</strong>&gt;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'title_font_family',
        'label'       => 'Strong Font Family',
        'desc'        => 'Add your font family css here.<br />
example. font-family: \'Cinzel Decorative\', cursive;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'paragraph_font_link',
        'label'       => 'Paragraph Font',
        'desc'        => 'Find your own font in here http://www.google.com/fonts <br>
Input your google font in here.<br>
example:<br />
&lt;<strong> link href=\'http://fonts.googleapis.com/css?family=Cinzel+Decorative\' rel=\'stylesheet\' type=\'text/css \'</strong>&gt;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'paragraph_font_family',
        'label'       => 'Paragraph Font Family',
        'desc'        => 'Add your font family css here.<br />
example. font-family: \'Cinzel Decorative\', cursive;',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'custom_css',
        'label'       => 'Custom Css',
        'desc'        => 'Input your custom css code here',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'custom_css_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}