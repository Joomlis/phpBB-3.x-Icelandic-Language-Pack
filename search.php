<?php
/**
*
* search.php fyrir útgáfu 3.0.7-PL1
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
	'ALL_AVAILABLE'			=> 'Öllum',
	'ALL_RESULTS'			=> 'Allar niðurstöður',

	'DISPLAY_RESULTS'		=> 'Sýna niðurstöður sem',

	'FOUND_SEARCH_MATCH'		=> 'Leitin fann %d niðurstöðu',
	'FOUND_SEARCH_MATCHES'		=> 'Leitin fann %d niðurstöður',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Leitin fann meira en %d niðurstöður',

	'GLOBAL'				=> 'Almenn tilkynning',

	'IGNORED_TERMS'			=> 'hunsað',
	'IGNORED_TERMS_EXPLAIN'	=> 'Eftirfarandi orð í leitinni voru ekki talin með því þau eru of algeng: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Fara í póst',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Spjallborðið vill hafa þig skráðan inn svo þú getir fundið þína eigin pósta.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'The board requires you to be registered and logged in to view your unread posts.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'You specified too many words to search for. Please do not enter more than %1$d words.',

	'NO_KEYWORDS'			=> 'Þú verður að gefa upp að minnsta kosti eitt orð til að leita að. Hvert orð verður að vera að minnsta kosti %d bókstafir og má ekki vera lengra en %d bókstafir fyrir utan *.',
	'NO_RECENT_SEARCHES'	=> 'Engin leit hefur verið keyrð nýlega.',
	'NO_SEARCH'				=> 'Þú hefur ekki réttindi til að nota leitina.',
	'NO_SEARCH_RESULTS'		=> 'Engar niðurstöður fundust.',
	'NO_SEARCH_TIME'		=> 'Því miður getur þú ekki notað leitina núna. Reyndu aftur eftir nokkrar mínútur.',
	'WORD_IN_NO_POST'		=> 'Engir póstar fundust því orðið <strong>%s</strong> er ekki notað neinstaðar.',
	'WORDS_IN_NO_POST'		=> 'Engir póstar fundust því orðin <strong>%s</strong> eru ekki notuð neinstaðar.',

	'POST_CHARACTERS'		=> 'bókstöfum í póstum',

	'RECENT_SEARCHES'		=> 'Nýlegar leitir',
	'RESULT_DAYS'			=> 'Takmarka niðurstöður við síðustu',
	'RESULT_SORT'			=> 'Flokka niðurstöður eftir',
	'RETURN_FIRST'			=> 'Skila fyrstu',
	'RETURN_TO_SEARCH_ADV'	=> 'Fara aftur í flókna leit',

	'SEARCHED_FOR'				=> 'Leitarorð notað',
	'SEARCHED_TOPIC'			=> 'Umræða',
	'SEARCH_ALL_TERMS'			=> 'Leita að öllum orðum eða nákvæmlega eins og er skrifað',
	'SEARCH_ANY_TERMS'			=> 'Leita að öllum orðunum',
	'SEARCH_AUTHOR'				=> 'Leita að höfundi',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Notaðu * sem algildisstaf.',
	'SEARCH_FIRST_POST'			=> 'Eingöngu í fyrsta pósti í umræðum',
	'SEARCH_FORUMS'				=> 'Leita í svæðum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Veldu svæði sem þú vilt leita í.',
	'SEARCH_IN_RESULTS'			=> 'Leita í þessum niðurstöðum',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Settu <strong>+</strong> fyrir framan orð sem verða að finnast og <strong>-</strong> fyrir framan orð sem mega ekki finnast. Settu lista af orðum með því að aðskilja þau með <strong>|</strong> inní [ og ] ef aðeins eitt orðið verður að finnast. Notaðu * sem algildisstaf.',
	'SEARCH_MSG_ONLY'			=> 'Eingöngu í texta póstsins',
	'SEARCH_OPTIONS'			=> 'Leitarstillingar',
	'SEARCH_QUERY'				=> 'Leitarstrengur',
	'SEARCH_SUBFORUMS'			=> 'Leita í undirflokkum',
	'SEARCH_TITLE_MSG'			=> 'Titlum og textum í póstum',
	'SEARCH_TITLE_ONLY'			=> 'Eingöngu í titlum',
	'SEARCH_WITHIN'				=> 'Leita i',
	'SORT_ASCENDING'			=> 'Upp',
	'SORT_AUTHOR'				=> 'Höfundi',
	'SORT_DESCENDING'			=> 'Niður',
	'SORT_FORUM'				=> 'Spjallsvæði',
	'SORT_POST_SUBJECT'			=> 'Titli pósts',
	'SORT_TIME'					=> 'Tíma',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Verður að gefa upp að minnsta kosti %d stafi í nafni höfundarins.',
));

?>
