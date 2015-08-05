<?php header('Content-Type: text/html; charset=utf-8'); ?>


<!DOCTYPE html>
<html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">

 <?php include("include/files.php"); 
 $sessionid='';	
foreach($userdata as $sessiondata){$sessionid=$sessiondata->sessionid;}
 ?>
</head>

<body>

    <div class="container l-content pull-left">
    <div class="col-xs-11 col-lg-11 filter13" style="margin-bottom:2px;" >   
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <select name="contact_type" class="form-control" id="contact_type" onChange="Search()">
                 <option value="" >Vereinsart</option>
              <?php foreach($getActiveContactType as $contactType) {
				  if(isset($contacttype) && ($contacttype==$contactType->contact_type_german_value))
				  $selected="selected";else $selected="";
				  echo "<option value='".$contactType->contact_type_german_value."' ".$selected.">".$contactType->contact_type_german_value."</option>";} ?>
                </select>
                </div>
                <div class="input-group-btn search-panel">
                 <select name="dist"  class="form-control" id="dist" onChange="Search()">
                <option value="" >Stadtteil</option>
                 <?php foreach($getActiveDistrics as $districtValue) {
					 if(isset($dist) && ($dist==$districtValue->dist_german_name))
				  		$selected="selected";else $selected="";
					  echo "<option value='".$districtValue->dist_german_name."' ".$selected.">".$districtValue->dist_german_name."</option>";} ?>
                 </select>
                </div>
                    
                <input type="text" class="form-control" id="text" name="text" placeholder="<?php echo $this->lang->line("Search"); ?>" 
      value="<?php if(isset($text)) echo $text;  ?>">
      <input type="hidden" name="sessionid" id="sessionid" value="<?php echo $sessionid; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" value="Go!" onClick="Search()" title="<?php echo $this->lang->line("Search"); ?>"
                    style="height:34px;margin-top:0px;"><span class="glyphicon glyphicon-search" style="color:#FFF;"></span></button>
                </span>
            </div>
</div>
 <div class="clearfix"></div>

<div class="component component-fulltext col-8 col-sm-8 col-lg-8">
 


  <span class="pull-right" style="margin-right:-6px;">
              <a href="<?php echo base_url()."welcome/addmember/"; ?>" class="btn" ><?php echo $this->lang->line("Add_Profile"); ?>
           </a> </span> 
              <div class="clearfix"></div>
<div class="row" id="showbox" style="margin-right:-8px;">              
      <?php 
	  if(isset($ack) && $ack!='') 
	  { 
	  		echo "<div class='alert alert-info'>'".$ack."'</div>";
	  } ?>

<?php

 if(count($getListMemberAccepted)>0)
{ ?>
<table width="100%" class="table table-striped" border="0">
   <?php
   $i=0;
    foreach($getListMemberAccepted as $value){ ?>
  <tr>
 <td>
 		<a href="<?php echo base_url()."welcome/profile_view/".$value->Member_App_Id."/".$i."?sessionid=".$sessionid; ?>">
 		<?php echo $value->Member_Name; ?>
        </a>
  </td>
  </tr>
   <?php $i++; } ?>
 
</table>
<?php }else {?>
<div class='clearfix'></div>
					  <?php echo $this->lang->line("No_records"); ?><div class='clearfix'></div>
					  <?php } ?>
  <div class="clearfix"></div>
</div>
 <span class="pull-left" style="margin-left:-15px;">
              <a href="<?php echo base_url()."welcome/Clear_all_filter/?sessionid=".$sessionid; ?>"  ><?php echo $this->lang->line("Clear_all"); ?>
           </a> </span></div>
</div>
 <?php 
  $openmail="";
   if(isset($getMessagebyTitle)) 
   {
	 	 foreach($getMessagebyTitle as $title) 
 		{		
			// echo "<span class='col-md-12 col-lg-12 alert alert-info' >
			 // <a href='".base_url()."welcome/?sessionid=".$sessionid."&cancel' class='close' data-dismiss='alert' aria-hidden='true'>×</a>".$title->msg_german_value."
			//</span>";
			?>
<!--COMPOSE MESSAGE MODAL  -->
 <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo $this->lang->line("Add_Profile"); ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $title->msg_german_value; ?></p>
      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line("OK"); ?></button>
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

  
<script  type="text/javascript">$('#message-modal').modal('show');</script>    
 <?php            
	}
	}
	?>


<script type="text/javascript">

function Search()
{
var ctype = document.getElementById("contact_type").value;
var dist = document.getElementById("dist").value;	
var text = document.getElementById("text").value;
var sessionid = document.getElementById("sessionid").value;
 var str = ctype+","+dist+","+text+","+sessionid;
 $.ajax({ type:"GET",
url: "<?php echo base_url()."welcome/search"; ?>",
data:{str:str},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});	
}

</script>

</body>
</html>