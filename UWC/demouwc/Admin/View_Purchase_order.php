<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Purchas Order</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" />
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>&nbsp;View Purchas Order</h1>
                     <ol class="breadcrumb">
                        <li> Last Modified By : <strong>Navin Saran</strong> &nbsp; Last Modified on : <strong>11/11/2014</strong> &nbsp; <a data-toggle="modal" data-target="#history-modal"><button type="button" class="btn-link" data-toggle="tooltip" title="View History"><i class="fa fa-eye"></i>&nbsp; History</button></a>
 </li>
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Purchas_order_list.php"><i class="fa fa-star"></i>Purchase Order List</a></li>
                        <li class="active">&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <form action="#" id="Purchas_order" name="Purchas_order" method="post" >
                <div class="col-lg-6">
                <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Purchase Order Information</h3>
                                </div>
                               <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Purchase Order</label>
                                            PO221
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-md-12">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Order Date</label>
                                            23/12/2015
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Quotation</label>
                                            Qu0143
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Requested Ship Date</label>
                                            23/12/2015
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Estimated Ship Date</label>
                                            23/12/2015
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Cost Center</label>
                                            Cost Center1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Payment Terms</label>
                                            By Cheque
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="col-xs-6">Shipping Method</label>
                                            By Bus
                                        </div><!-- /.input group -->
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
                                <div class="box-header">
                                    <h3 class="box-title">&nbsp;Vendor Information</h3>
                                </div>
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
                        <table id="dataTables-example" class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th><input type="checkbox" class="checkbox" /></th>
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
                                          <tr>
                                            <td><input type="checkbox" class="checkbox" /></td>
                                            <td>3</td>
                                            <td>1000</td>
                                            <td>Chair, 20X20 70X70 </td>
                                            <td><i class="fa fa-file"></i></td>
                                            <td>100 cm</td>
                                            <td>10</td>
                                            <td>2000</td>
                                            <td>20000</td>
                                          </tr>
                                        </table>
                                        </div>
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
                           
                </section><!-- /.content -->
                </form>
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
        <script src="../js/plugins/datatables/jquery.dataTables.js"></script>
<script src="../js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
			</script>
    </body>
</html>
