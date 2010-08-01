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
$locale['400'] = "Utenti";
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
$locale['417'] = "Utenti";
$locale['418'] = "Non attivati";
$locale['419'] = "Esclusi";
// Ban/Unban/Delete Member
$locale['420'] = "Esclusione attivata";
$locale['421'] = "Esclusione rimossa";
$locale['422'] = "Utente eliminato";
$locale['423'] = "Sei sicuro di voler cancellare questo utente?";
$locale['424'] = "Utenti attivati";
$locale['425'] = "Account registrato sul sito ";
$locale['426'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato attivato.\n
Ora puoi fare il login utilizzando come nome utente e password quelle da te scelte.\n\n
Saluti,
".$settings['siteusername'];
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
?>
