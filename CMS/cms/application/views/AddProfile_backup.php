<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
session_start();
//$_SESSION['counter']=0;
$_SESSION['counter'] = 1;
 ?>
<!DOCTYPE html>
<html lang="de"  data-rsevent-id="rs_256655"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php"); ?>

<div class="container l-content pull-left">

<style>p{color:red;} </style>
	<div class="row">
	<form method="post" name="Form" action="<?php echo base_url()."welcome/addmember"; ?>"  id="Addprofile" enctype="multipart/form-data" >
		 <div class="panel-body" style="margin-left:-15px;">
             
                <div class=" col-md-8 col-lg-8" style="margin-left:-15px;">
    <?php if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>".$error."</span>";  } ?>
                
                
              <div class="field control-group formo-input" id="field-container-8a8f6652bc42b9bd42c4594bf7ebb4ad">
                        
              <div class="form-group">
              <label class="control-label" for="inputName">Vereinsname* <span id="Member_Name_error"  style="color:#F56780"></span></label>
              <div class="controls" >
              <input type="text" autocomplete="off"  id="Member_Name" class="form-control" name="Member_Name" >
              
              </div>
              </div>
              
              <div class="form-group">
              <div class="controls" >
              <div class="fileUpload btn" style="margin-left:0px;">  
                <span class="text-center"><?php echo $this->lang->line("Upload_logo"); ?></span>
                <input type="file" class="upload" value="" name="logo" id="logo" onChange="uploadImage()"></div><small>(<?php echo $this->lang->line("Upload_msg"); ?>)</small>
                 <div id="logo_error"  style="color:#F56780"></div>
                 <div id="showbox" style="display:none"></div>
              </div>
              </div>
              
              <div class="form-group">
            <label class="control-label" for="inputName">Beschreibung* <span id="Member_Desc_error"  style="color:#F56780"></span></label>
            <div class="controls" >
            <textarea class="form-control" cols="12" rows="8" name="Member_Desc" id="Member_Desc" > </textarea>
            
            </div>
            </div>
                          
             <div class="form-group">
             <label class="control-label" for="inputName">Vereinstyp* <span id="Member_Type_error"  style="color:#F56780"></span></label>
             <div class="controls" >
             <select name="Member_Type" id="Member_Type" class="form-control" autocomplete="off">
                <option value="">Vereinstyp</option>
               <?php foreach($getActiveContactType as $contactType) { echo "<option value='".$contactType->contact_type_german_value."'>".$contactType->contact_type_german_value."</option>";} ?>
             </select>
             
             </div>
             </div>
            <div class="form-group">
            <label class="control-label" for="inputName">Website* <span id="Member_Website_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text" autocomplete="off"  id="Member_Website" class="form-control" name="Member_Website" >
      

    </div>
    </div>
     <div class="form-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text" autocomplete="off"  id="Member_Address_Street" class="form-control" name="Member_Address_Street" >
    </div>
    </div>
          
           <div class="form-group">  <label class="control-label" for="inputName">Hausnummer
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_House_No"  class="form-control" name="Member_House_No" >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">PLZ* <span id="Member_ZIP_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_ZIP" maxlength="5" class="form-control" name="Member_ZIP" >
      
    </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="inputName">Ort
</label>
    <div class="controls" >
                <input type="text" autocomplete="off" id="Member_City" class="form-control" name="Member_City" >
             </div>
    </div>
          <div class="form-group">
            <label class="control-label" for="inputName">Stadtteil* <span id="Member_Dist_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
                 <select name="Member_Dist" id="Member_Dist"  class="form-control" >
                 <option value="" selected>Stadtteil</option>
                 <?php foreach($getActiveDistrics as $districtValue) { echo "<option value='".$districtValue->dist_german_name."'>".$districtValue->dist_german_name."</option>";} ?></select>
             </div>
    </div>
     <div class="form-group">	   
    <label class="control-label" for="inputName">Vorname Ansprechpartner* <span id="MA_name_error"  style="color:#F56780"></span>
</label>
            <div class="controls" >
              <input type="text" autocomplete="off" id="MA_name" class="form-control" name="MA_name" >
              
            </div></div>
            <div class="form-group">	   
    <label class="control-label" for="inputName">Name Ansprechpartner* <span id="MA_first_name_error"  style="color:#F56780"></span>
</label>
            <div class="controls" >
              <input type="text" autocomplete="off" id="MA_first_name" class="form-control" name="MA_first_name" >
              
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">Position* <span id="MA_position_error"  style="color:#F56780"></span>

</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_position" class="form-control" name="MA_position" >
      
    </div>
    </div>
             <div class="form-group">
            <label class="control-label" for="inputName">Straße
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_street_no" class="form-control" name="MA_street_no" >
    </div>
    </div>
     <div class="form-group">
               <label class="control-label" for="inputName">Hausnummer
</label>
            <div class="controls" >
              <input type="text" autocomplete="off" id="MA_house_no" class="form-control" name="MA_house_no" >
            </div></div>
             <div class="form-group">
            <label class="control-label" for="inputName">PLZ <span id="MA_zip_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_zip" maxlength="5" class="form-control" name="MA_zip" >
      
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Ort
</label>
    <div class="controls" >
                 <input type="text" autocomplete="off" id="MA_city" class="form-control" name="MA_city" >
             </div>
    </div>
     <div class="form-group">
            <label class="control-label" for="inputName">Stadtteil
</label>
    <div class="controls" >
                 <select name="MA_dist" id="MA_dist"  class="form-control">
                 <option value="" selected>Stadtteil</option>
                  <?php foreach($getActiveDistrics as $districtValue) { echo "<option value='".$districtValue->dist_german_name."'>".$districtValue->dist_german_name."</option>";} ?></select>
             </div>
    </div>
    <div class="form-group">
            <label class="control-label" for="inputName">Email* <span id="MA_email_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="email" autocomplete="off" id="MA_email" class="form-control" name="MA_email" >
      
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Telefon
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_phone" class="form-control" name="MA_phone" >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Handy
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_mobile" class="form-control" name="MA_mobile" >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Facebook
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_FB_Address" class="form-control" name="Member_FB_Address" >
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Twitter
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_Twtr_Address" class="form-control" name="Member_Twtr_Address" >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Vereinsaktivitaten
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_Multiple_Sports" class="form-control" name="Member_Multiple_Sports" >
    </div></div>
	</div>
 <div class="col-xs-offset-9 pull-right btn-group">
<button class=""  type="submit"  name="submit" title="Speichern" onClick="return validateForm()"> <!---->
<img class="btn13" src="<?php echo asset_url(); ?>img/orange_icons/update_upload_24.png">
</button>
</div>      
 </div>
   </form>
<?php //include("include/sidebar.php"); ?>
	</div>
</div>
<?php //include("include/footer.php"); ?>

<?php //include("include/footer-main.php"); ?>

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
//console.log("hasda");
var num = /^[0-9]+$/;
//var  mailP = /^[0-9_A-Z._.a-z0-9_0-9]+[@]+[a-z0-9]+[.]+[a-z0-9]+$/||/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
var mailP =/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
if( (Member_Name==0) ||(Member_Type==0) ||(Member_Website==0)|| (Member_Dist=="") || (Member_ZIP==0||Member_ZIP.match(num)==null) 
|| Member_ZIP.length<5 ||(MA_name==0)||(MA_first_name==0)||(MA_position==0)|| (MA_email==0||MA_email.match(mailP)==null)
 ||(Form.Member_Desc.selectedIndex==0)||(Member_Desc==0))
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
	 
	 if(Member_Website==0)
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
	    document.getElementById("Member_Dist_error").innerHTML="";
		}
			
	if(Member_ZIP==0)
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
	 
	 if(MA_name==0)
	 {
	 document.getElementById("MA_name_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
	 }
	 else
		{
	    document.getElementById("MA_name_error").innerHTML="";
		}
		
	if(MA_first_name==0)
	 {
	 document.getElementById("MA_first_name_error").innerHTML=" Bitte Fullen sie dieses Pflichtfeld aus";
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
	 }
	 */
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
	
return false;
}
else
{
//console.log("true");
//location.href="mailto:"+MA_email+"?subject=hello&body=hiiiiiiiii how r u...";	
return true;
}
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

</script>
</body>
</html>