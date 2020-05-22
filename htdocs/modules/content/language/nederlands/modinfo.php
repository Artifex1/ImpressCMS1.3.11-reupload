<?php
/**
 * English language constants related to module information
 *
 * @copyright	The ImpressCMS Project
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Rodrigo P Lima aka TheRplima <therplima@impresscms.org>
 * @package		content
 * @version		$Id: modinfo.php 20067 2010-08-29 16:28:45Z phoenyx $
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// Module Info
define("_MI_CONTENT_MD_NAME", "Inhoud");
define("_MI_CONTENT_MD_DESC", "ImpressCMS Inhoud beheer module");
define("_MI_CONTENT_CONTENTS", "Inhoud");

//Menu
define("_MI_CONTENT_CONTENT_ADD", "Inzenden");

// Configs
define("_MI_CONTENT_CONTPAGE", "Standaard pagina");
define("_MI_CONTENT_CONTPAGEDSC", "Selecteer de standaard pagina om weer te geven aan de gebruiker in Inhoud beheer. Laat leeg om Inhoud beheer standaard de meest recente publicatie weer te geven.");
define("_MI_CONTENT_AUTHORGR", "Toegestane groepen die inhoud mogen toevoegen");
define("_MI_CONTENT_AUTHORGRDSC", "Selecteer de groepen die toegestaan zijn nieuwe inhoud aan te maken. Merk op dat een lid van deze groep in staat is om inhoud direct aan de website toe te voegen. De module bevat op dit moment geen moderatie functie.");
define("_MI_CONTENT_LIMIT", "Inhouds limiet");
define("_MI_CONTENT_LIMITDSC", "Aantal inhouden om weer te geven aan de gebruikerszijde.");
define("_MI_CONTENT_SHOWBREADCRUMB", "Toon Breadcrumb");
define("_MI_CONTENT_SHOWBREADCRUMBDSC", "Stel in op JA om een breadcrumb (navigatie menu) te tonen aan de gebruikerszijde.");
define("_MI_CONTENT_SHOWRELATEDS", "Gerelateerde pagina's weergeven");
define("_MI_CONTENT_SHOWRELATEDSDSC", "Stel in op JA om de gerelateerde pagina's weer te geven na de pagina inhoud.");
define("_MI_CONTENT_SHOWINFO", "Auteur en publicatie informatie weergeven");
define("_MI_CONTENT_SHOWINFODSC", "Stel in op JA om informatie over de auteur en de pubicatie weer te geven in de pagina informatie.");

// Blocks
define("_MI_CONTENT_CONTENTDISPLAY", "Inhoud");
define("_MI_CONTENT_CONTENTDISPLAYDSC", "Toon de gewenste inhoudpagina met enkele gedefineerde instellingen.");
define("_MI_CONTENT_CONTENTMENU", "Inhoud menu");
define("_MI_CONTENT_CONTENTMENUDSC", "Toon een blok met een menu van de inhoud pagina's.");

// Notifications
define("_MI_CONTENT_GLOBAL_NOTIFY", "Alle inhoud pagina's");
define("_MI_CONTENT_GLOBAL_NOTIFY_DSC", "Kennisgevingen gerelateerd aan alle inhouden in de module");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY", "Nieuwe inhoud gepubliceerd");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_CAP", "Bericht mij wanneer er een nieuwe inhoud is gepubliceerd");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_DSC", "Ontvang kennisgeving wanneer een nieuwe inhoud is gepubliceerd.");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : Nieuwe inhoud gepubliceerd");