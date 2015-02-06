<?php
/**
*
* gallery_mcp [Dutch]
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

$lang = array_merge($lang, array(
	'CHOOSE_ACTION'					=> 'Selecteer de gewenste actie',

	'GALLERY_MCP_MAIN'				=> 'Begin',
	'GALLERY_MCP_OVERVIEW'			=> 'Overzicht',
	'GALLERY_MCP_QUEUE'				=> 'Wachtrij',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Afbeelding details',
	'GALLERY_MCP_REPORTED'			=> 'Gemelde afbeeldingen',
	'GALLERY_MCP_REPO_DONE'			=> 'Gesloten meldingen',
	'GALLERY_MCP_REPO_OPEN'			=> 'Open meldingen',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Melding details',
	'GALLERY_MCP_UNAPPROVED'		=> 'Afbeeldingen wachtend op goedkeuring',
	'GALLERY_MCP_APPROVED'			=> 'Goedgekeurde afbeeldingen',
	'GALLERY_MCP_LOCKED'			=> 'Gesloten afbeelding',
	'GALLERY_MCP_VIEWALBUM'			=> 'Ga naar album',

	'IMAGE_REPORTED'				=> 'The image was reported.',
	'IMAGE_UNAPPROVED'				=> 'De afbeelding wacht op goedkeuring.',

	'MODERATE_ALBUM'				=> 'Modereer album',

	'LATEST_IMAGES_REPORTED'		=> 'Laatste 5 meldingen',
	'LATEST_IMAGES_UNAPPROVED'		=> 'Laatste 5 afbeeldingen wachtend op goedkeuring',

	'QUEUE_A_APPROVE'				=> 'Approve image',
	'QUEUE_A_APPROVE2'				=> 'Approve image?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Are you sure, you want to approve this image?',
	'QUEUE_A_DELETE'				=> 'Delete image',
	'QUEUE_A_DELETE2'				=> 'Delete image?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete this image?',
	'QUEUE_A_LOCK'					=> 'Lock image',
	'QUEUE_A_LOCK2'					=> 'Lock image?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Are you sure, you want to lock this image?',
	'QUEUE_A_MOVE'					=> 'Move image',
	'QUEUE_A_UNAPPROVE'				=> 'Unapprove image',
	'QUEUE_A_UNAPPROVE2'			=> 'Unapprove image?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Are you sure, you want to unapprove this image?',

	'QUEUE_STATUS_0'				=> 'The image is waiting for approval.',
	'QUEUE_STATUS_1'				=> 'The image is approved.',
	'QUEUE_STATUS_2'				=> 'The image is locked.',

	'QUEUES_A_APPROVE'				=> 'Approve images',
	'QUEUES_A_APPROVE2'				=> 'Approve images?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Are you sure, you want to approve these images?',
	'QUEUES_A_DELETE'				=> 'Delete images',
	'QUEUES_A_DELETE2'				=> 'Delete images?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete these images?',
	'QUEUES_A_LOCK'					=> 'Lock images',
	'QUEUES_A_LOCK2'				=> 'Lock images?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Are you sure, you want to lock these images?',
	'QUEUES_A_MOVE'					=> 'Move images',
	'QUEUES_A_UNAPPROVE'			=> 'Unapprove images',
	'QUEUES_A_UNAPPROVE2'			=> 'Unapprove images?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Are you sure, you want to unapprove these images?',

	'REPORT_A_CLOSE'				=> 'Close report',
	'REPORT_A_CLOSE2'				=> 'Close report?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Are you sure, you want to close this report?',
	'REPORT_A_DELETE'				=> 'Delete report',
	'REPORT_A_DELETE2'				=> 'Delete report?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete this report?',
	'REPORT_A_OPEN'					=> 'Open report',
	'REPORT_A_OPEN2'				=> 'Open report?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Are you sure, you want to open this report?',

	'REPORT_NOT_FOUND'				=> 'The report could not be found.',
	'REPORT_STATUS_1'				=> 'The report needs to be reviewed.',
	'REPORT_STATUS_2'				=> 'The report is closed.',

	'REPORTS_A_CLOSE'				=> 'Close reports',
	'REPORTS_A_CLOSE2'				=> 'Close reports?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Are you sure, you want to close these reports?',
	'REPORTS_A_DELETE'				=> 'Delete reports',
	'REPORTS_A_DELETE2'				=> 'Delete reports?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Are you sure, you want to delete these reports?',
	'REPORTS_A_OPEN'				=> 'Open reports',
	'REPORTS_A_OPEN2'				=> 'Open reports?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Are you sure, you want to open these reports?',

	'REPORT_MOD'					=> 'Edited by',
	'REPORTED_IMAGES'				=> 'Reported images',
	'REPORTER'						=> 'Reporting user',
	'REPORTER_AND_ALBUM'			=> 'Reporter & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'No images approved.',
		1			=> 'In total there is <span style="font-weight: bold;">1</span> image approved.',
		2			=> 'In total there are <span style="font-weight: bold;">%s</span> images approved.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'No images locked.',
		1			=> 'In total there is <span style="font-weight: bold;">1</span> image locked.',
		2			=> 'In total there are <span style="font-weight: bold;">%s</span> images locked.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'No reports reviewed.',
		1			=> 'In total there is <span style="font-weight: bold;">1</span> report reviewed.',
		2			=> 'In total there are <span style="font-weight: bold;">%s</span> reports reviewed.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'No reports to review.',
		1			=> 'In total there is <span style="font-weight: bold;">1</span> report to review.',
		2			=> 'In total there are <span style="font-weight: bold;">%s</span> reports to review.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'No images waiting for approval.',
		1			=> 'In total there is <span style="font-weight: bold;">1</span> image waiting for approval.',
		2			=> 'In total there are <span style="font-weight: bold;">%s</span> images waiting for approval.',
	),
));
