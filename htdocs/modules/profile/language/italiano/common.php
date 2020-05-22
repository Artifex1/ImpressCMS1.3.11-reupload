<?php
/**
 * English language constants commonly used in the module
 *
 * @copyright	The ImpressCMS Project
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Gustavo Pilla (aka nekro) <nekro@impresscms.org>
 * @package		profile
 * @version		$Id: common.php 24694 2012-11-07 01:31:55Z qm-b $
 */

defined("ICMS_ROOT_PATH") or die("ImpressCMS root path not defined");

// field
define("_CO_PROFILE_FIELD_FIELDID", "Id");
define("_CO_PROFILE_FIELD_FIELDID_DSC", " ");
define("_CO_PROFILE_FIELD_CATID", "Id Categoria");
define("_CO_PROFILE_FIELD_CATID_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TYPE", "Tipo campo");
define("_CO_PROFILE_FIELD_FIELD_TYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE", "Valore campo");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NAME", "Nome");
define("_CO_PROFILE_FIELD_FIELD_NAME_DSC", "Don't use capital letters, special characters, umlauts, or spaces, because it's an object name.");
define("_CO_PROFILE_FIELD_URL", "Image");
define("_CO_PROFILE_FIELD_URL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TITLE", "Titolo");
define("_CO_PROFILE_FIELD_FIELD_TITLE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION", "Descrizione");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED", "Richiesto");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH", "Max Lunghezza");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT", "Peso");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT", "Default");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL", "Non Null");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_EDIT", "Modificabile");
define("_CO_PROFILE_FIELD_FIELD_EDIT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_SHOW", "Mostra");
define("_CO_PROFILE_FIELD_FIELD_SHOW_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS", "Opzioni");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS_DSC", " ");
define("_CO_PROFILE_FIELD_EXPORTABLE", "Esportabile");
define("_CO_PROFILE_FIELD_EXPORTABLE_DSC", " ");
define("_CO_PROFILE_FIELD_STEP_ID", "ID livello");
define("_CO_PROFILE_FIELD_STEP_ID_DSC", " ");
define("_CO_PROFILE_FIELD_SYSTEM", "System field");
define("_CO_PROFILE_FIELD_SYSTEM_DSC", " Indicator showing whether this field also exists in the core.");

// regstep
define("_CO_PROFILE_REGSTEP_STEP_NAME", "Nome");
define("_CO_PROFILE_REGSTEP_STEP_NAME_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_INTRO", "Descrizione");
define("_CO_PROFILE_REGSTEP_STEP_INTRO_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_ORDER", "Ordine");
define("_CO_PROFILE_REGSTEP_STEP_ORDER_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_SAVE", "Salva dopo la conferma");
define("_CO_PROFILE_REGSTEP_STEP_SAVE_DSC", " If set to yes, the information is saved for the first time after this step and with all the steps following afterwars.");

// category
define("_CO_PROFILE_CATEGORY_CATID", "Id");
define("_CO_PROFILE_CATEGORY_CATID_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_TITLE", "Titolo");
define("_CO_PROFILE_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION", "Descrizione");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT", "Peso");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT_DSC", " ");

// configs
define("_CO_PROFILE_CONFIGS_CONFIG_ID", "");
define("_CO_PROFILE_CONFIGS_CONFIG_ID_DSC", " ");
define("_CO_PROFILE_CONFIGS_CONFIG_UID", "Id utente");
define("_CO_PROFILE_CONFIGS_CONFIG_UID_DSC", " ");
define("_CO_PROFILE_CONFIGS_PICTURES", "Mostra le mie foto a:");
define("_CO_PROFILE_CONFIGS_PICTURES_DSC", " ");
define("_CO_PROFILE_CONFIGS_AUDIO", "Mostra i miei audio a:");
define("_CO_PROFILE_CONFIGS_AUDIO_DSC", " ");
define("_CO_PROFILE_CONFIGS_VIDEOS", "Mostra i miei video:");
define("_CO_PROFILE_CONFIGS_VIDEOS_DSC", " ");
define("_CO_PROFILE_CONFIGS_FRIENDSHIP", "Mostra i miei amici a:");
define("_CO_PROFILE_CONFIGS_FRIENDSSHIP_DSC", " ");
define("_CO_PROFILE_CONFIGS_TRIBES", "Mostra le mie trib&ugrave; a:");
define("_CO_PROFILE_CONFIGS_TRIBES_DSC", " ");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS", "Mostra i miei contributi a:");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS_DSC", " ");
define("_CO_PROFILE_CONFIGS_SUSPENSION", "Utenti sospesi");
define("_CO_PROFILE_CONFIGS_SUSPENSION_DSC", "Puoi revocare l'accesso a un utente per un periodo di tempo.");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD", "");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD_DSC", " ");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL", "");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL_DSC", " ");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION", "Quando finisce la sospensione?");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION_DSC", " ");
define("_CO_PROFILE_CONFIGS_STATUS", "Cosa hai in mente?");
define("_CO_PROFILE_CONFIGS_STATUS_DSC", " ");
define("_CO_PROFILE_CONFIG_STATUS_EVERYBODY", "Chiunque pu&ograve; vedere questo");
define("_CO_PROFILE_CONFIG_STATUS_MEMBERS", "Solo gli utenti registrati possono vedere questo");
define("_CO_PROFILE_CONFIG_STATUS_FRIENDS", "Solo gli amici possono vedere questo");
define("_CO_PROFILE_CONFIG_STATUS_PRIVATE", "Solo io posso vedere questo");

// audio
define("_CO_PROFILE_AUDIO_AUDIO_ID", "Audio ID");
define("_CO_PROFILE_AUDIO_AUDIO_ID_DSC", " ");
define("_CO_PROFILE_AUDIO_TITLE", "Titolo del file audio");
define("_CO_PROFILE_AUDIO_TITLE_DSC", " ");
define("_CO_PROFILE_AUDIO_AUTHOR", "Autore del file audio");
define("_CO_PROFILE_AUDIO_AUTHOR_DSC", " ");
define("_CO_PROFILE_AUDIO_URL", "File audio");
define("_CO_PROFILE_AUDIO_URL_DSC", " ");
define("_CO_PROFILE_AUDIO_UID_OWNER", "Inviato da");
define("_CO_PROFILE_AUDIO_UID_OWNER_DSC", " ");
define("_CO_PROFILE_AUDIO_CREATION_TIME", "Creato il");
define("_CO_PROFILE_AUDIO_CREATION_TIME_DSC", " ");

// tribes
define("_CO_PROFILE_TRIBES_TRIBES_ID", "ID trib&ugrave;");
define("_CO_PROFILE_TRIBES_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBES_UID_OWNER", "Id utente");
define("_CO_PROFILE_TRIBES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_TRIBES_TITLE", "Nome della trib&ugrave;");
define("_CO_PROFILE_TRIBES_TITLE_DSC", " Inserisci quale nome desideri per la trib&ugrave;.");
define("_CO_PROFILE_TRIBES_TRIBE_DESC", "Descrizione della trib&ugrave;");
define("_CO_PROFILE_TRIBES_TRIBE_DESC_DSC", " Scrivi una piccola descrizione della trib&ugrave;.");
define("_CO_PROFILE_TRIBES_TRIBE_IMG", "Immagine della trib&ugrave;");
define("_CO_PROFILE_TRIBES_TRIBE_IMG_DSC", " Seleziona un'immagine per la trib&ugrave;.");
define("_CO_PROFILE_TRIBES_SECURITY", "Livello di sicurezza");
define("_CO_PROFILE_TRIBES_SECURITY_DSC", " Seleziona il livello di sicurezza per questa trib&ugrave;.");
define("_CO_PROFILE_TRIBES_SECURITY_EVERYBODY", "Chiunque pu&ograve; unirsi a questa trib&ugrave;");
define("_CO_PROFILE_TRIBES_SECURITY_APPROVAL", "Chiunque pu&ograve; unirsi a questa trib&ugrave; (&egrave; richiesta l'approvazione da parte del proprietario).");
define("_CO_PROFILE_TRIBES_SECURITY_INVITATION", "Accesso consentito solo a invito");

// tribetopic
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID", "ID Tematica");
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID", "ID Trib&ugrave;");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID", "Id Poster");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TITLE", "Titolo");
define("_CO_PROFILE_TRIBETOPIC_TITLE_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_CLOSED", "Chiuso");
define("_CO_PROFILE_TRIBETOPIC_CLOSED_DSC", " S&igrave; per chiudere la tematica");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID", "ID ultimo post");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Scritto il");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME_DSC", " ");

// tribepost
define("_CO_PROFILE_TRIBEPOST_POST_ID", "ID post");
define("_CO_PROFILE_TRIBEPOST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID", "ID Tematica");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID", "ID trib&ugrave;");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID", "ID poster");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TITLE", "Titolo");
define("_CO_PROFILE_TRIBEPOST_TITLE_DSC", " Soggetto del post");
define("_CO_PROFILE_TRIBEPOST_BODY", "Corpo");
define("_CO_PROFILE_TRIBEPOST_BODY_DSC", " Corpo testo del post");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG", "Allega firma");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG_DSC", " S&igrave; per allegare la firma al tuo post");
define("_CO_PROFILE_TRIBEPOST_POST_TIME", "Post scritto il");
define("_CO_PROFILE_TRIBEPOST_POST_TIME_DSC", " ");

// friendship
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID", "Id");
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID", "Id utente");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID", "Id utente");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS", "");
define("_CO_PROFILE_FRIENDSHIP_STATUS_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS_PENDING", "In attesa");
define("_CO_PROFILE_FRIENDSHIP_STATUS_ACCEPTED", "Accettato");
define("_CO_PROFILE_FRIENDSHIP_STATUS_REJECTED", "Respinto");

// pictures
define("_CO_PROFILE_PICTURES_PICTURES_ID", "ID immagine");
define("_CO_PROFILE_PICTURES_PICTURES_ID_DSC", " ");
define("_CO_PROFILE_PICTURES_TITLE", "Titolo dell'immagine");
define("_CO_PROFILE_PICTURES_TITLE_DSC", " ");
define("_CO_PROFILE_PICTURES_CREATION_TIME", "");
define("_CO_PROFILE_PICTURES_CREATION_TIME_DSC", " ");
define("_CO_PROFILE_PICTURES_UID_OWNER", "Inviata da");
define("_CO_PROFILE_PICTURES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_PICTURES_URL", "Immagine");
define("_CO_PROFILE_PICTURES_URL_DSC", " ");
define("_CO_PROFILE_PICTURES_PRIVATE", "Rendi questa immagine privata");
define("_CO_PROFILE_PICTURES_PRIVATE_DSC", " ");

// videos
define("_CO_PROFILE_VIDEOS_VIDEOS_ID", "ID Video");
define("_CO_PROFILE_VIDEOS_VIDEOS_ID_DSC", " ");
define("_CO_PROFILE_VIDEOS_UID_OWNER", "Inviato da");
define("_CO_PROFILE_VIDEOS_UID_OWNER_DSC", " ");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC", "Descrizione Video");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC_DSC", " ");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE", "Codice Youtube");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE_DSC", " Inserisci il codice del tuo clip video su Youtube.<br /><b>Esempio:</b> 3UkPhvse8JA");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE", "Titolo video");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE_DSC", " ");
define("_CO_PROFILE_VIDEOS_CREATION_TIME", "Inviato il");
define("_CO_PROFILE_VIDEOS_CREATION_TIME_DSC", " ");

// visitors
define("_CO_PROFILE_VISITORS_VISIT_ID", "Id");
define("_CO_PROFILE_VISITORS_VISIT_ID_DSC", " ");
define("_CO_PROFILE_VISITORS_UID_OWNER", "");
define("_CO_PROFILE_VISITORS_UID_OWNER_DSC", " ");
define("_CO_PROFILE_VISITORS_UID_VISITOR", "");
define("_CO_PROFILE_VISITORS_UID_VISITOR_DSC", " ");
// tribeuser
define("_CO_PROFILE_TRIBEUSER_TB_ID", "Id");
define("_CO_PROFILE_TRIBEUSER_TB_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_TRIBEUSER_ID", "Id");
define("_CO_PROFILE_TRIBEUSER_TRIBEUSER_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID", "Nome della trib&ugrave;");
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_USER_ID", "Nome utente");
define("_CO_PROFILE_TRIBEUSER_USER_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_APPROVED", "Approvato");
define("_CO_PROFILE_TRIBEUSER_APPROVED_DSC", " S&igrave; se l'iscrizione alla trib&ugrave; &egrave; approvata dal proprietario.");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED", "Accettato");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED_DSC", " S&igrave; se l'utente ha accettato l'invito di questa trib&ugrave;.");

// moved here from admin - 2.2
define("_MI_PROFILE_USERS", "Users");
define("_AM_PROFILE_CATEGORYS", "Categories");
define("_AM_PROFILE_FIELDS", "Fields");
define("_AM_PROFILE_REGSTEPS", "Registration steps");
define("_MI_PROFILE_VISIBILITY", "Visibility");
define("_MI_PROFILE_PERMISSIONS", "Permissions");
define("_MI_PROFILE_MODULEDESC", "This module simulates a social network software like MySpace or Orkut, please login or register now.");
?>