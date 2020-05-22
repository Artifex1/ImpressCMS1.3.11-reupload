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
 * @version		$Id: main.php 22415 2011-08-27 10:21:21Z phoenyx $
 */

define("_MD_PROFILE_MAKE_CONFIG_FIRST", "Questa &egrave; la prima volta che apri il tuo Profilo. Innanzitutto seleziona le tue impostazioni.");
define("_MD_PROFILE_USER_NOT_FOUND", "Utente non trovato.");
define("_MD_PROFILE_ERRORDURINGSAVE", "Errore nel salvare i dati");
define("_MD_PROFILE_EMAIL", "Email");
define("_MD_PROFILE_OPENID", "OpenID");
define("_MD_PROFILE_OPENID_VIEW", "Permetti agli altri utenti di vedere il tuo OpenID");
define("_MD_PROFILE_AVATAR", "Avatar");
define("_MD_PROFILE_VERIFYPASS", "Verifica Password");
define("_MD_PROFILE_SUBMIT", "Invia");
define("_MD_PROFILE_FINISH", "Finisci");
define("_MD_PROFILE_REGISTERNG", "Non &egrave; possibile registrare nuovi utenti.");
define("_MD_PROFILE_DISCLAIMER", "Liberatoria");
define("_MD_PROFILE_IAGREE", "Accetto quanto sopra");
define("_MD_PROFILE_UNEEDAGREE", "Spiacente, devi approvare la nostra liberatoria per registrarti.");
define("_MD_PROFILE_NOREGISTER", "Spiacente, siamo al momento chiusi per nuove registrazioni di utenti");
define("_MD_PROFILE_NOSTEPSAVAILABLE", "Nessun livello di registrazione &egrave; stato definito");
define("_MD_PROFILE_REGISTER_FINISH", "Grazie per esserti registrato");
define("_MD_PROFILE_USERKEYFOR", "Chiave di attivazione per %s");
define("_MD_PROFILE_ACTLOGIN", "L'iscrizione &egrave; stata attivata e ora puoi fare il login con la password registrata.");
define("_MD_PROFILE_ACTKEYNOT", "Chiave di attivazione errata!");
define("_MD_PROFILE_ACONTACT", "L'account selezionato &egrave; gi&agrave; attivato!");
define("_MD_PROFILE_ACTFAILED", "Attivazione non riuscita!");
define("_MD_PROFILE_YOURREGISTERED", "Una email contenente una chiave per l'attivazione dell'utenza &egrave; stata inviata all'indirizzo email dichiarato alla registrazione. Sei pregato di seguire le istruzioni che vi troverai per attivare la tua iscrizione.");
define("_MD_PROFILE_YOURREGMAILNG", "Ora sei registrato, Tuttavia non siamo in grado di inviarti la mail di attivazione a causa di un errore interno del nostro server. Siamo spiacenti dell'inconveniente e ti preghiamo di inviare al webmaster di questo sito una email notificando la situazione.");
define("_MD_PROFILE_YOURREGISTERED2", "Ora sei registrato.  Sei pregato di attendere l'attivazione da parte degli amministratori. Riceverai una email non appena ci&ograve; succeder&agrave;. Il tempo di attesa non &egrave; pianificato, ti chiediamo un po' di pazienza.");
define("_MD_PROFILE_NEWUSERREGAT", "Nuova registrazione utente su %s");
define("_MD_PROFILE_HASJUSTREG", "%s si &egrave; appena registrato!");
define("_MD_PROFILE_INVALIDMAIL", "ERRORE: emai non valida");
define("_MD_PROFILE_SORRYNOTFOUND", "Spiacente, non &egrave; stata trovata nessuna informazione corrispondente all'utente.");
define("_MD_PROFILE_USERALREADYACTIVE", "Un'utente con indirizzo email %s è già attivo");
define("_MD_PROFILE_USERDISABLED", "Il conto di questo utilizzatore è stato bloccato e non puo essere attivato dall'utilizzatore stesso.");
define("_MD_PROFILE_YOURACCOUNT", "Il tuo account su %s"); // %s is your site name
define("_MD_PROFILE_ACTVMAILNG", "L'invio della email di notifica a %s non ha avuto successo"); // %s is a username
define("_MD_PROFILE_ACTVMAILOK", "L'email di notifica per %s &egrave; stata inviata."); // %s is a username
define("_MD_PROFILE_PROVIDEPWDS", "Fornire tutte le password");
define("_MD_PROFILE_DEFAULT", "Informazioni di base");
define("_MD_PROFILE_SUSPENDED", "Questo utilizzatore e sospeso fino a %s");

// userinfo.php
define("_MD_PROFILE_SELECTNG", "Nessun utente selezionato! Si prega di tornare indietro e riprovare.");
define("_MD_PROFILE_EDITPROFILE", "Modifica il tuo profilo");
define("_MD_PROFILE_SHOWALL", "Mostra tutto");
define("_MD_PROFILE_DELETED", "Questo conto e stato cancellato");

// edituser.php
define("_MD_PROFILE_PROFILE", "Profilo");
define("_MD_PROFILE_PASSWORD", "Password");
define("_MD_PROFILE_TYPEPASSTWICE", "(digita la password due volte per cambiarla)");
define("_MD_PROFILE_SAVECHANGES", "Salva modifiche");
define("_MD_PROFILE_NOEDITRIGHT", "Spiacente, non hai i permessi per modificare questa informazione dell'utente.");
define("_MD_PROFILE_PROFUPDATED", "Il tuo profilo &egrave; stato aggiornato!");
define("_MD_PROFILE_UPLOADMYAVATAR", "Upload Avatar");
define("_MD_PROFILE_MAXPIXEL", "Max pixels");
define("_MD_PROFILE_MAXIMGSZ", "Max dimensione immagine (Bytes)");
define("_MD_PROFILE_SELFILE", "Seleziona file");
define("_MD_PROFILE_OLDDELETED", "Il tuo vecchio avatar sar&agrave; cancellato!");
define("_MD_PROFILE_CHOOSEAVT", "Scegli un avatar disponibile dalla lista");
define("_MD_PROFILE_ADMINNO", "Utente nel gruppo webmaster non pu&ograve; essere rimosso");
define("_MD_PROFILE_NOPERMISS", "Spiacente, non hai i permessi per compiere questa azione!");
define("_MD_PROFILE_SURETODEL", "Sei sicuro di voler cancellare questo account?");
define("_MD_PROFILE_REMOVEINFO", "Questo rimuover&agrave; tutte le tue informazioni dal nostro database.");
define("_MD_PROFILE_BEENDELED", "Il tuo account &egrave; stato cancellato.");
define("_MD_PROFILE_ACTIVEUSER", "Livello utente");
define("_MD_PROFILE_ACTIVE", "Attivo");
define("_MD_PROFILE_INACTIVE", "Inattivo");
define("_MD_PROFILE_DISABLED", "Disabilitato");

// changepass.php
define("_MD_PROFILE_CHANGEPASSWORD", "Cambio Password");
define("_MD_PROFILE_PASSWORDCHANGED", "Password cambiata con successo");
define("_MD_PROFILE_OLDPASSWORD", "Vecchia Password");
define("_MD_PROFILE_NEWPASSWORD", "Nuova Password");

// search.php
define("_MD_PROFILE_SORTBY", "Ordina per");
define("_MD_PROFILE_ORDER", "Ordine");
define("_MD_PROFILE_PERPAGE", "Elementi per pagina");
define("_MD_PROFILE_LATERTHAN", "%s è più tardi di");
define("_MD_PROFILE_EARLIERTHAN", "%s è prima di");
define("_MD_PROFILE_LARGERTHAN", "%s è più grande di");
define("_MD_PROFILE_SMALLERTHAN", "%s è più piccolo di");
define("_MD_PROFILE_NOUSERSFOUND", "Nessun utente trovato");
define("_MD_PROFILE_RESULTS", "Risultati della ricerca");

// changemail.php
define("_MD_PROFILE_CHANGEMAIL", "Modifica Email");
define("_MD_PROFILE_NEWMAIL", "Nuovo indirizzo email");
define("_MD_PROFILE_NEWEMAILREQ", "Richiesta di cambio indirizzo email");
define("_MD_PROFILE_NEWMAILMSGSENT", "La tua richiesta per un cambio a una nuova email &egrave; stata ricevuta ed &egrave; in lavorazione. Devi confermare la tua nuova email prima che la tua sessione scada. Una email con le istruzioni di attivazione &egrave; stata inviata al nuovo indirizzo email. Il tuo indirizzo email NON SAR&Agrave; CAMBIATO FINCH&Eacute; non confermerai la richiesta.");
define("_MD_PROFILE_EMAILCHANGED", "Il tuo indirizzo email &egrave; stato cambiato.");
define("_MD_PROFILE_CONFCODEMISSING", "Codice di conferma mancante");
define("_MD_PROFILE_CONFCODEWRONG", "Codice di conferma errato");

// register.php
define("_MD_PROFILE_REGISTER", "Modulo di registrazione");

// friendship.php
define("_MD_PROFILE_FRIENDSHIPS_NOCONTENT", "Non ci sono ancora amici");

// audio.php
define("_MD_PROFILE_AUDIOS_NOCONTENT", "Non ci sono ancora contenuti audio");
define("_MD_PROFILE_AUDIOS_SUBMIT", "Invia nuovo file audio");
define("_MD_PROFILE_AUDIOS_EDIT", "Modifica file audio gi&agrave; esistenti");
define("_MD_PROFILE_AUDIOS_CREATED", "File audio aggiunti con successo");
define("_MD_PROFILE_AUDIOS_MODIFIED", "File audio modificati con successo");
define("_MD_PROFILE_AUDIOS_PLAYER", "Player");
define("_MD_PROFILE_AUDIOS_AUTHOR", "Autore");
define("_MD_PROFILE_AUDIOS_TITLE", "Titolo");
define("_MD_PROFILE_AUDIOS_LASTUPDATED", "Ultimo aggiornamento");
define("_MD_PROFILE_AUDIOS_ACTIONS", "Azioni");

// pictures.php
define("_MD_PROFILE_PICTURES_NOCONTENT", "Non ci sono ancora immagini in questo album");
define("_MD_PROFILE_PICTURES_SUBMIT", "Invia una nuova foto");
define("_MD_PROFILE_PICTURES_EDIT", "Modifica foto gi&agrave; esistente");
define("_MD_PROFILE_PICTURES_CREATED", "Foto aggiunta con successo");
define("_MD_PROFILE_PICTURES_MODIFIED", "Foto modificata con successo");
define("_MD_PROFILE_PICTURES_AVATAR_EDITED", "Avatar modificato con successo");
define("_MD_PROFILE_PICTURES_AVATAR_NOTEDITED", "Si &egrave; verificato un errore nell'aggiornare il tuo avatar");
define("_MD_PROFILE_PICTURES_AVATAR_DELETED", "Avatar cancellato con successo");
define("_MD_PROFILE_PICTURES_AVATAR_NOTDELETED", "Si &egrave; verificato un errore cancellando il tuo avatar");
define("_MD_PROFILE_PICTURES_AVATAR_SET", "Imposta questa immagine come avatar");

// tribes.php
define("_MD_PROFILE_TRIBES_NOCONTENT", "Non c'&egrave; ancora nessuna trib&ugrave; oppure nessuna appartenenza a trib&ugrave;");
define("_MD_PROFILE_TRIBES_SUBMIT", "Crea nuova trib&ugrave;");
define("_MD_PROFILE_TRIBES_EDIT", "Modifica una trib&ugrave; esistente");
define("_MD_PROFILE_TRIBES_CREATED", "Trib&ugrave; creata con successo");
define("_MD_PROFILE_TRIBES_MODIFIED", "Trib&ugrave; modificata con successo");
define("_MD_PROFILE_TRIBES_OWN", "Proprie trib&ugrave;");
define("_MD_PROFILE_TRIBES_MEMBERSHIPS", "Appartenenze");
define("_MD_PROFILE_TRIBES_MEMBERS", "Membri");
define("_MD_PROFILE_TRIBES_TOPICS", "Tematiche");
define("_MD_PROFILE_TRIBES_DISCUSSIONS", "Discussioni");
define("_MD_PROFILE_TRIBES_CREATION_TIME", "Dal");
define("_MD_PROFILE_TRIBES_VIEWS", "Visite");
define("_MD_PROFILE_TRIBES_OWNER", "Proprietario");
define("_MD_PROFILE_TRIBES_NOTFOUND", "Trib&ugrave; non trovata.");
define("_MD_PROFILE_TRIBES_JOINFIRST", "Devi essere un membro di questa trib&ugrave; per vedere tutti gli altri membri e le discussioni.");
define("_MD_PROFILE_TRIBES_SEARCH", "Cerca una trib&ugrave;");
define("_MD_PROFILE_TRIBES_SEARCH_TITLE", "Cerca risultati per: %s");
define("_MD_PROFILE_TRIBES_SEARCH_NORESULTS", "Nessuna trib&ugrave; trovata per: %s");
define("_MD_PROFILE_TRIBETOPIC_SUBMIT", "Invia una nuova tematica");
define("_MD_PROFILE_TRIBETOPIC_CREATED", "Tematica creata con successo");
define("_MD_PROFILE_TRIBETOPIC_MODIFIED", "Tematica modificata con successo");
define("_MD_PROFILE_TRIBETOPIC_TITLE", "Titolo");
define("_MD_PROFILE_TRIBETOPIC_AUTHOR", "Autore");
define("_MD_PROFILE_TRIBETOPIC_REPLIES", "Risposte");
define("_MD_PROFILE_TRIBETOPIC_VIEWS", "Visite");
define("_MD_PROFILE_TRIBETOPIC_LAST_POST_TIME", "Ultimo post");
define("_MD_PROFILE_TRIBETOPIC_NOTFOUND", "Tematica non trovata.");
define("_MD_PROFILE_TRIBETOPIC_EDIT", "Modifica tematica");
define("_MD_PROFILE_TRIBETOPIC_SHOW_LAST_POST", "Mostra ultimo post");
define("_MD_PROFILE_TRIBETOPIC_CLOSE", "Chiudi");
define("_MD_PROFILE_TRIBETOPIC_CLOSED", "Chiuso");
define("_MD_PROFILE_TRIBETOPIC_REOPEN", "Riapri");
define("_MD_PROFILE_TRIBEPOST_SUBMIT", "Invia un nuovo post");
define("_MD_PROFILE_TRIBEPOST_CREATED", "Post creato con successo");
define("_MD_PROFILE_TRIBEPOST_MODIFIED", "Post modificato con successo");
define("_MD_PROFILE_TRIBEPOST_EDIT", "Modifica post");
define("_MD_PROFILE_TRIBEUSER_SUBMIT", "Aggiungi un utente di trib&ugrave;");
define("_MD_PROFILE_TRIBEUSER_JOIN", "Unisciti a questa trib&ugrave;");
define("_MD_PROFILE_TRIBEUSER_CREATED", "L'utente di trib&ugrave; &egrave; stato creato con successo.");
define("_MD_PROFILE_TRIBEUSER_MODIFIED", "L'utente di trib&ugrave; &egrave; stato modificato con successo.");
if (!defined("_PROFILE_TRIBEUSER_DUPLICATE")) define("_PROFILE_TRIBEUSER_DUPLICATE", "L'utente specificato &egrave; gi&agrave; membro di questa trib&ugrave;.");
if (!defined("_PROFILE_TRIBEUSER_OWNER")) define("_PROFILE_TRIBEUSER_OWNER", "L'utente specificato &egrave; gi&agrave; il proprietario di questa trib&ugrave; e pertanto non ne pu&ograve; essere membro.");

// videos.php
define("_MD_PROFILE_VIDEOS_NOCONTENT", "Non ci sono ancora video");
define("_MD_PROFILE_VIDEOS_SUBMIT", "Invia nuovo video");
define("_MD_PROFILE_VIDEOS_EDIT", "Modifica video gi&agrave; esistente");
define("_MD_PROFILE_VIDEOS_CREATED", "Video aggiunto con successo");
define("_MD_PROFILE_VIDEOS_MODIFIED", "Video modificato con successo");
define("_MD_PROFILE_VIDEOS_VIDEO", "Video");
define("_MD_PROFILE_VIDEOS_DESCRIPTION", "Descrizione video");
define("_MD_PROFILE_VIDEOS_ACTIONS", "Azioni");

// index.php
define("_MD_PROFILE_VISITORS", "Visitatori (chi ha visitato recentemente il tuo profilo)");
define("_MD_PROFILE_USERCONTRIBUTIONS", "Contributi utente");
define("_MD_PROFILE_SELECTAVATAR", "Carica foto al tuo album e selezionane una come tuo avatar.");
define("_MD_PROFILE_SECURITY_CHECK_FAILED", "");
define("_MD_PROFILE_TRIBES_INVITATIONS", "Accetta questo invito a unirti alle seguenti trib&ugrave;");
define("_MD_PROFILE_TRIBES_APPROVALS", "I seguenti utenti desiderano essere approvati per unirsi alla tua trib&ugrave;");
define("_MD_PROFILE_TRIBEUSER_NOTFOUND", "Utente trib&ugrave; non trovato.");
define("_MD_PROFILE_TRIBEUSER_APPROVE", "Approva questo utente");
define("_MD_PROFILE_TRIBEUSER_ACCEPT", "Accetta l'invito a unirti a questa trib&ugrave;");
define("_MD_PROFILE_TRIBEUSER_OP_SUCCESS", "Operazione eseguita con successo");
define("_MD_PROFILE_AUDIOS", "Audio");
define("_MD_PROFILE_FRIENDSHIP_ADD", "Aggiungi questo utente come amico");
define("_MD_PROFILE_FRIENDSHIP_CREATED", "Questo utente &egrave; stato aggiunto alla tua lista di amici! Apparir&agrave; solo quando approver&agrave; la tua richiesta.");
define("_MD_PROFILE_FRIENDSHIP_MODIFIED", "L'amicizia &egrave; stata modificata con successo.");
define("_MD_PROFILE_FRIENDSHIP_PENDING", "Amicizia sospesa (solamente tu puoi vedere questo!)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPTED", "Amicizia accettata");
define("_MD_PROFILE_FRIENDSHIP_REJECTED", "Amicizia rifiutata (solamente tu puoi vedere questo!)");
define("_MD_PROFILE_FRIENDSHIP_ACCEPT", "Accetta amicizia");
define("_MD_PROFILE_FRIENDSHIP_REJECT", "Rifiuta amicizia");
define("_MD_PROFILE_GOTO", "vai a: ");

// configs.php
define("_MD_PROFILE_CONFIGS", "Impostazioni");
define("_MD_PROFILE_CONFIGS_SUBMIT", "Cambia impostazioni di profilo");
define("_MD_PROFILE_CONFIGS_EDIT", "Modifica impostazioni di profilo");
define("_MD_PROFILE_CONFIGS_CREATED", "Le impostazioni di profilo sono state create");
define("_MD_PROFILE_CONFIGS_MODIFIED", "Le impostazioni di profilo sono state aggiornate");

// Present in many files (videos pictures etc...)
define("_MD_PROFILE_DELETE", "Elimina");
define("_MD_PROFILE_PAGETITLE", "Profilo di %s");
define("_MD_PROFILE_VIDEOS", "Video");
define("_MD_PROFILE_PHOTOS", "Foto");
define("_MD_PROFILE_FRIENDS", "Amici");
define("_MD_PROFILE_TRIBES", "Trib&ugrave;");
define("_MD_PROFILE_UPLOADLIMIT", "Hai raggiunto il tuo limite di invio di %s files.");
define("_MD_PROFILE_SITEDEFAULT", "Site default");
?>