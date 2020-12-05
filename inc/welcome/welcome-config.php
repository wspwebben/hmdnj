<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$th_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(
				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APSS_Class'
				),
				'contact-form-7' => array(
					'slug' => 'contact-form-7',
					'filename' => 'wp-contact-form-7.php',
					'class' => 'WPCF7'
				),
				'woocommerce' => array(
					'slug'      => 'woocommerce',
					'filename' 	=> 'woocommerce.php',
					'class' 	=> 'WooCommerce',
				),
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'construction-lite'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'construction-lite'),
			),
		

		),

	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Construction Lite', 'construction-lite' ),
		'theme_short_description' => esc_html__( 'Construction Lite - is full fledged WordPress theme for construction or business building website. Besides, it is elegantly designed to be used for multi purposes like business, corporates, eCommerce, personal or other creative agencies site. It is well optimized considering powerful features and functionalities along with simplicity. It is complete WordPress template that offers unlimited customization possibilities, powerful support, top-notch beautiful design, and loads of awesome features. The theme is fully based on live WordPress Customizer which makes your task a lot easier. It is an SEO friendly theme designed focusing the best user experience and usability.', 'construction-lite' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'construction-lite'),
		'deactivate' 			=> esc_html__('Deactivate', 'construction-lite'),
		'activate' 				=> esc_html__('Activate', 'construction-lite'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'construction-lite'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'construction-lite'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/construction/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'construction-lite' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'construction-lite'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'construction-lite' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'construction-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'construction-lite' ),

		

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'construction-lite'),
		'installed_btn' 	=> esc_html__('Activated', 'construction-lite'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'construction-lite'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'construction-lite'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'construction-lite'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'construction-lite' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'construction-lite' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'construction-lite' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'construction-lite' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'construction-lite' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Construction_Lite_Welcome( $th_plugins, $strings );