<!DOCTYPE html>
<!-- saved from url=(0096)http://www.saarbruecken.de/leben_in_saarbruecken/sport_und_vereine/sportvereine_und_vereinssuche -->
<html lang="de" class=" js geolocation backgroundsize borderradius" data-rsevent-id="rs_256655"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" src="menu171.js"></script>
    <meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">
	<script>(function(w) { var dpr=((w.devicePixelRatio===undefined)?1:w.devicePixelRatio);if(!!w.navigator.standalone){ var r=new XMLHttpRequest();r.open('GET', '/media/set_dpr/'+dpr,false);r.send() } else { document.cookie='devicePixelRatio='+dpr+'; path=/' } } )(window)</script>
	 <?php include("include/files.php"); ?>
<style>
.button{ 
width: 150px;
 padding: 10px; 
 background-color: #FF8C00; 
 box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2);
  font-weight:bold; text-decoration:none;
   }
#cover{ 
position:fixed; top:0; 
left:0; background:rgba(0,0,0,0.6);
z-index:5; width:100%; 
height:100%;
display:none;
}
#mailScreen {
height:380px;
width:340px;
margin:0 auto; 
position:relative; 
z-index:10; display:none;
background: url(nature.jpg)repeat;
border:5px solid #cccccc; 
border-radius:10px;
} 
#mailScreen:target, #mailScreen:target + #cover{ display:block; opacity:2; }
.cancel {
display:block;
position:absolute;
top:3px; right:2px;
background:rgb(245,245,245);
color:red; height:30px;
width:35px;
font-size:30px;
text-decoration:none;
text-align:center;
font-weight:bold; 
}
</style>
</head>

<body class="has-background" data-rsevent-id="rs_208437" onload="myFunction()">
    <?php include("include/logo.php"); ?>
    <?php include("include/header.php"); ?>

<div id="goog-gt-tt" class="skiptranslate" dir="ltr">
<div style="padding: 8px;">
<div><div class="logo">
<img src="img/translate-32.png" width="20" height="20">
</div></div>
</div>
<div class="top" style="padding: 8px; float: left; width: 100%;">
<h1 class="title gray">Original text</h1>
</div>
<div class="middle" style="padding: 8px;">
<div class="original-text"></div>
</div>
<div class="bottom" style="padding: 8px;">
<div class="activity-links">
<span class="activity-link">Contribute a better translation</span>
<span class="activity-link"></span>
</div>
<div class="started-activity-container">
<hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
<div class="activity-root"></div>
</div>
</div>
<div class="status-message" style="display: none;"></div>
</div>
	<div class="affix-spacer affix" data-spy="affix" data-offset-top="150"></div>

<div class="container l-content">
<?php
$MemberCurrentMail='';
$member_update_version='';
 foreach($getmemberbyid as $value) { 
 $member_update_version=$value->Member_Relese_version;
 ?>
	
	<div class="row component component-headline">
		<div class="col-xs-8 col-lg-10">
			<h1>
				
				<span class="name"><a href="http://<?php echo $value->Member_Website; ?>"><?php echo $value->Member_Name; ?></a></span>
			</h1>
		</div>
		<div class="col-xs-4 col-lg-2">
			<div class="btn-group pull-right">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="row" >
		<div class="panel-body" style="margin-left:-45px;">
             
                 <div class=" col-md-12 col-lg-12" style="margin-left:-15px;">
                     <?php if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>".$error['error']."</span>";  } ?>

              <div class="col-md-7 col-lg-7">   
             <form method="post"> <table class="table">
              <tr>
              <th></th>
              <th><h2>Aktuelles Profil</h2></th>
              </tr>
              <tr>
              <td class=" col-md-5 col-lg-5"><label class="control-label" for="inputName">Vereinsname*</label></td>
              <td>
              <div class="controls" >
              <input type="text"  id="BMember_Name" class="form-control" name="Member_Name" readonly value="<?php echo $value->Member_Name; ?>" >
              </div>
              </td>
              </tr>
               <tr>
              <td><label class="control-label" for="inputName">Vereinstyp*</label></td>
              <td>
              <div class="controls" >
             <select name="Member_Type" id="BMember_Type" class="form-control" readonly>
                <option value="">Vereinstyp</option>
                <option value="Sport" <?php if($value->Member_Type=='Sport') echo 'selected';?> >Sport</option>
                <option value="Kunst" <?php if($value->Member_Type=='Kunst') echo 'selected';?>>Kunst</option>
                <option value="Sonstige" <?php if($value->Member_Type=='Sonstige') echo 'selected';?>>Sonstige</option>
             </select>
              </div>
              </td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">Website*</label></td>
              
              <td>
              <div class="controls" ><a href="<?php echo $value->Member_Website; ?>" style="background-color:#eee;"  class="form-control" target="_blank"><?php echo $value->Member_Website; ?></a>
              <input type="hidden"  id="BMember_Website" class="form-control" name="Member_Website" readonly value="<?php echo $value->Member_Website; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Straße</label></td>
              <td>
              <div class="controls" >
              <input type="text"  id="BMember_Address_Street" class="form-control" name="Member_Address_Street" readonly value="<?php echo $value->Member_Address_Street; ?>" >
              </div>
              </td>
              
              </tr>
              <tr>
              <td><label class="control-label" for="inputName">Hausnummer</label></td>
              <td>
              <div class="controls" >
              <input type="text"  id="BMember_House_No" class="form-control" name="Member_House_No" readonly value="<?php echo $value->Member_House_No; ?>" >
              </div>
              </td>
              
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">PLZ*</label></td>
              <td>
              <div class="controls" >
		      <input type="text"  id="BMember_ZIP" class="form-control" name="Member_ZIP" readonly value="<?php echo $value->Member_ZIP; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Ort</label>
              </td>
              <td>
              <div class="controls" >
              <input type="text"  id="BMember_City" class="form-control" name="Member_City" readonly value="<?php echo $value->Member_City; ?>" >
              </div></td>
              
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">Stadtteil</label>
              </td>
              <td>
              <div class="controls" >
				<select name="Member_Dist" id="Member_Dist"  class="form-control" readonly>
                 <option value="" selected>Stadtteil</option>
                 <option value="Alt-Saarbrücken"<?php if($value->Member_Dist=='Alt-Saarbrücken') echo 'selected';?>>Alt-Saarbrücken </option>
                <option value="Malstatt"<?php if($value->Member_Dist=='Malstatt') echo 'selected';?>>Malstatt</option>
                <option value="St. Johann"<?php if($value->Member_Dist=='St. Johann') echo 'selected';?>>St. Johann</option>
                <option value="Eschberg"<?php if($value->Member_Dist=='Eschberg') echo 'selected';?>>Eschberg</option>
                <option value="Sankt Arnual"<?php if($value->Member_Dist=='Sankt Arnual') echo 'selected';?>>Sankt Arnual</option>
                <option value="Gersweiler"<?php if($value->Member_Dist=='Gersweiler') echo 'selected';?>>Gersweiler</option>
                <option value="Klarenthal"<?php if($value->Member_Dist=='Klarenthal') echo 'selected';?>>Klarenthal</option>
                <option value="Altenkessel"<?php if($value->Member_Dist=='Altenkessel') echo 'selected';?>>Altenkessel</option>
                <option value="Burbach"<?php if($value->Member_Dist=='Burbach') echo 'selected';?>>Burbach</option>
                <option value="Dudweiler"<?php if($value->Member_Dist=='Dudweiler') echo 'selected';?>>Dudweiler</option>
                <option value="Jägersfreude"<?php if($value->Member_Dist=='Jägersfreude') echo 'selected';?>>Jägersfreude</option>
                <option value="Herrensohr"<?php if($value->Member_Dist=='Herrensohr') echo 'selected';?>>Herrensohr</option>
                <option value="Scheidt"<?php if($value->Member_Dist=='Scheidt') echo 'selected';?>>Scheidt</option>
                <option value="Schafbrücke"<?php if($value->Member_Dist=='Schafbrücke') echo 'selected';?>>Schafbrücke</option>
                 <option value="Bischmisheim"<?php if($value->Member_Dist=='Bischmisheim') echo 'selected';?>>Bischmisheim</option>
                 <option value="Ensheim"<?php if($value->Member_Dist=='Ensheim') echo 'selected';?>>Ensheim</option>
                 <option value="Brebach-Fechingen"<?php if($value->Member_Dist=='Brebach-Fechingen') echo 'selected';?>>Brebach-Fechingen</option>
                 <option value="Eschringen"<?php if($value->Member_Dist=='Eschringen') echo 'selected';?>>Eschringen</option>
                 <option value="Güdingen"<?php if($value->Member_Dist=='Güdingen') echo 'selected';?>>Güdingen</option>
                 <option value="Bübingen"<?php if($value->Member_Dist=='Bübingen') echo 'selected';?>>Bübingen</option>
                  </select>
               </div></td>
              
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Land</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMember_Country" class="form-control" name="Member_Country" readonly value="<?php echo $value->Member_Country; ?>" >
              </div></td>
              </tr>
              
              <tr>
              <td>
              <label class="control-label" for="inputName">Vorname Ansprechpartner*</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_name" class="form-control" name="MA_name" readonly value="<?php echo $value->MA_name; ?>" >
              </div>
              </td>
              </tr>
               <tr>
              <td>
              <label class="control-label" for="inputName">Name Ansprechpartner*</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_first_name" class="form-control" name="MA_first_name" readonly value="<?php echo $value->MA_first_name; ?>" >
              </div>
              </td>
              </tr>
             <tr>
              <td><label class="control-label" for="inputName">Position*</label></td>
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_position" class="form-control" name="MA_position" readonly value="<?php echo $value->MA_position; ?>" >
              </div>
              </td>
              
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Straße</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_street_no" class="form-control" name="MA_street_no" readonly value="<?php echo $value->MA_street_no; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Hausnummer</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_house_no" class="form-control" name="MA_house_no" readonly value="<?php echo $value->MA_house_no; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">PLZ*</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_zip" class="form-control" name="MA_zip" readonly value="<?php echo $value->MA_zip; ?>" >
              </div>
              </td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">City</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_city" class="form-control" name="MA_city" readonly value="<?php echo $value->MA_city; ?>" >
              </div>
              </td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">Stadtteil</label></td>
              
              <td>
              <div class="controls" >
				<select name="MA_dist" id="BMA_dist"  class="form-control" readonly>
                 <option value="" selected>Stadtteil</option>
                 <option value="Alt-Saarbrücken"<?php if($data->Member_Dist=='Alt-Saarbrücken') echo 'selected';?>>Alt-Saarbrücken </option>
                <option value="Malstatt"<?php if($data->Member_Dist=='Malstatt') echo 'selected';?>>Malstatt</option>
                <option value="St. Johann"<?php if($data->Member_Dist=='St. Johann') echo 'selected';?>>St. Johann</option>
                <option value="Eschberg"<?php if($data->Member_Dist=='Eschberg') echo 'selected';?>>Eschberg</option>
                <option value="Sankt Arnual"<?php if($data->Member_Dist=='Sankt Arnual') echo 'selected';?>>Sankt Arnual</option>
                <option value="Gersweiler"<?php if($data->Member_Dist=='Gersweiler') echo 'selected';?>>Gersweiler</option>
                <option value="Klarenthal"<?php if($data->Member_Dist=='Klarenthal') echo 'selected';?>>Klarenthal</option>
                <option value="Altenkessel"<?php if($data->Member_Dist=='Altenkessel') echo 'selected';?>>Altenkessel</option>
                <option value="Burbach"<?php if($data->Member_Dist=='Burbach') echo 'selected';?>>Burbach</option>
                <option value="Dudweiler"<?php if($data->Member_Dist=='Dudweiler') echo 'selected';?>>Dudweiler</option>
                <option value="Jägersfreude"<?php if($data->Member_Dist=='Jägersfreude') echo 'selected';?>>Jägersfreude</option>
                <option value="Herrensohr"<?php if($data->Member_Dist=='Herrensohr') echo 'selected';?>>Herrensohr</option>
                <option value="Scheidt"<?php if($data->Member_Dist=='Scheidt') echo 'selected';?>>Scheidt</option>
                <option value="Schafbrücke"<?php if($data->Member_Dist=='Schafbrücke') echo 'selected';?>>Schafbrücke</option>
                 <option value="Bischmisheim"<?php if($data->Member_Dist=='Bischmisheim') echo 'selected';?>>Bischmisheim</option>
                 <option value="Ensheim"<?php if($data->Member_Dist=='Ensheim') echo 'selected';?>>Ensheim</option>
                 <option value="Brebach-Fechingen"<?php if($data->Member_Dist=='Brebach-Fechingen') echo 'selected';?>>Brebach-Fechingen</option>
                 <option value="Eschringen"<?php if($data->Member_Dist=='Eschringen') echo 'selected';?>>Eschringen</option>
                 <option value="Güdingen"<?php if($data->Member_Dist=='Güdingen') echo 'selected';?>>Güdingen</option>
                 <option value="Bübingen"<?php if($data->Member_Dist=='Bübingen') echo 'selected';?>>Bübingen</option>
                 
                 </select>               </div>
              </td>
              </tr>
              <tr>
              <td>
              <label class="control-label" for="inputName">Telefon</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_phone" class="form-control" name="MA_phone" readonly value="<?php echo $value->MA_phone; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td><label class="control-label" for="inputName">Handy</label></td>
              
              <td>
              <div class="controls" >
              <input type="text"  id="BMA_mobile" class="form-control" name="MA_mobile" readonly value="<?php echo $value->MA_mobile; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <label class="control-label" for="inputName">Email*</label></td>
              <td>
              <div class="controls" ><a href="mailto:<?php echo $MemberCurrentMail=$value->MA_email; ?>" style="background-color:#eee;" class="form-control"><?php echo $value->MA_email; ?></a>
              <input type="hidden"  id="BMA_email" class="form-control" name="MA_email" readonly value="<?php echo $value->MA_email; ?>" >
              </div>
              </td>
              
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Facebook </label></td>
              
               <td>
               <div class="controls" ><a href="<?php echo $value->Member_FB_Address; ?>" style="background-color:#eee;" class="form-control"><?php echo $value->Member_FB_Address; ?></a>
               <input type="hidden"  id="BMember_FB_Address" class="form-control" readonly name="Member_FB_Address" value="<?php echo $value->Member_FB_Address; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Twitter </label></td>
               
               <td>
               <div class="controls" ><a href="<?php echo $value->Member_Twtr_Address; ?>" style="background-color:#eee;" class="form-control"><?php echo $value->Member_Twtr_Address; ?></a>
               <input type="hidden"  id="BMember_Twtr_Address" class="form-control" readonly name="Member_Twtr_Address" value="<?php echo $value->Member_Twtr_Address; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Multiple Sports</label></td>
               
               <td>
               <div class="controls" >
               <input type="text"  id="BMember_Multiple_Sports" class="form-control" readonly name="Member_Multiple_Sports" 
               value="<?php echo $value->Member_Multiple_Sports; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Beschreibung*</label></td>
               <td> <div class="controls" > <textarea cols="35"  rows="10" id="BMember_Desc" readonly class="form-control">
			   <?php echo $value->Member_Desc; ?></textarea></div> </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Club logo</label></td>
               <td>  
               <div style="width:100px;height:100px;margin-top:10px; border:solid 5px #fbeacd;" class="text-center">
               <img src="<?php echo asset_url()."img/Uploadlogos/".$value->Member_logo; ?>" width="90" height="90">
               </div>
               </td>
               </tr>
                <tr>
               <td>&nbsp;</td>
               <td>&nbsp;  
              
               </td>
               </tr>
               </table>
               </form>
               </div>
               <?php } ?>
               <?php foreach($getmemberlogbyid as $data) {
				   
				   $style="style='font-weight:bold;'"; ?>
             
              <div class=" col-md-5 col-lg-5">
              <form action="<?php echo base_url()."admin/Accept"; ?>" method="post" name="Form" enctype="multipart/form-data">
              <table class="table">
              <tr>
              <th><h2>Geändertes Profil</h2></th>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Name" class="form-control" name="Member_Name" value="<?php echo $data->Member_Name; ?>" >
              <input type="hidden"  id="inputName" class="form-control" name="Member_App_Id" value="<?php echo $data->Member_App_Id; ?>" >
                <input type="hidden"  id="Member_log_id" class="form-control" name="Member_log_id" value="<?php echo $data->Member_log_id; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls  col-md-12 col-lg-12" >
               <select name="Member_Type" id="Member_Type" class="form-control">
                <option value="">Vereinstyp</option>
                <option value="Sport" <?php if($data->Member_Type=='Sport') echo 'selected';?> >Sport</option>
                <option value="Kunst" <?php if($data->Member_Type=='Kunst') echo 'selected';?>>Kunst</option>
                <option value="Sonstige" <?php if($data->Member_Type=='Sonstige') echo 'selected';?>>Sonstige</option>
             </select>
              </div>
              </td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Website" class="form-control" name="Member_Website" value="<?php echo $data->Member_Website; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls  col-md-12 col-lg-12" >
              <input type="text"  id="Member_Address_Street" class="form-control"  name="Member_Address_Street" value="<?php echo $data->Member_Address_Street; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls  col-md-12 col-lg-12" >
              <input type="text"  id="Member_House_No" class="form-control" name="Member_House_No" value="<?php echo $data->Member_House_No; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
		      <input type="text"  id="Member_ZIP" class="form-control" name="Member_ZIP" value="<?php echo $data->Member_ZIP; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_City" class="form-control" name="Member_City" value="<?php echo $data->Member_City; ?>" >
              </div>
              </td>
              </tr>
             <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
 				<select name="Member_Dist" id="Member_Dist"  class="form-control">
                 <option value="" selected>Stadtteil</option>
                 <option value="Alt-Saarbrücken"<?php if($data->Member_Dist=='Alt-Saarbrücken') echo 'selected';?>>Alt-Saarbrücken </option>
                <option value="Malstatt"<?php if($data->Member_Dist=='Malstatt') echo 'selected';?>>Malstatt</option>
                <option value="St. Johann"<?php if($data->Member_Dist=='St. Johann') echo 'selected';?>>St. Johann</option>
                <option value="Eschberg"<?php if($data->Member_Dist=='Eschberg') echo 'selected';?>>Eschberg</option>
                <option value="Sankt Arnual"<?php if($data->Member_Dist=='Sankt Arnual') echo 'selected';?>>Sankt Arnual</option>
                <option value="Gersweiler"<?php if($data->Member_Dist=='Gersweiler') echo 'selected';?>>Gersweiler</option>
                <option value="Klarenthal"<?php if($data->Member_Dist=='Klarenthal') echo 'selected';?>>Klarenthal</option>
                <option value="Altenkessel"<?php if($data->Member_Dist=='Altenkessel') echo 'selected';?>>Altenkessel</option>
                <option value="Burbach"<?php if($data->Member_Dist=='Burbach') echo 'selected';?>>Burbach</option>
                <option value="Dudweiler"<?php if($data->Member_Dist=='Dudweiler') echo 'selected';?>>Dudweiler</option>
                <option value="Jägersfreude"<?php if($data->Member_Dist=='Jägersfreude') echo 'selected';?>>Jägersfreude</option>
                <option value="Herrensohr"<?php if($data->Member_Dist=='Herrensohr') echo 'selected';?>>Herrensohr</option>
                <option value="Scheidt"<?php if($data->Member_Dist=='Scheidt') echo 'selected';?>>Scheidt</option>
                <option value="Schafbrücke"<?php if($data->Member_Dist=='Schafbrücke') echo 'selected';?>>Schafbrücke</option>
                 <option value="Bischmisheim"<?php if($data->Member_Dist=='Bischmisheim') echo 'selected';?>>Bischmisheim</option>
                 <option value="Ensheim"<?php if($data->Member_Dist=='Ensheim') echo 'selected';?>>Ensheim</option>
                 <option value="Brebach-Fechingen"<?php if($data->Member_Dist=='Brebach-Fechingen') echo 'selected';?>>Brebach-Fechingen</option>
                 <option value="Eschringen"<?php if($data->Member_Dist=='Eschringen') echo 'selected';?>>Eschringen</option>
                 <option value="Güdingen"<?php if($data->Member_Dist=='Güdingen') echo 'selected';?>>Güdingen</option>
                 <option value="Bübingen"<?php if($data->Member_Dist=='Bübingen') echo 'selected';?>>Bübingen</option>
                  </select>
                  </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Country" class="form-control" name="Member_Country" value="<?php echo $data->Member_Country; ?>" >
              </div>
              </td>
              </tr>
              
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_name" class="form-control" name="MA_name" value="<?php echo $data->MA_name; ?>" >
              </div>
              </td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_first_name" class="form-control" name="MA_first_name" value="<?php echo $data->MA_first_name; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_position" class="form-control" name="MA_position" value="<?php echo $data->MA_position; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_street_no" class="form-control" name="MA_street_no" value="<?php echo $data->MA_street_no; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_house_no" class="form-control" name="MA_house_no" value="<?php echo $data->MA_house_no; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_zip" class="form-control" name="MA_zip" value="<?php echo $data->MA_zip; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_city" class="form-control" name="MA_city" value="<?php echo $data->MA_city; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
<select name="Member_Dist" id="Member_Dist"  class="form-control">
                 <option value="" selected>Stadtteil</option>
                 <option value="Alt-Saarbrücken"<?php if($data->Member_Dist=='Alt-Saarbrücken') echo 'selected';?>>Alt-Saarbrücken </option>
                <option value="Malstatt"<?php if($data->Member_Dist=='Malstatt') echo 'selected';?>>Malstatt</option>
                <option value="St. Johann"<?php if($data->Member_Dist=='St. Johann') echo 'selected';?>>St. Johann</option>
                <option value="Eschberg"<?php if($data->Member_Dist=='Eschberg') echo 'selected';?>>Eschberg</option>
                <option value="Sankt Arnual"<?php if($data->Member_Dist=='Sankt Arnual') echo 'selected';?>>Sankt Arnual</option>
                <option value="Gersweiler"<?php if($data->Member_Dist=='Gersweiler') echo 'selected';?>>Gersweiler</option>
                <option value="Klarenthal"<?php if($data->Member_Dist=='Klarenthal') echo 'selected';?>>Klarenthal</option>
                <option value="Altenkessel"<?php if($data->Member_Dist=='Altenkessel') echo 'selected';?>>Altenkessel</option>
                <option value="Burbach"<?php if($data->Member_Dist=='Burbach') echo 'selected';?>>Burbach</option>
                <option value="Dudweiler"<?php if($data->Member_Dist=='Dudweiler') echo 'selected';?>>Dudweiler</option>
                <option value="Jägersfreude"<?php if($data->Member_Dist=='Jägersfreude') echo 'selected';?>>Jägersfreude</option>
                <option value="Herrensohr"<?php if($data->Member_Dist=='Herrensohr') echo 'selected';?>>Herrensohr</option>
                <option value="Scheidt"<?php if($data->Member_Dist=='Scheidt') echo 'selected';?>>Scheidt</option>
                <option value="Schafbrücke"<?php if($data->Member_Dist=='Schafbrücke') echo 'selected';?>>Schafbrücke</option>
                 <option value="Bischmisheim"<?php if($data->Member_Dist=='Bischmisheim') echo 'selected';?>>Bischmisheim</option>
                 <option value="Ensheim"<?php if($data->Member_Dist=='Ensheim') echo 'selected';?>>Ensheim</option>
                 <option value="Brebach-Fechingen"<?php if($data->Member_Dist=='Brebach-Fechingen') echo 'selected';?>>Brebach-Fechingen</option>
                 <option value="Eschringen"<?php if($data->Member_Dist=='Eschringen') echo 'selected';?>>Eschringen</option>
                 <option value="Güdingen"<?php if($data->Member_Dist=='Güdingen') echo 'selected';?>>Güdingen</option>
                 <option value="Bübingen"<?php if($data->Member_Dist=='Bübingen') echo 'selected';?>>Bübingen</option>
                  </select>              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_phone" class="form-control" name="MA_phone" value="<?php echo $data->MA_phone; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_mobile" class="form-control" name="MA_mobile" value="<?php echo $data->MA_mobile; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_email" class="form-control" name="MA_email" value="<?php echo $data->MA_email; ?>" >
              </div>
              </td>
              </tr>
              <tr>
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="Member_FB_Address" class="form-control" name="Member_FB_Address" value="<?php echo $data->Member_FB_Address; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="Member_Twtr_Address" class="form-control" name="Member_Twtr_Address" value="<?php echo $data->Member_Twtr_Address; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td>
               <div class="controls  col-md-12 col-lg-12" >
               <input type="text"  id="Member_Multiple_Sports" class="form-control" name="Member_Multiple_Sports" value="<?php echo $data->Member_Multiple_Sports; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td> <div class="controls  col-md-12 col-lg-12" > 
                   <textarea  cols="35" rows="10" class="form-control" id="Member_Desc" name="Member_Desc">
                   <?php echo $data->Member_Desc; ?></textarea>
                   </div> </td>
               </tr>
               <tr>
               <td>  
               <div  style="width:100px;height:100px;margin-top:10px;margin-left:13px; border:solid 5px #fbeacd;" class="text-center">
              <div id="showbox"> <img src="<?php echo asset_url()."img/Uploadlogos/".$data->Member_logo; ?>" width="90" height="90">
             <input type="hidden" name="filename" value="<?php echo $data->Member_logo ?>">
             </div>
              </div> 
               </td>
               </tr>
               <tr>
               <td style="padding-left:10px;">  
               <div class="fileUpload btn">  
                <span class="text-center">Upload logo*</span>
                <input type="file" class="upload" name="logo" id="logo" onChange="uploadImage()"></div>
                <br><small style="margin-left:10px;">(Maxmum size of image 500x500 and 2Mb)</small> 
               </td>
               </tr>
              
               </table>
               </div>

            <div class="col-xs-offset-10">
                   <?php if($member_update_version!=$data->Member_log_id) {  ?><button type="submit" title="Accept" class="np" onclick="return validateForm()">
                   <img src="<?php echo asset_url(); ?>img/orange_icons/accept_24.png"></button> 
				   <?php }else { ?>
                   <a href="#aboutModal" data-toggle="modal" data-target="#myModal" onclick="return validateForm()">
                  <button title="Accept" class="np" > <img src="<?php echo asset_url(); ?>img/orange_icons/accept_24.png" ></button></a>
                   <?php } ?></form>
                 <a href="<?php echo base_url().'admin/reject/'.$data->Member_log_id; ?>">
                  <button title="Reject" class="np"><img src="<?php echo asset_url(); ?>img/orange_icons/reject_24.png"></button></a>
                     <a href="#mailModal" data-toggle="modal" data-target="#mailModal" >
                     <button title="Mail" class="np"><img src="<?php echo asset_url(); ?>img/orange_icons/mail_24.png" ></button></a>
                
                  </div>      
             </div>
         
<!--   <div id="mailScreen"><span><h4 style="color:#FFF;">No updates availabe for that profile.</h4></span><a href="#" class="cancel">&times;</a></div>       
--> 
<!-- Modal Start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h4>
                    </div>
                     <div class="panel-body">
                     <div class="modal-body" style="padding: 5px;">
                          <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   No Updates for this profile.
                                </div>
                              </div>
                         <div class="panel-footer" style="margin-bottom:-14px;">
                             <!--<span class="glyphicon glyphicon-user"></span>-->
                            <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</div><!-- Modal Close -->
	<!-- Modal Start -->
<div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h4>
                    </div>
                    
                    <form action="<?php echo base_url().'admin/updateMail'; ?>" method="post">
                    <div class="panel-body">
                    <div class="modal-body" style="padding: 5px;">
                       <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12">
                                <input type="hidden" name="MemberCurrentMail" value="<?php echo $MemberCurrentMail; ?>">
                          <input type="hidden"  id="Member_App_Id1" class="form-control" name="Member_App_Id1" value="<?php echo $data->Member_App_Id; ?>" >
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="UpdateComment" required></textarea>
                                </div>
                            </div>
                       </div>
                        <div class="panel-footer" style="margin-bottom:-14px;">
                        	 <button style="float: left;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                            <input style="float: right;" type="submit" name="UpdateMailSubmit" class="btn btn-default btn-close" value="Submit">
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                          </div> 
                    </div></form>
                </div>
            </div>
</div><!-- Modal Close -->	
		<?php //include("include/sidebar.php"); ?>

	</div>
    <?php } ?> 
</div>


<div class="background-main-image subpage" style="background-image: url(&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;, sizingMethod=&#39;scale&#39;); -ms-filter: " progid:dximagetransform.microsoft.alphaimageloader(src="/cache/media/attachments/2013/11/x800_y533_c5f809_11.png" ,="" sizingmethod="scale" )";"="">
	<div class="logo-background"></div>
</div>

<?php include("include/footer.php"); ?>


<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
<iframe id="_atssh501" title="AddThis utility frame" src="sh186.html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe>
</div>
<script type="text/javascript">


function validateForm()
{

var Member_Name = document.getElementById("Member_Name").value;
var Member_Website = document.getElementById("Member_Website").value;
var Member_Type = document.getElementById("Member_Type").value;
var Member_ZIP = document.getElementById("Member_ZIP").value;
var MA_name = document.getElementById("MA_name").value;
var MA_first_name = document.getElementById("MA_first_name").value;
var MA_position = document.getElementById("MA_position").value;
var MA_zip = document.getElementById("MA_zip").value;
var MA_email = document.getElementById("MA_email").value;
var Member_Desc = document.getElementById("Member_Desc").value;



var num = /^[0-9]+$/;
var  text = /^[0-9_A-Z._.a-z0-9_0-9]+[@]+[a-z0-9]+[.]+[a-z0-9]+$/||/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

if( (Member_Name==0) ||(Member_Type==0) ||(Member_Website==0)|| (Member_ZIP==0||Member_ZIP.match(num)==null) || Member_ZIP.length<5 ||(MA_name==0)||
(MA_first_name==0)||(MA_position==0)|| (MA_zip==0||MA_zip.match(num)==null) || MA_zip.length<5 ||(MA_email==0||MA_email.match(text)==null)
||(Form.Member_Desc.selectedIndex==0)||(Member_Desc==0) )
{
	 if(Member_Name==0)
	 {
	 document.getElementById("Member_Name_error").innerHTML=" Vereinsname is required";
	 }
	 else
		{
	    document.getElementById("Member_Name_error").innerHTML="";
		}
		
	if( Form.Member_Type.selectedIndex==0)
	 {
	  document.getElementById("Member_Type_error").innerHTML=" Vereinstyp is required.";
	 }
	 else
	 {
	     document.getElementById("Member_Type_error").innerHTML="";
	 }
	 
	 if(Member_Website==0)
	 {
	 document.getElementById("Member_Website_error").innerHTML=" Member Website is required";
	 }
	 else
		{
	    document.getElementById("Member_Website_error").innerHTML="";
		}
		
	if(Member_ZIP==0)
	 {
	  document.getElementById("Member_ZIP_error").innerHTML=" PLZ is required.";
	 }
	 else
	 {
	    if(Member_ZIP.match(num)==null)
		{
		 document.getElementById("Member_ZIP_error").innerHTML=" Invalid PLZ no.";
		}
		else if(Member_ZIP.length>0 && Member_ZIP.length<5)
		{
			document.getElementById("Member_ZIP_error").innerHTML=" It should be 5 digits.";
		}
		else
		{
		document.getElementById("Member_ZIP_error").innerHTML="";
		}
	 }
	 
	 if(MA_name==0)
	 {
	 document.getElementById("MA_name_error").innerHTML=" Vorname Ansprechpartner is required";
	 }
	 else
		{
	    document.getElementById("MA_name_error").innerHTML="";
		}
		
	if(MA_first_name==0)
	 {
	 document.getElementById("MA_first_name_error").innerHTML=" Name Ansprechpartner is required";
	 }
	 else
		{
	    document.getElementById("MA_first_name_error").innerHTML="";
		}
		
	if(MA_position==0)
	 {
	 document.getElementById("MA_position_error").innerHTML=" Position is required";
	 }
	 else
		{
	    document.getElementById("MA_position_error").innerHTML="";
		}
		
	if(MA_zip==0)
	 {
	  document.getElementById("MA_zip_error").innerHTML=" PLZ is required.";
	 }
	 else
	 {
	    if(MA_zip.match(num)==null)
		{
		 document.getElementById("MA_zip_error").innerHTML=" Invalid PLZ no.";
		}
		else if(MA_zip.length>0 && MA_zip.length<5)
		{
			document.getElementById("MA_zip_error").innerHTML=" It should be 5 digits.";
		}
		else
		{
		document.getElementById("MA_zip_error").innerHTML="";
		}
	 }
	 
	 if(MA_email==0)
	 {
	 document.getElementById("MA_email_error").innerHTML=" Email is required";
	 }
	 else
	 {
		if(MA_email.match(text)==null)
		{
		document.getElementById("MA_email_error").innerHTML=" Invalide Email";	
		}
		else
		{
	    document.getElementById("MA_email_error").innerHTML="";
		}
	 
	 }
	 
	if(Member_Desc==0 || Member_Desc=="")
	 {
	  document.getElementById("Member_Desc_error").innerHTML=" Beschreibung is required.";
	 }
	 else
	 {
	     document.getElementById("Member_Desc_error").innerHTML="";
		
	 }

	 
return false;
}	
}
</script>

<?php include("include/footer-main.php"); ?>
<script type="text/javascript">
	var gmaps_api_url = "//maps.googleapis.com/maps/api/js?v=3&callback=gmaps_api_loaded&client=gme-saarbruecken";
var gmaps_plugin_url = "/media/js/jquery-ui-map-3.0rc1.js";

var gmaps_js_api_loaded = false;

jQuery.cachedScript = function( url, options ) {

    // Allow user to set any option except for dataType, cache, and url
    options = $.extend( options || {}, {
        dataType: "script",
        cache: true,
        url: url
    });

    // Use $.ajax() since it is more flexible than $.getScript
    // Return the jqXHR object so we can chain callbacks
    return jQuery.ajax( options );
};

function gmaps_api_loaded()
{
    gmaps_js_api_loaded = true;
}

function check_if_api_is_loaded(callback, identifier) {
    if (gmaps_js_api_loaded == true) {
        window[callback](identifier);
    } else {
        $.when( $.cachedScript(gmaps_api_url) ).done(function(){
            $.when( $.cachedScript(gmaps_plugin_url) ).done(function(){
                window[callback](identifier);
            });
        });
    }
}

function show_map(identifier) {
    $('#map_' + identifier).css('background', 'none');
    $('#map_' + identifier).addClass('show');
    $('.map-options-_' + identifier).removeClass('hide');

    $('#map_' + identifier).unbind('click');

    window['gmaps_' + identifier]();
}

function gmaps_802554d31d68c7113() {
    $('#map_802554d31d68c7113').gmap({ 'center': '49.211973,7.042984','scrollwheel':false, 'navigationControl':false, 'streetViewControl':false});
    $('#map_802554d31d68c7113').gmap('option', 'mapTypeId', google.maps.MapTypeId.ROADMAP);
    $('#map_802554d31d68c7113').gmap('addMarker', { 'position': '49.211973,7.042984'});
    $('#map_802554d31d68c7113').gmap('option', 'zoom', 15);
}

$('#map_802554d31d68c7113').on('click', function() {
    check_if_api_is_loaded("show_map", "802554d31d68c7113");
});


</script>

<!-- SZM VERSION="2.0" -->
<script type="text/javascript">
	var iam_data = {
		"mg":"yes", // Migrationsmodus AKTIVIERT
		"st":"saaronl", // site/domain
		"cp":"sb_1_saarb", // code
		"oc":"sb_1_saarb", // code SZM-System 1.5
		"sv":"in" // FRABO-Tag aktiviert
	}
	iom.c(iam_data);
function _(el){
	return document.getElementById(el);
}	
function uploadImage()
{

var file = _("logo").files[0];
	 //alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("logo", file);
    $.ajax( {
      url: '<?php echo base_url().'admin/uploadImage' ?>',
      type: 'POST',
      data: formdata,
      processData: false,
      contentType: false,
	  context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
document.getElementById("showbox").style.display='block';
});		
}	
/*function showlist()
{
$.ajax({ type:"POST",
url: "list.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
} 
function showgrid()
{
$.ajax({ type:"POST",
url: "grid.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
}*/
function myFunction()
{
if(document.getElementById("BMember_Name").value!=document.getElementById("Member_Name").value)
{
	document.getElementById("Member_Name").style.fontWeight='bold';
}	
if(document.getElementById("BMember_Address_Street").value!=document.getElementById("Member_Address_Street").value)
{
	document.getElementById("Member_Address_Street").style.fontWeight='bold';
}
if(document.getElementById("BMember_House_No").value!=document.getElementById("Member_House_No").value)
{
	document.getElementById("Member_House_No").style.fontWeight='bold';
}
if(document.getElementById("BMember_ZIP").value!=document.getElementById("Member_ZIP").value)
{
	document.getElementById("Member_ZIP").style.fontWeight='bold';
}
if(document.getElementById("BMember_City").value!=document.getElementById("Member_City").value)
{
	document.getElementById("Member_City").style.fontWeight='bold';
}
if(document.getElementById("BMA_position").value!=document.getElementById("MA_position").value)
{
	document.getElementById("MA_position").style.fontWeight='bold';
}
if(document.getElementById("BMember_Country").value!=document.getElementById("Member_Country").value)
{
	document.getElementById("Member_Country").style.fontWeight='bold';
}
if(document.getElementById("BMember_Desc").innerHTML!=document.getElementById("Member_Desc").innerHTML)
{
	document.getElementById("Member_Desc").style.fontWeight='bold';
}
if(document.getElementById("BMember_FB_Address").value!=document.getElementById("Member_FB_Address").value)
{
	document.getElementById("Member_FB_Address").style.fontWeight='bold';
}
if(document.getElementById("BMember_Twtr_Address").value!=document.getElementById("Member_Twtr_Address").value)
{
	document.getElementById("Member_Twtr_Address").style.fontWeight='bold';
}
if(document.getElementById("BMember_Type").value!=document.getElementById("Member_Type").value)
{
	document.getElementById("Member_Type").style.fontWeight='bold';
}
if(document.getElementById("BMember_Multiple_Sports").value!=document.getElementById("Member_Multiple_Sports").value)
{
	document.getElementById("Member_Multiple_Sports").style.fontWeight='bold';
}
if(document.getElementById("BMember_Website").value!=document.getElementById("Member_Website").value)
{
	document.getElementById("Member_Website").style.fontWeight='bold';
}
if(document.getElementById("BMA_city").value!=document.getElementById("MA_city").value)
{
	document.getElementById("MA_city").style.fontWeight='bold';
}
if(document.getElementById("BMA_dist").value!=document.getElementById("MA_dist").value)
{
	document.getElementById("MA_dist").style.fontWeight='bold';
}
if(document.getElementById("BMA_email").value!=document.getElementById("MA_email").value)
{
	document.getElementById("MA_email").style.fontWeight='bold';
}
if(document.getElementById("BMA_first_name").value!=document.getElementById("MA_first_name").value)
{
	document.getElementById("MA_first_name").style.fontWeight='bold';
}
if(document.getElementById("BMA_house_no").value!=document.getElementById("MA_house_no").value)
{
	document.getElementById("MA_house_no").style.fontWeight='bold';
}
if(document.getElementById("BMA_mobile").value!=document.getElementById("MA_mobile").value)
{
	document.getElementById("MA_mobile").style.fontWeight='bold';
}
if(document.getElementById("BMA_name").value!=document.getElementById("MA_name").value)
{
	document.getElementById("MA_name").style.fontWeight='bold';
}
if(document.getElementById("BMA_phone").value!=document.getElementById("MA_phone").value)
{
	document.getElementById("MA_phone").style.fontWeight='bold';
}
if(document.getElementById("BMA_position").value!=document.getElementById("MA_position").value)
{
	document.getElementById("MA_position").style.fontWeight='bold';
}
if(document.getElementById("BMA_street_no").value!=document.getElementById("MA_street_no").value)
{
	document.getElementById("MA_street_no").style.fontWeight='bold';
}
if(document.getElementById("BMA_zip").value!=document.getElementById("MA_zip").value)
{
	document.getElementById("MA_zip").style.fontWeight='bold';
}	
}
</script>
<script src="saved_resource(3)"></script>
<script>
/*// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
});
*/
</script>
<!-- SZM VERSION="2.0" -->
<!-- Copyright (c) 2000-2008 etracker GmbH. All rights reserved. -->
<!-- This material may not be reproduced, displayed, modified or distributed -->
<!-- without the express prior written permission of the copyright holder. -->

<!-- etracker TAG 3.0 -->
<script type="text/javascript" src="js/t.js"></script>
<!-- etracker PARAMETER 3.0 -->
<script type="text/javascript">
	var et_areas = "Landeshauptstadt Saarbrücken";
	var et_pagename = "Landeshauptstadt Saarbrücken » Leben in Saarbrücken » Sport und Vereine » Sportvereine und Vereinssuche";
</script>
<!-- etracker PARAMETER END -->
<script type="text/javascript">_etc();</script>
<p id="et_image" style="display:none;"></p>
<!-- etracker CODE END -->



<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
<div id="cboxWrapper">
<div>
<div id="cboxTopLeft" style="float: left;"></div>
<div id="cboxTopCenter" style="float: left;"></div>
<div id="cboxTopRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxMiddleLeft" style="float: left;"></div>
<div id="cboxContent" style="float: left;">
<div id="cboxTitle" style="float: left;"></div>
<div id="cboxCurrent" style="float: left;"></div>
<button type="button" id="cboxPrevious"></button>
<button type="button" id="cboxNext"></button>
<button id="cboxSlideshow"></button>
<div id="cboxLoadingOverlay" style="float: left;"></div>
<div id="cboxLoadingGraphic" style="float: left;"></div>
<button type="button" id="cboxClose"></button>
</div>
<div id="cboxMiddleRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxBottomLeft" style="float: left;"></div>
<div id="cboxBottomCenter" style="float: left;"></div>
<div id="cboxBottomRight" style="float: left;"></div>
</div>
</div>
<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>