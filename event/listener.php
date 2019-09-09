<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\biblequotes\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use phpbb\config\config;
use phpbb\template\template;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config							$config				Config object
	* @param \phpbb\template\template						$template			Template object
	*
	* @return \david63\biblequotes\event\listener
	* @access public
	*/
	public function __construct(config $config, template $template)
	{
		$this->config				= $config;
		$this->template				= $template;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.viewtopic_assign_template_vars_before' 	=> 'assign_template_vars',
			'core.posting_modify_message_text' 				=> 'assign_template_vars',
			'core.search_results_modify_search_title'		=> 'assign_template_vars',
		);
	}

	/**
	* Set the template variables
	*
	* @param $event
	*
	* @return null
	* @access public
	*/
	public function assign_template_vars($event)
	{
		$this->template->assign_vars(array(
			'S_APOCRYPHA'		=> $this->config['bq_apocrypha'],
			'S_CLICK_TOOLTIP'	=> $this->config['bq_click_tooltip'],
			'S_SHOW_TOOLTIPS'	=> $this->config['bq_show_tooltips'],
			'S_VERSION'			=> $this->config['bq_version'],
		));
	}
}
