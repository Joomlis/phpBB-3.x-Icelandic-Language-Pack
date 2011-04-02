<?php
/**
*
* posting.php fyrir útgáfu 3.0.7-PL1
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
	'ADD_ATTACHMENT'			=> 'Bæta við viðhengi',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ef þú vilt hengja við eina eða fleiri skrár, notaðu reitina hér að neðan.',
	'ADD_FILE'					=> 'Bæta við skrá',
	'ADD_POLL'					=> 'Skoðanakönnun',
	'ADD_POLL_EXPLAIN'			=> 'Ef þú vilt ekki bæta við skoðanakönnun, skildu þessa reiti eftir auða.',
	'ALREADY_DELETED'			=> 'Því miður en þessum skilaboðum hefur þegar verið eytt.',
	'ATTACH_QUOTA_REACHED'		=> 'Því miður en geymsluplásskvótinn fyrir viðhengi orðinn fullur.',
	'ATTACH_SIG'				=> 'Undirskrift (undirskriftina stillirðu í stillingunum þínum)',

	'BBCODE_A_HELP'				=> 'Innbyggt viðhengi: [attachment=]skráarheiti.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Feitletraður texti: [b]texti[/b]',
	'BBCODE_C_HELP'				=> 'Kóðabox: [code]kóði[/code]',
	'BBCODE_E_HELP'				=> 'Listi: Bæta við línu í lista',
	'BBCODE_F_HELP'				=> 'Leturstærð: [size=85]lítill texti[/size]',
	'BBCODE_IS_OFF'				=> '%sBBKóði%s er <em>ÓVIRKUR</em>',
	'BBCODE_IS_ON'				=> '%sBBKóði%s er <em>VIRKUR</em>',
	'BBCODE_I_HELP'				=> 'Skáletraður texti: [i]texti[/i]',
	'BBCODE_L_HELP'				=> 'Listi: [list]texti[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Lína í lista: [*]texti[/*]',
	'BBCODE_O_HELP'				=> 'Flokkaður listi: [list=]texti[/list]',
	'BBCODE_P_HELP'				=> 'Mynd: [img]http://slóð.á.mynd.is[/img]',
	'BBCODE_Q_HELP'				=> 'Tilvitnun: [quote]texti[/quote]',
	'BBCODE_S_HELP'				=> 'Litur texta: [color=red]texti[/color]  Ath: getur líka notað color=#FF0000',
	'BBCODE_U_HELP'				=> 'Undirstrikaður texti: [u]texti[/u]',
	'BBCODE_W_HELP'				=> 'Hlekkur: [url]http://hlekkur.is[/url] eða [url=http://hlekkur.is]Hér er texti[/url]',
	'BBCODE_D_HELP'				=> 'Flass: [flash=vídd,hæð]http://slóð.á.flassið.is[/flash]',
	'BUMP_ERROR'				=> 'Þú getur ekki fært þessa umræðu upp svona fljótt eftir síðasta póst.',

	'CANNOT_DELETE_REPLIED'		=> 'Því miður, þú mátt ekki eyða póstum sem er búið að svara.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Þessi póstur er læstur, þú getur ekki lengur breytt honum.',
	'CANNOT_EDIT_TIME'			=> 'Þú getur ekki lengur breytt eða eytt þessum pósti.',
	'CANNOT_POST_ANNOUNCE'		=> 'Því miður, þú hefur ekki réttindi til að setja inn tilkynningar.',
	'CANNOT_POST_STICKY'		=> 'Því miður, þú hefur ekki réttindi til að setja inn límdar umræður.',
	'CHANGE_TOPIC_TO'			=> 'Breyta tegund',
	'CLOSE_TAGS'				=> 'Loka tögum',
	'CURRENT_TOPIC'				=> 'Núverandi umræða',

	'DELETE_FILE'				=> 'Eyða skrá',
	'DELETE_MESSAGE'			=> 'Eyða skilaboðum',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum skilaboðum?',
	'DELETE_OWN_POSTS'			=> 'Þvi miður þá getur þú aðeins eytt þínum eigin póstum.',
	'DELETE_POST_CONFIRM'		=> 'Ertu viss um að þú viljir eyða þessum skilaboðum?',
	'DELETE_POST_WARN'			=> 'Eftir að pósti hefur verið eytt þá er ekki hægt að sækja hann aftur',
	'DISABLE_BBCODE'			=> 'Gera BBKóða óvirkan',
	'DISABLE_MAGIC_URL'			=> 'Ekki gera vefslóðir sjálfkrafa að tenglum',
	'DISABLE_SMILIES'			=> 'Gera broskalla óvirka',
	'DISALLOWED_CONTENT'		=> 'Sendingunni var hafnað því skráin gæti opnað fyrir mögulega öryggisholu.',
	'DISALLOWED_EXTENSION'		=> 'Skráarendingin %s er ekki leyfð.',
	'DRAFT_LOADED'				=> 'Uppkast hefur verið geymt, þú vilt mögulega klára póstinn núna.<br />Uppkastinu verður hent eftir að því hefur verið póstað.',
	'DRAFT_LOADED_PM'			=> 'Uppkast hefur verið geymt, þú vilt mögulega klára skilaboðin núna.<br />Uppkastinu verður hent eftir að skilaboðin hafa verið send.',
	'DRAFT_SAVED'				=> 'Uppkast hefur verið geymt.',
	'DRAFT_TITLE'				=> 'Titill uppkasts',

	'EDIT_REASON'				=> 'Ástæða breytingar',
	'EMPTY_FILEUPLOAD'			=> 'Innsend skrá er tóm.',
	'EMPTY_MESSAGE'				=> 'Þú verður að skrifa eitthvað þegar þú ert að senda póst.',
	'EMPTY_REMOTE_DATA'			=> 'Ekki tókst að senda inn skrá, prófað að senda skrána inn handvirkt.',

	'FLASH_IS_OFF'				=> '[flash] er <em>ÓVIRKT</em>',
	'FLASH_IS_ON'				=> '[flash] er <em>VIRKT</em>',
	'FLOOD_ERROR'				=> 'Þú getur ekki sent inn önnur skilaboð svona fljótt, bíddu í smá stund.',
	'FONT_COLOR'				=> 'Leturlitur',
	'FONT_COLOR_HIDE'			=> 'Fela lit stafanna',
	'FONT_HUGE'					=> 'Risastórt',
	'FONT_LARGE'				=> 'Stórt',
	'FONT_NORMAL'				=> 'Venjulegt',
	'FONT_SIZE'					=> 'Leturstærð',
	'FONT_SMALL'				=> 'Lítið',
	'FONT_TINY'					=> 'Pínulítið',

	'GENERAL_UPLOAD_ERROR'		=> 'Gat ekki sent inn viðhengi í %s.',

	'IMAGES_ARE_OFF'			=> '[img] er <em>ÓVIRKT</em>',
	'IMAGES_ARE_ON'				=> '[img] er <em>VIRKT</em>',
	'INVALID_FILENAME'			=> '%s er ógilt skráarheiti.',

	'LOAD'						=> 'Opna',
	'LOAD_DRAFT'				=> 'Opna uppkast',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hér getur þú valið uppkastið sem þú vilt halda áfram að skrifa.  Hætt verður við núverandi póst og innihaldi hans hent.  Þú getur skoðað, breytt og hent uppköstum í notandastillingunum þínum.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Þú verður að vera skráður inn til að færa upp umræður í þessu spjallsvæði.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Þú verður að vera skráður inn til að eyða póstum á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_POST'		=> 'Þú verður að vera skráður inn til að pósta á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Þú verður að vera skráður inn til að vitna í pósta á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Þú verður að vera skráður inn til að svara umræðum á þessu spjallsvæði.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Hámarksleturstærð er %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Flass skrár mega að hámarki vera %1$d punktar á hæð.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Flass skrár mega að hámarki vera %1$d punktar á breidd.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Myndir mega að hámarki vera %1$d punktar á hæð.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Myndir mega að hámarki vera %1$d punktar á breidd.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Skrifaðu skilaboðin hér, þau mega ekki innihalda meira en <strong>%d</strong> stafi.',
	'MESSAGE_DELETED'			=> 'Skilaboðum eytt.',
	'MORE_SMILIES'				=> 'Skoða fleiri broskalla',

	'NOTIFY_REPLY'				=> 'Láta mig vita þegar svar kemur',
	'NOT_UPLOADED'				=> 'Ekki tókst að senda inn skrá.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Þú getur ekki eytt valmöguleikum sem eru þegar til.',
	'NO_PM_ICON'				=> 'Engin ES mynd',
	'NO_POLL_TITLE'				=> 'Þú verður að hafa titil á skoðanakönnuninni.',
	'NO_POST'					=> 'Umbeðinn póstur er ekki til.',
	'NO_POST_MODE'				=> 'Enginn pósthamur valinn.',

	'PARTIAL_UPLOAD'			=> 'Aðeins hluti skrárinnar var sendur inn.',
	'PHP_SIZE_NA'				=> 'Viðhengið er of stórt. Ekki var hægt að ákvarða hámarksstærð í php.ini',
	'PHP_SIZE_OVERRUN'			=> 'Viðhengið er of stórt, hámarksstærðin er %d MB samkvæmt php.ini.',
	'PLACE_INLINE'				=> 'Fella inn',
	'POLL_DELETE'				=> 'Eyða skoðanakönnun',
	'POLL_FOR'					=> 'Keyra könnun í',
	'POLL_FOR_EXPLAIN'			=> 'Skrifaðu 0 eða hafðu autt fyrir könnun sem endar aldrei.',
	'POLL_MAX_OPTIONS'			=> 'Valmöguleikar á notanda',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Hámarksfjöldi möguleika sem hver notandi má velja.',
	'POLL_OPTIONS'				=> 'Stillingar könnunar',
	'POLL_OPTIONS_EXPLAIN'		=> 'Settu hvern valmöguleika í nýja línu. Þú mátt setja allt að <strong>%d</strong> valmöguleika.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Settu hvern valmöguleika í nýja línu. Þú mátt setja allt að <strong>%d</strong> valmöguleika. Ef þú breytir valmöguleikunum þá hverfa öll atkvæði sem er búið að safna.',
	'POLL_QUESTION'				=> 'Spurning',
	'POLL_TITLE_TOO_LONG'		=> 'Spurningin má ekki vera lengri en 100 stafir.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Spurningin er of löng, prófaðu að fjarlægja BBKóða eða broskalla.',
	'POLL_VOTE_CHANGE'			=> 'Leyfa að kjósa aftur',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ef leyft þá geta notendur breytt atkvæðum sínum.',
	'POSTED_ATTACHMENTS'		=> 'Innsend viðhengi',
	'POST_APPROVAL_NOTIFY'		=> 'Þú verður látinn vita þegar pósturinn hefur verið samþykktur.',
	'POST_CONFIRMATION'			=> 'Staðfesting á pósti',
	'POST_CONFIRM_EXPLAIN'		=> 'Til að koma í veg fyrir að sjálfvirkir bottar sendi skilaboð hér þá verður þú að skrifa stafarununa hér að neðan.  Ef þú getur ekki lesið textann á myndinni skaltu hafa samband við %smmsjónarmenn spjallborðsins%s.',
	'POST_DELETED'				=> 'Skilaboðum eytt!',
	'POST_EDITED'				=> 'Skilaboðum breytt!',
	'POST_EDITED_MOD'			=> 'Breyting tókst, en þú verður að bíða eftir samþykki póststjóra, áður en almenningur sér breytinguna.',
	'POST_GLOBAL'				=> 'Allsstaðar',
	'POST_ICON'					=> 'Umræðumerki',
	'POST_NORMAL'				=> 'Venjulegt',
	'POST_REVIEW'				=> 'Senda umsögn',
	'POST_REVIEW_EXPLAIN'		=> 'Að minnsta kosti einn nýr póstur hefur verið gerður í þessa umræðu. Þú gætir viljað yfirfara póstinn með nýju upplýsingarnar í huga.',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'Skilaboðin hafa verið sent.',
	'POST_STORED_MOD'			=> 'Skilaboðin voru send, en þú verður að bíða eftir samþykki póststjóra áður en almenningur sér þau.',
	'POST_TOPIC_AS'				=> 'Pósta umræðu sem',
	'PROGRESS_BAR'				=> 'Stöðustika',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Þú mátt aðeins nota %1$d tilvitnanir inní hvor annari.',

	'SAVE'						=> 'Vista',
	'SAVE_DATE'					=> 'Vistað þann',
	'SAVE_DRAFT'				=> 'Vista uppkast',
	'SAVE_DRAFT_CONFIRM'		=> 'Athugaðu að uppkast inniheldur aðeins titil og skilaboð, allt annað er fjarlægt.  Viltu vista uppkastið núna?',
	'SMILIES'					=> 'Broskallar',
	'SMILIES_ARE_OFF'			=> 'Broskallar eru <em>ÓVIRKIR</em>',
	'SMILIES_ARE_ON'			=> 'Broskallar eru <em>VIRKIR</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tímamörk tilkynningar',
	'STICK_TOPIC_FOR'			=> 'Líma umræðu í',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Skrifaðu 0 eða hafðu autt fyrir engin tímamörk.',
	'STYLES_TIP'				=> 'Ábending: Auðvelt er að breyta völdum texta.',

	'TOO_FEW_CHARS'				=> 'Skilaboðin inniheldur of fáa stafi.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Your message contains %1$d characters. The minimum number of characters you need to enter is %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Þú verður að hafa að minnsta kosti tvo valmöguleika.',
	'TOO_MANY_ATTACHMENTS'		=> 'Get ekki sett annað viðhengi, %d er hámarkið.',
	'TOO_MANY_CHARS'			=> 'Skilaboðin þín innihalda of marga stafi.',
	'TOO_MANY_CHARS_POST'		=> 'Skilaboðin þín innihalda %1$d stafi. Hámarkið er %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Undirskriftin þín inniheldur %1$d stafi. Hámarkið er %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Þú hafðir of marga valmöguleika.',
	'TOO_MANY_SMILIES'			=> 'Skilaboðin þín innihalda of marga broskalla. Hámarkið er %d.',
	'TOO_MANY_URLS'				=> 'Skilaboðin þín innihalda of marga hlekki. Hámarkið er %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Þú getur ekki valið fleiri möguleika á notanda en fjöldi valmöguleika.',
	'TOPIC_BUMPED'				=> 'Umræða hefur verið færð upp.',

	'UNAUTHORISED_BBCODE'		=> 'Þu getur ekki notað þessa BBKóða: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Til að breyta þessari umræðu í venjulega umræðu, verður þú að velja hvar hún á að vera.',
	'UPDATE_COMMENT'			=> 'Uppfæra skilaboð',
	'URL_INVALID'				=> 'Uppgefin slóð er ógild.',
	'URL_NOT_FOUND'				=> 'Skráin fannst ekki.',
	'URL_IS_OFF'				=> '[url] er <em>ÓVIRKT</em>',
	'URL_IS_ON'					=> '[url] er <em>VIRKT</em>',
	'USER_CANNOT_BUMP'			=> 'Þú getur ekki fært upp umræður í þessu spjallsvæði.',
	'USER_CANNOT_DELETE'		=> 'Þú getur ekki eytt póstum í þessu spjallsvæði.',
	'USER_CANNOT_EDIT'			=> 'Þú getur ekki breytt póstum á þessu spjallsvæði.',
	'USER_CANNOT_REPLY'			=> 'Þú getur ekki svarað á þessu spjallsvæði.',
	'USER_CANNOT_FORUM_POST'	=> 'Þú getur ekki framkvæmt póstaðgerðir á þessu svæði vegna þess að svæðið leyfir þær ekki.',

	'VIEW_MESSAGE'				=> '%sSýna innsend skilaboð%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sSýna send einkaskilaboð%s',

	'WRONG_FILESIZE'			=> 'Skráin er of stór, hámark er %1d %2s.',
	'WRONG_SIZE'				=> 'Myndin verður að vera að minnsta kosti %1$d punkta breið, %2$d punkta há og mest %3$d punkta breið og %4$d punkta há. Innsenda myndin er %5$d punkta breið og %6$d punkta há.',
));

?>
