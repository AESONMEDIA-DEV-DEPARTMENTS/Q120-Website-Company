<?php
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 */


class Atiframebuilder_Plugins {

	public $plugins;

	public $config;

	public function __construct() {

		/**
		 * Array of plugins
		 * Required keys are name, slug and required.
		 * If the source is NOT from the .org repo, then source is also required.
		 */

		$installer = array(
			'name'     => esc_attr__( 'SecretLab Installer', 'stucy' ),
			'slug'     => 'SecretLabInstaller',
			'source'   => 'https://secretlab.pw/plu/SecretLabInstaller.zip',
			'required' => true,
		);

		$this->plugins = self::getPlugins();

		// Add installer to the begin of required plugins list
		array_unshift( $this->plugins, $installer );

		$this->config = array(
			'domain'       => 'stucy', // Text domain
			'default_path' => '', // Default absolute path to pre-packaged plugins
			'menu'         => 'install-required-plugins', // Menu slug
			'has_notices'  => true, // Show admin notices or not
			'is_automatic' => false, // Automatically activate plugins after installation or not
			'message'      => '', // Message to output right before the plugins table
			'strings'      => array(
				'page_title'                      => esc_attr__( 'Install Required Plugins', 'stucy' ),
				'menu_title'                      => esc_attr__( 'Install Plugins', 'stucy' ),
				'installing'                      => esc_attr__( 'Installing Plugin: %s', 'stucy' ),
				// %1$s = plugin name
				'oops'                            => esc_attr__( 'Something went wrong with the plugin API.',
					'stucy' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.',
					'This theme requires the following plugins: %1$s.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.',
					'This theme recommends the following plugins: %1$s.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.',
					'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.',
					'The following required plugins are currently inactive: %1$s.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.',
					'The following recommended plugins are currently inactive: %1$s.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.',
					'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
					'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
					'stucy' ),
				// %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.',
					'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.',
					'stucy' ),
				// %1$s = plugin name(s)
				'install_link'                    => _n_noop( 'Begin installing plugin',
					'Begin installing plugins',
					'stucy' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin',
					'Activate installed plugins',
					'stucy' ),
				'return'                          => esc_attr__( 'Return to Required Plugins Installer',
					'stucy' ),
				'plugin_activated'                => esc_attr__( 'Plugin activated successfully.', 'stucy' ),
				'complete'                        => esc_attr__( 'All plugins installed and activated successfully. %s',
					'stucy' ),
				// %1$s = dashboard link
			),
		);

		add_action( 'tgmpa_register', array( $this, 'register_required_plugins' ) );

	}

	public function register_required_plugins() {
		tgmpa( $this->plugins, $this->config );
	}

	public static function getPlugins() {
		return array(
			array(
				'name'     => esc_attr__( 'Redux Framework', 'stucy' ),
				'slug'     => 'redux-framework',
				'required' => true,
			),
			array(
				'name'     => esc_attr__( 'Caldera Forms', 'stucy' ),
				'slug'     => 'caldera-forms',
				'source'       => 'https://secretlab.pw/plu/caldera-forms.zip',
				'external_url' => 'http://secretlab.pw/',
				'required' => true,
			),
			array(
				'name'     => esc_attr__( 'WooCommerce', 'stucy' ),
				'slug'     => 'woocommerce',
				'required' => false,
			),

			array(
				'name'         => esc_attr__( 'Marketing and SEO Booster', 'stucy' ),
				'slug'         => 'marketing-and-seo-booster',
				'required'     => true,
			),
			array(
				'name'         => esc_attr__( 'SecretLab Shortcodes', 'stucy' ),
				'slug'         => 'secretlab_shortcodes',
				'source'       => 'https://secretlab.pw/plu/secretlab_shortcodes.zip',
				'external_url' => 'http://secretlab.pw/',
				'required'     => true,
			),
			array(
				'name'         => esc_attr__( 'KingComposer', 'stucy' ),
				'slug'         => 'kingcomposer',
				'source'       => 'https://secretlab.pw/plu/kingcomposer.zip',
				'external_url' => 'http://king-theme.com/',
				'required'     => true,
			),
			array(
				'name'         => esc_attr__( 'KC Pro!', 'stucy' ),
				'slug'         => 'kc_pro',
				'source'       => 'https://secretlab.pw/plu/kc_pro.zip',
				'external_url' => 'http://king-theme.com/',
				'required'     => true,
			),
			array(
				'name'         => esc_attr__( 'Easy Forms for MailChimp', 'stucy' ),
				'slug'         => 'yikes-inc-easy-mailchimp-extender',
				'external_url' => 'https://www.yikesplugins.com/',
				'required'     => false,
			),
			array(
				'name'         => esc_attr__( 'Revolution Slider', 'stucy' ),
				'slug'         => 'revslider',
				'source'       => 'https://secretlab.pw/plu/revslider.zip',
				'external_url' => 'http://www.revolution.themepunch.com/',
				'required'     => true,
			),
		);
	}

}