
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Services Booking and Appointment System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
        <link rel="stylesheet" href="css/modals.css">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3>One Love</h3>
                    <p>Admin</p>
                    <strong>SBA</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li >
                            <a href="dashboard.php"  role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> </a>
                        </li>
                        <li ><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-book"></i> <span class="mini-dn">Booking</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-down"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="bookingcategories.php" class="dropdown-item">Categories</a>
                                <a href="bookinglist.php" class="dropdown-item">List</a>
                            </div>
                        </li>
                       <li class="active">
                            <a href="servicesoffered.php"  role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Services Offered</span> </a>
                        </li>
                        <li class="active" style="background-color: #03a9f0">
                            <a href="clientinfo.php"  role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Client Information</span> </a>
                        </li>
                       <li class="active">
                            <a href="databasebackup.php"  role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Database Backup</span> </a>
                        </li>
                        <li class="active">
                            <a href="incomereport.php"  role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-calendar"></i> <span class="mini-dn">Income Report</span> </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                        
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">One Love admin</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                
                                                
                                                <li><a href="../index.php"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            
            
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Client Information Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                       <button class="btn btn-default" style="margin-bottom:-4.7%; margin-left: 46.5%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></button>
                                        <div id="add" class="modal modal-adminpro-general modal-zoomInDown fade zoomInDown animated in" role="dialog" >
                                <div class="modal-dialog">
                                  <form action="#">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                       <div class="modal-body">
                                     <div class="modal-login-form-inner">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner modal-basic-inner">
                                                    <h3>Add Client</h3>
                                                    <p>Fill In :</p>
                                            <div class="form-group-inner">
                                        <div class="row">
                                    <div class="col-lg-4">
                                        <label class="">Name</label>
                                            </div>
                                                <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Name">
                                                        </div>
                                                            </div>
                                                                </div>
                                                            <div class="form-group-inner">
                                                        <div class="row">
                                                    <div class="col-lg-4">
                                                <label class="">Contact</label>
                                                    </div>
                                                        <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Contact Number">
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                    <div class="col-lg-4">
                                                <label class="">Email Address</label>
                                                    </div>
                                                        <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Email Address">
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#" style="margin-right: 44%">Cancel</a>
                                            <a href="#" style="margin-right: 10%">Save</a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                    </div> 
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="false" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th width="10">Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Email Address</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <tr>
                                                    <td>Norman Crystal</td>
                                                    <td>0745678901</td>
                                                    <td>normancrystal14@gmail.com</td>
                                                    <td class="datatable-ct"><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button > <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rashid</td>
                                                    <td>0723333444</td>
                                                    <td>rashid234@gmail.com</td>
                                                    <td class="datatable-ct"><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button > <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="edit" class="modal modal-adminpro-general modal-zoomInDown fade zoomInDown animated in" role="dialog" >
                                <div class="modal-dialog">
                                  <form action="#">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                       <div class="modal-body">
                                     <div class="modal-login-form-inner">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner modal-basic-inner">
                                                    <h3>Edit Client</h3>
                                                    <p>Fill In :</p>
                                            <div class="form-group-inner">
                                        <div class="row">
                                    <div class="col-lg-4">
                                        <label class="">Name</label>
                                            </div>
                                                <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Name">
                                                        </div>
                                                            </div>
                                                                </div>
                                                            <div class="form-group-inner">
                                                        <div class="row">
                                                    <div class="col-lg-4">
                                                <label class="">Contact</label>
                                                    </div>
                                                        <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Contact Number">
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                    <div class="col-lg-4">
                                                <label class="">Email Address</label>
                                                    </div>
                                                        <div class="col-lg-8">
                                                     <input type="text" class="form-control" placeholder="Enter Client Email Address">
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#" style="margin-right: 44%">Cancel</a>
                                            <a href="#" style="margin-right: 10%">Save</a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
 
   
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>


</body>

</html>