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
 <!--COMPOSE MESSAGE MODAL  -->
 <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo $this->lang->line('data_updated'); ?></h4>
      </div>
      <div class="modal-body">
       <?php
 	  if(isset($getMessagebyTitle)) {
			  foreach($getMessagebyTitle as $title) { echo "$title->msg_german_value"; 
			  }
	  }?>
      </div>
      <div class="modal-footer">
      <a href="<?php echo base_url(); ?>" class="pull-left"><?php echo $this->lang->line('back_link_text'); ?></a>
        <a class="btn btn-default" href="<?php echo base_url(); ?>">OK</a>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

     
</div>    
</div>
<script>
$('#delete-modal').modal('show');
</script>
</body>
</html>