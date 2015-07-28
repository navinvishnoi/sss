<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Item Information</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	
	if(isset($_GET['edit'])) {
	$Item_ID = "ITM2221";
	$Item_Category = "Wood";
	$Item_Type = "Chair";
	$Item_Size= "100X100";
	$Item_Code = "1000";
	$Item_Name = "Chair";
	$Item_Discription = "Black chair 100X100";
	$Item_Price_1 = "2500";
	$Item_Price_2 = "3000";
	$Item_Price_3 = "3500";
	$Vendor = "Navin Vishnoi";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Item_ID = '';
	$Item_Category = '';
	$Item_Type = '';
	$Item_Size= '';
	$Item_Code = '';
	$Item_Name = '';
	$Item_Discription = '';
	$Item_Price_1 = '';
	$Item_Price_2 = '';
	$Item_Price_3 = '';
	$Vendor = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Item Information</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item ID</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_ID; ?>" placeholder="Enter Item ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Item Category</label>
                                            <select class="form-control">
                                            <option value="">Choose Category</option>
                                            <option value="Wood" <?php if($Item_Category=='Wood') echo "selected"; ?>>Wood</option>
                                            <option value="Steel" <?php if($Item_Category=='Steel') echo "selected"; ?>>Steel</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Item Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Type</option>
                                            <option value="Furniture" <?php if($Item_Type=='Furniture') echo "selected"; ?>>Furniture</option>
                                            <option value="Office_Table" <?php if($Item_Type=='Office_Table') echo "selected"; ?>>Office Table</option>
                                            <option value="Chair" <?php if($Item_Type=='Chair') echo "selected"; ?>>Chair</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Size</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Size; ?>" placeholder="Enter Size..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Code</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Code; ?>" placeholder="Enter Code..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Name; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Discription</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Discription..."><?php echo $Item_Discription; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 1</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Price_1; ?>" placeholder="Enter Price 1..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 2</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Price_2; ?>" placeholder="Enter Price 2..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 3</label>
                                            <input type="text" class="form-control"  value="<?php echo $Item_Price_3; ?>" placeholder="Enter Price 3..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Vendor</label>
                                            <input type="text" class="form-control"  value="<?php echo $Vendor; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                        <div class="col-xs-offset-10">
                                        <a href=""><input type="button" class="btn btn-success" name="Submit" value="Submit" /></a>
                                        <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
                                        </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
