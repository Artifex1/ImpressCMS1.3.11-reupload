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
define("_MI_CONTENT_MD_NAME", "Contenuti");
define("_MI_CONTENT_MD_DESC", "Modulo ImpressCMS per la Gestione di pagine statiche");
define("_MI_CONTENT_CONTENTS", "Contenuti");

//Menu
define("_MI_CONTENT_CONTENT_ADD", "Invia");

// Configs
define("_MI_CONTENT_CONTPAGE", "Pagina di default");
define("_MI_CONTENT_CONTPAGEDSC", "Seleziona la pagina di default da mostrare all'utente quando accede al modulo. Lascia in bianco per mostrare come default la pagina pi&ugrave; recente.");
define("_MI_CONTENT_AUTHORGR", "Gruppi ai quali è permesso inviare contenuti");
define("_MI_CONTENT_AUTHORGRDSC", "Seleziona i gruppi ai quali è consentito creare nuovi contenuti. Nota bene che un utente che fa parte di uno di questi gruppi sar&agrave; in grado di pubblicare direttamente nel sito. Il modulo attualmente non ha funzioni di moderazione.");
define("_MI_CONTENT_LIMIT", "Limite dei contenuti");
define("_MI_CONTENT_LIMITDSC", "Numero dei contenuti da mostrare sul lato utente.");
define("_MI_CONTENT_SHOWBREADCRUMB", "Mostra Breadcrumb");
define("_MI_CONTENT_SHOWBREADCRUMBDSC", "Seleziona S&Igrave; per mostrare un breadcrumb (menu di navigazione) sul lato utente.");
define("_MI_CONTENT_SHOWRELATEDS", "Mostra pagine correlate");
define("_MI_CONTENT_SHOWRELATEDSDSC", "Seleziona S&Igrave; per mostrare le pagine correlate dopo il contenuto della pagina.");
define("_MI_CONTENT_SHOWINFO", "Mostra autore e informazioni di pubblicazione");
define("_MI_CONTENT_SHOWINFODSC", "Seleziona S&Igrave; per mostrare nella pagina l'informazioni sull'autore e la pubblicazione della pagina.");

// Blocks
define("_MI_CONTENT_CONTENTDISPLAY", "Contenuti");
define("_MI_CONTENT_CONTENTDISPLAYDSC", "Mostra la pagina statica desiderata con alcune configurazioni definite.");
define("_MI_CONTENT_CONTENTMENU", "Menu Contenuti");
define("_MI_CONTENT_CONTENTMENUDSC", "Mostra un blocco con un menu di pagine statiche.");

// Notifications
define("_MI_CONTENT_GLOBAL_NOTIFY", "Tutti i contenuti");
define("_MI_CONTENT_GLOBAL_NOTIFY_DSC", "Notifiche correlate a tutti i contenuti del modulo");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY", "Nuova pagina pubblicata");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_CAP", "Notificami quando viene pubblicata una nuova pagina");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_DSC", "Ricevi una notifica quando una nuova pagina sar&agrave; pubblicata.");
define("_MI_CONTENT_GLOBAL_CONTENT_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : Nuova pagina pubblicata");