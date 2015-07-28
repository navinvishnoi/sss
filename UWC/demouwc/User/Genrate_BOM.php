<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Genrate Bill of material (BOM)</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php");
	
	
	if(isset($_GET['edit'])) {
	$Sales_Order = "Order1";
	$Purchase_Order_ID = "PO221";
	$Item_Code = "1000";
	$Vendor = "SSISM";
	$Vendor_Product_Code = "2000";
	$Estimated_Delivery_Date = "23/12/2014";
	$Actual_Delivery_Date = "23/12/2015";
	$Status = "Delivered";
	
	}else
	{
	$Sales_Order = '';
	$Purchase_Order_ID = '';
	$Item_Code = '';
	$Vendor = '';
	$Vendor_Product_Code = '';
	$Estimated_Delivery_Date = '';
	$Actual_Delivery_Date = '';
	$Status = '';
	
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>&nbsp;Genrate Bill of material (BOM)</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Genrate Bill of material (BOM)</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                           <div class="col-lg-12">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <button type="button" onclick="myFunction()" class="btn btn-success pull-right" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button><br>
                                          <div class=" table-responsive">
                                      <br> <table border="0" id="myTable" class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Item Code</th>
                                <th scope="col">Item Discription</th>
                                <th scope="col">Actual Size</th>
                                <th scope="col">Percentage of Wastage</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Qty.</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                              </tr>
                              <tr>
                                <td>
                                <select class="form-control">
                                            <option value="">Select Sales Order</option>
                                            <option value="Item_Code_1">Item Code 1</option>
                                            <option value="Item_Code_2">Item Code 2</option>
                                            <option value="Item_Code_3">Item Code 3</option>
                                            <option value="Item_Code_4">Item Code 4</option>
                                            </select>
                                </td>
                                <td><textarea type="text" rows="1" class="form-control" placeholder="Enter Discription..."></textarea></td>
                                <td><input type="text" class="form-control" placeholder="Enter Actual Size..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Percentage of Wastage..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Unit..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Qty...."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Rate..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Amount..."></td>
                                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
                              </tr>
                            </table>
                            </div>
                            </div>
                             </div>
                           </div>
                           </div></div>
                           <div class="col-lg-12">
                           <div class="box box-success">
                           <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-12">
                                       <!-- select -->
                                        <div class="form-group">
                                         <a><button type="button" class="btn btn-success" data-toggle="tooltip" title="Submit">Submit</button></a>
                                         <a><button type="button" class="btn btn-danger" data-toggle="tooltip" title="Cancel">Cancel</button></a>
                                         <a data-toggle="modal" data-target="#compose-modal"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Compose Message"><i class="fa fa-envelope"></i>&nbsp; Compose Message</button></a>
                                          <a><button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp; Print</button></a>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
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
	var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
	var cell8 = row.insertCell(7);
	var cell9 = row.insertCell(8);
    cell1.innerHTML = "<select class='form-control'><option value=''>Select Item Code</option><option value='Item_Code_1'>Item Code 1</option><option value='Item_Code_2'>Item Code 2</option><option value='Item_Code_3'>Item Code 3</option><option value='Item_Code_4'>Item Code 4</option></select>";
    cell2.innerHTML = "<input type='text' name='Discription[]' class='form-control' placeholder='Enter Discription...' />";
	cell3.innerHTML = "<input type='text' name='Actual_Size[]' class='form-control' placeholder='Enter Actual Size...' />";
	cell4.innerHTML = "<input type='text' name='Percentage_of_Wastage[]' class='form-control' placeholder='Enter Percentage of Wastage...' />";
	cell5.innerHTML = "<input type='text' name='Unit[]' class='form-control' placeholder='Enter Unit...' />";
	cell6.innerHTML = "<input type='text' name='Qty.[]' class='form-control' placeholder='Enter Qty....' />";
	cell7.innerHTML = "<input type='text' name='Rate[]' class='form-control' placeholder='Enter Rate...' />";
	cell8.innerHTML = "<input type='text' name='Amount[]' class='form-control' placeholder='Enter Amount...' />";
	cell9.innerHTML = "<button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>  ";

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

                <!-- COMPOSE MESSAGE MODAL -->
        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">TO:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email TO">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">CC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email CC">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">BCC:</span>
                                    <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="btn btn-success btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment"/>
                                </div>
                                <p class="help-block">Max. 2MB</p>
                            </div>

                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

  
    </body>
</html>
