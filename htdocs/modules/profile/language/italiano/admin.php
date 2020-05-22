<?php
/**
 * English language constants used in admin section of the module
 *
 * @copyright	The ImpressCMS Project <http://www.impresscms.org>
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Jan Pedersen
 * @author		Marcello Brandao <marcello.brandao@gmail.com>
 * @author		Sina Asghari (aka stranger) <pesian_stranger@users.sourceforge.net>
 * @author		Gustavo Pilla (aka nekro) <nekro@impresscms.org>
 * @package		profile
 * @version		$Id: admin.php 24694 2012-11-07 01:31:55Z qm-b $
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// Requirements
define("_AM_PROFILE_REQUIREMENTS", "Requirements");
define("_AM_PROFILE_REQUIREMENTS_INFO", "We've reviewed your system, unfortunately it doesn't meet all the requirements needed for Profile to function. Below are the requirements needed.");
define("_AM_PROFILE_REQUIREMENTS_ICMS_BUILD", "Profile requires at least ImpressCMS Build %s (yours is %s)!");
define("_AM_PROFILE_REQUIREMENTS_SUPPORT", "Should you have any question or concerns, please visit our forums at <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// Users
define("_AM_PROFILE_DELETEDSUCCESS", "%s eliminata con successo");
define("_AM_PROFILE_RUSUREDEL", "Sei sicuro di voler eliminare %s");
define("_AM_PROFILE_EDITUSER", "Modifica utente");
define("_AM_PROFILE_REMOVEDUSERS", "Utenti bannati/rimossi");
define("_AM_PROFILE_SELECTUSER", "Seziona utente");
define("_AM_PROFILE_ADDUSER","Aggiungi utente");
define("_AM_PROFILE_USERCREATED", "Utente creato");
define("_AM_PROFILE_USERMODIFIED","Profilo aggiornato!");
define("_AM_PROFILE_CANNOTDELETESELF", "L'eliminazione del proprio account non &egrave; consentita - utilizza la pagina del tuo profilo per eliminare il tuo account");
define("_AM_PROFILE_CANNOTEDITWEBMASTERS", "Non puoi modificare un account del webmaster");
define("_AM_PROFILE_GROUP", "Seleziona Gruppo");

// Categories
define("_AM_PROFILE_CATEGORY_CREATE", "Aggiungi una categoria");
define("_AM_PROFILE_CATEGORY", "Categoria");
define("_AM_PROFILE_CATEGORY_EDIT", "Modifica questa categoria");
define("_AM_PROFILE_CATEGORY_CREATED", "La categoria &egrave; stata creata con successo.");
define("_AM_PROFILE_CATEGORY_MODIFIED", "La categoria &egrave; stata modificata con successo.");
define("_AM_PROFILE_CATEGORY_NOTDELETED_FIELDS", "La categoria non può essere cancellata perché contiene ancora %s campi.");

// Field
define("_AM_PROFILE_FIELD_CREATE", "Aggiungi un campo");
define("_AM_PROFILE_FIELD", "Campo");
define("_AM_PROFILE_FIELD_EDIT", "Modifica un campo");
define("_AM_PROFILE_FIELD_CREATED", "Il campo &egrave; stato creato con successo.");
define("_AM_PROFILE_FIELD_MODIFIED", "Il campo &egrave; stato modificato con successo.");
define("_AM_PROFILE_FIELD_TYPE_CHECKBOX", "Casella di spunta");
define("_AM_PROFILE_FIELD_TYPE_GROUP", "Selezione gruppo");
define("_AM_PROFILE_FIELD_TYPE_GROUPMULTI", "Selezione Gruppo Multiplo");
define("_AM_PROFILE_FIELD_TYPE_LANGUAGE", "Selezione Lingua");
define("_AM_PROFILE_FIELD_TYPE_RADIO", "Radio Buttons");
define("_AM_PROFILE_FIELD_TYPE_SELECT", "Selezione");
define("_AM_PROFILE_FIELD_TYPE_SELECTMULTI", "Selezione multipla");
define("_AM_PROFILE_FIELD_TYPE_TEXTAREA", "Area testo");
define("_AM_PROFILE_FIELD_TYPE_TEXTBOX", "Box testo");
define("_AM_PROFILE_FIELD_TYPE_DHTMLTEXTAREA", "Area testo DHTML");
define("_AM_PROFILE_FIELD_TYPE_TIMEZONE", "Fuso orario");
define("_AM_PROFILE_FIELD_TYPE_YESNO", "Radio S&igrave;/No");
define("_AM_PROFILE_FIELD_TYPE_DATE", "Data");
define("_AM_PROFILE_FIELD_TYPE_DATETIME", "Data e ora");
define("_AM_PROFILE_FIELD_TYPE_LONGDATE", "Data in formato lungo");
define("_AM_PROFILE_FIELD_TYPE_IMAGE", "Immagine");
define("_AM_PROFILE_FIELD_TYPE_RANK", "Livello");
define("_AM_PROFILE_FIELD_TYPE_THEME", "Tema");
define("_AM_PROFILE_FIELD_TYPE_URL", "URL");
define("_AM_PROFILE_FIELD_TYPE_LOCATION", "Location (Google)");
define("_AM_PROFILE_FIELD_TYPE_EMAIL", "Email");
define("_AM_PROFILE_FIELD_TYPE_OPENID", "Open-ID");

// Registration Steps
define("_AM_PROFILE_REGSTEP_CREATE", "Aggiungi un livello di registrazione");
define("_AM_PROFILE_REGSTEP", "Livello registrazione");
define("_AM_PROFILE_REGSTEP_EDIT", "Modifica questo livello di registrazione");
define("_AM_PROFILE_REGSTEP_CREATED", "Il livello di registrazione &egrave; stato creato con successo.");
define("_AM_PROFILE_REGSTEP_MODIFIED", "Il livello di registrazione &egrave; stato modificato con successo.");

// Visibility
define("_AM_PROFILE_FIELDVISIBLE", "Il campo ");
define("_AM_PROFILE_FIELDVISIBLEFOR", " &egrave; visibile da ");
define("_AM_PROFILE_FIELDVISIBLEON", " guardando nel profilo di ");
define("_AM_PROFILE_FIELDVISIBLETOALL", "- Tutti");
define("_AM_PROFILE_FIELDNOTVISIBLE", "non &egrave; visibile da ");

// Permissions
define("_AM_PROFILE_PROF_EDITABLE", "Campo modificabile dal profilo");
define("_AM_PROFILE_PROF_SEARCH", "Ricerca possibile da parte di questi gruppi");

// Audio
define("_AM_PROFILE_AUDIO", "Audio");
define("_AM_PROFILE_AUDIOS", "Audio");
define("_AM_PROFILE_AUDIO_CREATE", "Aggiungi un file audio");
define("_AM_PROFILE_AUDIO_EDIT", "Modifica questo audio");

// Tribes
define("_AM_PROFILE_TRIBE", "Trib&ugrave;");
define("_AM_PROFILE_TRIBES", "Trib&ugrave;");
define("_AM_PROFILE_TRIBES_CREATE", "Aggiungi una trib&ugrave;");
define("_AM_PROFILE_TRIBES_EDIT", "Modifica questa trib&ugrave;");
define("_AM_PROFILE_TRIBES_CREATED", "La trib&ugrave; &egrave; stata creata con successo.");
define("_AM_PROFILE_TRIBES_MODIFIED", "La trib&ugrave; &egrave; stata modificata con successo.");
define("_AM_PROFILE_TRIBES_MERGE", "Merge");
define("_AM_PROFILE_TRIBES_MERGE_DSC", "Merge this group into another group.");
define("_AM_PROFILE_TRIBES_MERGING", "Merging");
define("_AM_PROFILE_TRIBES_MERGEWITH", "Group to merge with...");
define("_AM_PROFILE_TRIBES_MERGE_WARNING", "<span style='color:red;font-weight:bold;'>Warning</span>");
define("_AM_PROFILE_TRIBES_MERGE_WARNING_DSC", "The group \"%s\" will be merged into the group selected. Therefore, the group will be deleted and all users and topics will be transfered into the group selected. The title, description, picture, owner and settings of the group selected will be taken as master.");
define("_AM_PROFILE_TRIBES_MERGE_ERR_ID", "One of the groups selected does not exist.");
define("_AM_PROFILE_TRIBES_MERGE_SUCCESS", "Both groups were successfully merged.");
define("_AM_PROFILE_TRIBES_MERGE_ERR_SAME", "Invalid: You cannot join a group with itself. Please specify another target.");

// Pictures
define("_AM_PROFILE_PICTURE", "Immagine");
define("_AM_PROFILE_PICTURES", "Immagini");
define("_AM_PROFILE_PICTURES_CREATE", "Aggiungi un'immagine");
define("_AM_PROFILE_PICTURES_EDIT", "Modifica questa immagine");
define("_AM_PROFILE_PICTURES_CREATED", "L'immagine &egrave; stata creata con successo.");
define("_AM_PROFILE_PICTURES_MODIFIED", "L'immagine &egrave; stata modifcata con successo.");

// Videos
define("_AM_PROFILE_VIDEO", "Video");
define("_AM_PROFILE_VIDEOS", "Video");
define("_AM_PROFILE_VIDEOS_CREATE", "Aggiungi un video");
define("_AM_PROFILE_VIDEOS_EDIT", "Modifica questo video");

// Tribeuser
define("_AM_PROFILE_TRIBEUSER", "utente trib&ugrave;");
define("_AM_PROFILE_TRIBEUSERS", "Utente trib&ugrave;");
define("_AM_PROFILE_TRIBEUSER_CREATE", "Aggiungi un utente trib&ugrave;");
define("_AM_PROFILE_TRIBEUSER_MODIFY", "Modifica un utente trib&ugrave;");
define("_AM_PROFILE_TRIBEUSER_CREATED", "L'utente trib&ugrave; &egrave; stato creato con successo.");
define("_AM_PROFILE_TRIBEUSER_MODIFIED", "L'utente trib&ugrave; &egrave; stato modificato con successo.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "L'utente specificato &egrave; gi&agrave; membro di questa trib&ugrave;.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "L'utente specificato &egrave; gi&agrave; il proprietario di questa trib&ugrave; e pertanto non pu&ograve; esserne membro.");
define("_AM_PROFILE_TRIBEUSER_NOTTRIBESYET", "Non esiste ancora nessuna trib&ugrave;.");

//Find user
define("_AM_SPROFILE_FINDUSER_CRIT", "%s contiene:");
define("_AM_SPROFILE_FINDUSER", "Trova utenti");
define("_AM_SPROFILE_UNAME", "Nome utente");
define("_AM_SPROFILE_UID", "Userid");
define("_AM_SPROFILE_EMAIL", "Email");
define("_AM_SPROFILE_EXPORT_ALL", "Esporta tutti gli utenti corrispondenti");