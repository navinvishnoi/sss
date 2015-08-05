<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Bill</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php");?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1> New Bill</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New Bill</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                        <div class="form-group">
                                            <label>Vendor</label>
                                            <select class="form-control">
                                            <option>Select Vendor Name</option>
                                            <option>Vendor 1</option>
                                            <option>Vendor 2</option>
                                            <option>Vendor 3</option>
                                            <option>Vendor 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-3">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-md-3">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Due Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-3">
                                        <div class="form-group">
                                            <label>Purchase Order Number</label>
                                            <select class="form-control">
                                            <option>Select Purchase Order</option>
                                            <option>Purchase Order 1</option>
                                            <option>Purchase Order 2</option>
                                            <option>Purchase Order 3</option>
                                            <option>Purchase Order 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           
                               <div class="col-md-12">
                             <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                       <button type="button" onclick="myFunction()" class="btn btn-success pull-right" data-toggle="tooltip" title="Add More"><i class="fa fa-plus"></i>&nbsp;Add More</button><br>
                                          <div class=" table-responsive">
                                      <br> <table border="0" id="myTable" class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Bill ID</th>
                                <th scope="col">Item Code</th>
                                <th scope="col">Description</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Qty.</th>
                                <th scope="col">Tax Rate</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                              </tr>
                              <tr>
                                <td><input type="text" name="Bill_ID[]" class="form-control" placeholder="Enter Bill ID..." /></td>
                                <td><input type="text" name="Item_Code[]" class="form-control" placeholder="Enter Item Code..." /></td>
                                <td><textarea class="form-control" rows="1" name="Item_Discription[]" placeholder="Enter Description..."></textarea></td>
                                
                                <td><input type="text" name="Unit[]" class="form-control" placeholder="Enter Unit..." /></td>
                                <td><input type="text" name="Qty.[]" class="form-control" placeholder="Enter Qty...." /></td>
                                <td><input type="text" name="Tax_Rate[]" class="form-control" placeholder="Enter Tax Rate..." /></td>
                                <td><input type="text" name="Amount[]" class="form-control" placeholder="Enter Amount..." /></td>
                                <td><button type="button" class="btn btn-success" data-toggle="tooltip" title="View"><i class="fa  fa-eye"></i></button> <button type="button" class="btn btn-danger" onclick="deleteRow(this)" data-toggle="tooltip" title="Delete"><i class="fa  fa-times"></i></button></td>
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
                                    <div class="col-xs-12">
                                       <a><input type="button" class="btn btn-success" data-toggle="tooltip" title="Save" value="Save" /></a>
                                       <a><input type="button" class="btn btn-success" data-toggle="tooltip" title="Approve" value="Approve" /></a>
                                       <a><button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Cancel">Cancel</button></a>
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
                                            <label class="col-xs-6">Sub Total</label>
                                            <input type="text" class="" placeholder="Sub Total..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Sales Tax</label>
                                            <input type="text" class="" placeholder="Sales Tax..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12"><hr>
                                        <div class="form-group">
                                            <label class="col-xs-6">Total</label>
                                            <input type="text" class="" placeholder="Total..." />
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
<?php include("include/js.php");?>
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
    cell1.innerHTML = "<input type='text' name='Bill_ID[]' class='form-control' placeholder='Enter Bill ID...' />";
    cell2.innerHTML = "<input type='text' name='Item_Code[]' class='form-control' placeholder='Enter Item Code...' />";
	cell3.innerHTML = "<textarea class='form-control' rows='1' name='Item_Discription[]' placeholder='Enter Description...'></textarea>";
	cell4.innerHTML = "<input type='text' name='Unit[]' class='form-control' placeholder='Enter Unit...' />";
	cell5.innerHTML = "<input type='text' name='Qty.[]' class='form-control' placeholder='Enter Qty....' />";
	cell6.innerHTML = "<input type='text' name='Tax_Rate[]' class='form-control' placeholder='Enter Tax Rate...' />";
	cell7.innerHTML = "<input type='text' name='Amount[]' class='form-control' placeholder='Enter Amount...' />";
	cell8.innerHTML = "<button type='button' class='btn btn-success' data-toggle='tooltip' title='View'><i class='fa fa-eye'></i></button> <button type='button' class='btn btn-danger' onclick='deleteRow(this);' data-toggle='tooltip' title='Delete'><i class='fa  fa-times'></i></button>  ";

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