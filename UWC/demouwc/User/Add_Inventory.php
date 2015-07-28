<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Inventory</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	if(isset($_GET['edit'])) {
	$Item_ID = "ITM2221";
	$Item_Class = "Item_Class_1";
	$Category = "Wood";
	$Sub_Category = "Category1";
	$Type = "Chair";
	$Sub_Type = "Sub_Type_1";
	$Specification = "Specification_1";
	$Dimension = "Dimension_1";
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
	$Unit = "111 cm";
	$Hight = "3 M";
	$Width = "3 M";
	$Lenght = "3 M";
	$Weight = "2 KG";
	$Cost = "1700";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Item_ID = '';
	$Item_Class = '';
	$Category = '';
	$Sub_Category = '';
	$Type = '';
	$Sub_Type = '';
	$Specification = '';
	$Dimension = '';
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
	$Cost = '';
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
                            <li class="active"><a href="#tab1success" data-toggle="tab" class="text-center">Product Information</a></li>
                            <li class=""><a href="#tab2success" data-toggle="tab" class="text-center">Vendor</a></li>
                            <li class=""><a href="#tab3success" data-toggle="tab" class="text-center">Property</a></li>
                            <li class=""><a href="#tab4success" data-toggle="tab" class="text-center">Hardware</a></li>
                            <li class=""><a href="#tab5success" data-toggle="tab" class="text-center">Material</a></li>
                            <li class=""><a href="#tab6success" data-toggle="tab" class="text-center">Pricing</a></li>
                            <li class=""><a href="#tab7success" data-toggle="tab" class="text-center">Stock</a></li>
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
                                        <div class="form-group">
                                            <label>Item Class</label>
                                            <select class="form-control">
                                            <option value="">Choose Item Class</option>
                                            <option value="Item_Class_1" <?php if($Item_Class=='Item_Class_1') echo "selected"; ?>>Item Class 1</option>
                                            <option value="Item_Class_2" <?php if($Item_Class=='Item_Class_2') echo "selected"; ?>>Item Class 2</option>
                                            <option value="Item_Class_3" <?php if($Item_Class=='Item_Class_3') echo "selected"; ?>>Item Class 3</option>
                                            <option value="Item_Class_4" <?php if($Item_Class=='Item_Class_4') echo "selected"; ?>>Item Class 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control">
                                            <option value="">Choose Category</option>
                                            <option value="Wood" <?php if($Category=='Wood') echo "selected"; ?>>Wood</option>
                                            <option value="Steel" <?php if($Category=='Steel') echo "selected"; ?>>Steel</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control">
                                            <option value="">Choose Sub Category</option>
                                            <option value="Category1" <?php if($Sub_Category=='Category1') echo "selected"; ?>>Category 1</option>
                                            <option value="Category2" <?php if($Sub_Category=='Category2') echo "selected"; ?>>Category 2</option>
                                            <option value="Category3" <?php if($Sub_Category=='Category3') echo "selected"; ?>>Category 3</option>
                                            <option value="Category4" <?php if($Sub_Category=='Category4') echo "selected"; ?>>Category 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Type</option>
                                            <option value="Furniture" <?php if($Type=='Furniture') echo "selected"; ?>>Furniture</option>
                                            <option value="Office_Table" <?php if($Type=='Office_Table') echo "selected"; ?>>Office Table</option>
                                            <option value="Chair" <?php if($Type=='Chair') echo "selected"; ?>>Chair</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Sub Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Sub Type</option>
                                            <option value="Sub_Type_1" <?php if($Sub_Type=='Sub_Type_1') echo "selected"; ?>>Sub Type 1</option>
                                            <option value="Sub_Type_2" <?php if($Sub_Type=='Sub_Type_2') echo "selected"; ?>>Sub Type 2</option>
                                            <option value="Sub_Type_3" <?php if($Sub_Type=='Sub_Type_3') echo "selected"; ?>>Sub Type 3</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Specification</label>
                                            <select class="form-control">
                                            <option value="">Choose Specification</option>
                                            <option value="Specification_1" <?php if($Specification=='Specification_1') echo "selected"; ?>>Specification 1</option>
                                            <option value="Specification_2" <?php if($Specification=='Specification_2') echo "selected"; ?>>Specification 2</option>
                                            <option value="Specification_3" <?php if($Specification=='Specification_3') echo "selected"; ?>>Specification 3</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Dimension</label>
                                            <select class="form-control">
                                            <option value="">Choose Dimension</option>
                                            <option value="Dimension_1" <?php if($Dimension=='Dimension_1') echo "selected"; ?>>Dimension 1</option>
                                            <option value="Dimension_2" <?php if($Dimension=='Dimension_2') echo "selected"; ?>>Dimension 2</option>
                                            <option value="Dimension_3" <?php if($Dimension=='Dimension_3') echo "selected"; ?>>Dimension 3</option>
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
                                            <label>Picture</label>
                                            &nbsp;<div class="btn btn-success btn-file">
                                            <i class="fa fa-camera"></i> Attachment
                                            <input type="file" name="attachment"/>
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="tab2success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <button type="button" onclick="myFunction()" class="btn btn-success pull-right" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button><br>
                                          <div class=" table-responsive">
                                      <br> <table id="myTable" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Vendor</th>
                                            <th>Product Code</th>
                                            <th>Price</th>
                                            <th>Company</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td><select class="form-control">
                                            <option value="">Select Vendor</option>
                                            <option value="Vendor_1">Vendor 1</option>
                                            <option value="Vendor_2">Vendor 2</option>
                                            <option value="Vendor_3">Vendor 3</option>
                                            <option value="Vendor_4">Vendor 4</option>
                                            </select></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Product Code..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Price..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Company..."></td>
                                            <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="tab-pane fade" id="tab3success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="box-header">
                                    <h3 class="box-title">Measurement -</h3>
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
                                        </div></div>
                                        <div class="row">
                                        <div class="col-lg-12">
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Unit</label>
                                            <input type="text" class="form-control"  value="<?php echo $Unit; ?>" placeholder="Enter Unit..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                        </div></div>
                                        </div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab4success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="pull-right">
                                       <button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp;Print</button>
                                       <button type="button" onclick="myFunction1()" class="btn btn-success" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button></div><br>
                                          <div class=" table-responsive">
                                      <br><table id="myTable1" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Item Code</th>
                                            <th>Size</th>
                                            <th>Vendor Product Code</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            <th>Company</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td><select class="form-control">
                                            <option value="">Select Item Code</option>
                                            <option value="Item_Code_1">Item Code 1</option>
                                            <option value="Item_Code_2">Item Code 2</option>
                                            <option value="Item_Code_3">Item Code 3</option>
                                            <option value="Item_Code_4">Item Code 4</option>
                                            </select></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Size..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Vendor Product Code..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Unit..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Qty...."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Rate..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Company..."></td>
                                           <td><button type="button" class="btn btn-danger" onclick="deleteRow1(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab5success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                       <div class="pull-right">
                                       <button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp;Print</button>
                                       <button type="button" onclick="myFunction3()" class="btn btn-success" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button></div><br>
                                          <div class=" table-responsive">
                                      <br><table id="myTable3" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Item Name</th>
                                            <th>Size</th>
                                            <th>color code</th>
                                            <th>Materail</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            <th>Action</th>
                                            
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td><select class="form-control">
                                            <option value="">Select Item Name</option>
                                            <option value="Item_Code_1">Item Name 1</option>
                                            <option value="Item_Code_2">Item Name 2</option>
                                            <option value="Item_Code_3">Item Name 3</option>
                                            <option value="Item_Code_4">Item Name 4</option>
                                            </select></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Size..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter color code..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Materail..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Unit..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Qty...."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Rate..."></td>
                                           <td><button type="button" class="btn btn-danger" onclick="deleteRow3(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab6success">
                        
                                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        
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
                                            <label>Cost</label>
                                            <input type="text" class="form-control"  value="<?php echo $Cost; ?>" placeholder="Enter Cost..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                        
                                        </div>
                                        
                                        <div class="tab-pane fade" id="tab7success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         <button type="button" onclick="myFunction2()" class="btn btn-success pull-right" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button><br>
                                          <div class=" table-responsive">
                                      <br> <table id="myTable2" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Location</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            <th>Value</th>
                                            <th>LeadTime</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td><input type="text" class="form-control" placeholder="Enter Location..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Unit..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Qty...."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Rate..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter Value..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter LeadTime..."></td>
                                            <td><button type="button" class="btn btn-danger" onclick="deleteRow2(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
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
        <script>
					
			function myFunction() {
    var table = document.getElementById("myTable");
	var length = table.rows.length;
	
	console.log(length);
    var row = table.insertRow(length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
    cell1.innerHTML = "<select class='form-control'><option value=''>Select Vendor</option><option value='Vendor_1'>Vendor 1</option><option value='Vendor_2'>Vendor 2</option><option value='Vendor_3'>Vendor 3</option><option value='Vendor_4'>Vendor 4</option></select>";
    cell2.innerHTML = "<input type='text' name='Product_Code[]' class='form-control' placeholder='Enter Product Code...' />";
	cell3.innerHTML = "<input type='text' name='Price[]' class='form-control' placeholder='Enter Price...' />";
	cell4.innerHTML = "<input type='text' name='Company[]' class='form-control' placeholder='Enter Company...' />";
	cell5.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>  ";

}
function deleteRow(currentRow) {
    try {
        var table = document.getElementById("myTable");
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            /*var chkbox = row.cells[0].childNodes[0];*/
            /*if (null != chkbox && true == chkbox.checked)*/
            
            if (row==currentRow.parentNode.parentNode) {
                if (rowCount <= 1) {
                    alert("Cannot delete all the rows.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    } catch (e) {
        alert(e);
    }
    //getValues();
}


function myFunction1() {
    var table = document.getElementById("myTable1");
	var length = table.rows.length;
	
	console.log(length);
    var row = table.insertRow(length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	var cell7 = row.insertCell(6);
	var cell8 = row.insertCell(7);
    cell1.innerHTML = "<select class='form-control'><option value=''>Select Item Code</option><option value='Item_Code_1'>Item Code 1</option><option value='Item_Code_2'>Item Code 2</option><option value='Item_Code_3'>Item Code 3</option><option value='Item_Code_4'>Item Code 4</option></select>";
	cell2.innerHTML = "<input type='text' name='Size' class='form-control' placeholder='Enter Size...' />";
	cell3.innerHTML = "<input type='text' name='Vendor_Product_Code' class='form-control' placeholder='Enter Vendor Product Code...' />";
    cell4.innerHTML = "<input type='text' name='Unit' class='form-control' placeholder='Enter Unit...' />";
	cell5.innerHTML = "<input type='text' name='Qty.' class='form-control' placeholder='Enter Qty....' />";
	cell6.innerHTML = "<input type='text' name='Rate' class='form-control' placeholder='Enter Rate...' />";
	cell7.innerHTML = "<input type='text' name='Company' class='form-control' placeholder='Enter Company...' />";
	cell8.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow1(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>";
}
function deleteRow1(currentRow) {
    try {
        var table = document.getElementById("myTable1");
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            /*var chkbox = row.cells[0].childNodes[0];*/
            /*if (null != chkbox && true == chkbox.checked)*/
            
            if (row==currentRow.parentNode.parentNode) {
                if (rowCount <= 1) {
                    alert("Cannot delete all the rows.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    } catch (e) {
        alert(e);
    }
    //getValues();
}

function myFunction2() {
    var table = document.getElementById("myTable2");
	var length = table.rows.length;
	
	console.log(length);
    var row = table.insertRow(length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	var cell7 = row.insertCell(6);
    cell1.innerHTML = "<input type='text' name='Location' class='form-control' placeholder='Enter Location...' />";
    cell2.innerHTML = "<input type='text' name='Unit' class='form-control' placeholder='Enter Unit...' />";
	cell3.innerHTML = "<input type='text' name='Qty.' class='form-control' placeholder='Enter Qty....' />";
	cell4.innerHTML = "<input type='text' name='Rate' class='form-control' placeholder='Enter Rate...' />";
	cell5.innerHTML = "<input type='text' name='Value' class='form-control' placeholder='Enter Value...' />";
	cell6.innerHTML = "<input type='text' name='LeadTime' class='form-control' placeholder='Enter LeadTime...' />";
	cell7.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow2(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>";
}
function deleteRow2(currentRow) {
    try {
        var table = document.getElementById("myTable2");
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            /*var chkbox = row.cells[0].childNodes[0];*/
            /*if (null != chkbox && true == chkbox.checked)*/
            
            if (row==currentRow.parentNode.parentNode) {
                if (rowCount <= 1) {
                    alert("Cannot delete all the rows.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    } catch (e) {
        alert(e);
    }
    //getValues();
}


function myFunction3() {
    var table = document.getElementById("myTable3");
	var length = table.rows.length;
	
	console.log(length);
    var row = table.insertRow(length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	var cell7 = row.insertCell(6);
	var cell8 = row.insertCell(7);
    cell1.innerHTML = "<select class='form-control'><option value=''>Select Item Name</option><option value='Item_Name_1'>Item Name 1</option><option value='Item_Name_2'>Item Name 2</option><option value='Item_Name_3'>Item Name 3</option><option value='Item_Name_4'>Item Name 4</option></select>";
	cell2.innerHTML = "<input type='text' name='Size' class='form-control' placeholder='Enter Size...' />";
	cell3.innerHTML = "<input type='text' name='Vendor_Product_Code' class='form-control' placeholder='Enter color code...' />";
	cell4.innerHTML = "<input type='text' name='Company' class='form-control' placeholder='Enter Materail...' />";
    cell5.innerHTML = "<input type='text' name='Unit' class='form-control' placeholder='Enter Unit...' />";
	cell6.innerHTML = "<input type='text' name='Qty.' class='form-control' placeholder='Enter Qty....' />";
	cell7.innerHTML = "<input type='text' name='Rate' class='form-control' placeholder='Enter Rate...' />";
	cell8.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow3(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>";
}
function deleteRow3(currentRow) {
    try {
        var table = document.getElementById("myTable3");
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            /*var chkbox = row.cells[0].childNodes[0];*/
            /*if (null != chkbox && true == chkbox.checked)*/
            
            if (row==currentRow.parentNode.parentNode) {
                if (rowCount <= 1) {
                    alert("Cannot delete all the rows.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
    } catch (e) {
        alert(e);
    }
    //getValues();
}

        </script>

    </body>
</html>
