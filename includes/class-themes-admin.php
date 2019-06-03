<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class WP_Theme_Admin
{
    public function __construct()
    {
        $this->init();
        $this->set_hooks();
    }

    function set_hooks()
    {
		add_action( 'init', array($this,'cptui_register_my_cpts' ));
    }

    public function init()
    {
    	$this->acf_field();
		require_once (ALAMA_ASSURANCE.'/includes/alamana-functions.php');
    }

    function cptui_register_my_cpts() {

		/**
		 * Post Type: Communicated.
		 */

		$labels = array(
			"name" => __( "Communiqués", "" ),
			"singular_name" => __( "Communiqué", "" ),
		);

		$args = array(
			"label" => __( "Communiqué", "" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "communicated", "with_front" => true ),
			"query_var" => true,
			'menu_icon' => 'dashicons-format-status',
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "communicated", $args );

		/**
		 * Post Type: Event.
		 */

		$labels = array(
			"name" => __( "Evènements", "" ),
			"singular_name" => __( "Evènement", "" ),
		);

		$args = array(
			"label" => __( "Evènements", "" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "event", "with_front" => true ),
			"query_var" => true,
			'menu_icon' => 'dashicons-calendar-alt',
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "event", $args );

		/**
		 * Post Type: Promotion.
		 */

		$labels = array(
			"name" => __( "Promotions", "" ),
			"singular_name" => __( "Promotion", "" ),
		);

		$args = array(
			"label" => __( "Promotions", "" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "promotion", "with_front" => true ),
			"query_var" => true,
			'menu_icon' => 'dashicons-smiley',
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "promotion", $args );

		/**
		 * Post Type: News.
		 */

		$labels = array(
			"name" => __( "Actualités", "" ),
			"singular_name" => __( "Actualité", "" ),
		);

		$args = array(
			"label" => __( "Actualités", "" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "news", "with_front" => true ),
			"query_var" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			'menu_icon' => 'dashicons-admin-site',
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "news", $args );

		/**
		 * Post Type: Informations.
		 */

		$labels = array(
			"name" => __( "Informations", "" ),
			"singular_name" => __( "Information", "" ),
		);

		$args = array(
			"label" => __( "Informations", "" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "information", "with_front" => true ),
			"query_var" => true,
			'menu_icon' => 'dashicons-info',
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "information", $args );
	}

	public function acf_field(){
		if( function_exists('acf_add_local_field_group') ){
				acf_add_local_field_group(array(
				'key' => 'group_5cf2a57e208df',
				'title' => 'configuration',
				'fields' => array(
					array(
						'key' => 'field_5cf2a58768010',
						'label' => 'configuration',
						'name' => 'configuration',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 0,
						'max' => 0,
						'layout' => 'table',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_5cf2a5a868011',
								'label' => 'image_slider',
								'name' => 'image_slider',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'url',
								'preview_size' => 'large',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_5cf2a5c668012',
								'label' => 'url',
								'name' => 'url',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5cf2a5d468013',
								'label' => 'premiere_description',
								'name' => 'premiere_description',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5cf2a5e268014',
								'label' => 'seconde_description',
								'name' => 'seconde_description',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_template',
							'operator' => '==',
							'value' => 'home.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
		}
	}
}