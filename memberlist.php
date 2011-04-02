<?php
/**
*
* memberlist.php fyrir útgáfu 3.0.7-PL1
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
	'ABOUT_USER'			=> 'Stillingar',
	'ACTIVE_IN_FORUM'		=> 'Virkasta spjallsvæðið',
	'ACTIVE_IN_TOPIC'		=> 'Virkasta umræðan',
	'ADD_FOE'				=> 'Setja sem óvin',
	'ADD_FRIEND'			=> 'Setja sem vin',
	'AFTER'					=> 'Eftir',

	'ALL'					=> 'Allt',

	'BEFORE'				=> 'Fyrir',

	'CC_EMAIL'				=> 'Senda afrit af tölvupóstinum til þín.',
	'CONTACT_USER'			=> 'Hafa samband við',

	'DEST_LANG'				=> 'Tungumál',
	'DEST_LANG_EXPLAIN'		=> 'Veldu tungumál (ef mögulegt) fyrir móttakanda skilaboðanna.',

	'EMAIL_BODY_EXPLAIN'	=> 'Þessi skilaboð verða send sem texti, ekki nota neinn HTML eða BBKóða. Tölvupóstfang sendanda þessara skilaboða verður þitt tölvupóstfang',
	'EMAIL_DISABLED'		=> 'Þvi miður hafa allar tölvupóstsaðgerðir verið gerðar óvirkar.',
	'EMAIL_SENT'			=> 'Tölvupósturinn hefur verið sendur.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Þessi skilaboð verða send sem texti, ekki nota neinn HTML eða BBKóða. Vinsamlega athugaðu að upplýsingar um efnið hafa verið settir í skilaboðin. Tölvupóstfang sendanda þessara skilaboða verður þitt tölvupóstfang',
	'EMPTY_ADDRESS_EMAIL'	=> 'Þú verður að gefa upp gilt tölvupóstfang fyrir móttakanda.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Þú verður að skrifa skilaboð sem á að senda.',
	'EMPTY_MESSAGE_IM'		=> 'Þú verður að skrifa skilaboð sem á að senda.',
	'EMPTY_NAME_EMAIL'		=> 'Þú verður að setja rétt nafn móttakanda.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Þú verður að setja titil á tölvupóstinn.',
	'EQUAL_TO'				=> 'Jafngildir',

	'FIND_USERNAME_EXPLAIN'	=> 'Notaðu þetta form til að leita að ákveðnum notendum. Þú þarft ekki að skrifa í alla reitina. Til að leita að hluta úr nafni notarðu *.  Dagsetningar verða að vera á sniðinu ÁÁÁÁ-MM-DD, t.d. <samp>2004-02-29</samp>.  Merktu við viðeigandi notendanöfn (ef boðið er upp það í forminu) og smelltu á Velja merkta hnappinn til að fara til baka.',
	'FLOOD_EMAIL_LIMIT'		=> 'Þú getur ekki sent annan tölvupóst strax, bíddu aðeins og reyndu svo aftur.',

	'GROUP_LEADER'			=> 'Stjórnandi hóps',

	'HIDE_MEMBER_SEARCH'	=> 'Fela notendaleit',

	'IM_ADD_CONTACT'		=> 'Bæta við tengilið',
	'IM_AIM'				=> 'Vinsamlegast athugaðu að þú þarft að vera með AOL uppsett til að gera þetta.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Sækja forrit',
	'IM_ICQ'				=> 'Athugaðu að notendur geta ráðið hverjum þeir fá skilaboð frá, og þú ert örugglega ekki á þeim lista.',
	'IM_JABBER'				=> 'Athugaðu að notendur geta ráðið hverjum þeir fá skilaboð frá, og þú ert örugglega ekki á þeim lista.',
	'IM_JABBER_SUBJECT'		=> 'Þetta eru sjálfvirk skilaboð, EKKI SENDA SVAR! Skilaboð frá %1$s á %2$s.',
	'IM_MESSAGE'			=> 'Þín skilaboð',
	'IM_MSNM'				=> 'Vinsamlegast athugaðu að þú þarft að vera með Windows Live Messenger til að nota þetta.',
	'IM_MSNM_BROWSER'		=> 'Vafri þinn styður þetta ekki.',
	'IM_MSNM_CONNECT'		=> 'MSNM er ekki tengdur.\nÞú verður að tengjast í MSNM svo þetta virki.',		
	'IM_NAME'				=> 'Þitt nafn',
	'IM_NO_DATA'			=> 'Engar upplýsingar fundust um þennan notanda.',
	'IM_NO_JABBER'			=> 'Því miður, beinar sendingar milli Jabber notenda ekki leyfðar.  Þú verður að nota Jabber hugbúnað til að hafa samband við viðkomandi',
	'IM_RECIPIENT'			=> 'Móttakandi',
	'IM_SEND'				=> 'Senda skilaboð',
	'IM_SEND_MESSAGE'		=> 'Senda skilaboð',
	'IM_SENT_JABBER'		=> 'Skilaboðin þín til %1$s hafa verið send.',
	'IM_USER'				=> 'Senda skilaboð',
	
	'LAST_ACTIVE'				=> 'Síðast virkur',
	'LESS_THAN'					=> 'Minna en',
	'LIST_USER'					=> '1 notandi',
	'LIST_USERS'				=> '%d notendur',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Þú verður að vera skráður inn til að sjá hópa.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Þú verður að vera skráður inn til að sjá meðlimalista.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Þú verður að vera skráður inn til að leita að notendum.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Þú verður að vera skráður inn til að skoða upplýsingar.',

	'MORE_THAN'				=> 'Meira en',

	'NO_EMAIL'				=> 'Þu hefur ekki réttindi til að senda þessum notanda tölvupóst.',
	'NO_VIEW_USERS'			=> 'Þú hefur ekki réttindi til að skoða notendalistann eða upplýsingar.',

	'ORDER'					=> 'Röðun',
	'OTHER'					=> 'Annað',

	'POST_IP'				=> 'Sent inn frá IP/Léni',

	'RANK'					=> 'Staða',
	'REAL_NAME'				=> 'Nafn móttakanda',
	'RECIPIENT'				=> 'Móttakandi',
	'REMOVE_FOE'			=> 'Fjarlægja óvin',
	'REMOVE_FRIEND'			=> 'Fjarlægja vin',

	'SEARCH_USER_POSTS'		=> 'Leita að póstum notanda',
	'SELECT_MARKED'			=> 'Velja merkt',
	'SELECT_SORT_METHOD'	=> 'Velja flokkunaraðferð',
	'SEND_AIM_MESSAGE'		=> 'Senda AIM skilaboð',
	'SEND_ICQ_MESSAGE'		=> 'Senda ICQ skilaboð',
	'SEND_IM'				=> 'Skyndiskilaboð',
	'SEND_JABBER_MESSAGE'	=> 'Senda Jabber skilaboð',
	'SEND_MESSAGE'			=> 'Skilaboð',
	'SEND_MSNM_MESSAGE'		=> 'Senda MSNM/WLM skilaboð',
	'SEND_YIM_MESSAGE'		=> 'Senda YIM skilaboð',
	'SORT_EMAIL'			=> 'Tölvupóstfangi',
	'SORT_LAST_ACTIVE'		=> 'Síðast Virkur',
	'SORT_POST_COUNT'		=> 'Póstfjölda',

	'USERNAME_BEGINS_WITH'	=> 'Notandanafn byrjar á',
	'USER_ADMIN'			=> 'Stjórna notanda',
	'USER_BAN'				=> 'Banna',
	'USER_FORUM'			=> 'Staða notanda',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Tengdur',
	'USER_PRESENCE'			=> 'Viðvera',

	'VIEWING_PROFILE'		=> 'Sýni notanda - %s',
	'VISITED'				=> 'Síðasta heimsókn',

	'WWW'					=> 'Vefsíða',
));

?>
