<?php

  include('multiform-shortcode.php');

  add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_styles' );
  add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts' );

  function twenty_twenty_one_child_styles(){

    wp_enqueue_style( 'google-fonts-child-style', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap', false );


    wp_enqueue_style( 'bootstrap-child-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('twenty-twenty-one-style') );

    wp_enqueue_style( 'form-style', get_stylesheet_directory_uri() . '/css/style.css' );
  }


  function twenty_twenty_one_child_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script( 'jquery' );


    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true );
    wp_enqueue_script( 'calculation', get_stylesheet_directory_uri() . '/js/calculation.js', array('jquery'), null, true );
  }      
