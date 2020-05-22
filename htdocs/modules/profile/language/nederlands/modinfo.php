<?php
/**
 * Extended User Profile
 *
 * @copyright	The ImpressCMS Project http://www.impresscms.org/
 * @license		LICENSE.txt
 * @license		GNU General Public License (GPL) http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @package		modules
 * @since		1.2
 * @author		Jan Pedersen
 * @author		Marcello Brandao <marcello.brandao@gmail.com>
 * @author		Sina Asghari (aka stranger) <pesian_stranger@users.sourceforge.net>
 * @version		$Id: modinfo.php 24694 2012-11-07 01:31:55Z qm-b $
 */

define("_MI_PROFILE_NUMBPICT_TITLE", "Aantal afbeeldingen");
define("_MI_PROFILE_NUMBPICT_DESC", "Aantal afbeeldingen dat een gebruiker kan hebben in zijn/haar pagina");

define("_MI_PROFILE_THUMW_TITLE" , "Thumb breedte");
define("_MI_PROFILE_THUMBW_DESC" , "Breedte van de miniaturen in pixels<br />Dit betekend dat uw afbeeldingsminiaturen maximaal<br />deze breedte zal hebben<br />Alle verhoudingen blijven gelijk");
define("_MI_PROFILE_THUMBH_TITLE" , "Thumb hoogte");
define("_MI_PROFILE_THUMBH_DESC" , "Hoogte van de miniaturen in pixels<br />Dit betekend dat uw afbeeldingsminiatuur maximaal<br />deze hoogte zal hebben<br />Alle verhoudingen blijven gelijk");
define("_MI_PROFILE_RESIZEDW_TITLE" , "Geschaalde afbeeldingsbreedte");
define("_MI_PROFILE_RESIZEDW_DESC" , "Geschaalde afbeeldingsbreedte in pixels<br />Dit betekend dat uw afbeelding maximaal<br />deze breedte zal hebben<br />Alle verhoudingen blijven hetzelfde<br /> De orginale afbeelding wordt wanneer deze groter is<br />geschaald zodat uw template in takt blijft");
define("_MI_PROFILE_RESIZEDH_TITLE" , "Geschaalde afbeeldingshoogte");
define("_MI_PROFILE_RESIZEDH_DESC" , "Geschaalde afbeeldingshoogte in pixels<br />Dit betekend dat uw afbeelding maximaal<br />deze hoogte zal hebben<br />Alle verhoudingen blijven hetzelfde<br /> De orginale afbeelding wordt wanneer deze groter is<br />geschaald zodat uw template in takt blijft");
define("_MI_PROFILE_ORIGINALW_TITLE" , "Max originele afbeeldingsbreedte");
define("_MI_PROFILE_ORIGINALW_DESC" , "Maximum originele afbeeldingsbreedte in pixels<br />Dit betekend dat de originele afbeelding deze grote<br />niet kan overschrijden<br /> anders wordt deze niet geupload");
define("_MI_PROFILE_ORIGINALH_TITLE" , "Max originele afbeeldingshoogte");
define("_MI_PROFILE_ORIGINALH_DESC" , "Maximum originele afbeeldingshoogte in pixels<br />Dit betekend dat de originele afbeelding deze grote<br />niet kan overschrijden<br /> anders wordt deze niet geupload");
define("_MI_PROFILE_MAXFILEBYTES_PICTURE_TITLE", "Max grootte in bytes per afbeelding");
define("_MI_PROFILE_MAXFILEBYTES_PICTURE_DESC", "This is the maximum size a picture file can be<br /> You can set it in bytes like this: 512000 for 500 KB<br /> Be careful that the maximum size is also set in the php.ini file. The server is currently set to a maximum post size of <strong>".ini_get('post_max_size')."</strong> and a maximum upload filesize of <strong>".ini_get('upload_max_filesize')."</strong>.");
define("_MI_PROFILE_MAXFILEBYTES_AUDIO_TITLE", "Max omvang in bytes");
define("_MI_PROFILE_MAXFILEBYTES_AUDIO_DESC", "This is the maximum size a audio file can be<br /> You can set it in bytes like this: 5242880 for 5 MB<br /> Be careful that the maximum size is also set in the php.ini file. The server is currently set to a maximum post size of <strong>".ini_get('post_max_size')."</strong> and a maximum upload filesize of <strong>".ini_get('upload_max_filesize')."</strong>.");
define("_MI_PROFILE_PICTURESPERPAGE_TITLE", "Afbeeldingen per pagina");
define("_MI_PROFILE_PICTURESPERPAGE_DESC", "Afbeeldingen weergeven per pagina voor pagina navigatie");
define("_MI_PROFILE_VIDEOSPERPAGE_TITLE", "Video's per pagina");
define("_MI_PROFILE_DELETEPHYSICAL_TITLE", "Verwijder ook bestanden uit de uploadmap");
define("_MI_PROFILE_DELETEPHYSICAL_DESC", "Bevestigen met ja, staat het script toe om ook de bestanden van de geüploade data in de database te verwijderend.<br /> Wees voorzichtig met deze optie, wanneer u de bestanden van de map naast die van de database uitsluit, kunnen personen die afbeeldingen direct hebben gelinkt naar een ander deel van de website deze inhoud verliezen;<br /> Tegelijkertijd, waneer u ze niet uitsluit verbruikt u mogelijk te veel schijfruimte.<br />Stel dit correct in bij uw behoeften.");
define("_MI_PROFILE_TUBEW_TITLE", "Breedte van de YouTube video's");
define("_MI_PROFILE_TUBEW_DESC", "De breedte in pixels van de YouTube video speler");
define("_MI_PROFILE_TUBEH_TITLE", "Hoogte van de YouTube video's");
define("_MI_PROFILE_TUBEH_DESC", "De hoogte in pixels van de YouTube video speler");
define("_MI_PROFILE_PICTURE_NOTIFYTIT", "Album");
define("_MI_PROFILE_PICTURE_NOTIFYDSC", "Berichtgevingen gerelateerd aan gebruikersalbums");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFY", "Nieuwe afbeelding");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFYCAP", "Meld mij wanneer een gebruiker een nieuwe afbeelding inzend");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFYSBJ", "{X_OWNER_NAME} heeft een nieuwe afbeelding ingezonden in zijn/haar album");
define("_MI_PROFILE_VIDEO_NOTIFYTIT", "Video's");
define("_MI_PROFILE_VIDEO_NOTIFYDSC", "Video berichtgevingen");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFY", "Nieuwe video");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFYCAP", "Meld mij wanneer deze gebruiker een nieuwe video inzend");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFYSBJ", "{X_OWNER_NAME} heeft een nieuwe video ingezonden in zijn/haar profiel");
define("_MI_PROFILE_AUDIO_NOTIFYTIT", "Audio");
define("_MI_PROFILE_AUDIO_NOTIFYDSC", "Audio kennisgevingen");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFY", "Nieuw audio");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFYCAP", "Laat me weten wanneer een nieuw audio bestand is ingediend door de gebruiker");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFYSBJ", "{AUDIO_OWNER} heeft een nieuw audio bestand toegevoegd aan hun profiel");
define("_MI_PROFILE_TRIBETOPIC_NOTIFYTIT", "Groepen");
define("_MI_PROFILE_TRIBETOPIC_NOTIFYDSC", "Groep discussie (onderwerp) berichten");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFY", "Nieuw onderwerp");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFYCAP", "Laat me weten wanneer een nieuw onderwerp is ingediend voor deze groep");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFYSBJ", "Nieuw onderwerp {TRIBETOPIC_TITLE} in {TRIBE_TITLE}");
define("_MI_PROFILE_TRIBEPOST_NOTIFYTIT", "Groepen");
define("_MI_PROFILE_TRIBEPOST_NOTIFYDSC", "Groep discussie (antwoord) berichtgevingen");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFY", "Nieuw bericht");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFYCAP", "Laat me weten wanneer een nieuwe post is ingediend voor dit onderwerp");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFYSBJ", "Nieuw bericht in {TRIBETOPIC_TITLE}");
define("_MI_PROFILE_MAINTUBEW_TITLE", "Hoofd video breedte");
define("_MI_PROFILE_MAINTUBEW_DESC", "Breedte van de video, die wordt getoond in de beginpagina van de module");
define("_MI_PROFILE_MAINTUBEH_TITLE", "Hoofd video hoogte");
define("_MI_PROFILE_MAINTUBEH_DESC", "Hoogte van de video, die wordt getoond in de beginpagina van de module");
define("_MI_PROFILE_MYCONFIGS", "Mijn instellingen");
define("_MI_PROFILE_TRIBETOPICSPERPAGE_TITLE", "Tribe onderwerpen per pagina");
define("_MI_PROFILE_TRIBETOPICSPERPAGE_DESC","Tribe onderwerpen per pagina voordat de pagina navigatie wordt getoond");
define("_MI_PROFILE_TRIBEPOSTSPERPAGE_TITLE", "Tribe inzendingen per pagina");
define("_MI_PROFILE_TRIBEPOSTSPERPAGE_DESC", "Tribe inzendingen per pagina voordat de pagina navigatie wordt getoond");
define("_MI_PROFILE_ROWITEMS_TITLE", "Miniaturen per rij");
define("_MI_PROFILE_ROWITEMS_DESC", "Hoeveel afbeeldingen, groepen en groepsleden per rij in de gedetailleerde weergave");
define("_MI_PROFILE_SEARCH", "Zoek leden");
define("_MI_PROFILE_ENABLEPICT_TITLE", "Afbeeldingsselectie inschakelen");
define("_MI_PROFILE_ENABLEPICT_DESC", "");
define("_MI_PROFILE_ENABLEFRIENDS_TITLE", "Inschakelen vriendensectie");
define("_MI_PROFILE_ENABLEFRIENDS_DESC", "");
define("_MI_PROFILE_ENABLEVIDEOS_TITLE", "Inschakelen videosectie");
define("_MI_PROFILE_ENABLEVIDEOS_DESC", "");
define("_MI_PROFILE_ENABLETRIBES_TITLE", "Inschakelen Tribesectie");
define("_MI_PROFILE_ENABLETRIBES_DESC", "");
define("_MI_PROFILE_BLOCKS_FRIENDS", "Mijn vrienden");
define("_MI_PROFILE_BLOCKS_USERMENU", "Gebruiker Menu");
define("_MI_PROFILE_IMGORDER_TITLE", "Afbeeldingsvolgorde");
define("_MI_PROFILE_IMGORDER_DESC", "");
define("_MI_PROFILE_ENABLEAUDIO_TITLE", "Inschakelen audio sectie");
define("_MI_PROFILE_ENABLEAUDIO_DESC", "");
define("_MI_PROFILE_NUMBAUDIO_TITLE", "Max aantal audiobestanden");
define("_MI_PROFILE_NUMBAUDIO_DESC", "Aantal audiobestanden dat een gebruiker op zijn pagina kan hebben. '0' om controle uit te schakelen (niet aangeraden).");
define("_MI_PROFILE_AUDIOSPERPAGE_TITLE", "Aantal mp3 bestanden per pagina");
define("_MI_PROFILE_NAME", "Profile");
define("_MI_PROFILE_DESC", "Module voor het beheren van te gebruiken gebruikersprofiel velden");
define("_MI_PROFILE_EDITACCOUNT", "Account wijzigen");
define("_MI_PROFILE_CHANGEPASS", "Wachtwoord wijzigen");
define("_MI_PROFILE_CHANGEMAIL", "E-mail wijzigen");
define("_MI_PROFILE_DELETEACCOUNT", "Account verwijderen");

define("_MI_PROFILE_FINDUSER", "Zoek gebruikers");

//Configuration categories
define("_MI_PROFILE_CAT_PERSONAL", "Persoonlijk");
define("_MI_PROFILE_CAT_MESSAGING", "Berichten");
define("_MI_PROFILE_CAT_SETTINGS1", "Instellingen");
define("_MI_PROFILE_CAT_COMMUNITY", "Gemeenschap");
define("_MI_PROFILE_CAT_BASEINFO", "Basis informatie");
define("_MI_PROFILE_CAT_EXTINFO", "Aanvullende informatie");
define("_MI_PROFILE_CAT_SETTINGS", "Algemene instellingen");
define("_MI_PROFILE_CAT_SETTINGS_DSC", "");
define("_MI_PROFILE_CAT_USER", "Gebruikersinstellingen");
define("_MI_PROFILE_CAT_USER_DSC", "");

//Configuration items
define("_MI_PROFILE_PROFILE_SEARCH", "Toon laatste inzendingen door de gebruiker in het gebruikersprofiel");
define("_MI_PROFILE_SHOWEMPTY", "Lege velden tonen");
define("_MI_PROFILE_SHOWEMPTY_DESC", "Wanneer ingesteld op 'nee' worden lege velden in het gebruikersprofiel niet getoont");

define("_MI_PROFILE_DISPNAME", "Naam om weer te geven in de indexpagina");
define("_MI_PROFILE_DISPNAME_DESC", "");
define("_MI_PROFILE_BOTH", "Beide");

define("_MI_PROFILE_GROUP_VIEW_DSC", "Anonieme gebruikers zijn aanwezig in deze lijst, maar ze selecteren heeft geen enkel effect.");
define("_MI_PROFILE_PROFILE_SOCIAL", "Sociaal profiel beheer");
define("_MI_PROFILE_PROFILE_SOCIAL_DESC", "Wilt u deze module gebruiken als een sociaal profiel als facebook?");

define("_MI_PROFILE_AUDIOS", "Geluiden");
define("_MI_PROFILE_TRIBES", "Tribes");
define("_MI_PROFILE_PICTURES", "Afbeeldingen");
define("_MI_PROFILE_VIDEOS", "Video's");
define("_MI_PROFILE_TRIBEUSERS", "Tribe gebruikers");

$group_list = icms::handler('icms_member')->getGroupList();
foreach ($group_list as $key => $group) if ($key > 1) define("_MI_PROFILE_GROUP_VIEW_".$key, $group." can view");
unset($group_list);
define("_MI_PROFILE_AUTOTASK_REACTIVATE_SUSPENDED_USERS", "Heractiveer geblokkeerde gebruikers");
?>