<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the search query
    $query = $_GET["query"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/megadrop.css">
    <style>
        /* Optional: Some basic styling */
        #buyleads {
            display: none;
            /* Hide buyleads by default */
            margin-top: 10px;
            padding: 10px;

        }

        .none {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
     

 <?php include "navbar.php"?>

    <div class="container mt-4 bg-light py-5 rounded">
        
        <div class="row">
            <div class="col-4 d-none d-sm-none d-mdnone d-lg-block">
                <div class="buyleads mb-3" style="height: 400px; overflow-Y:scroll">
                    <div class="buy_leads shadow-lg border  rounded p -2">
                        <ul class="text-capitalize  list-group ">
                            
                            <?php
                            // Database connection parameters
                            include "./config.php";



                            // SQL query
                            $sql = 'SELECT queiry_for,buyleads_id , COUNT(*) as total_sales FROM buyleads  GROUP BY queiry_for ORDER BY buyleads_id DESC';

                            // Execute the query
                            $result = $con->query($sql);

                            // Check for errors
                            if (!$result) {
                                die('Query failed: ' . $con->error);
                            }

                            // Fetch and output the results
                            while ($row = $result->fetch_assoc()) {
                                echo '<li class="list-group-item "><a class="text-dark    " href="search-buyleads.php?searchType=buyleads&query=' . $row['queiry_for'] . '"> <b style="color:rgb(46 80 138) !important">' . $row['queiry_for'] . '</b><span class=" "  >    (Buyleads: ' . $row['total_sales'] . ') </span></a></li>';
                            }

                            // Free the result set
                            $result->free();

                            // Close the connection
                            $con->close();
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;;">State</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&state_name=<?php echo $row['state_name'] ?>" class="d-block"><?php echo $row['state_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="serch_buyleads bg-white p-3 rounded">
                    <form id="searchForm">

                        <div class="buyleads_box  border ">
                            <label for="options" class="sticky-top fw-bold fs-5  w-100 p-2 text-white" style="background-color: rgb(46 80 138) !important;;">Country</label>
                            <div class="mt-2 p-3" style="height: 300px;overflow:scroll">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `countries`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {                                ?>
                                    <a href="search-buyleads.php?query=<?php echo  $query ?>&country_name=<?php echo $row['country_name'] ?>" class="d-block"><?php echo $row['country_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-8">
  <form action="search-buyleads.php" method="GET" class="d-flex mb-3 d-lg-none">
                    <div class="input-group mb-3">
                        <input name="query" type="text" class="form-control" placeholder="Search Buyleads">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
                <div class="old">
                    <div class="right_col" role="main">
                        <!-- top tiles -->
                        <div class="row">

                            <?php
                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                // Retrieve the search query
                                $query = $_GET["query"];
                                $state_name = $_GET["state_name"];
                                // $country_name = $_GET["country_name"];

                                // Connect to your database (replace these variables with your actual database credentials)
                                include "config.php";



                                // Cre



                            ?>
                                <div class="col-12 my-4">
                                    <?php
                                    // echo  $query . " " .$state_name;
                                    // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)


                                    // $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and state LIKE '%" . $state_name . "%' ";
                                    // $result = $con->query($sql1);



                                    if ($_GET["country_name"] and $_GET["query"]) {
                                        echo  $country_name = $_GET["country_name"];
                                        echo $query = $_GET["query"];
                                        $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and country_name LIKE '%" . $country_name . "%' ";
                                    $result = $con->query($sql1);
                                    }else{
                                        $sql1 = "SELECT * FROM `buyleads` WHERE buyer_name LIKE '%" . $query . "%'" . " or queiry_for LIKE '%" . $query . "%' and state_name LIKE '%" . $state_name . "%' ";
                                        $result = $con->query($sql1);
                                    }






                                    // Display the results
                                    if ($result->num_rows > 0) {
                                        echo "<h5>Search Results From <i>$query $state_name</i> :</h5>";
                                        echo "<ul class='p-0 m-0'>";
                                        while ($row = $result->fetch_assoc()) {
                                            // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                                    ?>
                                            <div class="col-12 mb-4">
                                                <div class="row">
                                                    <div class="col-12 my-3 ">
                                                        <div class="row">
                                                            <div class="col-12 ">
                                                                <div class="buyleads_cards p-3 shadow-lg bg-white rounded    text-capitalize" style=" ">
                                                                    <!--<h6>Product Name : ?php echo $product_name ?></h6>-->
                                                                    <h5 class=" " style="color :#2f3394;font-weight: bold;"><?php echo $row['queiry_for'] ?> <img src="trusted.png" alt="" height="auto" width="10%"> </h5>
                                                                    <ul class="nav justify-content-between">
                                                                        <li class="nav-item" title="<?php echo $row['state_name'] ?>"> <i class="fa-solid fa-location-dot " style="color: #3fb635;margin-right:10px"></i> <?php echo $row['state_name']  . " . ". $row['country_name']?> </li>
                                                                        <li class="nav-item"><?php echo $row['accessed_at'] ?></li>
                                                                    </ul>
                                                                     <div class="row  mt-3 table-borderless">
                                    <div class="col-lg-6  ">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Name : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['buyer_name'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Quantity : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['quantity'] ?> </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mode Of Payment:    </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> <?php echo $row['payment_mode'] ?> </p>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Mobile Number : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark"> +91-99*********00 </p>
                                            </div>
                                        </div>
                                        <div class="row   text-capitalize">
                                            <div class="col-6">
                                                <p class="m-0 p-0" style="color: #055faf;"><b>Buyer Email : </b></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-0 p-0 text-dark">***@gmail.com </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                    <div class="d-block mt-5 mb-3" style="border-top: 2px dotted gray;"></div>

                                                                    <a href="supplier-register.php" class="btn btn-secondary" style="background:#e77702">Buyer Details</a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                <?php
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "No results found";
                                    }

                                    // Close the connection
                                    $con->close();
                                }
                                ?>

                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your scripts -->
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var query = $('#searchInput').val(); // Get the search input value
                var selectedOption = $('#options').val(); // Get the selected option value

                // Perform AJAX request
                $.ajax({
                    url: 'fetch_buyleads.php',
                    type: 'POST',
                    data: {
                        query: query,
                        selectedOption: selectedOption
                    },
                    success: function(response) {
                        // Update the buyleads div with the response
                        $('#buyleads').html(response);
                        $('#buyleads').slideDown(); // Show the buyleads div
                    }
                });
            });

            // Add event listener for 'change' event on select element
            $('#options').change(function() {
                var selectedOption = $(this).val();

                if (selectedOption === 'none') {
                    $('#buyleads').slideUp(); // Hide buyleads if 'Select an option' is selected
                } else {
                    // Perform AJAX request to fetch buyleads based on selected option
                    $.ajax({
                        url: 'fetch_buyleads.php',
                        type: 'POST',
                        data: {
                            selectedOption: selectedOption
                        },
                        success: function(response) {
                            // Update the buyleads div with the response
                            $('#buyleads').html(response);
                            $('#buyleads').slideDown(); // Show the buyleads div
                            $('.old').addClass('none');

                        }
                    });
                }
            });
        });
    </script>

<?php include "footer.php"; ?>