<?php

namespace Roots\SVM\Customizer;

use Roots\SVM\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  // Rename 'Site Title & Tagline' to ‘Branding'
    $wp_customize->get_section('title_tagline')->title = __('Branding',
    'svm');
    $wp_customize->get_section('title_tagline')->priority = 1;
  	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_control( 'blogdescription' )->label  = esc_html__('Hero Text', 'svm');
    $wp_customize->remove_control('display_header_text');


  //	Header Button

  $wp_customize->add_setting('btn_url', 'sanitize_callback' == 'esc_url_raw' );
  $wp_customize->add_control( 'btn_url', array(
      'type'     => 'url',
      'description' => __('Link to an external page.', 'svm'),
      'priority' => 40,
      'section' => 'title_tagline',
      'label'    => __('Hero Button Link', 'svm')
  ) );

  $wp_customize->add_setting('btn_text', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( 'btn_text', array(
      'type'     => 'text',
      'description' => __('Enter Call to Action Text that will appear on the button', 'svm'),
      'priority' => 50,
      'section' => 'title_tagline',
      'label'    => __('Button Text', 'svm')
  ) );


    //Footer Settings section
  	 $wp_customize->add_section('social_setting', array(
  	  'priority' => 60,
  	  'title' => __('Footer', 'svm'),
  	  ));
//CTA Section
      $wp_customize->add_setting('cta_header', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control( 'cta_header', array(
          'type'     => 'text',
          'description' => __('Enter title for the footer call to action', 'svm'),
          'priority' => 10,
          'section' => 'social_setting',
          'label'    => __('CTA Title', 'svm')
      ) );

      $wp_customize->add_setting('cta_subheading', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control( 'cta_subheading', array(
          'type'     => 'text',
          'description' => __('Enter subtitle for the footer cta', 'svm'),
          'priority' => 20,
          'section' => 'social_setting',
          'label'    => __('CTA Subtitle', 'svm')
      ) );

//Phone Number
      $wp_customize->add_setting('phone', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control( 'phone', array(
          'type'     => 'text',
          'description' => __('Studio phone number', 'svm'),
          'priority' => 30,
          'section' => 'social_setting',
          'label'    => __('Phone Number', 'svm')
      ) );



  	   //social facebook link
  	 $wp_customize->add_setting('social_facebook', array(
  	  'default' => '',
  	  'sanitize_callback' => 'esc_url_raw',
  	  ));

  	 $wp_customize->add_control('social_facebook',array(
  	  'type' => 'url',
  	  'label' => __('Facebook URL','svm'),
      'priority' => 40,
  	  'section' => 'social_setting',
  	  ));

  	    //social twitter link
  	 $wp_customize->add_setting('social_twitter', array(
  	  'default' => '',
  	  'sanitize_callback' => 'esc_url_raw',
  	  ));

  	 $wp_customize->add_control('social_twitter',array(
  	  'type' => 'url',
  	  'label' => __('Twitter URL','svm'),
      'priority' => 50,
  	  'section' => 'social_setting',
  	  ));

      //social instagram link
   $wp_customize->add_setting('social_instagram', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
    ));

   $wp_customize->add_control('social_instagram',array(
    'type' => 'url',
    'label' => __('Instragram URL','svm'),
    'priority' => 60,
    'section' => 'social_setting',
    ));
    //social instagram link
 $wp_customize->add_setting('social_youtube', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
  ));

 $wp_customize->add_control('social_youtube',array(
  'type' => 'url',
  'label' => __('Youtube URL','svm'),
  'priority' => 70,
  'section' => 'social_setting',
  ));




}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');


/* Sanitize Callbacks*/


/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('svm/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
