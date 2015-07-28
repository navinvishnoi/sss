<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Invoice Data</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php");
	
	
	if(isset($_GET['edit'])) {
	$Invoice_ID = "INV1122";
	$Sales_Order_ID = "SO2211";
	$Address = "13,shivaji nagar";
	$Customer= "SSISM";
	$Contact_Person = "Navin Vishnoi";
	$Contact_Number = "9826404529";
	$Email_ID = "Navinvishnoi@ssism.org";
	$Invoice_Status = "Draft";
	$City_State = "Indore";
	$Invoice_Date = "23/12/2014";
	$Authorised_by = "Manager1";
	$Contact_Person_By = "Pawan UWC";
	$Contact_Number_By = "+91 7869990777";
	$Email_ID_By = "pawan@uwc.com";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Invoice_ID = '';
	$Sales_Order_ID = '';
	$Address = '';
	$Customer = '';
	$Contact_Number = '';
	$Contact_Person = '';
	$Email_ID = '';
	$City_State = '';
	$Invoice_Status = '';
	$Invoice_Date = '';
	$Authorised_by = '';
	$Contact_Person_By = '';
	$Contact_Number_By = '';
	$Email_ID_By = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Invoice</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Invoice_list.php"><i class="fa fa-star"></i>Invoice List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-6">
                <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Invoice To</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Invoice ID</label>
                                            <input type="text" class="form-control" value="<?php echo $Invoice_ID; ?>" placeholder="Enter Invoice ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Invoice Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Invoice_Date; ?>"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Sales Order ID</label>
                                            <input type="text" class="form-control" value="<?php echo $Sales_Order_ID; ?>" readonly/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Customer</label>
                                            <input type="text" class="form-control" value="<?php echo $Customer; ?>" placeholder="Enter Customer..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control"  rows="1" placeholder="Enter Address..."><?php echo $Address; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>City/State</label>
                                            <input type="text" class="form-control" value="<?php echo $City_State; ?>" placeholder="Enter City/State..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" value="<?php echo $Contact_Person; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" value="<?php echo $Contact_Number; ?>" placeholder="Enter Number..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="text" class="form-control" value="<?php echo $Email_ID; ?>" placeholder="Enter Number..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                            <option value="">Choose Status</option>
                                            <option value="Draft" <?php if($Invoice_Status=='Draft') echo "selected"; ?>>Draft</option>
                                            <option value="Shipped" <?php if($Invoice_Status=='Shipped') echo "selected"; ?>>Shipped</option>
                                            <option value="Sent" <?php if($Invoice_Status=='Sent') echo "selected"; ?>>Sent</option>
                                            <option value="Paid" <?php if($Invoice_Status=='Paid') echo "selected"; ?>>Paid</option>
                                            <option value="Partial" <?php if($Invoice_Status=='Partial') echo "selected"; ?>>Partial</option>
                                            <option value="Draft_Refurd" <?php if($Invoice_Status=='Draft_Refurd') echo "selected"; ?>>Draft Refurd</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-lg-6">
                <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Invoice By</h3>
                                </div>
                               <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Company Name</label>
                                            UWC and CT Ventures Private Limited
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Address</label>
                                            07 ,Shanti Nagar, Shree Nagar Ext. Indore - 452001
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Landline Number</label>
                                            0731 4225754
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Business Email ID</label>
                                            design@civom.co.in
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Tin Number</label>
                                            # 23469067897
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Person</label>
                                            <input type="text" class="" value="<?php echo $Contact_Person_By; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Number</label>
                                            <input type="text" class="" value="<?php echo $Contact_Number_By; ?>" placeholder="Enter Number..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Email ID</label>
                                            <input type="text" class="" value="<?php echo $Email_ID_By; ?>" placeholder="Enter Email ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                 <div class="col-md-12">
                                <div class="box box-solid bg-gray">
                                <div class="box-header">
                                <div class="box-title">
                                <button type="button" onclick="myFunction()" class="btn btn-success" data-toggle="tooltip" title="Add More Items"><i class="fa fa-plus"></i>&nbsp;Add More Items</button>
                                <a href="Add_Inventory.php"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Add Item in Inventory"><i class="fa fa-plus"></i>&nbsp;Add Item in Inventory</button></a>
                                </div>
                                </div>
                                </div>
                         
                             <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                        <table id="myTable" border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                                <th>Unit</th>
                                <th>Qty.</th>
                                <th>Rate</th>
                                <th>Amount</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tr>
                                <td><input type="text" class="form-control" value="1000" placeholder="Enter Item Code..." /></td>
                                <td><textarea class="form-control"  rows="1" placeholder="Enter Description...">Chair, 24X24 Approx 25X25</textarea></td>
                                <td><input type="text" class="form-control" value="100 cm" placeholder="Enter Unit..." /></td>
                                <td><input type="text" class="form-control" value="10" placeholder="Enter Qty...." /></td>
                                <td><input type="text" class="form-control" value="5000" placeholder="Enter Rate..." /></td>
                                <td><input type="text" class="form-control" value="50000" placeholder="Enter Amount..." /></td>
                                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button>
                                    <a href="View_Inventory.php"><button type="button" class="btn btn-success"  data-toggle="tooltip" title="View Item Detail"><i class="fa fa-eye"></i></button></a></td>
                              </tr>
                            </table>
                           </div>
                            </div>
                             </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-lg-9">
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Authorised by</label>
                                            <select class="form-control">
                                            <option value="">Choose Authorised by</option>
		                                    <option value="Manager1" <?php if($Authorised_by =="Manager1") echo "selected"; ?>>Manager 1</option>
                                            <option value="Manager2" <?php if($Authorised_by =="Manager2") echo "selected"; ?>>Manager 2</option>
                                            <option value="Manager3" <?php if($Authorised_by =="Manager3") echo "selected"; ?>>Manager 3</option>
                                            <option value="Manager4" <?php if($Authorised_by =="Manager4") echo "selected"; ?>>Manager 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        </div>
                                        </div>
                                <!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                               <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Remark..."></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                       <a href="Invoice_list.php"><input type="button" class="btn btn-success" value="Submit" /></a>
                                       <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
									</div>
                                    </div>
                                </div>
                           </div>
                           </div>
                           <div class="col-lg-3">
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Total</label>
                                            <input type="text" class="" placeholder="Total Amount" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Discount</label>
                                            <input type="text" class="" placeholder="Enter Discount" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">VAT@13%</label>
                                            <input type="text" class="" placeholder="Enter VAT" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Freight</label>
                                            <input type="text" class="" placeholder="Enter Freight..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Installation</label>
                                            <input type="text" class="" placeholder="Enter Installation..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-xs-6">Grand Total</label>
                                            <input type="text" class="" placeholder="Enter Grand Total..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        <!-- jQuery 2.0.2 -->
        <script src="../js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
            });
			
			
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
    cell1.innerHTML = "<input type='text' name='Code[]' class='form-control' placeholder='Enter Item Code...' />";
	cell2.innerHTML = "<textarea class='form-control' rows='1' name='Discription[]' placeholder='Enter Description...'></textarea>";
	cell3.innerHTML = "<input type='text' name='Unit[]' class='form-control' placeholder='Enter Unit...' />";
    cell4.innerHTML = "<input type='text' name='Qty[]' class='form-control' placeholder='Enter Qty....' />";
	cell5.innerHTML = "<input type='text' name='Rate[]' class='form-control' placeholder='Enter Rate...' />";
	cell6.innerHTML = "<input type='text' name='Amount[]' class='form-control' placeholder='Enter Amount...' />";
	cell7.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete Item'><i class='fa  fa-times'></i></button>  <a href='View_Inventory.php'><button type='button' class='btn btn-success' data-toggle='tooltip' title='View Item Detail'><i class='fa  fa-eye'></i></button></a>";

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
</script>
    </body>
</html>
