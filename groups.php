<?php
/**
*
* groups.php fyrir útgáfu 3.0.7-PL1
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
	'ALREADY_DEFAULT_GROUP'		=> 'Valinn hópur er nú þegar aðalhópur þinn.',
	'ALREADY_IN_GROUP'			=> 'Þú ert nú þegar meðlimur í þessum hóp.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Þú ert nú þegar búinn að sækja um að vera meðlimur í þessum hóp.',

	'CANNOT_JOIN_GROUP'			=> 'Þú getur ekki sótt um þennan hóp. Þú getur aðeins sótt um opna hópa.',
	'CANNOT_RESIGN_GROUP'		=> 'Þú getur ekki sagt þig úr þessum hóp. Þú getur aðeins sagt þig úr opnum hópum.',
	'CHANGED_DEFAULT_GROUP'		=> 'Breyting á aðalhóp þínum tókst.',
	
	'GROUP_AVATAR'						=> 'Smámynd hóps',
	'GROUP_CHANGE_DEFAULT'				=> 'Ertu viss um að þú viljir breyta aðalhóp þínum í hópinn „%s“?',
	'GROUP_CLOSED'						=> 'Lokaður',
	'GROUP_DESC'						=> 'Lýsing hóps',
	'GROUP_HIDDEN'						=> 'Falinn',
	'GROUP_INFORMATION'					=> 'Upplýsingar um notendahóp',
	'GROUP_IS_CLOSED'					=> 'Þetta er lokaður hópur, nýjir meðlimir geta aðeins tekið þátt með boði frá hópstjóranum.',
	'GROUP_IS_FREE'						=> 'Þetta er opinn hópur, allir meðlimir eru velkomnir.',
	'GROUP_IS_HIDDEN'					=> 'Þetta er falinn hópur, aðeins meðlimir hópsins geta séð meðlimaskrána.',
	'GROUP_IS_OPEN'						=> 'Þetta er opinn hópur, skráðir notendur geta sótt um að taka þátt.',
	'GROUP_IS_SPECIAL'					=> 'Þetta er sérstakur hópur, sérstökum hópum er stjórnað af Stjórnendum',
	'GROUP_JOIN'						=> 'Taka þátt í hópnum',
	'GROUP_JOIN_CONFIRM'				=> 'Ertu viss um að þú viljir taka þátt í þessum hóp ?',
	'GROUP_JOIN_PENDING'				=> 'Sækja um inngöngu í hóp',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ertu viss um að þú viljir sækja um inngöngu í þennan hóp?',
	'GROUP_JOINED'						=> 'Skráning í þennann hóp tókst.',
	'GROUP_JOINED_PENDING'				=> 'Umsókn um inngöngu í hóp tókst. Vinsamlega bíddu eftir því að hópstjóri samþykki þig.',
	'GROUP_LIST'						=> 'Stjórna notendum',
	'GROUP_MEMBERS'						=> 'Meðlimir hóps',
	'GROUP_NAME'						=> 'Nafn hóps',
	'GROUP_OPEN'						=> 'Opinn',
	'GROUP_RANK'						=> 'Staða hóps',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Segja upp þáttöku í þessum hóp',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ertu viss um að þú viljir segja upp þáttöku í þessum hóp?',
	'GROUP_RESIGN_PENDING'				=> 'Draga umsókn til baka',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ertu viss um að þú viljir draga umsóknina til baka úr þessum hóp?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Þú hefur verið fjarlægður úr völdum hóp.',
	'GROUP_RESIGNED_PENDING'			=> 'Umsókn dregin til baka.',
	'GROUP_TYPE'						=> 'Tegund hóps',
	'GROUP_UNDISCLOSED'					=> 'Falinn hópur',
	'FORUM_UNDISCLOSED'					=> 'Stjórna földu spjallsvæði',

	'LOGIN_EXPLAIN_GROUP'	=> 'Þú verður að skrá þig inn til að sjá upplýsingar um hópa.',

	'NO_LEADERS'					=> 'Þú ert ekki stjórnandi neins hóps.',
	'NOT_LEADER_OF_GROUP'			=> 'Umbeðin aðgerð er óframkvæmanleg því þú ert ekki stjórnandi viðkomandi hóps.',
	'NOT_MEMBER_OF_GROUP'			=> 'Umbeðin aðgerð er óframkvæmanleg því þú ert ekki meðlimur þessa hóps eða umsókn þín hefur ekki enn verið samþykkt.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Þú getur ekki hætt í aðalhópnum þínum',
	
	'PRIMARY_GROUP'		=> 'Aðalhópur',

	'REMOVE_SELECTED'		=> 'Eyða völdu',

	'USER_GROUP_CHANGE'			=> 'Frá „%1$s“ hóp í „%2$s“',
	'USER_GROUP_DEMOTE'			=> 'Lækka í tign',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ert þú viss um að þú viljir hætta sem stjórnandi viðkomandi hóps?',
	'USER_GROUP_DEMOTED'		=> 'Hættur sem stjórnandi hópsins.',
));

?>
