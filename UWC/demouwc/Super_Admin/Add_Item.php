<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Item Information</title>
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
                    <h1><i class="fa fa-plus"></i>&nbsp;New Item Information</h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Item Category</label>
                                            <select class="form-control">
                                            <option value="">Choose Category</option>
                                            <option value="Wood">Wood</option>
                                            <option value="Steel">Steel</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Item Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Type</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Office_Table">Office Table</option>
                                            <option value="Chair">Chair</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Size</label>
                                            <input type="text" class="form-control" placeholder="Enter Size..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Code</label>
                                            <input type="text" class="form-control" placeholder="Enter Code..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Discription</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Discription..."></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 1</label>
                                            <input type="text" class="form-control" placeholder="Enter Price 1..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 2</label>
                                            <input type="text" class="form-control" placeholder="Enter Price 2..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Item Price 3</label>
                                            <input type="text" class="form-control" placeholder="Enter Price 3..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Vendor</label>
                                            <input type="text" class="form-control" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                        <a href=""><input type="button" class="btn btn-success" name="Submit" value="Submit" /></a>
                                        </div><!-- /.input group -->
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
