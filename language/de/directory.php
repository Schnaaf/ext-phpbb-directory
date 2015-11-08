<?php
/**
*
* phpBB Directory extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 ErnadoO <http://www.phpbb-services.com>
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

// DEVELOPERS PLEASE NOTE
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

$lang = array_merge($lang, array(
	'DIR_ARE_WATCHING_CAT'					=> 'Du wirst über neue Webseiten in dieser Categorie informiert..',
	'DIR_BANNER_DISALLOWED_CONTENT'			=> 'Die Übertragung wurde abgebrochen weil die Datei als potentielles Sicherheitsrisiko identifiziert wurde.',
	'DIR_BANNER_DISALLOWED_EXTENSION'		=> 'Diese Datei kann nicht angezeigt werden da die Dateinamenerweiterung <strong>%s</strong> nicht erlaubt ist.',
	'DIR_BANNER_EMPTY_FILEUPLOAD'			=> 'Die Bannerdatei ist leer.',
	'DIR_BANNER_EMPTY_REMOTE_DATA'			=> 'Der Banner kann nicht übertragen werden weil die Daten unvollständig sind oder korrumpiert wurden.',
	'DIR_BANNER_IMAGE_FILETYPE_MISMATCH'	=> 'Die Dateiendung des Banners ist fehlerhaft: erwartete Dateiendung %1$s aber Dateiendung %2$s wurde aufgegeben.',
	'DIR_BANNER_INVALID_FILENAME'			=> '%s ist ein ungültiger Dateiname.',
	'DIR_BANNER_NOT_UPLOADED'				=> 'Der Banner kann nicht übertragen werden',
	'DIR_BANNER_PARTIAL_UPLOAD'				=> 'Die Datei kann nicht vollständig übertragen werden.',
	'DIR_BANNER_PHP_SIZE_NA'				=> 'Die Bannerdatei ist zu groß. <br />Die maximale Größe gezetzt in php.ini konnte nicht ermittelt werden".',
	'DIR_BANNER_PHP_SIZE_OVERRUN'			=> 'Die Bannerdatei ist zu groß. Die maximale erlaubte Größe ist %d Mo.<br />Aufgepasst, diese Einstellung wird in php.ini configuriert und kann nicht überschritten werden.',
	'DIR_BANNER_REMOTE_UPLOAD_TIMEOUT'		=> 'Der aufgegebene Banner konnte nicht hochgelanden werden weil die maximale Wartezeit abgelaufen ist.',
	'DIR_BANNER_UNABLE_GET_IMAGE_SIZE'		=> 'Die Bannerdimensionen konnten nicht ermittelt werden',
	'DIR_BANNER_URL_INVALID'				=> 'Die Banneradresse ist nicht ungültig',
	'DIR_BANNER_URL_NOT_FOUND'				=> 'Die Datei wurde nicht gefunden.',
	'DIR_BANNER_WRONG_FILESIZE'				=> 'Die Bannergröße muss zwischen 0 und %1d %2s. sein',
	'DIR_BANNER_WRONG_SIZE'					=> 'Der aufgegebene Banner hat eine Breite von %3$d pixels und eine Höhe von %4$d Pixel. Der Banner darf nicht breiter sein als %1$d Pixel und %2$d hoch.',
	'DIR_BUTTON_NEW_SITE'					=> 'Neuer Link',
	'DIR_CAT'								=> 'Kategorie',
	'DIR_CAT_NAME'							=> 'Kategoriename',
	'DIR_CAT_TITLE'							=> 'Verzeichnis’ Kategorien',
	'DIR_CAT_TOOLS'							=> 'Kategoriewerkzeug',
	'DIR_CLICK_RETURN_DIR'					=> 'Klicke %shier%s um zurück zu kehren zum Homeverzeichnis',
	'DIR_CLICK_RETURN_CAT'					=> 'Klicke %shier%s um zurück zu kehren zur Kategorie',
	'DIR_CLICK_RETURN_COMMENT'				=> 'Klicke %shier%s um zurück zu kehren zu die Kommentarseite',
	'DIR_COMMENTS_ORDER'					=> 'Komentare',
	'DIR_COMMENT_TITLE'						=> 'Lese/Schreibe einen Kommentar',
	'DIR_COMMENT_DELETE'					=> 'Kommentar löschen',
	'DIR_COMMENT_DELETE_CONFIRM'			=> 'Bist du sicher das du diesen Kommentar lösschen möchtest?',
	'DIR_COMMENT_DELETE_OK'					=> 'Dieser Kommentar wurde erfolgreich gelöscht.',
	'DIR_COMMENT_EDIT'						=> 'Kommentar ändern',
	'DIR_DELETE_BANNER'						=> 'Banner löschen',
	'DIR_DELETE_OK'							=> 'Die Website wurde gelöscht',
	'DIR_DELETE_SITE'						=> 'Webseite löschen',
	'DIR_DELETE_SITE_CONFIRM'				=> 'Bist du sicher das du diese Webseite lösschen möchtest?',
	'DIR_DESCRIPTION'						=> 'Beschreibung',
	'DIR_DESCRIPTION_EXP'					=> 'Kurzbeschreibung der Webseite, maximal %d Karakter.',
	'DIR_DISPLAY_LINKS'						=> 'Zeige vorherige Links',
	'DIR_EDIT'								=> 'Ändern',
	'DIR_EDIT_COMMENT_OK'					=> 'Dieses Komentar wurde erfolgreich geändert',
	'DIR_EDIT_SITE'							=> 'Webseite ändern',
	'DIR_EDIT_SITE_ACTIVE'					=> 'Deine Webseite wurde geändert. Sie muss aber erst genehmigt werden bevor sie sichtbar wird in das Verzeichnis',
	'DIR_EDIT_SITE_OK'						=> 'Die Webseite wurde geändert',
	'DIR_ERROR_AUTH_COMM'					=> 'Du hast keine Berechtigung Kommentare an zu legen',
	'DIR_ERROR_CAT'							=> 'Error while trying to recover data from the current category.',
	'DIR_ERROR_CHECK_URL'					=> 'This URL seems unreachable',
	'DIR_ERROR_COMM_LOGGED'					=> 'You must be logged in to post a comment',
	'DIR_ERROR_KEYWORD'						=> 'You must enter kewyords to search.',
	'DIR_ERROR_NOT_AUTH'					=> 'You are not allowed to do this operation',
	'DIR_ERROR_NOT_FOUND_BACK'				=> 'The specified page for the link back is not found.',
	'DIR_ERROR_NO_CATS'						=> 'This category doesn’t exist',
	'DIR_ERROR_NO_LINK'						=> 'The website you are looking for doesn’t exist',
	'DIR_ERROR_NO_LINKS'					=> 'This website doesn’t exist',
	'DIR_ERROR_NO_LINK_BACK'				=> 'The link back hasn’t been found on the page you’ve specified',
	'DIR_ERROR_SUBMIT_TYPE'					=> 'Incorrect data type in dir_submit_type function',
	'DIR_ERROR_URL'							=> 'You must enter a correct URL',
	'DIR_ERROR_VOTE'						=> 'You have already voted for this website',
	'DIR_ERROR_VOTE_LOGGED'					=> 'You must be logged in to vote',
	'DIR_ERROR_WRONG_DATA_BACK'				=> 'The address for the link back must be a valid URL, including the protocol. For example http://www.example.com/.',
	'DIR_FIELDS'							=> 'Please fill all the fields with a *',
	'DIR_FLAG'								=> 'Flag',
	'DIR_FLAG_EXP'							=> 'Select a flag, wich indicates the nationality of the site',
	'DIR_FROM_TEN'							=> '%s/10',
	'DIR_GUEST_EMAIL'						=> 'Your email address',
	'DIR_MAKE_SEARCH'						=> 'Search a website',
	'DIR_NAME_ORDER'						=> 'Name',
	'DIR_NEW_COMMENT_OK'					=> 'This comment has been posted successfully',
	'DIR_NEW_SITE'							=> 'Add a website to the directory',
	'DIR_NEW_SITE_ACTIVE'					=> 'Your website has been added, but it must be approved before appearing in the directory',
	'DIR_NEW_SITE_OK'						=> 'Your website has been added to the directory',
	'DIR_NB_CLICKS'							=> array(
													1 => '%d click',
													2 => '%d clicks',
												),
	'DIR_NB_CLICKS_ORDER'					=> 'Clicks',
	'DIR_NB_COMMS'							=> array(
													1 => '%d comment',
													2 => '%d comments',
												),
	'DIR_NB_LINKS'							=> array(
													1 => '%d link',
													2 => '%d links',
												),
	'DIR_NB_VOTES'							=> array(
													1 => '%d vote',
													2 => '%d votes',
												),
	'DIR_NONE'								=> 'None',
	'DIR_NOTE'								=> 'Notation',
	'DIR_NO_COMMENT'						=> 'There is no comment for this website',
	'DIR_NO_DRAW_CAT'						=> 'There is no category',
	'DIR_NO_DRAW_LINK'						=> 'There is no website in the category',
	'DIR_NO_NOTE'							=> 'None',
	'DIR_NOT_WATCHING_CAT'					=> 'You are no longer subscribed to this categorie.',

	'DIR_PAGERANK'							=> 'Pr',
	'DIR_PAGERANK_NOT_AVAILABLE'			=> 'n/a',
	'DIR_PR_ORDER'							=> 'PageRank',
	'DIR_REPLY_EXP'							=> 'Your comment cannot be more than %d characters long.',
	'DIR_REPLY_TITLE'						=> 'Post a comment',
	'DIR_RSS'								=> 'RSS of',
	'DIR_SEARCH_CATLIST'					=> 'Search in a specific category',
	'DIR_SEARCH_DESC_ONLY'					=> 'Description only',
	'DIR_SEARCH_METHOD'						=> 'Method',
	'DIR_SEARCH_NB_CLICKS'					=> array(
													1 => 'Click',
													2 => 'Clicks',
												),
	'DIR_SEARCH_NB_COMMS'					=> array(
													1 => 'Comment',
													2 => 'Comments',
												),
	'DIR_SEARCH_NO_RESULT'					=> 'No result for the research',
	'DIR_SEARCH_RESULT'						=> 'Search results',
	'DIR_SEARCH_SUBCATS'					=> 'Search subcategories',
	'DIR_SEARCH_TITLE_DESC'					=> 'Name and description',
	'DIR_SEARCH_TITLE_ONLY'					=> 'Name only',
	'DIR_SITE_BACK'							=> 'Back link’s page URL',
	'DIR_SITE_BACK_EXPLAIN'					=> 'In this category, it is asked that the website owner adds a link back. Please specify the URL of the page where we can find the link',
	'DIR_SITE_BANN'							=> 'Add a banner ',
	'DIR_SITE_BANN_EXP'						=> 'You must enter here the complete URL of your banner. Please note that this field is not required. The maximum size allowed is <b>%d x %d</b> pixels, the banner will be automatically resized if the size is outreached.',
	'DIR_SITE_NAME'							=> 'Website name',
	'DIR_SITE_RSS'							=> 'RSS feeds',
	'DIR_SITE_RSS_EXPLAIN'					=> 'You may add the address of the RSS feeds if there is one. An RSS icone will be displayed next to your website, allowing people to suscribe to it',
	'DIR_SITE_URL'							=> 'URL',
	'DIR_SOMMAIRE'							=> 'Home of the Directory',
	'DIR_START_WATCHING_CAT'				=> 'Suscribe categorie',
	'DIR_STOP_WATCHING_CAT'					=> 'Unscribe categorie',
	'DIR_SUBMIT_TYPE_1'						=> 'Your website need to be approved by an adminsitrator.',
	'DIR_SUBMIT_TYPE_2'						=> 'Your website will appear immediately in the directory.',
	'DIR_SUBMIT_TYPE_3'						=> 'You are administrator, your website will be automatically added.',
	'DIR_SUBMIT_TYPE_4'						=> 'You are moderator, your website will be automatically added.',
	'DIR_THUMB'								=> 'Website thumbnail',
	'DIR_USER_PROP'							=> 'Website submitted by',
	'DIR_VOTE'								=> 'Vote',
	'DIR_VOTE_OK'							=> 'Your vote has been submitted',
	'DIR_POST'								=> 'Post',

	'DIRECTORY_TRANSLATION_INFO'			=> '',

	'RECENT_LINKS'							=> 'Last websites added',

	// Don't translate this line!
	'SEED'									=> 'Mining PageRank is AGAINST GOOGLE’S TERMS OF SERVICE. Yes, I’m talking to you, scammer.',

	'TOO_LONG_BACK'							=> 'Address containing link back is too long (255 characters maximum)',
	'TOO_LONG_DESCRIPTION'					=> 'Your description is too long',
	'TOO_LONG_REPLY'						=> 'Your comment is too long',
	'TOO_LONG_RSS'							=> 'The URL for the RSS feeds is too long',
	'TOO_LONG_SITE_NAME'					=> 'The name you have entered is too long (100 characters max)',
	'TOO_LONG_URL'							=> 'The URL you have entered is too long (255 characters max)',
	'TOO_MANY_ADDS'							=> 'You have reached the total number of attempt for a website submission. Try again later.',
	'TOO_SHORT_BACK'						=> 'You must enter the address of the page where the back link is.',
	'TOO_SHORT_DESCRIPTION'					=> 'You must enter a description',
	'TOO_SHORT_REPLY'						=> 'Your comment is too short',
	'TOO_SHORT_RSS'							=> 'The URL for the RSS feeds is too short',
	'TOO_SHORT_SITE_NAME'					=> 'You must enter a name for the website',
	'TOO_SHORT_URL'							=> 'You must enter an address for the website',
	'TOO_SMALL_CAT'							=> 'You have to select a category',

	'WRONG_DATA_RSS'						=> 'The RSS feeds must be a valid URL, including the protocol. For example http://www.example.com/.',
	'WRONG_DATA_WEBSITE'					=> 'The website address has to be a valid URL, including the protocol. For example http://www.example.com/.',
));
