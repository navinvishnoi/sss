<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Packing Data</title>
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
                    <h1><i class="fa fa-plus"></i>&nbsp;New Packing</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Packing_list.php"><i class="fa fa-star"></i>Packing List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-flag"></i>&nbsp;1. Voucher Type and Date</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Series</label>
                                            <select class="form-control">
                                                <option>jv-</option>
                                                
                                            </select>
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Posting Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                     <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Voucher Type</label>
                                            <select class="form-control">
                                                <option>Journal Entry</option>
                                                <option>Bank Voucher</option>
                                                <option>Cash Voucher</option>
                                                <option>Credit Card Voucher</option>
                                                <option>Credit Note</option>
                                                <option>Debite Note</option>
                                                <option>Contra Voucher</option>
                                                <option>Excize Voucher</option>
                                                <option>Wright Off Voucher</option>
                                                <option>Opening Entry</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            <hr> 
                             <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-table"></i>&nbsp;2. Journal Entries</h3>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>#</th>
                                            <th>Account</th>
                                            <th>Cost Center</th>
                                            <th>Account Balance</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><smal>Click on row to view / edit.</small></td>
                                        <td><a href="#" class="btn-link">+ Add new row.</a><a href="#" class="btn-link">+ Add multiple rows.</a></td>
                                        </tr>
                                    </table><hr>
                                </div><!-- /.box-body -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Total Debit</label>
                                            <input type="text" class="form-control" disabled/>
                                        </div>
                                        </div>
                                    <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Reference Number</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                     <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Total Credit</label>
                                            <input type="text" class="form-control" disabled/>
                                        </div></div>
                                        
                                        <div class="col-xs-6">
                                       <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Reference Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Difference (Dr - Cr)</label>
                                            <input type="text" class="form-control" disabled/>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>User Remark</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="panel box box-danger">
                                            <div class="box-header">
                                            <h3 class="box-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
<i class="fa fa-thumb-tack"></i>&nbsp;3. Reference</a></h3>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                  <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Clearance Date</label>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  disabled/>
                                        </div>
                                        </div>
                                    <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Bill No</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." />
                                            
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                     <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <input type="text" class="form-control" disabled/>
                                            <p class="help-block">User Remark will be added to Auto Remark</p>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Bill Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div>
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
                                        </div>
                                 </div><!-- /.box-body -->
                                                             <hr> 
                             <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-file"></i>&nbsp;4. More Info</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Pay To / Recd From</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." />
                                        </div>
                                    </div>
                                     <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Letter Head</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Is Opening</label>
                                            <select class="form-control">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                            <p class="help-block">Considered as Opening Balance</p>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Fiscal Year</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                   <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." />
                                        </div>
                                        <div class="form-group">
                                            <label>Print Heading</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." />
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->

                                 </div>
                                 </div>
                            </div><!-- /.box -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
