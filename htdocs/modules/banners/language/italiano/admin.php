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
define("_AM_BANNERS_REQUIREMENTS", "Esigenze");
define("_AM_BANNERS_REQUIREMENTS_INFO", "Dopo verificazione, il vostro sistema non soddisfa tutte le esigenze del module 'Banners'. Qui-sotto troverà le esigenze.");
define("_AM_BANNERS_REQUIREMENTS_ICMS_BUILD", "Banners necessita almeno ImpressCMS Build %s (vostro è %s)!");
define("_AM_BANNERS_REQUIREMENTS_SUPPORT", "Nel caso di domande o problemi, visitateci sul nostro forum su <a href='http://community.impresscms.org'>http://community.impresscms.org</a>.");
define("_AM_BANNERS_REQUIREMENTS_SMARTY_PLUGIN", "Questo module necessita un plugin Smarty. Si prega di copiare questo file:<br /><strong>Origine:</strong> %s<br /><strong>Destinazione:</strong> %s.");

// Clients
define("_AM_BANNERS_CLIENTS", "Clienti");
define("_AM_BANNERS_CLIENTS_DSC", "Tutti i clienti");
define("_AM_BANNERS_CLIENT_CREATE", "Nuovo cliente");
define("_AM_BANNERS_CLIENT", "Cliente");
define("_AM_BANNERS_CLIENT_EDIT", "Cambiare cliente");
define("_AM_BANNERS_CLIENT_MODIFIED", "Modificazione del cliente riuscito");
define("_AM_BANNERS_CLIENT_CREATED", "Creazione del cliente riuscito");
define("_AM_BANNERS_CLIENT_NODELETE_BANNER", "Eliminazione cliente impossibile in quanto ci sono ancora bandiere assegnate.");
define("_AM_BANNERS_CLIENT_USERNOTUNIQUE", "L'utente specificato è già assegnato ad un altro cliente. Si prega di selezionare un altro utente.");

// Banners
define("_AM_BANNERS_BANNERS", "Bandiere");
define("_AM_BANNERS_BANNERS_DSC", "Tutte le bandiere");
define("_AM_BANNERS_BANNER_CREATE", "Creazione bandiere");
define("_AM_BANNERS_BANNER", "Bandiere");
define("_AM_BANNERS_BANNER_EDIT", "Modificazione bandiere");
define("_AM_BANNERS_BANNER_MODIFIED", "Modificazione bandiera riuscita");
define("_AM_BANNERS_BANNER_CREATED", "Creazione bandiera riuscita");
define("_AM_BANNERS_BANNER_NOPOSITIONS", "Si prega di creare una posizione prima");
define("_AM_BANNERS_BANNER_NOCLIENTS", "Si prega di creare un cliente prima");

// Position
define("_AM_BANNERS_POSITIONS", "Posizioni");
define("_AM_BANNERS_POSITIONS_DSC", "Tutte le posizioni");
define("_AM_BANNERS_POSITION_CREATE", "Creazione posizione");
define("_AM_BANNERS_POSITION", "Posizione");
define("_AM_BANNERS_POSITION_EDIT", "Modificazione posizione");
define("_AM_BANNERS_POSITION_MODIFIED", "Modificazione posizione riuscita");
define("_AM_BANNERS_POSITION_CREATED", "Creazione posizione riuscita");
define("_AM_BANNERS_POSITION_INFO", "Per l'inclusione della bandiere nel proprio thema, mettere il codice seguente dove si desidera che la bandiera appaia. Assicurarsi di modificare il nome della posizione di esempio, nel nome della propria posizione.
<br /><br />Default (cache disattivata):↩⏎
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;\">↩⏎
<{banners position=<strong>nome_della_posizione</strong>}>↩⏎
</div>↩⏎
Nel caso in cui non si desidera avere la stessa bandiera più volte sullo schermo, mettere la valore della cache su true (per ogni posizione bandiera):↩⏎
<div style=\"border: 1px dashed #AABBCC; padding:10px; width:30%;margin:10px;margin-bottom:20px;\">↩⏎
<{banners position=<strong>nome_della_posizione</strong> cache=true}>↩⏎
</div>");
define("_AM_BANNERS_POSITION_NODELETE_BANNER", "Eliminazione della posizione impossibile in quanto ci sono ancora bandiere assegnate.");