<?php

/*-------------------------------------------------------+
| Name CMS	: PHP-Fusion CMS v7.00.07
| File Directory	: root/locale/Italian/
| File Name	: edit_profile.php
| File Type		: language Italian
| Version		: 1.00.00
| Author		: Italian Staff PHP-Fusion Italy
| Last Update	: 13 gennaio 2010
| Copyright ©	: 2002 - 2009 Nick Jones
| Web URL	: http://www.php-fusion.co.uk/
+--------------------------------------------------------*/

// Edit Profile Title
$locale['400'] = "Modifica Profilo";

// Edit Profile Messages
$locale['410'] = "Per poter cambiare la password o l&#39;indirizzo email<br />devi inserire la password attuale per confermare le modifiche.";
$locale['411'] = "Profilo aggiornato correttamente";
$locale['412'] = "Impossibile aggiornare profilo:";

// Edit Profile Form
$locale['420'] = "Password attuale";
$locale['421'] = "Password amministrazione attuale";
$locale['422'] = "Nuova password amministrazione";
$locale['423'] = "Conferma password amministrazione";
$locale['424'] = "Aggiorna profilo";

// Update Profile Errors
$locale['430'] = "Devi specificare nome utente e indirizzo email.";
$locale['431'] = "Il nome utente contiene caratteri non validi.";
$locale['432'] = "Il nome utente ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." &egrave; gia in uso.";
$locale['433'] = "Indirizzo email non valido.";
$locale['434'] = "L&#39;indirizzo email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." &egrave; gia in uso.";
$locale['435'] = "La nuova password non coincide.";
$locale['436'] = "Password non valida, usa solo numeri e lettere.<br />La password deve essere lunga almeno 6 caratteri.";
$locale['437'] = "Devi specificare la password attuale per poter cambiare indirizzo email o password.";
$locale['438'] = "La nuova password di amministrazione non coincide.";
$locale['439'] = "La password utente e quella di amministrazione devono essere diverse.";
$locale['440'] = "Password amministrazione non valida, usa solo numeri e lettere.<br />La password di amministrazione deve essere lunga almeno 6 caratteri.";
$locale['441'] = "Devi specificare la password di amministrazione attuale prima di poterla sostituire con una nuova.";
?>