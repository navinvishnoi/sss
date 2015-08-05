<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Ihre Daten im Vereinsprofil</title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<p style="font: normal 13px/18px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Sehr geehrte Damen und Herren,</p>
Wie Sie wissen, ist Ihr Verein <?php echo $Member_Name; ?> mit einem eigenen Profil auf <a href="http://www.www.saarbruecken.de" style="color: #3366cc;">www.saarbruecken.de</a> vertreten.<br />
Sie können die Daten Ihres Vereins hier einsehen und überarbeiten: <a href="<?php echo base_url().'member_author/profile/'.$Member_App_Id; ?>" style="color: #3366cc;"><?php echo base_url().'member_author/profile/'.$Member_App_Id; ?></a><br />
<?php echo $UpdateComment; ?><br />
Mit freundlichem Gruß<br />
Ihr Saarbrücken.de Online-Team<br />
</td>
</tr>
</table>
</div>
</body>
</html>