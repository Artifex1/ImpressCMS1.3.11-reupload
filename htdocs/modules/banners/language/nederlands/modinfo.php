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
define("_MI_BANNERS_MD_NAME", "Advertenties");
define("_MI_BANNERS_MD_DESC", "ImpressCMS Advertentie Beheer Systeem");
define("_MI_BANNERS_CLIENTS", "Klanten");
define("_MI_BANNERS_BANNERS", "Advertenties");
define("_MI_BANNERS_POSITIONS", "Posities");

/** Module Configuration */
define("_MI_BANNERS_EMAIL_NEW_BANNER", "Verwittig de webmaster over nieuwe advertenties");
define("_MI_BANNERS_EMAIL_NEW_BANNER_SUBJECT", "e-mail onderwerp voor een nieuwe advertentie");
define("_MI_BANNERS_EMAIL_NEW_BANNER_SUBJECT_DEFAULT", "Nieuwe advertentie ingediend");
define("_MI_BANNERS_EMAIL_NEW_CLIENT", "Verwittig de webmaster over nieuwe klanten");
define("_MI_BANNERS_EMAIL_NEW_CLIENT_SUBJECT", "e-mail onderwerp voor nieuwe klanten");
define("_MI_BANNERS_EMAIL_NEW_CLIENT_SUBJECT_DEFAULT", "Nieuwe klant");
define("_MI_BANNERS_MAXFILESIZE", "Maximum bestandsgrootte om een advertentie op te laden");
define("_MI_BANNERS_MAXFILESIZE_DSC", "Bestandsgrootte in bytes");
define("_MI_BANNERS_CLIENT_BANNER_TYPES", "Aanvaarde advertentietypes voor klanten");
define("_MI_BANNERS_CLIENT_BANNER_TYPES_DSC", "Geef aan welke types van advertenties door klanten kunnen worden aangemaakt. HTML zou eventueel van de lijst kunnen worden verwijderd om veiligheidsredenen");