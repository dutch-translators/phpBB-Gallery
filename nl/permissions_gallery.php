<?php
/**
*
* permissions_gallery [Dutch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
**/

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

$lang['permission_cat']['gallery'] = 'phpBB Gallery';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_gallery_manage'		=> array('lang' => 'Kan de phpBB Galerij instellingen beheren',	'cat' => 'gallery'),
	'acl_a_gallery_albums'		=> array('lang' => 'Kan albums en permissies toevoegen/wijzigen',		'cat' => 'gallery'),
	'acl_a_gallery_import'		=> array('lang' => 'Kan de importeer-functie gebruiken',	        'cat' => 'gallery'),
	'acl_a_gallery_cleanup'		=> array('lang' => 'Kan de phpBB Galerij opruimen',			'cat' => 'gallery'),
));
