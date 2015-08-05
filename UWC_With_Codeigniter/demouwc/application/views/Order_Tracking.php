<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Customer</title>
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
                    <h1>&nbsp;Order Tracking</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Order Tracking</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-2">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sales Order</label>
                                            <select class="form-control">
                                            <option value="">Select Sales Order</option>
                                            <option value="Order1" <?php if($Sales_Order=='Order1') echo "selected"; ?>>Order 1</option>
                                            <option value="Order2" <?php if($Sales_Order=='Order2') echo "selected"; ?>>Order 2</option>
                                            <option value="Order3" <?php if($Sales_Order=='Order3') echo "selected"; ?>>Order 3</option>
                                            <option value="Order4" <?php if($Sales_Order=='Order4') echo "selected"; ?>>Order 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                            </div>
                             </div>
                             </div>
                           </div>
                           </div>
                           <div class="col-lg-10">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                        <table border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Purchase Order ID</th>
                                <th scope="col">Item Code</th>
                                <th scope="col">Vendor</th>
                                <th scope="col">Vendor Product Code</th>
                                <th scope="col">Estimated Delivery Date</th>
                                <th scope="col">Actual Delivery Date</th>
                                <th scope="col">Status</th>
                              </tr>
                              <tr>
                                <td><?php echo $Purchase_Order_ID; ?></td>
                                <td><?php echo $Item_Code; ?></td>
                                <td><?php echo $Vendor; ?></td>
                                <td><?php echo $Vendor_Product_Code; ?></td>
                                <td><?php echo $Estimated_Delivery_Date; ?></td>
                                <td><?php echo $Actual_Delivery_Date; ?></td>
                                <td><?php echo $Status; ?></td>
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
                                         <a data-toggle="modal" data-target="#compose-modal"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Compose Message"><i class="fa fa-envelope"></i>&nbsp; Compose Message</button></a>
                                          <a><button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp; Print</button></a>
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
