<?php


include_once "include/header.php";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <!--<div class="col-12">-->
        <!--    <form action="" class="my-5  d-flex">-->
        <!--        <input type="search" placeholder="Search Here By Product Name" name="search" class="form-control w-75 rounded float-end">-->
        <!--        <input type="submit" class="btn-sm btn-success">-->
        <!--    </form>-->
        <!--</div>-->
        <div class="col-12">
            <div class="col-md-12">
                <?php
                include "config.php"; // database configuration
                /* Calculate Offset Code */
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
                    $sql = "SELECT * FROM  `limit_buylead` where `user_id`='$user_id' ORDER BY `user_id` DESC limit 10  ";
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
                    <table class="table  table-striped table-light table">
                        <thead class=" text-capitalize">
                        <th>S.No.</th>
                            <th>buyer name</th>
                            <th>Buyer Email</th>
                            <th>enquiry for</th>
                            <th>Number</th>
                            <th>Payment</th>
                            <th>Quantity</th>
                            <th>enquiry Date</th>

                        </thead>
                        <tbody>
                            <?php

                            $serial =  1;
                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td class='id'><?php echo $serial; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['buyer_name']; ?></td>
                                    <td><?php echo $row['buyer_email']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['queiry_for']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['number']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['payment_mode']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['quantity']; ?></td>
                                    <td ><?php echo $row['date']; ?></td>
                            

                                    <!-- <td><a href="accesses-buyleads.php?user_id=?php echo  $row['user_id']?>" class="btn btn-danger">click here</a></td> -->

                                </tr>
                            <?php
                                $serial++;
                            } ?>
                        </tbody>
                    </table>
                <?php
                }  ?>
            </div>
        </div>
    </div>
</div>
<br />
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>