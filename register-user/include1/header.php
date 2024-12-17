<?php
session_start();

if (!isset($_SESSION["user_name"])) {
    header("Location:../supplier-register.php");
}
?>
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


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Growindiaexport</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="./pluto-1.0.0/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./pluto-1.0.0/css/custom.css" />

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive" src="https://growindiaexport.com/logo/logo.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info px-2">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side"> 
                            
                            <div class="user_info text-capitalize">
                                <h6><?php echo $_SESSION["user_name"] ?> </h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Admin Panel</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="../register-user/index.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        </li>
                        <li><a href="../register-user/profile-view.php"><i class="fa fa-user yellow_color"></i> <span>Profile</span></a></li>
                        <li>
                            <a href="../register-user/add-product.php"><i class="fa fa-diamond purple_color"></i> <span>Manage Products</span></a>
                        </li>
                        <li><a href="../register-user/view-product.php"><i class="fa fa-table purple_color2"></i> <span>Products Tables</span></a></li>
                        <?php echo ($status == '1') ? '<li><a href="view-buyleads.php"> Buyleads</a></li>' : '<li><a href="all-buyleads.php"> Buyleads</a></li>'; ?>
                        <li> <a href="contact.html"> <i class="fa fa-paper-plane red_color"></i> <span>Refund Buylead</span></a> </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Access Buyleads</span></a></li>
                        <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img- " height="60px" width="200px" src="https://growindiaexport.com/logo/logo.png" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                    </ul>
                                    <ul class="user_profile_dd mx-2">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"> <span class="name_user"><?php echo $_SESSION["user_name"] ?> </span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->