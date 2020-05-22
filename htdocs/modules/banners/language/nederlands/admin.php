<?php
/**
* English language constants used in admin section of the module
*
* @copyright	The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Phoenyx <phoenyx@impresscms.de>
* @package		banners
* @version		$Id: admin.php 22633 2011-09-10 11:55:02Z phoenyx $
*/
defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// Requirements
define("_AM_BANNERS_REQUIREMENTS", "Vereisten");
define("_AM_BANNERS_REQUIREMENTS_INFO", "Controle van uw systeem wijst uit dat het niet voldoet aan alle vereisten om de Banners module te laten werken. Hieronder staan de vereisten.");
define("_AM_BANNERS_REQUIREMENTS_ICMS_BUILD", "Banners vereist tenminste ImpressCMS Build %s (uw versie is %s)!");
define("_AM_BANNERS_REQUIREMENTS_SUPPORT", "In geval van vragen of opmerkingen, bezoek onze forums op <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");
define("_AM_BANNERS_REQUIREMENTS_SMARTY_PLUGIN", "Deze module vereist een Smarty plugin. Kopieer het volgende bestand:<br /><strong>Bron:</strong> %s<br /><strong>Doel:</strong> %s.");

// Clients
define("_AM_BANNERS_CLIENTS", "Klanten");
define("_AM_BANNERS_CLIENTS_DSC", "Alle klanten");
define("_AM_BANNERS_CLIENT_CREATE", "Toevoegen Klant");
define("_AM_BANNERS_CLIENT", "Klant");
define("_AM_BANNERS_CLIENT_EDIT", "Bewerken Klant");
define("_AM_BANNERS_CLIENT_MODIFIED", "Bewerken klant geslaagd");
define("_AM_BANNERS_CLIENT_CREATED", "Aanmaken klant geslaagd");
define("_AM_BANNERS_CLIENT_NODELETE_BANNER", "Verwijderen klant onmogelijk doordat er nog banners aan hem toegewezen zijn");
define("_AM_BANNERS_CLIENT_USERNOTUNIQUE", "De gekozen gebruiker is reeds toegewezen aan een andere klant. Selecteer een andere gebruiker.");

// Banners
define("_AM_BANNERS_BANNERS", "Banners");
define("_AM_BANNERS_BANNERS_DSC", "Alle banners");
define("_AM_BANNERS_BANNER_CREATE", "Aanmaken banner");
define("_AM_BANNERS_BANNER", "Banner");
define("_AM_BANNERS_BANNER_EDIT", "Bewerken banner");
define("_AM_BANNERS_BANNER_MODIFIED", "Bewerken banner geslaagd.");
define("_AM_BANNERS_BANNER_CREATED", "Aanmaken banner geslaagd.");
define("_AM_BANNERS_BANNER_NOPOSITIONS", "Maak eerst een positie aan.");
define("_AM_BANNERS_BANNER_NOCLIENTS", "Maak eerst een klant aan.");

// Position
define("_AM_BANNERS_POSITIONS", "Posities");
define("_AM_BANNERS_POSITIONS_DSC", "Alle posities");
define("_AM_BANNERS_POSITION_CREATE", "Aanmaken positie");
define("_AM_BANNERS_POSITION", "Positie");
define("_AM_BANNERS_POSITION_EDIT", "Bewerken positie");
define("_AM_BANNERS_POSITION_MODIFIED", "Bewerken positie geslaagd.");
define("_AM_BANNERS_POSITION_CREATED", "Aanmaken positie geslaagd.");
define("_AM_BANNERS_POSITION_INFO", "Plaats de onderstaande code op de juiste plaats in uw theme om een nieuwe banner positie in uw theme te gebruiken, Bewerk de naam van de positie in het voorbeeld naar de naam van de positie op uw site.<br /><br />Standaard (cache gedesactiveerd):
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;\">
  <{banners position=<strong>naam_van_positie</strong>}>
</div>
Wanneer u dezelfde banner niet meerdere malen op het scherm wil hebben, zet de waarde van cache op true (voor elke banner positie):
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;margin-bottom:20px;\">
  <{banners position=<strong>naam_van_positie</strong> cache=true}>
</div>");
define("_AM_BANNERS_POSITION_NODELETE_BANNER", "Deze positie kan niet worden verwijderd doordat er nog steeds banners aan zijn toegewezen.");