<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Payment Entry </title>
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
                    <h1>Payment Entry</h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Payment_Entry"; ?>"><i class="fa fa-star"></i>Payment Entry</a></li>
                        <li class="active"><i class="fa fa-plus"></i> New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                 <div class="box-body">
                                    <div class="row">
                   <div class="col-lg-6">
                    <div class="box-header">
                    <h4 class="box-title">Account Voucher Creation </h4>
                    </div>
                    <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Payment Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Payment Number..." value="" readonly/>
                                        </div><!-- /.input group -->
                                        </div>
                                        </div>                                 
                                </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="box-header">
                    <h4 class="box-title">UWC and CT Ventures Private Limited</h4>
                    </div>
                    <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" class="form-control" value="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div>
                                        </div>
                                        </div>                                 
                                </div>
                   </div>
                   <div class="box-body">
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class=" table-responsive">
                                        <table border="0"   class="table table-bordered table-striped ">
                              <tr>
                                <th scope="col">Transection Type</th>
                                <th scope="col">Account</th>
                                <th scope="col">Cheque Book ID</th>
                                <th scope="col">Cheque Number</th>
                                <th scope="col">Comments</th>
                              </tr>
                              <tr>
                                <td>
                                <select class="form-control">
                                            <option value="">Choose Transection Type</option>
                                            <option value="By_Cheque">By Cheque</option>
                                            <option value="By_Bank_Transfer">By Bank Transfer</option>
                                            <option value="By_Cash">By Cash</option>
                                            </select>
                                </td>
                                <td><select class="form-control">
                                            <option value="">Select Account</option>
                                            <option value="123456789098765">123456789098765</option>
                                            <option value="123456789098765">123456789098765</option>
                                            <option value="123456789098765">123456789098765</option>
                                            <option value="123456789098765">123456789098765</option>
                                            </select>
                                            <span>Account Balance Rs. 1122334</span></td>
                                <td><select class="form-control">
                                            <option value="">Select Cheque Book ID</option>
                                            <option value="Cheque Book ID 1">Cheque Book ID 1</option>
                                            <option value="Cheque Book ID 2">Cheque Book ID 2</option>
                                            <option value="Cheque Book ID 3">Cheque Book ID 3</option>
                                            <option value="Cheque Book ID 4">Cheque Book ID 4</option>
                                            </select></td>
                                <td><input type="text" class="form-control" placeholder="Enter Cheque Number..." value="" /></td>
                                <td><textarea type="text" class="form-control" rows="1" placeholder="Enter Comments..."></textarea></td>
                              </tr>
                            </table>
                            </div>
                            </div></div>
                             </div>
                             </div>
                             <div class="col-lg-6">
                    <div class="box-header">
                    <h4 class="box-title">Particuler</h4>
                    </div>
                    <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Vendor</label>
                                            <select class="form-control">
                                            <option value="">Select Vendor</option>
                                            <option value="Vendor 1">Vendor 1</option>
                                            <option value="Vendor 2">Vendor 2</option>
                                            <option value="Vendor 3">Vendor 3</option>
                                            <option value="Vendor 4">Vendor 4</option>
                                            </select>
                                            <span>Total Balance Rs. 1122334</span>
                                        </div>
                                        </div>
                                        </div>                                 
                                </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="box-header">
                    <h4 class="box-title">Amount</h4>
                    </div>
                    <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                       <div class="form-group">
                                            <label>Paid Amount</label>
                                            <input type="text" class="form-control" placeholder="Enter Paid Amount..." value="" />
                                        </div>
                                        </div>
                                        </div>
                                        </div>                                 
                                </div>
                                </div>
                                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                       <div class="form-group">
                                            <label>Narrotion</label>
                                            <textarea type="text" class="form-control" rows="1" placeholder="Enter Narrotion Discription..."></textarea>
                                        </div><!-- /.input group -->
                                        </div>
                                        </div>
                                        </div> 
                                        <button type="button" class="btn btn-success btn-lg pull-right" value="Submit">Submit</button>                                
                                        </div>                                
                </div>
                </div></div></div>
                
                
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?> 
    </body>
</html>