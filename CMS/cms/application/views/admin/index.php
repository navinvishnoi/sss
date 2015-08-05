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
 <?php 
	 $FilterValue = $this->session->userdata('FilterValue'); $checked=''; $enable=""; $btn='';
	 ?>

<div class="col-xs-7 col-lg-7">
<div class="form-group">
       <input type="hidden" id="sessionid1" name="sessionid" value="<?php echo $sessionid; ?>">
       <div class="input-group">
               <select name="filter" class="form-control" id="filter" onChange="showlist()">
               <option value="All" <?php if($FilterFlag=="All") echo "selected"; ?>>Alle</option>
               <option value="Accepted" <?php if($FilterFlag=="Accepted") echo "selected"; ?>>Genehmigt</option>
                 <option value="New" <?php if($FilterFlag=="New") echo "selected"; ?>>Neueinträge</option>
                 <option value="Update" <?php if($FilterFlag=="Update") echo "selected"; ?>>Geänderte Einträge</option>
                 <!--<option value="New_Update" <?php if($FilterFlag=="New_Update") echo "selected"; ?>>Neue oder geänderte Einträge</option>-->
                 <option value="Rejected" <?php if($FilterFlag=="Rejected") echo "selected"; ?>>Überarbeitung angefordert</option>
                 <option value="five" <?php if($FilterFlag=="five") echo "selected"; ?>>Letzte Änderung zwischen 3-6 Monate</option>
                 <option value="six" <?php if($FilterFlag=="six") echo "selected"; ?>>Letzte Änderung älter als 6 Monate</option>
                 <option value="Request_For_Deletion" <?php if($FilterFlag=="Request_For_Deletion") echo "selected"; ?>>Vom Verein gelöscht</option>
             	
                </select>
                <span class="input-group-btn">
                    <!--<button class="btn btn-default" type="button" value="Go!" onClick="showlist()"
                    style="height:34px;margin-top:0px;"><span class="glyphicon glyphicon-search" style="color:#FFF;"></span></button>-->
               		
                </span>
            </div>
     </div>  
	
  <div class="clearfix"></div>
      <?php  if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>
	  			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$error['error']."
	  								</span>";  } ?>
      
 <?php 
 	$openmail="";$msg_title='';$msg_text='';$notification_title = '';
	if(isset($getMessagebyTitle)) 
	{
	   foreach($getMessagebyTitle as $title) 
	   { $msg_title = $title->msg_title;
	   	 $msg_text = $title->msg_german_value;	
 			//echo "<span class='col-md-12 col-lg-12 alert alert-info'>
			//<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$title->msg_german_value." </span>"; 
if(isset($getmemberbyid))
{
	foreach($getmemberbyid as $memberval)
	{ 
		if($Flag=="Accepted")
		{$notification_title = 'Accept';
		$body=sprintf($this->lang->line('message_'.$msg_title), $memberval->Member_Name, $memberval->Member_App_Id, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Rejected")
		{$notification_title = 'Reject';
		$Link="member_author/profile/";
		$rejectdata = "";
		$body=sprintf($this->lang->line('message_'.$msg_title), $memberval->Member_Name, $Link, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Update")
		{$notification_title = 'Update';
		$body=sprintf($this->lang->line('message_'.$msg_title), $memberval->Member_Name, $memberval->Member_App_Id, $memberval->Member_App_Id);
		$body=utf8_decode(str_replace("+"," ",urlencode($body)));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Delete")
		{$notification_title = 'Delete';
		$body=sprintf($this->lang->line('message_'.$msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
		$body=utf8_decode(str_replace("+"," ",urlencode($body)));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="New_Rejected")
		{$notification_title = 'Reject';
		$body=sprintf($this->lang->line('message_'.$msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
		$body=utf8_decode(str_replace("+"," ",urlencode($body)));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$msg_title)."&body=".$body."';</script>";
		}
	}
}
}
} 

//}
?> <div class="clearfix"></div>
<!--<form action="<?php //echo base_url().'admin/remindermail'; ?>" method="post">
<input type="hidden" id="sessionid" name="sessionid" value="<?php //echo $sessionid; ?>"> -->
<div id="listshow" style="max-width:750px;">
<?php if(count($getmemberlist)>0) { ?>
<table width="100%" class="table table-striped table-bordered">
  <tr>
   <td><h3>Status</h3></td>
   <td><h3>Verein</h3></td>
    <td><h3>Registriert am</h3></td>
   <td><h3>Letzte genehmigte Änderung</h3></td>
   <td width="100"></td>
  </tr>
  <?php  $status;$link;
   foreach($getmemberlist as $value){
   $Member_CreatedAt=explode(' ',$value->Member_CreatedAt);
		 $Member_latest_Release=explode(' ',$value->Member_latest_Release);
		  $status=$value->Member_Current_Status;
		  $link='compare';
	if($status=="New") { $status="Neu"; }	  
    if($status=="Modify") { $status="Geändert";}
	if($status=="Accepted") {$status="Genehmigt";}
	if($status=="Rejected" || $status=="Rejected_After_Accepted" || $status=="New_Rejected") {$status="Überarbeitung angefordert";}
	if($status=="Request_For_Deletion" || $status=="New_Request_For_Deletion" ) {$status="Vom Verein gelöscht";}

  ?>
  <tr> 
	
   <td><?php echo $status; ?> </td>
   <td><a href="<?php echo base_url()."admin/".$link."/".$value->Member_App_Id."/".$sessionid; ?>"><?php echo $value->Member_Name; ?></a></td>
   <td><?php if($Member_CreatedAt[0]!='')  echo date('d.m.Y',strtotime($Member_CreatedAt[0])); ?></td>
   <td><?php if($Member_latest_Release[0]!='') echo date('d.m.Y',strtotime($Member_latest_Release[0])); ?></td>
   <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url().'admin/updateMail/'.$value->Member_App_Id."/".$sessionid; ?>" title="Aktualisierung anfordern" >
               <img src="<?php echo asset_url(); ?>img/orange_icons/mail_24.png" class="btn13" title="<?php echo $this->lang->line("Mailto"); ?>"></a>
    </td>
   </tr>
   <?php } ?>
</table>
</div>

 <?php }else { ?>
  <div class="clearfix"></div>
  <div  class='col-lg-12 pull-left' style='margin-left:-15px;'> <?php echo $this->lang->line("No_records"); ?></div>
  <?php } ?>
</div>
<div style="max-width:750px">
<div class="btn-group pull-left" style="margin-right: -10px;margin-left: 15px;"> <a href="<?php echo base_url().'admin/Clear_all_filter/?sessionid='.$sessionid; ?>" style="height:34px;margin-top:0px;border-left: 1px #f8f8f8 solid;">Alle Vereine anzeigen</a> 
  </div>
  <div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;'>
 <a href="<?php echo base_url().'admin/exportdata'; ?>" >Daten exportieren</a>
   </div></div>  	

</div>
 <!--COMPOSE MESSAGE MODAL  -->
 <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo $this->lang->line($notification_title); ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $msg_text; ?></p>
      </div>
      <div class="modal-footer">
      <a href="<?php echo base_url().'admin/?sessionid='.$sessionid; ?>" class="btn btn-default" ><?php echo $this->lang->line('OK'); ?></a>
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal"><?php //echo $this->lang->line('cancel'); ?></button>-->
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
<?php if($msg_title!="" && $msg_title!=="Delete" && $msg_title!="Update") { ?><script  type="text/javascript">$('#message-modal').modal('show');</script><?php } ?>

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
	var val = document.getElementById("filter").value;
	var sessionid = document.getElementById("sessionid1").value;
	//console.log(val);
	var val1= val+","+sessionid;
$.ajax({ type:"GET",
url: "<?php echo  base_url()."admin/search"; ?>",
data:{list:val1},
context: document.body
}).done(function(msg) {
$('#listshow').html(msg);
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