<?php
include_once "include1/header.php";
?>
<style>
    .s_no {
        height: 50px;
        width: 50px;
        background-color: #ff9800;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%);
        left: 50%;
        border: 2px solid white;
    }
</style>
<!-- page content -->
<div class="container-fluid my-5" role="main">
    <!-- top tiles -->
    <div class="row bg-white py-4 px-2">
        <!--<div class="col-12">-->
        <!--    <form action="" class="my-5  d-flex">-->
        <!--        <input type="search" placeholder="Search Here By Product Name" name="search" class="form-control w-75 rounded float-end">-->
        <!--        <input type="submit" class="btn-sm btn-success">-->
        <!--    </form>-->
        <!--</div>-->
        <div class="col-12">
            <div class=" row">
                <?php
                include "config.php"; // database configuration
                /* Calculate Offset Code */
                // Get the current month and year
                $currentMonth = date('m');
                $currentYear = date('Y');
                if (isset($_SESSION["user_id"])) {
                    "user id " .   $user_id = $_SESSION["user_id"];

                    $se = "SELECT * FROM `user` where `user_id`='$user_id'";
                    $qu = mysqli_query($con, $se);
                    while ($row3 = mysqli_fetch_array($qu)) {
                        $plan = $row3['plan'];
                    }
                }
                // echo "<script>alert('$plan')</script>";
                if ($plan == 'prime') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id'   ORDER BY `user_id` DESC limit 10  ";
                     
                } else if ($plan == 'prime-pro') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 30 ";
                } else if ($plan == 'ultra') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 60 ";
                } else if ($plan == 'ultra-pro') {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 90 ";
                } else {
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' limit 0  ";
                }

                // $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id'  "; // working query
                //     $sql = "
                //    SELECT limit_buylead.limit_id, limit_buylead.user_email   
                //     FROM limit_buylead
                //     INNER JOIN buyleads ON limit_buylead.limit_id = buyleads.$user_id 
                //     ";
                $result = mysqli_query($con, $sql) or die("Query Failed.");


                if (mysqli_num_rows($result) > 0) {


                ?>

                    <?php
                    // 
                    $serial =  1;
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 position-relative col-xs-12 profile_details   " style="margin: 3rem 0rem;">
                            <div class="contact_blog h-100    border border-2 border-danger alert alert- " style="background-color: #172a3e;">
                                <h6 class="  fw-bold " style="color: #ff9800;"><?php echo $row['date']; ?></h6>
                                <h5 class="mb-3 text-white"> Enquiry for : <?php echo $row['queiry_for']; ?></h5>

                                <div class="contact_inner">
                                    <div class=" ">
                                        <h3 class="text- " style="color: #9affea;"><?php echo $row['buyer_name']; ?></h3>

                                      
                                        <div class="border-top my-3 border-1 border-white "></div>
                                        <p class="fw-bold text-white" style="color: darkblue;"><i class="fa fa-envelope-o"></i> <?php echo $row['buyer_email']; ?></p>
                                        <p class="fw-bold text-white" style="color: darkblue;"><i class="fa fa-phone"></i> <?php echo $row['number']; ?></p>

                                    </div>
                                    

                                </div>
                            </div>
                            <div   class="position-absolute top-0   s_no"><p class="fw-bold text-white p-0 m-0"> <?php echo $serial; ?></p></div>

                        </div> -->
                        <div class="col-lg-6 my-5 position-relative">
                            <div class="dash_blog">
                                <div class="dash_blog_inner">
                                    <div class="dash_head">
                                        <h3><span><?php echo $serial; ?>. <?php echo $row['queiry_for']; ?></h3>
                                    </div>
                                    <div class="list_cont">
                                        <p><?php echo $row['date']; ?></p>
                                        <p>Payment <?php echo $row['payment_mode']; ?></p>
                                    </div>
                                    <div class="task_list_main">
                                        <ul class="task_list">
                                            <li class="text-dark fw-bold"> <i class="fa fa-user yellow_color"></i> <?php echo $row['buyer_name']; ?></li>
                                            <li><a href="mailto:<?php echo $row['buyer_email']; ?>"> <strong><?php echo $row['buyer_email']; ?></strong></a></li>
                                            <li><a href="tel:<?php echo $row['number']; ?>"> <strong> <?php echo $row['number']; ?></strong></a></li>
                                            <li><a href="tel:<?php echo $row['number']; ?>"> <strong>Payment Mode : <?php echo $row['payment_mode']; ?></strong></a></li>

                                            <li><a href="tel:<?php echo $row['number']; ?>"> <strong>Quantity : <?php echo $row['quantity']; ?></strong></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- <div   class="position-absolute top-0   s_no"><p class="fw-bold text-white p-0 m-0"> <?php echo $serial; ?></p></div> -->
                        </div>
                    <?php
                        $serial++;
                    } ?>

                <?php
                }  ?>
            </div>
        </div>
    </div>
</div>





<!-- /page content -->
<?php
include_once "include1/footer.php";
?>