<?php
/**
* English language constants commonly used in the module
*
* @copyright	The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Phoenyx <phoenyx@impresscms.de>
* @package		banners
* @version		$Id: common.php 23919 2012-03-21 03:08:59Z qm-b $
*/
defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// client
define("_CO_BANNERS_CLIENT_FIRST_NAME", "Voornaam");
define("_CO_BANNERS_CLIENT_FIRST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_LAST_NAME", "Naam");
define("_CO_BANNERS_CLIENT_LAST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET", "Straat");
define("_CO_BANNERS_CLIENT_STREET_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET_NUMBER", "Nummer");
define("_CO_BANNERS_CLIENT_STREET_NUMBER_DSC", " ");
define("_CO_BANNERS_CLIENT_ZIP_CODE", "Postcode");
define("_CO_BANNERS_CLIENT_ZIP_CODE_DSC", " ");
define("_CO_BANNERS_CLIENT_CITY", "Stad");
define("_CO_BANNERS_CLIENT_CITY_DSC", " ");
define("_CO_BANNERS_CLIENT_STATE", "Provincie");
define("_CO_BANNERS_CLIENT_STATE_DSC", " ");
define("_CO_BANNERS_CLIENT_COUNTRY", "Land");
define("_CO_BANNERS_CLIENT_COUNTRY_DSC", " ");
define("_CO_BANNERS_CLIENT_SINCE", "Klant sinds");
define("_CO_BANNERS_CLIENT_SINCE_DSC", "De datum waarop deze klant werd toegevoegd aan de databank.");
define("_CO_BANNERS_CLIENT_COMPANY", "Bedrijf");
define("_CO_BANNERS_CLIENT_COMPANY_DSC", " ");
define("_CO_BANNERS_CLIENT_EMAIL", "E-mail adres");
define("_CO_BANNERS_CLIENT_EMAIL_DSC", " ");
define("_CO_BANNERS_CLIENT_PHONE", "Telefoonnummer");
define("_CO_BANNERS_CLIENT_PHONE_DSC", " ");
define("_CO_BANNERS_CLIENT_UID", "Gebruikersnaam");
define("_CO_BANNERS_CLIENT_UID_DSC", "Wanneer een link naar een gebruikers-id bestaat, kan de gebruiker de statistieken voor alle banners van deze klant zien.");
define("_CO_BANNERS_CLIENT_EXTRA", "Extra informatie");
define("_CO_BANNERS_CLIENT_EXTRA_DSC", " ");
define("_CO_BANNERS_CLIENT_BANNER_COUNT", "Advertenties");
define("_CO_BANNERS_CLIENT_BANNER_COUNT_DSC", "");
define("_CO_BANNERS_CLIENT_ACTIVE", "Actief");
define("_CO_BANNERS_CLIENT_ACTIVE_DSC", "Enkel actieve klanten kunnen advertenties uploaden en statistieken voor hun advertenties bekijken");

// banner
define("_CO_BANNERS_BANNER_BANNER_ID", "Identificatie");
define("_CO_BANNERS_BANNER_BANNER_ID_DSC", "");
define("_CO_BANNERS_BANNER_TYPE", "Type");
define("_CO_BANNERS_BANNER_TYPE_DSC", "");
define("_CO_BANNERS_BANNER_FILENAME", "Advertentie");
define("_CO_BANNERS_BANNER_FILENAME_DSC", " Filename for the banner. <strong>Please note:</strong> When using the URL field, there will be no dimension check for the positions assigned.<br /><br /><strong>Maximum file size:</strong> ".(@icms::$module->config['maxfilesize'] / 1024)."kb<br /><strong>Supported file types</strong>:<br /><i>Image:</i> jpg, gif, png<br /><i>Flash:</i> swf");
define("_CO_BANNERS_BANNER_SOURCE", "HTML bron");
define("_CO_BANNERS_BANNER_SOURCE_DSC", "");
define("_CO_BANNERS_BANNER_CLIENT_ID", "Klant");
define("_CO_BANNERS_BANNER_CLIENT_ID_DSC", "Naam van de klant die de advertentie heeft aangevraagd");
define("_CO_BANNERS_BANNER_CONTRACT", "Type overeenkomst");
define("_CO_BANNERS_BANNER_CONTRACT_DSC", "Welk type overeenkomst werd afgesloten? Impressies of een vaste tijdsperiode");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED", "Aangekochte impressies");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED_DSC", "Hoeveel impressies werden aangekocht door de klant? (0 voor ongelimiteerd)");
define("_CO_BANNERS_BANNER_BEGIN", "Startdatum");
define("_CO_BANNERS_BANNER_BEGIN_DSC", "Wanneer moet deze advertentie de eerste keer getoond worden?");
define("_CO_BANNERS_BANNER_END", "Eind datum");
define("_CO_BANNERS_BANNER_END_DSC", "Wanneer moet deze advertentie de laatste keer getoond worden?");
define("_CO_BANNERS_BANNER_LINK", "Klik URL");
define("_CO_BANNERS_BANNER_LINK_DSC", " URL has to start with <strong>http://</strong><br /><br /><strong>Example:</strong> http://www.impresscms.org<br />You can use the tag {ICMS_URL} to print <i>".ICMS_URL."</i>");
define("_CO_BANNERS_BANNER_TARGET", "Doel");
define("_CO_BANNERS_BANNER_TARGET_DSC", "Gebruik hetzelfde venster of open een nieuw?");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE", "Gemaakte impressies");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE_DSC", "Hoeveel impressies zijn er tot zover gemaakt.");
define("_CO_BANNERS_BANNER_CLICKS", "Klikken");
define("_CO_BANNERS_BANNER_CLICKS_DSC", "Hoeveel klikken werden zover geregistreerd.");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT", "%");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT_DSC", " ");
define("_CO_BANNERS_BANNER_EXTRA", "Extra informatie");
define("_CO_BANNERS_BANNER_EXTRA_DSC", " ");
define("_CO_BANNERS_BANNER_POSITIONS", "Banner positie");
define("_CO_BANNERS_BANNER_POSITIONS_DSC", "Maximale afmetingen: 1000x1000. Let op de afmetingen van de advertentie positie!");
define("_CO_BANNERS_BANNER_ACTIVE", "Actief");
define("_CO_BANNERS_BANNER_ACTIVE_DSC", "Een switch om de impressies begin- en einddatum te overschrijven");
define("_CO_BANNERS_BANNER_DESCRIPTION", "Omschrijving
");
define("_CO_BANNERS_BANNER_DESCRIPTION_DSC", "Doel van deze advertentie");
define("_CO_BANNERS_BANNER_VISIBLEIN", "Zichtbaar in");
define("_CO_BANNERS_BANNER_VISIBLEIN_DSC", "Kies de pagina's waarop de advertentie zichtbaar moet zijn");
define("_CO_BANNERS_BANNER_STATUS", "Status");
define("_CO_BANNERS_BANNER_STATUS_DSC", "");
define("_CO_BANNERS_BANNER_TYPE_IMAGE", "Afbeelding");
define("_CO_BANNERS_BANNER_TYPE_HTML", "HTML");
define("_CO_BANNERS_BANNER_TYPE_FLASH", "Flash");
define("_CO_BANNERS_BANNER_CONTRACT_IMPRESSIONS", "Impressies");
define("_CO_BANNERS_BANNER_CONTRACT_TIME", "Vaste tijdsperiode");
define("_CO_BANNERS_BANNER_TARGET_SELF", "Hetzelfde venster");
define("_CO_BANNERS_BANNER_TARGET_BLANK", "Nieuw venster");
define("_CO_BANNERS_BANNER_DIMENSIONCHECK", "Fout tijdens de controle van de afbeeldings-afmetingen voor positie %s . Maximale breedte is %spx (afbeelding: %spx), maximum hoogte is %spx (Afbeelding: %spx).");

// position
define("_CO_BANNERS_POSITION_NAME", "Positienaam");
define("_CO_BANNERS_POSITION_NAME_DSC", "Benaming van de positie. Gebruik een naam met enkel kleine letters, zonder spaties of andere speciale tekens.");
define("_CO_BANNERS_POSITION_TITLE", "Positie titel");
define("_CO_BANNERS_POSITION_TITLE_DSC", "Dit zal getoond worden in de selectielijst voor elke advertentie");
define("_CO_BANNERS_POSITION_DESCRIPTION", "Omschrijving
");
define("_CO_BANNERS_POSITION_DESCRIPTION_DSC", " ");
define("_CO_BANNERS_POSITION_WIDTH", "Breedte");
define("_CO_BANNERS_POSITION_WIDTH_DSC", "in pixels");
define("_CO_BANNERS_POSITION_HEIGHT", "Hoogte");
define("_CO_BANNERS_POSITION_HEIGHT_DSC", "in pixels");
define("_CO_BANNERS_POSITION_DIMENSION", "Afmetingen");
define("_CO_BANNERS_POSITION_DIMENSION_DSC", " ");

// positionlink
define("_CO_BANNERS_POSITIONLINK_BANNER_ID", "Advertentie Id");
define("_CO_BANNERS_POSITIONLINK_BANNER_ID_DSC", "");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID", "Positie Id");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID_DSC", "");

// visiblein
define("_CO_BANNERS_VISIBLEIN_BANNER_ID", "Advertentie Id");
define("_CO_BANNERS_VISIBLEIN_BANNER_ID_DSC", "");
define("_CO_BANNERS_VISIBLEIN_MODULE", "Module");
define("_CO_BANNERS_VISIBLEIN_MODULE_DSC", "");
define("_CO_BANNERS_VISIBLEIN_PAGE", "Pagina");
define("_CO_BANNERS_VISIBLEIN_PAGE_DSC", "");