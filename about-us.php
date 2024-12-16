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
    <title>growindiaexport</title>

    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/megadrop.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/css/style.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="https://growindiaexport.com/assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    
    
    <!-- meta-->
    
      <meta name="keywords" content="growindiaexport "/ >

    <meta name="description" content="growindiaexport"/>
    
<link rel="canonical" href="https://growindiaexport.com/about-us.php">
    <!-- meta-->
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

    <div class="container margin">
        <div class="row">
            <div class="col-12">
                <!-- <h3>Welcome to <b> <span style="color: #e87800;">Grow</span><span style="color:#2d4e8a">India</span><span style="color: #359a00;">Export</span></b> </h3> -->
                <h5>About us

                </h5>
                <div class="about-us-content">
                    <p>Welcome to GrowIndia Export, your premier partner in facilitating seamless B2B connections across a diverse range of industries. Since our inception, we have been driven by a clear mission: to simplify and enhance the international trade process. Our dedication lies in bridging the gap between sellers and buyers around the world, making global commerce more accessible and efficient for businesses of all sizes.
                        At <b> GrowIndia Export</b> we recognize the complexities and challenges that come with international trade. Our platform is meticulously designed to address these challenges by providing a streamlined and user-friendly experience. We are passionate about helping businesses overcome geographical and logistical barriers, enabling them to thrive in a global marketplace. </p>
                    <p>Our commitment to facilitating successful B2B connections extends beyond just providing a platform. We offer a comprehensive suite of services and support designed to ensure that every transaction is executed smoothly and effectively. From connecting suppliers with potential buyers to offering detailed market insights, we strive to add value at every stage of the trading process.</p>
                    <p>By leveraging our extensive network, cutting-edge technology, and industry expertise, GrowIndia Export is positioned to be your trusted ally in international trade. Whether you're looking to expand your market reach, find reliable partners, or source high-quality products, our goal is to empower you with the tools and support needed to achieve your business objectives.</p>
                    <p>Explore the possibilities with GrowIndia Export and experience how we can transform your approach to global trade, making it easier and more efficient than ever before.</p>

                </div>
            </div>
        </div>
    </div>
    <style>
        .about-bg {
            /* background-image: linear-gradient(black,black),url(aerial-view-cargo-ship-cargo-container-harbor.jpg); */
            padding: 2rem 0rem;
            background-size: cover;
            /* background-attachment: fixed; */
            /* background-color: #e87800; */
            background-color: #2d4f8b;
        }
    </style>
    <div class="about-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-12 col-lg-12">
                    <div class="row my-4 align-items-center bg-white rounded">
                        <div class="col-lg-7 my-2">
                            <h5>Our Mission</h5>
                            <p><q>At GrowIndia Export, our core mission is to enhance the efficiency and accessibility of international trade. We recognize the complexities and hurdles that businesses face in cross-border transactions and aim to provide a platform that makes these processes straightforward and hassle-free. Our goal is to create a seamless experience where businesses can thrive in the global marketplace.</q></p>
                        </div>
                        <div class="col-lg-5 my-2">
                            <img src="image/banner/mission.jpg" class="border border-3 border-dark p-2 rounded" height="auto" width="100%" alt="">
                        </div>
                    </div>
                    <div class="row my-4 align-items-center bg-white rounded">
                        <div class="col-lg-5 my-2">
                            <img src="image/banner/vision.png" class="border border-3 border-dark p-2 rounded" height="auto" width="100%" alt="">
                        </div>
                        <div class="col-lg-7 my-2">
                            <h5>Our Vision</h5>
                            <p><q>At GrowIndia Export, our vision is to revolutionize the landscape of international trade by creating a world where businesses of all sizes can effortlessly connect, collaborate, and grow. We aspire to be the leading platform that transforms the B2B exchange by fostering innovation, driving efficiency, and delivering unparalleled value to our global network of partners.</q></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>