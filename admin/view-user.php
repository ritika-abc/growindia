<?php


include_once "include/header.php";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="my-5  d-flex">
                <input type="search" placeholder="Search by Email & Company Name" name="search_query" class="form-control w-75 rounded float-end">
                <input type="submit" name="search" class="btn-sm btn-success">
            </form>
        </div>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the search query
            $search_query = $_POST["search_query"];

            // Connect to your database (replace these variables with your actual database credentials)
            include "config.php";

            // Create connection





        ?>

            <div class="col-12 my-4">
                <table class="table  table-striped table-success table ">
                  
                    <thead class=" ">
                                <th>Edit.</th>
                                <th>User Name</th>
                                <th> Logo</th>
                                <th> Email</th>
                                <th> Phone</th>
                                <th> Company name</th>
                                <th>Plan</th>
                                <th>Password</th>
                               
                              
                                <th>State</th>
                                <th>Gst</th>
                                <th> Register Date</th>
                                <th>Expire Plan</th>                               
                                <th>Start  Plan</th>                               
                                
                            </thead>
                    <tbody class=" ">

                        <?php

                        // SQL query to search for data in your database (replace 'table_name' with your actual table name and 'column_name' with the column you want to search)
                        $sql = "SELECT * FROM user WHERE company_name LIKE '%" . $search_query . "%'" . " or user_email LIKE '%" . $search_query . "%'";
                        $result = $con->query($sql);

                        // Display the results
                        if ($result->num_rows > 0) {
                            echo "<h3>Search Results:</h3>";
                            echo "<ul>";
                            while ($row = $result->fetch_assoc()) {
                                // echo "<li>" . $row["product_name"] . "</li>"; // Display the result here
                        ?>
                                 <tr>
                                        <td> <a href="user-update.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-success btn-sm w-100 mt-3">Edit</a> <a href="delete-user.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-danger btn-sm w-100">Delete</a></td>
                                        <td><?php echo $row['user_name']; ?> </td>
                                        <td class='id'><img src="<?php echo $row['image']; ?>" height="50px" width="50px" alt=""> </td>
                                        <!-- <td>?php echo $row['user_name']; ?></td> -->
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['user_phone']; ?></td>
                                        <td><?php echo $row['company_name']; ?></td>
                                        <td><?php echo $row['plan']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        
                                        <td><?php echo $row['state']; ?></td>
                                        <td><?php echo $row['gst']; ?></td>
                                        <td><?php echo $row['date']; ?></td>

                                        <td><?php echo $row['expire']; ?></td>
                                        <td><?php echo $row['start_date']; ?></td>
                                        


                                    </tr>
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
                    </tbody>
                </table>
            </div>



            <div class="col-12">
                <h3>User  Table</h3>
                 
                <div class="col-md-12">
                    <?php
                    include "config.php"; // database configuration
                    /* Calculate Offset Code */
                    $limit = 15;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limit;
                    /* select query of user table with offset and limit */
                    $sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT {$offset},{$limit}";
                    $result = mysqli_query($con, $sql) or die("Query Failed.");
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <table class="table  table-striped table-light table overflow-scroll">
                            <thead class="">
                                <th>Edit.</th>
                                <th>User Name</th>
                                <th> Logo</th>
                                <th> Email</th>
                                <th> Phone</th>
                                <th> Company name</th>
                                <th>Plan</th>
                                <th>Password</th>
                               
                              
                                <th>State</th>
                                <th>Gst</th>
                                <th> Register Date</th>
                                <th>Expire Plan</th>                               
                                <th>Start  Plan</th>   
                            </thead>
                            <tbody>
                                <?php
                                $serial = $offset + 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $serial; ?></td>
                                        <td><?php echo $row['user_name']; ?>  <a href="user-update.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-success btn-sm w-100 mt-3">Edit</a> <a href="delete-user.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-danger btn-sm w-100">Delete</a></td>
                                        <td class='id'><img src="<?php echo $row['image']; ?>" height="50px" width="50px" alt=""> </td>
                                        <!-- <td>?php echo $row['user_name']; ?></td> -->
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['user_phone']; ?></td>
                                        <td><?php echo $row['company_name']; ?></td>
                                        <td><?php echo $row['plan']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        
                                        <td><?php echo $row['state']; ?></td>
                                        <td><?php echo $row['gst']; ?></td>
                                        <td><?php echo $row['date']; ?></td>

                                        <td><?php echo $row['expire']; ?></td>
                                        <td><?php echo $row['start_date']; ?></td>
                                        


                                    </tr>
                                <?php
                                    $serial++;
                                } ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                        echo "<h3>No Results Found.</h3>";
                    }
                    // show pagination
                    $sql1 = "SELECT * FROM `user`";
                    $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                    if (mysqli_num_rows($result1) > 0) {

                        $total_records = mysqli_num_rows($result1);

                        $total_page = ceil($total_records / $limit);

                        echo '<ul class="pagination ">';
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="view-user.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "activebtn";
                            } else {
                                $active = " ";
                            }
                            echo '<li class="page-item' . $active . '"><a class="page-link"  href="view-user.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li class="page-item"><a class="page-link" href="view-user.php?page=' . ($page + 1) . '">Next</a></li>';
                        }

                        echo '</ul>';
                    }
                    ?>
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