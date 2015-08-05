<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
$sessionid='';
foreach($userdata as $sessiondata){ $sessionid=$sessiondata->SessionId;}
?>  
<!DOCTYPE html>
<!-- saved from url=(0096)http://www.saarbruecken.de/leben_in_saarbruecken/sport_und_vereine/sportvereine_und_vereinssuche -->
<html lang="de" ><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">

 <?php include("include/files.php"); ?>

</head>

<body >
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php");
	 $FilterValue = $this->session->userdata('FilterValue'); $checked=''; $enable=""; $btn='';
	 ?>

<div class="col-xs-8 col-lg-8">

  <div class="row">
<div class="col-xs-12 col-lg-12 component component-headline" style="margin-left:0px;">
		
			 <div class="form-group" style="margin-left:15px;">
       <input type="hidden" id="sessionid1" name="sessionid" value="<?php echo $sessionid; ?>">
    <div class="controls" >
     <input type="radio" value="All" id="f1" name="filter" <?php  if($FilterValue=="All") {echo "checked"; $enable=""; $btn="button"; }  ?>
 onClick="showlist()"  > 
      <label class="control-label" for="inputName">Alle</label>
    </div>
     <div class="controls" >
     <input type="radio" value="New"  id="f2"  name="filter"  <?php if($FilterValue=="New") {echo "checked"; $enable="";$btn="button";} ?>
     onClick="showlist()"> 
     <label class="control-label" for="inputName">Neueinträge
</label>
    </div>
     <div class="controls">
     <input type="radio" value="Update"  id="f3"  name="filter" <?php if($FilterValue=="Update") {echo "checked"; $enable="";$btn="button";} ?>
    onClick="showlist()"> 
      <label class="control-label" for="inputName">Geänderte Einträge</label>
    </div>
     <div class="controls">
     <input type="radio" value="New_Update"  id="f4"  name="filter"  <?php if($FilterValue=="New_Update") {echo "checked";$enable=""; $btn="button";}  ?>
     onClick="showlist()"> 
      <label class="control-label" for="inputName">Neue oder geänderte Einträge</label>
    </div>
    <div class="controls" >
     <input type="radio" value="Rejected"  id="f5"  name="filter"  <?php if($FilterValue=="Rejected") {echo "checked"; $enable=""; $btn="submit";}  ?>
     onClick="showlist()">
      <label class="control-label" for="inputName">In Bearbeitung</label>
    </div>
     <div class="controls">
     <input type="radio" value="five"  id="f6"  name="filter" <?php if($FilterValue=="five") {echo "checked"; $enable=""; $btn="submit";
	 
	 $remindermail="<div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;'><a href='#' title='Aktualisierunganfordern'>
 <button type='".$btn."' name='reminderMail' class='np' '".$enable."'>  <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
  </div>";} ?>
     onClick="showlist()">
      <label class="control-label" for="inputName">Letzte Änderung zwischen 3-6 Monate</label>
    </div>
     <div class="controls" >
     <input type="radio" value="six"  id="f7"  name="filter"  <?php if($FilterValue=="six") {echo "checked"; $enable=""; $btn="submit";
	 
	  $remindermail="<div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;'><a href='#' title='Aktualisierunganfordern'>
 <button type='".$btn."' name='reminderMail' class='np' '".$enable."'>  <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
  </div>";}  ?>
     onClick="showlist()">
      <label class="control-label" for="inputName">Letzte Änderung älter als 6 Monate</label>
    </div> 
    
     </div>  
	</div>
  <div class="clearfix"></div>
      <?php  if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>
	  			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$error['error']."
	  								</span>";  } ?>
      
 <?php 
 	$openmail="";
	// $Flag = $this->session->userdata('Flag');
	
	if(isset($getMessagebyTitle)) 
	{
	   foreach($getMessagebyTitle as $title) 
	   { $msg_title = $title->msg_title;
 			echo "<span class='col-md-12 col-lg-12 alert alert-info'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$title->msg_german_value." </span>"; 
	
		/*if(isset($getmemberbyid))
		{
			foreach($getmemberbyid as $memberval)
			{ 
			$membername = $memberval->Member_Name;
			$memberappidid = $memberval->Member_App_Id;
			}
		}	
		if($Flag=="Accepted")
		{$body=sprintf($this->lang->line('message_'.$msg_title), $membername, $memberappidid);}
		if($Flag=="Rejected")
		{	$Link="member_author/profile/";
			$body=sprintf($this->lang->line('message_'.$msg_title), $membername, $Link, $memberappidid);}
		if($Flag=="Update")
		{$body=sprintf($this->lang->line('message_'.$msg_title), $membername, $memberappidid);}
		if($Flag=="Reminder")
		{$body=sprintf($this->lang->line('message_'.$msg_title), $membername, $memberappidid);}
		header('Content-Type: text/html; charset=utf-8');
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		*/
		
if(isset($getmemberbyid))
{
	foreach($getmemberbyid as $memberval)
	{ 
		
		
		if($Flag=="Accepted")
		{$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Rejected")
		{
	/*if($memberval->Member_Name_isReject=="Rejected")$Member_Name_isReject="Member_Name - ".$memberval->Member_Name;else $Member_Name_isReject=""; 
	if($memberval->Member_Type_isReject=="Rejected")$Member_Type_isReject="Member_Type - ".$memberval->Member_Type;else $Member_Type_isReject="";
	if($memberval->Member_Website_isReject=="Rejected")$Member_Website_isReject="$Member_Website - ".$memberval->Member_Website;else$Member_Website_isReject="";
	if($memberval->Member_Desc_isReject=="Rejected")$Member_Desc_isReject="Member_Desc - ".$memberval->Member_Desc;else $Member_Desc_isReject="";
	if($memberval->Member_Address_Street_isReject=="Rejected")$Member_Address_Street_isReject="Member_Address_Street_isReject - ".$memberval->Member_Address_Street;else $Member_Address_Street_isReject="";
	if($memberval->Member_House_No_isReject=="Rejected")$Member_House_No_isReject="$Member_House_No_isReject - ".$memberval->Member_House_No;else $Member_House_No_isReject="";
	if($memberval->Member_ZIP_isReject=="Rejected")$Member_ZIP_isReject="$Member_ZIP_isReject - ".$memberval->Member_ZIP;else $Member_ZIP_isReject="";
	if($memberval->Member_City_isReject=="Rejected")$Member_City_isReject="Member_City_isReject - ".$memberval->Member_City;else $Member_City_isReject = "";
	if($memberval->Member_Telephone_isReject=="Rejected")$Member_Telephone_isReject=$memberval->Member_Telephone_isReject;
else $Member_Telephone_isReject="";
	if($memberval->Member_Clubheim_isReject=="Rejected")$Member_Clubheim_isReject="$Member_Clubheim_isReject - ".$memberval->Member_Clubheim;else $Member_Clubheim_isReject="";
	if($memberval->Member_President_isReject=="Rejected")$Member_President_isReject="Member_President_isReject - ".$memberval->Member_President;else $Member_President_isReject="";
	if($memberval->Member_Dist_isReject=="Rejected")$Member_Dist_isReject="$Member_Dist_isReject - ".$memberval->Member_Dist;else $Member_Dist_isReject="";
	if($memberval->Member_Country_isReject=="Rejected")$Member_Country_isReject="Member_Country_isReject - ".$memberval->Member_Country;else $Member_Country_isReject="";
	if($memberval->Member_FB_Address_isReject=="Rejected")$Member_FB_Address_isReject="Member_FB_Address_isReject - ".$memberval->Member_FB_Address;else $Member_FB_Address_isReject = "";
	if($memberval->Member_Twtr_Address_isReject=="Rejected")$Member_Twtr_Address_isReject="Member_Twtr_Address_isReject - ".$memberval->Member_Twtr_Address_isReject;else $Member_Twtr_Address_isReject="";
	if($memberval->Member_Multiple_Sports_isReject=="Rejected")$Member_Multiple_Sports_isReject="Member_Multiple_Sports_isReject - ".$memberval->Member_Multiple_Sports;else $Member_Multiple_Sports_isReject="";
	if($memberval->MA_name_isReject=="Rejected")$MA_name_isReject="MA_name_isReject - ".$memberval->MA_name; else $MA_name_isReject="";
	if($memberval->MA_first_name_isReject=="Rejected")$MA_first_name_isReject=$memberval->MA_first_name;else $MA_first_name_isReject="";
	if($memberval->MA_position_isReject=="Rejected")$MA_position_isReject="MA_position_isReject - ".$memberval->MA_position;else $MA_position_isReject="";
	if($memberval->MA_street_no_isReject=="Rejected")$MA_street_no_isReject="MA_street_no_isReject - ".$memberval->MA_street_no_isReject;else $MA_street_no_isReject = "";
	if($memberval->MA_house_no_isReject=="Rejected")$MA_house_no_isReject="MA_house_no_isReject - ".$memberval->MA_house_no;else $MA_house_no_isReject="";
	if($memberval->MA_zip_isReject=="Rejected")$MA_zip_isReject="MA_zip_isReject - ".$memberval->MA_zip;else $MA_zip_isReject="";
	if($memberval->MA_city_isReject=="Rejected")$MA_city_isReject="MA_city_isReject - ".$memberval->MA_city;else $MA_city_isReject = "";
	if($memberval->MA_phone_isReject=="Rejected")$MA_phone_isReject="MA_phone_isReject - ".$memberval->MA_phone;else $MA_phone_isReject="";
	if($memberval->MA_mobile_isReject=="Rejected")$MA_mobile_isReject=$memberval->MA_mobile;else $MA_mobile_isReject="";
	if($memberval->MA_email_isReject=="Rejected")$MA_email_isReject="MA_email_isReject - ".$memberval->MA_email;else $MA_email_isReject="";
	if($memberval->Member_logo_isReject=="Rejected")$Member_logo_isReject="Member_logo_isReject - ".$memberval->Member_logo_isReject;else $Member_logo_isReject="";
			
		$Link="member_author/profile/";
		$rejectdata = nl2br("Please check below there are the rejected fields 
		".$Member_Name_isReject."\n".
		$Member_Type_isReject."\n".
		$Member_Website_isReject."\n".
		$Member_Desc_isReject."\n".
		$Member_Address_Street_isReject."\n".
		$Member_House_No_isReject."\n".
		$Member_ZIP_isReject."\n".
		$Member_City_isReject."\n".
		$Member_Telephone_isReject."\n".
		$Member_Clubheim_isReject."\n".
		$Member_President_isReject."\n".
		$Member_Dist_isReject."\n".
		$Member_Country_isReject."\n".
		$Member_FB_Address_isReject."\n".
		$Member_Twtr_Address_isReject."\n".
		$Member_Multiple_Sports_isReject."\n".
		$MA_name_isReject."\n".
		$MA_first_name_isReject."\n".
		$MA_position_isReject."\n".
		$MA_street_no_isReject."\n".
		$MA_house_no_isReject."\n".
		$MA_zip_isReject."\n".
		$MA_city_isReject."\n".
		$MA_phone_isReject."\n".
		$MA_mobile_isReject."\n".
		$MA_email_isReject."\n".
		$Member_logo_isReject);*/
		$Link="member_author/profile/";
		$rejectdata = "";
		$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $rejectdata, $Link, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Update")
		{$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Reminder")
		{$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
	}
}
	}
 } 

//}
?>
              <div class="clearfix"></div>
 <form action="<?php echo base_url().'admin/remindermail'; ?>" method="post">
 <input type="hidden" id="sessionid" name="sessionid" value="<?php echo $sessionid; ?>"> 
 <div id="listshow">
 <?php if(count($getmemberlist)>0) { ?>
<table width="100%" class="table table-striped table-bordered">
  <tr>
    
   <td><h3>Select <!--<input type="checkbox" class="text-center" id="selecctall" <?php //echo $enable; ?> />--></h3></td>
   <td width="150"><h3>Neu/geändert</h3></td>
   <td><h3>Vereinsname</h3></td>
    <td><h3>Registriert am</h3></td>
   <td width="200"><h3>Letzte genehmigte Änderung</h3></td>
  </tr>
  <?php  $status;$link; foreach($getmemberlist as $value){
   $Member_CreatedAt=explode(' ',$value->Member_CreatedAt);
		 $Member_latest_Release=explode(' ',$value->Member_latest_Release);
		  $status=$value->Member_Current_Status;
    if($status=="Modify") { $status="Geänderte";$link='compare';}
	if($status=="New") { $status="Neu";$link='compare'; } 
	if($status=="Accepted" || $status=="Rejected") {$status="";$link='compare';//profile_view 
	}
  ?>
  <tr> 
	<td><input type="radio" class="checkbox1" name="selectedmembers"  value="<?php echo $value->Member_App_Id; ?>" />
    <!--<input type="checkbox" class="checkbox1" name="selectedmembers[]" <?php //echo $enable; ?>/>-->
   </td>
   <td><?php echo $status; ?> </td>
   <td><a href="<?php echo base_url()."admin/".$link."/".$value->Member_App_Id."/".$sessionid; ?>"><?php echo $value->Member_Name; ?></a></td>
   <td><?php if($Member_CreatedAt[0]!='')  echo date('d.m.Y',strtotime($Member_CreatedAt[0])); ?></td>
   <td><?php if($Member_latest_Release[0]!='') echo date('d.m.Y',strtotime($Member_latest_Release[0])); ?></td>
   </tr>
   <?php } ?>
</table>
<div class="btn-group pull-left" style="margin-right: -10px;"> 
<a href="<?php echo base_url().'admin/exportdata'; ?>" title="Daten exportieren" >Daten exportieren</a>
  </div>
  
<?php //if(isset($remindermail)) echo $remindermail;
echo "<div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;'><a href='#' title='Aktualisierunganfordern'>
 <button type='submit' name='reminderMail' class='np' '".$enable."'>  <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
  </div>"; ?>
</div>
 </form>
 <?php }else { ?>
  <div class="clearfix"></div>
  <div class="col-lg-7 pull-left">
  Keine Einträge gefunden!!!
  </div>
  <?php } ?>
</div>  	
</div>
</div>
<?php //include("include/footer.php"); ?>
<?php //include("include/footer-main.php"); ?>
<script type="text/javascript">

 $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
function showlist()
{
	/*var val=new Array();
	var count=0;*/
	var val
	for(var i=1;i<=7;i++)
	{
		if(document.getElementById('f'+i).checked)
		{
			val=document.getElementById("f"+i).value;
		}
	}
	var sessionid = document.getElementById("sessionid1").value;
	//console.log(val);
	var val1= val+","+sessionid;
$.ajax({ type:"GET",
url: "<?php echo  base_url()."admin/search"; ?>",
data:{list:val1},
context: document.body
}).done(function(msg) {
$('#listshow').html(msg);
 $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
  
});		
}
</script>
<?php if($openmail!=""){  echo $openmail; //$this->session->set_userdata('Flag','');
$userdata=array('Email'=>'','memberAppId'=>'','Flag'=>'');
$this->admin_model->UpdateBufferData($userdata,$sessionid);
}
/* for multiple mailing now we block code for radio buttons....
when we use check box then we will do that.
if(isset($Flag))
	{
		if($Flag=="Reminder")
		{
			
		$maildata=explode(",",$Email);
		$memberappid = explode(",",$memberappid);
		for($i=0;$i<count($maildata);$i++)
		{
		$body=sprintf($this->lang->line('message_'.$title->msg_title), $maildata['Member_Name'], $maildata['Member_App_Id']);
		$body=str_replace("+"," ",urlencode($body));
		echo $openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
	}
$userdata=array('Email'=>'','memberAppId'=>'','Flag'=>'');
$this->admin_model->UpdateBufferData($userdata,$sessionid);	
}*/
?>
</body>
</html>