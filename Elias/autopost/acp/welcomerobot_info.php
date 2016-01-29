<?php
/**
*
* @package autoPost
* @copyright Elias
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace Elias\autopost\acp;

class welcomerobot_info
{
	function module()
	{
		return array(
			'filename'	=> '\Elias\autopost\acp\welcomerobot_module',
			'title'		=> 'ACP_WELCOMEROBOT_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'welcomerobot_settings'	=> array('title' => 'ACP_WELCOMEROBOT_SETTINGS', 'auth' => 'ext_Elias/autopost && acl_a_welcomerobot_mod', 'cat' => array('ACP_WELCOMEROBOT_TITLE')),
			),
		);
	}
}