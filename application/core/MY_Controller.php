<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	/**
	 * [$theme_base Fetches the theme base from config file, if defined and prepends it with the view pathh, while fetching ].
	 * @var null
	 */
	private $theme_base = null;

	/**
	 * [__construct Gets the theme from config file and set it to the $theme_base variable ].
	 */
	public function __construct() {
		parent::__construct();
		$config = $this->config->config;
		$this->load->library( 'session' );

		if ( isset( $config['theme'] ) && ! empty( $config['theme'] ) ) {
			$this->theme_base = $config['theme'] . '/';
		}
	}

	/**
	 * [render_view To render the view including all page components].
	 * @param  [string] $view [partial view / component name].
	 * @param  array  $vars [additional variables to pass to the view].
	 */
	protected function render_view( $view, $vars = array() ) {
		$vars['content'] = $this->get_component_view( $view, $vars );
		$this->load->view( $this->theme_base . 'base', $vars, FALSE );
	}

	/**
	 * [get_component_view Fetches the component and returns the HTML to the callee].
	 * @param  [string] $view [partial view / component name].
	 * @param  array  $vars [additional variables to pass to the view].
	 * @return [string]       [HTML of the partial view]
	 */
	protected function get_component_view( $view, $vars = array() ) {
		$vars['_module_name'] = $view;
		return $this->load->view( $this->theme_base . 'content', $vars, TRUE );
	}
}