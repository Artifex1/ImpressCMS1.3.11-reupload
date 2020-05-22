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
define("_CO_CONTENT_CONTENT_CONTENT_PID", "Pagina genitore");
define("_CO_CONTENT_CONTENT_CONTENT_PID_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_UID", "Autore");
define("_CO_CONTENT_CONTENT_CONTENT_UID_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_TITLE", "Titolo");
define("_CO_CONTENT_CONTENT_CONTENT_TITLE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_BODY", "Testo della pagina");
define("_CO_CONTENT_CONTENT_CONTENT_BODY_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_CSS", "CSS personalizzato");
define("_CO_CONTENT_CONTENT_CONTENT_CSS_DSC", 'If you want to personalize the visual of the page you can define here some css styles for this purpose. <br />Click <a href="javascript:openWithSelfMain(\''.ICMS_URL.'/modules/content/images/content-help.png\', \'content_help\', 1000, 600);">here</a> to see the css classes and Ids avaliable.<br />Recommended only for advanced users.');
define("_CO_CONTENT_CONTENT_CONTENT_TAGS", "Tags");
define("_CO_CONTENT_CONTENT_CONTENT_TAGS_DSC", "Separa il tags con \"<font color=red>,</font>\"");
define("_CO_CONTENT_CONTENT_CONTENT_VISIBILITY", "Mostra link in");
define("_CO_CONTENT_CONTENT_CONTENT_VISIBILITY_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_PUBLISHED_DATE", "Data di pubblicazione");
define("_CO_CONTENT_CONTENT_CONTENT_PUBLISHED_DATE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_UPDATED_DATE", "Date aggiornata");
define("_CO_CONTENT_CONTENT_CONTENT_UPDATED_DATE_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_WEIGHT", "Peso");
define("_CO_CONTENT_CONTENT_CONTENT_WEIGHT_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_STATUS", "Stato");
define("_CO_CONTENT_CONTENT_CONTENT_STATUS_DSC", " ");
define("_CO_CONTENT_CONTENT_CONTENT_MAKESYMLINK", "Crea Symlink?");
define("_CO_CONTENT_CONTENT_CONTENT_MAKESYMLINK_DSC", "Imposta a <b>S&Igrave;</b> per creare automaticamente un symlink per questa pagina statica.");
define("_CO_CONTENT_CONTENT_READ", "Permessi di visualizzazione");
define("_CO_CONTENT_CONTENT_READ_DSC", "Seleziona quali gruppi avranno i permessi di visualizzare questa pagina statica. Questo significa che un utente appartenente a uno di questi gruppi sar&agrave; in grado di visualizzare la pagina statica quando sar&agrave; attivata nel sito.");
define("_CO_CONTENT_CONTENT_CONTENT_SUBS", "Pagine correlate");
define("_CO_CONTENT_CONTENT_CONTENT_SUBS_DSC", "");
define("_CO_CONTENT_CONTENT_CONTENT_CANCOMMENT", "Attivare possibilit&agrave; di commento?");
define("_CO_CONTENT_CONTENT_CONTENT_CANCOMMENT_DSC", "");
define("_CO_CONTENT_CONTENT_CONTENT_SHOWSUBS", "Mostra le pagine correlate");
define("_CO_CONTENT_CONTENT_CONTENT_SHOWSUBS_DSC", "Se <b>\"Mostra le pagine correlate\"</b> nelle preferenze di questo modulo sono configurate su <b>\"S&Igrave;\"</b> allora puoi utilizzare questa scelta e abilitare o disabilitare la visualizzazione delle pagine correlate per questa singola pagina.");
define("_CO_CONTENT_CONTENT_INFO", "Pubblicato da %s su %s. (%u letture)");
define("_CO_CONTENT_CONTENT_FROM_USER", "Tutte le pagine di %s");
define("_CO_CONTENT_CONTENT_COMMENTS_INFO", "%d commenti");
define("_CO_CONTENT_CONTENT_NO_COMMENT", "Nessun commento");

//Status
define("_CO_CONTENT_CONTENT_STATUS_PUBLISHED", "Pubblicata");
define("_CO_CONTENT_CONTENT_STATUS_PENDING", "Recensioni in sospeso");
define("_CO_CONTENT_CONTENT_STATUS_DRAFT", "Bozze");
define("_CO_CONTENT_CONTENT_STATUS_PRIVATE", "Privato");
define("_CO_CONTENT_CONTENT_STATUS_EXPIRED", "Scaduta");

//Visibility
define("_CO_CONTENT_CONTENT_VISIBLE_MENUOLNY", "Solo nel Menu");
define("_CO_CONTENT_CONTENT_VISIBLE_SUBSONLY", "Solo nelle pagine correlate");
define("_CO_CONTENT_CONTENT_VISIBLE_MENUSUBS", "Menu e pagine correlate");
define("_CO_CONTENT_CONTENT_VISIBLE_DONTSHOW", "Non mostrare link");