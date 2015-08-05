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

<?php
$space="<br>";
 if(isset($getmemberbyid)) 
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
			 if($aspectRatio>1){$width=50;}elseif($aspectRatio>0.5){$width=120;$space="<br><br><br>";}else{$width=180;$space="<br><br>";}
			/* Keep the width fix at 100px, 
			   but change the height according to the aspect ratio */
			$height = (int)($aspectRatio * $width) . "px";
			 
			/* Use the 'newHeight' in the CSS height property below. */
			$width .= "px";
		}else{$imgname="No_Logo.png";$width=80;$height=80;}
		}
		else{$imgname="No_Logo.png";$width=80;$height=80;}
?>

	<div class="row">
	<!--<form action="profile.php" method="post">-->
		 <div class="panel-body" style="margin-left:-15px;">
        <div class="col-md-8 col-lg-8" >
           <div class=" component component-form" >
        <!--    <hr> <h3>Vereinsprofil & Kontaktdaten</h3>
               <hr> -->
              
                <div class="form-group">
                <img src="<?php echo asset_url()."img/Uploadlogos/".$imgname;  ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="pull-left" style="margin-left:50px;"> 
                  <!-- </div>
                   <div class="control-group" style="padding-top:<?php echo ($height/2)-10; ?>px;margin-left:-50px;">-->
               <?php echo $space; ?> <span style="margin-left:40px;"><strong><?php echo $value->Member_Name; ?></strong>
                  </span></div>
                 <br><br>
                  <hr>
                    <div class="form-group" style="margin-top:10px;">
              <?php if($value->Member_Desc!="") echo wordwrap(html_entity_decode(str_replace("<br />","",$value->Member_Desc)),90,"\n",true);   ?>
              <br>
                  </div>
                   </div>
                   
             <!--  <div class="control-group">
              &nbsp;
                  </div><label class="control-label" for="inputName" style="margin-top:20px;">Vereinsname</label>-->
                  
                <div class="well with-tabs">

		
		<dl class="dl-horizontal">
							<dt>Vereinsdaten:</dt>
				<dd> <?php if($value->Member_Clubheim!="") echo "<span class='pull-right'>".$value->Member_Clubheim."</span><br>"; ?>
              <?php if($value->Member_Address_Street!="" || $value->Member_House_No!='') echo "<span class='pull-right'>".$value->Member_Address_Street." ".$value->Member_House_No."</span><br>"; ?>
               <?php if($value->Member_Dist!="") echo "<span class='pull-right'>".$value->Member_Dist."</span><br>"; ?>
               <?php if($value->Member_ZIP!="" || $value->Member_City!='') echo  "<span class='pull-right'>".$value->Member_ZIP." ".$value->Member_City."</span><br>"; ?>
               <?php if($value->Member_Telephone!="")  {?> <span  class='pull-right'><?php echo $value->Member_Telephone."</span><br>"; } ?>
                   
                      <?php if($value->Member_Website!="")  {?>
                      <span class="pull-right"><a href="http://<?php echo $value->Member_Website; ?>" target="_blank" 
    ><?php echo $value->Member_Website; ?></a></span><br><?php } ?> 
                      <?php  if($value->MA_email!="") { ?> 
              <span class='pull-right'><img src="<?php echo asset_url() ?>img/icon-e-mail.png" class="social" alt="Image"><a href="mailto:<?php echo  $value->MA_email; ?>" >
			<?php echo $value->MA_email; ?></a></span><br><?php } ?>
                    <?php if($value->Member_Twtr_Address!="")  {?>
                       <span class="pull-right"><img src="<?php echo asset_url() ?>img/icon-twitter.png" class="social" alt="Image"> 
                       <a href="http://<?php echo $value->Member_Twtr_Address; ?>" target="_blank"><?php echo $value->Member_Twtr_Address; ?></a></span><br><?php } ?> 
					   <?php if($value->Member_FB_Address!="")  {?> 
                      <span class="pull-right"><img src="<?php echo asset_url() ?>img/icon-fb.png" class="social" alt="Image">
                      <a  href="http://<?php echo $value->Member_FB_Address; ?>" target="_blank"><?php echo $value->Member_FB_Address; ?></a></span><br><?php } ?> 
                     
            </dd>
			 <?php if($value->Member_President!="") { ?><dt>1.	Vorsitzender: </dt>
			<dd>  <?php  
			echo $value->Member_President; ?></dd>
            <?php } ?>
             <?php if($value->Member_Multiple_Sports!="") { ?> <dt><strong>Sparten:</strong></dt>        
             <dd>	   
                <?php  echo "<span class='pull-right'>".$value->Member_Multiple_Sports."</span><br>"; ?>
              </dd>
              <?php } ?>
			<dt>Kontakt:</dt>
			<dd>
				  <?php if($value->MA_first_name!="" || $value->MA_name!='') echo "<span class='pull-right'>".$value->MA_name." ".$value->MA_first_name."</span><br>"; ?>
             <?php  if($value->MA_position!="") echo "<span class='pull-right'>".$value->MA_position."</span><br>"; ?>
              <?php if($value->MA_street_no!="" || $value->MA_house_no!='') echo "<span class='pull-right'>".$value->MA_street_no." ".$value->MA_house_no."</span><br>"; ?>
              <?php if($value->MA_zip!="" || $value->MA_city!='') echo  "<span class='pull-right'>".$value->MA_zip." ".$value->MA_city."</span><br>"; ?> 
            <?php  if($value->MA_phone!="") { ?> <span class='pull-right'><?php echo $value->MA_phone; ?></span><br><?php } ?>
             <?php  if($value->MA_mobile!="") { ?> <span class='pull-right'><?php echo $value->MA_mobile; ?></span><br><?php } ?>
             <?php  if($value->MA_email!="") { ?> 
              <span class='pull-right'><img src="<?php echo asset_url() ?>img/icon-e-mail.png" class="social" alt="Image"> <a href="mailto:<?php echo  $value->MA_email; ?>" >
			<?php echo $value->MA_email; ?></a></span><br><?php } ?>
          
			</dd>
			</div>   
    
                 <div class="pull-left">
                 <?php if($this->uri->segment(4)>0) { ?> 
                  <a title="Vorheriger" href="<?php echo base_url()."welcome/go_previous/".$this->uri->segment(4)."/".$_GET['sessionid']; ?>" >
                  Vorheriger&laquo;</a>
				  <?php }else { ?>
                 <span title="Vorheriger">
                 Vorheriger«</span>
                  <?php } ?> </div>
                <div class="pull-right">
                 <?php
				 foreach($GetBufferUserData as $count) { $totalcount=$count->total_count;} 
				  $uricount=$this->uri->segment(4)+1;  
				 if($uricount!=$totalcount) { ?>
                 <a title="Nächster" href="<?php echo base_url()."welcome/go_next/".$this->uri->segment(4)."/".$_GET['sessionid']; ?>">
                 »Nächster</a>
                 <?php }else { ?>
                 <span title="Nächster">»Nächster
                 <!-- <img src="<?php echo asset_url(); ?>img/orange_icons/next_24.png">--></span>
                  <?php } ?>
                  </div>
              <br> <a href="<?php echo base_url()."welcome/?sessionid=".$_GET['sessionid']; ?>" >zurück zur Liste«</a>
                  </div>
            </div>
          </form>

	</div>
    <?php } }?>
</div>

</body>
</html>