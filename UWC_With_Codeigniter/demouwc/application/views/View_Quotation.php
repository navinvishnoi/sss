<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Quotation</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>&nbsp;View Quotation</h1>
                     <ol class="breadcrumb">
                        <li> Last Modified By : <strong>Navin Saran</strong> &nbsp; Last Modified on : <strong>11/11/2014</strong> &nbsp; <a data-toggle="modal" data-target="#history-modal"><button type="button" class="btn-link" data-toggle="tooltip" title="View History"><i class="fa fa-eye"></i>&nbsp; History</button></a>
 </li>

                        <li><a data-toggle="modal" data-target="#Version-modal"><button type="button" class="btn-link" data-toggle="tooltip" title="View Version"><i class="fa fa-eye"></i>&nbsp; Quotation Version</button></a></li>
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Quotation_list"; ?>"><i class="fa fa-star"></i>Quotation List</a></li>
                        <li class="active">&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-6">
                <div class="box box-success">
                                <div class="col-xs-12"><div class="box-header">
                                    <h3 class="box-title">Quotation Information</h3>
                                </div></div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Quotation ID</label>
                                            Qu0143
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Quotation Date</label>
                                            23/12/2014
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Status</label>
                                            Draft
                                        </div><!-- /.input group -->
                                        </div>
                                        
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-lg-6">
                <div class="box box-success">
                                <div class="col-xs-12"><div class="box-header">
                                    <h3 class="box-title">Customer Information</h3>
                                </div></div>
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
                          <div class="col-md-12">
                        <div class=" table-responsive">
                        <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                <th>Sr. No.</th>
                                <th>Item Code</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Unit</th>
                                <th>Qty.</th>
                                <th>Rate</th>
                                <th>Amount</th>
                              </tr>
                              </thead>
                              <tr class="gradeA">
                                <td>3</td>
                                <td>1000</td>
                                <td>Chair, 24X24 Approx 25X25</td>
                                <td><i class="fa fa-file"></i></td>
                                <td>100 cm</td>
                                <td>10</td>
                                <td>5000</td>
                                <td>50000</td>
                              </tr>
                            </table>
                           </div>
                           </div>
                           <div class="col-lg-9">
                           <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-check"></i>&nbsp;Authorised by: <strong>Manager 1</strong></h3>
                                </div>
                                <!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-12">
                                       <!-- select -->
                                        <div class="form-group">
                                         <a href="<?php echo base_url()."user/Add_Sales_order"; ?>?edit"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Generate Sales Order"><i class="fa fa-plus"></i>&nbsp; Generate Sales Order</button></a>
                                         <a data-toggle="modal" data-target="#compose-modal"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Compose Message"><i class="fa fa-envelope"></i>&nbsp; Compose Message</button></a>
                                         
                                          <a><button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp; Print</button></a>
                                         
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
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
                                            <label class="col-xs-8">Total</label>
                                            100000
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-8">Discount</label>
                                            5%
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-8">VAT@13%</label>
                                            1000
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-8">Freight</label>
                                            500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-8">Installation</label>
                                            1000
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-8">Packing Charge</label>
                                            500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12"><hr>
                                        <div class="form-group">
                                            <label class="col-xs-8">Grand Total</label>
                                            97000
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
                               
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

                            <button type="submit" class="btn btn-success"><i class="fa fa-share"></i> Send Message</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
                
                        <!-- VIEW HISTORY MODAL -->
        <div class="modal fade" id="history-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-eye"></i> View History</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                        <div class=" table-responsive">
                        <table id="dataTables-example" class="table table-bordered table-striped ">
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Modified field</th>
                            <th scope="col">Last Value</th>
                            <th scope="col">Remarks</th>
                          </tr>
                          <tr>
                            <td>08/08/2014</td>
                            <td>Navin Vishnoi</td>
                            <td>Contact Person</td>
                            <td>Navin Vishnoi</td>
                            <td>Delay some information </td>
                          </tr>
                          <tr>
                            <td>09/09/2014</td>
                            <td>Tarun Tiwari</td>
                            <td>Contact Number</td>
                            <td>9826404529</td>
                            <td>Delay some information </td>
                          </tr>
                          <tr>
                            <td>10/10/2014</td>
                            <td>Rahul Sharma</td>
                            <td>Contact Person</td>
                            <td>Navin Vishnoi</td>
                            <td>Delay some information </td>
                          </tr>
                          <tr>
                            <td>11/11/2014</td>
                            <td>Navin Saran</td>
                            <td>Contact Number</td>
                            <td>9826404529</td>
                            <td>Delay some information </td>
                          </tr>
                        </table>
                        </div> 
                        </div>                       
                        <div class="modal-footer clearfix">
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        
                      <!-- VIEW Version MODAL -->
        <div class="modal fade" id="Version-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-eye"></i> View Quotation Version</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                        <div class=" table-responsive">
                        <table id="dataTables-example" class="table table-bordered table-striped ">
                          <tr>
                            <th scope="col">Version</th>
                            <th scope="col">Create on</th>
                            <th scope="col">Action</th>
                          </tr>
                          <tr>
                            <td>Qu0143D</td>
                            <td>23/04/2015</td>
                            <td>
                            <button type="button" class="btn-link" data-toggle="tooltip" title="View Version"> View</button>
                            <button type="button" class="btn-link" data-toggle="tooltip" title="Delete"> Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>Qu0143C</td>
                            <td>23/03/2015</td>
                            <td>
                            <button type="button" class="btn-link" data-toggle="tooltip" title="View Version"> View</button>
                            <button type="button" class="btn-link" data-toggle="tooltip" title="Delete"> Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>Qu0143B</td>
                            <td>23/02/2015</td>
                            <td><button type="button" class="btn-link" data-toggle="tooltip" title="View Version"> View</button>
                            <button type="button" class="btn-link" data-toggle="tooltip" title="Delete"> Delete</button>
                            </td>
                          </tr>
                          <tr>
                            <td>Qu0143A</td>
                            <td>23/01/2015</td>
                           <td><button type="button" class="btn-link" data-toggle="tooltip" title="View Version"> View</button>
                           <button type="button" class="btn-link" data-toggle="tooltip" title="Delete"> Delete</button>
                           </td>
                          </tr>
                        </table>
                        </div> 
                        </div>
                        <div class="modal-footer clearfix">
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>                       
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




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
    </body>
</html>