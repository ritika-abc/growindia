

<?php

// image is a logo
ob_start();
include_once "include1/header.php";
$product = isset($_GET['product']) ? $_GET['product'] : '';
// form 1
include "config.php";
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
}

$sql = "SELECT* FROM `user` WHERE `user_id`='$user_id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
    // to select all the data

    $product = $row['product_name'];
}
?>

<?php
// update logic
include "config.php";
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
}

if (isset($_POST['submit'])) {


    $product = $_POST['product_name'];



    $sql1 = "UPDATE `user` SET    `product_name`='$product'          WHERE `user_id`='$user_id'";



    // Execute the SQL query
    $query1 = mysqli_query($con, $sql1);
    if ($query1) {
        header("Location: profile-view.php");
    } else {
        echo "Failed to update profile.";
    }
}
?>



<?php
// addProduct.php

// Database connection (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "growindia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected product from the Ajax request


// Insert product into the database (optional, if you want to store the selection)
if ($product != '') {
    $sql = "INSERT INTO user (product_name) VALUES ('$product')";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
