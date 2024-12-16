<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
        <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
 <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
                 a{
                    text-decoration:none !important;
                }
                

        </style>
</head>

<body>

      <?php include "navbar.php"; ?>
    <!--<div class="container-fluid my-2">-->
    <!--    <div class="row">-->
    <!--        <div class="col-12">-->
    <!--            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">-->
    <!--                <ol class="breadcrumb">-->
    <!--                    <li class="breadcrumb-item"><a href="/">Home</a></li>-->
    <!--                    <li class="breadcrumb-item active" aria-current="page">Library</li>-->
    <!--                </ol>-->
    <!--            </nav>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="container-fluid">
        <div class="row justify-content-around">
            <!-- view products -->
            <div class="col-12 col-md-2 p-3  shadow-sm d-none d-sm-none d-lg-block border-end  rounded">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button p-2 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Category
                            </button>
                        </h2>
                       <div id="collapseOne" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
                            <div class="accordion-body overflow-scroll" style="height: 400px;">
                                <ul class="navbar-nav">
                                    <?php
                                    include "config.php";
                                    // $inner_cat_id = $_GET['inner_cat_id'];

                                    $select = "SELECT * from `micro`";
                                    $qu = mysqli_query($con, $select);
                                    $s_no = 1;
                                    while ($row = mysqli_fetch_array($qu)) {


                                    ?>
                                        <li class="nav-item"><a href="micro-category.php?micro_id=<?php echo $row['micro_id'] ?>" class="nav-link pt-0"><?php echo $row['micro_name'] ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!--<div class="accordion mt-3" id="box2">-->
                <!--    <div class="accordion-item">-->
                <!--        <h2 class="accordion-header">-->
                <!--            <button class="accordion-button p-2" type="button" data-bs-toggle="collapse" data-bs-target="#box" aria-expanded="true" aria-controls="collapseOne">-->
                <!--                business type-->
                <!--            </button>-->
                <!--        </h2>-->
                <!--        <div id="box" class="accordion-collapse collapse  show" data-bs-parent="#box2">-->
                <!--            <div class="accordion-body">-->
                <!--                <ul class="navbar-nav">-->
                <!--                    <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>-->
                <!--                    <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>-->
                <!--                    <li class="nav-item"><a href="" class="nav-link pt-0">text</a></li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="col-12 col-md-9">
                <div class="  p-3  rounded">

                    <ul class="classfied-wrap list-unstyled mt-5">
                    <?php
    include "config.php"; // Ensure you have your database connection established

    // Check if a search query was submitted
    if (isset($_GET['query'])) {
        $query = $_GET['query'];

        echo "Product Name <i>" . $query . "</i>";

        // Prepare SQL query to fetch products matching the search query
        $select = "SELECT * FROM `product` WHERE `product_name` LIKE '%$query%' OR `state` LIKE '%$query%'";
        $qu = mysqli_query($con, $select);

        // Check if any results were found
        if (mysqli_num_rows($qu) > 0) {
    ?>
            <div class=" row">
                <ul class="">
                    <?php
                    $s_no = 1;
                    while ($row = mysqli_fetch_array($qu)) {
                        $title = $row['title'];
                        $plan = $row['plan'];
                    ?>
                        <div class="  my-5">
                            <div class="col-12 col-lg-12">
                                
                                <div class="row   border-info alert ">
                                   
                                    <div class="col-12 col-lg-3 my-2">
                                         
                                        <img src="./admin/<?php echo $row['product_image1'] ?>" class="rounded" height="200px" width="100%" style="object-fit: cover;" alt="">
                                       <p class="btn btn-sm mt-2" title="<?php echo $row['company_address'] . " " . $row['country_name']  ?>"><i class="fa-solid fa-location-dot fa-fade mx-2" style="color: #23b110;"></i> <?php echo $row['country_name'] . " . " .$row['state_name']  ?></p>
                                                       <div class="d-block">
                                                             <?php
                                            if ($plan == "prime") {
                                                echo "<img src='image/plan1.jpg' height='70px' width='190px' >";
                                            }else if($plan == "prime-pro"){
                                                 echo "<img src='image/plan2.jpg' height='70px' width='190px' >";
                                            }else if($plan == "ultra"){
                                                 echo "<img src='image/plan3.jpg' height='70px' width='190px' >";
                                            }else if($plan == "ultra-pro"){
                                                 echo "<img src='image/plan4.jpg' height='70px' width='190px' >";
                                            }else{
                                                echo "";
                                            }
                                            ?>   
                                            
                                                       </div>                     

                                    </div>
                                    <div class="col-12 col-lg-5 my-2" >
                                        <div class="product_content" style="height: 300px;overflow-Y:scroll">
                                            <ul class="nav mb-2">
                                                <li class="nav-item me-auto"><?php echo $row['title'] ?></li>
                                                <li class="nav-item  fw-bold ">⏳<?php echo $row['date'] ?></li>
                                            </ul>
                                            <h4 class="fs-5 fw-bold" style="color:#0d4e9e"><?php echo $row['product_name'] ?></h4>
                                            <button class="btn btn-warning px-3 " style="width:200px "><b>  <?php echo $row['price'] . " " . $row['unit'] ?></b></button>
                                           <div class="box_container">
                                                    <a href="" class="text-danger">
                                                        <p class="p-0 m-0 mt-2 ">✔️ Product Specifications</p>
                                                    </a>
                                                    <div>
                                                         <?php echo $row['product_description'] ?>
                                                    </div>
                                                    <!--<p>?php echo $row['product_description'] ?></p>-->
                                                </div>
                                            <hr>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-4 my-2  ">
                                        <table class="table table-bordered w-100   ">
                                            <tr>
                                                <th> <small>Company Name</small> </th>
                                                <td> <b style="color:green" class="text-capitalize"><?php echo $row['company_name'] ?></b> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>Client Name</small> </th>
                                                    <td> <small><?php echo $row['client_name'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>IEC Code</small> </th>
                                                <td> <small><?php echo $row['iec'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>GST Number</small> </th>
                                                <td> <small><?php echo $row['gst'] ?></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>Establishment</small> </th>
                                               <td> <small><small><?php echo $row['company_experience'] ?></small></small> </td>
                                            </tr>
                                            <tr>
                                                <th> <small>Website Link</small> </th>
                                                <td> <a href="<?php echo $row['website'] ?>"><small><?php echo $row['website'] ?></small></a> </td>
                                            </tr>
                                        </table>
                                        <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-danger">Product Details</a>
                                        <h4 class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $s_no ?>">Enquiry Now</h4>
                                        <!-- modal -->
                                        <div class="modal fade" id="exampleModal<?php echo  $s_no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <a href="<?php echo $row['website'] ?>">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['website'] ?></h1>
                                                        </a>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="" method="post"> <!-- Move form tag here -->
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <img src="./admin/<?php echo $row['product_image1'] ?>" class="rounded" height="200px" width="100%" style="object-fit: cover;" alt="">
                                                                    </div>
                                                                    <div class="col-lg-8">

                                                                        <input type="text" placeholder="Name" name="buyer_name" class="form-control my-2">
                                                                        <input type="email" name="buyer_email" placeholder="Email" class="form-control my-2">
                                                                        <input type="number" name="buyer_phone" placeholder="Number" class="form-control my-2">
                                                                        <input type="text" name="enquiry_for" placeholder="Enquiry Product Name" value="<?php echo $title ?>" class="form-control my-2">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="submit" class="btn btn-primary">Send Enquiry</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $s_no++;
                    } ?>
                </ul>
            </div>
        <?php } else { ?>
            <p>No products found matching your search.</p>
        <?php } ?>
    <?php } ?>

    </div>
    </div>
    <!-- dont remove   this pera -->


    <?php
    include "config.php";
    if (isset($_POST['submit'])) {
        $buyer_name = $_POST['buyer_name'];
        $buyer_email = $_POST['buyer_email'];
        $buyer_phone = $_POST['buyer_phone'];
        $enquiry_for = $_POST['enquiry_for'];
        $ins = "INSERT INTO `buyer`(`buyer_name`,`buyer_email`,`buyer_phone`,`enquiry_for`) values ('$buyer_name','$buyer_email','$buyer_phone','$title')";
        $q = mysqli_query($con, $ins);
        if ($q) {
            echo "<script>alert('Your Response Submitted')</script>";
        }
    }
    ?>


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 7
                    }
                }
            })
        })
    </script>
<?php include "footer.php"; ?>