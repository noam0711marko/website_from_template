<?php

function portfolio_customizer_register($wp_customize)
{
    /* Panel */
    $wp_customize->add_panel('home_panel', array(
        'title' => 'Front Page',
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ));

/* HOME SECTION */
    /* Home Section */
    $wp_customize->add_section('home_section', array(
        'title' => 'Home Section',
        'description' => __('Here you can custom the Front Page content. <br/> To not display some fields, leave them empty.'),
        'panel' => 'home_panel',
    ));
    
    /* Setting Hello Text */
    $wp_customize->add_setting('hello_text', array(
        'default' => __('Hello!, My name is'),    
    ));

    /* Control Hello Text */
    $wp_customize->add_control('hello_text', array(
        'label' => 'Hello Text',
        'section' => 'home_section',
        'priority' => 2,
    ));

    /* Add Hello edit button */
    $wp_customize->selective_refresh->add_partial('hello_text', array(
        'selector' => '.hello',
    ));

    /* Setting Name Text */
    $wp_customize->add_setting('myname_text', array(
        'default' => __('John Doe'),
    ));

    /* Control Name Text */
    $wp_customize->add_control('myname_text', array(
        'label' => 'My name',
        'section' => 'home_section',
        'priority' => 3,
    ));

    /* Add Name edit button */
    $wp_customize->selective_refresh->add_partial('myname_text', array(
    'selector' => '.main-name',
    ));

    /* Setting Occupation Text */
    $wp_customize->add_setting('occupation_text', array(
        'default' => __('"Front End Developer", "Web Designer", "Freelancer"'),
    ));

    /* Control Occupation Text */
    $wp_customize->add_control('occupation_text', array(
        'label' => 'My occupation',
        'section' => 'home_section',
        'priority' => 4,
        'description' => __('Each occupation will be put in " " and separated by a comma'),
    ));

    /* Add Occupation edit button */
    $wp_customize->selective_refresh->add_partial('occupation_text', array(
    'selector' => '.occupation',
    ));

    /* Setting Button 1 Title */
    $wp_customize->add_setting('btn1_title', array(
        'default' => __('Portfolio'),
    ));

    /* Control Button 1 Title */
    $wp_customize->add_control('btn1_title', array(
        'label' => 'Button 1 Title',
        'section' => 'home_section',
        'priority' => 5,
    ));

    /* Setting Button 1 Link */
    $wp_customize->add_setting('btn1_link', array(
        'default' => __('#portfolio'),
    ));

    /* Control Button 1 Link */
    $wp_customize->add_control('btn1_link', array(
        'label' => 'Button 1 Link',
        'section' => 'home_section',
        'priority' => 6,
    ));

    /* Setting Button 2 Title */
    $wp_customize->add_setting('btn2_title', array(
        'default' => __('Contact me'),
    ));

    /* Control Button 2 Title */
    $wp_customize->add_control('btn2_title', array(
        'label' => 'Button 2 Title',
        'section' => 'home_section',
        'priority' => 7,
    ));

    /* Setting Button 2 Link */
    $wp_customize->add_setting('btn2_link', array(
        'default' => __('#contact'),
    ));

    /* Control Button 2 Link */
    $wp_customize->add_control('btn2_link', array(
        'label' => 'Button 2 Link',
        'section' => 'home_section',
        'priority' => 8,
    ));

    /* Setting Twitter Link */
    $wp_customize->add_setting('twitter_link', array(
        'default' => __(' '),
    ));

    /* Control Twitter Link */
    $wp_customize->add_control('twitter_link', array(
        'label' => 'Twitter Link',
        'section' => 'home_section',
        'priority' => 14
    ));


    /* Setting Linkedin Link */
    $wp_customize->add_setting('linkedin_link', array(
        'default' => __(' '),
    ));

    /* Control Linkedin Link */
    $wp_customize->add_control('linkedin_link', array(
        'label' => 'LinkedIn Link',
        'section' => 'home_section',
        'priority' => 16
    ));


    /* Setting GitHub Link */
    $wp_customize->add_setting('github_link', array(
        'default' => __(' '),
    ));

    /* Control GitHub Link */
    $wp_customize->add_control('github_link', array(
        'label' => 'GitHub Link',
        'section' => 'home_section',
        'priority' => 18
    ));

    /* Add Occupation edit button */
    $wp_customize->selective_refresh->add_partial('twitter_link', array(
        'selector' => '.social-links',
    ));

    /* Setting Home Background Color */
    $wp_customize->add_setting( 'home_bgcolor', array(
        'default' => '#040404',        
    ));

    /* Setting Home Background Color */
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_bgcolor', array(
        'label' => 'Home Section Background Color',
        'section' => 'home_section',
        'settings' => 'home_bgcolor',
        'type' => 'color',
        'priority' => 19
    )));
    
    /* Home Profile Image Setting */
    $wp_customize->add_setting('home_profileimg', array(
         
    ));

    /* Home Profile Image Control */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_profileimg', array(
        'label' => 'Home Profile Image',
        'section' => 'home_section',
        'priority' => 20
    )));
/* END HOME SECTION */

/* ABOUT SECTION */
    /* Home Section */
    $wp_customize->add_section('about_section', array(
        'title' => 'About Section',
        'description' => __('Custom the About section from the front page'),
        'panel' => 'home_panel',
    ));

    /* About Profile Image Setting */
    $wp_customize->add_setting('about_profileimg', array(

    ));

    /* About Profile Image Control */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_profileimg', array(
        'label' => 'About Profile Image',
        'section' => 'about_section',
        'priority' => 1
    )));

    /* Add About image edit button */
    $wp_customize->selective_refresh->add_partial('about_profileimg', array(
        'selector' => '.about-img',
    ));

    /* Setting About me Description */
    $wp_customize->add_setting('about_description', array(
        'default' => __('Lorem ipsum dolor sit amet...'),
    ));

    /* Control About me Description */
    $wp_customize->add_control('about_description', array(
        'label' => 'My Description',
        'section' => 'about_section',
        'priority' => 2,
        'type' => 'textarea',
    ));

    /* Setting Collab Description */
    $wp_customize->add_setting('collab_description', array(
        'default' => __('Lorem ipsum dolor sit amet...'),
    ));

    /* Setting Checkbox display Collab */
    $wp_customize->add_setting( 'display_collab', array(
        'default' => true,
    ) );

    /* Control Checkbox display Collab */
    $wp_customize->add_control( 'display_collab', array(
        'label' => __('Show Collaboration'),
        'section' => 'about_section',
        'priority' => 3,
        'type' => 'checkbox'
    ) );
    

    /* Control Collab Description */
    $wp_customize->add_control('collab_description', array(
        'label' => 'Collaborate Description',
        'section' => 'about_section',
        'priority' => 4,
        'type' => 'textarea',
    ));

    /* Add About Description edit button */
    $wp_customize->selective_refresh->add_partial('about_description', array(
        'selector' => '#my-description',
    ));

    /* Add Collab Description edit button */
    $wp_customize->selective_refresh->add_partial('collab_description', array(
        'selector' => '#collab-description',
    ));
    
/* END ABOUT SECTION */

/* SERVICES SECTION */

    /* Services Section */
    $wp_customize->add_section('services_section', array(
        'title' => 'Services Section',
        'description' => __('To custom the services cards, go to the WP Panel > Services'),
        'panel' => 'home_panel',
    ));

    /* Setting Services Title */
    $wp_customize->add_setting('services_title', array(
        'default' => __('Services'),    
    ));

    /* Control Services Title */
    $wp_customize->add_control('services_title', array(
        'label' => 'Services Title',
        'section' => 'services_section',
        'priority' => 1,
    ));

    /* Add Services Description edit button */
    $wp_customize->selective_refresh->add_partial('services_title', array(
        'selector' => '#services-title',
    ));

    /* Setting Services Description */
    $wp_customize->add_setting('services_description', array(
        'default' => __('Here it is my services that can i do, my skills and my experience.'),    
    ));

    /* Control Services Description */
    $wp_customize->add_control('services_description', array(
        'label' => 'Services Description',
        'section' => 'services_section',
        'priority' => 2,
    ));

/* END SERVICES SECTION */

/* PORTFOLIO SECTION */

    /* Portfolio Section */
    $wp_customize->add_section('portfolio_section', array(
        'title' => 'Portfolio Section',
        'description' => __('To add projects, go to the WP Panel > Projects'),
        'panel' => 'home_panel',
    ));

    /* Setting Portfolio Title */
    $wp_customize->add_setting('portfolio_title', array(
        'default' => __('My Work'),    
    ));

    /* Control Portfolio Title */
    $wp_customize->add_control('portfolio_title', array(
        'label' => 'Portfolio Title',
        'section' => 'portfolio_section',
        'priority' => 1,
    ));

    /* Setting Portfolio Description */
    $wp_customize->add_setting('portfolio_description', array(
        'default' => __('These are all my projects that I have worked on so far'),    
    ));

    /* Control Portfolio Description */
    $wp_customize->add_control('portfolio_description', array(
        'label' => 'Portfolio Description',
        'section' => 'portfolio_section',
        'priority' => 2,
    ));

    /* Add Portfolio Description edit button */
    $wp_customize->selective_refresh->add_partial('portfolio_title', array(
        'selector' => '#portfolio-title',
    ));

    /* Setting Portfolio Btn Filter 1 */
    $wp_customize->add_setting('btn_filter1', array(
        'default' => __('All'),    
    ));

    /* Control Portfolio Btn Filter 1 */
    $wp_customize->add_control('btn_filter1', array(
        'label' => 'Button 1 Filter Category',
        'section' => 'portfolio_section',
        'priority' => 3,
    ));

    /* Setting Portfolio Btn Filter 2 */
    $wp_customize->add_setting('btn_filter2', array(
        'default' => __('Development'),    
    ));

    /* Control Portfolio Btn Filter 2 */
    $wp_customize->add_control('btn_filter2', array(
        'label' => 'Button 2 Filter Category',
        'section' => 'portfolio_section',
        'priority' => 4,
    ));

    /* Setting Portfolio Btn Filter 3 */
    $wp_customize->add_setting('btn_filter3', array(
        'default' => __('Design'),    
    ));

    /* Control Portfolio Btn Filter 3 */
    $wp_customize->add_control('btn_filter3', array(
        'label' => 'Button 3 Filter Category',
        'section' => 'portfolio_section',
        'priority' => 5,
    ));

    /* Setting Portfolio Btn Filter 4 */
    $wp_customize->add_setting('btn_filter4', array(
        'default' => __('Others'),    
    ));

    /* Control Portfolio Btn Filter 4 */
    $wp_customize->add_control('btn_filter4', array(
        'label' => 'Button 4 Filter Category',
        'section' => 'portfolio_section',
        'priority' => 6,
    ));
    
/* END PORTFOLIO SECTION */

    /* Panel */
    $wp_customize->add_panel('footer_panel', array(
        'title' => 'Footer',
        'priority' => 2,
        'capability' => 'edit_theme_options',
    ));

    /* Footer Section */
    $wp_customize->add_section('footer_section', array(
        'title' => 'Footer Section',
        'panel' => 'footer_panel',
    ));

    /* Setting Footer */
    $wp_customize->add_setting('footer_text', array(
        'default' => __('© Copyright Velo 2021. All rights reserved'),    
    ));

    /* Control Footer */
    $wp_customize->add_control('footer_text', array(
        'label' => 'Footer Text',
        'section' => 'footer_section',
        'priority' => 1,
    ));

    /* Add Footer edit button */
    $wp_customize->selective_refresh->add_partial('footer_text', array(
        'selector' => '#footer-text',
    ));


}

add_action( 'customize_register', 'portfolio_customizer_register' );

/* Changing Home Background Color via Color Picker */
function portfolio_customize_css() { ?>
    <style type="text/css">
        #home {
            background-color: <?php echo get_theme_mod('home_bgcolor', '#040404'); ?>;
        }

    </style>
    <?php }

add_action('wp_head', 'portfolio_customize_css');