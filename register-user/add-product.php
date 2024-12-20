<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php


include_once "include1/header.php";
include "config.php";

?>
<!-- insert query -->

<?php
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];

    $cat_id = $_POST['cat_id'];
    $location = $_POST['location'];

    $product_description = $_POST['product_description'];
    $company_name = $_POST['company_name'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $about_company = $_POST['about_company'];
    $user_email = $_POST['user_email'];
    $countries_name = $_POST['countries_name'];
    $state_name = $_POST['state_name'];
    $moq = $_POST['moq'];
    $packaging_type = $_POST['packaging_type'];
    $product_life = $_POST['product_life'];
    $feature = $_POST['feature'];
    $img1 = $_FILES["img1"]["name"];
    $fld1 = "logo/" . $img1;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["img1"]['tmp_name'], $fld1);
    $insert = "INSERT INTO `free-listing-product`(`product_name`,`product_description`,`cat_id`,`company_name`,`img1`,`unit`,`price`,`user_email`,`state_name`,`countries_name`,`location`,`about_company`,`moq`,`packaging_type`,`product_life`,`feature`) VALUES ('$product_name','$product_description','$cat_id','$company_name','$fld1','$unit','$price','$user_email','$state_name','$countries_name','$location','$about_company','$moq','$packaging_type','$product_life','$feature')";

    $query = mysqli_query($con, $insert);
}
?>

<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Dashboard </h2>

                </div>

            </div>
        </div>
        <?php
        include "nav.php"; ?>

        <div class="container-fluid my-3">
            <div class="row   graph">
                <div class="col-lg-12 ">
                    <div class="dash_blog">
                        <div class="dash_blog_inner">
                            <!-- <div class="dash_head">
                                <h3><span><i class="fa fa-user yellow_color"></i> Edit Your Profile</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                            </div> -->

                            <div class="task_list_main">
                                <form action="" method="post" enctype="multipart/form-data" class="text-capitalize">
                                    <div class="container-fluid task_list_view2">
                                        <div class="list_cont bg-light">
                                            <h5>Add Your Products</h5>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Product Name</label>
                                                    <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">company name</label>
                                                    <input type="text" name="company_name" class="form-control" placeholder="company name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Product image</label>
                                                    <input type="file" class="form-control" name="img1" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Price</label>
                                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Unit</label>
                                                    <input type="text" class="form-control" name="unit" placeholder="Unit">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold "> location</label>
                                                    <input type="text" class="form-control" name="location" placeholder="location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">add Category</label>
                                                    <select name="cat_id" class="form-control" id="category-dropdown" required>
                                                        <option value="">------ Select Category -----</option>
                                                        <?php
                                                        $sel = "SELECT * FROM `category`";
                                                        $query = mysqli_query($con, $sel);
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            // $cat_id = $row['cat_id'];
                                                        ?>
                                                            <option value="<?php echo $row['cat_id'] ?>" class="text-capitalize"> <?php echo $row['cat_name']  ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold "> User Email</label>
                                                    <input type="text" class="form-control" name="user_email" placeholder="User Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Select Country</label>
                                                    <select name="countries_name" class="form-control" id="category-dropdown">
                                                        <option value="">------ Select Country -----</option>
                                                        <?php
                                                        $sel = "SELECT * FROM `countries`";
                                                        $query = mysqli_query($con, $sel);
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            // $cat_id = $row['cat_id'];
                                                        ?>
                                                            <option value="<?php echo $row['country_name'] ?>" class="text-capitalize"> <?php echo $row['country_name']  ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">State Name</label>
                                                    <select name="state_name" class="form-control" id="category-dropdown">
                                                        <option value="">------ Select State Name -----</option>
                                                        <?php
                                                        $sel = "SELECT * FROM `states`";
                                                        $query = mysqli_query($con, $sel);
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            // $cat_id = $row['cat_id'];
                                                        ?>
                                                            <option value="<?php echo $row['state_name'] ?>" class="text-capitalize"> <?php echo $row['state_name']  ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- details 2  profile-->
                                    <div class="container-fluid mt-4 border bg-light task_list_view2">
                                        <div class="list_cont bg- ">
                                            <h5>Product Details</h5>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Product Description</label>
                                                    <textarea name="product_description" rows="5" class="form-control" id=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Company Description</label>
                                                    <textarea name="about_company" rows="5" class="form-control" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">MOQ</label>
                                                    <input class="form-control" type="text" name="moq" id="formFile" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Packaging Type</label>
                                                    <input class="form-control" type="text" name="packaging_type" id="formFile" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Product Life</label>
                                                    <input class="form-control" type="text" name="product_life" id="formFile" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Feature</label>
                                                    <input class="form-control" type="text" name="feature" id="formFile" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="read_more">
                                        <input type="submit" name="submit" class="btn btn-danger  w-25">
                                        <input type="reset" name="submit" class="btn btn-warning   ">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#category-dropdown').on('change', function() {
            var cat_id = this.value;

            // alert(cat_id);

            $.ajax({
                url: "subcategory-by-category.php",
                type: "POST",
                data: {
                    cat_id: cat_id
                },
                cache: false,
                success: function(result) {
                    $("#sub-category-dropdown").html(result);
                    // alert(result);
                }
            });

        });
        // $('#sub-category-dropdown').on('change', function() {
        //     var sub_id = this.value;

        //     alert(sub_id);

        //     $.ajax({
        //         url: "subcategory-by-category.php",
        //         type: "POST",
        //         data: {
        //             sub_id: sub_id
        //         },
        //         cache: false,
        //         success: function(result) {
        //             $("#micro-category-dropdown").html(result);
        //             alert(result);
        //         }
        //     });

        // });
    });


    // $(document).ready(function() {
    //     $('#sub-category-dropdown').on('change', function() {
    //         var sub_id = this.value;

    //         // alert(sub_id);

    //         $.ajax({
    //             url: "subcategory-by-category.php",
    //             type: "POST",
    //             data: {
    //                 sub_id: sub_id
    //             },
    //             cache: false,
    //             success: function(result) {
    //                 $("#micro-category-dropdown").html(result);
    //                 // alert(result);
    //             }
    //         });

    //     });
    // });
</script>
<?php
include "include1/footer.php";
?>