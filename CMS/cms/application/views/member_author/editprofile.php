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

<body>
<div class="container l-content pull-left">
<div class="row">
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
             
                 <div class="col-md-12 col-lg-12" style="margin-left:-15px;">
               
                  
                <div class=" col-md-8 col-lg-8" style="margin-left:-15px;">
                  
		<?php if(isset($getmemberbyid)) 
		{ foreach($getmemberbyid as $getmemberbyid13){
		$Member_Name_isReject=$getmemberbyid13->Member_Name_isReject;
		$Member_Type_isReject=$getmemberbyid13->Member_Type_isReject;
		$Member_Website_isReject=$getmemberbyid13->Member_Website_isReject;
		$Member_Desc_isReject=$getmemberbyid13->Member_Desc_isReject;
		$Member_Address_Street_isReject=$getmemberbyid13->Member_Address_Street_isReject;
		$Member_House_No_isReject=$getmemberbyid13->Member_House_No_isReject;
		$Member_ZIP_isReject=$getmemberbyid13->Member_ZIP_isReject;
		$Member_City_isReject=$getmemberbyid13->Member_City_isReject;
		$Member_Telephone_isReject=$getmemberbyid13->Member_Telephone_isReject;
		$Member_Clubheim_isReject=$getmemberbyid13->Member_Clubheim_isReject;
		$Member_President_isReject=$getmemberbyid13->Member_President_isReject;
		$Member_Dist_isReject=$getmemberbyid13->Member_Dist_isReject;
		$Member_Country_isReject=$getmemberbyid13->Member_Country_isReject;
		$Member_FB_Address_isReject=$getmemberbyid13->Member_FB_Address_isReject;
		$Member_Twtr_Address_isReject=$getmemberbyid13->Member_Twtr_Address_isReject;
		$Member_Multiple_Sports_isReject=$getmemberbyid13->Member_Multiple_Sports_isReject;
		$MA_name_isReject=$getmemberbyid13->MA_name_isReject;
		$MA_first_name_isReject=$getmemberbyid13->MA_first_name_isReject;
		$MA_position_isReject=$getmemberbyid13->MA_position_isReject;
		$MA_street_no_isReject=$getmemberbyid13->MA_street_no_isReject;
		$MA_house_no_isReject=$getmemberbyid13->MA_house_no_isReject;
		$MA_zip_isReject=$getmemberbyid13->MA_zip_isReject;
		$MA_city_isReject=$getmemberbyid13->MA_city_isReject;
		$MA_phone_isReject=$getmemberbyid13->MA_phone_isReject;
		$MA_mobile_isReject=$getmemberbyid13->MA_mobile_isReject;
		$MA_email_isReject=$getmemberbyid13->MA_email_isReject;
		$Member_logo_isReject=$getmemberbyid13->Member_logo_isReject;
		}} 
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
		 			<!--  <hr> <h3>Vereinsprofil</h3> <hr> -->
                <div class="field control-group formo-input" id="field-container-8a8f6652bc42b9bd42c4594bf7ebb4ad">
                <div class="form-group"> <label class="control-label" for="inputName">Vereinsname* 
                <span id="Member_Name_error"  style="color:#F56780"></span>
			</label>
            <div class="controls">
        <input type="text" id="Member_Name" class="form-control <?php if($Member_Name_isReject=="Rejected") echo "reject_border";  ?>"  name="Member_Name"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Name); ?>'>
            </div>
            </div>
            
            <div class="form-group">
              <div class="controls" >
              <div class="fileUpload btn"> 
                <span class="text-center" style="color:white;"><?php echo $this->lang->line("Upload_logo"); ?></span>
                <input type="file" class="upload" name="logo" id="logo" onChange="uploadImage()" title=" "></div>
                <div class="btn"> 
                <span class="text-center" style="color:white;" onClick="deleteLogo('<?php echo $value->Member_App_Id;?>')"><?php echo $this->lang->line("Delete_logo"); ?></span>
                </div>
                <small>(<?php echo $this->lang->line("Upload_msg"); ?>)</small>
                <div id="logo_error"  style="color:#F56780"></div>
             <div id="showbox" > <input type="hidden" name="filename" value="<?php echo $value->Member_logo; ?>">
            <img src="<?php  echo asset_url()."img/Uploadlogos/".$imgname; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="<?php if($Member_logo_isReject=="Rejected") echo "reject_border";  ?>" >
            </div>
              </div>
              </div>
             
                
     <div class="form-group">
        <label class="control-label" for="inputName">Beschreibung* (maximal 500 Zeichen)<span id="Member_Desc_error"  style="color:#F56780"></span>
</label>
    <div class="controls <?php if($Member_Desc_isReject=="Rejected") echo "reject_border"; ?>" id="Member_Desc_div" >
      <textarea name="Member_Desc" id="Member_Desc" class="form-control ckeditor" 
       maxlength="500" cols="12" rows="6" style="resize:none;overflow:hidden;"><?php echo str_replace("<br />","",$value->Member_Desc); ?></textarea>
    </div> </div>
    
    <hr> <h3>Vereinsdaten</h3> <hr>
    <div class="form-group">
             <label class="control-label" for="inputName">Vereinsart* <span id="Member_Type_error"  style="color:#F56780"></span></label>
             <div class="controls" >
             <select name="Member_Type" id="Member_Type" class="form-control <?php if($Member_Type_isReject=="Rejected") echo "reject_border";  ?>" >
                <option value="">Vereinsart</option>
                 <?php foreach($getActiveContactType as $contactType) {
					 if($value->Member_Type==$contactType->contact_type_german_value) $show='selected';else $show='';
					  echo "<option value='".$contactType->contact_type_german_value."' ".$show.">".$contactType->contact_type_german_value."</option>";} ?>
               
             </select>
             </div>
             </div>
             
           <!-- <hr><h3>Kontaktdaten</h3><hr>-->
              <div class="form-group">
            <label class="control-label" for="inputName">Straße* <span id="Member_Address_Street_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text"  id="Member_Address_Street" class="form-control <?php if($Member_Address_Street_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Address_Street"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Address_Street); ?>'  >
    </div>
    </div>
     <div class="form-group">  <label class="control-label" for="inputName">Hausnummer</label>
    <div class="controls" >
      <input type="text"  id="Member_House_No"  class="form-control <?php if($Member_House_No_isReject=="Rejected") echo "reject_border";  ?>" name="Member_House_No"  
      value='<?php echo str_replace("'","&lsquo;",$value->Member_House_No); ?>' >
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Stadtteil* <span id="Member_Dist_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
                 <select name="Member_Dist" id="Member_Dist"  class="form-control <?php if($Member_Dist_isReject=="Rejected") echo "reject_border";  ?>">
                 <option value="">Stadtteil</option>
                 <?php foreach($getActiveDistrics as $districtValue) {
					  if($value->Member_Dist==$districtValue->dist_german_name) $showdist='selected';else $showdist='';
					  echo "<option value='".$districtValue->dist_german_name."' ".$showdist.">".$districtValue->dist_german_name."</option>";} ?>
                </select>
             </div>
    </div>
    <div class="form-group">
            <label class="control-label" for="inputName">PLZ* <span id="Member_ZIP_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text"  id="Member_ZIP" maxlength="10" class="form-control <?php if($Member_ZIP_isReject=="Rejected") echo "reject_border";  ?>" name="Member_ZIP"  value="<?php echo $value->Member_ZIP; ?>"  >
    </div>
         </div>
          <div class="form-group">
            <label class="control-label" for="inputName">Ort* <span id="Member_City_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text"  id="Member_City"  class="form-control <?php if($Member_City_isReject=="Rejected") echo "reject_border";  ?>" name="Member_City"  value='<?php echo str_replace("'","&lsquo;",$value->Member_City); ?>'  >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Clubheim <!--<span id="Member_Clubheim_error"  style="color:#F56780"></span>-->
</label>
    <div class="controls" >
                 <input type="text" id="Member_Clubheim" class="form-control <?php if($Member_Clubheim_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Clubheim" 
                 value='<?php echo str_replace("'","&lsquo;",$value->Member_Clubheim); ?>' >
             </div>
    </div>
      <div class="form-group">
            <label class="control-label" for="inputName">1. Vorsitzender* <span id="Member_President_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
    <input type="text" autocomplete="off" id="Member_President" class="form-control <?php if($Member_President_isReject=="Rejected") echo "reject_border";  ?>" name="Member_President" 
    value='<?php echo str_replace("'","&lsquo;",$value->Member_President); ?>' >
             </div>
    </div>     
   
     <div class="form-group">
            <label class="control-label" for="inputName">Telefon
</label>
    <div class="controls" >
      <input type="text"  id="Member_Telephone" class="form-control <?php if($Member_Telephone_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Telephone"  value="<?php echo $value->Member_Telephone; ?>"  >
    </div></div> 
    <div class="form-group">
            <label class="control-label" for="inputName">Website <!--<span id="Member_Website_error"  style="color:#F56780"></span>--></label>
    <div class="controls" ><!--<a href="http://<?php //echo $value->Member_Website; ?>" class="form-control" target="_blank"><?php //echo $value->Member_Website; ?></a>-->
      <input type="text"  id="Member_Website" class="form-control <?php if($Member_Website_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Website"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Website); ?>'  >
    </div>
    </div>
     <div class="form-group">
            <label class="control-label" for="inputName">Facebook
</label>
    <div class="controls" >
      <input type="text"  id="Member_FB_Address" class="form-control <?php if($Member_FB_Address_isReject=="Rejected") echo "reject_border";  ?>" name="Member_FB_Address"  value='<?php echo str_replace("'","&lsquo;",$value->Member_FB_Address); ?>'  >
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Twitter
</label>
    <div class="controls" >
      <input type="text"  id="Member_Twtr_Address" class="form-control <?php if($Member_Twtr_Address_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Twtr_Address"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Twtr_Address); ?>'  >
    </div></div> 
         <div class="form-group">
            <label class="control-label" for="inputName">Vereinssparten
</label>
    <div class="controls" >
      <input type="text"  id="Member_Multiple_Sports" class="form-control <?php if($Member_Multiple_Sports_isReject=="Rejected") echo "reject_border";  ?>" name="Member_Multiple_Sports"  value='<?php echo str_replace("'","&lsquo;",$value->Member_Multiple_Sports); ?>'  >
      <input type="hidden" name="memberid" value="<?php echo $value->Member_id; ?>">
       <input type="hidden" name="memberappid" value="<?php echo $value->Member_App_Id; ?>">
    </div></div>   
      <hr><h3>Kontakt</h3> <hr>               
     <div class="form-group">	   
    <label class="control-label" for="inputName">Vorname Ansprechpartner* <span id="MA_name_error"  style="color:#F56780"></span>
</label>
            <div class="controls" >
              <input type="text"  id="MA_name" class="form-control <?php if($MA_name_isReject=="Rejected") echo "reject_border";  ?>" name="MA_name" value='<?php echo str_replace("'","&lsquo;",$value->MA_name); ?>'  >
            </div></div>
            <div class="form-group">	   
    <label class="control-label" for="inputName">Name Ansprechpartner* <span id="MA_first_name_error"  style="color:#F56780"></span>
</label>
            <div class="controls" >
              <input type="text"  id="MA_first_name" class="form-control <?php if($MA_first_name_isReject=="Rejected") echo "reject_border";  ?>" name="MA_first_name" value='<?php echo str_replace("'","&lsquo;",$value->MA_first_name); ?>'  >
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">Position* <span id="MA_position_error"  style="color:#F56780"></span>

</label>
    <div class="controls" >
      <input type="text"  id="MA_position" class="form-control <?php if($MA_position_isReject=="Rejected") echo "reject_border";  ?>" name="MA_position" value='<?php echo str_replace("'","&lsquo;",$value->MA_position); ?>'  >
    </div>
    </div>
             <div class="form-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text"  id="MA_street_no" class="form-control <?php if($MA_street_no_isReject=="Rejected") echo "reject_border";  ?>" name="MA_street_no" value='<?php echo str_replace("'","&lsquo;",$value->MA_street_no); ?>'  >
    </div>
    </div>
     <div class="form-group">
               <label class="control-label" for="inputName">Hausnummer
</label>
            <div class="controls" >
              <input type="text"  id="MA_house_no" class="form-control <?php if($MA_house_no_isReject=="Rejected") echo "reject_border";  ?>" name="MA_house_no" value='<?php echo str_replace("'","&lsquo;",$value->MA_house_no); ?>'  >
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">PLZ <span id="MA_zip_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text"  id="MA_zip" class="form-control <?php if($MA_zip_isReject=="Rejected") echo "reject_border";  ?>" name="MA_zip" value='<?php echo $value->MA_zip; ?>'  >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Ort
</label>
    <div class="controls" >
      <input type="text"  id="MA_city"  class="form-control <?php if($MA_city_isReject=="Rejected") echo "reject_border";  ?>" name="MA_city"  value='<?php echo str_replace("'","&lsquo;",$value->MA_city); ?>'  >
    </div></div>
    <!--<div class="form-group">
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
    <div class="form-group">
            <label class="control-label" for="inputName">Email* <span id="MA_email_error"  style="color:#F56780"></span>
</label>
    <div class="controls" ><!--<a href="mailto:<?php   //echo$value->MA_email; ?>" class="form-control"><?php //echo $value->MA_email; ?></a>-->
      <input type="text"  id="MA_email" class="form-control <?php if($MA_email_isReject=="Rejected") echo "reject_border";  ?>" name="MA_email"  value='<?php echo str_replace("'","&lsquo;",$value->MA_email); ?>'  >
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Telefon <span id="MA_phone_error"  style="color:#F56780"></span> 
</label>
    <div class="controls" >
      <input type="text"  id="MA_phone" class="form-control <?php if($MA_phone_isReject=="Rejected") echo "reject_border";  ?>" name="MA_phone"  value='<?php echo str_replace("'","&lsquo;",$value->MA_phone); ?>'  >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Handy
	</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_mobile" class="form-control <?php if($MA_mobile_isReject=="Rejected") echo "reject_border";  ?>" name="MA_mobile" value='<?php echo $value->MA_mobile; ?>' >
    </div></div>
     
	</div>
    <?php $val; if(isset($getmemberbyid)) { foreach($getmemberbyid as $membervalue){$val=$membervalue->Member_Current_Status;
	 								if($membervalue->Member_Current_Status==="New")$btnValue="button";else $btnValue="submit";
									 } } ?>
    <div>Mit * gekennzeichnete Felder sind Pflichtfelder &nbsp;<br>
<div class="pull-left">
<br> <a href="<?php echo base_url(); ?>" >zurück zur Liste«</a><span id="CheckStatus_error"  style="color:#F56780"></span></div>
<div class="pull-right">
<input type="hidden" name="CheckStatus" id="CheckStatus" value="<?php echo $val; ?>">
<a  id="showmodel"  class="btn"><?php echo $this->lang->line('delete_btn_rfd'); ?>
</a>
<button class="btn"  type="<?php echo $btnValue; ?>" name="<?php echo $btnValue; ?>" onClick="return validateForm()"><?php echo $this->lang->line('send'); ?></button>
</div>
</div>
 <?php } } ?>
            </div>
          </form>

		
		<?php //include("include/sidebar.php"); ?>

	</div>
   
</div>

<!--COMPOSE MESSAGE MODAL  -->
 <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Bestätigung</h4>
      </div>
      <div class="modal-body">
        <p><?php echo $this->lang->line('poptext_for_rfd_confirm_msg'); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
        <a href="<?php echo base_url()."member_author/req_for_deletion/".$value->Member_App_Id; ?>"  class="btn  btn-default"><?php echo $this->lang->line('delete_btn_rfd'); ?></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
<script type="text/javascript" src="<?php echo asset_url();?>ckeditor/ckeditor.js"></script>

<?php //include("include/footer.php"); ?>
<?php // if($openmail!=""){echo $openmail; } // code to open the  outlook ?>
<script type="text/javascript">
$( "#showmodel" ).click(function() {
$('#delete-modal').modal('show');
});    
function validateForm()
{

var Member_Name = document.getElementById("Member_Name").value;
var Member_Type = document.getElementById("Member_Type").value;
var Member_Dist = document.getElementById("Member_Dist").value;
var Member_ZIP = document.getElementById("Member_ZIP").value;
var MA_name = document.getElementById("MA_name").value;
var MA_first_name = document.getElementById("MA_first_name").value;
var MA_position = document.getElementById("MA_position").value;
var MA_email = document.getElementById("MA_email").value;
var Member_Desc = CKEDITOR.instances.Member_Desc.getData();//;document.getElementById("Member_Desc").value
var CheckStatus = document.getElementById("CheckStatus").value;
var MA_phone = document.getElementById("MA_phone").value;
var Member_City = document.getElementById("Member_City").value;
var Member_Address_Street = document.getElementById("Member_Address_Street").value;
var Member_President = document.getElementById("Member_President").value;


//var num = /^[0-9]+$/;

if( (Member_Name==0) ||(Member_Type==0) ||  (Member_Dist=="") ||(Member_ZIP==0) ||(MA_name==0)||(MA_first_name==0)||(MA_position==0) ||(MA_email==0)||
(Member_Desc==0) || (CheckStatus.length==3) ||(Member_City==0) ||(Member_Address_Street==0) || (Member_President==0))
{console.log(Member_Desc);
	 if(Member_Name==0)
	 {
	 document.getElementById("Member_Name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_Name").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Member_Name_error").innerHTML="";
		}
	if(Member_Desc==0 || Member_Desc=="")
	 {
	  document.getElementById("Member_Desc_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_Desc_div").scrollIntoView();
	  document.getElementById("Member_Desc_div").classList.add("reject_border") ;
	  return false;
	 }
	 else
	 {
	     document.getElementById("Member_Desc_error").innerHTML="";
		
	 }
		
	if( Form.Member_Type.selectedIndex==0)
	 {
	  document.getElementById("Member_Type_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_Type").focus();
	  return false;
	 }
	 else
	 {
	     document.getElementById("Member_Type_error").innerHTML="";
	 }
	  if(Member_Address_Street==0)
	 {
	  document.getElementById("Member_Address_Street_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_Address_Street").focus();
	  return false;
	 }
	 else
	 {
	     document.getElementById("Member_Address_Street_error").innerHTML="";
	 }
	if(Member_Dist=="")
	 {
	 document.getElementById("Member_Dist_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Member_Dist").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Member_Dist_error").innerHTML='';
		}
	if(Member_ZIP=="" || Member_ZIP==null)
	 {
	  document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_ZIP").focus();
	  return false;
	 }
	 else
	 {
	   /* if(Member_ZIP.match(num)==null)
		{
		 document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
		 document.getElementById("Member_ZIP").focus();
	  	return false;
		}
		else*/ if(Member_ZIP.length>0 && Member_ZIP.length>11)
		{
			document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
			document.getElementById("Member_ZIP").focus();
	  		return false;
		}
		else
		{
		document.getElementById("Member_ZIP_error").innerHTML="";
		}
	 }
	 if(Member_City==0)
	 {
	  document.getElementById("Member_City_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_City").focus();return false;
	  return false;
	 }
	 else
	 {
	     document.getElementById("Member_City_error").innerHTML="";
	 }
	  if(Member_President==0)
	 {
	  document.getElementById("Member_President_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_President").focus();
	  return false;
	 }
	 else
	 {
	     document.getElementById("Member_President_error").innerHTML="";
	 }
	 if(MA_name=="")
	 {
	 document.getElementById("MA_name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("MA_name").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("MA_name_error").innerHTML="";
		}
		
	if(MA_first_name==0)
	 {
	 document.getElementById("MA_first_name_error").innerHTML="Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("MA_first_name").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("MA_first_name_error").innerHTML="";
		}
		
	if(MA_position==0 || MA_position=="")
	 {
	 document.getElementById("MA_position_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("MA_position").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("MA_position_error").innerHTML="";
		}
	 if(MA_email==0)
	 {
	 document.getElementById("MA_email_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("MA_email").focus();
	 return false;
	 }
	 else
	 {
		  document.getElementById("MA_email_error").innerHTML="";
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