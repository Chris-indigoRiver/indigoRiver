<?php
/*
Plugin Name: Vacancies
Plugin URI: http://www.indigo-river.com
Description: Services 
Version: 1.0
Author: JB
Author URI: http://www.indigo-river.com
License: GPL
*/

    add_action('init', 'build_taxonomies_vacancies');

    function build_taxonomies_vacancies() {
        $args = array(
            'label' => __('Vacancies'),
            'singular_label' => __('Vacancy'),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'rewrite' => array("slug" => "vacancies"),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),

        );

        register_post_type( 'Vacancies' , $args );
        
    }






?>