<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 class WP_Theme_Front{

 	protected static $instance = NULL, $theme;
		public function __construct()
		{
			static::$theme = basename(ALAMA_ASSURANCE);
			$this->set_hooks();
		}
		public function set_hooks()
		{
			add_action( 'after_setup_theme', array($this,'visite_custom_logo_option' ));
      		add_filter('login_errors', array($this, 'remove_login_error_messages'));
      		add_action( 'after_setup_theme', array($this, 'visite_setup' ));
      		add_action( 'wp_enqueue_scripts', array($this, 'visite_scripts' ));
      		add_filter( 'excerpt_more', array($this, 'visite_excerpt_more' ));
        	add_action( 'customize_register',  array($this,'m1_customize_register' ));
        	add_action('wp_default_scripts',  array($this,'remove_jquery_migrate'));
        	add_action( 'customize_register', array($this,'alma_custom_option' ));
		}
		public function remove_login_error_messages($val)
		{
			$val = __('Same player plays again');
	       	return null;
		}
		public function visite_setup() 
		{
			load_theme_textdomain( 'alma', get_template_directory() . '/languages' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			register_nav_menus( array(
			    'Header'   => __( 'Menu principale', 'alma' )
			) );
		}
		public function m1_customize_register( $wp_customize ) {
		    $wp_customize->add_setting( 'm1_logo' );
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
		        'label'    => __( 'Upload Slug', 'm1' ),
		        'section'  => 'title_tagline',
		        'settings' => 'm1_logo',
		    ) ) );
		}
		public function visite_scripts()
		{
			wp_enqueue_style( 'alamaassurance', get_stylesheet_uri() );
			wp_enqueue_style( 'plugins-css', get_theme_file_uri( 'assets/css/plugins-css.css' ), array());
			wp_enqueue_style( 'settings', get_theme_file_uri( 'assets/revolution/css/settings.css' ), array());
			wp_enqueue_style( 'typography', get_theme_file_uri( 'assets/css/typography.css' ), array());
			wp_enqueue_style( 'shortcodes', get_theme_file_uri( 'assets/css/shortcodes/shortcodes.css' ), array());
			wp_enqueue_style( 'styles', get_theme_file_uri( 'assets/css/style.css' ), array());
			wp_enqueue_style( 'responsive', get_theme_file_uri( 'assets/css/responsive.css' ), array());
			wp_enqueue_style( 'customizer', get_theme_file_uri( 'assets/css/style-customizer.css' ), array());

			wp_enqueue_script( 'jquery-3.3.1', get_theme_file_uri( 'assets/js/jquery-3.3.1.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'plugins', get_theme_file_uri( 'assets/js/plugins-jquery.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'customizer', get_theme_file_uri( 'assets/js/style-customizer.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'themepunch', get_theme_file_uri( 'assets/revolution/js/jquery.themepunch.tools.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'assets/revolution', get_theme_file_uri( 'assets/revolution/js/jquery.themepunch.revolution.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'actions', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.actions.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'carousel', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.carousel.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'kenburn', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.kenburn.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'layeranimation', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.layeranimation.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'migration', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.migration.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'navigation', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.navigation.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'parallax', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.parallax.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'slideanims', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.slideanims.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'video', get_theme_file_uri( 'assets/revolution/js/extensions/revolution.extension.video.min.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'assets/revolution-custom', get_theme_file_uri( 'assets/revolution/js/revolution-custom.js' ), array( 'jquery' ), true,false);
			wp_enqueue_script( 'custom', get_theme_file_uri( 'assets/js/custom.js' ), array( 'jquery' ), true,false);
		}

		public function visite_excerpt_more( $link ) 
		{
			if ( is_admin() ) {
				return $link;
			}

			$link = sprintf(
				'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
				esc_url( get_permalink( get_the_ID() ) ),
				/* translators: %s: Name of current post */
				sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'alma' ), get_the_title( get_the_ID() ) )
			);
			return ' &hellip; ' . $link;
		}
		public function visite_custom_logo_option()
		{
			show_admin_bar(false);
			add_theme_support( 'custom-logo', array(
				'height'      => 248,
				'width'       => 248,
				'flex-height' => true,
			) );
			add_theme_support( 'customize-selective-refresh-widgets' );

		} 
		//Remove JQuery migrate
		public function remove_jquery_migrate($scripts)
		{
		    if (!is_admin() && isset($scripts->registered['jquery'])) {
		        $script = $scripts->registered['jquery'];
		        
		        if ($script->deps) { // Check whether the script has any dependencies
		            $script->deps = array_diff($script->deps, array(
		                'jquery-migrate'
		            ));
		        }
		    }
		}
		
     public function alma_custom_option( $wp_customize ) 
	{
		$wp_customize->add_section( 'section_id', array(
		    'priority' => 10,
		    'capability' => 'edit_theme_options',
		    'theme_supports' => '',
		    'title' => __( 'Home header background', 'alma' ),
		    'description' => '',
		    'section' => 'panel_id',
		) );

	    $wp_customize->add_setting( 'section_three' );
	    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_three', array(
	        'label'    => __( 'Background Home Header', 'm1' ),
	        'section'  => 'section_id',
	        'settings' => 'section_three',
	    ) ) );
	    $wp_customize->add_setting( 'title_header' );
	    $wp_customize->add_control( 'title_header', array(
		    'type' => 'text',
		    'priority' => 10,
		    'section' => 'section_id',
		    'label' => __( 'Titre de premier niveau', 'alma' ),
		) );
		$wp_customize->add_setting( 'sub_title' );
	    $wp_customize->add_control( 'sub_title', array(
		    'type' => 'text',
		    'priority' => 10,
		    'section' => 'section_id',
		    'label' => __( 'Titre de seconde niveau', 'alma' ),
		) );
	}

	

	
		
}