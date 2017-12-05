<?php

namespace Kirki;

class Config {

	/** @var array The configuration values for Kirki */
	private $config = null;

	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Get a configuration value
	 *
	 * @param string $key     The configuration key we are interested in
	 * @param string $default The default value if that configuration is not set
	 *
	 * @return mixed
	 */
	public function get( $key, $default='' ) {

		$cfg = $this->get_all();
		return isset( $cfg[$key] ) ? $cfg[$key] : $default;

	}

	/**
	 * Get a configuration value or throw an exception if that value is mandatory
	 *
	 * @param string $key     The configuration key we are interested in
	 *
	 * @return mixed
	 */
	public function getOrThrow( $key ) {

		$cfg = $this->get_all();
		if ( isset( $cfg[$key] ) ) {
			return $cfg[$key];
		}

		throw new RuntimeException( sprintf( "Configuration key %s is mandatory and has not been specified", $key ) );

	}

	/**
	 * Get the configuration options for the Kirki customizer.
	 *
	 * @uses 'kirki/config' filter.
	 */
	public function get_all() {

		if ( is_null( $this->config ) ) {

			// Get configuration from the filter
			$this->config = apply_filters( 'kirki/config', array() );

			// Merge a default configuration with the one we got from the user to make sure nothing is missing
			$default_config = array(
				'stylesheet_id' => 'kirki-styles',
				'capability'    => 'edit_theme_options',
				'logo_image'    => '',
				'description'   => '',
				'url_path'      => '',
				'options_type'  => 'theme_mod',
			);
			$this->config = array_merge( $default_config, $this->config );

			$this->config['logo_image']  = esc_url_raw( $this->config['logo_image'] );
			$this->config['description'] = esc_html( $this->config['description'] );
			$this->config['url_path']    = esc_url_raw( $this->config['url_path'] );

			// Get the translation strings.
			$this->config['i18n'] = ( ! isset( $this->config['i18n'] ) ) ? array() : $this->config['i18n'];
			$this->config['i18n'] = array_merge( $this->translation_strings(), $this->config['i18n'] );

		}

		return $this->config;

	}

	/**
	 * The i18n strings
	 */
	public function translation_strings() {

		$strings = array(
			'background-color'      => __( 'Background Color',         'dolcetto' ),
			'background-image'      => __( 'Background Image',         'dolcetto' ),
			'no-repeat'             => __( 'No Repeat',                'dolcetto' ),
			'repeat-all'            => __( 'Repeat All',               'dolcetto' ),
			'repeat-x'              => __( 'Repeat Horizontally',      'dolcetto' ),
			'repeat-y'              => __( 'Repeat Vertically',        'dolcetto' ),
			'inherit'               => __( 'Inherit',                  'dolcetto' ),
			'background-repeat'     => __( 'Background Repeat',        'dolcetto' ),
			'cover'                 => __( 'Cover',                    'dolcetto' ),
			'contain'               => __( 'Contain',                  'dolcetto' ),
			'background-size'       => __( 'Background Size',          'dolcetto' ),
			'fixed'                 => __( 'Fixed',                    'dolcetto' ),
			'scroll'                => __( 'Scroll',                   'dolcetto' ),
			'background-attachment' => __( 'Background Attachment',    'dolcetto' ),
			'left-top'              => __( 'Left Top',                 'dolcetto' ),
			'left-center'           => __( 'Left Center',              'dolcetto' ),
			'left-bottom'           => __( 'Left Bottom',              'dolcetto' ),
			'right-top'             => __( 'Right Top',                'dolcetto' ),
			'right-center'          => __( 'Right Center',             'dolcetto' ),
			'right-bottom'          => __( 'Right Bottom',             'dolcetto' ),
			'center-top'            => __( 'Center Top',               'dolcetto' ),
			'center-center'         => __( 'Center Center',            'dolcetto' ),
			'center-bottom'         => __( 'Center Bottom',            'dolcetto' ),
			'background-position'   => __( 'Background Position',      'dolcetto' ),
			'background-opacity'    => __( 'Background Opacity',       'dolcetto' ),
			'ON'                    => __( 'ON',                       'dolcetto' ),
			'OFF'                   => __( 'OFF',                      'dolcetto' ),
			'all'                   => __( 'All',                      'dolcetto' ),
			'cyrillic'              => __( 'Cyrillic',                 'dolcetto' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended',        'dolcetto' ),
			'devanagari'            => __( 'Devanagari',               'dolcetto' ),
			'greek'                 => __( 'Greek',                    'dolcetto' ),
			'greek-ext'             => __( 'Greek Extended',           'dolcetto' ),
			'khmer'                 => __( 'Khmer',                    'dolcetto' ),
			'latin'                 => __( 'Latin',                    'dolcetto' ),
			'latin-ext'             => __( 'Latin Extended',           'dolcetto' ),
			'vietnamese'            => __( 'Vietnamese',               'dolcetto' ),
			'serif'                 => _x( 'Serif', 'font style',      'dolcetto' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'dolcetto' ),
			'monospace'             => _x( 'Monospace', 'font style',  'dolcetto' ),
		);

		return $strings;

	}

}
