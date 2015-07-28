<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Project List</title>
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
                    <h1>
                        Project List
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Project List</li>
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
                                                <th>Vendor Name</th>
                                                <th>Item Name</th>
                                                <th>Item Description</th>
                                                <th>Item unit</th>
                                                <th>Total Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeA">
                                            
                                                <td>Navin Vishnoi</td>
                                                <td>Double Sided BEP</td>
                                                <td>2100mm H of Tube 70X30X2 317.5X170X1.6 (72 LHS + 72 RHS)</td>
                                                <td>90</td>
                                                <td>10000</td>
                                                <td><a href="View_Project.php"><button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="View"><i class='fa fa-eye'></i></button></a>
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
        <!-- jQuery 2.0.2 -->
        <script src="../js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- DATA TABLE SCRIPTS -->
<script src="../js/plugins/datatables/jquery.dataTables.js"></script>
<script src="../js/plugins/datatables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </body>
</html>