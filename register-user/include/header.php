<?php
session_start();

if (!isset($_SESSION["user_name"])) {
    header("Location:../supplier-register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<!--   -->

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
    <link href="./gentelella-master/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  -->

    <style>
        body {
            height: 100vh;
        }

        /* .actionBar{
        display: none;
    } */
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">


                    <?php
                    if (isset($_SESSION["user_id"])) {
                        $user_id = $_SESSION["user_id"];
                    }
                    include "../config.php";
                    $se = "SELECT * FROM `user` where `user_id`='$user_id'";
                    $qu = mysqli_query($con, $se);
                    while ($row = mysqli_fetch_array($qu)) {
                        $status = $row['status'];
                          $user_id = $row['user_id'];
                    }
                    ?>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">

                        <div class="profile_info">
                            <span>Welcome, </span>
                            <h3 class="text-white text-capitalize"><?php echo $_SESSION["user_name"] ?></h3>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <p class="btn btn-light w-100 text-dark">Dashboard</p>
                            <ul class="nav side-menu active show">
                                <li><a><i class="fa fa-home"></i> Supplier Access<span class="fa fa-chevron-down "></span></a>
                                    <ul class="nav child_menu ">
                                        <!-- <li><a href="../admin/index.php">Add Your Free Product</a></li>
                                        <li><a href="../admin/add_category.php">add category</a></li> -->
                                        <li><a href="../register-user/add-product.php" class="active">Add Your Free Product</a></li>
                                        <li><a href="../register-user/view-product.php">View Your Product</a></li>
                                  

                                        <?php echo ($status == '1') ? '<li><a href="view-buyleads.php"> Buyleads</a></li>' : '<li><a href="all-buyleads.php"> Buyleads</a></li>'; ?>

      <li><a href="../register-user/refund-buylead.php">Refund Buylead</a></li>

                                        <!-- <li><a href="view-buyleads.php">All buyleads</a></li> -->
                                        <li><a href="show-buyleads.php">Access Buyleads</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav justify-content-end  align-items-center">
                           <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                         
                        
                         
                          <li class="nav-item dropdown open " style="padding-left: 15px;">
                             
                                <p   class="user-profile dropdown-toggle btn btn-dark "  aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                     Buyleads
                                </p>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                     <?php echo ($status == '1') ? '<a href="view-buyleads.php" style="font-size:14px" class="dropdown-item">Latest Buyleads</a>' : '<a href="all-buyleads.php" style="font-size:14px" class="dropdown-item">Latest Buyleads</a>'; ?>
                                   <a class="dropdown-item" href="../register-user/refund-buylead.php" style="font-size:14px">Refund Buylead</a>
                                    <a class="dropdown-item" href="show-buyleads.php" style="font-size:14px">Access Buyleads</a>
                                    <a class="dropdown-item" href="buyleads-faq.php" style="font-size:14px">Help</a>
                                   
                                </div>
                            </li>
                         
                          <!--<li class="nav-item dropdown open " style="padding-left: 15px;">-->
                             
                          <!--      <p   class="user-profile dropdown-toggle btn btn-dark "  aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">-->
                          <!--           Profile-->
                          <!--      </p>-->
                          <!--      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">-->
                                      
                          <!--         <a class="dropdown-item" href="../register-user/refund-buylead.php" style="font-size:14px">Edit Profile</a>-->
                          <!--          <a class="dropdown-item" href="profile-view.php" style="font-size:14px">View Profile</a>-->
                                    
                                   
                          <!--      </div>-->
                          <!--  </li>-->
                          <li class="nav-item dropdown open " style="padding-left: 15px;">
                             
                                <p   class="user-profile dropdown-toggle btn btn-dark "  aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                     Advertise
                                </p>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                      
                                   <a class="dropdown-item" href="advertise.php" style="font-size:14px">Advertise with Us </a>
                                   <a class="dropdown-item" href="advertise.php" style="font-size:14px">Brand Advertisement </a>
                                    
                                    
                                   
                                </div>
                            </li>
                         
                          
                     
                        <!--<li class="nav-item "><a href="advertise.php" class="nav-link btn btn-info bg-info">advertise</a></li>-->
                       
                         <li class="nav-item dropdown open   " style="padding-left: 15px;">
                             
                                <p   class="user-profile dropdown-toggle btn btn-danger "  aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                     Account
                                </p>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="../logout.php" style="font-size:14px">Logout</a>
                                   
                                </div>
                            </li>
                        <!-- <li class="nav-item"><a href="" class="nav-link">text</a></li> -->
                    </ul>
                   
                </div>
            </div>
            <!-- /top navigation -->