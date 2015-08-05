<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">
	
	 <?php include("include/files.php"); ?>

</head>

<body class="has-background" data-rsevent-id="rs_208437">
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php"); ?>

<div class="container l-content pull-left">
	<div class="component component-form">
  <?php
  $openmail='';
   if(isset($error)) {  echo "<span class='col-md-8 col-lg-8'>
  	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$error['error']."</span>";  } ?>
		 <?php  if(isset($getMessagebyTitle)) {
			  foreach($getMessagebyTitle as $title) { echo "<span class='col-md-8 col-lg-8 alert alert-info'>
		 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$title->msg_german_value."</span>"; 
if(isset($getmemberbyid))
	{
		foreach($getmemberbyid as $memberval)
		{
		$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
	}		  
}
  } ?>
   <div class="panel-body" style="margin-left:-15px;">
   <div class=" col-md-8 col-lg-8" style="margin-left:-15px;">
                  
		<?php //if(isset($getmemberbyid)) { foreach($getmemberbyid as $value){ 
		if(isset($getmemberlogbyid)) { foreach($getmemberlogbyid as $value)
		{
			 $imagesize=array();$width='';$height='';
		if($value->Member_logo==="0") 
		{
			 $imgname="No_Logo.png";$width=120;$height=120;
		 }
		elseif($value->Member_logo!="") 
		{
			$imgname=$value->Member_logo;
			if(file_exists("./assets/img/Uploadlogos/".$imgname))
			{
				/* Get the image info */
			$info = getimagesize(asset_url()."img/Uploadlogos/".$imgname);
			 
			/* Calculate aspect ratio by dividing height by width */
			  $aspectRatio = $info[1] / $info[0];
			 if($aspectRatio>1){$width=100;}elseif($aspectRatio>0.5){$width=220;}else{$width=380;}
			/* Keep the width fix at 100px, 
			   but change the height according to the aspect ratio */
			$height = (int)($aspectRatio * $width) . "px";
			 
			/* Use the 'newHeight' in the CSS height property below. */
			$width .= "px";
		}else{$imgname="No_Logo.png";$width=120;$height=120;}
		}
		else{$imgname="No_Logo.png";$width=120;$height=120;}	
			?>
		

		<form method="post" action="<?php echo base_url()."member_author/updateprofile"; ?>" id="Addprofile" name="Form" enctype="multipart/form-data">
		 			  <hr> <h3>Vereinsprofil</h3> <hr> 
                 <div class="control-group"> <label class="control-label" for="inputName">Vereinsname* 
                <span id="Member_Name_error"  class="text_error"></span>
			</label>
            <div class="controls" >
              <input type="text"  id="Member_Name" class="form-control" name="Member_Name"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Name); ?>'  >
            </div>
            </div>
            <div class="control-group">
             <label class="control-label" for="inputName">Vereinsart*</label><span id="Member_Type_error"  class="text_error"></span>
             <div class="controls" >
             <select name="Member_Type" id="Member_Type" class="form-control">
                <option value="">Vereinsart</option>
                 <?php foreach($getActiveContactType as $contactType) {
					 if($value->Member_Type==$contactType->contact_type_german_value) $show='selected';else $show='';
					  echo "<option value='".$contactType->contact_type_german_value."' ".$show.">".$contactType->contact_type_german_value."</option>";} ?>
               
             </select>
             </div>
             </div>
            <div class="form-group">
              <div class="controls" >
              <div class="fileUpload btn"> 
                <span class="text-center"><?php echo $this->lang->line("Upload_logo"); ?></span>
                <input type="file" class="upload" name="logo" id="logo" onChange="uploadImage()"></div>
                <div class="btn"> 
                <span class="text-center" onClick="deleteLogo('<?php echo $value->Member_App_Id;?>')"><?php echo $this->lang->line("Delete_logo"); ?></span>
                </div>
                <small>(<?php echo $this->lang->line("Upload_msg"); ?>)</small>
                <div id="logo_error"  class="text_error"></div>
             <div id="showbox" > <input type="hidden" name="filename" value="<?php echo $value->Member_logo; ?>">
            <img src="<?php  echo asset_url()."img/Uploadlogos/".$imgname; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
            </div>
              </div>
              </div>
             
                
     <div class="form-group">
        <label class="control-label" for="inputName">Beschreibung* (maximal 500 Zeichen)<span id="Member_Desc_error"  class="text_error"></span>
</label>
    <div class="controls" >
      <textarea name="Member_Desc" id="Member_Desc" class="form-control" maxlength="500" cols="12" rows="10" style="width: 565px;resize:none;overflow:hidden;"><?php echo $value->Member_Desc; ?></textarea>
    </div> </div>
     <hr><h3>Kontaktdaten</h3><hr>
              <div class="control-group">
            <label class="control-label" for="inputName">Straße*</label><span id="Member_Address_Street_error"  class="text_error"></span>
    <div class="controls" >
      <input type="text"  id="Member_Address_Street" class="form-control" name="Member_Address_Street"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Address_Street); ?>'  >
    </div>
    </div>
     <div class="control-group">  <label class="control-label" for="inputName">Hausnummer</label>
    <div class="controls" >
      <input type="text"  id="Member_House_No"  class="form-control" name="Member_House_No"  
      value='<?php echo str_replace("'","&lsquo;",$value->Member_House_No); ?>' >
    </div></div>
    
    <div class="control-group">
            <label class="control-label" for="inputName">PLZ*</label><span id="Member_ZIP_error"  class="text_error"></span>
    <div class="controls" >
      <input type="text"  id="Member_ZIP" class="form-control" name="Member_ZIP"  value="<?php echo $value->Member_ZIP; ?>"  >
    </div>
         </div>
          <div class="control-group">
            <label class="control-label" for="inputName">Ort*</label><span id="Member_City_error"  class="text_error"></span>
    <div class="controls" >
      <input type="text"  id="Member_City"  class="form-control" name="Member_City"  value='<?php echo str_replace("'","&lsquo;",$value->Member_City); ?>'  >
    </div></div>
    <div class="control-group">
            <label class="control-label" for="inputName">Stadtteil*</label><span id="Member_Dist_error"  class="text_error"></span>
    <div class="controls" >
                 <select name="Member_Dist" id="Member_Dist"  class="form-control">
                 <option value="">Stadtteil</option>
                 <?php foreach($getActiveDistrics as $districtValue) {
					  if($value->Member_Dist==$districtValue->dist_german_name) $showdist='selected';else $showdist='';
					  echo "<option value='".$districtValue->dist_german_name."' ".$showdist.">".$districtValue->dist_german_name."</option>";} ?>
                </select>
             </div>
    </div>
     <div class="control-group">
            <label class="control-label" for="inputName">Clubheim*</label><span id="Member_Clubheim_error"  class="text_error"></span>
    <div class="controls" >
                 <input type="text" id="Member_Clubheim" class="form-control" name="Member_Clubheim" value='<?php echo str_replace("'","&lsquo;",$value->Member_Clubheim); ?>' >
             </div>
    </div>
      <div class="control-group">
            <label class="control-label" for="inputName">1. Vorsitzender*</label><span id="Member_President_error"  class="text_error"></span>
    <div class="controls" >
    <input type="text" autocomplete="off" id="Member_President" class="form-control" name="Member_President" value='<?php echo str_replace("'","&lsquo;",$value->Member_President); ?>' >
             </div>
    </div>     
   <div class="control-group">
            <label class="control-label" for="inputName">Vereinssparten
</label>
    <div class="controls" >
      <input type="text"  id="Member_Multiple_Sports" class="form-control" name="Member_Multiple_Sports"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Multiple_Sports); ?>'  >
      <input type="hidden" name="memberid" value="<?php echo $value->Member_id; ?>">
       <input type="hidden" name="memberappid" value="<?php echo $value->Member_App_Id; ?>">
    </div></div>
     <div class="control-group">
            <label class="control-label" for="inputName">Handy
</label>
    <div class="controls" >
      <input type="text"  id="MA_mobile" class="form-control" name="MA_mobile"  value="<?php echo $value->MA_mobile; ?>"  >
    </div></div> 
    <div class="control-group">
            <label class="control-label" for="inputName">Website*</label><span id="Member_Website_error"  class="text_error"></span>
    <div class="controls" ><!--<a href="http://<?php //echo $value->Member_Website; ?>" class="form-control" target="_blank"><?php //echo $value->Member_Website; ?></a>-->
      <input type="text"  id="Member_Website" class="form-control" name="Member_Website"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Website); ?>'  >
    </div>
    </div>
     <div class="control-group">
            <label class="control-label" for="inputName">Facebook
</label>
    <div class="controls" >
      <input type="text"  id="Member_FB_Address" class="form-control" name="Member_FB_Address"  value='<?php echo str_replace("'","&lsquo;",$value->Member_FB_Address); ?>'  >
    </div></div>
    <div class="control-group">
            <label class="control-label" for="inputName">Twitter
</label>
    <div class="controls" >
      <input type="text"  id="Member_Twtr_Address" class="form-control" name="Member_Twtr_Address"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Twtr_Address); ?>'  >
    </div></div> 
            
      <hr><h3>Ansprechpartner</h3> <hr>               
     <div class="control-group">	   
    <label class="control-label" for="inputName">Vorname Ansprechpartner*</label><span id="MA_name_error"  class="text_error"></span>
            <div class="controls" >
              <input type="text"  id="MA_name" class="form-control" name="MA_name" value='<?php echo str_replace("'","&lsquo;",$value->MA_name); ?>'  >
            </div></div>
            <div class="control-group">	   
    <label class="control-label" for="inputName">Name Ansprechpartner*</label><span id="MA_first_name_error"  class="text_error"></span>
            <div class="controls" >
              <input type="text"  id="MA_first_name" class="form-control" name="MA_first_name" value='<?php echo str_replace("'","&lsquo;",$value->MA_first_name); ?>'  >
            </div></div>
             <div class="control-group">
            <label class="control-label" for="inputName">Position*</label><span id="MA_position_error"  class="text_error"></span>
    <div class="controls" >
      <input type="text"  id="MA_position" class="form-control" name="MA_position" value='<?php echo str_replace("'","&lsquo;",$value->MA_position); ?>'  >
    </div>
    </div>
    <div class="control-group">
            <label class="control-label" for="inputName">Email* </label><span id="MA_email_error" class="text_error"></span>
    <div class="controls" ><!--<a href="mailto:<?php   //echo$value->MA_email; ?>" class="form-control"><?php //echo $value->MA_email; ?></a>-->
      <input type="text"  id="MA_email" class="form-control" name="MA_email"  value='<?php echo str_replace("'","&lsquo;",$value->MA_email); ?>'  >
    </div></div>
             <div class="control-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text"  id="MA_street_no" class="form-control" name="MA_street_no" value='<?php echo str_replace("'","&lsquo;",$value->MA_street_no); ?>'  >
    </div>
    </div>
     <div class="control-group">
               <label class="control-label" for="inputName">Hausnummer
</label>
            <div class="controls" >
              <input type="text"  id="MA_house_no" class="form-control" name="MA_house_no" value='<?php echo str_replace("'","&lsquo;",$value->MA_house_no); ?>'  >
            </div></div>
             <div class="control-group">
            <label class="control-label" for="inputName">PLZ 
</label>
    <div class="controls" >
      <input type="text"  id="MA_zip" class="form-control" name="MA_zip" value='<?php echo $value->MA_zip; ?>'  >
    </div></div>
     <div class="control-group">
            <label class="control-label" for="inputName">Ort
</label>
    <div class="controls" >
      <input type="text"  id="MA_city"  class="form-control" name="MA_city"  value='<?php echo str_replace("'","&lsquo;",$value->MA_city); ?>'  >
    </div></div>
    <!--<div class="control-group">
            <label class="control-label" for="inputName">Stadtteil
</label>
    <div class="controls" >
                 <select name="MA_dist" id="MA_dist"  class="form-control">
                 <option value="">Stadtteil</option>
                  <?php //foreach($getActiveDistrics as $districtValue) {
					  //if($value->MA_dist==$districtValue->dist_german_name) $showdist='selected';else $showdist='';
					  //echo "<option value='".$districtValue->dist_german_name."' ".$showdist.">".$districtValue->dist_german_name."</option>";} ?>
               </select>
             </div>
    </div>-->
    
    <div class="control-group">
            <label class="control-label" for="inputName">Telefon 
</label>
    <div class="controls" >
      <input type="text"  id="MA_phone" class="form-control" name="MA_phone"  value='<?php echo str_replace("'","&lsquo;",$value->MA_phone); ?>'  >
    </div></div>
   <?php $val; if(isset($getmemberbyid)) { foreach($getmemberbyid as $membervalue){$val=$membervalue->Member_Current_Status;
	 								if($membervalue->Member_Current_Status==="New")$btnValue="button";else $btnValue="submit";
									 } } ?>
  
<div><div class="pull-left">Mit * gekennzeichnete Felder sind Pflichtfelder &nbsp;<span id="CheckStatus_error"  class="text_error"></span></div>
<input type="hidden" name="CheckStatus" id="CheckStatus" value="<?php echo $val; ?>">
<div class="btn-group  pull-right">
<button class="btn"  type="<?php echo $btnValue; ?>" name="<?php echo $btnValue; ?>" title="Speichern" onClick="return validateForm()">Absenden
<!--<img class="btn13" src="<?php echo asset_url(); ?>img/orange_icons/update_upload_24.png">
--></button>
</div> </div>	
 </div>
 <?php } } ?>
            </div>
          </form>
 </div>
</div>

<?php //include("include/footer.php"); ?>
<?php // if($openmail!=""){echo $openmail; } // code to open the  outlook ?>
<script type="text/javascript">
    
function validateForm()
{

var Member_Name = document.getElementById("Member_Name").value;
var Member_Type = document.getElementById("Member_Type").value;
var Member_Website = document.getElementById("Member_Website").value;
var Member_Dist = document.getElementById("Member_Dist").value;
var Member_ZIP = document.getElementById("Member_ZIP").value;
var MA_name = document.getElementById("MA_name").value;
var MA_first_name = document.getElementById("MA_first_name").value;
var MA_position = document.getElementById("MA_position").value;
//var MA_zip = document.getElementById("MA_zip").value;
var MA_email = document.getElementById("MA_email").value;
var Member_Desc = document.getElementById("Member_Desc").value;
var CheckStatus = document.getElementById("CheckStatus").value;
var MA_phone = document.getElementById("MA_phone").value;
var Member_City = document.getElementById("Member_City").value;
var Member_Address_Street = document.getElementById("Member_Address_Street").value;
var Member_Clubheim = document.getElementById("Member_Clubheim").value;
var Member_President = document.getElementById("Member_President").value;
//console.log(Member_ZIP);


var num = /^[0-9]+$/;
//var  mailP = /^[0-9_A-Z._.a-z0-9_0-9]+[@]+[a-z0-9]+[.]+[a-z0-9]+$/||/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
var mailP =/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
if( (Member_Name==0) ||(Member_Type==0) ||(Member_Website==0)||  (Member_Dist=="") ||(Member_ZIP==0||Member_ZIP.match(num)==null) || Member_ZIP.length<5 
||(MA_name==0)||(MA_first_name==0)||(MA_position==0) ||(MA_email==0||MA_email.match(mailP)==null)||(Form.Member_Desc.selectedIndex==0)||
(Member_Desc==0) || (CheckStatus.length==3) ||(Member_City==0) ||(Member_Address_Street==0) || (Member_Clubheim==0)  || (Member_President==0))
{
	 if(Member_Name==0)
	 {
	 document.getElementById("Member_Name_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("Member_Name_error").innerHTML="";
		}
		
	if( Form.Member_Type.selectedIndex==0)
	 {
	  document.getElementById("Member_Type_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_Type_error").innerHTML="";
	 }
	 
	 if(Member_Website=="")
	 {
	 document.getElementById("Member_Website_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("Member_Website_error").innerHTML="";
		}
	if(Member_Dist=="")
	 {
	 document.getElementById("Member_Dist_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("Member_Dist_error").innerHTML='';
		}
	if(Member_ZIP=="" || Member_ZIP==null)
	 {
	  document.getElementById("Member_ZIP_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	    if(Member_ZIP.match(num)==null)
		{
		 document.getElementById("Member_ZIP_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
		}
		else if(Member_ZIP.length>0 && Member_ZIP.length<5)
		{
			document.getElementById("Member_ZIP_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
		}
		else
		{
		document.getElementById("Member_ZIP_error").innerHTML="";
		}
	 }
	 
	 if(MA_name=="")
	 {
	 document.getElementById("MA_name_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("MA_name_error").innerHTML="";
		}
		
	if(MA_first_name==0)
	 {
	 document.getElementById("MA_first_name_error").innerHTML="Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("MA_first_name_error").innerHTML="";
		}
		
	if(MA_position==0 || MA_position=="")
	 {
	 document.getElementById("MA_position_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
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
		 document.getElementById("MA_zip_error").innerHTML=" Invalid PLZ Please only type numbers.";
		}
		else if(MA_zip.length>0 && MA_zip.length<5)
		{
			document.getElementById("MA_zip_error").innerHTML=" It should be 5 digits only.";
		}
		else
		{
		document.getElementById("MA_zip_error").innerHTML="";
		}
	 }*/
	 
	 if(MA_email==0)
	 {
	 document.getElementById("MA_email_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
		if(MA_email.match(mailP)==null)
		{
		document.getElementById("MA_email_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";	
		}
		else
		{
	    document.getElementById("MA_email_error").innerHTML="";
		}
	 
	 }
	 
	if(Member_Desc==0 || Member_Desc=="")
	 {
	  document.getElementById("Member_Desc_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_Desc_error").innerHTML="";
		
	 }
		//console.log(CheckStatus.length);
	if(CheckStatus.length==3)
	 {
	 document.getElementById("CheckStatus_error").innerHTML="You can not edit profile.";
	 }
	 else
		{
	    document.getElementById("CheckStatus_error").innerHTML="";
		}
	  if(Member_City==0)
	 {
	  document.getElementById("Member_City_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_City_error").innerHTML="";
		
	 }
	  if(Member_Address_Street==0)
	 {
	  document.getElementById("Member_Address_Street_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_Address_Street_error").innerHTML="";
		
	 }
	  if(Member_Clubheim==0)
	 {
	  document.getElementById("Member_Clubheim_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_Clubheim_error").innerHTML="";
		
	 }
	  if(Member_President==0)
	 {
	  document.getElementById("Member_President_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
	 {
	     document.getElementById("Member_President_error").innerHTML="";
		
	 }
return false;
}else{return true;}	
}
</script>

<?php //include("include/footer-main.php"); ?>

<script type="text/javascript">
	
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
      url: '<?php echo base_url().'welcome/uploadImage' ?>',
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
function deleteLogo(AppID)
{
$.ajax({ type:"POST",
url: "<?php echo base_url().'member_author/deleteLogo' ?>",
data:{AppID:AppID},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
document.getElementById("showbox").style.display='block';

});		
}
</script>

</body>
</html>