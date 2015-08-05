<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Lead Genration</title>
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
                    <h1>&nbsp;View Lead </h1>
                     <ol class="breadcrumb">
                        <li> Last Modified By : <strong>Navin Saran</strong> &nbsp; Last Modified on : <strong>11/11/2014</strong> &nbsp; <a data-toggle="modal" data-target="#history-modal"><button type="button" class="btn-link" data-toggle="tooltip" title="View History"><i class="fa fa-eye"></i>&nbsp; History</button></a>
 </li>
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Lead_genration_list"; ?>"><i class="fa fa-star"></i>Lead List</a></li>
                        <li class="active">&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                
                <section class="content">
                              <?php foreach($View_Lead_genration as $value)
									{
									?>
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Lead ID</label>
                                            <?php echo $value->Lead_ID; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Lead</label>
                                            <?php echo $value->Lead; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Short Name</label>
                                            <?php echo $value->Lead_Short_Name; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Lead Type</label>
                                            <?php echo $value->Lead_Type; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Lead Class</label>
                                            <?php echo $value->Lead_Class; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Area Manager</label>
                                            <?php echo $value->Lead_Area_Manager; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-6">Address</label>
                                            <?php echo $value->Lead_Address; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-6">City</label>
                                            <?php echo $value->Lead_City; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-6">State/Province</label>
                                            <?php echo $value->Lead_State; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-6">Zip/Pin code</label>
                                            <?php echo $value->Lead_Pin_Code; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                           <label class="col-xs-6">Country</label>
                                            <?php echo $value->Lead_Country; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Landline Number</label>
                                            <?php echo $value->Lead_Landline_Number; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Person</label>
                                            <?php echo $value->Lead_Contact_Person; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Degingnation</label>
                                            <?php echo $value->Lead_Degingnation; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Number</label>
                                            <?php echo $value->Lead_Contact_Number; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Email ID</label>
                                            <?php echo $value->Lead_Email_ID; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Business Email ID</label>
                                            <?php echo $value->Lead_Business_Email_ID; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Called By</label>
                                            <?php echo $value->Lead_Called_by; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Called on</label>
                                            <?php echo $value->Lead_Called_on; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Visited By</label>
                                            <?php echo $value->Lead_Visited_by; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Visited on</label>
                                            <?php echo $value->Lead_Visited_on; ?>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Response</label>
                                            <?php echo $value->Lead_Response; ?>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Next Follow-up</label>
                                            <?php echo $value->Lead_Next_Follow_up; ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Next Follow-up Date</label>
                                            <?php echo $value->Lead_Next_Follow_up_Date; ?>
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Key Customer Question Form</label>
                                            <a href="#"  ><i class="fa fa-2x fa-file"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Letter of Intent</label>
                                            <a href="#"  ><i class="fa fa-2x fa-file"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-6">Status</label>
                                            <?php echo $value->Lead_Status; ?>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                           <div class="col-lg-12">
                           <div class="box box-success">
                             <div class="col-xs-12"><div class="box-header">
                                    <h3 class="box-title">Reference By</h3>
                                </div></div>
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Name</label>
                                            <?php echo $value->Lead_Reference_Name; ?>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-6">Contact Number</label>
                                            <?php echo $value->Lead_Reference_Contact_Number; ?>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                           <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-12">
                                       <!-- select -->
                                        <div class="form-group">
                                         <a href="<?php echo base_url()."user/Add_Quotation"; ?>?edit"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Generate Quotation"><i class="fa fa-plus"></i>&nbsp; Generate Quotation</button></a>
                                         <a data-toggle="modal" data-target="#compose-modal"><button type="button" class="btn btn-success" data-toggle="tooltip" title="Compose Message"><i class="fa fa-envelope"></i>&nbsp; Compose Message</button></a>
                                         <a><button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp; Print</button></a>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                           </div>
                           <?php }?>
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
                            <th scope="col">Response</th>
                          </tr>
                          <tr>
                            <td>08/08/2014</td>
                            <td>Navin Vishnoi</td>
                            <td>Contact Person</td>
                            <td>Navin Vishnoi</td>
                            <td>Calling but not response</td>
                          </tr>
                          <tr>
                            <td>09/09/2014</td>
                            <td>Tarun Tiwari</td>
                            <td>Contact Number</td>
                            <td>9826404529</td>
                            <td>Visiting but not response</td>
                          </tr>
                          <tr>
                            <td>10/10/2014</td>
                            <td>Rahul Sharma</td>
                            <td>Contact Person</td>
                            <td>Navin Vishnoi</td>
                            <td>Calling but not response</td>
                          </tr>
                          <tr>
                            <td>11/11/2014</td>
                            <td>Navin Saran</td>
                            <td>Contact Number</td>
                            <td>9826404529</td>
                            <td>ABCDEFGHIJK</td>
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


  
    </body>
</html>
