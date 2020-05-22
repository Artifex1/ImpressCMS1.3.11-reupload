<?php
/**
 * Extended User Profile
 *
 * @copyright	The ImpressCMS Project http://www.impresscms.org/
 * @license		LICENSE.txt
 * @license		GNU General Public License (GPL) http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @package		modules
 * @since		1.2
 * @author		Jan Pedersen
 * @author		Marcello Brandao <marcello.brandao@gmail.com>
 * @author		Sina Asghari (aka stranger) <pesian_stranger@users.sourceforge.net>
 * @version		$Id: main.php 22415 2011-08-27 10:21:21Z phoenyx $
 */

define("_MD_PROFILE_MAKE_CONFIG_FIRST", "This is the first time you open your profile. Please specify your settings first.");
define("_MD_PROFILE_USER_NOT_FOUND", "User not found.");
define("_MD_PROFILE_ERRORDURINGSAVE", "Error while saving data");
define("_MD_PROFILE_EMAIL", "Email");
define("_MD_PROFILE_OPENID", "OpenID");
define("_MD_PROFILE_OPENID_VIEW", "Autoriser les autres utilisateurs à voir mon OpenID");
define("_MD_PROFILE_AVATAR", "Avatar");
define("_MD_PROFILE_VERIFYPASS", "Verify password");
define("_MD_PROFILE_SUBMIT", "Soumettre");
define("_MD_PROFILE_FINISH", "Terminer");
define("_MD_PROFILE_REGISTERNG", "Impossible d'enregistrer un nouveau membre.");
define("_MD_PROFILE_DISCLAIMER", "Responsabilité");
define("_MD_PROFILE_IAGREE", "J'accepte la mise en garde ci-dessus");
define("_MD_PROFILE_UNEEDAGREE", "Vous devez accepter la mise en garde afin de pouvoir vous inscrire sur notre site.");
define("_MD_PROFILE_NOREGISTER", "désolé, nous avons actuellement fermé toutes nouvelles inscriptions");
define("_MD_PROFILE_NOSTEPSAVAILABLE", "No registration steps are defined");
define("_MD_PROFILE_REGISTER_FINISH", "Thanks for registering");
define("_MD_PROFILE_USERKEYFOR", "Clé d'activation membre pour %s");
define("_MD_PROFILE_ACTLOGIN", "The account has been activated. You can now login with the registered password.");
define("_MD_PROFILE_ACTKEYNOT", "Clé d'activation incorrecte!");
define("_MD_PROFILE_ACONTACT", "Le compte sélectionné est déjà activé!");
define("_MD_PROFILE_ACTFAILED", "Activation failed!");
define("_MD_PROFILE_YOURREGISTERED", "An email containing a user activation key has been sent to the email account you provided. Please follow the instructions in the mail to activate your account. ");
define("_MD_PROFILE_YOURREGMAILNG", "Vous êtes maintenant enregistré. Cependant, nous sommes dans l'incapacité d'envoyer le mail d'activation à votre adresse Email en raison d'une erreur interne survenue sur notre serveur. Nous sommes désolés pour cet inconvénient, merci d'envoyer un Email de notification au(x) webmaster(s) du site.");
define("_MD_PROFILE_YOURREGISTERED2", "You are now registered.  Please wait for your account to be activated by the adminstrators. You will receive an email once you are activated. This could take a while so please be patient.");
define("_MD_PROFILE_NEWUSERREGAT", "Nouveau membre inscrit sur %s");
define("_MD_PROFILE_HASJUSTREG", "%s vient juste de s'inscrire!");
define("_MD_PROFILE_INVALIDMAIL", "Votre adresse Email est invalide.");
define("_MD_PROFILE_SORRYNOTFOUND", "Désolé, aucune info membre correspondante n'a été trouvée.");
define("_MD_PROFILE_USERALREADYACTIVE", "User with email %s is already activated");
define("_MD_PROFILE_USERDISABLED", "This user account is disabled and cannot be activated by the user");
define("_MD_PROFILE_YOURACCOUNT", "Votre compte sur %s"); // %s is your site name
define("_MD_PROFILE_ACTVMAILNG", "Echec d'envoi du mail de notification &agrave; %s"); // %s is a username
define("_MD_PROFILE_ACTVMAILOK", "Email de notification à %s envoyé."); // %s is a username
define("_MD_PROFILE_PROVIDEPWDS", "Provide all passwords");
define("_MD_PROFILE_DEFAULT", "Basic Information");
define("_MD_PROFILE_SUSPENDED", "This user is suspended until %s");

// userinfo.php
define("_MD_PROFILE_SELECTNG", "No User selected! Please go back and try again.");
define("_MD_PROFILE_EDITPROFILE", "Edit profile");
define("_MD_PROFILE_SHOWALL", "Show all");
define("_MD_PROFILE_DELETED", "This account has been deleted.");

// edituser.php
define("_MD_PROFILE_PROFILE", "Profile");
define("_MD_PROFILE_PASSWORD", "Mot de passe (mot de passe utiliser pour acceder a votre base de donnees.)");
define("_MD_PROFILE_TYPEPASSTWICE", "(Saisissez deux fois un nouveau mot de passe pour le changer)");
define("_MD_PROFILE_SAVECHANGES", "Save changes");
define("_MD_PROFILE_NOEDITRIGHT", "Sorry, you are not authorized to edit this user.");
define("_MD_PROFILE_PROFUPDATED", "Profile mis à jour!");
define("_MD_PROFILE_UPLOADMYAVATAR", "Upload avatar");
define("_MD_PROFILE_MAXPIXEL", "Max pixels");
define("_MD_PROFILE_MAXIMGSZ", "Max image size in bytes");
define("_MD_PROFILE_SELFILE", "Sélectionnez un fichier");
define("_MD_PROFILE_OLDDELETED", "Votre ancien avatar va être effacé!");
define("_MD_PROFILE_CHOOSEAVT", "Choisir un avatar dans la liste disponible");
define("_MD_PROFILE_ADMINNO", "Utilisateur dans le groupe de webmasters ne peuvent être enlevés");
define("_MD_PROFILE_NOPERMISS", "Sorry, you don't have the permission to perform this action!");
define("_MD_PROFILE_SURETODEL", "Etes-vous sûr de vouloir supprimer votre compte ?");
define("_MD_PROFILE_REMOVEINFO", "Ceci va supprimer toutes vos informations de notre base de données.");
define("_MD_PROFILE_BEENDELED", "Votre compte a été supprimé.");
define("_MD_PROFILE_ACTIVEUSER", "User Level");
define("_MD_PROFILE_ACTIVE", "Active");
define("_MD_PROFILE_INACTIVE", "Inactive");
define("_MD_PROFILE_DISABLED", "Désactivé");

// changepass.php
define("_MD_PROFILE_CHANGEPASSWORD", "Changer mot de passe");
define("_MD_PROFILE_PASSWORDCHANGED", "Password changed successfully");
define("_MD_PROFILE_OLDPASSWORD", "Current password");
define("_MD_PROFILE_NEWPASSWORD", "New password");

// search.php
define("_MD_PROFILE_SORTBY", "trier par");
define("_MD_PROFILE_ORDER", "Ordre");
define("_MD_PROFILE_PERPAGE", "Users per page");
define("_MD_PROFILE_LATERTHAN", "%s is later than");
define("_MD_PROFILE_EARLIERTHAN", "%s is earlier than");
define("_MD_PROFILE_LARGERTHAN", "%s is larger than");
define("_MD_PROFILE_SMALLERTHAN", "%s is smaller than");
define("_MD_PROFILE_NOUSERSFOUND", "No users found");
define("_MD_PROFILE_RESULTS", "Résultats de la recherche");

// changemail.php
define("_MD_PROFILE_CHANGEMAIL", "Change email");
define("_MD_PROFILE_NEWMAIL", "New email address");
define("_MD_PROFILE_NEWEMAILREQ", "New email address request");
define("_MD_PROFILE_NEWMAILMSGSENT", "Your new email address change request has been received and logged. You must confirm your new email address before your session expires. An email with activation instructions has been sent to the new email address you entered. Please follow the instructions in that email to make the change. Do not close your browser until you click on the confirmation link in the e-mail address. Your email address WILL NOT CHANGE UNLESS you confirm it.");
define("_MD_PROFILE_EMAILCHANGED", "Your email address has been changed");
define("_MD_PROFILE_CONFCODEMISSING", "Confirmation code missing");
define("_MD_PROFILE_CONFCODEWRONG", "Confirmation code wrong");

// register.php
define("_MD_PROFILE_REGISTER", "Registration form");

// friendship.php
define("_MD_PROFILE_FRIENDSHIPS_NOCONTENT", "There are no friends yet");

// audio.php
define("_MD_PROFILE_AUDIOS_NOCONTENT", "There is no audio content yet");
define("_MD_PROFILE_AUDIOS_SUBMIT", "Submit new audio file");
define("_MD_PROFILE_AUDIOS_EDIT", "Edit existing audio file");
define("_MD_PROFILE_AUDIOS_CREATED", "Audio file successfully added.");
define("_MD_PROFILE_AUDIOS_MODIFIED", "Audio file successfully modified.");
define("_MD_PROFILE_AUDIOS_PLAYER", "Player");
define("_MD_PROFILE_AUDIOS_AUTHOR", "Auteur");
define("_MD_PROFILE_AUDIOS_TITLE", "Titre");
define("_MD_PROFILE_AUDIOS_LASTUPDATED", "Last updated");
define("_MD_PROFILE_AUDIOS_ACTIONS", "Actions");

// pictures.php
define("_MD_PROFILE_PICTURES_NOCONTENT", "There are no pictures in this album yet");
define("_MD_PROFILE_PICTURES_SUBMIT", "Submit new picture");
define("_MD_PROFILE_PICTURES_EDIT", "Edit existing picture");
define("_MD_PROFILE_PICTURES_CREATED", "Picture successfully added");
define("_MD_PROFILE_PICTURES_MODIFIED", "Picture successfully modified");
define("_MD_PROFILE_PICTURES_AVATAR_EDITED", "Avatar successfully modified");
define("_MD_PROFILE_PICTURES_AVATAR_NOTEDITED", "There was an error while updating your avatar.");
define("_MD_PROFILE_PICTURES_AVATAR_DELETED", "Avatar successfully deleted.");
define("_MD_PROFILE_PICTURES_AVATAR_NOTDELETED", "There was an error while deleting your avatar");
define("_MD_PROFILE_PICTURES_AVATAR_SET", "Set this picture as avatar");

// tribes.php
define("_MD_PROFILE_TRIBES_NOCONTENT", "There are no groups or group memberships yet");
define("_MD_PROFILE_TRIBES_SUBMIT", "Créer un nouveau groupe");
define("_MD_PROFILE_TRIBES_EDIT", "Modifier le groupe");
define("_MD_PROFILE_TRIBES_CREATED", "Group successfully created");
define("_MD_PROFILE_TRIBES_MODIFIED", "Group successfully modified");
define("_MD_PROFILE_TRIBES_OWN", "Own groups");
define("_MD_PROFILE_TRIBES_MEMBERSHIPS", "Adhésions");
define("_MD_PROFILE_TRIBES_MEMBERS", "Membres");
define("_MD_PROFILE_TRIBES_TOPICS", "Topics");
define("_MD_PROFILE_TRIBES_DISCUSSIONS", "Discussions");
define("_MD_PROFILE_TRIBES_CREATION_TIME", "Créé");
define("_MD_PROFILE_TRIBES_VIEWS", "Vues");
define("_MD_PROFILE_TRIBES_OWNER", "Propriétaire");
define("_MD_PROFILE_TRIBES_NOTFOUND", "Group not found.");
define("_MD_PROFILE_TRIBES_JOINFIRST", "You have to be a member of this group to see all others members and disucssions.");
define("_MD_PROFILE_TRIBES_SEARCH", "Recherche");
define("_MD_PROFILE_TRIBES_SEARCH_TITLE", "Search results for: %s");
define("_MD_PROFILE_TRIBES_SEARCH_NORESULTS", "No groups found for: %s");
define("_MD_PROFILE_TRIBETOPIC_SUBMIT", "Submit new topic");
define("_MD_PROFILE_TRIBETOPIC_CREATED", "Topic successfully created.");
define("_MD_PROFILE_TRIBETOPIC_MODIFIED", "Topic successfully modified.");
define("_MD_PROFILE_TRIBETOPIC_TITLE", "Titre");
define("_MD_PROFILE_TRIBETOPIC_AUTHOR", "Auteur");
define("_MD_PROFILE_TRIBETOPIC_REPLIES", "Réponses");
define("_MD_PROFILE_TRIBETOPIC_VIEWS", "Vues");
define("_MD_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Last post");
define("_MD_PROFILE_TRIBETOPIC_NOTFOUND", "Topic not found.");
define("_MD_PROFILE_TRIBETOPIC_EDIT", "Edit Topic");
define("_MD_PROFILE_TRIBETOPIC_SHOW_LAST_POST", "Show last post");
define("_MD_PROFILE_TRIBETOPIC_CLOSE", "Fermer");
define("_MD_PROFILE_TRIBETOPIC_CLOSED", "Fermé");
define("_MD_PROFILE_TRIBETOPIC_REOPEN", "Reopen");
define("_MD_PROFILE_TRIBEPOST_SUBMIT", "Submit new post");
define("_MD_PROFILE_TRIBEPOST_CREATED", "Post successfully created.");
define("_MD_PROFILE_TRIBEPOST_MODIFIED", "Post successfully modified.");
define("_MD_PROFILE_TRIBEPOST_EDIT", "Edit Post");
define("_MD_PROFILE_TRIBEUSER_SUBMIT", "Invite new user");
define("_MD_PROFILE_TRIBEUSER_JOIN", "Join this group");
define("_MD_PROFILE_TRIBEUSER_CREATED", "L'adhésion a été créée avec succès.");
define("_MD_PROFILE_TRIBEUSER_MODIFIED", "L'adhésion a été modifiée avec succès.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "L'utilisateur spécifié est déjà membre de ce groupe.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "L'utilisateur spécifié est déjà propriétaire de ce groupe et ne peut donc être un membre.");

// videos.php
define("_MD_PROFILE_VIDEOS_NOCONTENT", "There are no videos yet");
define("_MD_PROFILE_VIDEOS_SUBMIT", "Submit new video");
define("_MD_PROFILE_VIDEOS_EDIT", "Modifier la vidéo");
define("_MD_PROFILE_VIDEOS_CREATED", "Video successfully added.");
define("_MD_PROFILE_VIDEOS_MODIFIED", "Video successfully modified.");
define("_MD_PROFILE_VIDEOS_VIDEO", "Video");
define("_MD_PROFILE_VIDEOS_DESCRIPTION", "Description");
define("_MD_PROFILE_VIDEOS_ACTIONS", "Actions");

// index.php
define("_MD_PROFILE_VISITORS", "Recent visitors");
define("_MD_PROFILE_USERCONTRIBUTIONS", "Contributions");
define("_MD_PROFILE_SELECTAVATAR", "Upload pictures to your album and select one as your avatar.");
define("_MD_PROFILE_SECURITY_CHECK_FAILED", "");
define("_MD_PROFILE_TRIBES_INVITATIONS", "You've been invited to join the following groups");
define("_MD_PROFILE_TRIBES_APPROVALS", "The following users want to be approved to join your group");
define("_MD_PROFILE_TRIBEUSER_NOTFOUND", "No membership found for this user.");
define("_MD_PROFILE_TRIBEUSER_APPROVE", "Approve this user");
define("_MD_PROFILE_TRIBEUSER_ACCEPT", "Accept invitation to this group");
define("_MD_PROFILE_TRIBEUSER_OP_SUCCESS", "Operation successfully performed");
define("_MD_PROFILE_AUDIOS", "Audio");
define("_MD_PROFILE_FRIENDSHIP_ADD", "Add this user as a friend");
define("_MD_PROFILE_FRIENDSHIP_CREATED", "This user has been added to your friendlist! They will appear once they approve your request.");
define("_MD_PROFILE_FRIENDSHIP_MODIFIED", "The friendship was successfully modified.");
define("_MD_PROFILE_FRIENDSHIP_PENDING", "Pending (only you can see this)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPTED", "Amis");
define("_MD_PROFILE_FRIENDSHIP_REJECTED", "Rejected (only you can see this)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPT", "Accept friendship");
define("_MD_PROFILE_FRIENDSHIP_REJECT", "Reject friendship");
define("_MD_PROFILE_GOTO", "goto: ");

// configs.php
define("_MD_PROFILE_CONFIGS", "Settings");
define("_MD_PROFILE_CONFIGS_SUBMIT", "Create profile settings");
define("_MD_PROFILE_CONFIGS_EDIT", "Edit profile settings");
define("_MD_PROFILE_CONFIGS_CREATED", "The profile settings were created.");
define("_MD_PROFILE_CONFIGS_MODIFIED", "The profile settings were updated.");

// Present in many files (videos pictures etc...)
define("_MD_PROFILE_DELETE", "Supprimer");
define("_MD_PROFILE_PAGETITLE", "%s's profile");
define("_MD_PROFILE_VIDEOS", "Vidéos");
define("_MD_PROFILE_PHOTOS", "Images");
define("_MD_PROFILE_FRIENDS", "Amis");
define("_MD_PROFILE_TRIBES", "Groupes");
define("_MD_PROFILE_UPLOADLIMIT", "Vous avez atteint votre limit d'upload de %s fichier(s)");
define("_MD_PROFILE_SITEDEFAULT", "Site default");
?>