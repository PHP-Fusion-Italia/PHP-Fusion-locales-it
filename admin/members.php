<?php
/*-------------------------------------------------------+
| Name CMS	: PHP-Fusion CMS v7.00.07
| File Directory	: root/locale/Italian/admin/
| File Name	: members.php
| File Type		: language Italian
| Version		: 1.00.00
| Author		: Italian Staff PHP-Fusion Italy
| Last Update	: 9 marzo 2010
| Copyright©	: 2002 - 2010 Nick Jones
| Web URL	: http://www.php-fusion.co.uk/
+--------------------------------------------------------*/

// Member Management Options
$locale['400'] = "Gestione utenti";
$locale['401'] = "Utente";
$locale['402'] = "Aggiungi";
$locale['403'] = "Livello utente";
$locale['404'] = "Opzioni";
$locale['405'] = "Vedi";
$locale['406'] = "Modifica";
$locale['407'] = "Attiva";
$locale['408'] = "Togli esclusione";
$locale['409'] = "Escludi";
$locale['410'] = "Elimina";
$locale['411'] = "Non sono presenti %s membri";
$locale['412'] = " che cominciano per ";
$locale['413'] = " con corrispondenza ";
$locale['414'] = "Mostra tutti";
$locale['415'] = "Cerca un utente:";
$locale['416'] = "Cerca";
// Member types
$locale['417'] = "Azione";
$locale['418'] = "Annulla";
$locale['419'] = "Ripristina";
// Ban/Unban/Delete Member
$locale['420'] = "Esclusione attivata";
$locale['421'] = "Esclusione rimossa";
$locale['422'] = "Utente eliminato";
$locale['423'] = "Sei sicuro di voler cancellare questo utente?";
$locale['424'] = "Utenti attivati";
// Edit Member Details
$locale['430'] = "Modifica utente";
$locale['431'] = "Dettagli utente aggiornati";
$locale['432'] = "Ritorna ad Amministra utenti";
$locale['433'] = "Ritorna ad home page amministrazione";
$locale['434'] = "Impossibile aggiornare dettagli utente:";
// Extra Edit Member Details form options
$locale['440'] = "Salva modifiche";
// Update Profile Errors
$locale['450'] = "Impossibile modificare amministratore primario.";
$locale['451'] = "Devi specificare nome utente e indirizzo email.";
$locale['452'] = "Il Nome utente contiene caratteri non validi.";
$locale['453'] = "Il nome utente ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." &egrave; gia in uso.";
$locale['454'] = "Indirizzo email non valido.";
$locale['455'] = "L&#39;indirizzo email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." &egrave; gia in uso.";
$locale['456'] = "Le nuove password non corrispondono.";
$locale['457'] = "Password non valida, usa solo numeri e lettere.<br />
La password deve essere lunga almeno 6 caratteri.";
$locale['458'] = "<strong>Attenzione:</strong> esecuzione script non prevista.";
// View Member Profile
$locale['470'] = "Profilo utente";
$locale['472'] = "Statistiche";
$locale['473'] = "Gruppi utente";
// Add Member Errors
$locale['480'] = "Aggiungi utente";
$locale['481'] = "L&#39;ccount utente &egrave; stato creato.";
$locale['482'] = "L&#39;ccount utente non pu&ograve; essere creato.";
// Registro sospensioni
$locale['510s'] = "Registro sospensioni per ";
$locale['511s'] = "Non ci sono record presenti per questo utente."
$locale['512s'] = "Eventi precedenti di ";
$locale['513'] = "Num."; // as in number
$locale['514'] = "Data";
$locale['515'] = "Motivazione";
$locale['516'] = "Chi:";
$locale['517'] = "Azione del sistema";
$locale['518'] = "Torna al profilo utente";
$locale['519'] = "Registro sospensioni per questo utente ";
$locale['520'] = "Lifted: ";
$locale['521'] = "IP: ";
$locale['522'] = "Non ancora riammesso";
$locale['540'] = "Errore";
$locale['541'] = "Errore: devi specificare una motivazione, &egrave; obbligatoria!!";
$locale['542'] = "Errore: devi specificare una motivazione, &egrave; obbligatoria!!";
// User Management Admin
$locale['550'] = "Susospendi utente: ";
$locale['551'] = "Durata in giorni:";
$locale['552'] = "Motivazione:";
$locale['553'] = "Sospendi";
$locale['554'] = "Non ci sono record presenti per questo utente.";
$locale['555'] = "Se vuoi impedire l'accesso a questo utente, fai click su 'Ban'";
$locale['556'] = "Aumenta sospensione per l'utente: ";
$locale['557'] = "Aumenta sospensione";
$locale['558'] = "Aumenta ban per l'utente: ";
$locale['559'] = "Aumenta ban ";
$locale['560'] = "Revoca Ban di Sicurezza Utente: ";
$locale['561'] = "Revoca Ban di Sicurezza";
$locale['562'] = "Ban Utente: ";
$locale['563'] = "Ban di Sicurezza Utente: ";
$locale['585a'] = "Devi specificare un motivo per cui banni o togli il ban ";

$locale['566'] = "Ban revocato";
$locale['568'] = "Ban di Sicurazza imposto";
$locale['569'] = "Ban di Sicurezza revocato";
$locale['572'] = "Utente sospeso";
$locale['573'] = "Sospensione revocata";
$locale['574'] = "Utente disattivato";
$locale['575'] = "Utente riattivato";
$locale['576'] = "Account cancellato";
$locale['577'] = "Cancellazione Account rimossa";
$locale['578'] = "Account cancellato e reso anonimo";
$locale['579'] = "Account anonimo rimosso";
$locale['580'] = "Disattiva Utenti Non Attivi";
$locale['581'] = "Sono presenti pi&ugrave; di 50 utenti non attivi e devi eseguire il processo di disattivazione <strong>%d volte</strong>.";
$locale['582'] = "Riattiva";
$locale['583'] = "Riabilita";
$locale['584'] = "Seleziona nuovo stato";
$locale['585'] = "Questo Utente era stato bannato per motivi di sicurezza! Sei sicuro di voler rimuovere il ban a questo utente ora?";

$locale['590'] = "Sospeso";
$locale['591'] = "Rimuovi Sospensione";
$locale['592'] = "sospendendo";
$locale['593'] = " togliendo la sospensione";
$locale['594'] = "Specifica un motivo per cui stai ";
$locale['595'] = " l'utente ";
$locale['596'] = "Durata:";

$locale['600'] = "Ban di Sicurezza";
$locale['601'] = "bannando";
$locale['602'] = "Togli Ban";
$locale['603'] = "togliendo il ban";
$locale['604'] = "Motivo:";
// Deactivation System
$locale['610'] = "<strong>%d Utente(i)</strong> non hanno fatto il login per <strong>%d giorno(i)</strong> e sono stati segnati come non attivi. 
Disattivando questi utenti hanno <strong>%d giorno(i)</strong> prima di essere %s.";
$locale['611'] = "Ricorda che alcuni utenti possono aver inviato dei contenuti come messaggi nel forum, commenti, immagini [..]
questi verranno cancellati quando gli utenti disattivati saranno eliminati.";
$locale['612'] = "utente";
$locale['613'] = "utenti";
$locale['614'] = "Disattiva";
$locale['615'] = "cancellato in modo permanente";
$locale['616'] = "rendendo anonimo";
$locale['617'] = "Attenzione:";
$locale['618'] = "Si raccomanda di non cancellare gli utenti disattivati ma di renderli anonimi in modo da non perdere dati importanti!";
$locale['619'] = "Puoi farlo da <a href='".ADMIN."settings_users.php".$aidlink."'>qui</a>.";
$locale['620'] = "rendendo anonimo";
$locale['621'] = "Disattivazione automatica degli utenti non attivi.";
?>
