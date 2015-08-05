<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
$sessionid=$this->uri->segment(4);
 ?>
<!DOCTYPE html>
<html lang="de"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">
	 <?php include("include/files.php"); ?>

</head>
<?php
$memberAppId='';
$status='';$descvalue='';$descvalue1='';
 if(isset($getmemberbyid)) { 
foreach($getmemberbyid as $value) {
	$memberAppId=$value->Member_App_Id;
	$status=$value->Member_Current_Status;
	
	 if($value->Member_Current_Status=="Modify") {  ?>
<body onload="myFunction()">
<?php }else{ echo "<body>";   }
}
}?>
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php"); ?>


<div class="container l-content pull-left">
<?php
$MemberCurrentMail='';
$member_update_version='';
if(isset($getmemberbyid)) { foreach($getmemberbyid as $value) { 
 $member_update_version=$value->Member_Relese_version;
 $descvalue=$value->Member_Desc;
 ?>
	
	<div class="row component component-headline col-md-12 col-lg-12">
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
		<div class="panel-body" style="margin-left:-40px;">
             
                 <div class=" col-md-12 col-lg-12" style="margin-left:-15px;">

              <div class="col-md-7 col-lg-7">   
             <form method="post"> <table class="table">
              <tr>
              <th></th>
              <th><h2 style="margin-left:17px;">Aktuelles Profil</h2></th>
              </tr>
              <tr>
              <td class=" col-md-5 col-lg-5"><label class="control-label" for="inputName">Vereinsname*</label></td>
              <td>
             <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_Name" class="form-control" name="Member_Name" readonly 
              value='<?php if($value->Member_Current_Status!="New") { echo str_replace("'","&lsquo;",$value->Member_Name); } ?>' >
              </div>
              </td>
              </tr>
               <tr>
              <td><label class="control-label" for="inputName">Vereinsart*</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
             <select name="Member_Type" id="BMember_Type" class="form-control" readonly>
              <?php if($value->Member_Current_Status!="New") { echo "<option>".$value->Member_Type."</option>";}
				else{echo "<option value=''>Vereinsart</option>";
					}?>
               </select>
              </div>
              </td>
              </tr>
              
              <tr>
              <td> <label class="control-label" for="inputName">Straße*</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_Address_Street" class="form-control" name="Member_Address_Street" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Address_Street); ?>' >
              </div>
              </td>
               </tr>
               
                <tr>
              <td> <label class="control-label" for="inputName">Stadtteil*</label>
              </td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
				<select name="BMember_Dist" id="BMember_Dist"  class="form-control" readonly>
               	<?php  if($value->Member_Current_Status!="New")
					 echo "<option value='".$value->Member_Dist."' ".$showdist.">".$value->Member_Dist."</option>";
					 else echo "<option >Stadtteil</option>";  ?>
                </select>
               </div></td>
              </tr>
               
               <tr>
              <td> <label class="control-label" for="inputName">PLZ*</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
		      <input type="text"  id="BMember_ZIP" class="form-control" name="Member_ZIP" readonly 
              value="<?php  if($value->Member_Current_Status!="New") echo $value->Member_ZIP; ?>"  maxlength="5">
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Ort*</label>
              </td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_City" class="form-control" name="Member_City" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_City); ?>' >
              </div></td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">Clubheim</label>
              </td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_Clubheim" class="form-control" name="Member_Clubheim" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Clubheim); ?>' >
              </div></td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">1. Vorsitzender*</label>
              </td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_President" class="form-control" name="Member_President" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_President); ?>' >
              </div></td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">Website</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <a href="<?php  if($value->Member_Current_Status!="New") echo $value->Member_Website; ?>" 
              style="text-decoration:underline;background-color:#eee;"  class="form-control" target="_blank">
			  <?php  if($value->Member_Current_Status!="New") echo $value->Member_Website; ?></a>
              <input type="hidden"  id="BMember_Website" class="form-control" readonly name="BMember_Website" value="<?php echo $value->Member_Website; ?>" >
				</div>
              </td>
              </tr>
              
              <tr>
              <td><label class="control-label" for="inputName">Hausnummer</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_House_No" class="form-control" name="Member_House_No" readonly 
              value="<?php  if($value->Member_Current_Status!="New") echo $value->Member_House_No; ?>" >
              </div>
              </td>
               </tr>
              <tr>
              <td><label class="control-label" for="inputName">Telefon</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_Telephone" class="form-control" name="Member_Telephone" readonly 
              value="<?php if($value->Member_Current_Status!="New") echo $value->Member_Telephone; ?>" >
              </div>
              </td>
              </tr>
              
               <tr>
              <td> <label class="control-label" for="inputName">Facebook </label></td>
              
               <td>
               <div class="controls col-md-12 col-lg-12" ><a href="<?php if($value->Member_Current_Status!="New") echo $value->Member_FB_Address; ?>" style="background-color:#eee;text-decoration:underline;" class="form-control"><?php if($value->Member_Current_Status!="New") echo $value->Member_FB_Address; ?></a>
               <input type="hidden"  id="BMember_FB_Address" class="form-control" readonly name="Member_FB_Address" value="<?php echo $value->Member_FB_Address; ?>" >
               </div>
               </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Twitter </label></td>
               
               <td>
               <div class="controls col-md-12 col-lg-12" ><a href='<?php if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Twtr_Address); ?>' style="background-color:#eee;text-decoration:underline;" class="form-control">
			   <?php if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Twtr_Address); ?></a>
               <input type="hidden"  id="BMember_Twtr_Address" class="form-control" readonly name="Member_Twtr_Address" value="<?php echo $value->Member_Twtr_Address; ?>" >
               </div>
               </td>
               </tr>
              
              <tr>
              <td> <label class="control-label" for="inputName">Land</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMember_Country" class="form-control" name="BMember_Country" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Country); ?>' >
              </div></td>
              </tr>
              
              <tr>
              <td>
              <label class="control-label" for="inputName">Vorname Ansprechpartner*</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_name" class="form-control" name="MA_name" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_name); ?>' >
              </div>
              </td>
              </tr>
               <tr>
              <td>
              <label class="control-label" for="inputName">Name Ansprechpartner*</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_first_name" class="form-control" name="MA_first_name" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_first_name); ?>' >
              </div>
              </td>
              </tr>
             <tr>
              <td><label class="control-label" for="inputName">Position*</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_position" class="form-control" name="MA_position" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_position); ?>' >
              </div>
              </td>
              
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Straße</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_street_no" class="form-control" name="MA_street_no" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_street_no); ?>' >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">Hausnummer</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_house_no" class="form-control" name="MA_house_no" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_house_no); ?>' >
              </div>
              </td>
              </tr>
              <tr>
              <td> <label class="control-label" for="inputName">PLZ</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_zip" class="form-control" name="MA_zip" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_zip); ?>' >
              </div>
              </td>
              </tr>
               <tr>
              <td> <label class="control-label" for="inputName">City</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_city" class="form-control" name="MA_city" readonly 
              value='<?php  if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_city); ?>' >
              </div>
              </td>
              </tr>
               <tr>
              <!--<td> <label class="control-label" for="inputName">Stadtteil</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
				<select name="MA_dist" id="BMA_dist"  class="form-control" readonly>
                	<?php // if($value->Member_Current_Status!="New")
					 //echo "<option value='".$value->MA_dist."'>".$value->MA_dist."</option>";
					// else echo "<option >Stadtteil</option>";  ?>
               </select>               </div>
              </td>-->
              </tr>
              <tr>
              <td>
              <label class="control-label" for="inputName">Telefon</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_phone" class="form-control" name="MA_phone" readonly 
              value='<?php if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->MA_phone); ?>' >
              </div>
              </td>
              </tr>
              <tr>
              <td><label class="control-label" for="inputName">Handy</label></td>
              
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="BMA_mobile" class="form-control" name="MA_mobile" readonly 
              value="<?php if($value->Member_Current_Status!="New") echo $value->MA_mobile; ?>" >
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <label class="control-label" for="inputName">Email*</label></td>
              <td>
              <div class="controls col-md-12 col-lg-12" ><a href="mailto:<?php if($value->Member_Current_Status!="New") echo $MemberCurrentMail=$value->MA_email; ?>" style="background-color:#eee;text-decoration:underline;" class="form-control"><?php if($value->Member_Current_Status!="New") echo $value->MA_email; ?></a>
            <input type="hidden"  id="BMA_email" class="form-control" readonly name="BMA_email" value='<?php echo $value->MA_email; ?>' >

              </div>
              </td>
              
              </tr>
             
               <tr>
               <td> <label class="control-label" for="inputName">Vereinssparten</label></td>
               
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="BMember_Multiple_Sports" class="form-control" readonly name="Member_Multiple_Sports" 
               value='<?php if($value->Member_Current_Status!="New") echo str_replace("'","&lsquo;",$value->Member_Multiple_Sports); ?>' >
               </div>
               </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Beschreibung*</label></td>
               <td> <div class="controls col-md-12 col-lg-12" > 
			   <?php if($value->Member_Current_Status!="New") { $descvalue1=$value->Member_Desc;}?>
               <textarea cols="35"  rows="10" id="BMember_Desc" readonly class="form-control" maxlength="500" 
               style="resize:none;overflow:hidden;"><?php echo str_replace("<br />",'',$descvalue1); ?></textarea></div> </td>
               </tr>
               <tr>
               <td> <label class="control-label" for="inputName">Club logo</label></td>
               <td>  
               <div style="width:100px;height:100px;margin-top:10px;margin-left:15px;" >
               <img  src="<?php if($value->Member_Current_Status!="New")
			    {$width='';$height='';
				 if($value->Member_logo==="0") { $imgname="No_Logo.png";$width=90;$height=90;}
					elseif($value->Member_logo!="") 
					{
						$imgname=$value->Member_logo;
							if(file_exists("./assets/img/Uploadlogos/".$imgname))
								{
									/* Get the image info */
								$info = getimagesize(asset_url()."img/Uploadlogos/".$imgname);
								 
								/* Calculate aspect ratio by dividing height by width */
								  $aspectRatio = $info[1] / $info[0];
								 if($aspectRatio>1){$width=50;}elseif($aspectRatio>0.5){$width=100;}else{$width=150;}
								/* Keep the width fix at 100px, 
								   but change the height according to the aspect ratio */
								$height = (int)($aspectRatio * $width) . "px";
								 
								/* Use the 'newHeight' in the CSS height property below. */
								$width .= "px";
							}else{$imgname="No_Logo.png";$width=90;$height=90;}
						}
					else{$imgname="No_Logo.png";$width=90;$height=90;}
					 echo asset_url()."img/Uploadlogos/".$imgname; 
				 }else{echo asset_url()."img/Uploadlogos/No_Logo.png";$width=90;$height=90; } ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
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
               <?php } 
			   
			}?>
               <?php foreach($getmemberlogbyid as $data) {
				    $style="style='font-weight:bold;'"; ?>
             
              <div class=" col-md-5 col-lg-5">
              <form name="Form" action="<?php echo base_url()."admin/Accept"; ?>" method="post" enctype="multipart/form-data">
              <table class="table">
              <tr>
              <th><h2 style="margin-left:14px;">Geändertes Profil</h2></th>
              <th><h2 >Reject</h2></th>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Name" class="form-control" name="Member_Name" value='<?php if($status=="Modify" || $status=="New" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Name); ?>' >
              <input type="hidden"  id="inputName" class="form-control" name="Member_App_Id" value="<?php  echo $data->Member_App_Id; ?>" >
                <input type="hidden"  id="Member_log_id" class="form-control" name="Member_log_id" value="<?php echo $data->Member_log_id; ?>" >
                <div id="Member_Name_error"  style="color:#F56780"></div>
              </div>
              </td>
              <td><input type="checkbox" name="Member_Name_isReject" id="Member_Name_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
               <select name="Member_Type" id="Member_Type" class="form-control">
                <option value=" ">Vereinsart</option>
                <?php foreach($getActiveContactType as $contactType) {
					$show='';
					 if($status=="Modify" || $status=="New") {  
					 if($data->Member_Type==$contactType->contact_type_german_value) $show='selected';
					}
					  echo "<option value='".$contactType->contact_type_german_value."' ".$show.">".$contactType->contact_type_german_value."</option>";}
				?>
               
             </select>
              <div id="Member_Type_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="Member_Type_isReject" id="Member_Type_isReject"></td>
              </tr>
              
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Address_Street" class="form-control"  name="Member_Address_Street" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Address_Street); ?>' >
              			<div id="Member_Address_Street_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="Member_Address_Street_isReject" id="Member_Address_Street_isReject"></td>
              </tr>
             <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
 				<select name="Member_Dist" id="Member_Dist"  class="form-control">
                 <option value="" >Stadtteil</option>
                  <?php  foreach($getActiveDistrics as $districtValue) {
					  $showdist='';
					 if($status=="Modify" || $status=="New") { 
					 if($data->Member_Dist==$districtValue->dist_german_name) $showdist='selected'; 
					  }
				 echo "<option value='".$districtValue->dist_german_name."' ".$showdist.">".$districtValue->dist_german_name."</option>";}?>
               </select>
                 <span id="Member_Dist_error"  style="color:#F56780"></span> </div>
              </td><td><input type="checkbox" name="Member_Dist_isReject" id="Member_Dist_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
		      <input type="text"  id="Member_ZIP" class="form-control" name="Member_ZIP" value="<?php if($status=="Modify" || $status=="New") echo $data->Member_ZIP; ?>" >
              <div id="Member_ZIP_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="Member_ZIP_isReject" id="Member_ZIP_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_City" class="form-control" name="Member_City" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_City); ?>' >
              <div id="Member_City_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="Member_City_isReject" id="Member_City_isReject"></td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Clubheim" class="form-control" name="Member_Clubheim" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Clubheim); ?>' >
              <!--<div id="Member_Clubheim_error"  style="color:#F56780"></div>-->
              </div>
              </td><td><input type="checkbox" name="Member_Clubheim_isReject" id="Member_Clubheim_isReject"></td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_President" class="form-control" name="Member_President" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_President); ?>' >
              <div id="Member_President_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="Member_President_isReject" id="Member_President_isReject"></td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Website" class="form-control" name="Member_Website" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Website); ?>' >
              <!--<div id="Member_Website_error"  style="color:#F56780"></div>-->
              </div>
              </td><td><input type="checkbox" name="Member_Website_isReject" id="Member_Website_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_House_No" class="form-control" name="Member_House_No" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_House_No); ?>' >
              </div>
              </td><td><input type="checkbox" name="Member_House_No_isReject" id="Member_House_No_isReject"></td>
              </tr>
              
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Telephone" class="form-control" name="Member_Telephone" 
              value="<?php if($status=="Modify" || $status=="New") echo $data->Member_Telephone; ?>" >
              </div>
              </td><td><input type="checkbox" name="Member_Telephone_isReject" id="Member_Telephone_isReject"></td>
              </tr>
               <tr>
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="Member_FB_Address" class="form-control" name="Member_FB_Address" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_FB_Address); ?>' >
               </div>
               </td><td><input type="checkbox" name="Member_FB_Address_isReject" id="Member_FB_Address_isReject"></td>
               </tr>
               <tr>
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="Member_Twtr_Address" class="form-control" name="Member_Twtr_Address" 
               value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Twtr_Address); ?>' >
               </div>
               </td><td><input type="checkbox" name="Member_Twtr_Address_isReject" id="Member_Twtr_Address_isReject"></td>
               </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="Member_Country" class="form-control" name="Member_Country" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Country); ?>' >
              </div>
              </td><td><input type="checkbox" name="Member_Country_isReject" id="Member_Country_isReject"></td>
              </tr>
              
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_name" class="form-control" name="MA_name" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_name); ?>' >
              <div id="MA_name_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_name_isReject" id="MA_name_isReject"></td>
              </tr>
               <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_first_name" class="form-control" name="MA_first_name" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_first_name); ?>' >
              <div id="MA_first_name_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_first_name_isReject" id="MA_first_name_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_position" class="form-control" name="MA_position" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_position); ?>' >
              <div id="MA_position_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_position_isReject" id="MA_position_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_street_no" class="form-control" name="MA_street_no" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_street_no); ?>' >
              </div>
              </td><td><input type="checkbox" name="MA_street_no_isReject" id="MA_street_no_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_house_no" class="form-control" name="MA_house_no" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_house_no); ?>' >
              </div>
              </td><td><input type="checkbox" name="MA_house_no_isReject" id="MA_house_no_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_zip" class="form-control" name="MA_zip" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_zip); ?>' >
              <div id="MA_zip_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_zip_isReject" id="MA_zip_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_city" class="form-control" name="MA_city" 
              value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_city); ?>' >
              </div>
              </td><td><input type="checkbox" name="MA_city_isReject" id="MA_city_isReject"></td>
              </tr>
             <!-- <tr>
              <td>
               <div class="controls col-md-10 col-lg-10" >
               <select name="MA_dist" id="MA_dist"  class="form-control">
                 <option value="">Stadtteil</option>
                   <?php /*foreach($getActiveDistrics as $districtValue) {
					  if($value->MA_dist==$districtValue->dist_german_name) $showdist='selected';else $showdist='';
					  echo "<option value='".$districtValue->dist_german_name."' ".$showdist.">".$districtValue->dist_german_name."</option>";} */?>
               </select>              </div>
              </td>
              </tr>-->
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_phone" class="form-control" name="MA_phone" value="<?php if($status=="Modify" || $status=="New") echo $data->MA_phone; ?>" >
               <div id="MA_phone_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_phone_isReject" id="MA_phone_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text"  id="MA_mobile" class="form-control" name="MA_mobile" 
              value="<?php if($status=="Modify" || $status=="New") echo $data->MA_mobile; ?>" >
              </div>
              </td><td><input type="checkbox" name="MA_mobile_isReject" id="MA_mobile_isReject"></td>
              </tr>
              <tr>
              <td>
              <div class="controls col-md-12 col-lg-12" >
              <input type="text" id="MA_email" class="form-control" role="link" name="MA_email" value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->MA_email); ?>' >
              <div id="MA_email_error"  style="color:#F56780"></div>
              </div>
              </td><td><input type="checkbox" name="MA_email_isReject" id="MA_email_isReject"></td>
              </tr>
             
               <tr>
               <td>
               <div class="controls col-md-12 col-lg-12" >
               <input type="text"  id="Member_Multiple_Sports" class="form-control" name="Member_Multiple_Sports" 
               value='<?php if($status=="Modify" || $status=="New") echo str_replace("'","&lsquo;",$data->Member_Multiple_Sports); ?>' >
               </div>
               </td><td><input type="checkbox" name="Member_Multiple_Sports_isReject" id="Member_Multiple_Sports_isReject"></td>
               </tr>
               <tr>
               <td> 
               <div class="controls col-md-12 col-lg-12" >
			   <?php $showbold=''; if($status!="New") { 
			  $strresult=strcmp($descvalue,$data->Member_Desc);  
			   if($strresult==0){ $showbold="";}else{ $showbold='font-weight:bold;';}} ?> 
               <textarea  cols="35" rows="10" class="form-control" id="Member_Desc" name="Member_Desc" maxlength="500" 
               style="resize:none;overflow:hidden;<?php echo $showbold; ?>"><?php if($status=="Modify" || $status=="New") echo str_replace("<br />",'',$data->Member_Desc); ?></textarea>
               <div id="Member_Desc_error"  style="color:#F56780"></div>
               </div> 
               </td><td><input type="checkbox" name="Member_Desc_isReject" id="Member_Desc_isReject"></td>
               </tr>
               <tr><td>
               <div  style="width:100px;height:100px;margin-top:10px;margin-left:13px;" class="text-center">
              <div id="showbox"> 
               <?php
			  $width='';$height='';
				if($status=="Modify" || $status=="New")
				{
				 if($data->Member_logo==="0") { $imgname="No_Logo.png";$width=90;$height=90;}
					elseif($data->Member_logo!="") 
					{
						$imgname=$data->Member_logo;
							if(file_exists("./assets/img/Uploadlogos/".$imgname))
								{
									/* Get the image info */
								$info = getimagesize(asset_url()."img/Uploadlogos/".$imgname);
								 
								/* Calculate aspect ratio by dividing height by width */
								  $aspectRatio = $info[1] / $info[0];
								 if($aspectRatio>1){$width=50;}elseif($aspectRatio>0.5){$width=100;}else{$width=150;}
								/* Keep the width fix at 100px, 
								   but change the height according to the aspect ratio */
								$height = (int)($aspectRatio * $width) . "px";
								 
								/* Use the 'newHeight' in the CSS height property below. */
								$width .= "px";
							}else{$imgname="No_Logo.png";$width=90;$height=90;}
						}
					else{$imgname="No_Logo.png";$width=90;$height=90;}
				}else{$imgname="No_Logo.png";$width=90;$height=90;}
			  ?>
              <img src="<?php  echo asset_url()."img/Uploadlogos/".$imgname; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
             <input type="hidden" name="filename" value="<?php echo $data->Member_logo ?>">
             <input type="hidden" name="sessionid" value="<?php echo $sessionid; ?>">
             </div>
              </div>
               
               </td><td><input type="checkbox" name="Member_logo_isReject" id="Member_logo_isReject"></td>
               </tr>
               <tr>
               <td style="padding-left:10px;">  
               <div class="fileUpload btn">  
                <span class="text-center"><?php echo $this->lang->line("Upload_logo"); ?></span>
                <input type="file" class="upload" name="logo" id="logo" onChange="uploadImage()"></div>
                <br><small style="margin-left:10px;">(<?php echo $this->lang->line("Upload_msg"); ?>)</small> 
               </td>
               </tr>
              
               </table>
               </div>

            <div class="col-md-11 col-lg-11" >
            <div class="pull-right" style="margin-right:5px;">Mit * gekennzeichnete Felder sind Pflichtfelder &nbsp;
                  <button type="submit" title="<?php echo $this->lang->line("Accept"); ?>" 
                   class="np" onclick="return validateForm()" name="Accept">
                   <img src="<?php echo asset_url(); ?>img/orange_icons/accept_24.png"></button> 
				  </form>
              <a onClick="reject()"  >
                 <img src="<?php echo asset_url(); ?>img/orange_icons/reject_24.png" class="btn13" title="<?php echo $this->lang->line("Reject"); ?>"></a>
              
             <a href="<?php echo base_url().'admin/updateMail/'.$data->Member_App_Id."/".$sessionid; ?>" >
               <img src="<?php echo asset_url(); ?>img/orange_icons/mail_24.png" class="btn13" title="<?php echo $this->lang->line("Mail"); ?>"></a>
               </div>
                  <br> <br>  <a href="<?php echo base_url()."admin/?sessionid=".$sessionid; ?>" style="margin-left:10px;" >zurück zur Liste«</a> </div>      
             </div>
         
	<?php //include("include/sidebar.php"); ?>

	</div>
    <?php } ?> 
</div>




<?php //include("include/footer.php"); ?>




<?php //include("include/footer-main.php"); ?>

<script type="text/javascript">

function getvalue()
{
	var val=document.getElementById("MA_email").value;
	document.getElementById("MemberCurrentMail").value=val;
	}
function validateForm()
{

var Member_Name = document.getElementById("Member_Name").value;
//var Member_Website = document.getElementById("Member_Website").value;
var Member_Type = document.getElementById("Member_Type").value;
var Member_Dist = document.getElementById("Member_Dist").value;

var Member_ZIP = document.getElementById("Member_ZIP").value;
var MA_name = document.getElementById("MA_name").value;
var MA_first_name = document.getElementById("MA_first_name").value;
var MA_position = document.getElementById("MA_position").value;
var MA_phone = document.getElementById("MA_phone").value;
var MA_email = document.getElementById("MA_email").value;
var Member_Desc = document.getElementById("Member_Desc").value;
//var MA_zip = document.getElementById("MA_zip").value;
var Member_City = document.getElementById("Member_City").value;
var Member_Address_Street = document.getElementById("Member_Address_Street").value;
//var Member_Clubheim = document.getElementById("Member_Clubheim").value;
var Member_President = document.getElementById("Member_President").value;



var num = /^[0-9]+$/;
//var  text = /^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,20}$/;
//||(Member_Website==0) and || (Member_Clubheim==0) 
if( (Member_Name==0) ||(Member_Type==0) ||  (Member_Dist=="") || (Member_ZIP==0||Member_ZIP.match(num)==null) || Member_ZIP.length<5 ||(MA_name==0)||
(MA_first_name==0)||(MA_position==0) ||(MA_email==0||MA_email.match(text)==null)
||(Form.Member_Desc.selectedIndex==0)||(Member_Desc==0) ||(Member_City==0) || (Member_Address_Street==0) || (Member_President==0))
{
	 if(Member_Name==0)
	 {
	 document.getElementById("Member_Name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("Member_Name_error").innerHTML="";
		}
		
	if( Form.Member_Type.selectedIndex==0)
	 {
	  document.getElementById("Member_Type_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_Type_error").innerHTML="";
	 }
	 if(Member_Dist=="")
	 {
	 document.getElementById("Member_Dist_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("Member_Dist_error").innerHTML='';
		}
	/* if(Member_Website==0)
	 {
	 document.getElementById("Member_Website_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("Member_Website_error").innerHTML="";
		}*/
		
	if(Member_ZIP==0)
	 {
	  document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	    if(Member_ZIP.match(num)==null)
		{
		 document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
		}
		else if(Member_ZIP.length>0 && Member_ZIP.length<5)
		{
			document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
		}
		else
		{
		document.getElementById("Member_ZIP_error").innerHTML="";
		}
	 }
	 
	 if(MA_name==0)
	 {
	 document.getElementById("MA_name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("MA_name_error").innerHTML="";
		}
		
	if(MA_first_name==0)
	 {
	 document.getElementById("MA_first_name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("MA_first_name_error").innerHTML="";
		}
		
	if(MA_position==0)
	 {
	 document.getElementById("MA_position_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
		{
	    document.getElementById("MA_position_error").innerHTML="";
		}
		
	/*if(MA_zip==0)
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
	 }*/
	 
	 if(MA_email==0)
	 {
	 document.getElementById("MA_email_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
		 document.getElementById("MA_email_error").innerHTML="";
		/*if(MA_email.match(text)==null)
		{
		document.getElementById("MA_email_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";	
		}
		else
		{
	    document.getElementById("MA_email_error").innerHTML="";
		}
		*/	 
	 }
	 
	if(Member_Desc==0)
	 {
	  document.getElementById("Member_Desc_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_Desc_error").innerHTML="";
		
	 }
	 if(Member_City==0)
	 {
	  document.getElementById("Member_City_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_City_error").innerHTML="";
		
	 }
	  if(Member_Address_Street==0)
	 {
	  document.getElementById("Member_Address_Street_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_Address_Street_error").innerHTML="";
		
	 }
	  /*if(Member_Clubheim==0)
	 {
	  document.getElementById("Member_Clubheim_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_Clubheim_error").innerHTML="";
	  }*/
	   if(Member_President==0)
	 {
	  document.getElementById("Member_President_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 }
	 else
	 {
	     document.getElementById("Member_President_error").innerHTML="";
		
	 }	 
return false;
}else {return true;}	
}

function reject()
{console.log("hello");
	var Member_Name_isReject;
	var Member_Type_isReject;
	var Member_Website_isReject;
	var Member_Desc_isReject;
	var Member_Address_Street_isReject;
	var Member_House_No_isReject;
	var Member_ZIP_isReject;
	var Member_City_isReject;
	var Member_Telephone_isReject;
	var Member_Clubheim_isReject;
	var Member_President_isReject;
	var Member_Dist_isReject;
	var Member_Country_isReject;
	var Member_FB_Address_isReject;
	var Member_Twtr_Address_isReject;
	var Member_Multiple_Sports_isReject;
	var MA_name_isReject;
	var MA_first_name_isReject;
	var MA_position_isReject;
	var MA_street_no_isReject;
	var MA_house_no_isReject;
	var MA_zip_isReject;
	var MA_city_isReject;
	var MA_phone_isReject;
	var MA_mobile_isReject;
	var MA_email_isReject,Member_logo_isReject;
	
	
	if(document.getElementById("Member_Name_isReject").checked)
	{
		Member_Name_isReject = "Rejected";
	}
	else
	{
		Member_Name_isReject = "Accepted";
	}
	if(document.getElementById("Member_Type_isReject").checked)
	{
		Member_Type_isReject = "Rejected";
	}
	else {Member_Type_isReject = "Accepted";}
	
	if(document.getElementById("Member_Website_isReject").checked)
	{
		Member_Website_isReject = "Rejected";
	}else {Member_Website_isReject = "Accepted";}
	
	if(document.getElementById("Member_Desc_isReject").checked)
	{
		Member_Desc_isReject = "Rejected";
	}else {Member_Desc_isReject = "Accepted";}
	
	if(document.getElementById("Member_Address_Street_isReject").checked)
	{
		Member_Address_Street_isReject = "Rejected";
	}else {Member_Address_Street_isReject = "Accepted";}
	
	if(document.getElementById("Member_House_No_isReject").checked)
	{
		Member_House_No_isReject = "Rejected";
	}else {Member_House_No_isReject = "Accepted";}
	
	if(document.getElementById("Member_ZIP_isReject").checked)
	{
		Member_ZIP_isReject = "Rejected";
	}else {Member_ZIP_isReject = "Accepted";}
	
	if(document.getElementById("Member_City_isReject").checked)
	{
		Member_City_isReject = "Rejected";
	}else {Member_City_isReject = "Accepted";}
	
	if(document.getElementById("Member_Telephone_isReject").checked)
	{
		Member_Telephone_isReject = "Rejected";
	}else {Member_Telephone_isReject = "Accepted";}
	
	if(document.getElementById("Member_Clubheim_isReject").checked)
	{
		Member_Clubheim_isReject = "Rejected";
	}else {Member_Clubheim_isReject = "Accepted";}
	
	if(document.getElementById("Member_President_isReject").checked)
	{
		Member_President_isReject = "Rejected";
	}else {Member_President_isReject = "Accepted";}
	
	if(document.getElementById("Member_Dist_isReject").checked)
	{
		Member_Dist_isReject = "Rejected";
	}else {Member_Dist_isReject = "Accepted";}
	
	if(document.getElementById("Member_Country_isReject").checked)
	{
		Member_Country_isReject = "Rejected";
	}else {Member_Country_isReject = "Accepted";}
	
	if(document.getElementById("Member_FB_Address_isReject").checked)
	{
		Member_FB_Address_isReject = "Rejected";
	}else {Member_FB_Address_isReject = "Accepted";}
	
	if(document.getElementById("Member_Twtr_Address_isReject").checked)
	{
		Member_Twtr_Address_isReject = "Rejected";
	}else {Member_Twtr_Address_isReject = "Accepted";}
	
	if(document.getElementById("Member_Multiple_Sports_isReject").checked)
	{
		Member_Multiple_Sports_isReject = "Rejected";
	}else {Member_Multiple_Sports_isReject = "Accepted";}
	
	if(document.getElementById("MA_name_isReject").checked)
	{
		MA_name_isReject = "Rejected";
	}else {MA_name_isReject = "Accepted";}
	
	if(document.getElementById("MA_first_name_isReject").checked)
	{
		MA_first_name_isReject = "Rejected";
	}else {MA_first_name_isReject = "Accepted";}
	
	if(document.getElementById("MA_position_isReject").checked)
	{
		MA_position_isReject = "Rejected";
	}else {MA_position_isReject = "Accepted";}
	
	if(document.getElementById("MA_street_no_isReject").checked)
	{
		MA_street_no_isReject = "Rejected";
	}else {MA_street_no_isReject = "Accepted";}
	
	if(document.getElementById("MA_house_no_isReject").checked)
	{
		MA_house_no_isReject = "Rejected";
	}else {MA_house_no_isReject = "Accepted";}
	
	if(document.getElementById("MA_zip_isReject").checked)
	{
		MA_zip_isReject = "Rejected";
	}else {MA_zip_isReject = "Accepted";}
	
	if(document.getElementById("MA_city_isReject").checked)
	{
		MA_city_isReject = "Rejected";
	}else {MA_city_isReject = "Accepted";}
	
	if(document.getElementById("MA_phone_isReject").checked)
	{
		MA_phone_isReject = "Rejected";
	}else {MA_phone_isReject = "Accepted";}
	
	if(document.getElementById("MA_mobile_isReject").checked)
	{
		MA_mobile_isReject = "Rejected";
	}else {MA_mobile_isReject = "Accepted";}
	
	if(document.getElementById("MA_email_isReject").checked)
	{
		MA_email_isReject = "Rejected";
	}else {MA_email_isReject = "Accepted";}
	
	if(document.getElementById("Member_logo_isReject").checked)
	{
		Member_logo_isReject = "Rejected";
	}else {Member_logo_isReject = "Accepted";}
	
	//window.open("<?php echo base_url().'admin/reject/'.$memberAppId."/".$sessionid; ?>?Member_Name_isReject="+Member_Name_isReject , "_parent ");
	window.location.assign("<?php echo base_url().'admin/reject/'.$memberAppId."/".$sessionid; ?>?Member_Name_isReject="+Member_Name_isReject+"&Member_Type_isReject="+Member_Type_isReject+"&Member_Website_isReject="+Member_Website_isReject+"&Member_Desc_isReject="+Member_Desc_isReject+"&Member_Address_Street_isReject="+Member_Address_Street_isReject+"&Member_House_No_isReject="+Member_House_No_isReject+"&Member_ZIP_isReject="+Member_ZIP_isReject+"&Member_City_isReject="+Member_City_isReject+"&Member_Telephone_isReject="+Member_Telephone_isReject+"&Member_Clubheim_isReject="+Member_Clubheim_isReject+"&Member_President_isReject="+Member_President_isReject+"&Member_Dist_isReject="+Member_Dist_isReject+"&Member_Country_isReject="+Member_Country_isReject+"&Member_FB_Address_isReject="+Member_FB_Address_isReject+"&Member_Twtr_Address_isReject="+Member_Twtr_Address_isReject+"&Member_Multiple_Sports_isReject="+Member_Multiple_Sports_isReject+"&MA_name_isReject="+MA_name_isReject+"&MA_first_name_isReject="+MA_first_name_isReject+"&MA_position_isReject="+MA_position_isReject+"&MA_street_no_isReject="+MA_street_no_isReject+"&MA_house_no_isReject="+MA_house_no_isReject+"&MA_zip_isReject="+MA_zip_isReject+"&MA_city_isReject="+MA_city_isReject+"&MA_phone_isReject="+MA_phone_isReject+"&MA_mobile_isReject="+MA_mobile_isReject+"&MA_email_isReject="+MA_email_isReject+"&Member_logo_isReject="+Member_logo_isReject);
}

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
/*if(document.getElementById("BMember_Desc").value!=document.getElementById("Member_Desc").value)
{
	document.getElementById("Member_Desc").style.fontWeight='bold';
}*/
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
/*if(document.getElementById("BMA_dist").value!=document.getElementById("MA_dist").value)
{
	document.getElementById("MA_dist").style.fontWeight='bold';
}*/
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
if(document.getElementById("BMember_Clubheim").value!=document.getElementById("Member_Clubheim").value)
{
	document.getElementById("Member_Clubheim").style.fontWeight='bold';
}
if(document.getElementById("BMember_President").value!=document.getElementById("Member_President").value)
{
	document.getElementById("Member_President").style.fontWeight='bold';
}	
}
</script>

</body>
</html>