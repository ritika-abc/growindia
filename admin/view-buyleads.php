<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>



<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>View Category</h4>
                            <table class="table table-bordered table-white ">
                                <thead>
                                    <tr>
                                        <td>S no</td>
                                        <td>Buyer Name</td>
                                        <td>Enquiry For</td>
                                        <td>Number</td>
                                        <td>Date</td>
                                        <td>Email</td>
                                        <td>Payment</td>
                                        <td>Quantity</td>
                                        
                                        <td>Country Name</td>
                                        <td>Edit</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "config.php";
                                    $sel = "SELECT * FROM `buyleads` ORDER BY buyleads_id DESC";
                                    $qu = mysqli_query($con, $sel);
                                    $sno = 1;
                                    while ($row = mysqli_fetch_array($qu)) {
                                    ?>
                                        <tr>
                                            <td><?php echo  $sno ?></td>
                                            <td class="text-capitalize"><?php echo  $row['buyer_name'] ?></td>
                                            <td class="text-capitalize"><?php echo  $row['queiry_for'] ?></td>
                                            <td><?php echo  $row['number'] ?></td>
                                            <td><?php echo  $row['accessed_at'] ?></td>
                                            <td><?php echo  $row['buyer_email'] ?></td>
                                            <td><?php echo  $row['payment_mode'] ?></td>
                                            <td><?php echo  $row['quantity'] ?></td>
                                            
                                       
                                            <td class="text-capitalize" title="<?php echo  $row['buyer_location'] ?>"><?php echo  $row['country_name'] ?></td>
                                            <td class="text-capitalize"><a href="update-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a><a href="delete-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-sm  btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    <?php
                                        $sno++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>