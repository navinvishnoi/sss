<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Purchas Order</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo asset_url(); ?>css/datatables/dataTables.bootstrap.css" rel="stylesheet" />
		<?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	
	if(isset($_GET['edit'])) {
	$Purchas_Order = "PO221";
	$Order_Date = "23/12/2015";
	$Quotation = "Qu0143";
	$Status= "Draft";
	$Requested_Ship_Date= "23/12/2015";
	$Estimated_Ship_Date= "23/12/2015";
	$Cost_Center= "Cost_Center1";
	$Payment_Terms= "By_Cheque";
	$Shipping_Method= "By_Truck";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Purchas_Order = '';
	$Order_Date = '';
	$Quotation = '';
	$Status= '';
	$Requested_Ship_Date= '';
	$Estimated_Ship_Date= '';
	$Cost_Center= '';
	$Payment_Terms= '';
	$Shipping_Method= '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Purchas Order</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Purchas_order_list"; ?>"><i class="fa fa-star"></i>Purchas Order List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <form action="#" id="Purchas_order" name="Purchas_order" method="post" >
                <div class="col-lg-6">
                <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Purchas Order Information</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Purchas Order</label>
                                            <input type="text" class="form-control" value="<?php echo $Purchas_Order; ?>" placeholder="Enter Purchas Order ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Order Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Order_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Quotation</label>
                                            <input type="text" class="form-control" value="<?php echo $Quotation; ?>" placeholder="Enter Quotation ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Requested Ship Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Requested_Ship_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                         <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Estimated Ship Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Estimated_Ship_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Cost Center</label>
                                            <select class="form-control">
                                            <option value="">Choose Cost Center</option>
                                            <option value="Cost_Center1" <?php if($Cost_Center=='Cost_Center1') echo "selected"; ?>>Cost Center 1</option>
                                            <option value="Cost_Center2" <?php if($Cost_Center=='Cost_Center2') echo "selected"; ?>>Cost Center 2</option>
                                            <option value="Cost_Center3" <?php if($Cost_Center=='Cost_Center3') echo "selected"; ?>>Cost Center 3</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Payment Terms</label>
                                            <select class="form-control">
                                            <option value="">Choose Payment Terms</option>
                                            <option value="By_Cheque" <?php if($Payment_Terms=='By_Cheque') echo "selected"; ?>>By Cheque</option>
                                            <option value="By_Bank_Transfer" <?php if($Payment_Terms=='By_Bank_Transfer') echo "selected"; ?>>By Bank Transfer</option>
                                            <option value="By_Cash" <?php if($Payment_Terms=='By_Cash') echo "selected"; ?>>By Cash</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Shipping Method</label>
                                            <select class="form-control">
                                            <option value="">Choose Shipping Method</option>
                                            <option value="By_Truck" <?php if($Shipping_Method=='By_Truck') echo "selected"; ?>>By Truck</option>
                                            <option value="By_Train" <?php if($Shipping_Method=='By_Train') echo "selected"; ?>>By Train</option>
                                            <option value="By_Air" <?php if($Shipping_Method=='By_Air') echo "selected"; ?>>By Air</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                            <option value="">Choose Status</option>
                                            <option value="Draft" <?php if($Status=='Draft') echo "selected"; ?>>Draft</option>
                                            <option value="Approved" <?php if($Status=='Approved') echo "selected"; ?>>Approved</option>
                                           <option value="Partially_Recieved" <?php if($Status=='Partially_Recieved') echo "selected"; ?>>Partially Recieved</option>
                                            <option value="Recieved" <?php if($Status=='Recieved') echo "selected"; ?>>Recieved</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-lg-6">
                <div class="box box-success">
                                <div class="col-xs-12"><div class="box-header">
                                    <h3 class="box-title">Vendor Information</h3>
                                </div></div>
                               <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Vendor</label>
                                            SSISM
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Short Name</label>
                                            SSISM01121
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Business Phone</label>
                                            07274-123123
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Business Email ID</label>
                                            SSISM@SSISM.ORG
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Address</label>
                                            72/1 , ABCD ABCDEFGHIJKLMNOPQRSTUV
                                        </div>
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Person</label>
                                            Navin Vishnoi
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Number</label>
                                            9826404529
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Email ID</label>
                                           navinvishnoi@ssism.org
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                               <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter Remark..."></textarea>
                                        </div></div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           
                           </div>
                             <div class="col-lg-12">
                           <div class="box box-solid bg-gray">
                                <div class="box-header">
                                <div class="box-title">
                                <button type="button" onclick="myFunction()" class="btn btn-success" data-toggle="tooltip" title="Add More Items"><i class="fa fa-plus"></i>&nbsp;Add More Items</button>
                                <a href="<?php echo base_url()."user/Add_Inventory"; ?>"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Add Item in Inventory"><i class="fa fa-plus"></i>&nbsp;Add Item in Inventory</button></a>
                                </div>
                                </div>
                                </div>
                           </div>
                             <div class="col-md-12">
                             <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class=" table-responsive">
                                        <table id="myTable" border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col" width="10%">Item Code</th>
                                <th scope="col" width="30%">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col" width="10%">Unit</th>
                                <th scope="col" width="10%">Qty.</th>
                                <th scope="col" width="10%">Rate</th>
                                <th scope="col" width="20%">Amount</th>
                                <th scope="col" width="20%">Action</th>
                              </tr>
                             <tr>
                                <td><input type="text" name="Item_Code[]" class="form-control" value="1000" placeholder="Enter Item Code..." /></td>
                                <td><textarea class="form-control" rows="1" name="Item_Discription[]" placeholder="Enter Description...">Chair, 20X20 70X70</textarea></td>
                                <td>
                                <div class="btn btn-success btn-file" data-toggle="tooltip" title="Choose Item Image">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment"/>
                                </div>
                                </td>
                                <td><input type="text" name="Unit[]" class="form-control" value="100 cm" placeholder="Enter Unit..." /></td>
                                <td><input type="text" name="Qty.[]" class="form-control" value="10" placeholder="Enter Qty...." /></td>
                                <td><input type="text" name="Rate[]" class="form-control" value="2000" placeholder="Enter Rate..." /></td>
                                <td><input type="text" name="Amount[]" class="form-control" value="20000" placeholder="Enter Amount..." /></td>
                                <td>
                                <a href="<?php echo base_url()."user/View_Inventory"; ?>"><button type="button" class="btn btn-success"  data-toggle="tooltip" title="View Item Detail"><i class="fa fa-eye"></i></button></a> <button type="button" class="btn btn-danger" onclick="deleteRow(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                              </tr>
                            </table>
                            </div>
                            </div>
                             </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-md-12">
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                       <a href="<?php echo base_url()."user/Purchas_order_list"; ?>"><input type="button" class="btn btn-success" value="Submit" /></a>
                                       <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
									</div>
                                    </div>
                                </div>
                           </div>
                           </div>
               </form> </section><!-- /.content -->
                
            </aside><!-- /.right-side -->
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo asset_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo asset_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo asset_url(); ?>js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
		<script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

            });
        </script>
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
	var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
	var cell8 = row.insertCell(7);
    cell1.innerHTML = "<input type='text' name='Item_Code[]' class='form-control' placeholder='Enter Item Code...' />";
    cell2.innerHTML = "<textarea class='form-control' rows='1' name='Item_Discription[]' placeholder='Enter Description...'></textarea>";
    cell3.innerHTML = "<div class='btn btn-success btn-file' data-toggle='tooltip' title='Choose Item Image'> <i class='fa fa-paperclip'></i> Attachment<input type='file' name='attachment'/></div>";
	cell4.innerHTML = "<input type='text' name='Unit[]' class='form-control' placeholder='Enter Unit...' />";
	cell5.innerHTML = "<input type='text' name='Qty.[]' class='form-control' placeholder='Enter Qty....' />";
    cell6.innerHTML = "<input type='text' name='Rate[]' class='form-control' placeholder='Enter Rate...' />";
	cell7.innerHTML = "<input type='text' name='Amount[]' class='form-control' placeholder='Enter Amount...' />";
	cell8.innerHTML = "<a href='<?php echo base_url()."user/View_Inventory"; ?>'><button type='button' class='btn btn-success' data-toggle='tooltip' title='View Item Detail'><i class='fa  fa-eye'></i></button></a> <button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>";

}
function deleteRow(currentRow) {
    try {
        var table = document.getElementById("myTable");
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            /*var chkbox = row.cells[0].childNodes[0];*/
            /*if (null != chkbox && true == chkbox.Chequeed)*/
            
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
