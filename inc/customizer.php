<?php
   function wpb_customize_register($wp_customize){
    //showcase section
    $wp_customize->add_section('showcase' , array(
      'title' => __('Showcase','wpbootstrap'),
      'description' => sprintf(__('options for showcase','wpbootstrap')),
      'priority' => 130

    ));


     $wp_customize->add_setting('showcase_image', array(
      'default' => get_bloginfo('template_directory').'/images/showcase.png',
      'type' => 'theme_mod'
    ));

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',   array(
       'label' => __('Showcase Image', 'wpbootstrap'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority' => 1
   )));

    $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('My Wordpress Theme', 'wpbootstrap'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label' => __('Heading', 'wpbootstrap'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur', 'wpbootstrap'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label' => __('Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority' => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default' => _x('/about.php', 'wpbootstrap'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label' => __('Button URL', 'wpbootstrap'),
      'section' => 'showcase',
      'priority' => 4
    ));

     $wp_customize->add_setting('btn_text', array(
      'default' => _x('Read More', 'wpbootstrap'),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label' => __('Button Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority' => 5
    ));

   }

   add_action('customize_register', 'wpb_customize_register');



