<?php

/*-------------------------------------------------------+
| Name CMS	: PHP-Fusion CMS v7.00.07
| File Directory	: root/locale/Italian/
| File Name	: register.php
| File Type		: language Italian
| Version		: 1.00.00
| Author		: Italian Staff PHP-Fusion Italy
| Last Update	: 7 marzo 2010
| Copyright©	: 2002 - 2010 Nick Jones
| Web URL	: http://www.php-fusion.co.uk/
+--------------------------------------------------------*/

$locale['400'] = "Registrati";
$locale['401'] = "Attiva account";
// Registration Errors
$locale['402'] = "Devi specificare nome utente, password e indirizzo email.";
$locale['403'] = "Il nome utente contiene caratteri non validi.";
$locale['404'] = "Le due password non coinciono.";
$locale['405'] = "Password non valida, usa solo numeri e lettere.<br />
La password deve essere lunga almeno 6 caratteri.";
$locale['406'] = "Indirizzo email non valido.";
$locale['407'] = "Il nome utente ".(isset($_POST['username']) ? $_POST['username'] : "")." &egrave; gia in uso.";
$locale['408'] = "L&#39;indirizzo email ".(isset($_POST['email']) ? $_POST['email'] : "")." &egrave; gia in uso.";
$locale['409'] = "Un account non attivo &egrave; stato registrato con l&#39;indirizzo email.";
$locale['410'] = "Codice di conferma non valido.";
$locale['411'] = "Il tuo indirizzo email o dominio email non pu&ograve; essere utilizzato.";
// Email Message
$locale['449'] = "Benvenuto su ".$settings['sitename'];
$locale['450'] = "Ciao ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Benvenuto su ".$settings['sitename'].". Ecco i tuoi dati per il login:\n
Nome Utente: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Password: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Attiva il tuo account tramite il seguente link:\n";
// Registration Success/Fail
$locale['451'] = "Registrazione completata";
$locale['452'] = "Ora puoi fare il login.";
$locale['453'] = "Un amministratore attiver&agrave; il tuo account a breve.";
$locale['454'] = "La tua registrazione &egrave; quasi completa, riceverai una email contenente i dati per il login e per attivare l&#39;account.";
$locale['455'] = "Il tuo account &egrave; stato verificato.";
$locale['456'] = "Registrazione fallita";
$locale['457'] = "Invio email fallito, contatta <a href='mailto:".$settings['siteemail']."'>l&#39;Amministratore</a>.";
$locale['458'] = "Registrazione fallita per i seguenti motivi:";
$locale['459'] = "Prego riprova";
// Register Form
$locale['500'] = "Inserisci i tuoi dati. ";
$locale['501'] = "Una email di verifica verr&agrave; inviata all&#39;indirizzo email da te specificato. ";
$locale['502'] = "I campi segnati <span style='color:#ff0000;'>*</span> devono essere compilati.
Nome Utente e Password sono case-sensitive.";
$locale['503'] = " Puoi inserire ulteriori informazioni andando su Modifica profilo dopo aver effettuato il login.";
$locale['504'] = "Codice di conferma:";
$locale['505'] = "Inserisci codice di conferma:";
$locale['506'] = "Registrati";
$locale['507'] = "Il sistema di registrazione &egrave; disabilitato.";
$locale['508'] = "Condizioni di utilizzo";
$locale['509'] = "Ho letto le <a href='".BASEDIR."print.php?type=T' target='_blank'>Condizioni di utilizzo</a> e le accetto.";
// Validation Errors
$locale['550'] = "Devi specificare un Nome utente.";
$locale['551'] = "Devi specificare una Password.";
$locale['552'] = "Devi specificare un Indirizzo email.";
?>