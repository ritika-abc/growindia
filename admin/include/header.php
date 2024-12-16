<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Growindiaexport</title>


    <link href="./gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="./gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="./gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <link href="./gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />

    <link href="./gentelella-master/build/css/custom.min.css" rel="stylesheet">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title">  <span>Growindiaexport</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <!-- <div class="profile_pic">
                            <img src="../gentelella-master/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div> -->
                        <div class="profile_info">
                            <span> </span>
                            <h2> </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <!-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Product <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../admin/index.php">Home Page {Admin}</a></li>
                                    <li><a href="../admin/add_category.php">Add Catedgory</a></li>
                                    <li><a href="index2.html">View All Supplier</a></li>
                                    <li><a href="index3.html">View All Products</a></li>
                                    <li><a href="index3.html" class="active">Add Products</a></li>
                                </ul>


                                <ul class="nav child_menu text-white">

                                    <li><a href="../admin/add_category.php" class="text-white">Add Categdory</a></li>

                                    <li><a href="index3.html">Add Products</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div> -->
                    <hr class="text-white bg-light">
                    <ul class="navbar-nav mx-4 text-capitalize">
                        <li class="nav-item mt-0 p-0"><a href="add_category.php" class="nav-link"> add category</a></li>
                        <li class="nav-item mt-0 p-0"><a href="add-sub-cat.php" class="nav-link"> Add Sub Caetegory</a></li>
                        <li class="nav-item mt-0 p-0"><a href="add-inner-cat.php" class="nav-link"> add Inner category</a></li>
                        <li class="nav-item mt-0 p-0"><a href="add-micro-cat.php" class="nav-link"> add Micro category</a></li>
                        <li class="nav-item mt-0 p-0"><a href="add-product.php" class="nav-link"> Add Product</a></li>
                        <li class="nav-item mt-0 p-0"><a href="view-product.php" class="nav-link"> view Product</a></li>
                     
                         
                        <li class="nav-item mt-0 p-0"><a href="view-user.php" class="nav-link"> view All  Supplier List</a></li>
                        <li class="nav-item mt-0 p-0"><a href="add-buyleads.php" class="nav-link"> add new buyleads</a></li>
                        <li class="nav-item mt-0 p-0"><a href="view-buyleads.php" class="nav-link"> view all buyleads</a></li>
                        <li class="nav-item mt-0 p-0"><a href="view-requirement.php" class="nav-link"> View Requirement</a></li>
                        <li class="nav-item mt-0 p-0"><a href="https://growindiaexport.com/admin/add-news.php" class="nav-link"> Add News</a></li>
                        <li class="nav-item mt-0 p-0"><a href="https://growindiaexport.com/admin/add-faq.php" class="nav-link"> FAQ</a></li>
                    </ul>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                  
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                   Admin
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="https://growindiaexport.com/admin/add_category.php"> Profile</a>
                                   
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="./gentelella-master/images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->