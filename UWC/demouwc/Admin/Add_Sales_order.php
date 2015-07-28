<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Sales Order</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?> 
<style>
.Manually_Rate{display:none;}
</style>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	
	if(isset($_GET['edit'])) {
	$Sales_Order_ID = "SO2211";
	$Quotation_ID = "Qu0143";
	$Sales_Order_Status= "Draft";
	$Sales_Order = "ABCD";
	$Customer_Order = "PQRST";
	$Order_Date = "23/12/2014";
	$Requested_Ship_Date = "23/12/2015";
	$Estimated_Ship_Date = "23/12/2015";
	$Payment_Terms = "By_Cheque";
	$Shipping_Method = "By_Bus";
	$Authorised_by = "Manager1";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$Sales_Order_ID = '';
	$Quotation_ID = '';
	$Sales_Order_Status= '';
	$Sales_Order = '';
	$Customer_Order = '';
	$Order_Date = '';
	$Requested_Ship_Date = '';
	$Estimated_Ship_Date = '';
	$Payment_Terms = '';
	$Shipping_Method = '';
	$Authorised_by = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Sales Order</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Sales_order_list.php"><i class="fa fa-star"></i>Sales Order List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-6">
                <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Order Information</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Sales Representative</label>
                                            <input type="text" class="form-control" value="Navin Vishnoi" placeholder="Enter Order ID..." readonly/>
                                        </div><!-- /.input group -->
                                        </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Sales Order ID</label>
                                            <input type="text" class="form-control" value="<?php echo $Sales_Order_ID; ?>" placeholder="Enter Order ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Sales Order</label>
                                            <input type="text" class="form-control" value="<?php echo $Sales_Order; ?>" placeholder="Enter Sales Order..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Quotation ID</label>
                                            <input type="text" class="form-control" value="<?php echo $Quotation_ID; ?>" placeholder="Enter ID..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Customer Order</label>
                                            <input type="text" class="form-control" value="<?php echo $Customer_Order; ?>" placeholder="Enter Customer Order..." />
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
                                            <option value="By_Bus" <?php if($Shipping_Method=='By_Bus') echo "selected"; ?>>By Bus</option>
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
                                            <option value="Draft" <?php if($Sales_Order_Status=='Draft') echo "selected"; ?>>Draft</option>
                                            <option value="Shipped" <?php if($Sales_Order_Status=='Shipped') echo "selected"; ?>>Shipped</option>
                                            <option value="Booked" <?php if($Sales_Order_Status=='Booked') echo "selected"; ?>>Booked</option>
                                            <option value="Cancel" <?php if($Sales_Order_Status=='Cancel') echo "selected"; ?>>Cancel</option>
                                            <option value="Partially_Shipped" <?php if($Sales_Order_Status=='Partially_Shipped') echo "selected"; ?>>Partially Shipped</option>
                                            <option value="In_Fulfill" <?php if($Sales_Order_Status=='In_Fulfill') echo "selected"; ?>>In Fulfill</option>
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
                                    <h3 class="box-title">&nbsp;Customer Information</h3>
                                </div>
                               <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Costomer</label>
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
                           
                           </div>
                           <div class="col-lg-12">
                           <div class="box box-solid bg-gray">
                                <div class="box-header">
                                <div class="box-title">
                                <button type="button" onclick="myFunction()" class="btn btn-success" data-toggle="tooltip" title="Add More Items"><i class="fa fa-plus"></i>&nbsp;Add More Items</button>
                                <a href="Add_Inventory.php"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Add Item in Inventory"><i class="fa fa-plus"></i>&nbsp;Add Item in Inventory</button></a>
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
                                <th scope="col" width="20%">Description</th>
                                <th scope="col" width="10%">Image</th>
                                <th scope="col" width="10%">Unit</th>
                                <th scope="col" width="10%">Qty.</th>
                                <th scope="col" width="20%">Rate</th>
                                <th scope="col" width="10%">Amount</th>
                                <th scope="col" width="10%">Action</th>
                              </tr>
                              <tr>
                                <td><input type="text" name="Item_Code[]" class="form-control" placeholder="Enter Item Code..." /></td>
                                <td><textarea class="form-control" rows="1" name="Item_Discription[]" placeholder="Enter Description..."></textarea></td>
                                <td>
                                <div class="btn btn-success btn-file" data-toggle="tooltip" title="Choose Item Image">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment"/>
                                </div>
                                </td>
                                <td><input type="text" name="Unit[]" class="form-control" placeholder="Enter Unit..." /></td>
                                <td><input type="text" name="Qty.[]" class="form-control" placeholder="Enter Qty...." /></td>
                                <td>
                                 <select name="ManuallyPrice" id="ManuallyPrice1" class="form-control"  tabindex="5" onChange="showManuallyRate(1)">                 
                                 <option value=""  selected="selected">Choose Rate</option>
                                 <option value="Minimum_Rate">Minimum_Rate</option>
                                 <option value="Normal_Rate">Normal_Rate</option>
                                 <option value="Maximum_Rate">Maximum_Rate</option>
                                 <option value="Last_Selling">Last Selling Rate</option>
                                 <option value="Manually">Manually Rate</option>
                                 </select>
              					 <input id="ManuallyRate1" name="Manually_Rate" type="text" class="form-control" placeholder="Enter Rate..."/>
                                </td>
                                <td><input type="text" name="Amount[]" class="form-control" placeholder=" Enter Amount..." /></td>
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
                           </div>
                           <div class="box box-success">
                               <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter Remarks..."></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-12">
                                       <a href="Sales_order_list.php"><input type="button" class="btn btn-success" value="Submit" /></a>
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
                                            <input type="text" class="" placeholder="Total Amount..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Discount</label>
                                            <input type="text" class="" placeholder="Enter Discount..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">VAT@13%</label>
                                            <input type="text" class="" placeholder="Enter VAT..." />
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
                                        <div class="form-group">
                                            <label class="col-xs-6">Packing Charge</label>
                                            <input type="text" class="" placeholder="Packing Charge..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12"><hr>
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
        <script src="j../s/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
                          <script>
		   $('#ManuallyRate1').hide(); 
	function showManuallyRate(count){
	//var $vl=$("#ManuallyPrice").select()
	var $vl=$("#ManuallyPrice"+count).val();
  if ($vl=='Manually')
  {
    $('#ManuallyRate'+count).show();
  }
  else{
	   $('#ManuallyRate'+count).hide();
	   
}
}

	</script>
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
	var cell8 = row.insertCell(7);
    cell1.innerHTML = "<input type='text' name='Item_Code[]' class='form-control' placeholder='Enter Item Code...' />";
    cell2.innerHTML = "<textarea class='form-control' rows='1' name='Item_Discription[]' placeholder='Enter Description...'></textarea>";
	cell3.innerHTML = "<div class='btn btn-success btn-file'> <i class='fa fa-paperclip'></i> Attachment<input type='file' name='attachment'/></div>";
	cell4.innerHTML = "<input type='text' name='Qty[]' class='form-control' placeholder='Enter Qty...' />";
    cell5.innerHTML = "<input type='text' name='Unit[]' class='form-control' placeholder='Enter Unit...' />";
	cell6.innerHTML = "<select name='ManuallyPrice' id='ManuallyPrice"+length+"' class='form-control'  tabindex='5' onChange='showManuallyRate("+length+");'><option value=''  selected='selected'>Choose Rate</option><option value='Minimum_Rate'>Minimum_Rate</option><option value='Normal_Rate'>Normal_Rate</option><option value='Maximum_Rate'>Maximum_Rate</option><option value='Last_Selling'>Last Selling Rate</option><option value='Manually'>Manually Rate</option></select><input id='ManuallyRate"+length+"' name='Manually_Rate' type='text' class='Manually_Rate form-control' placeholder='Enter Rate...' />";
	cell7.innerHTML = "<input type='text' name='Amount[]' class='form-control' placeholder='Enter Amount...' />";
	cell8.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>  <a href='View_Inventory.php'><button type='button' class='btn btn-success' data-toggle='tooltip' title='View Item Detail'><i class='fa  fa-eye'></i></button></a>";

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
