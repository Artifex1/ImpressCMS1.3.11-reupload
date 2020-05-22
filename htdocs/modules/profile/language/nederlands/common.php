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
define("_CO_PROFILE_FIELD_CATID", "Categorie Id");
define("_CO_PROFILE_FIELD_CATID_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TYPE", "Veld Type");
define("_CO_PROFILE_FIELD_FIELD_TYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE", "Veld waarde");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NAME", "Naam");
define("_CO_PROFILE_FIELD_FIELD_NAME_DSC", "Gebruik geen hoofdletters, speciale tekens, umlauts of spaties, aangezien het een objectnaam is.");
define("_CO_PROFILE_FIELD_URL", "Afbeelding");
define("_CO_PROFILE_FIELD_URL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TITLE", "Titel");
define("_CO_PROFILE_FIELD_FIELD_TITLE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION", "Omschrijving");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED", "Vereist");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH", "Max lengte");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT", "Gewicht");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT", "Standaard");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL", "Niet nul");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_EDIT", "Aanpasbaar");
define("_CO_PROFILE_FIELD_FIELD_EDIT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_SHOW", "Tonen");
define("_CO_PROFILE_FIELD_FIELD_SHOW_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS", "Opties");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS_DSC", " ");
define("_CO_PROFILE_FIELD_EXPORTABLE", "Exporteerbaar");
define("_CO_PROFILE_FIELD_EXPORTABLE_DSC", " ");
define("_CO_PROFILE_FIELD_STEP_ID", "Stap ID");
define("_CO_PROFILE_FIELD_STEP_ID_DSC", " ");
define("_CO_PROFILE_FIELD_SYSTEM", "Systeemveld");
define("_CO_PROFILE_FIELD_SYSTEM_DSC", "Een indicator die aangeeft of dit veld ook in de core bestaat");

// regstep
define("_CO_PROFILE_REGSTEP_STEP_NAME", "Naam");
define("_CO_PROFILE_REGSTEP_STEP_NAME_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_INTRO", "Omschrijving");
define("_CO_PROFILE_REGSTEP_STEP_INTRO_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_ORDER", "Volgorde");
define("_CO_PROFILE_REGSTEP_STEP_ORDER_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_SAVE", "Opslaan na bevestiging");
define("_CO_PROFILE_REGSTEP_STEP_SAVE_DSC", "Indien ja, word de informatie de eerste keer opgeslaan na deze stap en bij alle volgende stappen.");

// category
define("_CO_PROFILE_CATEGORY_CATID", "Id");
define("_CO_PROFILE_CATEGORY_CATID_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_TITLE", "Titel");
define("_CO_PROFILE_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION", "Omschrijving");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT", "Gewicht");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT_DSC", " ");

// configs
define("_CO_PROFILE_CONFIGS_CONFIG_ID", "");
define("_CO_PROFILE_CONFIGS_CONFIG_ID_DSC", " ");
define("_CO_PROFILE_CONFIGS_CONFIG_UID", "Gebruiker Id");
define("_CO_PROFILE_CONFIGS_CONFIG_UID_DSC", " ");
define("_CO_PROFILE_CONFIGS_PICTURES", "Toon mijn afbeeldingen aan:");
define("_CO_PROFILE_CONFIGS_PICTURES_DSC", " ");
define("_CO_PROFILE_CONFIGS_AUDIO", "Toon mijn geluiden aan:");
define("_CO_PROFILE_CONFIGS_AUDIO_DSC", " ");
define("_CO_PROFILE_CONFIGS_VIDEOS", "Toon mijn video's aan:");
define("_CO_PROFILE_CONFIGS_VIDEOS_DSC", " ");
define("_CO_PROFILE_CONFIGS_FRIENDSHIP", "Toon mijn vrienden aan:");
define("_CO_PROFILE_CONFIGS_FRIENDSSHIP_DSC", " ");
define("_CO_PROFILE_CONFIGS_TRIBES", "Toon mijn tribes aan:");
define("_CO_PROFILE_CONFIGS_TRIBES_DSC", " ");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS", "Toon mijn bijdragen aan:");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS_DSC", " ");
define("_CO_PROFILE_CONFIGS_SUSPENSION", "Schors gebruiker");
define("_CO_PROFILE_CONFIGS_SUSPENSION_DSC", "U kunt gebruikerstoegang voor een periode herroepen.");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD", "");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD_DSC", " ");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL", "");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL_DSC", " ");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION", "Wanneer loopt de schorsing af?");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION_DSC", " ");
define("_CO_PROFILE_CONFIGS_STATUS", "Waar denk je aan?");
define("_CO_PROFILE_CONFIGS_STATUS_DSC", " ");
define("_CO_PROFILE_CONFIG_STATUS_EVERYBODY", "Iedereen kan dit zien");
define("_CO_PROFILE_CONFIG_STATUS_MEMBERS", "Alleen geregistreerde gebruikers kunnen dit zien");
define("_CO_PROFILE_CONFIG_STATUS_FRIENDS", "Alleen vrienden kunnen dit zien");
define("_CO_PROFILE_CONFIG_STATUS_PRIVATE", "Alleen ik kan dit zien");

// audio
define("_CO_PROFILE_AUDIO_AUDIO_ID", "Audio ID");
define("_CO_PROFILE_AUDIO_AUDIO_ID_DSC", " ");
define("_CO_PROFILE_AUDIO_TITLE", "Titel van het audio bestand");
define("_CO_PROFILE_AUDIO_TITLE_DSC", " ");
define("_CO_PROFILE_AUDIO_AUTHOR", "Auteur van het audio bestand");
define("_CO_PROFILE_AUDIO_AUTHOR_DSC", " ");
define("_CO_PROFILE_AUDIO_URL", "Audio bestand");
define("_CO_PROFILE_AUDIO_URL_DSC", " ");
define("_CO_PROFILE_AUDIO_UID_OWNER", "Inzender");
define("_CO_PROFILE_AUDIO_UID_OWNER_DSC", " ");
define("_CO_PROFILE_AUDIO_CREATION_TIME", "Aangemaakt op");
define("_CO_PROFILE_AUDIO_CREATION_TIME_DSC", " ");

// tribes
define("_CO_PROFILE_TRIBES_TRIBES_ID", "Tribe's ID");
define("_CO_PROFILE_TRIBES_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBES_UID_OWNER", "Gebruiker Id");
define("_CO_PROFILE_TRIBES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_TRIBES_TITLE", "Naam van de tribe");
define("_CO_PROFILE_TRIBES_TITLE_DSC", " Vul de gewenste naam in voor deze tribe.");
define("_CO_PROFILE_TRIBES_TRIBE_DESC", "Omschrijving van de tribe");
define("_CO_PROFILE_TRIBES_TRIBE_DESC_DSC", " Vul een korte omschrijving in over deze tribe.");
define("_CO_PROFILE_TRIBES_TRIBE_IMG", "Tribe's picture");
define("_CO_PROFILE_TRIBES_TRIBE_IMG_DSC", " Selecteer een afbeelding voor deze tribe.");
define("_CO_PROFILE_TRIBES_SECURITY", "Beveiligingsniveau");
define("_CO_PROFILE_TRIBES_SECURITY_DSC", " Selecteer het beveiligingsniveau voor deze tribe.");
define("_CO_PROFILE_TRIBES_SECURITY_EVERYBODY", "Iedereen kan lid worden van deze tribe");
define("_CO_PROFILE_TRIBES_SECURITY_APPROVAL", "Iedereen kan lid worden van deze tribe (goedkeuring door de eigenaar is vereist)");
define("_CO_PROFILE_TRIBES_SECURITY_INVITATION", "Alleen toegankelijk op uitnodiging");

// tribetopic
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID", "Topic ID");
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID", "Tribe ID");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID", "Inzender ID");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TITLE", "Titel");
define("_CO_PROFILE_TRIBETOPIC_TITLE_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_CLOSED", "Gesloten");
define("_CO_PROFILE_TRIBETOPIC_CLOSED_DSC", " Ja om het onderwerp te sluiten");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID", "ID laatste inzending");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Tijd laatste inzending");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME_DSC", " ");

// tribepost
define("_CO_PROFILE_TRIBEPOST_POST_ID", "Inzending ID");
define("_CO_PROFILE_TRIBEPOST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID", "Onderwerp ID");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID", "Tribe ID");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID", "Inzender ID");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TITLE", "Titel");
define("_CO_PROFILE_TRIBEPOST_TITLE_DSC", " Onderwerp van de inzending");
define("_CO_PROFILE_TRIBEPOST_BODY", "Body");
define("_CO_PROFILE_TRIBEPOST_BODY_DSC", " Body tekst voor de inzending");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG", "Handtekening bijvoegen");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG_DSC", " Ja om handtekening toe te voegen aan de inzending");
define("_CO_PROFILE_TRIBEPOST_POST_TIME", "Tijd inzending");
define("_CO_PROFILE_TRIBEPOST_POST_TIME_DSC", " ");

// friendship
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID", "Id");
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID", "Gebruiker Id");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID", "Gebruiker Id");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS", "");
define("_CO_PROFILE_FRIENDSHIP_STATUS_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS_PENDING", "In behandeling");
define("_CO_PROFILE_FRIENDSHIP_STATUS_ACCEPTED", "Geaccepteerd");
define("_CO_PROFILE_FRIENDSHIP_STATUS_REJECTED", "Afgewezen");

// pictures
define("_CO_PROFILE_PICTURES_PICTURES_ID", "Afbeelding ID");
define("_CO_PROFILE_PICTURES_PICTURES_ID_DSC", " ");
define("_CO_PROFILE_PICTURES_TITLE", "Titel van de afbeelding");
define("_CO_PROFILE_PICTURES_TITLE_DSC", " ");
define("_CO_PROFILE_PICTURES_CREATION_TIME", "");
define("_CO_PROFILE_PICTURES_CREATION_TIME_DSC", " ");
define("_CO_PROFILE_PICTURES_UID_OWNER", "Inzender");
define("_CO_PROFILE_PICTURES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_PICTURES_URL", "Afbeelding");
define("_CO_PROFILE_PICTURES_URL_DSC", " ");
define("_CO_PROFILE_PICTURES_PRIVATE", "Maak deze afbeelding privé");
define("_CO_PROFILE_PICTURES_PRIVATE_DSC", " ");

// videos
define("_CO_PROFILE_VIDEOS_VIDEOS_ID", "Video ID");
define("_CO_PROFILE_VIDEOS_VIDEOS_ID_DSC", " ");
define("_CO_PROFILE_VIDEOS_UID_OWNER", "Inzender");
define("_CO_PROFILE_VIDEOS_UID_OWNER_DSC", " ");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC", "Video omschrijving");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC_DSC", " ");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE", "Youtube's code");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE_DSC", "Vul de YouTube code van uw clip in.<br /><b>Voorbeeld:</b> 3UkPhvse8JA");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE", "Video titel");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE_DSC", " ");
define("_CO_PROFILE_VIDEOS_CREATION_TIME", "Aangemaakt op");
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
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID", "Naam van de tribe");
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_USER_ID", "Gebruikersnaam");
define("_CO_PROFILE_TRIBEUSER_USER_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_APPROVED", "Goedgekeurd");
define("_CO_PROFILE_TRIBEUSER_APPROVED_DSC", " Ja wanneer het lidmaatschap voor deze tribe is goedgekeurd door haar eigenaar.");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED", "Geaccepteerd");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED_DSC", " Ja als gebruiker de uitnodiging voor deze tribe heeft geaccepteerd.");

// moved here from admin - 2.2
define("_MI_PROFILE_USERS", "Gebruikers");
define("_AM_PROFILE_CATEGORYS", "Categorieën");
define("_AM_PROFILE_FIELDS", "Velden");
define("_AM_PROFILE_REGSTEPS", "Registratie stappen");
define("_MI_PROFILE_VISIBILITY", "Zichtbaarheid");
define("_MI_PROFILE_PERMISSIONS", "Rechten");
define("_MI_PROFILE_MODULEDESC", "Deze module simuleert een sociaal netwerk zoals MySpace of Orkut. Log nu in of registreer");
?>