<?php
/*
Plugin Name: Journals
Plugin URI: http://www.indigo-river.com
Description: Services 
Version: 1.0
Author: JB
Author URI: http://www.indigo-river.com
License: GPL
*/

    add_action('init', 'build_taxonomies_journal');

    function build_taxonomies_journal() {
        $args = array(
            'label' => __('Journals'),
            'singular_label' => __('Journal'),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'rewrite' => array("slug" => "journal"),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),

        );

        register_post_type( 'Journals' , $args );
        
    }






?>