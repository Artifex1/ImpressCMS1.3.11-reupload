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
define("_AM_PROFILE_REQUIREMENTS", "Vereisten");
define("_AM_PROFILE_REQUIREMENTS_INFO", "Wij hebben uw systeem geanalyseerd, helaas voldoet het niet aan de gestelde vereisten om te kunnen functioneren. Hieronder staan de systeem vereisten.");
define("_AM_PROFILE_REQUIREMENTS_ICMS_BUILD", "Profile vereist minstens ImpressCMS Build %s (de uwe is %s)!");
define("_AM_PROFILE_REQUIREMENTS_SUPPORT", "In geval van vragen of opmerkingen, bezoek onze forums op  <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");

// Users
define("_AM_PROFILE_DELETEDSUCCESS", "%s succesvol verwijderd");
define("_AM_PROFILE_RUSUREDEL", "weet u zeker dat u %s wilt verwijderen");
define("_AM_PROFILE_EDITUSER", "Gebruiker aanpassen");
define("_AM_PROFILE_REMOVEDUSERS", "Verwijderde/gebande gebruikers");
define("_AM_PROFILE_SELECTUSER", "Selecteer gebruiker");
define("_AM_PROFILE_ADDUSER","Gebruiker toevoegen");
define("_AM_PROFILE_USERCREATED", "Gebruiker aangemaakt");
define("_AM_PROFILE_USERMODIFIED","Uw profiel is bijgewerkt!");
define("_AM_PROFILE_CANNOTDELETESELF", "Uw eigen account verwijderen is niet toegestaan - Gebruik uw profielpagina om uw eiegn account te verwijderen");
define("_AM_PROFILE_CANNOTEDITWEBMASTERS", "U kunt een webmaster account niet wijzigen");
define("_AM_PROFILE_GROUP", "Groep selectie");

// Categories
define("_AM_PROFILE_CATEGORY_CREATE", "Categorie toevoegen");
define("_AM_PROFILE_CATEGORY", "Categorie");
define("_AM_PROFILE_CATEGORY_EDIT", "Categorie aanpassen");
define("_AM_PROFILE_CATEGORY_CREATED", "Categorie succesvol aangemaakt.");
define("_AM_PROFILE_CATEGORY_MODIFIED", "Categorie succesvol aangepast.");
define("_AM_PROFILE_CATEGORY_NOTDELETED_FIELDS", "Deze categorie kan niet worden verwijderd doordat er nog %s velden aan toegewezen zijn.");

// Field
define("_AM_PROFILE_FIELD_CREATE", "Veld toevoegen");
define("_AM_PROFILE_FIELD", "Veld");
define("_AM_PROFILE_FIELD_EDIT", "Veld aanpassen");
define("_AM_PROFILE_FIELD_CREATED", "Het veld is succesvaol aangemaakt.");
define("_AM_PROFILE_FIELD_MODIFIED", "Het veld is succesvol aangepast.");
define("_AM_PROFILE_FIELD_TYPE_CHECKBOX", "Checkbox");
define("_AM_PROFILE_FIELD_TYPE_GROUP", "Selecteer groep");
define("_AM_PROFILE_FIELD_TYPE_GROUPMULTI", "Multi-selcteren groep");
define("_AM_PROFILE_FIELD_TYPE_LANGUAGE", "Taalselectie");
define("_AM_PROFILE_FIELD_TYPE_RADIO", "Radio knoppen");
define("_AM_PROFILE_FIELD_TYPE_SELECT", "Selecteer");
define("_AM_PROFILE_FIELD_TYPE_SELECTMULTI", "Multi-selecteren");
define("_AM_PROFILE_FIELD_TYPE_TEXTAREA", "Tekstgebied");
define("_AM_PROFILE_FIELD_TYPE_TEXTBOX", "Tekst veld");
define("_AM_PROFILE_FIELD_TYPE_DHTMLTEXTAREA", "DHTML Tekstgebied");
define("_AM_PROFILE_FIELD_TYPE_TIMEZONE", "Tijdzone");
define("_AM_PROFILE_FIELD_TYPE_YESNO", "Radio ja/nee");
define("_AM_PROFILE_FIELD_TYPE_DATE", "Datum");
define("_AM_PROFILE_FIELD_TYPE_DATETIME", "Datum en tijd");
define("_AM_PROFILE_FIELD_TYPE_LONGDATE", "Lange datum");
define("_AM_PROFILE_FIELD_TYPE_IMAGE", "Afbeelding");
define("_AM_PROFILE_FIELD_TYPE_RANK", "Status");
define("_AM_PROFILE_FIELD_TYPE_THEME", "Thema");
define("_AM_PROFILE_FIELD_TYPE_URL", "URL");
define("_AM_PROFILE_FIELD_TYPE_LOCATION", "Locatie (Google)");
define("_AM_PROFILE_FIELD_TYPE_EMAIL", "email");
define("_AM_PROFILE_FIELD_TYPE_OPENID", "OpenID");

// Registration Steps
define("_AM_PROFILE_REGSTEP_CREATE", "Registratie stap toevoegen");
define("_AM_PROFILE_REGSTEP", "Registratie stap");
define("_AM_PROFILE_REGSTEP_EDIT", "Registratie stap aanpassen");
define("_AM_PROFILE_REGSTEP_CREATED", "Registratie stap succesvol aangemaakt.");
define("_AM_PROFILE_REGSTEP_MODIFIED", "Registratie stap succesvol aangepast.");

// Visibility
define("_AM_PROFILE_FIELDVISIBLE", "Het veld ");
define("_AM_PROFILE_FIELDVISIBLEFOR", " is zichtbaar voor ");
define("_AM_PROFILE_FIELDVISIBLEON", " Bekijk een profiel van ");
define("_AM_PROFILE_FIELDVISIBLETOALL", "- Iedereen");
define("_AM_PROFILE_FIELDNOTVISIBLE", "is niet zichtbaar");

// Permissions
define("_AM_PROFILE_PROF_EDITABLE", "Veld te wijzigen vanuit het profiel");
define("_AM_PROFILE_PROF_SEARCH", "Te zoeken door deze groepen");

// Audio
define("_AM_PROFILE_AUDIO", "Geluid");
define("_AM_PROFILE_AUDIOS", "Geluiden");
define("_AM_PROFILE_AUDIO_CREATE", "Geluid toevoegen");
define("_AM_PROFILE_AUDIO_EDIT", "Geluid aanpassen");

// Tribes
define("_AM_PROFILE_TRIBE", "Tribe");
define("_AM_PROFILE_TRIBES", "Tribes");
define("_AM_PROFILE_TRIBES_CREATE", "Tribes toevoegen");
define("_AM_PROFILE_TRIBES_EDIT", "Tibes aanpassen");
define("_AM_PROFILE_TRIBES_CREATED", "De tribes is succesvol aangemaakt.");
define("_AM_PROFILE_TRIBES_MODIFIED", "De tribes is succesvol aangepast.");
define("_AM_PROFILE_TRIBES_MERGE", "Samenvoegen");
define("_AM_PROFILE_TRIBES_MERGE_DSC", "Voeg deze groep samen met een andere groep");
define("_AM_PROFILE_TRIBES_MERGING", "Samenvoegen");
define("_AM_PROFILE_TRIBES_MERGEWITH", "Groep om mee samen te voegen...");
define("_AM_PROFILE_TRIBES_MERGE_WARNING", "<span style='color:red;font-weight:bold;'>Opgelet</span>");
define("_AM_PROFILE_TRIBES_MERGE_WARNING_DSC", "De groep \"%s\" zal worden samengevoegd met de geselecteerde groep. Daardoor zal de groep worden verwijderd en alle gebruikers en onderwerpen zullen naar de geselecteerde groep worden overgezet. De titel, beschrijving, afbeelding, eigenaar en instellingen van de geselecteerde groep worden genomen als master.");
define("_AM_PROFILE_TRIBES_MERGE_ERR_ID", "Eén van de geselecteerde groepen bestaat niet");
define("_AM_PROFILE_TRIBES_MERGE_SUCCESS", "Beide groepen werden succesvol samengevoegd");
define("_AM_PROFILE_TRIBES_MERGE_ERR_SAME", "Fout: U kan geen groep samenvoegen met zichzelf. Kies een andere doelgroep.");

// Pictures
define("_AM_PROFILE_PICTURE", "Afbeelding");
define("_AM_PROFILE_PICTURES", "Afbeeldingen");
define("_AM_PROFILE_PICTURES_CREATE", "Afbeelding toevoegen");
define("_AM_PROFILE_PICTURES_EDIT", "Afbeelding aanpassen");
define("_AM_PROFILE_PICTURES_CREATED", "De afbeelding is succesvol aangemaakt.");
define("_AM_PROFILE_PICTURES_MODIFIED", "De afbeelding is succesvol aangepast.");

// Videos
define("_AM_PROFILE_VIDEO", "Video");
define("_AM_PROFILE_VIDEOS", "Video's");
define("_AM_PROFILE_VIDEOS_CREATE", "Video toevoegen");
define("_AM_PROFILE_VIDEOS_EDIT", "Video aanpasssen");

// Tribeuser
define("_AM_PROFILE_TRIBEUSER", "Tribe gebruiker");
define("_AM_PROFILE_TRIBEUSERS", "Tribe gebruikers");
define("_AM_PROFILE_TRIBEUSER_CREATE", "Tribe gebruiker toevoegen");
define("_AM_PROFILE_TRIBEUSER_MODIFY", "Tribe gebruiker aanpassen");
define("_AM_PROFILE_TRIBEUSER_CREATED", "Het lidmaatschap is succesvol aangemaakt.");
define("_AM_PROFILE_TRIBEUSER_MODIFIED", "Het lidmaatschap werd succesvol aangepast.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "De opgegeven gebruiker is al lid van deze tribe.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "De tribe gebruiker is succesvol aangepast.");
define("_AM_PROFILE_TRIBEUSER_NOTTRIBESYET", "Er zijn nog geen tribes.");

//Find user
define("_AM_SPROFILE_FINDUSER_CRIT", "%s bevat:");
define("_AM_SPROFILE_FINDUSER", "Zoek gebruiker");
define("_AM_SPROFILE_UNAME", "Gebruikersnaam");
define("_AM_SPROFILE_UID", "Gebruikers ID");
define("_AM_SPROFILE_EMAIL", "E-mail");
define("_AM_SPROFILE_EXPORT_ALL", "Exporteer alle overeenkomende gebruikers");