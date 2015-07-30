<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | View Inventory</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" />
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php");?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1> View Item</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Inventory_list.php"><i class="fa fa-star"></i>Inventory List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;View</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1success" data-toggle="tab" class="text-center">Product Information</a></li>
                            <li class=""><a href="#tab2success" data-toggle="tab" class="text-center">Vendor</a></li>
                            <li class=""><a href="#tab3success" data-toggle="tab" class="text-center">Property</a></li>
                            <li class=""><a href="#tab4success" data-toggle="tab" class="text-center">Hardware</a></li>
                            <li class=""><a href="#tab5success" data-toggle="tab" class="text-center">Material</a></li>
                            <li class=""><a href="#tab6success" data-toggle="tab" class="text-center">Material History</a></li>
                            <li class=""><a href="#tab7success" data-toggle="tab" class="text-center">Pricing</a></li>
                            <li class=""><a href="#tab8success" data-toggle="tab" class="text-center">Stock</a></li>
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
                                            <label class="col-xs-4">Item ID</label>
                                           ITM2221
                                           </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Item Class</label>
                                            Item Class 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Category</label>
                                            Wood
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Sub Category</label>
                                            Category 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Type</label>
                                            Chair
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Sub Type</label>
                                            Sub Type 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Specification</label>
                                            Specification 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label class="col-xs-4">Dimension</label>
                                            Dimension 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Item Size</label>
                                            100X100
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Item Code</label>
                                            1000
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Item Name</label>
                                            Chair
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Item Discription</label>
                                            Black chair 100X100
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Picture</label>
                                            <i class="fa fa-2x fa-camera"></i>
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        <div class="tab-pane fade" id="tab2success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class=" table-responsive">
                                       <table class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Vendor</th>
                                            <th>Product Code</th>
                                            <th>Price</th>
                                            <th>Comany</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td>Navin Vishnoi</td>
                                            <td>ABCD01122</td>
                                            <td>1500</td>
                                            <td>SSS Sandalpur</td>
                                          </tr>
                                          <tr>
                                            <td>Navin Vishnoi</td>
                                            <td>ABCD01122</td>
                                            <td>1500</td>
                                            <td>SSS Sandalpur</td>
                                          </tr>
                                          <tr>
                                            <td>Navin Vishnoi</td>
                                            <td>ABCD01122</td>
                                            <td>1500</td>
                                            <td>SSS Sandalpur</td>
                                          </tr>
                                        </table>
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
                                        <div class="col-xs-12"><div class="box-header">
                                    <h3 class="box-title">Measurement</h3>
                                </div></div>
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Hight</label>
                                            3 M
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Width</label>
                                            3 M
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Lenght</label>
                                            3 M
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Weight</label>
                                            2 KG
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                        </div></div>
                                        <div class="row">
                                        <div class="col-lg-12">
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Unit</label>
                                            100 cm
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Warranty</label>
                                            10 Month
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Reorder Point</label>
                                            ABCD
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Minimum Point</label>
                                            ABCD
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                        </div></div>
                                        </div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab4success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         <div class="pull-right">
                                       <button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp;Print</button>
                         </div><br>
                                          <div class=" table-responsive">
                                       <br><table class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Item Name</th>
                                            <th>Size</th>
                                            <th>Vendor Product Code</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            <th>Company</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab5success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                       <div class="pull-right">
                                       <button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp;Print</button>
                         </div><br>
                                          <div class=" table-responsive">
                                       <br><table class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Item Name</th>
                                            <th>Size</th>
                                            <th>color code</th>
                                            <th>Materail</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab6success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <!--<div class="col-lg-12">
                                       <div class="pull-right">
                                       <button type="button" class="btn btn-success" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i>&nbsp;Print</button>
                         </div><br>
                                          <div class=" table-responsive">
                                       <br><table class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Item Name</th>
                                            <th>Size</th>
                                            <th>color code</th>
                                            <th>Materail</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>-->
                                        </div></div></div></div>
                                        
                                        <div class="tab-pane fade" id="tab7success">
                        
                                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Minimum Price</label>
                                            1500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Average Price</label>
                                            2500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Maximum Price</label>
                                           3500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Last Selling Price</label>
                                            3500
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Cost</label>
                                            1700
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Currency</label>
                                            Currency 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Exchange Rate</label>
                                            Exchange Rate 1
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label class="col-xs-4">Final Amount</label>
                                            5000
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                        
                                        </div>
                                        
                                        <div class="tab-pane fade" id="tab8success">
                        <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class=" table-responsive">
                                       <table class="table table-bordered table-striped ">
                                        <thead>
                                          <tr>
                                            <th>Location</th>
                                            <th>Unit</th>
                                            <th>Qty.</th>
                                            <th>Rate</th>
                                            <th>Value</th>
                                            <th>LeadTime</th>
                                          </tr>
                                          </thead>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </table>
                                        </div>
                                        </div>
                                        </div></div></div></div>
                    </div>
                </div>
            </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>
<script src="../js/plugins/datatables/jquery.dataTables.js"></script>
<script src="../js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
				 $('#dataTables-example1').dataTable();
            });
			</script>    

    </body>
</html>
