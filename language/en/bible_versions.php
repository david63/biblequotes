<?php
/**
*
* @package Bible Quotes Extension
* @copyright (c) 2019 david63
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
	$lang = [];
}

/// DEVELOPERS PLEASE NOTE
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'bible_versions' => array(
		'AMU' 		=> 'Amuzgo de Guerrero (AMU)',
		'ERV-AR' 	=> 'Arabic Bible: Easy-to-Read Version (ERV-AR)',
		'NAV' 		=> 'Ketab El Hayat (NAV)',
		'ERV-AWA' 	=> 'Awadhi Bible: Easy-to-Read Version (ERV-AWA)',
		'BG1940' 	=> '1940 Bulgarian Bible (BG1940)',
		'BULG' 		=> 'Bulgarian Bible (BULG)',
		'ERV-BG' 	=> 'Bulgarian New Testament: Easy-to-Read Version (ERV-BG)',
		'CBT' 		=> 'Библия, нов превод от оригиналните езици (с неканоничните книги) (CBT)',
		'BOB' 		=> 'Библия, синодално издание (BOB)',
		'BPB' 		=> 'Библия, ревизирано издание (BPB)',
		'CCO' 		=> 'Chinanteco de Comaltepec (CCO)',
		'APSD-CEB' 	=> 'Ang Pulong Sa Dios (APSD-CEB)',
		'CHR' 		=> 'Cherokee New Testament (CHR)',
		'KSS' 		=> 'Kurdi Sorani Standard (KSS)',
		'CKW' 		=> 'Cakchiquel Occidental (CKW)',
		'B21' 		=> 'Bible 21 (B21)',
		'SNC' 		=> 'Slovo na cestu (SNC)',
		'BWM' 		=> 'Beibl William Morgan (BWM)',
		'BPH' 		=> 'Bibelen på hverdagsdansk (BPH)',
		'DN1933' 	=> 'Dette er Biblen på dansk (DN1933)',
		'HOF' 		=> 'Hoffnung für Alle (HOF)',
		'LUTH1545' 	=> 'Luther Bibel 1545 (LUTH1545)',
		'NGU-DE' 	=> 'Neue Genfer Übersetzung (NGU-DE)',
		'SCH1951' 	=> 'Schlachter 1951 (SCH1951)',
		'SCH2000' 	=> 'Schlachter 2000 (SCH2000)',
		'KJ21' 		=> '21st Century King James Version (KJ21)',
		'ASV' 		=> 'American Standard Version (ASV)',
		'AMP' 		=> 'Amplified Bible (AMP)',
		'AMPC' 		=> 'Amplified Bible, Classic Edition (AMPC)',
		'BRG' 		=> 'BRG Bible (BRG)',
		'CSB' 		=> 'Christian Standard Bible (CSB)',
		'CEB' 		=> 'Common English Bible (CEB)',
		'CJB' 		=> 'Complete Jewish Bible (CJB)',
		'CEV' 		=> 'Contemporary English Version (CEV)',
		'DARBY' 	=> 'Darby Translation (DARBY)',
		'DLNT' 		=> 'Disciples’ Literal New Testament (DLNT)',
		'DRA' 		=> 'Douay-Rheims 1899 American Edition (DRA)',
		'ERV' 		=> 'Easy-to-Read Version (ERV)',
		'EHV' 		=> 'Evangelical Heritage Version (EHV)',
		'ESV' 		=> 'English Standard Version (ESV)',
		'ESVUK' 	=> 'English Standard Version Anglicised (ESVUK)',
		'EXB' 		=> 'Expanded Bible (EXB)',
		'GNV' 		=> '1599 Geneva Bible (GNV)',
		'GW' 		=> 'GOD’S WORD Translation (GW)',
		'GNT' 		=> 'Good News Translation (GNT)',
		'HCSB' 		=> 'Holman Christian Standard Bible (HCSB)',
		'ICB' 		=> 'International Children’s Bible (ICB)',
		'ISV' 		=> 'International Standard Version (ISV)',
		'PHILLIPS' 	=> 'J.B. Phillips New Testament (PHILLIPS)',
		'JUB' 		=> 'Jubilee Bible 2000 (JUB)',
		'KJV' 		=> 'King James Version (KJV)',
		'AKJV' 		=> 'Authorized (King James) Version (AKJV)',
		'LEB' 		=> 'Lexham English Bible (LEB)',
		'TLB' 		=> 'Living Bible (TLB)',
		'MSG' 		=> 'The Message (MSG)',
		'MEV' 		=> 'Modern English Version (MEV)',
		'MOUNCE' 	=> 'Mounce Reverse-Interlinear New Testament (MOUNCE)',
		'NOG' 		=> 'Names of God Bible (NOG)',
		'NABRE' 	=> 'New American Bible (Revised Edition) (NABRE)',
		'NASB' 		=> 'New American Standard Bible (NASB)',
		'NCV' 		=> 'New Century Version (NCV)',
		'NET' 		=> 'New English Translation (NET Bible)',
		'NIRV'		=> 'New International Reader&#039;s Version (NIRV)',
		'NIV' 		=> 'New International Version (NIV)',
		'NIVUK' 	=> 'New International Version - UK (NIVUK)',
		'NKJV' 		=> 'New King James Version (NKJV)',
		'NLV' 		=> 'New Life Version (NLV)',
		'NLT' 		=> 'New Living Translation (NLT)',
		'NMB' 		=> 'New Matthew Bible (NMB)',
		'NRSV' 		=> 'New Revised Standard Version (NRSV)',
		'NRSVA' 	=> 'New Revised Standard Version, Anglicised (NRSVA)',
		'NRSVACE' 	=> 'New Revised Standard Version, Anglicised Catholic Edition (NRSVACE)',
		'NRSVCE' 	=> 'New Revised Standard Version Catholic Edition (NRSVCE)',
		'NTE' 		=> 'New Testament for Everyone (NTE)',
		'OJB' 		=> 'Orthodox Jewish Bible (OJB)',
		'TPT' 		=> 'The Passion Translation (TPT)',
		'RGT' 		=> 'Revised Geneva Translation (RGT)',
		'RSV' 		=> 'Revised Standard Version (RSV)',
		'RSVCE' 	=> 'Revised Standard Version Catholic Edition (RSVCE)',
		'TLV' 		=> 'Tree of Life Version (TLV)',
		'VOICE' 	=> 'The Voice (VOICE)',
		'WEB' 		=> 'World English Bible (WEB)',
		'WE' 		=> 'Worldwide English (New Testament) (WE)',
		'WYC' 		=> 'Wycliffe Bible (WYC)',
		'YLT' 		=> 'Young&#039;s Literal Translation (YLT)',
		'LBLA' 		=> 'La Biblia de las Américas (LBLA)',
		'DHH' 		=> 'Dios Habla Hoy (DHH)',
		'JBS' 		=> 'Jubilee Bible 2000 (Spanish) (JBS)',
		'NBLH' 		=> 'Nueva Biblia Latinoamericana de Hoy (NBLH)',
		'NBV' 		=> 'Nueva Biblia Viva (NBV)',
		'NTV' 		=> 'Nueva Traducción Viviente (NTV)',
		'NVI' 		=> 'Nueva Versión Internacional (NVI)',
		'CST' 		=> 'Nueva Versión Internacional (Castilian) (CST)',
		'PDT' 		=> 'Palabra de Dios para Todos (PDT)',
		'BLP' 		=> 'La Palabra (España) (BLP)',
		'BLPH' 		=> 'La Palabra (Hispanoamérica) (BLPH)',
		'RVA-2015' 	=> 'Reina Valera Actualizada (RVA-2015)',
		'RVC' 		=> 'Reina Valera Contemporánea (RVC)',
		'RVR1960' 	=> 'Reina-Valera 1960 (RVR1960)',
		'RVR1977' 	=> 'Reina Valera Revisada (RVR1977)',
		'RVR1995' 	=> 'Reina-Valera 1995 (RVR1995)',
		'RVA' 		=> 'Reina-Valera Antigua (RVA)',
		'SRV-BRG' 	=> 'Spanish Blue Red and Gold Letter Edition (SRV-BRG)',
		'TLA' 		=> 'Traducción en lenguaje actual (TLA)',
		'R1933' 	=> 'Raamattu 1933/38 (R1933)',
		'BDS' 		=> 'La Bible du Semeur (BDS)',
		'LSG' 		=> 'Louis Segond (LSG)',
		'NEG1979' 	=> 'Nouvelle Edition de Genève – NEG1979 (NEG1979)',
		'SG21' 		=> 'Segond 21 (SG21)',
		'TR1550' 	=> '1550 Stephanus New Testament (TR1550)',
		'WHNU' 		=> '1881 Westcott-Hort New Testament (WHNU)',
		'TR1894' 	=> '1894 Scrivener New Testament (TR1894)',
		'SBLGNT' 	=> 'SBL Greek New Testament (SBLGNT)',
		'THGNT' 	=> 'Tyndale House Greek New Testament (THGNT)',
		'HHH' 		=> 'Habrit Hakhadasha/Haderekh (HHH)',
		'WLC' 		=> 'The Westminster Leningrad Codex (WLC)',
		'ERV-HI' 	=> 'Hindi Bible: Easy-to-Read Version (ERV-HI)',
		'SHB' 		=> 'Saral Hindi Bible (SHB)',
		'HLGN' 		=> 'Ang Pulong Sang Dios (HLGN)',
		'NCA' 		=> 'New Chhattisgarhi Translation NCA)',
		'HNZ-RI' 	=> 'Hrvatski Novi Zavjet – Rijeka 2001 (HNZ-RI)',
		'CRO' 		=> 'Knijga O Kristu (CRO)',
		'HCV' 		=> 'Haitian Creole Version (HCV)',
		'KAR' 		=> 'Hungarian Károli (KAR)',
		'ERV-HU' 	=> 'Hungarian Bible: Easy-to-Read Version (ERV-HU)',
		'NT-HU' 	=> 'Hungarian New Translation (NT-HU)',
		'HWP' 		=> 'Hawai‘i Pidgin (HWP)',
		'ICELAND' 	=> 'Icelandic Bible (ICELAND)',
		'BDG' 		=> 'La Bibbia della Gioia (BDG)',
		'CEI' 		=> 'Conferenza Episcopale Italiana (CEI)',
		'LND' 		=> 'La Nuova Diodati (LND)',
		'NR1994' 	=> 'Nuova Riveduta 1994 (NR1994)',
		'NR2006' 	=> 'Nuova Riveduta 2006 (NR2006)',
		'JLB' 		=> 'Japanese Living Bible (JLB)',
		'JAC' 		=> 'Jacalteco, Oriental (JAC)',
		'KEK' 		=> 'Kekchi (KEK)',
		'KLB' 		=> 'Korean Living Bible (KLB)',
		'VULGATE' 	=> 'Biblia Sacra Vulgata (VULGATE)',
		'LCB' 		=> 'Endagaano Enkadde nʼEndagaano Empya (LCB)',
		'MAORI' 	=> 'Maori Bible (MAORI)',
		'MNT' 		=> 'Macedonian New Testament (MNT)',
		'ERV-MR' 	=> 'Marathi Bible: Easy-to-Read Version (ERV-MR)',
		'MVC' 		=> 'Mam, Central (MVC)',
		'MVJ' 		=> 'Mam de Todos Santos Chuchumatán (MVJ)',
		'REIMER' 	=> 'Reimer 2001 (REIMER)',
		'ERV-NE' 	=> 'Nepali Bible: Easy-to-Read Version (ERV-NE)',
		'NGU' 		=> 'Náhuatl de Guerrero (NGU)',
		'BB' 		=> 'BasisBijbel (BB)',
		'HTB' 		=> 'Het Boek (HTB)',
		'DNB1930' 	=> 'Det Norsk Bibelselskap 1930 (DNB1930)',
		'LB' 		=> 'En Levende Bok (LB)',
		'CCL' 		=> 'Mawu a Mulungu mu Chichewa Chalero (CCL)',
		'ERV-OR' 	=> 'Oriya Bible: Easy-to-Read Version (ERV-OR)',
		'ERV-PA' 	=> 'Punjabi Bible: Easy-to-Read Version (ERV-PA)',
		'NP' 		=> 'Nowe Przymierze (NP)',
		'SZ-PL' 	=> 'Słowo Życia (SZ-PL)',
		'UBG' 		=> 'Updated Gdańsk Bible (UBG)',
		'NBTN' 		=> 'Ne Bibliaj Tik Nawat (NBTN)',
		'ARC' 		=> 'Almeida Revista e Corrigida 2009 (ARC)',
		'NTLH' 		=> 'Nova Traduҫão na Linguagem de Hoje 2000 (NTLH)',
		'NVT' 		=> 'Nova Versão Transformadora (NVT)',
		'NVI-PT' 	=> 'Nova Versão Internacional (NVI-PT)',
		'OL' 		=> 'O Livro (OL)',
		'VFL' 		=> 'Portuguese New Testament: Easy-to-Read Version (VFL)',
		'MTDS' 		=> 'Mushuj Testamento Diospaj Shimi (MTDS)',
		'QUT' 		=> 'Quiché, Centro Occidental (QUT)',
		'RMNN' 		=> 'Cornilescu 1924 - Revised 2010, 2014 (RMNN)',
		'NTLR' 		=> 'Nouă Traducere În Limba Română (NTLR)',
		'NRT' 		=> 'New Russian Translation (NRT)',
		'CARS' 		=> 'Священное Писание (Восточный Перевод) (CARS)',
		'CARST' 	=> 'Священное Писание (Восточный перевод) версия для Таджикистана (CARST)',
		'CARSA' 	=> 'Священное Писание (Восточный перевод) версия с «Аллахом» (CARSA)',
		'ERV-RU' 	=> 'Russian New Testament: Easy-to-Read Version (ERV-RU)',
		'RUSV' 		=> 'Russian Synodal Version (RUSV)',
		'NPK' 		=> 'Nádej pre kazdého (NPK)',
		'SOM' 		=> 'Somali Bible (SOM)',
		'ALB' 		=> 'Albanian Bible (ALB)',
		'NSP' 		=> 'New Serbian Translation (NSP)',
		'ERV-SR' 	=> 'Serbian New Testament: Easy-to-Read Version (ERV-SR)',
		'NUB' 		=> 'nuBibeln (Swedish Contemporary Bible) (NUB)',
		'SV1917' 	=> 'Svenska 1917 (SV1917)',
		'SFB' 		=> 'Svenska Folkbibeln (SFB)',
		'SFB15' 	=> 'Svenska Folkbibeln 2015 (SFB15)',
		'SNT' 		=> 'Neno: Bibilia Takatifu (SNT)',
		'ERV-TA' 	=> 'Tamil Bible: Easy-to-Read Version (ERV-TA)',
		'TNCV' 		=> 'Thai New Contemporary Bible (TNCV)',
		'ERV-TH' 	=> 'Thai New Testament: Easy-to-Read Version (ERV-TH)',
		'FSV' 		=> 'Ang Bagong Tipan: Filipino Standard Version (FSV)',
		'ABTAG1978' => 'Ang Biblia (1978) (ABTAG1978)',
		'ABTAG2001' => 'Ang Biblia, 2001 (ABTAG2001)',
		'ADB1905' 	=> 'Ang Dating Biblia (1905) (ADB1905)',
		'SND' 		=> 'Ang Salita ng Diyos (SND)',
		'MBBTAG' 	=> 'Magandang Balita Biblia (MBBTAG)',
		'MBBTAG-DC' => 'Magandang Balita Biblia (with Deuterocanon) (MBBTAG-DC)',
		'NA-TWI' 	=> 'Nkwa Asem (NA-TWI)',
		'UKR' 		=> 'Ukrainian Bible (UKR)',
		'ERV-UK' 	=> 'Ukrainian New Testament: Easy-to-Read Version (ERV-UK)',
		'ERV-UR' 	=> 'Urdu Bible: Easy-to-Read Version (ERV-UR)',
		'USP' 		=> 'Uspanteco (USP)',
		'VIET' 		=> '1934 Vietnamese Bible (VIET)',
		'BD2011' 	=> 'Bản Dịch 2011 (BD2011)',
		'NVB' 		=> 'New Vietnamese Bible (NVB)',
		'BPT' 		=> 'Vietnamese Bible: Easy-to-Read Version (BPT)',
		'BYO' 		=> 'Bíbélì Mímọ́ Yorùbá Òde Òn (BYO)',
		'CCB' 		=> 'Chinese Contemporary Bible (Simplified) (CCB)',
		'CCBT' 		=> 'Chinese Contemporary Bible (Traditional) (CCBT)',
		'ERV-ZH' 	=> 'Chinese New Testament: Easy-to-Read Version (ERV-ZH)',
		'CNVS' 		=> 'Chinese New Version (Simplified) (CNVS)',
		'CNVT' 		=> 'Chinese New Version (Traditional) (CNVT)',
		'CSBS' 		=> 'Chinese Standard Bible (Simplified) (CSBS)',
		'CSBT' 		=> 'Chinese Standard Bible (Traditional) (CSBT)',
		'CUVS' 		=> 'Chinese Union Version (Simplified) (CUVS)',
		'CUV' 		=> 'Chinese Union Version (Traditional) (CUV)',
		'CUVMPS' 	=> 'Chinese Union Version Modern Punctuation (Simplified) (CUVMPS)',
		'CUVMPT' 	=> 'Chinese Union Version Modern Punctuation (Traditional) (CUVMPT)',
		'RCU17SS' 	=> 'Revised Chinese Union Version (Simplified Script) Shen Edition (RCU17SS)',
		'RCU17TS' 	=> 'Revised Chinese Union Version (Traditional Script) Shen Edition (RCU17TS)',
	),
));
