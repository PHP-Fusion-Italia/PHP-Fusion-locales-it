<?php
// Locale Settings
setlocale(LC_TIME, "it_IT.UTF-8", "it_IT", "it", "IT");
$locale['charset'] = "iso-8859-1";
$locale['mysql_charset'] = "latin1";
$locale['mysql_collate'] = "latin1_swedish_ci";
$locale['xml_lang'] = "it";
$locale['tinymce'] = "it";
$locale['phpmailer'] = "it";
// Full & Short Months
$locale['months'] = " |Gennaio|Febbraio|Marzo|Aprile|Maggio|Giugno|Luglio|Agosto|Settembre|Ottobre|Novembre|Dicembre";
$locale['shortmonths'] = " |Gen|Feb|Mar|Apr|Mag|Giu|Lug|Ago|Sett|Ott|Nov|Dic";
$locale['user_na'] = "N/A";
$locale['user_anonyme'] = "Utente Anonimo"; #XXX
$locale['user_anonymous'] = "Utente anonimo";
// Standard User Levels
$locale['user0'] = "Anonimo";
$locale['user1'] = "Iscritto";
$locale['user2'] = "Amministratore";
$locale['user3'] = "Root";
// Standard User Status
$locale['status0'] = "Attivo";
$locale['status1'] = "Bannato";
$locale['status2'] = "In attesa di attivazione";
$locale['status3'] = "Sospeso";
$locale['status4'] = "Bannato per sicurezza";
$locale['status5'] = "Cancellato";
$locale['status6'] = "Anonimo";
$locale['status7'] = "Disattivato";
$locale['status8'] = "Non pi&ugrave; attivo";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderatore";
// Navigation
$locale['global_001'] = "Navigazione";
$locale['global_002'] = "Nessun link definito\n";
// Users Online
$locale['global_010'] = "Utenti in linea";
$locale['global_011'] = "Ospiti in linea";
$locale['global_012'] = "Iscritti in linea";
$locale['global_013'] = "Nessun iscritto in linea";
$locale['global_014'] = "Totale iscritti";
$locale['global_015'] = "Registrazioni da approvare";
$locale['global_016'] = "Il nuovo iscritto";
// Forum Side panel
$locale['global_020'] = "Argomenti nel forum";
$locale['global_021'] = "Nuovi argomenti";
$locale['global_022'] = "Argomenti popolari";
$locale['global_023'] = "Nessun argomento presente";
// Comments Side panel
$locale['global_025'] = "Ultimi commenti";
$locale['global_026'] = "Nessun commento";
// Articles Side panel
$locale['global_030'] = "Ultimi articoli";
$locale['global_031'] = "Nessun articolo presente";
// Downloads Side panel
$locale['global_032'] = "Ultimi download";
$locale['global_033'] = "Nessun download disponibile";
// Welcome panel
$locale['global_035'] = "Benvenuto";
// Latest Active Forum Threads panel
$locale['global_040'] = "Ultimi argomenti attivi";
$locale['global_041'] = "Miei argomenti recenti";
$locale['global_042'] = "Mie risposte recenti";
$locale['global_043'] = "Nuove risposte";
$locale['global_044'] = "Argomento";
$locale['global_045'] = "Letture";
$locale['global_046'] = "Risposte";
$locale['global_047'] = "Ultima risposta";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Inviato";
$locale['global_050'] = "Autore";
$locale['global_051'] = "Sondaggio";
$locale['global_052'] = "Spostato";
$locale['global_053'] = "Non hai ancora proposto nessun argomento.";
$locale['global_054'] = "Non hai ancora inviato nessun messaggio nel forum.";
$locale['global_055'] = "Ci sono %u nuovi messaggi in %u discussioni nel forum dalla tua ultima visita.";
$locale['global_056'] = "Argomenti che seguo";
$locale['global_057'] = "Opzioni";
$locale['global_058'] = "Rimuovi";
$locale['global_059'] = "Non stai seguendo nessun argomento.";
$locale['global_060'] = "Vuoi veramente smettere di seguire questo argomento?";
// News & Articles
$locale['global_070'] = "Inviato da ";
$locale['global_071'] = "il ";
$locale['global_072'] = "Continua a leggere...";
$locale['global_073'] = " Commenti";
$locale['global_073b'] = " Commento";
$locale['global_074'] = " letture";
$locale['global_075'] = "Stampa";
$locale['global_076'] = "Modifica";
$locale['global_077'] = "Notizie";
$locale['global_078'] = "Nessuna notizia pubblicata";
$locale['global_079'] = "In ";
$locale['global_080'] = "Non categorizzati";
// Page Navigation
$locale['global_090'] = "Prec";
$locale['global_091'] = "Succ";
$locale['global_092'] = "Pagina ";
$locale['global_093'] = " di ";
// Guest User Menu
$locale['global_100'] = "Accedi";
$locale['global_101'] = "Utente";
$locale['global_102'] = "Password";
$locale['global_103'] = "Resta connesso";
$locale['global_104'] = "Accedi";
$locale['global_105'] = "Non ti sei ancora registrato?<br /><a href='".BASEDIR."register.php' class='side'>Clicca qui</a> per registrarti.";
$locale['global_106'] = "Non ricordi pi&ugrave; la password?<br />Richiedine una nuova <a href='".BASEDIR."lostpassword.php' class='side'>qui</a>.";
$locale['global_107'] = "Registrati";
$locale['global_108'] = "Password dimenticata?";
// Member User Menu
$locale['global_120'] = "Modifica profilo";
$locale['global_121'] = "Messaggi privati";
$locale['global_122'] = "Lista iscritti";
$locale['global_123'] = "Pannello amministrativo";
$locale['global_124'] = "Esci";
$locale['global_125'] = "Hai %u ";
$locale['global_126'] = "nuovo messaggio";
$locale['global_127'] = "nuovi messaggi";
$locale['global_128'] = "proposta";
$locale['global_129'] = "proposte";
// Poll
$locale['global_130'] = "Sondaggi";
$locale['global_131'] = "Invia voto";
$locale['global_132'] = "Devi aver fatto il login per poter esprimere il tuo voto.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Voti";
$locale['global_135'] = "Voti: ";
$locale['global_136'] = "Avviato: ";
$locale['global_137'] = "Concluso: ";
$locale['global_138'] = "Sondaggi precedenti";
$locale['global_139'] = "Seleziona un sondaggio dalla lista:";
$locale['global_140'] = "Visto";
$locale['global_141'] = "Vedi sondaggio";
$locale['global_142'] = "Non &egrave; ancora stato aperto alcun sondaggio.";

// Captcha
$locale['global_150'] = "Codice di validazione:";
$locale['global_151'] = "Inserisci il codice di validazione:";

// Footer Counter
$locale['global_170'] = "visita unica";
$locale['global_171'] = "visite uniche";
$locale['global_172'] = "Pagina resa in <strong>%s</strong> secondi!";
$locale['global_173'] = "Queries";
// Admin Navigation
$locale['global_180'] = "Amministrazione";
$locale['global_181'] = "Home Page";
$locale['global_182'] = "Password amministrativa non inserita o non valida";
// Miscellaneous
$locale['global_190'] = "Modalit&agrave; manutenzione attiva";
$locale['global_191'] = "Mi dispiace, ma l&#39;amministratore ha deciso che non puoi pi&ugrave; accedere a questo sito";
$locale['global_192'] = "Il tuo cookie di sessione è scaduto. Devi effettuare nuovamente il plugin per accedere.";
$locale['global_193'] = "Impossibile impostare il cookie di sessione. Controlla le impostazioni del tuo browser, altrimenti &egrave; impossibile effettuare il login.";
$locale['global_194'] = "Questo account &egrave; stato sospeso.";
$locale['global_195'] = "Questo account non &egrave; stato ancora attivato.";
$locale['global_196'] = "Nome Utente o Password non validi.";
$locale['global_197'] = "Attendi mentre viene elaborata la richiesta...<br /><br /> [ <a href='index.php'>Salta</a> ]";
$locale['global_198'] = "<strong>ATTENZIONE:</strong> cancella immediatamente il file setup.php dalla tua directory web.";
$locale['global_199'] = "<strong>ATTENZIONE:</strong> nessuna password amministrativa impostata , clicca <a href='".BASEDIR."edit_profile.php'>qui</a> per impostarla.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cerca";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "Vai al contenuto";
// No themes found
$locale['global_300'] = "Nessun tema trovato";
$locale['global_301'] = "Ci dispiace, questa pagina non pu&ograve; essere visualizzata. Per qualche motivo, nessun tema compatibile &egrave; stato trovato. Se sei l&#39;amministratore di questo sito, assicurati di aver caricato all&#39;interno della cartella <em>themes</em> un tema compatibile con PHP-Fusion 7. Dopo averlo caricato, assicurati che sia impostato correttamente nelle Impostazioni Principali.<br /><br />Se sei un visitatore o utente di questo sito, contatta l&#39;amministratore per segnalare questo problema a ".hide_email($settings['siteemail']).".";
$locale['global_302'] = "Il tema che avevi scelto &egrave; stato rimosso  dall&#39;amministratore oppure &egrave; danneggiato!";
// JavaScript Disabilitato
$locale['global_303'] = "Oh no! Dov'&egrave; <strong>JavaScript</strong>?<br />Il tuo browser non ha JavaScript abilitato oppure non supporta JavaScript. Per favore <strong>abilita JavaScript</strong> nel tuo browser per vedere correttamente questo sito,<br /> opppure <strong>installa</strong> un browser che supporti JavaScript: <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> o una versione di <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> superiore alla 6.";
// User Management
// Member status
$locale['global_400'] = "sospeso";
$locale['global_401'] = "bannato";
$locale['global_402'] = "disattivato";
$locale['global_403'] = "account chiuso";
$locale['global_404'] = "account anonimo";
$locale['global_405'] = "utente anonimo";
$locale['global_406'] = "Questo account &egrave; stato bannato per il seguente motivo:";
$locale['global_407'] = "Questo account &egrave; stato sospeso fino al ";
$locale['global_408'] = " per il seguente motivo:";
$locale['global_409'] = "Questo account &egrave; stato bannato per motivi di sicurezza.";
$locale['global_410'] = "Il motivo &egrave; il seguente: ";
$locale['global_411'] = "Questo account &egrave; stato cancellato.";
$locale['global_412'] = "Questo account &egrave; diventato anonimo, probabilmente per prolungata inattivit&agrave;.";
// Banning due to flooding
$locale['global_440'] = "Ban automatico del controllo Flood";
$locale['global_441'] = "Il tuo account su ".$settings['sitename']."&egrave; stato bannato";
$locale['global_442'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato sorpreso a inserire troppi elementi in un breve lasso di tempo dall'indirizzo IP ".USER_IP.", ed &egrave; stato bannato. Questo per prevenire sistemi automatici di inserire spam in grandi quantit&agrave;.\n
Contatta l'amministratore del sito all'indirizzo ".$settings['siteemail']." per avere l'account ripristinato o segnalare che il ban di sicurezza non &egrave; stato causato da te.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Sospensione revocata automaticamente dal sistema";
$locale['global_451'] = "Sospensione revocata su ".$settings['sitename'];
$locale['global_452'] = "Ciao USER_NAME,\n
La sospensione del tuo account su ".$settings['siteurl']." &egrave; stata revocata. Qui i dettagli per il login:\n
Nome Utente: USER_NAME
Password: nascosta per motivi di sicurezza\n
Se hai dimenticato al passowrd puoi resettarla seguendo il collegamento: LOST_PASSWORD\n\n
Saluti,\n
".$settings['siteusername'];
$locale['global_453'] = "Ciao USER_NAME,\n
La sospensione del tuo account su ".$settings['siteurl']." &egrave; stata revocata.\n\n
Saluti,\n
".$settings['siteusername'];
$locale['global_454'] = "Account riattivato su ".$settings['sitename'];
$locale['global_455'] = "Ciao USER_NAME,\n
All'ultimo accesso il tuo account &egrave; stato riattivato su ".$settings['siteurl']." e non &egrave; pi&ugrave; segnato come inattivo.\n\n
Saluti,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Vuoto";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Stai per essere reindirizzato su %s, attendi. Se non vieni reindirizzato automaticamente, clicca qui.";

// Captcha Locales
$locale['global_600'] = "Codice di validazione";

?>
