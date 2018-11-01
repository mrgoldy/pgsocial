<?php
/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2015 pgreca <http://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if(!defined('IN_PHPBB'))
{
	exit;
}
if(empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(	
	'ABOUT_HOUR'						=> '1 ora',
	'ABOUT_HOURS'						=> 'ore',
	'ABOUT_MONTH'						=> '1 mese',
	'ABOUT_MONTHS'						=> 'mesi',
	'ACTIVITY'							=> 'Attività',
	'ACTIVITY_PAGE'						=> 'Attività',
	'AGO'								=> 'fa',
	'ALL'								=> 'Tutti',
	'APPROVE_PAGE'						=> 'Approva',
	'ARE_YOU_SURE'						=> 'Questo stato sarà eliminato e non potrai trovarlo più. Confermi?',
	'ARE_YOU_SURE_PHOTO'				=> 'Questa foto sarà eliminata e non potrai trovarla più. Confermi?',
	'ATTACH_PICTURE'					=> 'Allega immagine',
	'PG_SOCIAL_AVATAR'					=> 'Immagine di profilo',
	'COMMENT'							=> array(
		0				=> 'Nessun commento',
		1				=> 'Commento',
		2				=> 'Commenti',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Commenta questo stato!',
	'PG_SOCIAL_COVER'					=> 'Immagine di copertina',
	'DAY'								=> array(
		1	=> 'giorno',
		2	=> 'giorni',
	),
	'DO_YOU_WANT_SHARE'					=> 'Vuoi condividere questo stato?',
	'EDIT'								=> 'Modifica',
	'EDIT_PROFILE'						=> 'Modifica profilo',
	'FRIEND'							=> array(
		1				=> 'Amico',
		2				=> 'Amici',
	),	
	'GALLER'							=> 'Galleria',
	'GENDER'							=> 'Sesso',
	'GENDER_FEMALE'						=> 'Femmina',
	'GENDER_MALE'						=> 'Maschio',
	'GENDER_UNKNOWN'					=> 'Sconosciuto',
	'HAS_COMMENT_YOUR_POST'				=> '%s ha commentato uno stato',
	'HAS_LIKE_YOUR_POST'				=> 'A %s piace un tuo stato',
	'HAS_SHARED_STATUS'					=> 'ha condiviso uno %s',
	'HAS_UPLOADED_AVATAR'				=> 'ha caricato una nuovo foto di profilo',
	'HAS_UPLOADED_COVER'				=> 'ha caricato una nuova foto di copertina',
	'HAS_TAGGED_YOU'					=> '%s ti ha taggato in uno stato',
	'HAS_WRITE_IN'						=> ' ha scritto sulla bacheca di',
	'HAS_WRITE_IN_YOUR'					=> '%s ha scritto sulla tua bacheca',
	'HAS_WRITED_POST_ON'				=> 'ha scritto un post in %s',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'ha scritto un post in una discussione',
	'INFO'								=> 'Informazioni',
	'LESS'								=> 'meno di',
	'LIKE'								=> array(
		1				=> 'Mi Piace',
		2				=> 'Piace',
	),
	'LIKE_ACTIVE'  						=> 'Ti Piace già',
	'LIKES'								=> 'Mi Piace',
	'MINUTES'							=> 'minuti',
	
	'NOTIFICATION_PG_SOCIAL'			=> 'Notifiche social',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'Qualcuno scrive uno stato nella tua bacheca',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'Qualcuno scrive un commento in un tuo stato',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'Qualcuno mette un like ad un tuo stato',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'Qualcuno ti tagga in uno stato',
	'ONLY_YOU'							=> 'Solo tu',
	'OPTIONS'							=> 'Opzioni',
	'PAGE_USERNAME'						=> 'Nome pagina',
	'PAGES'								=> 'Pagine',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>Ha commentato uno stato</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>Ha rimosso un suo commento da uno stato</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Amici',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Accetta richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Aggiungi agli amici',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Cancella richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Rifiuta richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Rimuovi dagli amici',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Non piace più uno stato</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Piace uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Ha pubblicato uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Ha condiviso uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Ha cancellato uno stato</strong>',
	'PHOTO_DELETE'						=> 'Elimina questa foto',
	'PHOTOS'							=> 'Foto',
	'PRIVACY_ALL'						=> 'Tutti',
	'PRIVACY_ONLY_FRIENDS'				=> 'Amici',
	'PRIVACY_ONLY_ME'					=> 'Solo io',
	'PRIVACY_VISIBLE_FOR'				=> 'Visibile per',
	'PROFILE_AVATAR_UPDATE'				=> 'Cambia immagine di Profilo',
	'PROFILE_COVER_UPDATE'				=> 'Cambia immagine di Copertina',
	'PROFILE_UPDATE'					=> 'Aggiorna profilo',
	'PUBLIC'							=> 'Pubblica',
	'QUOTE'								=> 'Citazione',
	'SECONDS'							=> 'secondi',
	'SHARE'								=> 'Condividi',
	'STATUS'							=> 'stato',
	
	'PG_SOCIAL_WALL'				=> 'Bacheca',
	'WALL_TIME_AGO'						=> '%1$u %2$s fa',
	'WALL_TIME_FROM_NOW'				=> '%1$u %2$s fa',
	'WALL_TIME_PERIODS'					=> array(
		'SECOND'	 => 'secondo',
		'SECONDS'	 => 'secondi',
		'MINUTE'	 => 'minuto',
		'MINUTES'	 => 'minuti',
		'HOUR'		 => 'ora',
		'HOURS'		 => 'ore',
		'DAY'		 => 'giorno',
		'DAYS'		 => 'giorni',
		'WEEK'		 => 'settimana',
		'WEEKS'		 => 'settimane',
		'MONTH'		 => 'mese',
		'MONTHS'	 => 'mesi',
		'YEAR'		 => 'anno',
		'YEARS'		 => 'anni',
		'DECADE'	 => 'decade',
		'DECADES'	 => 'decadi',
	),
	'PG_SOCIAL_WRITE_A_MESSAGE'					=> 'Scrivi un messaggio',
	'PG_SOCIAL_WRITE_SOMETHING'					=> 'Scrivi qualcosa',
	'PG_SOCIAL_VERSION'							=> 'Versione',
));