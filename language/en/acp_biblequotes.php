<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BIBLE_QUOTES'					=> 'Bible quotes',
	'BIBLE_QUOTES_MANAGE_EXPLAIN'	=> 'Select here the options that are required for the displaying of bible quotes in posts.<br>This extension is using the quotes from the <a href="https://www.biblegateway.com/">Bible Gateway</a>',
	'BQ_APOCRYPHA'					=> 'Apocrypha',
	'BQ_APOCRYPHA_EXPLAIN'			=> 'Set to “Yes” to find references to books in the Apocrypha.',
	'BQ_TOOLTIP_CLICK'				=> 'Tooltip click',
	'BQ_TOOLTIP_CLICK_EXPLAIN'		=> 'Set to “Yes” to show the tooltip when clicking the link rather than when hovering over it.',
	'BQ_TOOLTIP_SHOW'				=> 'Tooltip show',
	'BQ_TOOLTIP_SHOW_EXPLAIN'		=> 'Set to “No” to add links to Bible Gateway without any tooltip functionality.',
	'BQ_VERSION'					=> 'Bible version',
	'BQ_VERSION_EXPLAIN'			=> 'Select the bible version that is required.',

	'EN'							=> 'English',
	'ES'							=> 'Spanish',

	'VERSION'						=> 'Version',
));

// Donate
$lang = array_merge($lang, array(
	'DONATE'					=> 'Donate',
	'DONATE_EXTENSIONS'			=> 'Donate to my extensions',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'This extension, as with all of my extensions, is totally free of charge. If you have benefited from using it then please consider making a donation by clicking the PayPal donation button opposite - I would appreciate it. I promise that there will be no spam nor requests for further donations, although they would always be welcome.',

	'PAYPAL_BUTTON'				=> 'Donate with PayPal button',
	'PAYPAL_TITLE'				=> 'PayPal - The safer, easier way to pay online!',
));
