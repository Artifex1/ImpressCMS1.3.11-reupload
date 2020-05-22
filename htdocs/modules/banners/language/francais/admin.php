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
define("_AM_BANNERS_REQUIREMENTS", "Exigences");
define("_AM_BANNERS_REQUIREMENTS_INFO", "Analyse de votre système indique que tous les exigences ne sont pas remplis pour Banners de fonctionner. En-dessous veuillez trouver les exigences minimales.");
define("_AM_BANNERS_REQUIREMENTS_ICMS_BUILD", "Banners nécessite au moins ImpressCMS Build %s (le votre: %s)!");
define("_AM_BANNERS_REQUIREMENTS_SUPPORT", "En cas de question ou remarque, veuillez visiter nos forums sur <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");
define("_AM_BANNERS_REQUIREMENTS_SMARTY_PLUGIN", "Ce module a besoin d'un plugin Smarty pour son fonctionnement. Veuillez copier le fichier suivant:<br /><strong>Source :</strong> %s<br /><strong> Destination: </strong> %s.");

// Clients
define("_AM_BANNERS_CLIENTS", "Clients");
define("_AM_BANNERS_CLIENTS_DSC", "Tous les clients");
define("_AM_BANNERS_CLIENT_CREATE", "Rajouter un client");
define("_AM_BANNERS_CLIENT", "Client");
define("_AM_BANNERS_CLIENT_EDIT", "Modifier ce client");
define("_AM_BANNERS_CLIENT_MODIFIED", "Le client a été modifié avec succès");
define("_AM_BANNERS_CLIENT_CREATED", "Creation du client réussi");
define("_AM_BANNERS_CLIENT_NODELETE_BANNER", "Impossible d'effacer ce client à cause de bannières assignés.");
define("_AM_BANNERS_CLIENT_USERNOTUNIQUE", "L'utilisateur spécifié est déjà assigné à un autre client. Veuillez selectionner un autre utilisateur.");

// Banners
define("_AM_BANNERS_BANNERS", "Bannières");
define("_AM_BANNERS_BANNERS_DSC", "Toutes les bannières");
define("_AM_BANNERS_BANNER_CREATE", "Rajouter une bannière");
define("_AM_BANNERS_BANNER", "Bannière");
define("_AM_BANNERS_BANNER_EDIT", "Modifier bannière");
define("_AM_BANNERS_BANNER_MODIFIED", "Modification de la bannière réussi");
define("_AM_BANNERS_BANNER_CREATED", "Creation de la bannière réussi");
define("_AM_BANNERS_BANNER_NOPOSITIONS", "Veuillez d'abord créer une position");
define("_AM_BANNERS_BANNER_NOCLIENTS", "Veuillez d'abord créer un client");

// Position
define("_AM_BANNERS_POSITIONS", "Positions");
define("_AM_BANNERS_POSITIONS_DSC", "Tous positions");
define("_AM_BANNERS_POSITION_CREATE", "Rajouter une position");
define("_AM_BANNERS_POSITION", "Position");
define("_AM_BANNERS_POSITION_EDIT", "Modifier cette position");
define("_AM_BANNERS_POSITION_MODIFIED", "Modification de la position réussi");
define("_AM_BANNERS_POSITION_CREATED", "Création de la position réussi");
define("_AM_BANNERS_POSITION_INFO", "Afin d'include une nouvelle position de bannière dans votre thème, veuillez mettre le code suivant à la plaçe ou vous voulez que la bannière apparaisse. Soyez certain de changer le nom de la position d'exemple dans une position.<br /><br />Defaut (cache désactivé):
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;\">
  <{banners position=<strong>nom_de_la_position</strong>}>
</div>
Au cas ou vous ne voulez pas avoir plusieurs fois la même bannière sur votre écran, mettez cache sur true (pour chaque position de bannière):
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;margin-bottom:20px;\">
  <{banners position=<strong>nopm_de_la_position</strong> cache=true}>
</div>");
define("_AM_BANNERS_POSITION_NODELETE_BANNER", "Impossible d'effacer cette position à cause de bannières assignés.");