<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\biblequotes\acp;

class acp_biblequotes_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container;

		$this->tpl_name		= 'biblequotes_manage';
		$this->page_title	= $phpbb_container->get('language')->lang('BIBLE_QUOTES');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.biblequotes.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		$admin_controller->display_options();
	}
}
