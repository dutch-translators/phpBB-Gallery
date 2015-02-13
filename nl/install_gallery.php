<?php
/**
*
* install_gallery [Dutch]
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
	'BBCODES_NEEDS_REPARSE'		=> 'De BBCode moet opnieuw opgebouwd worden.',

	'CAT_CONVERT'				=> 'converteer phpBB2',
	'CAT_CONVERT_TS'			=> 'converteer TS Gallery',
	'CAT_UNINSTALL'				=> 'phpBB Galerij deïnstalleren',

	'CHECK_TABLES'				=> 'Controleer tabellen',
	'CHECK_TABLES_EXPLAIN'		=> 'De volgende tabellen moeten bestaan zodat ze geconverteerd kunnen worden.',

	'CONVERT_SMARTOR_INTRO'			=> 'Converteer van “Album-MOD“ van Smartor naar “phpBB Galerij“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'With this convertor, you can convert your albums, images, rates and comments from the <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> by Smartor (tested v2.0.56) and <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (tested v1.4.1) to the phpBB Gallery.<br /><br /><strong>Note:</strong> The <strong>permissions</strong> will <strong>not be copied</strong>.',
	'CONVERT_TS_INTRO'				=> 'Converteer van “TS Gallery“ naar “phpBB Galerij“',
	'CONVERT_TS_INTRO_BODY'			=> 'With this convertor, you can convert your albums, images, rates and comments from the <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (tested v0.2.1) to the phpBB Gallery.<br /><br /><strong>Note:</strong> The <strong>permissions</strong> will <strong>not be copied</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'Conversion from your gallery to phpBB Gallery v%s was successful.<br />Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory.<br /><br /><strong>Please note that the permissions were not copied.</strong><br /><br />You should also clean your database from old entries, where the images are missing. This can be done in “.MODs > phpBB Gallery > Cleanup gallery“.',

	'CONVERTED_ALBUMS'			=> 'De albums zijn succesvol gekopieeerd.',
	'CONVERTED_COMMENTS'		=> 'De reacties zijn succesvol gekopieerd.',
	'CONVERTED_IMAGES'			=> 'De afbeeldingen zijn succesvol gekopieerd.',
	'CONVERTED_MISC'			=> 'Diverse onderdelen geconverteerd.',
	'CONVERTED_PERSONALS'		=> 'De persoonlijke albums zijn succesvol gekopieerd.',
	'CONVERTED_RATES'			=> 'De beoordelingen zijn succesvol gekopieerd.',
	'CONVERTED_RESYNC_ALBUMS'	=> 'Album statestieken synchroniseren.',
	'CONVERTED_RESYNC_COMMENTS'	=> 'Reacties synchroniseren.',
	'CONVERTED_RESYNC_COUNTS'	=> 'Afbeeldingstellers synchroniseren.',
	'CONVERTED_RESYNC_RATES'	=> 'Beoordelingen synchroniseren.',

	'FILE_DELETE_FAIL'				=> 'File could not be deleted, you need to delete it manually',
	'FILE_STILL_EXISTS'				=> 'File still exists',
	'FILES_REQUIRED_EXPLAIN'		=> '<strong>Required</strong> - In order to function correctly phpBB Gallery needs to be able to access or write to certain files or directories. If you see “Unwritable” you need to change the permissions on the file or directory to allow phpBB to write to it.',
	'FILES_DELETE_OUTDATED'			=> 'Delete outdated files',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'When you click to delete the files, they are completly deleted and can not be restored!<br /><br />Please note:<br />If you have more styles and languages installed, you need to delete the files by hand.',
	'FILES_OUTDATED'				=> 'Outdated files',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>Outdated</strong> - In order to deny hacking attempts, please remove the following files.',
	'FOUND_INSTALL'					=> 'Double Installation',
	'FOUND_INSTALL_EXPLAIN'			=> '<strong>Double Installation</strong> - An Installation of the gallery was found! If you continue here, you overwrite all existing data. All albums, images and comments will be deleted! <strong>That´s why an %1$supdate%2$s recommanded.</strong>',
	'FOUND_VERSION'					=> 'The following version was found',
	'FOUNDER_CHECK'					=> 'You are a “Founder“ of this board',
	'FOUNDER_NEEDED'				=> 'You must be a “Founder“ of this board!',

	'INSTALL_CONGRATS_EXPLAIN'	=> 'You have now successfully installed phpBB Gallery v%s.<br/><br/><strong>Please now delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong>',
	'INSTALL_INTRO_BODY'		=> 'With this option, it is possible to install phpBB Gallery onto your board.',

	'GOTO_GALLERY'				=> 'Ga naar phpBB Galerij',
	'GOTO_INDEX'				=> 'Ga naar Forumoverzicht ',

	'MISSING_CONSTANTS'			=> 'Before you can run the install-script, you need to upload your edited files, especially the includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 'Create parent standard-module',
	'MODULES_PARENT_SELECT'		=> 'Choose parent module',
	'MODULES_SELECT_4ACP'		=> 'Choose parent module for “admin control panel“',
	'MODULES_SELECT_4LOG'		=> 'Choose parent module for “Gallery log“',
	'MODULES_SELECT_4MCP'		=> 'Choose parent module for “moderation control panel“',
	'MODULES_SELECT_4UCP'		=> 'Choose parent module for “user control panel“',
	'MODULES_SELECT_NONE'		=> 'no parent module',

	'NO_INSTALL_FOUND'			=> 'No installation was found!',

	'OPTIONAL_EXIFDATA'				=> 'Function “exif_read_data“ exists',
	'OPTIONAL_EXIFDATA_EXP'			=> 'The exif-module is not loaded or installed.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'If the function exists, the exif data of the images are displayed on the imagepage.',
	'OPTIONAL_IMAGEROTATE'			=> 'Function “imagerotate“ exists',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'You should update your GD Version, which is currently “%s“.',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'If the function exists, you can rotate images while uploading and editing them.',

	'PAYPAL_DEV_SUPPORT'				=> '</p><div class="errorbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort, so if you like this MOD and have the desire to express your thanks through a donation, that would be greatly appreciated. My Paypal ID is <strong>nickvergessen@gmx.de</strong>, or contact me for my mailing address.<br /><br />The suggested donation amount for this MOD is 25.00€ (but any amount will help).</p><br />
	<a href="http://www.flying-bits.org/go/paypal"><input type="submit" value="Make PayPal-Donation" name="paypal" id="paypal" class="button1" /></a>
</div><p>',

	'PHP_SETTINGS'				=> 'PHP Instellingen',
	'PHP_SETTINGS_EXP'			=> 'Deze PHP instellingen en configuraties zijn verplicht voor het installeren en het draaien van de galerij.',
	'PHP_SETTINGS_OPTIONAL'		=> 'Optionle PHP instelingen',
	'PHP_SETTINGS_OPTIONAL_EXP'	=> 'Deze PHP instellingen zijn <strong>NIET</strong> verplicht voor normaal gebruik, maak kunnen wel zorgen voor een aantal extra functies.',

	'REQ_GD_LIBRARY'			=> 'GD Library is geïnstalleerd',
	'REQ_PHP_VERSION'			=> 'php versie >= %s',
	'REQ_PHPBB_VERSION'			=> 'phpBB versie >= %s',
	'REQUIREMENTS_EXPLAIN'		=> 'Voordat je verder gaat met de volledige installatie, zal phpBB een aantal test uitvoeren om je serverinstellingen en bestanden te contoleren. Zodat je zeker weet dat je de phpBB galerij kan installeren en draaien. LET OP: Lees de resultaten van deze test goed door om er zeker van te zijn dat alle verplichte tests geslaagd zijn.',

	'STAGE_ADVANCED_EXPLAIN'		=> 'Please choose the parent module for the gallery modules. In normal case you should not change them.',
	'STAGE_COPY_TABLE'				=> 'Copy database-tables',
	'STAGE_COPY_TABLE_EXPLAIN'		=> 'The database-tables for the album- and user-data have the same names in TS Gallery and phpBB Gallery. So we create a copy to be able to convert the data.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'The database tables used by phpBB Gallery have been created and populated with some initial data. Proceed to the next screen to finish installing phpBB Gallery.',
	'STAGE_DELETE_TABLES'			=> 'Clean database',
	'STAGE_DELETE_TABLES_EXPLAIN'	=> 'The database-content of the Gallery-MOD was deleted. Proceed to the next screen to finish uninstalling phpBB Gallery.',
	'SUPPORT_BODY'					=> 'Full support will be provided for the current stable release of phpBB Gallery, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from Release Candidate (RC) versions to the latest stable version</li><li>converting from Smartor’s Album-MOD for phpBB 2.0.x to phpBB Gallery for phpBB3</li><li>converting from TS Gallery to phpBB Gallery</li></ul><p>The use of Beta-Versions is limited recommended. If there are updates, it’s recommended to update quickly.</p><p>Support is given on the following boards</p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - MOD-Autor nickvergessen’s board</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'				=> 'table including the images',
	'TABLE_ALBUM_CAT'			=> 'table including the albums',
	'TABLE_ALBUM_COMMENT'		=> 'table including the comments',
	'TABLE_ALBUM_CONFIG'		=> 'table including the configuration',
	'TABLE_ALBUM_RATE'			=> 'table including the rates',
	'TABLE_EXISTS'				=> 'exists',
	'TABLE_MISSING'				=> 'missing',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefix of phpBB2-installation',

	'UNINSTALL_INTRO'					=> 'Welkom bij deïnstalleren',
	'UNINSTALL_INTRO_BODY'				=> 'Met deze optie is het mogelijk om de phpBB galerij te verwijderen van je forum.<br /><br /><strong>WAARSCHUWING: All albums, afbeelding en reacties worden verwijderd. Dit is onomkeerbaar!</strong>',
	'UNINSTALL_REQUIREMENTS'			=> 'Benodigdheden',
	'UNINSTALL_REQUIREMENTS_EXPLAIN'	=> 'Before proceeding with the full uninstallation phpBB will carry out some tests to ensure that you are allowed to uninstall phpBB Gallery.',
	'UNINSTALL_START'					=> 'Deïnstalleren',
	'UNINSTALL_FINISHED'				=> 'Deïnstalleren bijna voltooid',
	'UNINSTALL_FINISHED_EXPLAIN'		=> 'Je hebt de phpBB galerij succesvol gedeïnstalleerd.<br/><br/><strong>Now you only need to undo the steps of the install.xml and delete the files of the gallery. Afterwards your board is completly free from the gallery.</strong>',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Hier kan je de phpBB galerij updaten.',

	'VERSION_NOT_SUPPORTED'		=> 'Sorry, maar updates van voor versie 1.0.6 worden door deze installatie niet ondersteund.',
));
