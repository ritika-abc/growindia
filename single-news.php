<?php
if (isset($_POST['search'])) {
    // Retrieve the search query
    $search_query = $_POST["search_query"];

    // Connect to your database (replace these variables with your actual database credentials)
    include "config.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <style>
        .about-us-content p {
            color: #333;
            text-align: justify;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>

    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Blog Grid</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                <li class="breadcrumb-item text-white active" aria-current="page">Blog </li>
            </ol>
        </nav>
    </div>
</div> -->
    <!-- Page Header End -->

    <div class="container  py-4">
        <div class="row">
            <?php
            include "config.php";
            $id = $_GET['id'];
            $select = "SELECT * FROM `news`   where `id`='$id'";
            $q = mysqli_query($con, $select);
            while ($row = mysqli_fetch_array($q)) {


            ?>
                <div class="col-12 my-4">
                    <h1 class="text-center"><?php echo $row['heading'] ?></h1>
                    <ul class="nav  ">
                        <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item ms-auto"><a href="" class="nav-link">Last Updated: <?php echo $row['date'] ?> </a></li>
                    </ul>
                    <hr>
                </div>
                <div class="col-lg-7">

                    <p> <?php
                        echo $row['short_para'];
                        ?></p>
                    <div class="">
                        <?php echo $row['long_para'] ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="./admin/<?php echo  $row['image']  ?>" class="border border-dark rounded" height="auto" width="60%" alt="">
                </div>
            <?php } ?>
        </div>

    </div>


    <?php
    include "footer.php";

    ?>