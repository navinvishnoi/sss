<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | User List</title>
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
                        User List
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">User List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="row">
                <div class="col-md-12">
                <div class="box box-solid bg-gray">
                <div class="box-header">
                <div class="btn-group box-title">
                <a href="Add_User.php"><button type="button" class="btn btn-default" data-toggle="tooltip" title="Add New User"><i class='fa fa-plus'></i></button></a>
                </div>
                </div>
                </div>
                <div class=" table-responsive">
                <table id="dataTables-example" class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th>
                                                <div class="checkbox"><input type="checkbox"></div>
                                                </th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Email ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeA">
                                            
                                                <td><div class="checkbox"><input type="checkbox"></div></td>
                                                <td>Navin Vishnoi</td>
                                                <td>9826404529</td>
                                                <td>navinvishnoi@ssism.org</td>
                                                <td><a href="View_User.php"><button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="View"><i class='fa fa-eye'></i></button></a>
                                                    <a href="Add_User.php"><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" title="Edit"><i class='fa fa-edit'></i></button></a>
                                                    <a href="#"><button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete"><i class='fa fa-times'></i></button></a>
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
			</script>
    </body>
</html>