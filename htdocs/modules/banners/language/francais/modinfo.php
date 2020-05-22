<?php
/**
* English language constants related to module information
*
* @copyright	The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Phoenyx <phoenyx@impresscms.de>
* @package		banners
* @version		$Id: modinfo.php 20209 2010-09-26 13:41:19Z phoenyx $
*/
defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/** Module Info */
define("_MI_BANNERS_MD_NAME", "Bannières");
define("_MI_BANNERS_MD_DESC", "ImpressCMS système de gestion des bannières");
define("_MI_BANNERS_CLIENTS", "Clients");
define("_MI_BANNERS_BANNERS", "Bannières");
define("_MI_BANNERS_POSITIONS", "Positions");

/** Module Configuration */
define("_MI_BANNERS_EMAIL_NEW_BANNER", "Notifier le webmaster sur nouvelles bannières");
define("_MI_BANNERS_EMAIL_NEW_BANNER_SUBJECT", "Sujet de l'e-mail de notification de nouvelle bannière");
define("_MI_BANNERS_EMAIL_NEW_BANNER_SUBJECT_DEFAULT", "Nouvelle bannière soumise");
define("_MI_BANNERS_EMAIL_NEW_CLIENT", "Notifier webmaster sur des nouveaux clients");
define("_MI_BANNERS_EMAIL_NEW_CLIENT_SUBJECT", "Sujet e-mail pour les nouveaux clients");
define("_MI_BANNERS_EMAIL_NEW_CLIENT_SUBJECT_DEFAULT", "Nouveau client");
define("_MI_BANNERS_MAXFILESIZE", "Taille maximale du fichier pour l'upload d'une bannière");
define("_MI_BANNERS_MAXFILESIZE_DSC", "Taille en octets");
define("_MI_BANNERS_CLIENT_BANNER_TYPES", "Types de bannières valides pour clients");
define("_MI_BANNERS_CLIENT_BANNER_TYPES_DSC", "Définir le type de bannière que les clients peuvent créer. HTML pourrait être enlevé de la liste pour des raisons de sécurité.");