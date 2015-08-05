<?php
/*
Plugin Name: Services
Plugin URI: http://www.indigo-river.com
Description: Services 
Version: 1.0
Author: Chris Burd
Author URI: http://www.indigo-river.com
License: GPL
*/

	add_action('init', 'build_taxonomies_services');

	function build_taxonomies_services() {
    	$args = array(
        	'label' => __('Services'),
        	'singular_label' => __('Service'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'page',
        	'hierarchical' => true,
        	//'rewrite' => array("slug" => "news"),
        	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),

        );

    	register_post_type( 'Services' , $args );
		
		register_taxonomy("servicesCategory", array("Services"), array("hierarchical" => true, "label" => "Add Services Category", "singular_label" => "Add Category", "rewrite" => true, "show_ui" => true));
	}






?>