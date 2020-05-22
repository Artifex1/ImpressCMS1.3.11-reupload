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
define("_CO_BANNERS_CLIENT_FIRST_NAME", "Prénom");
define("_CO_BANNERS_CLIENT_FIRST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_LAST_NAME", "Nom");
define("_CO_BANNERS_CLIENT_LAST_NAME_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET", "Rue");
define("_CO_BANNERS_CLIENT_STREET_DSC", " ");
define("_CO_BANNERS_CLIENT_STREET_NUMBER", "Numéro de rue");
define("_CO_BANNERS_CLIENT_STREET_NUMBER_DSC", " ");
define("_CO_BANNERS_CLIENT_ZIP_CODE", "Code postale");
define("_CO_BANNERS_CLIENT_ZIP_CODE_DSC", " ");
define("_CO_BANNERS_CLIENT_CITY", "Ville");
define("_CO_BANNERS_CLIENT_CITY_DSC", " ");
define("_CO_BANNERS_CLIENT_STATE", "Province");
define("_CO_BANNERS_CLIENT_STATE_DSC", " ");
define("_CO_BANNERS_CLIENT_COUNTRY", "Pays");
define("_CO_BANNERS_CLIENT_COUNTRY_DSC", " ");
define("_CO_BANNERS_CLIENT_SINCE", "Client depuis");
define("_CO_BANNERS_CLIENT_SINCE_DSC", "La date ce client à été inséré dans la base de données");
define("_CO_BANNERS_CLIENT_COMPANY", "Société");
define("_CO_BANNERS_CLIENT_COMPANY_DSC", " ");
define("_CO_BANNERS_CLIENT_EMAIL", "addresse e-mail");
define("_CO_BANNERS_CLIENT_EMAIL_DSC", " ");
define("_CO_BANNERS_CLIENT_PHONE", "Numéro de téléphone");
define("_CO_BANNERS_CLIENT_PHONE_DSC", " ");
define("_CO_BANNERS_CLIENT_UID", "Nom d'utilisateur");
define("_CO_BANNERS_CLIENT_UID_DSC", "Si un lien vers l'id utilisateur est présent, l'utilisateur sait voir les statistiques pour les bannières assignés à ce client");
define("_CO_BANNERS_CLIENT_EXTRA", "Information supplémentaire");
define("_CO_BANNERS_CLIENT_EXTRA_DSC", " ");
define("_CO_BANNERS_CLIENT_BANNER_COUNT", "Bannières");
define("_CO_BANNERS_CLIENT_BANNER_COUNT_DSC", "");
define("_CO_BANNERS_CLIENT_ACTIVE", "Actif");
define("_CO_BANNERS_CLIENT_ACTIVE_DSC", "Uniquement les clients actifs ont la possibilité d'uploader des bannières et de voir les statistiques pour leurs bannières");

// banner
define("_CO_BANNERS_BANNER_BANNER_ID", "Id");
define("_CO_BANNERS_BANNER_BANNER_ID_DSC", "");
define("_CO_BANNERS_BANNER_TYPE", "Type");
define("_CO_BANNERS_BANNER_TYPE_DSC", "");
define("_CO_BANNERS_BANNER_FILENAME", "Bannière");
define("_CO_BANNERS_BANNER_FILENAME_DSC", " Filename for the banner. <strong>Please note:</strong> When using the URL field, there will be no dimension check for the positions assigned.<br /><br /><strong>Maximum file size:</strong> ".(@icms::$module->config['maxfilesize'] / 1024)."kb<br /><strong>Supported file types</strong>:<br /><i>Image:</i> jpg, gif, png<br /><i>Flash:</i> swf");
define("_CO_BANNERS_BANNER_SOURCE", "Source HTML");
define("_CO_BANNERS_BANNER_SOURCE_DSC", "");
define("_CO_BANNERS_BANNER_CLIENT_ID", "Client");
define("_CO_BANNERS_BANNER_CLIENT_ID_DSC", "Nom du client qui a commandé la bannière");
define("_CO_BANNERS_BANNER_CONTRACT", "Type de contrat");
define("_CO_BANNERS_BANNER_CONTRACT_DSC", "Quel type de contrat a été convenu? Impressions ou une période fixé");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED", "Impressions achetés");
define("_CO_BANNERS_BANNER_IMPRESSIONS_PURCHASED_DSC", "Combiens d'impressions ont été achetés par le client? (mettre 0 pour illimité)");
define("_CO_BANNERS_BANNER_BEGIN", "Date de début");
define("_CO_BANNERS_BANNER_BEGIN_DSC", "Quand faut-il montrer cette bannière la première fois?");
define("_CO_BANNERS_BANNER_END", "Date de fin");
define("_CO_BANNERS_BANNER_END_DSC", "Quand faut-il montrer cette bannière la dernière fois?");
define("_CO_BANNERS_BANNER_LINK", "Click url");
define("_CO_BANNERS_BANNER_LINK_DSC", " URL has to start with <strong>http://</strong><br /><br /><strong>Example:</strong> http://www.impresscms.org<br />You can use the tag {ICMS_URL} to print <i>".ICMS_URL."</i>");
define("_CO_BANNERS_BANNER_TARGET", "Cible");
define("_CO_BANNERS_BANNER_TARGET_DSC", "Utiliser la même fenêtre ou ouvrir une autre?");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE", "Impressions faits");
define("_CO_BANNERS_BANNER_IMPRESSIONS_MADE_DSC", "Combien d'impressions ont été faits jusqu'à présent.");
define("_CO_BANNERS_BANNER_CLICKS", "Clics");
define("_CO_BANNERS_BANNER_CLICKS_DSC", "Combien de clics ont été fait jusqu'à présent.");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT", "%");
define("_CO_BANNERS_BANNER_CLICKS_PERCENT_DSC", " ");
define("_CO_BANNERS_BANNER_EXTRA", "Information supplémentaire");
define("_CO_BANNERS_BANNER_EXTRA_DSC", " ");
define("_CO_BANNERS_BANNER_POSITIONS", "Position de bannière");
define("_CO_BANNERS_BANNER_POSITIONS_DSC", "Dimensions maximales: 1000x1000. Attention aux dimensions des positions!");
define("_CO_BANNERS_BANNER_ACTIVE", "Actif");
define("_CO_BANNERS_BANNER_ACTIVE_DSC", " A switch to overwrite the impressions, begin and end date.");
define("_CO_BANNERS_BANNER_DESCRIPTION", "Description");
define("_CO_BANNERS_BANNER_DESCRIPTION_DSC", "But de cette bannière");
define("_CO_BANNERS_BANNER_VISIBLEIN", "Visible dans");
define("_CO_BANNERS_BANNER_VISIBLEIN_DSC", "Sélectionnez les pages où la bannière doit être visible.");
define("_CO_BANNERS_BANNER_STATUS", "Statut");
define("_CO_BANNERS_BANNER_STATUS_DSC", "");
define("_CO_BANNERS_BANNER_TYPE_IMAGE", "Image");
define("_CO_BANNERS_BANNER_TYPE_HTML", "HTML");
define("_CO_BANNERS_BANNER_TYPE_FLASH", "Flash");
define("_CO_BANNERS_BANNER_CONTRACT_IMPRESSIONS", "Affichages");
define("_CO_BANNERS_BANNER_CONTRACT_TIME", "Durée fixée");
define("_CO_BANNERS_BANNER_TARGET_SELF", "Même fenêtre");
define("_CO_BANNERS_BANNER_TARGET_BLANK", "Nouvelle fenêtre");
define("_CO_BANNERS_BANNER_DIMENSIONCHECK", "Erreur lors de la vérification des dimensions de l'image pour la position %s. Largeur maximale est %spx (image: %spx), hauteur maximale est %spx (image: %spx).");

// position
define("_CO_BANNERS_POSITION_NAME", "Nom de la position");
define("_CO_BANNERS_POSITION_NAME_DSC", "Nom de la position. Employez minuscules/majuscules, sans espaces ni charactères spéciaux.");
define("_CO_BANNERS_POSITION_TITLE", "Titre de la position");
define("_CO_BANNERS_POSITION_TITLE_DSC", "Ceci sera montré dans la liste de sélection pour chaque bannière.");
define("_CO_BANNERS_POSITION_DESCRIPTION", "Description");
define("_CO_BANNERS_POSITION_DESCRIPTION_DSC", " ");
define("_CO_BANNERS_POSITION_WIDTH", "Largeur");
define("_CO_BANNERS_POSITION_WIDTH_DSC", "en pixels");
define("_CO_BANNERS_POSITION_HEIGHT", "Hauteur");
define("_CO_BANNERS_POSITION_HEIGHT_DSC", "en pixels");
define("_CO_BANNERS_POSITION_DIMENSION", "Dimensions");
define("_CO_BANNERS_POSITION_DIMENSION_DSC", " ");

// positionlink
define("_CO_BANNERS_POSITIONLINK_BANNER_ID", "Id de bannière");
define("_CO_BANNERS_POSITIONLINK_BANNER_ID_DSC", "");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID", "Id de la position");
define("_CO_BANNERS_POSITIONLINK_POSITION_ID_DSC", "");

// visiblein
define("_CO_BANNERS_VISIBLEIN_BANNER_ID", "Id de la bannière");
define("_CO_BANNERS_VISIBLEIN_BANNER_ID_DSC", "");
define("_CO_BANNERS_VISIBLEIN_MODULE", "Module");
define("_CO_BANNERS_VISIBLEIN_MODULE_DSC", "");
define("_CO_BANNERS_VISIBLEIN_PAGE", "Page");
define("_CO_BANNERS_VISIBLEIN_PAGE_DSC", "");