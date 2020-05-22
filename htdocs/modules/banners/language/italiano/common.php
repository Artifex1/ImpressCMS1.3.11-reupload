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
define("_CO_BANNERS_CLIENT_FIRST_NAME", "Cognome");
define("_CO_BANNERS_CLIENT_FIRST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_LAST_NAME", "Nome");
define("_CO_BANNERS_CLIENT_LAST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET", "Via");
define("_CO_BANNERS_CLIENT_STREET_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET_NUMBER", "Numero");
define("_CO_BANNERS_CLIENT_STREET_NUMBER_DSC", " ");
define("_CO_BANNERS_CLIENT_ZIP_CODE", "Codice postale");
define("_CO_BANNERS_CLIENT_ZIP_CODE_DSC", " ");
define("_CO_BANNERS_CLIENT_CITY", "Città");
define("_CO_BANNERS_CLIENT_CITY_DSC", " ");
define("_CO_BANNERS_CLIENT_STATE", "Provincia");
define("_CO_BANNERS_CLIENT_STATE_DSC", " ");
define("_CO_BANNERS_CLIENT_COUNTRY", "Paese");
define("_CO_BANNERS_CLIENT_COUNTRY_DSC", " ");
define("_CO_BANNERS_CLIENT_SINCE", "Cliente da");
define("_CO_BANNERS_CLIENT_SINCE_DSC", "La data in cui il cliente e stato entrato nella db");
define("_CO_BANNERS_CLIENT_COMPANY", "Società");
define("_CO_BANNERS_CLIENT_COMPANY_DSC", " ");
define("_CO_BANNERS_CLIENT_EMAIL", "Indirizzo e-mail");
define("_CO_BANNERS_CLIENT_EMAIL_DSC", " ");
define("_CO_BANNERS_CLIENT_PHONE", "Numero di telefono");
define("_CO_BANNERS_CLIENT_PHONE_DSC", " ");
define("_CO_BANNERS_CLIENT_UID", "Nome utente");
define("_CO_BANNERS_CLIENT_UID_DSC", " If a link to a user id is present, the user can see statistics for all banners assigned to this client.");
define("_CO_BANNERS_CLIENT_EXTRA", "Informazione supplementare");
define("_CO_BANNERS_CLIENT_EXTRA_DSC", " ");
define("_CO_BANNERS_CLIENT_BANNER_COUNT", "Bandiere");
define("_CO_BANNERS_CLIENT_BANNER_COUNT_DSC", "");
define("_CO_BANNERS_CLIENT_ACTIVE", "Attiva");
define("_CO_BANNERS_CLIENT_ACTIVE_DSC", "Solo clienti attivi possono fare l'upload di bandiere e vedere statistiche sulle loro bandiere");

// banner
define("_CO_BANNERS_BANNER_BANNER_ID", "id");
define("_CO_BANNERS_BANNER_BANNER_ID_DSC", "");
define("_CO_BANNERS_BANNER_TYPE", "Tipo");
define("_CO_BANNERS_BANNER_TYPE_DSC", "");
define("_CO_BANNERS_BANNER_FILENAME", "Bandiere");
define("_CO_BANNERS_BANNER_FILENAME_DSC", " Filename for the banner. <strong>Please note:</strong> When using the URL field, there will be no dimension check for the positions assigned.<br /><br /><strong>Maximum file size:</strong> ".(@icms::$module->config['maxfilesize'] / 1024)."kb<br /><strong>Supported file types</strong>:<br /><i>Image:</i> jpg, gif, png<br /><i>Flash:</i> swf");
define("_CO_BANNERS_BANNER_SOURCE", "Sorgente HTML");
define("_CO_BANNERS_BANNER_SOURCE_DSC", "");
define("_CO_BANNERS_BANNER_CLIENT_ID", "Cliente");
define("_CO_BANNERS_BANNER_CLIENT_ID_DSC", "Nome del cliente che ha ordinato una bandiera.");
define("_CO_BANNERS_BANNER_CONTRACT", "Tipo di contratto");
define("_CO_BANNERS_BANNER_CONTRACT_DSC", "Quale tipo di contratto era concluso? Impressioni o un periodo fisso?");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED", "Impressioni acquisti");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED_DSC", "Quanti impressioni sono stati acquisti dal cliente? (0 : senza limite)");
define("_CO_BANNERS_BANNER_BEGIN", "data d'inizio");
define("_CO_BANNERS_BANNER_BEGIN_DSC", "Quando la bandiera dovrebbe iniziare ad essere mostrato?");
define("_CO_BANNERS_BANNER_END", "Data fine");
define("_CO_BANNERS_BANNER_END_DSC", "Quando la bandiera dovrebbe smettere di essere mostrato?");
define("_CO_BANNERS_BANNER_LINK", "click url");
define("_CO_BANNERS_BANNER_LINK_DSC", " URL has to start with <strong>http://</strong><br /><br /><strong>Example:</strong> http://www.impresscms.org<br />You can use the tag {ICMS_URL} to print <i>".ICMS_URL."</i>");
define("_CO_BANNERS_BANNER_TARGET", "Destinazione");
define("_CO_BANNERS_BANNER_TARGET_DSC", " Use same window or open a new one?");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE", "Impressions made");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE_DSC", " How many impressions have been made so far.");
define("_CO_BANNERS_BANNER_CLICKS", "Clicks");
define("_CO_BANNERS_BANNER_CLICKS_DSC", " How many clicks have been made so far.");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT", "%");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT_DSC", " ");
define("_CO_BANNERS_BANNER_EXTRA", "Informazione supplementare");
define("_CO_BANNERS_BANNER_EXTRA_DSC", " ");
define("_CO_BANNERS_BANNER_POSITIONS", "Banner positions");
define("_CO_BANNERS_BANNER_POSITIONS_DSC", "Maximum Dimensions: 1000x1000. Beware of the position dimensions!");
define("_CO_BANNERS_BANNER_ACTIVE", "Attiva");
define("_CO_BANNERS_BANNER_ACTIVE_DSC", " A switch to overwrite the impressions, begin and end date.");
define("_CO_BANNERS_BANNER_DESCRIPTION", "Descrizione video");
define("_CO_BANNERS_BANNER_DESCRIPTION_DSC", " Purpose of this banner");
define("_CO_BANNERS_BANNER_VISIBLEIN", "Visible in");
define("_CO_BANNERS_BANNER_VISIBLEIN_DSC", " Select the pages where the banner should be visible in.");
define("_CO_BANNERS_BANNER_STATUS", "Cosa hai in mente?");
define("_CO_BANNERS_BANNER_STATUS_DSC", "");
define("_CO_BANNERS_BANNER_TYPE_IMAGE", "Immagine");
define("_CO_BANNERS_BANNER_TYPE_HTML", "HTML");
define("_CO_BANNERS_BANNER_TYPE_FLASH", "Flash");
define("_CO_BANNERS_BANNER_CONTRACT_IMPRESSIONS", "Impressions");
define("_CO_BANNERS_BANNER_CONTRACT_TIME", "Fixed period of time");
define("_CO_BANNERS_BANNER_TARGET_SELF", "Same window");
define("_CO_BANNERS_BANNER_TARGET_BLANK", "New window");
define("_CO_BANNERS_BANNER_DIMENSIONCHECK", "Error while verifying image dimensions for position %s. Maximum width is %spx (image: %spx), maximum height is %spx (image: %spx).");

// position
define("_CO_BANNERS_POSITION_NAME", "Position name");
define("_CO_BANNERS_POSITION_NAME_DSC", "Name of position. Use a name with small_caption letters, without spaces and special characters.");
define("_CO_BANNERS_POSITION_TITLE", "Position title");
define("_CO_BANNERS_POSITION_TITLE_DSC", " This will be shown in the selection list for each banner.");
define("_CO_BANNERS_POSITION_DESCRIPTION", "Descrizione video");
define("_CO_BANNERS_POSITION_DESCRIPTION_DSC", " ");
define("_CO_BANNERS_POSITION_WIDTH", "Width");
define("_CO_BANNERS_POSITION_WIDTH_DSC", "in pixels");
define("_CO_BANNERS_POSITION_HEIGHT", "Height");
define("_CO_BANNERS_POSITION_HEIGHT_DSC", "in pixels");
define("_CO_BANNERS_POSITION_DIMENSION", "Dimension");
define("_CO_BANNERS_POSITION_DIMENSION_DSC", " ");

// positionlink
define("_CO_BANNERS_POSITIONLINK_BANNER_ID", "Banner Id");
define("_CO_BANNERS_POSITIONLINK_BANNER_ID_DSC", "");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID", "Position Id");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID_DSC", "");

// visiblein
define("_CO_BANNERS_VISIBLEIN_BANNER_ID", "Banner Id");
define("_CO_BANNERS_VISIBLEIN_BANNER_ID_DSC", "");
define("_CO_BANNERS_VISIBLEIN_MODULE", "Module");
define("_CO_BANNERS_VISIBLEIN_MODULE_DSC", "");
define("_CO_BANNERS_VISIBLEIN_PAGE", "Page");
define("_CO_BANNERS_VISIBLEIN_PAGE_DSC", "");