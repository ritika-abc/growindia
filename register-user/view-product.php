<?php


include_once "include/header.php";
if (isset($_SESSION["user_email"])) {
    $user_email = $_SESSION["user_email"];
}
// echo "<script>alert('Welcome : $user_email')</script>";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
       <div class="col-12">
       <!-- <form action="" class="my-5  d-flex">
            <input type="search" placeholder="Search Here By Product Name" name="search" class="form-control w-75 rounded float-end">
            <input type="submit" class="btn-sm btn-success">
        </form> -->
       </div>
        <div class="col-12">
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
                $sql = "SELECT * FROM `free-listing-product` where `user_email` ='$user_email' ORDER BY 	pro_id DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($con, $sql) or die("Query Failed.");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table  table-striped table-light table">
                        <thead>
                            <th>S.No.</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Company Name</th>
                            <th>Decsription</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Unit</th>
                            <th>Email</th>
                            <th>Edit</th>
                          
                        </thead>
                        <tbody>
                            <?php
                            $serial = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class='id'><?php echo $serial; ?></td>
                                    <td ><a href="<?php echo $row['img1']; ?>" target="_blanck" ><img src="<?php echo $row['img1']; ?>" height="50px" width="50px" alt=""> <small>Image View</small></a></td>
                                    <td class=" text-capitalize"><?php echo $row['product_name']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['company_name']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['product_description']; ?></td>
                                    <td class=" text-capitalize"><?php echo $row['location']; ?></td>
                                    <td class=" text-capitalize"> <?php echo $row['price']; ?></td>
                                    <td  ><?php echo $row['unit']; ?></td>
                                    <td><?php echo $row['user_email']; ?></td>
                                    <td ><a href="update_product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-success" title="Edit" ><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete-product.php?pro_id=<?php echo $row['pro_id'] ?>" title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> </td>
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
                $sql1 = "SELECT * FROM `free-listing-product`";
                $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                if (mysqli_num_rows($result1) > 0) {

                    $total_records = mysqli_num_rows($result1);

                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination ">';
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page - 1) . '">Prev</a></li>';
                    }
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            $active = "activebtn";
                        } else {
                            $active = " ";
                        }
                        echo '<li class="page-item' . $active . '"><a class="page-link"  href="view-product.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    if ($total_page > $page) {
                        echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page + 1) . '">Next</a></li>';
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