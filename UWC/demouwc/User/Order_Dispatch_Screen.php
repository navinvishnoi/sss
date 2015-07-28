<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Order Dispatch Screen</title>
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
                    <h1>&nbsp;Order Dispatch Screen</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Order Dispatch Screen</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                           <div class="col-lg-12">
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Sales Order No.</label>
                                            <select class="form-control">
                                            <option>Sales Order No. 1</option>
                                            <option>Sales Order No. 2</option>
                                            <option>Sales Order No. 3</option>
                                            <option>Sales Order No. 4</option>
                                            <option>Sales Order No. 5</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <select class="form-control">
                                            <option>Customer Name 1</option>
                                            <option>Customer Name 2</option>
                                            <option>Customer Name 3</option>
                                            <option>Customer Name 4</option>
                                            <option>Customer Name 5</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                        <table border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Item Code</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Location</th>
                                <th scope="col">Size</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Quantity Ordered</th>
                                <th scope="col">Quantity Delivered</th>
                                <th scope="col">Quantity Remained</th>
                                <th scope="col">Comments</th>
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
                                <td><input type="text" class="form-control" placeholder="Enter Location..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Size..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Unit..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Quantity Ordered..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Quantity Delivered..."></td>
                                <td><input type="text" class="form-control" placeholder="Enter Quantity Remained..."></td>
                                <td><textarea type="text" rows="1" class="form-control" placeholder="Enter Comments..."></textarea></td>
                              </tr>
                            </table>
                            </div>
                            </div>
                             </div>
                             </div>
                           </div>
                           </div>
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
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                           </div>
                           
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>
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
