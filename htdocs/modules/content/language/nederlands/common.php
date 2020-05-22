<?php
/**
 * English language constants commonly used in the module
 *
 * @copyright	The ImpressCMS Project
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Rodrigo P Lima aka TheRplima <therplima@impresscms.org>
 * @package		content
 * @version		$Id: common.php 20053 2010-08-28 16:30:42Z phoenyx $
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// content
define("_CO_CONTENT_CONTENT_CONTENT_PID", "Hoofdpagina");
define("_CO_CONTENT_CONTENT_CONTENT_PID_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_UID", "Inzender");
define("_CO_CONTENT_CONTENT_CONTENT_UID_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_TITLE", "Titel");
define("_CO_CONTENT_CONTENT_CONTENT_TITLE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_BODY", "Inhoudveld");
define("_CO_CONTENT_CONTENT_CONTENT_BODY_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_CSS", "Standaard CSS");
define("_CO_CONTENT_CONTENT_CONTENT_CSS_DSC", 'If you want to personalize the visual of the page you can define here some css styles for this purpose. <br />Click <a href="javascript:openWithSelfMain(\''.ICMS_URL.'/modules/content/images/content-help.png\', \'content_help\', 1000, 600);">here</a> to see the css classes and Ids avaliable.<br />Recommended only for advanced users.');
define("_CO_CONTENT_CONTENT_CONTENT_TAGS", "Tags");
define("_CO_CONTENT_CONTENT_CONTENT_TAGS_DSC", "Scheid de tags met \"<font color=red>,</font>\"");
define("_CO_CONTENT_CONTENT_CONTENT_VISIBILITY", "Toon link in");
define("_CO_CONTENT_CONTENT_CONTENT_VISIBILITY_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_PUBLISHED_DATE", "Publicatie datum");
define("_CO_CONTENT_CONTENT_CONTENT_PUBLISHED_DATE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_UPDATED_DATE", "Datum aanpassing");
define("_CO_CONTENT_CONTENT_CONTENT_UPDATED_DATE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_WEIGHT", "Gewicht");
define("_CO_CONTENT_CONTENT_CONTENT_WEIGHT_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_STATUS", "Status");
define("_CO_CONTENT_CONTENT_CONTENT_STATUS_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_MAKESYMLINK", "Creëer Symlink?");
define("_CO_CONTENT_CONTENT_CONTENT_MAKESYMLINK_DSC", "Stel in op <b>Ja</b> om automatisch een symlink voor deze inhoudspagina aan te maken.");
define("_CO_CONTENT_CONTENT_READ", "Bekijk rechten");
define("_CO_CONTENT_CONTENT_READ_DSC", "Selecteer welke groepen bekijk rechten hebben voor deze inhoudspagina. Dit betekend dat een lid van deze groep de pagina kan bekijken wanneer deze is geactiveerd in de website.");
define("_CO_CONTENT_CONTENT_CONTENT_SUBS", "Gerelateerde pagina's");
define("_CO_CONTENT_CONTENT_CONTENT_SUBS_DSC", "");
define("_CO_CONTENT_CONTENT_CONTENT_CANCOMMENT", "Kan reageren ?");
define("_CO_CONTENT_CONTENT_CONTENT_CANCOMMENT_DSC", "");
define("_CO_CONTENT_CONTENT_CONTENT_SHOWSUBS", "Toon gerelateerde pagina's");
define("_CO_CONTENT_CONTENT_CONTENT_SHOWSUBS_DSC", "Wanneer de <b>\"Toon gerelateerde pagina's\"</b> in de instellingen van deze module is ingesteld op <b>\"JA\"</b> dan kunt u deze instelling overrulen en het tonen van de gerelateerde pagina van deze pagina in of uitschakelen.");
define("_CO_CONTENT_CONTENT_INFO", "Gepubliceerd door %s op %s. (%u gelezen)");
define("_CO_CONTENT_CONTENT_FROM_USER", "Alle inhoud van %s");
define("_CO_CONTENT_CONTENT_COMMENTS_INFO", "%d reacties");
define("_CO_CONTENT_CONTENT_NO_COMMENT", "Geen reactie");

//Status
define("_CO_CONTENT_CONTENT_STATUS_PUBLISHED", "Gepubliceerd");
define("_CO_CONTENT_CONTENT_STATUS_PENDING", "Onder beoordeling");
define("_CO_CONTENT_CONTENT_STATUS_DRAFT", "Concept");
define("_CO_CONTENT_CONTENT_STATUS_PRIVATE", "Privé");
define("_CO_CONTENT_CONTENT_STATUS_EXPIRED", "Verlopen");

//Visibility
define("_CO_CONTENT_CONTENT_VISIBLE_MENUOLNY", "Alleen in Menu");
define("_CO_CONTENT_CONTENT_VISIBLE_SUBSONLY", "Alleen in gerelateerde pagina's");
define("_CO_CONTENT_CONTENT_VISIBLE_MENUSUBS", "Menu en gerelateerde pagina's");
define("_CO_CONTENT_CONTENT_VISIBLE_DONTSHOW", "Link niet weergeven");