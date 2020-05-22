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
define("_CO_PROFILE_FIELD_FIELDID", "Identifiant");
define("_CO_PROFILE_FIELD_FIELDID_DSC", " ");
define("_CO_PROFILE_FIELD_CATID", "Catégorie");
define("_CO_PROFILE_FIELD_CATID_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TYPE", "Type");
define("_CO_PROFILE_FIELD_FIELD_TYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE", "Valeur");
define("_CO_PROFILE_FIELD_FIELD_VALUETYPE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NAME", "Identificateur");
define("_CO_PROFILE_FIELD_FIELD_NAME_DSC", "N'utilisez pas de lettre capitale, caractère spécial, voyelle infléchie ou espace, car c'est un nom d'objet.");
define("_CO_PROFILE_FIELD_URL", "Image");
define("_CO_PROFILE_FIELD_URL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_TITLE", "Titre");
define("_CO_PROFILE_FIELD_FIELD_TITLE_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION", "Description");
define("_CO_PROFILE_FIELD_FIELD_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED", "Requis");
define("_CO_PROFILE_FIELD_FIELD_REQUIRED_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH", "Longueur maximale");
define("_CO_PROFILE_FIELD_FIELD_MAXLENGTH_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT", "Poids");
define("_CO_PROFILE_FIELD_FIELD_WEIGHT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT", "Défaut");
define("_CO_PROFILE_FIELD_FIELD_DEFAULT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL", "Non nul");
define("_CO_PROFILE_FIELD_FIELD_NOTNULL_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_EDIT", "Pouvant être modifier");
define("_CO_PROFILE_FIELD_FIELD_EDIT_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_SHOW", "Montrer");
define("_CO_PROFILE_FIELD_FIELD_SHOW_DSC", " ");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS", "Options de notification");
define("_CO_PROFILE_FIELD_FIELD_OPTIONS_DSC", " ");
define("_CO_PROFILE_FIELD_EXPORTABLE", "Exportable");
define("_CO_PROFILE_FIELD_EXPORTABLE_DSC", " ");
define("_CO_PROFILE_FIELD_STEP_ID", "ID étape");
define("_CO_PROFILE_FIELD_STEP_ID_DSC", " ");
define("_CO_PROFILE_FIELD_SYSTEM", "Champ système");
define("_CO_PROFILE_FIELD_SYSTEM_DSC", "Indicateur affichant l’existence du champ dans le core.");

// regstep
define("_CO_PROFILE_REGSTEP_STEP_NAME", "Nom");
define("_CO_PROFILE_REGSTEP_STEP_NAME_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_INTRO", "Description");
define("_CO_PROFILE_REGSTEP_STEP_INTRO_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_ORDER", "Croissant");
define("_CO_PROFILE_REGSTEP_STEP_ORDER_DSC", " ");
define("_CO_PROFILE_REGSTEP_STEP_SAVE", "Sauvegarde après confirmation");
define("_CO_PROFILE_REGSTEP_STEP_SAVE_DSC", "Si oui, l'information est sauvegardée pour le première fois après cette étape et à toutes les étapes suivantes.");

// category
define("_CO_PROFILE_CATEGORY_CATID", "ID");
define("_CO_PROFILE_CATEGORY_CATID_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_TITLE", "Titre");
define("_CO_PROFILE_CATEGORY_CAT_TITLE_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION", "Description");
define("_CO_PROFILE_CATEGORY_CAT_DESCRIPTION_DSC", " ");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT", "Poids");
define("_CO_PROFILE_CATEGORY_CAT_WEIGHT_DSC", " ");

// configs
define("_CO_PROFILE_CONFIGS_CONFIG_ID", "");
define("_CO_PROFILE_CONFIGS_CONFIG_ID_DSC", " ");
define("_CO_PROFILE_CONFIGS_CONFIG_UID", "ID Utilisateur");
define("_CO_PROFILE_CONFIGS_CONFIG_UID_DSC", " ");
define("_CO_PROFILE_CONFIGS_PICTURES", "Show my pictures to:");
define("_CO_PROFILE_CONFIGS_PICTURES_DSC", " ");
define("_CO_PROFILE_CONFIGS_AUDIO", "Show my audio files to:");
define("_CO_PROFILE_CONFIGS_AUDIO_DSC", " ");
define("_CO_PROFILE_CONFIGS_VIDEOS", "Show my videos to:");
define("_CO_PROFILE_CONFIGS_VIDEOS_DSC", " ");
define("_CO_PROFILE_CONFIGS_FRIENDSHIP", "Show my friends to:");
define("_CO_PROFILE_CONFIGS_FRIENDSSHIP_DSC", " ");
define("_CO_PROFILE_CONFIGS_TRIBES", "Show my groups to:");
define("_CO_PROFILE_CONFIGS_TRIBES_DSC", " ");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS", "Show my contributions to:");
define("_CO_PROFILE_CONFIGS_PROFILE_USERCONTRIBUTIONS_DSC", " ");
define("_CO_PROFILE_CONFIGS_SUSPENSION", "Suspend user");
define("_CO_PROFILE_CONFIGS_SUSPENSION_DSC", "You can revoke a users access for a period of time.");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD", "");
define("_CO_PROFILE_CONFIGS_BACKUP_PASSWORD_DSC", " ");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL", "");
define("_CO_PROFILE_CONFIGS_BACKUP_EMAIL_DSC", " ");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION", "When does suspension end?");
define("_CO_PROFILE_CONFIGS_END_SUSPENSION_DSC", " ");
define("_CO_PROFILE_CONFIGS_STATUS", "Status");
define("_CO_PROFILE_CONFIGS_STATUS_DSC", " ");
define("_CO_PROFILE_CONFIG_STATUS_EVERYBODY", "Anybody can see this");
define("_CO_PROFILE_CONFIG_STATUS_MEMBERS", "Only registered users can see this");
define("_CO_PROFILE_CONFIG_STATUS_FRIENDS", "Only friends can see this");
define("_CO_PROFILE_CONFIG_STATUS_PRIVATE", "Only I can see this");

// audio
define("_CO_PROFILE_AUDIO_AUDIO_ID", "Audio ID");
define("_CO_PROFILE_AUDIO_AUDIO_ID_DSC", " ");
define("_CO_PROFILE_AUDIO_TITLE", "Titre");
define("_CO_PROFILE_AUDIO_TITLE_DSC", " ");
define("_CO_PROFILE_AUDIO_AUTHOR", "Auteur");
define("_CO_PROFILE_AUDIO_AUTHOR_DSC", " ");
define("_CO_PROFILE_AUDIO_URL", "Audio File");
define("_CO_PROFILE_AUDIO_URL_DSC", " ");
define("_CO_PROFILE_AUDIO_UID_OWNER", "Submitter");
define("_CO_PROFILE_AUDIO_UID_OWNER_DSC", " ");
define("_CO_PROFILE_AUDIO_CREATION_TIME", "Creation time");
define("_CO_PROFILE_AUDIO_CREATION_TIME_DSC", " ");

// tribes
define("_CO_PROFILE_TRIBES_TRIBES_ID", "Group ID");
define("_CO_PROFILE_TRIBES_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBES_UID_OWNER", "Creator");
define("_CO_PROFILE_TRIBES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_TRIBES_TITLE", "Nom");
define("_CO_PROFILE_TRIBES_TITLE_DSC", " Please enter a desired name for the group.");
define("_CO_PROFILE_TRIBES_TRIBE_DESC", "Decription");
define("_CO_PROFILE_TRIBES_TRIBE_DESC_DSC", " Please write a little description about this group.<br />The description of a group is also taken into account in the search process.");
define("_CO_PROFILE_TRIBES_TRIBE_IMG", "Image");
define("_CO_PROFILE_TRIBES_TRIBE_IMG_DSC", " Select a picture for your group.");
define("_CO_PROFILE_TRIBES_SECURITY", "Security level");
define("_CO_PROFILE_TRIBES_SECURITY_DSC", " Select the security level for this group.");
define("_CO_PROFILE_TRIBES_SECURITY_EVERYBODY", "Anybody can join this group");
define("_CO_PROFILE_TRIBES_SECURITY_APPROVAL", "Anybody can join this group (approval by the owner required)");
define("_CO_PROFILE_TRIBES_SECURITY_INVITATION", "Access by invitation only");

// tribetopic
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID", "Topic ID");
define("_CO_PROFILE_TRIBETOPIC_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID", "Group ID");
define("_CO_PROFILE_TRIBETOPIC_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID", "Poster ID");
define("_CO_PROFILE_TRIBETOPIC_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_TITLE", "Titre");
define("_CO_PROFILE_TRIBETOPIC_TITLE_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_CLOSED", "Closed");
define("_CO_PROFILE_TRIBETOPIC_CLOSED_DSC", " Yes to close the topic");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID", "Last post ID");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Last post time");
define("_CO_PROFILE_TRIBETOPIC_LAST_POST_TIME_DSC", " ");

// tribepost
define("_CO_PROFILE_TRIBEPOST_POST_ID", "Post ID");
define("_CO_PROFILE_TRIBEPOST_POST_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID", "Topic ID");
define("_CO_PROFILE_TRIBEPOST_TOPIC_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID", "Group ID");
define("_CO_PROFILE_TRIBEPOST_TRIBES_ID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID", "Poster ID");
define("_CO_PROFILE_TRIBEPOST_POSTER_UID_DSC", " ");
define("_CO_PROFILE_TRIBEPOST_TITLE", "Titre");
define("_CO_PROFILE_TRIBEPOST_TITLE_DSC", "Sujet");
define("_CO_PROFILE_TRIBEPOST_BODY", "Corps");
define("_CO_PROFILE_TRIBEPOST_BODY_DSC", " Body text");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG", "Attach Signature");
define("_CO_PROFILE_TRIBEPOST_ATTACHSIG_DSC", " Yes to attach signature to the post");
define("_CO_PROFILE_TRIBEPOST_POST_TIME", "Post Time");
define("_CO_PROFILE_TRIBEPOST_POST_TIME_DSC", " ");

// friendship
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID", "ID");
define("_CO_PROFILE_FRIENDSHIP_FRIENDSHIP_ID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID", "ID Utilisateur");
define("_CO_PROFILE_FRIENDSHIP_FRIEND1_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID", "ID Utilisateur");
define("_CO_PROFILE_FRIENDSHIP_FRIEND2_UID_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS", "");
define("_CO_PROFILE_FRIENDSHIP_STATUS_DSC", " ");
define("_CO_PROFILE_FRIENDSHIP_STATUS_PENDING", "En suspens");
define("_CO_PROFILE_FRIENDSHIP_STATUS_ACCEPTED", "Accepté");
define("_CO_PROFILE_FRIENDSHIP_STATUS_REJECTED", "Rejeté");

// pictures
define("_CO_PROFILE_PICTURES_PICTURES_ID", "ID Image");
define("_CO_PROFILE_PICTURES_PICTURES_ID_DSC", " ");
define("_CO_PROFILE_PICTURES_TITLE", "Title of the picture");
define("_CO_PROFILE_PICTURES_TITLE_DSC", " ");
define("_CO_PROFILE_PICTURES_CREATION_TIME", "");
define("_CO_PROFILE_PICTURES_CREATION_TIME_DSC", " ");
define("_CO_PROFILE_PICTURES_UID_OWNER", "Submitter");
define("_CO_PROFILE_PICTURES_UID_OWNER_DSC", " ");
define("_CO_PROFILE_PICTURES_URL", "Image");
define("_CO_PROFILE_PICTURES_URL_DSC", " ");
define("_CO_PROFILE_PICTURES_PRIVATE", "Make this a private picture");
define("_CO_PROFILE_PICTURES_PRIVATE_DSC", " ");

// videos
define("_CO_PROFILE_VIDEOS_VIDEOS_ID", "ID Vidéo");
define("_CO_PROFILE_VIDEOS_VIDEOS_ID_DSC", " ");
define("_CO_PROFILE_VIDEOS_UID_OWNER", "Submitter");
define("_CO_PROFILE_VIDEOS_UID_OWNER_DSC", " ");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC", "Video description");
define("_CO_PROFILE_VIDEOS_VIDEO_DESC_DSC", " ");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE", "Code Youtube");
define("_CO_PROFILE_VIDEOS_YOUTUBE_CODE_DSC", " Please enter the code of your clip in YouTube.<br /><b>Example:</b> 3UkPhvse8JA");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE", "Video title");
define("_CO_PROFILE_VIDEOS_VIDEO_TITLE_DSC", " ");
define("_CO_PROFILE_VIDEOS_CREATION_TIME", "Creation time");
define("_CO_PROFILE_VIDEOS_CREATION_TIME_DSC", " ");

// visitors
define("_CO_PROFILE_VISITORS_VISIT_ID", "ID");
define("_CO_PROFILE_VISITORS_VISIT_ID_DSC", " ");
define("_CO_PROFILE_VISITORS_UID_OWNER", "");
define("_CO_PROFILE_VISITORS_UID_OWNER_DSC", " ");
define("_CO_PROFILE_VISITORS_UID_VISITOR", "");
define("_CO_PROFILE_VISITORS_UID_VISITOR_DSC", " ");
// tribeuser
define("_CO_PROFILE_TRIBEUSER_TB_ID", "ID");
define("_CO_PROFILE_TRIBEUSER_TB_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_TRIBEUSER_ID", "ID membre");
define("_CO_PROFILE_TRIBEUSER_TRIBEUSER_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID", "Groupe");
define("_CO_PROFILE_TRIBEUSER_TRIBE_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_USER_ID", "Nom affiché");
define("_CO_PROFILE_TRIBEUSER_USER_ID_DSC", " ");
define("_CO_PROFILE_TRIBEUSER_APPROVED", "Approuvé");
define("_CO_PROFILE_TRIBEUSER_APPROVED_DSC", " Yes if membership for the group is approved by the owner.");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED", "Accepté");
define("_CO_PROFILE_TRIBEUSER_ACCEPTED_DSC", " Yes if user accepted the invitation to this group.");

// moved here from admin - 2.2
define("_MI_PROFILE_USERS", "Utilisateurs");
define("_AM_PROFILE_CATEGORYS", "Catégories");
define("_AM_PROFILE_FIELDS", "Champs");
define("_AM_PROFILE_REGSTEPS", "Étapes d'enregistrement");
define("_MI_PROFILE_VISIBILITY", "Visibilité");
define("_MI_PROFILE_PERMISSIONS", "Permissions");
define("_MI_PROFILE_MODULEDESC", "This module simulates a social network software like MySpace or Orkut, please login or register now.");
?>