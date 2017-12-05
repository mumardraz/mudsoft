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
			'background-color'      => __( 'Background Color',         'amaryllo' ),
			'background-image'      => __( 'Background Image',         'amaryllo' ),
			'no-repeat'             => __( 'No Repeat',                'amaryllo' ),
			'repeat-all'            => __( 'Repeat All',               'amaryllo' ),
			'repeat-x'              => __( 'Repeat Horizontally',      'amaryllo' ),
			'repeat-y'              => __( 'Repeat Vertically',        'amaryllo' ),
			'inherit'               => __( 'Inherit',                  'amaryllo' ),
			'background-repeat'     => __( 'Background Repeat',        'amaryllo' ),
			'cover'                 => __( 'Cover',                    'amaryllo' ),
			'contain'               => __( 'Contain',                  'amaryllo' ),
			'background-size'       => __( 'Background Size',          'amaryllo' ),
			'fixed'                 => __( 'Fixed',                    'amaryllo' ),
			'scroll'                => __( 'Scroll',                   'amaryllo' ),
			'background-attachment' => __( 'Background Attachment',    'amaryllo' ),
			'left-top'              => __( 'Left Top',                 'amaryllo' ),
			'left-center'           => __( 'Left Center',              'amaryllo' ),
			'left-bottom'           => __( 'Left Bottom',              'amaryllo' ),
			'right-top'             => __( 'Right Top',                'amaryllo' ),
			'right-center'          => __( 'Right Center',             'amaryllo' ),
			'right-bottom'          => __( 'Right Bottom',             'amaryllo' ),
			'center-top'            => __( 'Center Top',               'amaryllo' ),
			'center-center'         => __( 'Center Center',            'amaryllo' ),
			'center-bottom'         => __( 'Center Bottom',            'amaryllo' ),
			'background-position'   => __( 'Background Position',      'amaryllo' ),
			'background-opacity'    => __( 'Background Opacity',       'amaryllo' ),
			'ON'                    => __( 'ON',                       'amaryllo' ),
			'OFF'                   => __( 'OFF',                      'amaryllo' ),
			'all'                   => __( 'All',                      'amaryllo' ),
			'cyrillic'              => __( 'Cyrillic',                 'amaryllo' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended',        'amaryllo' ),
			'devanagari'            => __( 'Devanagari',               'amaryllo' ),
			'greek'                 => __( 'Greek',                    'amaryllo' ),
			'greek-ext'             => __( 'Greek Extended',           'amaryllo' ),
			'khmer'                 => __( 'Khmer',                    'amaryllo' ),
			'latin'                 => __( 'Latin',                    'amaryllo' ),
			'latin-ext'             => __( 'Latin Extended',           'amaryllo' ),
			'vietnamese'            => __( 'Vietnamese',               'amaryllo' ),
			'serif'                 => _x( 'Serif', 'font style',      'amaryllo' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'amaryllo' ),
			'monospace'             => _x( 'Monospace', 'font style',  'amaryllo' ),
		);

		return $strings;

	}

}
