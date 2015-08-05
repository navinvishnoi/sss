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
  <?php
   if(isset($getcustomerbyid) && $getcustomerbyid!="")
   {
	   foreach($getcustomerbyid as $value)
	   {	$custID = $value->custID;
   			$customer_id = $value->customer_id;
			$customer_name = $value->customer_name;
			$customer_status = $value->customer_status;
			$customer_language = $value->customer_language;
	   }
   }?>
	<div class="row">
	<form method="post" name="Form" action="<?php echo current_url(); ?>"  id="Editprofile" enctype="multipart/form-data" >
		 <div class="panel-body" style="margin-left:-15px;">
             
                <div class=" col-md-8 col-lg-8" style="margin-left:-15px;">
                
    <?php if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>".$error."</span>";  } ?>
                 
     	<div class="field control-group formo-input" id="field-container-8a8f6652bc42b9bd42c4594bf7ebb4ad">

              <div class="form-group">
              <label class="control-label" for="inputName">Customer ID* <span id="Customer_ID_error"  style="color:#F56780"></span></label>
              <div class="controls" >
              <input type="text" autocomplete="off"  id="Customer_ID" class="form-control" name="customer_id" value="<?php echo $customer_id; ?>" readonly>
              
              </div>
              </div>
              <div class="form-group">
              <label class="control-label" for="inputName">Customer Name* <span id="Customer_Name_error"  style="color:#F56780"></span></label>
              <div class="controls" >
              <input type="text" autocomplete="off"  id="Customer_Name" class="form-control" name="customer_name" value="<?php echo $customer_name; ?>">
              </div>
              </div>
             <div class="form-group">
             <label class="control-label" for="inputName">Customer Status* <span id="Customer_Status_error"  style="color:#F56780"></span></label>
             <div class="controls" >
             <select name="customer_status" id="Customer_Status" class="form-control" autocomplete="off">
                <option value="Active" <?php if($customer_status=='Active') echo "selected"; ?>>Active</option>
                <option value="Deactive" <?php if($customer_status=='Deactive') echo "selected"; ?>>Deactive</option>
             </select>
             </div>
             </div>
             <div class="form-group">
             <label class="control-label" for="inputName">Customer Language* <span id="Customer_Language_error"  style="color:#F56780"></span></label>
             <div class="controls" >
             <select name="customer_language" id="Customer_Language" class="form-control" autocomplete="off">
                  <option value="us" <?php if($customer_language=='us') echo "us"; ?>>United States</option>
                  <option value="uk" <?php if($customer_language=='uk') echo "selected"; ?>>United Kingdom</option>
                  <option value="fr" <?php if($customer_language=='fr') echo "selected"; ?>>France</option>
                  <option value="de" <?php if($customer_language=='de') echo "selected"; ?>>Germany</option>
                  <option value="nl" <?php if($customer_language=='nl') echo "selected"; ?>>Netherlands</option>
             </select>
             </div>
             </div>
   
	</div>
 <div class="pull-right">
<button class="btn"  type="submit"   name="submit" title="" onClick="return validateForm()">Absenden
<!--<img class="btn13" src="<?php echo asset_url(); ?>img/orange_icons/update_upload_24.png">-->
</button>
</div>  </div>      
 </div>
   </form>
	</div>
</div>
<script type="text/javascript">

function validateForm()
{
var Customer_ID = document.getElementById("Customer_ID").value;
var Customer_Name = document.getElementById("Customer_Name").value;
var Customer_Status = document.getElementById("Customer_Status").value;
var Customer_Language = document.getElementById("Customer_Language").value;

console.log(Customer_Language);
if((Customer_ID=="") || (Customer_Name=="") || (Customer_Status=="") || (Customer_Language==""))
{ console.log(Customer_Language+"111");
if(Customer_ID=="")
	 {
	 document.getElementById("Customer_ID_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Customer_ID").focus();
	 return false;

	 }
	 else
		{
	    document.getElementById("Customer_ID_error").innerHTML="";
		}
if(Customer_Name=="")
	 {
	 document.getElementById("Customer_Name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Customer_Name").focus();
	 return false;

	 }
	 else
		{
	    document.getElementById("Customer_Name_error").innerHTML="";
		}
if( Form.Customer_Status.selectedIndex==0)
	 {
	  document.getElementById("Customer_Status_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Customer_Status").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Customer_Status_error").innerHTML="";
	 }
if( Form.Customer_Language.selectedIndex==0)
	 {
	  document.getElementById("Customer_Language_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Customer_Language").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Customer_Language_error").innerHTML="";
	 }

return false;
}
else
{
console.log("true");
//location.href="mailto:"+MA_email+"?subject=hello&body=hiiiiiiiii how r u...";	
return true;
}
}

function _(el){
	return document.getElementById(el);
}	
</script>
</body>
</html>