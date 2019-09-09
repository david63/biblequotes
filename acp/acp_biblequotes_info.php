<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\biblequotes\acp;

class acp_biblequotes_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\biblequotes\acp\acp_biblequotes_module',
			'title'		=> 'BIBLE_QUOTES',
			'modes'		=> array(
				'manage'	=> array('title' => 'BIBLE_QUOTES_MANAGE', 'auth' => 'ext_david63/biblequotes && acl_a_board', 'cat' => array('BIBLE_QUOTES')),
			),
		);
	}
}
