        
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo asset_url(); ?>img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="<?php echo base_url()."user/home"; ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                          <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                    <span>Sales</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url()."user/Lead_genration_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Lead</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Quotation_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Quotation</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Sales_order_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Sales Order</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Delivery_challan_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Delivery challan</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Invoice_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Invoice</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Customer_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Customer</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer Class</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Receipt_Entry"; ?>"><i class="fa fa-angle-double-right"></i> <span>Receipt Entry</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Order_Tracking"; ?>"><i class="fa fa-angle-double-right"></i> <span>Order Tracking</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Genrate_BOM"; ?>"><i class="fa fa-angle-double-right"></i> <span>Genrate BOM</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Order_Dispatch_Screen"; ?>"><i class="fa fa-angle-double-right"></i> <span>Order Dispatch</span></a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                    <span>Purchase</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url()."user/Purchas_order_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Purchase order</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Add_New_Bill"; ?>"><i class="fa fa-angle-double-right"></i> <span>Bill</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Vendor_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Vendor</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Vendor Class</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Payment_Entry"; ?>"><i class="fa fa-angle-double-right"></i> <span>Payment Entry</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Order_Receipt_Screen"; ?>"><i class="fa fa-angle-double-right"></i> <span>Order Receipt</span></a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                    <span>Inventory</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url()."user/Add_Inventory"; ?>"><i class="fa fa-angle-double-right"></i> <span>New Product</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Inventory_list"; ?>"><i class="fa fa-angle-double-right"></i> <span>Product List</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Current_Stock"; ?>"><i class="fa fa-angle-double-right"></i> <span>Current Stock</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Movement_History"; ?>"><i class="fa fa-angle-double-right"></i> <span>Movement History</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Adjust_Stock"; ?>"><i class="fa fa-angle-double-right"></i> <span>Adjust Stock</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Transfer_Stock"; ?>"><i class="fa fa-angle-double-right"></i> <span>Transfer Stock</span></a></li>
                                    <li><a href="<?php echo base_url()."user/Reorders_Stock"; ?>"><i class="fa fa-angle-double-right"></i> <span>Reorders Stock</span></a></li>
                                </ul>
                            </li>                        
                       <!-- <li>
                            <a href="Item_list.php">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Item List</span>
                            </a>
                        </li>-->
                        <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                    <span>Report</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> <span>Sales Report</span><i class="fa fa-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales by Product Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales by Product Details</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales Order Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales Order Profit Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales Order Oration Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales Tax Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer Payment Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer Payment Details</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer Order History</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer Product Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Back Order Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Sales Representative Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Customer List</span></a></li>
                                       </ul>
                                    </li>
                                    <li class="treeview"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> <span>Purchase Report</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Purchase Order Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Purchase Order Details</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Purchase Order Status</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Purchasing Tax Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Vendor Product List</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Vendor List</span></a></li>
                                       </ul>                                    </li>
                                    <li class="treeview"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> <span>Inventory Report</span><i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory Details Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory by Location</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory Inventory</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory Movement Summary</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Inventory Movement Details</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Estimated Inventory Duration</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Stock Reordering Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Product Price List</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Count Sheet Report</span></a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i> <span>Product Cost Report</span></a></li>
                                       </ul>                                    
                                    </li>
                                </ul>
                            </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."user/index"; ?>">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Logout</span>
                            </a>
                        </li>
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>