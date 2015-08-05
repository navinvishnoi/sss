<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
session_start();
if(isset($_SESSION['counter']) && $_SESSION['counter']==1){ echo "<script>window.location.reload()</script>";
$_SESSION['counter']++;}
/*if(isset($_SESSION['refreshcounter']) && $_SESSION['refreshcounter']==1){ 
$_SESSION['refreshcounter']++;}*/
?>  
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

</head>

<body class="has-background" data-rsevent-id="rs_208437">
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php");
	 $FilterValue = $this->session->userdata('FilterValue'); $checked=''; $enable="disabled"; $btn='';
	 ?>

<div class="col-xs-8 col-lg-8">

	
	<!--<div class="row component component-headline" style="margin-right: -15px;">
		<div class="col-xs-8 col-lg-10">
			<h1>
				<span class="name">Sportvereine und Vereinssuche</span>
			</h1>
		</div>
		<div class="col-xs-4 col-lg-2">
			<div class="btn-group pull-right">
			 </div>
			<div class="clearfix"></div>
		</div>
	</div>-->
<?php // if($FilterValue=="All") {$checked = "checked"; $enable="disabled"; $btn="button"; }  ?>
	<?php //if($FilterValue=="New") {$checked = "checked"; $enable="disabled";$btn="button";} ?>
    <?php //if($FilterValue=="Update") {$checked = "checked"; $enable="disabled";$btn="button";} ?>
     <?php //if($FilterValue=="New_Update") {$checked = "checked";$enable="disabled"; $btn="button";}  ?>
     <?php //if($FilterValue=="five") {$checked = "checked"; $enable=""; $btn="submit";} ?>
     <?php if($FilterValue=="six") {$checked = "checked"; $enable=""; $btn="submit";}  ?>
    <div class="row">

		
        <div class="col-xs-12 col-lg-12 component component-headline" style="margin-left:0px;">
		
			 <div class="form-group" style="margin-left:15px;">
       
    <div class="controls" >
     <input type="radio" value="All" id="f1" name="filter" <?php  if($FilterValue=="All") {echo "checked"; $enable="disabled"; $btn="button"; }  ?>
 onClick="showlist()"  > 
      <label class="control-label" for="inputName">Alle</label>
    </div>
     <div class="controls" >
     <input type="radio" value="New"  id="f2"  name="filter"  <?php if($FilterValue=="New") {echo "checked"; $enable="disabled";$btn="button";} ?>
     onClick="showlist()"> 
     <label class="control-label" for="inputName">Neueinträge
</label>
    </div>
     <div class="controls">
     <input type="radio" value="Update"  id="f3"  name="filter" <?php if($FilterValue=="Update") {echo "checked"; $enable="disabled";$btn="button";} ?>
    onClick="showlist()"> 
      <label class="control-label" for="inputName">Geänderte Einträge
</label>
    </div>
     <div class="controls">
     <input type="radio" value="New_Update"  id="f4"  name="filter"  <?php if($FilterValue=="New_Update") {echo "checked";$enable="disabled"; $btn="button";}  ?>
     onClick="showlist()"> 
      <label class="control-label" for="inputName">Neue oder geänderte Einträge
</label>
    </div>
     <div class="controls">
     <input type="radio" value="five"  id="f5"  name="filter" <?php if($FilterValue=="five") {echo "checked"; $enable=""; $btn="submit";} ?>
     onClick="showlist()">
      <label class="control-label" for="inputName">Letzte Änderung zwischen 3-6 Monate
</label>
    </div>
     <div class="controls" >
     <input type="radio" value="six"  id="f6"  name="filter"  <?php if($FilterValue=="six") {echo "checked"; $enable=""; $btn="submit";}  ?>
     onClick="showlist()">
      <label class="control-label" for="inputName">Letzte Änderung älter als 6 Monate
</label>
    </div> 
     </div>  
	</div>
  <div class="clearfix"></div>
      <?php  if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>
	  			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$error['error']."
	  								</span>";  } ?>
      
 <?php
 	$openmail="";
/*echo $_SESSION['views'];
if($_SESSION['views']==2)
{echo "hello";$_SESSION['views']++;
*/	
if(isset($getMessagebyTitle)) 
{
	  foreach($getMessagebyTitle as $title) 
	  { 
 		echo "<span class='col-md-12 col-lg-12 alert alert-info'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$title->msg_german_value." </span>"; 
	
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
		{$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $Link, $memberval->Member_App_Id);
		$body=str_replace("+"," ",urlencode($body));
		$openmail="<script>location.href='mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."';</script>";
		}
		if($Flag=="Update")
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
 <div id="listshow">
 <?php if(count($getmemberlist)>0) { ?>
<table width="100%" class="table table-striped table-bordered">
  <tr>
   
   <td><h3> <input type="checkbox" class="text-center" id="selecctall" <?php echo $enable; ?> /></h3></td>
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
	if($status=="Accepted") {$status="";$link='profile_view'; }
  ?>
  <tr>
	<td><input type="checkbox" class="checkbox1" name="selectedmembers[]" value="<?php echo $value->Member_App_Id;?>" <?php echo $enable; ?>/>
   </td>
   <td><?php echo $status; ?> </td>
   <td><a href="<?php echo base_url()."admin/".$link."/".$value->Member_App_Id; ?>"><?php echo $value->Member_Name; ?></a></td>
   <td><?php if($Member_CreatedAt[0]!='')  echo date('d.m.Y',strtotime($Member_CreatedAt[0])); ?></td>
   <td><?php if($Member_latest_Release[0]!='') echo date('d.m.Y',strtotime($Member_latest_Release[0])); ?></td>
   </tr>
   <?php } ?>
</table>
<div class="btn-group pull-left" style="margin-right: -10px;"> 
<a href="<?php echo base_url().'admin/exportdata'; ?>" title="Daten exportieren" >Daten exportieren</a>
  </div>
<div class="col-xs-offset-8 btn-group pull-right" style="margin-right:-10px;">
 
 <a href="#" title="Aktualisierunganfordern" >
 <button type='<?php echo $btn; ?>' name='reminderMail' class='np' <?php echo $enable; ?>>  <img src="<?php echo asset_url(); ?>img/orange_icons/mail_24.png"></button></a>  
  </div>
</div>
 </form>
 <?php }else { ?>
  <div class="clearfix"></div>
  <div class="col-lg-7 pull-left">
  Keine Einträge gefunden!!!
  </div>
  <?php } ?>
</div>  	

<?php /*?>		
		<?php include("include/sidebar.php"); ?>
<?php */?>	

</div>
</div>


<div class="background-main-image subpage" style="background-image: url(&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=&#39;/cache/media/attachments/2013/11/x800_y533_c5f809_11.png&#39;, sizingMethod=&#39;scale&#39;); -ms-filter: " progid:dximagetransform.microsoft.alphaimageloader(src="/cache/media/attachments/2013/11/x800_y533_c5f809_11.png" ,="" sizingmethod="scale" )";"="">
	<div class="logo-background"></div>
</div>

<?php //include("include/footer.php"); ?>


<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
<iframe id="_atssh501" title="AddThis utility frame" src="sh186.html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe>
</div>

<?php //include("include/footer-main.php"); ?>



<script type="text/javascript">
/*setTimeout(function(){
   window.location.reload(1);
}, 500);*/

 
/*var count=1;
place = '<?php //echo current_url();  ?>';console.log(place);
var pathname = window.location.href;console.log(pathname);
if((pathname == place)){
	
 window.location.reload();    //reload the page
}

localStorage.setItem("checkload", 1);
function load13(){console.log(localStorage.getItem("checkload"));
if(localStorage.getItem("checkload")==1){window.location.reload();}localStorage.getItem("checkload")++;}
*/
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
  
</script>
<!-- SZM VERSION="2.0" -->
<script type="text/javascript">
	
function showlist()
{
	var val=new Array();
	var count=0;
	for(var i=1;i<=6;i++)
	{
		if(document.getElementById('f'+i).checked)
		{
		val[count]=document.getElementById("f"+i).value;count++;
		}
	}
	console.log(val);
$.ajax({ type:"POST",
url: "<?php echo  base_url()."admin/search"; ?>",
data:{list:val},
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
<?php if($openmail!=""){echo $openmail; } 
if($Flag=="Reminder")
{
	$maildata=$this->session->userdata('maildata');
	for($i=0;$i<count($maildata);$i++)
	{
	$body=sprintf($this->lang->line('message_'.$title->msg_title), $memberval->Member_Name, $memberval->Member_App_Id);
	$body=str_replace("+"," ",urlencode($body));
	$openmail="<script>window.open('mailto:".$Email."?subject=".$this->lang->line('auth_subject_'.$title->msg_title)."&body=".$body."');</script>";
	}
} 
?>
</body>
</html>