<?php header('Content-Type: text/html; charset=utf-8'); ?>
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

<body ><br>
<div class="col-xs-7 col-lg-7">
     <span class="pull-right" style="margin-right:200px;">
              <a href="<?php echo base_url()."super_admin/addcustomer/"; ?>" class="btn" > Add Customer</a> </span>  
	
  <div class="clearfix"></div>
      <?php  if(isset($error)) {  echo "<span class='col-md-12 col-lg-12 alert alert-info'>
	  			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$error['error']."
	  								</span>";  } ?>
      
<div id="listshow" style="max-width:750px;">
<?php if(count($getcustomerlist)>0) { ?>
<br><table width="100%" class="table table-striped table-bordered">
  <tr>
   <td align="center"><h3>Customer ID</h3></td>
   <td align="center"><h3>Name</h3></td>
    <td align="center"><h3>Language</h3></td>
   <td align="center"><h3>Status</h3></td>
   <td align="center"><h3>Update</h3></td>
  </tr>
  <?php
  $i=1; foreach($getcustomerlist as $value){
	  if($value->customer_status=='Active') {  $btnclass='btn13';$icon="<img src='".asset_url()."img/orange_icons/Active.png'>"; 
									}else{ $btnclass='btn13';$icon="<img src='".asset_url()."img/orange_icons/Deactive.png'>"; }
  ?>
  <tr> 
	
   <td align="center"><?php echo $value->customer_id; ?></td>
   <td align="center"><?php echo $value->customer_name; ?></td>
   <td align="center"><?php echo $value->customer_language; ?></td>
   <td  align="center" id="checkStatusid<?php echo $i; ?>">
   
  <input type="hidden" id="status<?php echo $i; ?>" value="<?php echo $value->customer_status;?>">
                                           <button type="button" class="<?php echo $btnclass; ?>" 
                                onClick="checkStatus(<?php echo $value->custID;?>,<?php echo $i; ?>)">
                                            <?php echo $icon; ?></button>
  
   </td>
   <td align="center"> <a href="<?php echo base_url()."super_admin/EditCustomer/".$value->custID; ?>"><img src="<?php echo asset_url(); ?>img/orange_icons/edit_customer.png" class="btn13" title=""></a></td>
   </tr>
   <?php $i++; } ?>
</table>
</div>

 <?php }else { ?>
  <div class="clearfix"></div>
  <div  class='col-lg-12 pull-left' style='margin-left:-15px;'> <?php echo $this->lang->line("No_records"); ?></div>
  <?php } ?>
</div>
</div>
<script>
function checkStatus(id,count)
{
var status=document.getElementById("status"+count).value;
$.ajax({ type:"POST",
url: "<?php echo base_url()."super_admin/changeCustomerStatus"; ?>",
data:{custID:id,customer_status:status,count:count},
context: document.body
}).done(function(msg) {
$('#checkStatusid'+count).html(msg);
});
}
	 </script>
</body>
</html>