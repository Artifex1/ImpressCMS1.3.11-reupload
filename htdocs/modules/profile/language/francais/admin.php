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
define("_AM_PROFILE_REQUIREMENTS", "Exigences");
define("_AM_PROFILE_REQUIREMENTS_INFO", "Nous avons vérifié votre système, malheureusement il ne répond pas aux exigences nécessaires au fonctionnement du Profile. Ci-dessous se trouvent les exigences nécessaires.");
define("_AM_PROFILE_REQUIREMENTS_ICMS_BUILD", "Le Profile requiert au moins la version ImpressCMS %s (la vôtre est %s)!");
define("_AM_PROFILE_REQUIREMENTS_SUPPORT", "Si vous avez une question ou préoccupation, veuillez visiter nos forums sur <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// Users
define("_AM_PROFILE_DELETEDSUCCESS", "%s supprimé avec succès");
define("_AM_PROFILE_RUSUREDEL", "Voulez-vous vraiment supprimer %s");
define("_AM_PROFILE_EDITUSER", "Modifier l'utilisateur");
define("_AM_PROFILE_REMOVEDUSERS", "Utilisateurs bannis/supprimés");
define("_AM_PROFILE_SELECTUSER", "Sélectionner l'utilisateur");
define("_AM_PROFILE_ADDUSER","Ajouter un utilisateur");
define("_AM_PROFILE_USERCREATED", "Utilisateur créé");
define("_AM_PROFILE_USERMODIFIED","Profile mis à jour!");
define("_AM_PROFILE_CANNOTDELETESELF", "Il n'est pas permi de supprimer votre compte - utilisez votre page de profile pour supprimer votre propre compte");
define("_AM_PROFILE_CANNOTEDITWEBMASTERS", "Groupes");
define("_AM_PROFILE_GROUP", "Groupes");

// Categories
define("_AM_PROFILE_CATEGORY_CREATE", "Ajouter une catégorie");
define("_AM_PROFILE_CATEGORY", "Catégorie");
define("_AM_PROFILE_CATEGORY_EDIT", "Modification de la catégorie");
define("_AM_PROFILE_CATEGORY_CREATED", "La catégorie a été créée avec succès.");
define("_AM_PROFILE_CATEGORY_MODIFIED", "La catégorie a été modifiée.");
define("_AM_PROFILE_CATEGORY_NOTDELETED_FIELDS", "La catégorie ne peut pas être supprimée car il y a encore %s champs qui lui sont assignés.");

// Field
define("_AM_PROFILE_FIELD_CREATE", "Ajouter un champ");
define("_AM_PROFILE_FIELD", "Champ");
define("_AM_PROFILE_FIELD_EDIT", "Modifier le champ");
define("_AM_PROFILE_FIELD_CREATED", "Le champ a été créé avec succès.");
define("_AM_PROFILE_FIELD_MODIFIED", "Le champ a été modifié avec succès.");
define("_AM_PROFILE_FIELD_TYPE_CHECKBOX", "Case à cocher");
define("_AM_PROFILE_FIELD_TYPE_GROUP", "Groupes");
define("_AM_PROFILE_FIELD_TYPE_GROUPMULTI", "Groupes multiples");
define("_AM_PROFILE_FIELD_TYPE_LANGUAGE", "Langue");
define("_AM_PROFILE_FIELD_TYPE_RADIO", "Boutons radio");
define("_AM_PROFILE_FIELD_TYPE_SELECT", "Sélection");
define("_AM_PROFILE_FIELD_TYPE_SELECTMULTI", "Sélection multiple");
define("_AM_PROFILE_FIELD_TYPE_TEXTAREA", "Zone de texte");
define("_AM_PROFILE_FIELD_TYPE_TEXTBOX", "Boîte de texte");
define("_AM_PROFILE_FIELD_TYPE_DHTMLTEXTAREA", "Zone de texte DHTML");
define("_AM_PROFILE_FIELD_TYPE_TIMEZONE", "Zone horaire");
define("_AM_PROFILE_FIELD_TYPE_YESNO", "Radio Oui/Non");
define("_AM_PROFILE_FIELD_TYPE_DATE", "Date");
define("_AM_PROFILE_FIELD_TYPE_DATETIME", "Date et Heure");
define("_AM_PROFILE_FIELD_TYPE_LONGDATE", "Date longue");
define("_AM_PROFILE_FIELD_TYPE_IMAGE", "Image");
define("_AM_PROFILE_FIELD_TYPE_RANK", "Classement");
define("_AM_PROFILE_FIELD_TYPE_THEME", "Thème");
define("_AM_PROFILE_FIELD_TYPE_URL", "URL");
define("_AM_PROFILE_FIELD_TYPE_LOCATION", "Emplacement (Google)");
define("_AM_PROFILE_FIELD_TYPE_EMAIL", "Email");
define("_AM_PROFILE_FIELD_TYPE_OPENID", "Open-ID");

// Registration Steps
define("_AM_PROFILE_REGSTEP_CREATE", "Ajouter une étape d'enregistrement");
define("_AM_PROFILE_REGSTEP", "Étape d'enregistrement");
define("_AM_PROFILE_REGSTEP_EDIT", "Modifier l'étape d'enregistrement");
define("_AM_PROFILE_REGSTEP_CREATED", "L'étape d'enregistrement a été créée avec succès.");
define("_AM_PROFILE_REGSTEP_MODIFIED", "L'étape d'enregistrement a été mofifiée avec succès.");

// Visibility
define("_AM_PROFILE_FIELDVISIBLE", "Le champ");
define("_AM_PROFILE_FIELDVISIBLEFOR", "est visible par");
define("_AM_PROFILE_FIELDVISIBLEON", "visualisation d'un profile de");
define("_AM_PROFILE_FIELDVISIBLETOALL", "chacun");
define("_AM_PROFILE_FIELDNOTVISIBLE", "n'est pas visible");

// Permissions
define("_AM_PROFILE_PROF_EDITABLE", "Champ modifiable du profile");
define("_AM_PROFILE_PROF_SEARCH", "Pouvant être recherché par ces groupes");

// Audio
define("_AM_PROFILE_AUDIO", "Audio");
define("_AM_PROFILE_AUDIOS", "Audios");
define("_AM_PROFILE_AUDIO_CREATE", "Ajouter un fichier audio");
define("_AM_PROFILE_AUDIO_EDIT", "Modifier l'audio");

// Tribes
define("_AM_PROFILE_TRIBE", "Groupe");
define("_AM_PROFILE_TRIBES", "Groupes");
define("_AM_PROFILE_TRIBES_CREATE", "Créer un nouveau groupe");
define("_AM_PROFILE_TRIBES_EDIT", "Modifier le groupe");
define("_AM_PROFILE_TRIBES_CREATED", "Le groupe a été créé avec succès.");
define("_AM_PROFILE_TRIBES_MODIFIED", "Le groupe a été modifié avec succès.");
define("_AM_PROFILE_TRIBES_MERGE", "Fusionner");
define("_AM_PROFILE_TRIBES_MERGE_DSC", "Fusionner ce groupe avec un autre groupe.");
define("_AM_PROFILE_TRIBES_MERGING", "Fusionnement");
define("_AM_PROFILE_TRIBES_MERGEWITH", "Groupe a fusionner avec...");
define("_AM_PROFILE_TRIBES_MERGE_WARNING", "<span style='color:red;font-weight:bold;'>Avertissement</span>");
define("_AM_PROFILE_TRIBES_MERGE_WARNING_DSC", "Le groupe \"%s\" sera fusionné avec le groupe sélectionné. Dès lors, le groupe sera supprimé et tous les utilisateurs et sujets seront transférés dans le groupe sélectionné. Les titre, description, image, propriétaire et paramètres du groupe sélectionné seront pris comme maître.");
define("_AM_PROFILE_TRIBES_MERGE_ERR_ID", "Un des groupes sélectionnés n'existe pas.");
define("_AM_PROFILE_TRIBES_MERGE_SUCCESS", "Les deux groupes ont étés fusionnés avec succès.");
define("_AM_PROFILE_TRIBES_MERGE_ERR_SAME", "Non valide: Vous ne pouvez joindre un groupe à lui-même. Veuillez spécifier une autre cible.");

// Pictures
define("_AM_PROFILE_PICTURE", "Image");
define("_AM_PROFILE_PICTURES", "Images");
define("_AM_PROFILE_PICTURES_CREATE", "Ajouter une image");
define("_AM_PROFILE_PICTURES_EDIT", "Modifier l'image");
define("_AM_PROFILE_PICTURES_CREATED", "L'image a été créé avec succès.");
define("_AM_PROFILE_PICTURES_MODIFIED", "L'image a été modifiée avec succès.");

// Videos
define("_AM_PROFILE_VIDEO", "Vidéo");
define("_AM_PROFILE_VIDEOS", "Vidéos");
define("_AM_PROFILE_VIDEOS_CREATE", "Ajouter une vidéo");
define("_AM_PROFILE_VIDEOS_EDIT", "Modifier la vidéo");

// Tribeuser
define("_AM_PROFILE_TRIBEUSER", "Adhésion");
define("_AM_PROFILE_TRIBEUSERS", "Adhésions");
define("_AM_PROFILE_TRIBEUSER_CREATE", "Créer une nouvelle adhésion");
define("_AM_PROFILE_TRIBEUSER_MODIFY", "Modifier l'adhésion");
define("_AM_PROFILE_TRIBEUSER_CREATED", "L'adhésion a été créée avec succès.");
define("_AM_PROFILE_TRIBEUSER_MODIFIED", "L'adhésion a été modifiée avec succès.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "L'utilisateur spécifié est déjà membre de ce groupe.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "L'utilisateur spécifié est déjà propriétaire de ce groupe et ne peut donc être un membre.");
define("_AM_PROFILE_TRIBEUSER_NOTTRIBESYET", "Il n'y a pas encore de groupes.");

//Find user
define("_AM_SPROFILE_FINDUSER_CRIT", "%s contient:");
define("_AM_SPROFILE_FINDUSER", "Rechercher un membre");
define("_AM_SPROFILE_UNAME", "Nom affiché");
define("_AM_SPROFILE_UID", "ID utilisateur");
define("_AM_SPROFILE_EMAIL", "Email");
define("_AM_SPROFILE_EXPORT_ALL", "Exporter tous les utilisateurs correspondants");