<?php 

function wpb_customize_register($wp_customize){
  
  $wp_customize->add_section('showcase',array(
    'title' => __('Logo and Button Settings', 'wpbootstrap'),
    'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
    'priority' => 1
  ));
  $wp_customize->add_setting('showcase_heading', array(
    'default' => _x('', 'wpbootstrap'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_heading',array(
    'label' => __('Left Sidebar 1 Name: ','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 1
  ));
  $wp_customize->add_setting('showcase_heading1', array(
    'default' => _x('', 'wpbootstrap'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_heading1',array(
    'label' => __('Left Sidebar 2 Name:','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 2
  ));
  $wp_customize->add_setting('showcase_heading2', array(
    'default' => _x('', 'wpbootstrap'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('showcase_heading2',array(
    'label' => __('Left Sidebar 3 Name:','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 3
  ));
  
  $wp_customize->add_setting('basic-author-callout-image',array(
    "default" => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_custom_url'
  ));
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'basic-author-callout-image-control',array(
    'label' => 'Logo',
    'section' => 'showcase',
    'settings' => 'basic-author-callout-image',
    'width' => 250,
    'description' => 'Max width: 250px'
  )));

}
add_action('customize_register', 'wpb_customize_register');

  function sanitize_custom_url($input)
{
  return filter_var($input, FILTER_SANITIZE_URL);
}

?>