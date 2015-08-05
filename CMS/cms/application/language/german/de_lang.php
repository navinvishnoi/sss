<?php 

$lang['Upload_logo'] = "Logo hochladen";
$lang['Delete_logo'] = "Logo löschen";
$lang['Upload_msg'] = "Maximale Größe 2MB";
$lang['Accept'] = "Eintrag / Änderungen freigeben";
$lang['Reject'] = "Eintrag/Änderungen ablehnen";
$lang['Mail'] = "Aktualisierung anfordern";
$lang['Add_Profile'] = "Verein neu anlegen";
$lang['Search'] = "Suche";
$lang['Clear_all'] = "Alle Vereine anzeigen";
$lang['delete'] = 'Löschen';
$lang['cancel'] = 'Abbrechen';
$lang['delete_btn_rfd'] = "Verein löschen";
$lang['Mailto'] = 'Verein kontaktieren';
$lang['Reject_btn'] = 'Überarbeitung anfordern';
$lang['send'] = 'Absenden';
$lang['data_updated'] = "Daten aktualisiert";
$lang['OK'] = 'OK';
$lang['back_link_text'] = 'zurück zur Liste';
$lang['No_records'] = 'Keine Einträge gefunden';

//popup msgs
$lang['Accept_After_deletion_confirm_msg'] = 'We have a deletion request for that record do you want to accept it?';
$lang['poptext_for_rfd_confirm_msg'] = "Wir haben Ihre Löschanfrage erhalten. Nach Prüfung und Bestätigung durch den Administrator wird Ihr Verein gelöscht. Bis dahin bleibt er auf saarbruecken.de noch sichtbar.";
$lang['Delete_Request_Record_Accept_Btn'] = 'Möchten Sie diesen Verein wirklich löschen? ';
$lang['Delete_Request_Record_Reject_Btn'] = 'Möchten Sie diesen Löschantrag wirklich ablehnen? Der Verein bleibt dann weiterhin sichtbar.';
$lang['Delete_notification_text'] = 'Wollen Sie diesen Verein wirklich löschen?';


// Email subjects
$lang['auth_subject_welcome'] = 'Willkommen bei %s!';
$lang['auth_subject_activate'] = 'Willkommen bei %s!';
$lang['auth_subject_update'] = 'Willkommen bei %s!';
$lang['auth_subject_forgot_password'] = 'Haben Sie ihr Passwort bei %s vergessen?';
$lang['auth_subject_reset_password'] = 'Ihr neues Passwort auf %s';
$lang['auth_subject_change_email'] = 'Ihre neue E-Mail-Adresse auf %s';
$lang['auth_subject_Add_Profile'] = 'Vielen Dank für die Eingabe Ihres Vereinsprofils auf www.saarbruecken.de';
$lang['auth_subject_Edit_Profile'] = 'Vielen Dank für die Eingabe Ihres Vereinsprofils auf www.saarbruecken.de';
$lang['auth_subject_Accepted'] = 'Ihr Eintrag im Vereinsregister auf www.saarbruecken.de wurde freigegeben';
$lang['auth_subject_Rejected'] = 'Ihr Eintrag im Vereinsregister auf www.saarbruecken.de wurde nicht freigegeben';
$lang['auth_subject_Update'] = 'Ihr Eintrag im Vereinsregister auf www.saarbruecken.de  gelöscht';
$lang['auth_subject_Reminder'] = 'Bitte prüfen und aktualisieren Sie ggf. die Daten Ihres Vereins auf www.saarbruecken.de';
$lang['auth_subject_Delete'] = 'Ihr Eintrag im Vereinsregister auf www.saarbruecken.de wurde gelöscht';
$lang['auth_subject_New_Rejected'] = 'Ihre Daten im Vereinsprofil wurden nicht übernommen';

// Email Message
//Start of Add msg. contains view link (%s)
$lang['message_Add_Profile'] = "Sehr geehrte Damen und Herren,

Vielen Dank, dass Sie auf www.saarbruecken.de die Daten Ihres Vereins eingetragen haben.
Nach Ihrer Dateneingabe werden die Änderungen von uns geprüft und freigegeben. Danach sind die aktualisierten Daten auf www.saarbruecken.de sichtbar.
Sie können die Daten Ihres Vereins hier einsehen und überarbeiten: ".base_url()."welcome/profile_view1/%s
Zukünftig werden wir Sie in regelmäßigen Abständen bitten, die Daten im Vereinsprofil zu prüfen und ggf. zu aktualisieren.
Vielen Dank für Ihre Mitarbeit.
Mit freundlichem Gruß
Ihre Saarbruecken.de Online-Redaktion";
//end of Add message
//Start of Edit msg. contains view link (%s)
$lang['message_Edit_Profile'] = "Sehr geehrte Damen und Herren,

Vielen Dank, dass Sie auf www.saarbruecken.de die Daten Ihres Vereins eingetragen haben.
Nach Ihrer Dateneingabe werden die Änderungen von uns geprüft und freigegeben. Danach sind die aktualisierten Daten auf www.saarbruecken.de sichtbar.
Sie können die Daten Ihres Vereins hier einsehen und überarbeiten: ".base_url()."welcome/profile_view1/%s
Zukünftig werden wir Sie in regelmäßigen Abständen bitten, die Daten im Vereinsprofil zu prüfen und ggf. zu aktualisieren.
Vielen Dank für Ihre Mitarbeit.
Mit freundlichem Gruß
Ihre Saarbruecken.de Online-Redaktion";
//end of edit message

//Start of Accepted msg. contain member name and edit link for that member (%s,%s,%s)
$lang['message_Accepted'] = "Sehr geehrte Damen und Herren,

vielen Dank für die Eingabe bzw. Aktualisierung der Daten Ihres Vereins '%s'.
Wir haben Ihre Eingaben geprüft und freigegeben. Damit sind die Daten nun auf www.saarbruecken.de sichtbar.

Hier können Sie die Daten Ihres Vereins einsehen
".base_url()."welcome/profile_view1/%s

Hier können Sie die Daten Ihres Vereins ändern.
".base_url()."member_author/profile/%s

Mit freundlichem Gruß 
Ihre Saarbruecken.de Online-Redaktion";
//end of Accepted message

//Start of Rejected msg. contain member name and link for that member and member App id (%s,%s,%s)
$lang['message_Rejected'] = "Sehr geehrte Damen und Herren,

vielen Dank für die Eingabe bzw. Aktualisierung der Daten Ihres Vereins '%s'.Wir haben Ihre Eingaben geprüft und nicht freigegeben. Damit bleiben die Daten auf www.saarbruecken.de unverändert.
Wir möchten Sie bitten, Ihre Eingaben zu prüfen und zu überarbeiten. Hier können Sie die Daten Ihres Vereins ändern.  
".base_url()."%s%s

Die Felder, die wir Sie bitten zu überarbeiten, sind farblich markiert. Vielen Dank für Ihre Mitarbeit.

Mit freundlichem Gruß 
Ihre Saarbruecken.de Online-Redaktion";
//end of Rejected message


//Start of Update msg. contain member name and link for that member and free text (%s,%s,%s)
$lang['message_Update'] = "Sehr geehrte Damen und Herren,
Wie Sie wissen, ist Ihr Verein '%s' mit einem eigenen Profil auf www.saarbruecken.de vertreten. 

Hier können Sie die Daten Ihres Vereins einsehen
".base_url()."welcome/profile_view1/%s

Hier können Sie die Daten Ihres Vereins ändern. 
".base_url()."member_author/profile/%s

[zusätzlicher Text………]

Mit freundlichem Gruß 
Ihre Saarbruecken.de Online-Redaktion";
//end of Update message

//Start of Delete msg. contain member name and link for that member and free text (%s)
$lang['message_Delete'] = "Sehr geehrte Damen und Herren,

wir haben Ihren Verein von www.saarbruecken.de gelöscht. Ihr Verein ist damit nicht oder nicht mehr auf www.saarbruecken.de sichtbar.

Grund für ein Löschen können z.B. unangemessene Inhalte, fehlerhafte oder sehr lückenhafte Daten sein. Sollten Sie Ihren Verein doch auf www.saarbruecken.de darstellen wollen, geben Sie die Vereinsdaten bitte erneut und möglichst komplett und korrekt ein. Andernfalls wenden Sie sich bitte mithilfe des Kontaktformulars an den Webmaster. Vielen Dank.

Mit freundlichem Gruß 
Ihre Saarbruecken.de Online-Redaktion";
//end of Delete message

//Start of Reminder msg. contain member name and link for that member App id (%s,%s)
$lang['message_Reminder'] = "Sehr geehrte Damen und Herren,
Wie Sie wissen, ist Ihr Verein '%s' mit einem eigenen Profil auf www.saarbruecken.de vertreten.
Wir erinnern die Vertreter der Vereine in regelmäßigen Abständen, die Daten im Vereinsprofil zu prüfen und ggf. zu aktualisieren.
Sie können die Daten Ihres Vereins hier einsehen und überarbeiten: ".base_url()."member_author/profile/%s
Nach Ihrer Dateneingabe werden die Änderungen von uns geprüft und freigegeben. Danach sind die aktualisierten Daten auf www.saarbruecken.de sichtbar.
Vielen Dank für Ihre Mitarbeit.
Mit freundlichem Gruß
Ihr Saarbrücken.de Online-Team";
//end of Reminder message

//Start of New Rejected msg. contain member name and link for that member and member App id (%s,%s,%s)
$lang['message_New_Rejected'] = "Sehr geehrte Damen und Herren,
Vielen Dank für die Eingabe der Daten Ihres Vereins '%s'.
Wir haben Ihre Eingaben geprüft und nicht freigegeben. Damit ist Ihr Verein auf www.saarbruecken.de noch nicht sichtbar.
Wir möchten Sie bitten, Ihre Eingaben zu prüfen und zu überarbeiten. Sie können die Daten Ihres Vereins hier einsehen und überarbeiten:
".base_url()."member_author/profile/%s
Die Felder, die wir Sie bitten zu überbeiten sind farblich markiert.

Vielen Dank für Ihre Mitarbeit. 
Mit freundlichem Gruß 
Ihre Saarbruecken.de Online-Redaktion";
//end of New Rejected message


?>