<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Delivery Challan List</title>
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
                    <h1>
                        Delivery Challan List
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Delivery Challan List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="row">
                <div class="col-md-12">
                <div class=" table-responsive">
                <table id="dataTables-example" class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th><div class="checkbox"><input type="checkbox"></div></th>
                                                <th>Sr. No.</th>
                                                <th>Delivery Challan ID</th>
                                                <th>Delivery Challan</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                                <th>Email ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeA">
                                            
                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                <td>1</td>
                                                <td>DCN243</td>
                                                <td>SSISM</td>
                                                <td>Navin Vishnoi</td>
                                                <td>9826404529</td>
                                                <td>Navinvishnoi@ssism.org</td>
                                                <td><a href="<?php echo base_url()."user/View_Delivery_Challan"; ?>"><button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="View"><i class='fa fa-eye'></i></button></a>
                                                    <a href="<?php echo base_url()."user/Add_Delivery_Challan"; ?>?edit"><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" title="Edit"><i class='fa fa-edit'></i></button></a>
                                                    <a  data-toggle="modal" data-target="#delete-modal"><button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete"><i class='fa fa-times'></i></button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>


                </div>
                </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        
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
        
        
         <!-- DELETE MODAL -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> Are you sure want to Delete or Deactive that Record</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-danger"> Delete</button>
                            <button type="button" class="btn btn-danger"> Deactive</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal"> Cancel</button>
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
        <!-- DATA TABLE SCRIPTS -->
<script src="<?php echo asset_url(); ?>js/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo asset_url(); ?>js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
			</script>
    </body>
</html>