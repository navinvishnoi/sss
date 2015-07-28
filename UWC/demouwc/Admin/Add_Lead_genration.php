<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Lead Genration</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	if(isset($_GET['edit'])) {
	$lead = "ABCDEF";
	$Sort_Name = "SSISM01121";
	$lead_id = "LD1155";
	$leadtype = "Cold_Call";
	$Landline_Number = "0111 1111111";
	$contactperson = "Navin Vishnoi";
	$contactno = "9826404529";
	$address = "ABCDEFGHIJKLMNOPQRSTU";
	$email = "navinvishnoi@ssism.org";
	
	$Visit_By = "XYZZ";
	$Visit_Date = "23/12/2011";
	$Response = "ABCDEFGHIJK";
	$Further_Follow_up = "ABCDEFGHIJKLMNOPQRSTU";
	$Follow_up_Date = "23/12/2014";
	$Lead_Status = "Open";
	$Lead_Class = "School";
	$Call_By = "Rahul";
	$Call_Date = "15/11/2012";
	$Reference_Name = "Ankit Jain";
	$Reference_Contact_Number = "9999999999";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$lead = '';
	$Sort_Name = '';
	$lead_id = '';
	$leadtype = '';
	$contactperson = '';
	$Landline_Number = '';
	$contactno = '';
	$address = '';
	$email = '';
	
	$Visit_By = '';
	$Visit_Date = '';
	$Response = '';
	$Further_Follow_up = '';
	$Follow_up_Date = '';
	$Lead_Status = '';
	$Lead_Class = '';
	$Call_By = '';
	$Call_Date = '';
	$Reference_Name = '';
	$Reference_Contact_Number = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Lead </h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Lead_genration_list.php"><i class="fa fa-star"></i>Lead List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Lead Data</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Lead ID..." value="<?php echo $lead_id; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead</label>
                                            <input type="text" class="form-control" placeholder="Enter Lead..." value="<?php echo $lead; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Short Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Sort Name..." value="<?php echo $Sort_Name; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Lead Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Lead Type</option>
		                                    <option value="Cold_Call" <?php if($leadtype=='Cold_Call') echo "selected"; ?>>Cold Call</option>
                                            <option value="Reference" <?php if($leadtype=='Reference') echo "selected"; ?>>Reference</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Address..."><?php echo $address; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Landline Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number..." value="<?php echo $Landline_Number; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Enter Name..." value="<?php echo $contactperson; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number..." value="<?php echo $contactno; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Email ID..." value="<?php echo $email; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Called By</label>
                                            <input type="text" class="form-control" value="<?php echo $Call_By; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Called on</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" class="form-control" value="<?php echo $Call_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Visited By</label>
                                            <input type="text" class="form-control" value="<?php echo $Visit_By; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Visited on</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" class="form-control" value="<?php echo $Visit_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Response</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Response..."><?php echo $Response; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Next Follow-up</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Fellow-up..."><?php echo $Further_Follow_up; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Next Follow-up Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Follow_up_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label >Key Customer Question Form</label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Letter of Intent</label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead Class</label>
                                            <select class="form-control">
                                            <option value="">Choose Lead Class</option>
                                            <option value="School" <?php if($Lead_Class=='School') echo "selected"; ?>>School</option>
                                            <option value="Collage" <?php if($Lead_Class=='Collage') echo "selected"; ?>>Collage</option>
                                            <option value="Company" <?php if($Lead_Class=='Company') echo "selected"; ?>>Company</option>
                                            <option value="Restaurants" <?php if($Lead_Class=='Restaurants') echo "selected"; ?>>Restaurants</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                            <option value="">Choose Status</option>
                                            <option value="Open" <?php if($Lead_Status=='Open') echo "selected"; ?>>Open</option>
                                            <option value="Contacted" <?php if($Lead_Status=='Contacted') echo "selected"; ?>>Contacted</option>
                                            <option value="Designed" <?php if($Lead_Status=='Designed') echo "selected"; ?>>Designed</option>
                                            <option value="Quotation" <?php if($Lead_Status=='Quotation') echo "selected"; ?>>Quotation</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        

                                    </div>
                                </div><!-- /.box-body -->
                            <hr> 
                             <div class="box-header">
                                    <h3 class="box-title">&nbsp;Reference By -</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  value="<?php echo $Reference_Name; ?>"  placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" value="<?php echo $Reference_Contact_Number; ?>" placeholder="Enter Number..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                           <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                    <a href="Lead_genration_list.php"><button type="submit" class="btn btn-success">Submit</button></a>
                                    <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
