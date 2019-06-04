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
		 * Post Type: Teams.
		 */

		$labels = array(
			"name" => __( "Teams", "" ),
			"singular_name" => __( "Team", "" ),
		);

		$args = array(
			"label" => __( "Teams", "" ),
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
			"rewrite" => array( "slug" => "team", "with_front" => true ),
			"query_var" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
		);

		register_post_type( "team", $args );

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
			/**
			 * Slider Configuration
			 */
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

			/**
			 * Evènt fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf54a2ea4ea8',
				'title' => 'event_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf54a900ee49',
						'label' => 'date',
						'name' => 'date',
						'type' => 'date_time_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'display_format' => 'd/m/Y g:i a',
						'return_format' => 'd/m/Y g:i a',
						'first_day' => 1,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'event',
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

			/**
			 * Home section
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf3fe6f64744',
				'title' => 'home_section',
				'fields' => array(
					array(
						'key' => 'field_5cf3fe8f64127',
						'label' => 'service_title',
						'name' => 'service_title',
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
						'key' => 'field_5cf3fea164128',
						'label' => 'service_content',
						'name' => 'service_content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5cf401060eede',
						'label' => 'features',
						'name' => 'features',
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
								'key' => 'field_5cf4011b0eedf',
								'label' => 'icon',
								'name' => 'icon',
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
								'key' => 'field_5cf401420eee0',
								'label' => 'title',
								'name' => 'title',
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
					array(
						'key' => 'field_5cf40ae996db7',
						'label' => 'service_bg',
						'name' => 'service_bg',
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
						'preview_size' => 'thumbnail',
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
						'key' => 'field_5cf5444b0eb62',
						'label' => 'about_slider',
						'name' => 'about_slider',
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
								'key' => 'field_5cf5446c0eb63',
								'label' => 'slide',
								'name' => 'slide',
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
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
						),
					),
					array(
						'key' => 'field_5cf544939e1b9',
						'label' => 'about_title',
						'name' => 'about_title',
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
						'key' => 'field_5cf544a69e1ba',
						'label' => 'about_content',
						'name' => 'about_content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
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

			/**
			 * About fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf6a0af4a7e6',
				'title' => 'about_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf6a0ed54a1e',
						'label' => 'header_image',
						'name' => 'header_image',
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
						'key' => 'field_5cf6a18bc159a',
						'label' => 'title_mot_directrice',
						'name' => 'title_mot_directrice',
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
						'key' => 'field_5cf6a1e01f276',
						'label' => 'mot_de_la_directrice',
						'name' => 'mot_de_la_directrice',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5cf6ad53ada86',
						'label' => 'titre_espace_telechargement',
						'name' => 'titre_espace_telechargement',
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
						'key' => 'field_5cf6ae4de5ec3',
						'label' => 'espace_telechargement_contenue',
						'name' => 'espace_telechargement_contenue',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_template',
							'operator' => '==',
							'value' => 'apropo.php',
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

			/**
			 * Contact fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf6b67f89c89',
				'title' => 'contact_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf6b69650e79',
						'label' => 'header_image',
						'name' => 'header_image',
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
						'key' => 'field_5cf6b6cc50e7a',
						'label' => 'bp',
						'name' => 'bp',
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
						'key' => 'field_5cf6b6dd50e7b',
						'label' => 'phone',
						'name' => 'phone',
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
						'key' => 'field_5cf6b6fe50e7c',
						'label' => 'email',
						'name' => 'email',
						'type' => 'email',
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
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_template',
							'operator' => '==',
							'value' => 'contact.php',
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

			/**
			 * Promotion fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf69bfd89c9d',
				'title' => 'promotion_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf69c5436edb',
						'label' => 'bg',
						'name' => 'bg',
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
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'promotion',
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

			/**
			 * Services fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf6b05f5c235',
				'title' => 'service_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf6b069fd629',
						'label' => 'header_image',
						'name' => 'header_image',
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
						'key' => 'field_5cf6b0fe5064d',
						'label' => 'titre_presentation_des_services',
						'name' => 'titre_presentation_des_services',
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
						'key' => 'field_5cf6b18dfdc88',
						'label' => 'prestations',
						'name' => 'prestations',
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
								'key' => 'field_5cf6b1b1fdc89',
								'label' => 'icon',
								'name' => 'icon',
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
								'key' => 'field_5cf6b1b8fdc8a',
								'label' => 'title',
								'name' => 'title',
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
								'key' => 'field_5cf6b1c3fdc8b',
								'label' => 'content',
								'name' => 'content',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
								'delay' => 0,
							),
							array(
								'key' => 'field_5cf6b1d4fdc8c',
								'label' => 'bg',
								'name' => 'bg',
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
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_template',
							'operator' => '==',
							'value' => 'services.php',
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

			/**
			 * Team fields
			 */
			acf_add_local_field_group(array(
				'key' => 'group_5cf6a99d649d7',
				'title' => 'team_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf6a9aeb03bf',
						'label' => 'occupation',
						'name' => 'occupation',
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
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'team',
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

			/**
			 * Header 
			 */

			acf_add_local_field_group(array(
				'key' => 'group_5cf6daa32924a',
				'title' => 'header_fields',
				'fields' => array(
					array(
						'key' => 'field_5cf6dabe9a338',
						'label' => 'header_image',
						'name' => 'header_image',
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
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'events.php',
						),
					),
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'communicateds.php',
						),
					),
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'actualities.php',
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