<?php
/**
*
* viewtopic.php fyrir útgáfu 3.0.7-PL1
* 
* Þýðingu Lokið:      Gunnar Guðvarðarson
* Yfirlestri lokið:   Nei
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
	'ATTACHMENT'						=> 'Viðhengi',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Viðhengi eru ekki leyfð.',

	'BOOKMARK_ADDED'		=> 'Umræðan hefur verið merkt.',
	'BOOKMARK_ERR'			=> 'Ekki tókst að merkja umræðuna. Vinsamlegast reyndu aftur.',
	'BOOKMARK_REMOVED'		=> 'Fjarlægði merki.',
	'BOOKMARK_TOPIC'		=> 'Merkja umræðu',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjarlægja úr merkjunum',
	'BUMPED_BY'				=> 'Síðast færð upp af %1$s þann %2$s.',
	'BUMP_TOPIC'			=> 'Færa umræðu upp',

	'CODE'					=> 'Kóði',
	'COLLAPSE_QR'			=> 'Hide Quick Reply',

	'DELETE_TOPIC'			=> 'Eyða umræðu',
	'DOWNLOAD_NOTICE'		=> 'Þú hefur ekki næg réttindi til að skoða skrárnar í þessum póst.',

	'EDITED_TIMES_TOTAL'	=> 'Síðast breytt af %1$s þann %2$s, breytt samtals %3$d sinnum.',
	'EDITED_TIME_TOTAL'		=> 'Síðast breytt af %1$s þann %2$s, breytt samtals %3$d sinni.',
	'EMAIL_TOPIC'			=> 'Senda vini tölvupóst',
	'ERROR_NO_ATTACHMENT'	=> 'Valin skrá er ekki lengur til.',

	'FILE_NOT_FOUND_404'	=> 'Skráin <strong>%s</strong> er ekki til.',
	'FORK_TOPIC'			=> 'Afrita umræðu',
	'FULL_EDITOR'			=> 'Full Editor',

	'LINKAGE_FORBIDDEN'		=> 'Þú hefur ekki réttindi til að skoða, sækja eða gera hlekki á þennan vef.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Þú varst látinn vita af þessari umræðu, skráðu þig inn til að sjá hana.',
	'LOGIN_VIEWTOPIC'		=> 'Spjallborðið krefst þess að þú skráir þig inn til að lesa þessa umræðu.',

	'MAKE_ANNOUNCE'				=> 'Breyta í „Tilkynningu“',
	'MAKE_GLOBAL'				=> 'Breyta í „Almenna tilkynningu“',
	'MAKE_NORMAL'				=> 'Breyta í „Venjulega umræðu“',
	'MAKE_STICKY'				=> 'Breyta í „Límt“',
	'MAX_OPTIONS_SELECT'		=> 'Þú mátt velja allt að <strong>%d</strong> valmöguleika',
	'MAX_OPTION_SELECT'			=> 'Þú mátt velja <strong>1</strong> valmöguleika',
	'MISSING_INLINE_ATTACHMENT'	=> 'Skráin <strong>%s</strong> er ekki lengur aðgengileg',
	'MOVE_TOPIC'				=> 'Færa umræðu',

	'NO_ATTACHMENT_SELECTED'=> 'Þú hefur ekki valið skrá til að sækja eða skoða.',
	'NO_NEWER_TOPICS'		=> 'Það eru engar nýrri umræður í þessu svæði.',
	'NO_OLDER_TOPICS'		=> 'Það eru engar eldri umræður á þessu svæði.',
	'NO_UNREAD_POSTS'		=> 'Það eru engir ólesnir póstar í þessu svæði.',
	'NO_VOTE_OPTION'		=> 'Þú verður að velja valmöguleika þegar þú kýst.',
	'NO_VOTES'				=> 'Engin atkvæði',

	'POLL_ENDED_AT'			=> 'Skoðanakönnunin endaði þann %s',
	'POLL_RUN_TILL'			=> 'Skoðanakönnunin er virk til %s',
	'POLL_VOTED_OPTION'		=> 'Þú valdir þennann valkost',
	'PRINT_TOPIC'			=> 'Prenthamur',

	'QUICK_MOD'				=> 'Flýtiverkfæri póststjóra',
	'QUICKREPLY'			=> 'Quick Reply',
	'QUOTE'					=> 'Vitna í',

	'REPLY_TO_TOPIC'		=> 'Svara umræðu',
	'RETURN_POST'			=> '%sFara aftur í póstinn%s',

	'SHOW_QR'				=> 'Quick Reply',
	'SUBMIT_VOTE'			=> 'Staðfesta atkvæði',

	'TOTAL_VOTES'			=> 'Samtals atkvæði',

	'UNLOCK_TOPIC'			=> 'Taka lás af umræðu',

	'VIEW_INFO'				=> 'Upplýsingar um póst',
	'VIEW_NEXT_TOPIC'		=> 'Næsta umræða',
	'VIEW_PREVIOUS_TOPIC'	=> 'Fyrri umræða',
	'VIEW_RESULTS'			=> 'Sýna niðurstöður',
	'VIEW_TOPIC_POST'		=> '1 póstur',
	'VIEW_TOPIC_POSTS'		=> '%d póstar',
	'VIEW_UNREAD_POST'		=> 'Fyrsti ólesni pósturinn',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Atkvæði þitt hefur verið móttekið.',
	'VOTE_CONVERTED'		=> 'Ekki er hægt að breyta atkvæðum í könnunum sem hafa verið fluttar.',

));

?>
