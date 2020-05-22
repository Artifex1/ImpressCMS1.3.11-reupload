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

define("_MI_PROFILE_NUMBPICT_TITLE", "Numero di immagini");
define("_MI_PROFILE_NUMBPICT_DESC", "Numero di immagini che un utente pu&ograve; avere nella propria home page. '0' per disattivare il controllo (non &egrave; raccomandato).");

define("_MI_PROFILE_THUMW_TITLE" , "Larghezza miniatura");
define("_MI_PROFILE_THUMBW_DESC" , "Larghezza in pixels delle miniature<br />Questo significa che la miniatura della tua immagine sar&agrave;<br />principalmente di questa dimensione in larghezza<br />Tutte le proporzioni saranno mantenute");
define("_MI_PROFILE_THUMBH_TITLE" , "Altezza miniatura");
define("_MI_PROFILE_THUMBH_DESC" , "Altezza in pixels delle miniature<br />Questo significa che la miniatura della tua immagine sar&agrave;<br />principalmente di questa dimensione in altezza<br />Tutte le proporzioni saranno mantenute");
define("_MI_PROFILE_RESIZEDW_TITLE" , "Larghezza immagine ridimensionata");
define("_MI_PROFILE_RESIZEDW_DESC" , "Larghezza in pixels dell'immagine ridimensionata<br />Questo significa che la tua immagine sar&agrave;<br />principalmente di questa dimensione in larghezza<br />Tutte le proporzioni saranno mantenute<br />L'immagine originale se pi&ugrave; grande di questa dimensione sar&agrave; <br />ridimensionata per non rovinare il tuo template");
define("_MI_PROFILE_RESIZEDH_TITLE" , "Altezza immagine ridimensionata");
define("_MI_PROFILE_RESIZEDH_DESC" , "Altezza in pixels dell'immagine ridimensionata<br />Questo significa che la tua immagine sar&agrave;<br />principalmente di questa dimensione in altezza<br />Tutte le proporzioni saranno mantenute<br />L'immagine originale se pi&ugrave; grande di questa dimensione sar&agrave; <br />ridimensionata per non rovinare il tuo template");
define("_MI_PROFILE_ORIGINALW_TITLE" , "Max larghezza immagine originale");
define("_MI_PROFILE_ORIGINALW_DESC" , "Massima larghezza in pixels dell'immagine originale<br />Questo significa che l'immagine originale dell'utente non pu&ograve; superare <br />questa dimensione in altezza<br /> altrimenti non verr&agrave; caricata sul server");
define("_MI_PROFILE_ORIGINALH_TITLE" , "Max altezza immagine originale");
define("_MI_PROFILE_ORIGINALH_DESC" , "Massima larghezza in pixels dell'immagine originale<br />Questo significa che l'immagine originale dell'utente non pu&ograve; superare <br />questa dimensione in altezza<br /> altrimenti non verr&agrave; caricata sul server");
define("_MI_PROFILE_MAXFILEBYTES_PICTURE_TITLE", "Max dimensione in bytes per immagine");
define("_MI_PROFILE_MAXFILEBYTES_PICTURE_DESC", "This is the maximum size a picture file can be<br /> You can set it in bytes like this: 512000 for 500 KB<br /> Be careful that the maximum size is also set in the php.ini file. The server is currently set to a maximum post size of <strong>".ini_get('post_max_size')."</strong> and a maximum upload filesize of <strong>".ini_get('upload_max_filesize')."</strong>.");
define("_MI_PROFILE_MAXFILEBYTES_AUDIO_TITLE", "Max dimensione per files audio");
define("_MI_PROFILE_MAXFILEBYTES_AUDIO_DESC", "This is the maximum size a audio file can be<br /> You can set it in bytes like this: 5242880 for 5 MB<br /> Be careful that the maximum size is also set in the php.ini file. The server is currently set to a maximum post size of <strong>".ini_get('post_max_size')."</strong> and a maximum upload filesize of <strong>".ini_get('upload_max_filesize')."</strong>.");
define("_MI_PROFILE_PICTURESPERPAGE_TITLE", "Foto per pagina");
define("_MI_PROFILE_PICTURESPERPAGE_DESC", "Immagini visualizzate per pagina prima della impaginazione");
define("_MI_PROFILE_VIDEOSPERPAGE_TITLE", "Video per pagina");
define("_MI_PROFILE_DELETEPHYSICAL_TITLE", "Elimina files dalla cartella di upload");
define("_MI_PROFILE_DELETEPHYSICAL_DESC", "Impostando s&igrave;, permetterai allo script di cancellare sia i dati del database sia i files caricati sul server.<br /> Sii prudente nell'utilizzare questa funzione, se tu elimini i files fisici della gente che potrebbero averlo linkato l'immagine direttamente in un altra parte del sito possono altrettanto perderli;<br /> allo stesso tempo se tu non li escludi devi utilizzare molto spazio nel hard disk del server.<br />Configura questa scelta al meglio per le tue possibilit&agrave;.");
define("_MI_PROFILE_TUBEW_TITLE", "Larghezza dei video YouTube");
define("_MI_PROFILE_TUBEW_DESC", "La larghezza del video player di YouTube");
define("_MI_PROFILE_TUBEH_TITLE", "Altezza dei video YouTube");
define("_MI_PROFILE_TUBEH_DESC", "L'altezza del video player YouTube");
define("_MI_PROFILE_PICTURE_NOTIFYTIT", "Album");
define("_MI_PROFILE_PICTURE_NOTIFYDSC", "Notifiche correlate all'album degli utenti");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFY", "Nuova immagine");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFYCAP", "Dimmi quando questo utente invia una nuova immagine");
define("_MI_PROFILE_PICTURE_NEWPIC_NOTIFYSBJ", "{X_OWNER_NAME} ha inviato una nuova immagine nel proprio album");
define("_MI_PROFILE_VIDEO_NOTIFYTIT", "Video");
define("_MI_PROFILE_VIDEO_NOTIFYDSC", "Notifiche video");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFY", "Nuovo video");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFYCAP", "Notificami quando un nuovo video sar&agrave; inviato da questo utente");
define("_MI_PROFILE_VIDEO_NEWVIDEO_NOTIFYSBJ", "{X_OWNER_NAME} ha inviato un nuovo video nel proprio profilo");
define("_MI_PROFILE_AUDIO_NOTIFYTIT", "Audio");
define("_MI_PROFILE_AUDIO_NOTIFYDSC", "Notifiche audio");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFY", "Nuovo audio");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFYCAP", "Notificami quando un nuovo file audio sarà inviato da questo utente");
define("_MI_PROFILE_AUDIO_NEWAUDIO_NOTIFYSBJ", "{AUDIO_OWNER} ha inviato un nuovo file audio sul proprio profilo");
define("_MI_PROFILE_TRIBETOPIC_NOTIFYTIT", "Gruppi");
define("_MI_PROFILE_TRIBETOPIC_NOTIFYDSC", "Notifiche di discussioni del gruppo (argomento)");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFY", "Nuovo argomento");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFYCAP", "Notificami quando un nuovo argomento è stato creato per questo gruppo");
define("_MI_PROFILE_TRIBETOPIC_NEWTRIBETOPIC_NOTIFYSBJ", "Nuovo argomento {TRIBETOPIC_TITLE} in {TRIBE_TITLE}");
define("_MI_PROFILE_TRIBEPOST_NOTIFYTIT", "Gruppi");
define("_MI_PROFILE_TRIBEPOST_NOTIFYDSC", "Notifiche di discussioni del gruppo (risposte)");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFY", "Nuovo post");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFYCAP", "Notificami quando un nuovo posto è stato inviato per questo argomento");
define("_MI_PROFILE_TRIBEPOST_NEWTRIBEPOST_NOTIFYSBJ", "Nuovo posto in {TRIBETOPIC_TITLE}");
define("_MI_PROFILE_MAINTUBEW_TITLE", "Larghezza video principale");
define("_MI_PROFILE_MAINTUBEW_DESC", "larghezza del video che si vede nella pagina frontale del modulo");
define("_MI_PROFILE_MAINTUBEH_TITLE", "Altezza video principale");
define("_MI_PROFILE_MAINTUBEH_DESC", "Altezza del video che si vede nella pagina frontale del modulo");
define("_MI_PROFILE_MYCONFIGS", "Le mie impostazioni");
define("_MI_PROFILE_TRIBETOPICSPERPAGE_TITLE", "N. tematiche trib&ugrave; per pagina");
define("_MI_PROFILE_TRIBETOPICSPERPAGE_DESC","N. tematiche trib&ugrave; per pagina prima della impaginazione show up");
define("_MI_PROFILE_TRIBEPOSTSPERPAGE_TITLE", "N. posts trib&ugrave; per pagina");
define("_MI_PROFILE_TRIBEPOSTSPERPAGE_DESC", "N. posts trib&ugrave; per pagina prima della impaginazione show up");
define("_MI_PROFILE_ROWITEMS_TITLE", "Thumbnails per row");
define("_MI_PROFILE_ROWITEMS_DESC", "How many pictures, groups and group members per row in details view");
define("_MI_PROFILE_SEARCH", "Cerca Membri");
define("_MI_PROFILE_ENABLEPICT_TITLE", "Attiva sezione immagini");
define("_MI_PROFILE_ENABLEPICT_DESC", "");
define("_MI_PROFILE_ENABLEFRIENDS_TITLE", "Attiva sezione amici");
define("_MI_PROFILE_ENABLEFRIENDS_DESC", "");
define("_MI_PROFILE_ENABLEVIDEOS_TITLE", "Attiva la sezione video");
define("_MI_PROFILE_ENABLEVIDEOS_DESC", "");
define("_MI_PROFILE_ENABLETRIBES_TITLE", "Attiva la sezione trib&ugrave;");
define("_MI_PROFILE_ENABLETRIBES_DESC", "");
define("_MI_PROFILE_BLOCKS_FRIENDS", "I miei amici");
define("_MI_PROFILE_BLOCKS_USERMENU", "Menu utente");
define("_MI_PROFILE_IMGORDER_TITLE", "Mostra prima le ultime immagini?");
define("_MI_PROFILE_IMGORDER_DESC", "");
define("_MI_PROFILE_ENABLEAUDIO_TITLE", "Attiva sezione audio");
define("_MI_PROFILE_ENABLEAUDIO_DESC", "");
define("_MI_PROFILE_NUMBAUDIO_TITLE", "Max n. audio files per utente");
define("_MI_PROFILE_NUMBAUDIO_DESC", "Number of audio files a user can have in their page. '0' to deactivate check (not recommended).");
define("_MI_PROFILE_AUDIOSPERPAGE_TITLE", "Numero di audio files per pagina");
define("_MI_PROFILE_NAME", "Profilo");
define("_MI_PROFILE_DESC", "Modulo per amministrare campi personalizzati del profilo utente");
define("_MI_PROFILE_EDITACCOUNT", "Modifica Account");
define("_MI_PROFILE_CHANGEPASS", "Cambia Password");
define("_MI_PROFILE_CHANGEMAIL", "Cambia Email");
define("_MI_PROFILE_DELETEACCOUNT", "Cancella account");

define("_MI_PROFILE_FINDUSER", "Trova utenti");

//Configuration categories
define("_MI_PROFILE_CAT_PERSONAL", "Personale");
define("_MI_PROFILE_CAT_MESSAGING", "Messaggi");
define("_MI_PROFILE_CAT_SETTINGS1", "Impostazioni");
define("_MI_PROFILE_CAT_COMMUNITY", "Community");
define("_MI_PROFILE_CAT_BASEINFO", "Informazioni essenziali");
define("_MI_PROFILE_CAT_EXTINFO", "Informazioni complementari");
define("_MI_PROFILE_CAT_SETTINGS", "Impostazioni generali");
define("_MI_PROFILE_CAT_SETTINGS_DSC", "");
define("_MI_PROFILE_CAT_USER", "Impostazioni utente");
define("_MI_PROFILE_CAT_USER_DSC", "");

//Configuration items
define("_MI_PROFILE_PROFILE_SEARCH", "Mostra le ultime modifiche fatte dagli utenti sul loro profilo");
define("_MI_PROFILE_SHOWEMPTY", "Mostra campi vuoti");
define("_MI_PROFILE_SHOWEMPTY_DESC", "Se imposti su 'no', i campi senza un valore non sararranno mostrati sui profili utenti");

define("_MI_PROFILE_DISPNAME", "Nome da visualizzare sulla pagina principale");
define("_MI_PROFILE_DISPNAME_DESC", "");
define("_MI_PROFILE_BOTH", "Entrambi");

define("_MI_PROFILE_GROUP_VIEW_DSC", "Gli utenti anonimi vengono visualizzati in questo elenco, però, selezionandoli non avrà alcun effetto.");
define("_MI_PROFILE_PROFILE_SOCIAL", "Gestione profilo sociale");
define("_MI_PROFILE_PROFILE_SOCIAL_DESC", "Vuoi utilizzare questo modulo di profilo sociale come Facebook?");

define("_MI_PROFILE_AUDIOS", "Audio");
define("_MI_PROFILE_TRIBES", "Trib&ugrave;");
define("_MI_PROFILE_PICTURES", "Immagini");
define("_MI_PROFILE_VIDEOS", "Video");
define("_MI_PROFILE_TRIBEUSERS", "Utenti trib&ugrave;");

$group_list = icms::handler('icms_member')->getGroupList();
foreach ($group_list as $key => $group) if ($key > 1) define("_MI_PROFILE_GROUP_VIEW_".$key, $group." can view");
unset($group_list);
define("_MI_PROFILE_AUTOTASK_REACTIVATE_SUSPENDED_USERS", "Reactivate suspended users");
?>