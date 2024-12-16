<?php
//  isert and check the details

include "config.php";
include_once "include/header.php";



?>
<?php


if (isset($_POST['submit'])) {
    $buyer_name = $_POST['buyer_name'];
    $queiry_for = $_POST['queiry_for'];
    $number = $_POST['number'];
    $accessed_at = $_POST['accessed_at'];
    $buyer_email = $_POST['buyer_email'];
    $buyer_location = $_POST['buyer_location'];
    $product_name = $_POST['product_name'];
    $country_name = $_POST['country_name'];
    $state_name = $_POST['state_name'];
    $quantity = $_POST['quantity'];
    $payment_mode = $_POST['payment_mode'];
    
    
        $ins = "INSERT INTO `buyleads`(`buyer_name`,`queiry_for`,`number`,`accessed_at`,`buyer_email`,`buyer_location`,`product_name`,`country_name`,`state_name`,`quantity`,`payment_mode`) VALUES ('$buyer_name','$queiry_for','$number','$accessed_at','$buyer_email','$buyer_location','$product_name','$country_name','$state_name','$quantity','$payment_mode') ";
        $qu = mysqli_query($con, $ins);
       
   
  

}

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-7">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="my-3">
                        <label for="">Buyer :</label>
                        <input type="text" name="buyer_name" class="form-control  " placeholder="Buyer Name">
                    </div>
                    <div class="my-3">
                        <label for="">Enquiry For :</label>
                        <textarea name="queiry_for" class="w-100" id=""></textarea>
                    </div>
                    <div class="my-3">
                        <label for="">Number :</label>
                        <input type="number" name="number" class="form-control" placeholder="Add Number">
                    </div>
                    <div class="my-3">
                        <label for="">Date</label>
                        <input type="date" name="accessed_at" class="form-control" placeholder="Date">
                    </div>
                    <div class="my-3">
                        <label for="">Buyer Email</label>
                        <input type="email" name="buyer_email" class="form-control" placeholder="Buyer Email Id">
                    </div>
                    <div class="my-3">
                        <label for="">Buyer location</label>
                        <input type="text" name="buyer_location" class="form-control" placeholder="Location">
                    </div>
                    <div class="my-3">
                        <label for="">product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                    </div>
                    <div class="my-3">
                        <label for="">Quantity</label>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="my-3">
                        <label for="">Mode Of Payment</label>
                     <select class="form-control" name="payment_mode">
                         <option >-------Select Mode Of Payment-----</option>
                         <option value="L.C">L.C</option>
                         <option value="T.T">T.T</option>
                         <option value="F.O.B">F.O.B</option>
                         <option value="C.I.F">C.I.F</option>
                     </select>
                    </div>
                     <div class=" my-3">
                            <label for="state_name">Add States</label>
                            <select name="state_name" class="form-control" id="state-dropdown">
                                <option value="">------ Select State -----</option>
                                <?php
                                $sel = "SELECT * FROM `states`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['state_name']}' class='text-capitalize'>{$row['state_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                         <div class="  my-3">
                            <label for="country_name">Country Name</label>
                            <select name="country_name" class="form-control" id="country-dropdown">
                                <option value="">------ Select Country -----</option>
                                <?php
                                $sel = "SELECT * FROM `countries`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['country_name']}' class='text-capitalize'>{$row['country_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    <button class="btn btn-success mt-2 px-3" name="submit" type="submit">Submit</button>
                    <button class="btn btn-success mt-2 px-3" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>

</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>