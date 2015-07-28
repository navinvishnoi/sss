<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Inventory</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" />
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	if(isset($_GET['edit'])) {
	$Item_ID = "ITM2221";
	$Item_Category = "Wood";
	$Item_Sub_Category = "Category1";
	$Item_Type = "Chair";
	$Item_Size= "100X100";
	$Item_Code = "1000";
	$Item_Name = "Chair";
	$Item_Discription = "Black chair 100X100";
	$Minimum_Price = "2500";
	$Average_Price = "3000";
	$Maximum_Price = "3500";
	$Last_Price = "3500";
	$Location = "ABC Indore";
	$Quantity = "235";
	$Unit = "111";
	$Hight = "3 M";
	$Width = "3 M";
	$Lenght = "3 M";
	$Weight = "2 KG";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Item_ID = '';
	$Item_Category = '';
	$Item_Sub_Category = '';
	$Item_Type = '';
	$Item_Size= '';
	$Item_Code = '';
	$Item_Name = '';
	$Item_Discription = '';
	$Minimum_Price = '';
	$Average_Price = '';
	$Maximum_Price = '';
	$Last_Price = '';
	$Location = '';
	$Quantity = '';
	$Unit = '';
	$Hight = '';
	$Width = '';
	$Lenght = '';
	$Weight = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Item</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Inventory_list.php"><i class="fa fa-star"></i>Inventory List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active col-lg-6"><a href="#tab1success" data-toggle="tab" class="text-center">Product Information</a></li>
                            <li class="col-lg-6"><a href="#tab2success" data-toggle="tab" class="text-center">Vendor</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1success">
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
                                            <label>Item Sub Category</label>
                                            <select class="form-control">
                                            <option value="">Choose Sub Category</option>
                                            <option value="Category1" <?php if($Item_Sub_Category=='Category1') echo "selected"; ?>>Category 1</option>
                                            <option value="Category2" <?php if($Item_Sub_Category=='Category2') echo "selected"; ?>>Category 2</option>
                                            <option value="Category3" <?php if($Item_Sub_Category=='Category3') echo "selected"; ?>>Category 3</option>
                                            <option value="Category4" <?php if($Item_Sub_Category=='Category4') echo "selected"; ?>>Category 4</option>
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
                                            <label>Minimum Price</label>
                                            <input type="text" class="form-control"  value="<?php echo $Minimum_Price; ?>" placeholder="Enter Minimum Price..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Average Price</label>
                                            <input type="text" class="form-control"  value="<?php echo $Average_Price; ?>" placeholder="Enter Average Price..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Maximum Price</label>
                                            <input type="text" class="form-control"  value="<?php echo $Maximum_Price; ?>" placeholder="Enter Maximum Price..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Last Selling Price</label>
                                            <input type="text" class="form-control"  value="<?php echo $Last_Price; ?>" placeholder="Enter Last Selling Price..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control"  value="<?php echo $Location; ?>" placeholder="Enter Location..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control"  value="<?php echo $Maximum_Price; ?>" placeholder="Enter Quantity..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="text" class="form-control"  value="<?php echo $Unit; ?>" placeholder="Enter Unit..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Picture</label>
                                            <div class="btn btn-success btn-file">
                                            <i class="fa fa-camera"></i> Attachment
                                            <input type="file" name="attachment"/>
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <hr> 
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Measurement -</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Hight</label>
                                            <input type="text" class="form-control"  value="<?php echo $Hight; ?>"  placeholder="Enter Hight..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Width</label>
                                            <input type="text" class="form-control" value="<?php echo $Width; ?>" placeholder="Enter Width..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lenght</label>
                                            <input type="text" class="form-control"  value="<?php echo $Lenght; ?>"  placeholder="Enter Lenght..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="text" class="form-control" value="<?php echo $Weight; ?>" placeholder="Enter Weight..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                        </div>
                        <div class="tab-pane fade" id="tab2success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class=" table-responsive">
                                       <table id="dataTables-example" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Vendor</th>
                                            <th>Vendor Price</th>
                                            <th>Vendor Product Code</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td>ABC</td>
                                            <td>1500</td>
                                            <td>ABCD01122</td>
                                          </tr>
                                          <tr>
                                            <td>ABCD</td>
                                            <td>2500</td>
                                            <td>ABC01122</td>
                                          </tr>
                                          <tr>
                                            <td>ABCDE</td>
                                            <td>3500</td>
                                            <td>ABCDE01122</td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
                           </div>
                           <div class="col-md-12">
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                      <a href=""><input type="button" class="btn btn-success" name="Submit" value="Submit" /></a>
                                        <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
									</div>
                                    </div>
                                </div>
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>
<script src="../js/plugins/datatables/jquery.dataTables.js"></script>
<script src="../js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
				 $('#dataTables-example1').dataTable();
            });
			</script>    

    </body>
</html>
