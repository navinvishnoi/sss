<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Customer</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo asset_url(); ?>css/datatables/dataTables.bootstrap.css" rel="stylesheet" />
		<?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>&nbsp;View Customer</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Customer_list"; ?>"><i class="fa fa-star"></i>Customer List</a></li>
                        <li class="active">&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active col-lg-3"><a href="#tab1success" data-toggle="tab" class="text-center">Basic Information</a></li>
                            <li class="col-lg-3"><a href="#tab2success" data-toggle="tab" class="text-center">Address</a></li>
                            <li class="col-lg-3"><a href="#tab3success" data-toggle="tab" class="text-center">Order</a></li>
                            <li class="col-lg-3"><a href="#tab4success" data-toggle="tab" class="text-center">Payments</a></li>
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
                                            <label class="col-xs-4" >Company</label>
                                            SSISM
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Short Name</label>
                                            SSISM01121
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Business Phone</label>
                                            07274-123123
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Business Email ID</label>
                                            SSISM@SSISM.ORG
                                        </div><!-- /.input group -->
                                        </div>
                                       <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Contract Person</label>
                                            Navin Vishnoi
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Contract Number</label>
                                            9826404529
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Email ID</label>
                                           Navinvishnoi@ssism.org
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Head Office</label>
                                        Address 1
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                        <label class="col-xs-4" >Billing Address</label>
                                         Address 2
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Shipping Address</label>
                                         Address 3
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Fax</label>
                                          123456123456
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4" >Website</label>
                                            SSISM.ORG
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Bank Name</label>
                                        HDFC BANK INDORE
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Bank Branch</label>
                                        HDFC INDORE
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >IFSC Code</label>
                                        0000
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Account Number</label>
                                         0123456789012345
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Card Number</label>
                                        9876543210
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Customer Class</label>
                                         School
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <label class="col-xs-4" >Credit Limit</label>
                                         200000
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="tab2success">
                        <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Address</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                      <div class="col-md-12">
                             <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                        <table border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">State/Province</th>
                                <th scope="col">Zip/Pin code</th>
                                <th scope="col">Country</th>
                              </tr>
                              <tr>
                                <td>72/1 , ABCD ABCDEFGHIJKLMNOPQRSTUV</td>
                                <td>Indore</td>
                                <td>Madhya Pradesh</td>
                                <td>12345</td>
                                <td>India</td>
                              </tr>
                            </table>
                            </div>
                            </div>
                             </div>
                                </div><!-- /.box-body -->
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
                                          <div class=" table-responsive">
                                       <table id="dataTables-example" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Order#</th>
                                            <th>Order Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Paid</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                            
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td><a href="#"><button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="View"><i class='fa fa-eye'></i></button></a>
                                                    <a href="#"><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" title="Edit"><i class='fa fa-edit'></i></button></a></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="tab4success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class=" table-responsive">
                                       <table id="dataTables-example1" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Date</th>
                                            <th>Order</th>
                                            <th>Due Date</th>
                                            <th>Transaction</th>
                                            <th>Amount</th>
                                            <th>Credit Balance</th>
                                            <th>Balance</th>
                                            
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
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
         <script src="<?php echo asset_url(); ?>js/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo asset_url(); ?>js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
				 $('#dataTables-example1').dataTable();
				 $('#dataTables-example2').dataTable();
				 $('#dataTables-example3').dataTable();
            });
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
