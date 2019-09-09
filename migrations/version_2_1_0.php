<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\biblequotes\migrations;

use phpbb\db\migration\migration;

class version_2_1_0 extends migration
{
	public function update_data()
	{
		return array(
			// Add the config variables
			array('config.add', array('bq_apocrypha', 0)),
			array('config.add', array('bq_click_tooltip', 0)),
			array('config.add', array('bq_show_tooltips', 1)),
			array('config.add', array('bq_version', 'KJ21')),

			// Add the ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'BIBLE_QUOTES')),

			array('module.add', array(
				'acp', 'BIBLE_QUOTES', array(
					'module_basename'	=> '\david63\biblequotes\acp\acp_biblequotes_module',
					'modes'				=> array('manage', 'upload'),
				),
			)),
		);
	}
}
