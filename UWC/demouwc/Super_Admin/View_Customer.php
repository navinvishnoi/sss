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
    <?php include("include/sidebar.php"); ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>&nbsp;View Customer</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Customer_list.php"><i class="fa fa-star"></i>Customer List</a></li>
                        <li class="active">&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-flag"></i>&nbsp;Customer Data</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Email ID</label>
                                            Navinvishnoi@ssism.org
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">First Name</label>
                                            Navin
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-4">Last Name</label>
                                            Vishnoi
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Street 1</label>
                                            ABCDEFGH
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Street 2</label>
                                            IJKLMNOPQR
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">City</label>
                                            Indore
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">State/Province</label>
                                           Madhya Pradesh
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Zip/Pincode</label>
                                            123456
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Country</label>
                                            INDIA
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Business Phone</label>
                                            0721-123123
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Mobile (Cell)</label>
                                            1234567890
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Fax</label>
                                            123456123456
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Website</label>
                                            <a href="#" target="_blank">SSISM.ORG</a>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                           <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                         <a data-toggle="modal" data-target="#compose-modal"><button type="button" class="btn btn-success"><i class="fa fa-envelope"></i>&nbsp; Compose Message</button></a>
                                          <a><button type="button" class="btn btn-success"><i class="fa fa-print"></i>&nbsp; Print</button></a>
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
