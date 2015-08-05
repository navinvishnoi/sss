<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
/*session_start();
//$_SESSION['counter']=0;
$_SESSION['counter'] = 1;*/

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
                <span class="text-center" style="color:white;"><?php echo $this->lang->line("Upload_logo"); ?></span>
                <input type="file" class="upload" name="logo" id="logo" onChange="uploadImage()" title=" " ></div><small>(<?php echo $this->lang->line("Upload_msg"); ?>)</small>
                 <div id="showbox" style="display:none"></div>
              </div>
              </div>
              
              <div class="form-group">
            <label class="control-label" for="inputName">Beschreibung* (maximal 500 Zeichen)<span id="Member_Desc_error"  style="color:#F56780"></span></label>
            <div class="controls" id="Member_Desc_div">
            <textarea class="form-control ckeditor" cols="12" rows="6" name="Member_Desc" maxlength="500" id="Member_Desc" style="resize:none;overflow:hidden;" ></textarea>
            
            </div>
            </div>
              <hr> <h3>Vereinsdaten</h3> <hr>             
             <div class="form-group">
             <label class="control-label" for="inputName">Vereinsart* <span id="Member_Type_error"  style="color:#F56780"></span></label>
             <div class="controls" >
             <select name="Member_Type" id="Member_Type" class="form-control" autocomplete="off">
                <option value="">Vereinsart</option>
               <?php foreach($getActiveContactType as $contactType) { echo "<option value='".$contactType->contact_type_german_value."'>".$contactType->contact_type_german_value."</option>";} ?>
             </select>
             
             </div>
             </div>
            
          <div class="form-group">
            <label class="control-label" for="inputName">Straße* <span id="Member_Address_Street_error"  style="color:#F56780"></span>
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
            <label class="control-label" for="inputName">Stadtteil* <span id="Member_Dist_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
                 <select name="Member_Dist" id="Member_Dist"  class="form-control" >
                 <option value="" selected>Stadtteil</option>
                 <?php foreach($getActiveDistrics as $districtValue) { echo "<option value='".$districtValue->dist_german_name."'>".$districtValue->dist_german_name."</option>";} ?></select>
             </div>
    </div>
     <div class="form-group">
            <label class="control-label" for="inputName">PLZ* <span id="Member_ZIP_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_ZIP" maxlength="10" class="form-control" name="Member_ZIP" >
      
    </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="inputName">Ort* <span id="Member_City_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
                <input type="text" autocomplete="off" id="Member_City" class="form-control" name="Member_City" >
             </div>
    </div>
      <div class="form-group">
            <label class="control-label" for="inputName">Clubheim <!--<span id="Member_Clubheim_error"  style="color:#F56780"></span>-->
</label>
    <div class="controls" >
                 <input type="text" autocomplete="off" id="Member_Clubheim" class="form-control" name="Member_Clubheim" >
             </div>
    </div>
        <div class="form-group">
            <label class="control-label" for="inputName">1. Vorsitzender* <span id="Member_President_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
                 <input type="text" autocomplete="off" id="Member_President" class="form-control" name="Member_President" >
             </div>
    </div>     
    
    <div class="form-group">
            <label class="control-label" for="inputName">Telefon
</label>
    <div class="controls" >
     <input type="text" autocomplete="off" id="Member_Telephone" class="form-control" name="Member_Telephone" >
    </div></div>
     <div class="form-group">
            <label class="control-label" for="inputName">Website <!--<span id="Member_Website_error"  style="color:#F56780"></span>-->
</label>
    <div class="controls" >
      <input type="text" autocomplete="off"   id="Member_Website" class="form-control" name="Member_Website" >
      </div>
    </div> 
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
            <label class="control-label" for="inputName">Vereinssparten
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="Member_Multiple_Sports" class="form-control" name="Member_Multiple_Sports" >
    </div></div>
     <hr><h3>Kontakt</h3> <hr>   
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
     <!--<div class="form-group">
            <label class="control-label" for="inputName">Stadtteil
</label>
    <div class="controls" >
                 <select name="MA_dist" id="MA_dist"  class="form-control">
                 <option value="" selected>Stadtteil</option>
                  <?php //foreach($getActiveDistrics as $districtValue) { echo "<option value='".$districtValue->dist_german_name."'>".$districtValue->dist_german_name."</option>";} ?></select>
             </div>
    </div>-->
    <div class="form-group">
            <label class="control-label" for="inputName">Email* <span id="MA_email_error"  style="color:#F56780"></span>
</label>
    <div class="controls" >
      <input type="text" autocomplete="off" id="MA_email" class="form-control" name="MA_email" >
      
    </div></div>
    <div class="form-group">
            <label class="control-label" for="inputName">Telefon <span id="MA_phone_error"  style="color:#F56780"></span> 
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
    
	</div>
 <div>Mit * gekennzeichnete Felder sind Pflichtfelder <br> 
 <div class="pull-left"> <br> <a href="<?php echo base_url(); ?>" >zurück zur Liste«</a></div>
 <div class="pull-right">
<button class="btn"  type="submit"  name="submit" title="" onClick="return validateForm()">Absenden
<!--<img class="btn13" src="<?php echo asset_url(); ?>img/orange_icons/update_upload_24.png">-->
</button>
</div>  </div>      
 </div>
   </form>
  
<?php //include("include/sidebar.php"); ?>
	</div>
</div>
<?php //include("include/footer.php"); ?>

<?php //include("include/footer-main.php"); ?>
		
<script type="text/javascript" src="<?php echo asset_url();?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">

function validateForm()
{

var Member_Name = document.getElementById("Member_Name").value;
var Member_Type = document.getElementById("Member_Type").value;
//var Member_Website = document.getElementById("Member_Website").value;
var Member_Dist = document.getElementById("Member_Dist").value;
var Member_ZIP = document.getElementById("Member_ZIP").value;
var MA_name = document.getElementById("MA_name").value;
var MA_first_name = document.getElementById("MA_first_name").value;
var MA_position = document.getElementById("MA_position").value;
//var MA_zip = document.getElementById("MA_zip").value;
var MA_email = document.getElementById("MA_email").value;
var Member_Desc = CKEDITOR.instances.Member_Desc.getData();//document.getElementById("Member_Desc").value
var Member_President = document.getElementById("Member_President").value;
var Member_City = document.getElementById("Member_City").value;
var Member_Address_Street = document.getElementById("Member_Address_Street").value;
//var Member_Clubheim = document.getElementById("Member_Clubheim").value;

//console.log("hasda");
var num = /^[0-9]+$/;
//var  mailP = /^[0-9_A-Z._.a-z0-9_0-9]+[@]+[a-z0-9]+[.]+[a-z0-9]+$/||/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
//var mailP =/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,20}$/;
//||(Member_Website==0) and || (Member_Clubheim==0)
if( (Member_Name==0) ||(Member_Type==0) || (Member_Dist=="") || (Member_ZIP==0) ||(MA_name==0)||(MA_first_name==0)||(MA_position==0)|| (MA_email==0)
 ||(Form.Member_Desc.selectedIndex==0)||(Member_Desc==0)  ||(Member_City==0) ||(Member_Address_Street==0)  || (Member_President==0))
{ 
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
	  document.getElementById("Member_Desc_div").classList.add("reject_border");
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
	    document.getElementById("Member_Dist_error").innerHTML="";
		}
			
	if(Member_ZIP==0)
	 {
	  document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Member_ZIP").focus();
	  return false;
	 }
	 else
	 {
	    /*if(Member_ZIP.match(num)==null)
		{
		 document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
		 document.getElementById("Member_ZIP").focus();return false;
		}
		else*/ 
		if(Member_ZIP.length>0 && Member_ZIP.length>11)
		{
			document.getElementById("Member_ZIP_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
			document.getElementById("Member_ZIP").focus();return false;
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
	 if(MA_name==0)
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
	 document.getElementById("MA_first_name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
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