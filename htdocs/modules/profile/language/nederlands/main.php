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

define("_MD_PROFILE_MAKE_CONFIG_FIRST", "Dit is de eerste keer dat u uw profiel opent. Vul eerst uw profielinstellingen aan.");
define("_MD_PROFILE_USER_NOT_FOUND", "Gebruiker is niet gevonden.");
define("_MD_PROFILE_ERRORDURINGSAVE", "Fout tijdens opslaan");
define("_MD_PROFILE_EMAIL", "E-mail");
define("_MD_PROFILE_OPENID", "OpenID");
define("_MD_PROFILE_OPENID_VIEW", "Toestaan dat gebruikers mijn OpenID kunnen zien");
define("_MD_PROFILE_AVATAR", "Pasfoto");
define("_MD_PROFILE_VERIFYPASS", "Verifieer wachtwoord");
define("_MD_PROFILE_SUBMIT", "Verzenden");
define("_MD_PROFILE_FINISH", "Voltooien");
define("_MD_PROFILE_REGISTERNG", "Registreren nieuwe gerbuiker is mislukt.");
define("_MD_PROFILE_DISCLAIMER", "Disclaimer");
define("_MD_PROFILE_IAGREE", "Ik ga akkoord met de bovenstaande verklaring");
define("_MD_PROFILE_UNEEDAGREE", "Om u te kunnen registreren dient u akkoord te gaan met de disclaimer!");
define("_MD_PROFILE_NOREGISTER", "Sorry, er kunnen momenteel geen nieuwe gebruikersregistraties plaatsvinden.");
define("_MD_PROFILE_NOSTEPSAVAILABLE", "Er zijn geen registratiestappen gedefineerd");
define("_MD_PROFILE_REGISTER_FINISH", "Hartelijk dank voor uw registratie");
define("_MD_PROFILE_USERKEYFOR", "Gebruikers activeringscode voor %s");
define("_MD_PROFILE_ACTLOGIN", "Het gebruikersaccount is geactiveerd. U kint nu inloggen met het geregistreerde wachtwoord.");
define("_MD_PROFILE_ACTKEYNOT", "Activeringscode is niet correct!");
define("_MD_PROFILE_ACONTACT", "Het geselecteerde gebruikersaccount is al geactiveerd!");
define("_MD_PROFILE_ACTFAILED", "Activering mislukt!");
define("_MD_PROFILE_YOURREGISTERED", "U bent nu geregistreerd. Een Email met een activeringscode is verzonden naar het e-mail adres dat u heeft opgegeven. Volg a.u.b. de instructies in de e-mail om uw account te activeren. ");
define("_MD_PROFILE_YOURREGMAILNG", "U bent nu geregistreerd. Door een interne serverfout hebben we geen email kunnen verzenden om uw account te activeren. Onze excuses voor dit ongemak. Stuur de webmaster een Email om hem/haar hiervan op de hoogte stellen.");
define("_MD_PROFILE_YOURREGISTERED2", "U bent nu geregistreerd. Uw account moet worden geactiveerd door een beheerder. Hiervoor vragen wij uw geduld. Zodra uw account is geactiveerd ontvangt u daarvan een Emailbericht. Houd er rekening mee dat het even kan duren.");
define("_MD_PROFILE_NEWUSERREGAT", "Nieuwe gebruikersregistratie bij %s");
define("_MD_PROFILE_HASJUSTREG", "%s heeft zich net geregistreerd!");
define("_MD_PROFILE_INVALIDMAIL", "FOUT: Ongeldig emailadres");
define("_MD_PROFILE_SORRYNOTFOUND", "Sorry, de juiste gebruikers info is niet gevonden.");
define("_MD_PROFILE_USERALREADYACTIVE", "Gebruiker met e-mail %s is al geactiveerd");
define("_MD_PROFILE_USERDISABLED", "Deze gebruikersaccount is uitgeschakeld en kan niet door de gebruiker worden geactiveerd");
define("_MD_PROFILE_YOURACCOUNT", "Uw gebruikersaccount op %s"); // %s is your site name
define("_MD_PROFILE_ACTVMAILNG", "Verzenden van mededelings e-mail naar %s is mislukt"); // %s is a username
define("_MD_PROFILE_ACTVMAILOK", "Mededelings e-mail naar %s is verzonden."); // %s is a username
define("_MD_PROFILE_PROVIDEPWDS", "Voorzie alle paswoorden");
define("_MD_PROFILE_DEFAULT", "Basis informatie");
define("_MD_PROFILE_SUSPENDED", "Deze gebruiker is geschorst tot %s");

// userinfo.php
define("_MD_PROFILE_SELECTNG", "Geen gebruiker geselecteerd! Ga terug en probeer het opnieuw.");
define("_MD_PROFILE_EDITPROFILE", "Profiel wijzigen");
define("_MD_PROFILE_SHOWALL", "Toon alles");
define("_MD_PROFILE_DELETED", "Deze gebruikersaccount werd verwijderd");

// edituser.php
define("_MD_PROFILE_PROFILE", "Profiel");
define("_MD_PROFILE_PASSWORD", "Wachtwoord");
define("_MD_PROFILE_TYPEPASSTWICE", "(typ een nieuw wachtwoord tweemaal om het te wijzigen)");
define("_MD_PROFILE_SAVECHANGES", "Wijzigingen opslaan");
define("_MD_PROFILE_NOEDITRIGHT", "Sorry, u heeft onvoldoende rechten deze gebruikersinformatie aan te passen.");
define("_MD_PROFILE_PROFUPDATED", "Uw profiel is bijgewerkt!");
define("_MD_PROFILE_UPLOADMYAVATAR", "Upload pasfoto/avatar");
define("_MD_PROFILE_MAXPIXEL", "Max Pixels");
define("_MD_PROFILE_MAXIMGSZ", "Max afbeeldingsgrootte (Bytes)");
define("_MD_PROFILE_SELFILE", "Selecteer bestand");
define("_MD_PROFILE_OLDDELETED", "Uw oude pasfoto/avatar zal worden verwijderd!");
define("_MD_PROFILE_CHOOSEAVT", "Kies een pasfoto/avatar van de beschikbare lijst");
define("_MD_PROFILE_ADMINNO", "Gebruikers in de webmaster groep kunnen niet worden verwijderd");
define("_MD_PROFILE_NOPERMISS", "Sorry, u heeft onvoldoende rechten om deze actie uit te voeren!");
define("_MD_PROFILE_SURETODEL", "Wilt u dit account verwijderen?");
define("_MD_PROFILE_REMOVEINFO", "Dit zal alle informatie van onze database verwijderen.");
define("_MD_PROFILE_BEENDELED", "Uw account is verwijderd.");
define("_MD_PROFILE_ACTIVEUSER", "Gebruikers niveau");
define("_MD_PROFILE_ACTIVE", " Actief ");
define("_MD_PROFILE_INACTIVE", " Inactief ");
define("_MD_PROFILE_DISABLED", " Gedeactiveerd ");

// changepass.php
define("_MD_PROFILE_CHANGEPASSWORD", "Wijzig wachtwoord");
define("_MD_PROFILE_PASSWORDCHANGED", "Wachtwoord succesvol gewijzigd");
define("_MD_PROFILE_OLDPASSWORD", "Huidig wachtwoord");
define("_MD_PROFILE_NEWPASSWORD", "Nieuw wachtwoord");

// search.php
define("_MD_PROFILE_SORTBY", "Gesorteerd op");
define("_MD_PROFILE_ORDER", "Volgorde");
define("_MD_PROFILE_PERPAGE", "Gebruikers per pagina");
define("_MD_PROFILE_LATERTHAN", "%s is later dan");
define("_MD_PROFILE_EARLIERTHAN", "%s is eerder dan");
define("_MD_PROFILE_LARGERTHAN", "%s is groter dan");
define("_MD_PROFILE_SMALLERTHAN", "%s is kleiner dan");
define("_MD_PROFILE_NOUSERSFOUND", "Geen gebruikers gevonden");
define("_MD_PROFILE_RESULTS", "Zoek resultaten");

// changemail.php
define("_MD_PROFILE_CHANGEMAIL", "Wijzig e-mail");
define("_MD_PROFILE_NEWMAIL", "Nieuw e-mailadres");
define("_MD_PROFILE_NEWEMAILREQ", "Nieuw e-mailadres verzoek");
define("_MD_PROFILE_NEWMAILMSGSENT", "Uw verzoek tot een nieuw e-mailadres is ontvangen en gelogt. Bevestig het nieuwe e-mailadres, voordat uw sessie verloopt. Een e-mail met activerings instructies is naar het nieuwe e-mailadres gestuurd. Volg de instructies in de e-mail op om de veranderingen te bevestigen. Sluit de browser niet af, totdat u op de confirmatie link geklikt heeft. Uw e-mailadres VERANDERT NIET TENZIJ u het bevestigt.");
define("_MD_PROFILE_EMAILCHANGED", "Uw e-mailadres is gewijzigd");
define("_MD_PROFILE_CONFCODEMISSING", "Bevestigingscode mist");
define("_MD_PROFILE_CONFCODEWRONG", "Bevestigingscode onjuist");

// register.php
define("_MD_PROFILE_REGISTER", "Registratie formulier");

// friendship.php
define("_MD_PROFILE_FRIENDSHIPS_NOCONTENT", "Er zijn nog geen vrienden");

// audio.php
define("_MD_PROFILE_AUDIOS_NOCONTENT", "Er zijn nog geen audiobestanden");
define("_MD_PROFILE_AUDIOS_SUBMIT", "Nieuw audiobestand toevoegen");
define("_MD_PROFILE_AUDIOS_EDIT", "Bestaand audiobestand aanpassen");
define("_MD_PROFILE_AUDIOS_CREATED", "Audiobestand succesvol toegevoegd");
define("_MD_PROFILE_AUDIOS_MODIFIED", "Audiobestand succesvol aangepast");
define("_MD_PROFILE_AUDIOS_PLAYER", "Speler");
define("_MD_PROFILE_AUDIOS_AUTHOR", "Auteur");
define("_MD_PROFILE_AUDIOS_TITLE", "Titel");
define("_MD_PROFILE_AUDIOS_LASTUPDATED", "Laatste update");
define("_MD_PROFILE_AUDIOS_ACTIONS", "Acties");

// pictures.php
define("_MD_PROFILE_PICTURES_NOCONTENT", "Er zijn nog geen foto's in dit album");
define("_MD_PROFILE_PICTURES_SUBMIT", "Nieuwe afbeelding toevoegen");
define("_MD_PROFILE_PICTURES_EDIT", "Bestaande foto aanpassen");
define("_MD_PROFILE_PICTURES_CREATED", "Foto succesvol toegevoegd");
define("_MD_PROFILE_PICTURES_MODIFIED", "Foto succesvol aangepast");
define("_MD_PROFILE_PICTURES_AVATAR_EDITED", "Pasfoto/Avatar succesvol aangepast");
define("_MD_PROFILE_PICTURES_AVATAR_NOTEDITED", "Fout tijdens bijwerken van uw pasfoto/avatar");
define("_MD_PROFILE_PICTURES_AVATAR_DELETED", "Pasfoto/avatar succesvol verwijderd");
define("_MD_PROFILE_PICTURES_AVATAR_NOTDELETED", "Fout tijdens verwijderen van uw pasfoto/avatar");
define("_MD_PROFILE_PICTURES_AVATAR_SET", "Stel deze foto in als pasfoto/avatar");

// tribes.php
define("_MD_PROFILE_TRIBES_NOCONTENT", "Er zijn nog geen tribes of tribe leden");
define("_MD_PROFILE_TRIBES_SUBMIT", "Nieuwe tribe toevoegen");
define("_MD_PROFILE_TRIBES_EDIT", "Bestaande tribe aanpassen");
define("_MD_PROFILE_TRIBES_CREATED", "Tribe succesvol toegevoegd");
define("_MD_PROFILE_TRIBES_MODIFIED", "Tribe succesvol aangepast");
define("_MD_PROFILE_TRIBES_OWN", "Eigen Tribes");
define("_MD_PROFILE_TRIBES_MEMBERSHIPS", "Lidmaatschappen");
define("_MD_PROFILE_TRIBES_MEMBERS", "Leden");
define("_MD_PROFILE_TRIBES_TOPICS", "Onderwerpen");
define("_MD_PROFILE_TRIBES_DISCUSSIONS", "Discussies");
define("_MD_PROFILE_TRIBES_CREATION_TIME", "Sinds");
define("_MD_PROFILE_TRIBES_VIEWS", "bekeken");
define("_MD_PROFILE_TRIBES_OWNER", "Eigenaar");
define("_MD_PROFILE_TRIBES_NOTFOUND", "Tribe niet gevonden.");
define("_MD_PROFILE_TRIBES_JOINFIRST", "U dient lid te zijn van deze tribe om alle andere leden en discussies te kunnen zien.");
define("_MD_PROFILE_TRIBES_SEARCH", "Zoek een tribe");
define("_MD_PROFILE_TRIBES_SEARCH_TITLE", "Zoekresultaten voor: %s");
define("_MD_PROFILE_TRIBES_SEARCH_NORESULTS", "Geen tribes gevonden voor: %s");
define("_MD_PROFILE_TRIBETOPIC_SUBMIT", "Nieuw onderwerp inzenden");
define("_MD_PROFILE_TRIBETOPIC_CREATED", "Onderwerp succesvol aangemaakt");
define("_MD_PROFILE_TRIBETOPIC_MODIFIED", "Onderwerp succesvol aangepast");
define("_MD_PROFILE_TRIBETOPIC_TITLE", "Titel");
define("_MD_PROFILE_TRIBETOPIC_AUTHOR", "Auteur");
define("_MD_PROFILE_TRIBETOPIC_REPLIES", "Antwoorden");
define("_MD_PROFILE_TRIBETOPIC_VIEWS", "Bekeken");
define("_MD_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Laatste inzending");
define("_MD_PROFILE_TRIBETOPIC_NOTFOUND", "Onderwerp niet gevonden.");
define("_MD_PROFILE_TRIBETOPIC_EDIT", "Onderwerp aanpassen");
define("_MD_PROFILE_TRIBETOPIC_SHOW_LAST_POST", "Toon laatste inzending");
define("_MD_PROFILE_TRIBETOPIC_CLOSE", "Sluiten");
define("_MD_PROFILE_TRIBETOPIC_CLOSED", "Gesloten");
define("_MD_PROFILE_TRIBETOPIC_REOPEN", "heropenen");
define("_MD_PROFILE_TRIBEPOST_SUBMIT", "Nieuwe inzending insturen");
define("_MD_PROFILE_TRIBEPOST_CREATED", "Inzending succesvol aangemaakt");
define("_MD_PROFILE_TRIBEPOST_MODIFIED", "Inzending succesvol aangepast");
define("_MD_PROFILE_TRIBEPOST_EDIT", "Onderwerp wijzigen");
define("_MD_PROFILE_TRIBEUSER_SUBMIT", "Tribe gebruiker toevoegen");
define("_MD_PROFILE_TRIBEUSER_JOIN", "Lidworden van deze tribe");
define("_MD_PROFILE_TRIBEUSER_CREATED", "De tribe gebruiker is succesvol aangemaakt.");
define("_MD_PROFILE_TRIBEUSER_MODIFIED", "De tribe gebruiker is succesvol aangepast.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "De opgegeven gebruiker is al lid van deze tribe.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "De opgegeven gebruiker is al lid van deze tribe en kan daarom geen lid worden.");

// videos.php
define("_MD_PROFILE_VIDEOS_NOCONTENT", "Er zijn nog geen video's");
define("_MD_PROFILE_VIDEOS_SUBMIT", "Nieuwe video toevoegen");
define("_MD_PROFILE_VIDEOS_EDIT", "Bestaande video aanpassen");
define("_MD_PROFILE_VIDEOS_CREATED", "Video succesvol toegevoegd");
define("_MD_PROFILE_VIDEOS_MODIFIED", "Video succesvol aangepast");
define("_MD_PROFILE_VIDEOS_VIDEO", "Video");
define("_MD_PROFILE_VIDEOS_DESCRIPTION", "Video omschrijving");
define("_MD_PROFILE_VIDEOS_ACTIONS", "Acties");

// index.php
define("_MD_PROFILE_VISITORS", "Bezoekers (die uw profiel recent bezocht hebben)");
define("_MD_PROFILE_USERCONTRIBUTIONS", "Gebruikers bijdragen");
define("_MD_PROFILE_SELECTAVATAR", "Upload plaatjes naar uw album en selecteer een als uw pasfoto/avatar.");
define("_MD_PROFILE_SECURITY_CHECK_FAILED", "");
define("_MD_PROFILE_TRIBES_INVITATIONS", "U bent uitgenodigd deel te nemen aan de volgende groepen");
define("_MD_PROFILE_TRIBES_APPROVALS", "De volgende gebruikers willen goedgekeurd worden om deel te nemen aan uw groep");
define("_MD_PROFILE_TRIBEUSER_NOTFOUND", "Tribegebruiker niet gevonden.");
define("_MD_PROFILE_TRIBEUSER_APPROVE", "Deze gebruiker goedkeuren");
define("_MD_PROFILE_TRIBEUSER_ACCEPT", "Accepteer de uitnodiging voor deze groep");
define("_MD_PROFILE_TRIBEUSER_OP_SUCCESS", "Operatie succesvol uitgevoerd");
define("_MD_PROFILE_AUDIOS", "Audio");
define("_MD_PROFILE_FRIENDSHIP_ADD", "Voeg deze gebruiker toe als vriend");
define("_MD_PROFILE_FRIENDSHIP_CREATED", "Deze gebruiker is toegevoegd aan uw vriendenlijst! Ze zullen verschijnen wanneer zij uw verzoek goedkeuren.");
define("_MD_PROFILE_FRIENDSHIP_MODIFIED", "De vriendschap is succesvol aangepast.");
define("_MD_PROFILE_FRIENDSHIP_PENDING", "Vriendschappen in behandeling (Alleen u kunt dit zien)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPTED", "Geaccepteerde vriendschappen");
define("_MD_PROFILE_FRIENDSHIP_REJECTED", "Afgewezen viendschappen (Alleen u kunt dit zien)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPT", "Geaccepteerde vriendschappen");
define("_MD_PROFILE_FRIENDSHIP_REJECT", "Afgewezen vriendschappen");
define("_MD_PROFILE_GOTO", "ga naar: ");

// configs.php
define("_MD_PROFILE_CONFIGS", "Instellingen");
define("_MD_PROFILE_CONFIGS_SUBMIT", "Profiel instellingen wijzigen");
define("_MD_PROFILE_CONFIGS_EDIT", "Profiel instellingen aanpassen");
define("_MD_PROFILE_CONFIGS_CREATED", "De profiel instellingen zijn aangemaakt");
define("_MD_PROFILE_CONFIGS_MODIFIED", "De profiel instellingen zijn bijgewerkt");

// Present in many files (videos pictures etc...)
define("_MD_PROFILE_DELETE", "Verwijderen");
define("_MD_PROFILE_PAGETITLE", "%s's Profiel");
define("_MD_PROFILE_VIDEOS", "Video's");
define("_MD_PROFILE_PHOTOS", "Foto's");
define("_MD_PROFILE_FRIENDS", "Vrienden");
define("_MD_PROFILE_TRIBES", "Tribes");
define("_MD_PROFILE_UPLOADLIMIT", "U heeft het maximum aantal van %s te uploaden bestanden al bereikt.");
define("_MD_PROFILE_SITEDEFAULT", "Site standaard");
?>