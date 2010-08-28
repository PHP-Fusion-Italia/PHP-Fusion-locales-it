<?php
$locale['email_create_subject'] = "Nuovo account creato su ";
$locale['email_create_message'] = "Ciao [USER_NAME],\n
il tuo account su ".$settings['sitename']." &egrave; stato creato.\n
Puoi effettuare il login usando i seguenti dati:\n
username: [USER_NAME]\n
password: [PASSWORD]\n\n
Grazie,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Attivazione account su ";
$locale['email_activate_message'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato attivato.\n
Adesso puoi effettuare il login con i dati che avevi scelto durante la registrazione.\n\n
Grazie,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Nuova attivazione richiesta su ".$settings['sitename'];
$locale['email_deactivate_message'] = "Ciao [USER_NAME],\n
Sono passati ben ".$settings['deactivation_period']." giorni dall'ultima volta che ti abbiamo visto su ".$settings['sitename'].". Il tuo account &egrave; stato marcato come inattivo ma tutti i tuoi dati rimangono preservati.\n
Per poter nuovamente effettuare il login, puoi riattivare il tuo account tramite:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Grazie,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Notifica ban su ".$settings['sitename'];
$locale['email_ban_message'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato bannato da ".$userdata['user_name']." con la seguente motivazione:\n
[REASON].\n
Se vuoi avere maggiori informazioni, sei pregato di contattare via email l'amministratore scrivendo a ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Notifica ban preventivo su ".$settings['sitename']."";
$locale['email_secban_message'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato bannato da ".$userdata['user_name']." a causa di attivit&agrave; malevole riscontrate sul tuo account (virus o altro).\n
Se vuoi avere maggiori informazioni, sei pregato di contattare via email l'amministratore scrivendo a ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Notifica account sospeso su ".$settings['sitename'];
$locale['email_suspend_message'] = "Ciao [USER_NAME],\n
Il tuo account su ".$settings['sitename']." &egrave; stato sospeso da ".$userdata['user_name']." fino al [DATE] con la seguente motivazione:\n
[REASON].\n
Se vuoi avere maggiori informazioni, sei pregato di contattare via email l'amministratore scrivendo a ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>
