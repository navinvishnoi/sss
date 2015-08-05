<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
/*session_start();
//$_SESSION['counter']=0;
$_SESSION['counter'] = 1;*/
 ?>
<!DOCTYPE html>
<html lang="de" ><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sportvereine und Vereinssuche |&nbsp;Landeshauptstadt Saarbrücken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sportvereine und Vereinssuche">
    <meta name="keywords" content="Sport, Vereine">
    <meta name="author" content="">
	<link rel="shortcut icon" href="http://www.saarbruecken.de/media/images/client/saarbruecken/favicon.ico" type="image/x-icon">
	
     <?php include("include/files.php");
	 $clubid=$this->uri->segment(3);
	  ?>

</head>

<body class="has-background" data-rsevent-id="rs_208437">
    <?php //include("include/logo.php"); ?>
    <?php //include("include/header.php"); ?>
<div class="container l-content pull-left">
<?php if(isset($getmemberbyid)) 
{
	foreach($getmemberbyid as $value)
	{
		 $imagesize=array();$width='';$height='';
		if($value->Member_logo==="0") 
		{
			 $imgname="No_Logo.png";$width=80;$height=80;
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
			 if($aspectRatio>1){$width=50;}elseif($aspectRatio>0.5){$width=120;}else{$width=180;}
			/* Keep the width fix at 100px, 
			   but change the height according to the aspect ratio */
			$height = (int)($aspectRatio * $width) . "px";
			 
			/* Use the 'newHeight' in the CSS height property below. */
			$width .= "px";
		}else{$imgname="No_Logo.png";$width=80;$height=80;}
		}
		else{$imgname="No_Logo.png";$width=80;$height=80;}
?>

	<div class="component component-form">
	<!--<form action="profile.php" method="post">-->
		 <div class="panel-body" style="margin-left:-45px;">
        <div class="col-md-8 col-lg-8" >
           <div class=" col-md-12 col-lg-12" >
            <hr> <h3>Vereinsprofil</h3>
               <hr> 
              
                <div class="form-group">
                <img src="<?php echo asset_url()."img/Uploadlogos/".$imgname;  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="pull-left" style="margin-right:15px;"> 
              <label class="control-label" for="inputName" style="margin-top:20px;">Vereinsname</label>
            <div class="controls" >
             <?php echo $value->Member_Name; ?>
            </div>
            </div> 	
            <br>	
     <!--logo is below club name and center align with 200*200 size
                <div style="width:250px;height:220px;margin:auto;" class="text-center">
  	   <img src="<?php //echo asset_url()."img/Uploadlogos/".$imgname;  ?>" width="200" height="200"></div>
     -->
   <?php //if($value->Member_Desc!="") { ?>
     <!--<div class="form-group">
        <label class="control-label" for="inputName"><h3>Beschreibung</h3></label>
    <div class="controls" >
   <?php //echo $value->Member_Desc; ?> 
    </div> </div>-->
      <?php //} ?> 
    <?php //if($value->Member_Type!="") { ?>
   <!-- <div class="form-group">
            <label class="control-label" for="inputName"><h3>Vereinsart</h3></label>
    <div class="controls" >
     <?php //echo $value->Member_Type; ?>
    </div></div>-->
        <?php //} ?> 
        <hr>
        <h3>Kontaktdaten</h3>
         <hr>
         <?php //if($value->Member_Address_Street!="") { ?>
     <div class="form-group">
            <label class="control-label" for="inputName">Straße</label>
    <div class="controls" >
      <?php echo $value->Member_Address_Street; ?>
    </div>
    </div>
  <?php //} ?> 
   <?php //if($value->Member_Dist!="") { ?>
     <div class="form-group">
            <label class="control-label" for="inputName">Stadtteil</label>
    <div class="controls" >
      <?php echo $value->Member_Dist; ?>
    </div></div>
    <?php //} ?> 
     <?php //if($value->Member_ZIP!="" || $value->Member_City="") { ?>        
     <div class="form-group">
            <label class="control-label" for="inputName">PLZ / Ort</label>
    <div class="controls" >
     <?php echo $value->Member_ZIP." / ".$value->Member_City; ?>
    </div>
         </div>
    <?php //} ?>
    <?php //if($value->Member_Clubheim!="") { ?>        
          <div class="form-group">
            <label class="control-label" for="inputName">Clubheim</label>
    <div class="controls" >
    <?php echo $value->Member_Clubheim; ?>
    </div></div>
 <?php //} ?>
 <?php //if($value->MA_phone!="") { ?>                   
    <div class="form-group">
            <label class="control-label" for="inputName">Phone</label>
    <div class="controls" >
     <?php echo $value->MA_phone; ?>
    </div></div>
            <?php //} ?>
  <?php //if($value->Member_President!="") { ?>        
          <div class="form-group">
            <label class="control-label" for="inputName">1. Vorsitzender</label>
    <div class="controls" >
    <?php echo $value->Member_President; ?>
    </div></div>
 <?php //} ?>
 <?php //if($value->Member_Website!="") { ?>
  <div class="form-group">
            <label class="control-label" for="inputName">Website</label>
    <div class="controls" ><a href="http://<?php echo $value->Member_Website; ?>" target="_blank" 
    style="text-decoration:underline;color:#000;"><?php echo $value->Member_Website; ?></a>
    </div>
    </div>
     <?php //} ?> 
      <?php //if($value->Member_FB_Address!="") { ?>                   
     <div class="form-group">
            <label class="control-label" for="inputName">Facebook</label>
    <div class="controls" >
    <a href="http://<?php echo $value->Member_FB_Address; ?>" target="_blank" style="text-decoration:underline;color:#000;">
		<?php echo $value->Member_FB_Address; ?></a>
    </div></div>
                    <?php //} ?>
   <?php //if($value->Member_Twtr_Address!="") { ?>                   
    <div class="form-group">
            <label class="control-label" for="inputName">Twitter </label>
    <div class="controls" >
     <a href="http://<?php echo $value->Member_Twtr_Address; ?>" target="_blank" style="text-decoration:underline;color:#000;">
	 <?php echo $value->Member_Twtr_Address; ?></a>
    </div></div>
                        <?php //} ?>	
 <?php //if($value->Member_House_No!="") { ?>       
          <!-- <div class="form-group">
             <label class="control-label" for="inputName"><h3>Hausnummer</h3></label>
    <div class="controls" >
    <?php //echo $value->Member_House_No; ?>
    </div></div>-->
  <?php //} ?>
  
    
      <hr><h3>Ansprechpartner</h3> <hr>   
     <?php //if($value->MA_name!="") { ?>        
 <div class="form-group">	   
    <label class="control-label" for="inputName">Name, Vorname</label>
            <div class="controls" >
            <?php echo $value->MA_first_name.", ".$value->MA_name; ?>
            </div></div>
    <?php //} ?>
      
   <?php //if($value->MA_position!="") { ?>               
             <div class="form-group">
            <label class="control-label" for="inputName">Position</label>
    <div class="controls" >
   <?php echo $value->MA_position; ?>
    </div>
    </div>
      <?php //} ?>
    
     <?php //if($value->MA_street_no!="") { ?>                   
           <!--  <div class="form-group">
            <label class="control-label" for="inputName"><h3>Straße</h3></label>
    <div class="controls" >
     <?php //echo $value->MA_street_no; ?>
    </div>
    </div>-->
  <?php //} ?>
       <?php //if($value->MA_house_no!="") { ?>                   
    <!-- <div class="form-group">
               <label class="control-label" for="inputName"><h3>Hausnummer</h3></label>
            <div class="controls" >
            <?php //echo $value->MA_house_no; ?>
            </div></div>-->
    <?php //} ?>
   <?php //if($value->MA_zip!="" || $value->MA_city!="") { ?>                   
         <!--    <div class="form-group">
            <label class="control-label" for="inputName"><h3>PLZ/Ort</h3></label>
    <div class="controls" >
     <?php //echo $value->MA_zip." / ".$value->MA_city; ?>
    </div></div>-->
        <?php //} ?>
   
 <?php //if($value->MA_phone!="") { ?>                   
    <div class="form-group">
            <label class="control-label" for="inputName">Phone</label>
    <div class="controls" >
     <?php echo $value->MA_phone; ?>
    </div></div>
            <?php //} ?>
              <?php //if($value->MA_email!="") { ?>                   
    <div class="form-group">
            <label class="control-label" for="inputName">Email</label>
    <div class="controls" >
    <a href="mailto:<?php echo  $value->MA_email; ?>" style="text-decoration:underline;color:#000;">
			<?php echo $value->MA_email; ?></a>
    </div></div>
        <?php //} ?>
   <?php //if($value->MA_mobile!="") { ?>                   

     <!--<div class="form-group">
            <label class="control-label" for="inputName"><h3>Handy</h3></label>
    <div class="controls" >
     <?php //echo $value->MA_mobile; ?>
    </div></div>-->
                <?php //} ?>
   
   <?php //if($value->Member_Multiple_Sports!="") { ?>                   
    <!-- <div class="form-group">
            <label class="control-label" for="inputName"><h3>Vereinssparten</h3></label>
    <div class="controls" >
    <?php //echo $value->Member_Multiple_Sports; ?>
    </div></div>-->
     <?php //} ?>
	
       <div class="pull-left">
                 <?php if($this->uri->segment(4)>0) { ?> 
                  <a title="Vorheriger" href="<?php echo base_url()."welcome/go_previous/".$this->uri->segment(4)."/".$_GET['sessionid']; ?>" class="np">
                  <img src="<?php echo asset_url(); ?>img/orange_icons/previous_24.png"></a>
				  <?php }else { ?>
                 <span title="Vorheriger" class="np" style="background-color:#FFF;"  >
                  <img src="<?php echo asset_url(); ?>img/orange_icons/previous_24.png"></span>
                  <?php } ?> </div>
                <div class="pull-right" style="margin-right:-10px">
                 <?php
				 foreach($GetBufferUserData as $count) { $totalcount=$count->total_count;} 
				  $uricount=$this->uri->segment(4)+1;  
				 if($uricount!=$totalcount) { ?>
                 <a title="Nächster" href="<?php echo base_url()."welcome/go_next/".$this->uri->segment(4)."/".$_GET['sessionid']; ?>" class="np">
                 <img src="<?php echo asset_url(); ?>img/orange_icons/next_24.png"></a>
                 <?php }else { ?>
                 <span title="Nächster" class="np" style="background-color:#FFF;"  >
                  <img src="<?php echo asset_url(); ?>img/orange_icons/next_24.png"></span>
                  <?php } ?>
                  </div>
               
                  </div>
            </div>
          </form>

		
		<?php //include("include/sidebar.php"); ?>

	</div>
    <?php } }?>
</div>

<?php //include("include/footer.php"); ?>
<?php // include("include/footer-main.php"); ?>

<script type="text/javascript">

function showlist()
{
$.ajax({ type:"POST",
url: "list.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
} 
function showgrid()
{
$.ajax({ type:"POST",
url: "grid.php",
data:{list:"1"},
context: document.body
}).done(function(msg) {
$('#showbox').html(msg);
});		
}
</script>
</body>
</html>