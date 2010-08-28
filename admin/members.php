<?php
// TODO
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
$locale['560'] = "Lift Security Ban of User: ";
$locale['561'] = "Lift Security Ban";
$locale['562'] = "Ban User: ";
$locale['563'] = "Security Ban User: ";
$locale['585a'] = "Please specify a reason for why you are banning or unbanning";

$locale['566'] = "Ban lifted";
$locale['568'] = "Security Ban imposed";
$locale['569'] = "Security Ban lifted";
$locale['572'] = "Member suspended";
$locale['573'] = "Suspension lifted";
$locale['574'] = "Member deactivated";
$locale['575'] = "Member reactivated";
$locale['576'] = "Account cancelled";
$locale['577'] = "Account cancellation undone";
$locale['578'] = "Account cancelled and anonymized";
$locale['579'] = "Account anonymization undone";
$locale['580'] = "Deactivate Inactive Members";
$locale['581'] = "You have more then 50 inactive users and will have to run the";
$locale['582'] = "Reactivate";
$locale['583'] = "Re-instate";
$locale['584'] = "Select new status";
$locale['585'] = "This Member was originally banned for security reasons! Are y$";

$locale['590'] = "Suspend";
$locale['591'] = "Unsuspend";
$locale['592'] = "suspending";
$locale['593'] = "unsuspending";
$locale['594'] = "Please specify a reason for why you are ";
$locale['595'] = " the user ";
$locale['596'] = "Duration:";

$locale['600'] = "Security ban";
$locale['601'] = "security banning";
$locale['602'] = "Unban";
$locale['603'] = "unbanning";
$locale['604'] = "Reason:";
// Deactivation System
$locale['610'] = "<strong>%d user(s)</strong> have not logged in for <strong>%d$
By deactivating these users they will have <strong>%d day(s)</strong> before th$";
$locale['611'] = "Please note that some users may have submitted content to you$
these will be deleted when deactivated users are beeing deleted.";
$locale['612'] = "user";
$locale['613'] = "users";
$locale['614'] = "Deactivate";
$locale['615'] = "permanently deleted";
$locale['616'] = "anonymize";
$locale['617'] = "Warning:";
$locale['618'] = "It is strongly recommended to change deactivation action to a$";
$locale['619'] = "You can do so <a href='".ADMIN."settings_users.php".$aidlink.$;
$locale['620'] = "anonymize";
$locale['621'] = "Automatic deactivation of inactive users.";
?>
