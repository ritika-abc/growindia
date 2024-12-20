<?php
//  isert and check the details

include "config.php";





// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $company_name = htmlspecialchars(trim($_POST["company_name"]));
    $reason     = htmlspecialchars(trim($_POST["reason"]));

    // Prepare an SQL statement
    $stmt = $con->prepare("INSERT INTO `refund-buylead`(`name`, `email`,`company_name`,`reason`) VALUES (?,?,?,?)");

    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters
    $stmt->bind_param("ssss", $name, $email, $company_name, $reason);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>


<?php


include_once "include1/header.php";

?>


<!-- new data -->
<div class="right_col" role="main">
    <div class="container-fluid my-5">
        <div class="row  justify-content-center">
            <div class="col-7">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="" enctype="multipart/form-data" method="post">
                    <div class="my-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control ">
                    </div>
                    <div class="my-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control ">
                    </div>
                    <div class="my-3">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" class="form-control ">
                    </div>
                    <div class="my-3">
                        <label for="">Buylead Refund Reason</label>
                       <select name="reason" class="text-capitalize form-control " id="">
                        <option value="mail not available ">mail not available </option>
                        <option value="contact number not available ">contact number not available </option>
                        <option value="irrelevant buylead">irrelevant buylead</option>
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
include_once "include1/footer.php";
?>