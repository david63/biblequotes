<?php
/**
 *
 * @package Bible Quotes Extension
 * @copyright (c) 2019 david63
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace david63\biblequotes\controller;

use phpbb\config\config;
use phpbb\request\request;
use phpbb\template\template;
use phpbb\user;
use phpbb\language\language;
use phpbb\log\log;
use david63\biblequotes\core\functions;

/**
 * Admin controller
 */
class admin_controller
{
	/** @var config */
	protected $config;

	/** @var request */
	protected $request;

	/** @var template */
	protected $template;

	/** @var user */
	protected $user;

	/** @var language */
	protected $language;

	/** @var log */
	protected $log;

	/** @var functions */
	protected $functions;

	/** @var string */
	protected $ext_images_path;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor for admin controller
	 *
	 * @param config		$config         	Config object
	 * @param request		$request        	Request object
	 * @param template		$template       	Template object
	 * @param user			$user           	User object
	 * @param language		$language       	Language object
	 * @param log			$log            	Log object
	 * @param functions		$functions      	Functions for the extension
	 * @param string		$ext_images_path    Path to this extension's images
	 *
	 * @return \david63\biblequotes\controller\admin_controller
	 * @access public
	 */
	public function __construct(config $config, request $request, template $template, user $user, language $language, log $log, functions $functions, string $ext_images_path)
	{
		$this->config    		= $config;
		$this->request   		= $request;
		$this->template  		= $template;
		$this->user      		= $user;
		$this->language  		= $language;
		$this->log       		= $log;
		$this->functions		= $functions;
		$this->ext_images_path	= $ext_images_path;
	}

	/**
	 * Display the options a user can configure for this extension
	 *
	 * @return null
	 * @access public
	 */
	public function display_options()
	{
		// Add the language files
		$this->language->add_lang(['acp_biblequotes', 'acp_common', 'bible_versions'], $this->functions->get_ext_namespace());

		// Create a form key for preventing CSRF attacks
		add_form_key('biblequotes');

		$back = false;

		// Is the form being submitted?
		if ($this->request->is_set_post('submit'))
		{
			// Is the submitted form is valid?
			if (!check_form_key('biblequotes'))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// If no errors, process the form data
			// Set the options the user configured
			$this->set_manage_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'BIBLE_QUOTES_MANAGE_LOG');

			// Option settings have been updated and logged
			// Confirm this to the user and provide link back to previous page
			trigger_error($this->language->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$bible_version_options = '';
		foreach ($this->language->lang_raw('bible_versions') as $key => $bible_version)
		{
			$selected = ($this->config['bq_version'] == $key) ? ' selected="selected"' : '';
			$bible_version_options .= '<option value="' . $key . '"' . $selected . '>' . $bible_version . '</option>';
		}

		$bible_version_opts = '<select name="bq_version" id="bq_version">' . $bible_version_options . '</select>';

		// Template vars for header panel
		$version_data = $this->functions->version_check();

		// Are the PHP and phpBB versions valid for this extension?
		$valid = $this->functions->ext_requirements();

		$this->template->assign_vars([
			'DOWNLOAD' 			=> (array_key_exists('download', $version_data)) ? '<a class="download" href =' . $version_data['download'] . '>' . $this->language->lang('NEW_VERSION_LINK') . '</a>' : '',

			'EXT_IMAGE_PATH'	=> $this->ext_images_path,

			'HEAD_TITLE' 		=> $this->language->lang('BIBLE_QUOTES'),
			'HEAD_DESCRIPTION'	=> $this->language->lang('BIBLE_QUOTES_MANAGE_EXPLAIN'),

			'NAMESPACE' 		=> $this->functions->get_ext_namespace('twig'),

			'PHP_VALID' 		=> $valid[0],
			'PHPBB_VALID' 		=> $valid[1],

			'S_BACK' 			=> $back,
			'S_VERSION_CHECK' 	=> (array_key_exists('current', $version_data)) ? $version_data['current'] : false,

			'VERSION_NUMBER' 	=> $this->functions->get_meta('version'),
		]);

		$this->template->assign_vars([
			'BQ_APOCRYPHA' 		=> isset($this->config['bq_apocrypha']) ? $this->config['bq_apocrypha'] : '',
			'BQ_TOOLTIP_CLICK'	=> isset($this->config['bq_click_tooltip']) ? $this->config['bq_click_tooltip'] : '',
			'BQ_TOOLTIP_SHOW' 	=> isset($this->config['bq_show_tooltips']) ? $this->config['bq_show_tooltips'] : '',
			'BQ_VERSION' 		=> $bible_version_opts,

			'U_ACTION' 			=> $this->u_action,
		]);
	}

	/**
	 * Set the options a user can configure
	 *
	 * @return null
	 * @access protected
	 */
	protected function set_manage_options()
	{
		$this->config->set('bq_apocrypha', $this->request->variable('bq_apocrypha', 0));
		$this->config->set('bq_click_tooltip', $this->request->variable('bq_click_tooltip', 0));
		$this->config->set('bq_show_tooltips', $this->request->variable('bq_show_tooltips', 1));
		$this->config->set('bq_version', $this->request->variable('bq_version', 'KJ21'));
	}

	/**
	 * Set page url
	 *
	 * @param string $u_action Custom form action
	 * @return null
	 * @access public
	 */
	public function set_page_url($u_action)
	{
		return $this->u_action = $u_action;
	}
}
