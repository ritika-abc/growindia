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
        <title>Growindiaexport</title>
<link rel="icon" type="image/x-icon" href="image/favicon.png">
 <link rel="mask-icon" href="image/favicon.png"  >

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
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }

                a {
                        text-decoration: none !important;
                }

                .item_cat {
                        height: 200px;
                        align-items: center;
                        display: flex;
                        aspect-ratio: 0 / 1;
                        justify-content: center;
                }
                .text-primary{
                    color:rgb(46 80 138) !important;
                }
                .carousel_img{
                 height:100px !important;
                 width:100px !important;
           
                }
                .port {
                        background-image: url(image/port.jpg);
                        width: 100%;
                        height: 100%;
                        background-size: cover;
                        padding: 5rem 0rem;
                        /* background-attachment: fixed; */
                        animation: w 15s infinite linear;
                }

           

                @keyframes w {
                        0% {
                                background-position: right;
                        }

                        100% {
                                background-position: left;


                        }
                } 
                .mcsc-iteam .mcsc-heading a {
    color: #e77702;
    text-decoration: none;
        font-weight: 700;
}
        </style>
</head>

<body>
<?php include "navbar.php"; ?>
     
        <section class="browse-cat-sec d-none d-sm-none d-md-none d-lg-block">
                <div class="fw">
                        <div class="browse-cat fo">
                                <aside class="sidebar">
                                        <div>
                                                <div class="bcs-header">
                                                        <img src="image/icon/cat.png" width="35px" height="35px" title="Browse Category"  />Browse Categories
                                                </div>
                                                <ul class="mc-list">
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=18"><img src="image/icon/home.png" class="svg_icon" alt="HomeSupplies" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Home
                                                                        Supplies </a>
                                                                <ul class="mcsc" id="sub_cat_11948">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=26">Home Cleaning Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=91&state_name=">White Phenyl Compound</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=92&state_name=">Washing Brushes</a></li>
                                                                                       
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=27">Buckets, Mugs & Storage Bins</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=93&state_name=">Kitchen Corner Basket</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=94&state_name=">Cutlery Drawer Basket</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=95&state_name=">Recycle Bin</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=96&state_name=">Swing Dustbin</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=97&state_name=" class="silver ts0">Dust Pans</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=28">Artificial Plants & Flowers</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=98&state_name=">Artificial Flower Bushes</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=99&state_name=">Artificial Roses</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=30">Mops, Brooms & Dusters</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=110">Floor Cleaning Brushes</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=111">Household Brushes

</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=112">Wooden Brush</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=119">Dry Mops</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=120" class="silver ts0">Wet Mop</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=31">Incense, Incensory & Pooja Articles</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=113">Diya Stand</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=114">Havan Samagri</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=115">Shankh</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=116">Sandalwood Incense Sticks</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=118" class="silver ts0">Loban Dhoop Sticks</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=32">Food Storage Containers & Boxes</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=125">Kitchen Jars</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=126">Canisters</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=127">Food Storage Containers</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=128">Copper Water Bottle</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=129" class="silver ts0">Stainless Steel Water Bottle</a></li>
                                                                                </ul>
                                                                        </li>
                                                                         
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=10"><img src="https://growindiaexport.com//image/icon/agriculture.png" class="svg_icon" alt="Agriculture" width="22" height="22"     />Agriculture </a>
                                                                <ul class="mcsc" id="sub_cat_10001">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=10">Fresh Flowers and Plants

</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=6">Mango Plants</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=9">Banana Plants</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=18">Dragon Fruit Plant</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=7">Neem Tree</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=8" class="silver ts0">Palm Trees</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=11">Irrigation
                                                                                                Equipment & Systems</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=20">Combine Harvester</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=21">Power Reaper</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=22">Sprinkler Irrigation System</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=25">Soil Additives & Fertilizers</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=83">Vermicompost</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=84">Humic Acid</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=85">Cow Dung</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=89">Plant Nutrient</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=90">Sodium Humate</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=33">Seeds & Plant Saplings</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=131">Onion Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=132">Pumpkin Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=144">Lotus Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=143">Lotus
                                                                                                        Flower</a></li>
                                                                                         
                                                                                </ul>
                                                                        </li>
                                                                        <!--<li class="mcsc-iteam">-->
                                                                        <!--        <p class="mcsc-heading"><a href="/indian-manufacturers/tractor.htm">Tractor-->
                                                                        <!--                        & Tractor Parts</a></p>-->
                                                                        <!--        <ul class="mcsc-list">-->
                                                                        <!--                <li><a href="/indian-suppliers/power-tiller.htm">Power-->
                                                                        <!--                                Tiller</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/mini-tractor.htm">Mini-->
                                                                        <!--                                Tractor</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/combine-harvester.htm">Combine-->
                                                                        <!--                                Harvester</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/tiller.htm">Tiller</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-manufacturers/tractor.htm" class="silver ts0">View-->
                                                                        <!--                                More</a></li>-->
                                                                        <!--        </ul>-->
                                                                        <!--</li>-->
                                                                        <!--<li class="mcsc-iteam">-->
                                                                        <!--        <p class="mcsc-heading"><a href="/indian-manufacturers/dry-fruits.htm">Dry-->
                                                                        <!--                        Fruits & Nuts</a></p>-->
                                                                        <!--        <ul class="mcsc-list">-->
                                                                        <!--                <li><a href="/indian-suppliers/peanut.htm">Peanut</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/walnuts.htm">Walnuts</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/prunes.htm">Prunes</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/almonds.htm">Almond</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-manufacturers/dry-fruits.htm" class="silver ts0">View-->
                                                                        <!--                                More</a></li>-->
                                                                        <!--        </ul>-->
                                                                        <!--</li>-->
                                                                        <!--<li class="mcsc-iteam">-->
                                                                        <!--        <p class="mcsc-heading"><a href="/indian-manufacturers/vegetables.htm">Fresh,-->
                                                                        <!--                        Dried & Preserved Vegetables</a></p>-->
                                                                        <!--        <ul class="mcsc-list">-->
                                                                        <!--                <li><a href="/indian-suppliers/celery.htm">Celery</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/broccoli.htm">Broccoli</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/tomato.htm">Tomato</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/spinach.htm">Spinach</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/cucumber.htm">Cucumber</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-manufacturers/vegetables.htm" class="silver ts0">View-->
                                                                        <!--                                More</a></li>-->
                                                                        <!--        </ul>-->
                                                                        <!--</li>-->
                                                                        <!--<li class="mcsc-iteam">-->
                                                                        <!--        <p class="mcsc-heading"><a href="/indian-manufacturers/agrochemicals.htm">Pesticides-->
                                                                        <!--                        & Insecticides</a></p>-->
                                                                        <!--        <ul class="mcsc-list">-->
                                                                        <!--                <li><a href="/indian-suppliers/sulphur.htm">Sulphur</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/insecticides.htm">Insecticides</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/permethrin.htm">Permethrin</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-suppliers/chlorpyrifos.htm">Chlorpyrifos</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-manufacturers/agrochemicals.htm" class="silver ts0">View-->
                                                                        <!--                                More</a></li>-->
                                                                        <!--        </ul>-->
                                                                        <!--</li>-->
                                                                        <!--<li class="mcsc-iteam">-->
                                                                        <!--        <p class="mcsc-heading"><a href="/indian-manufacturers/agriculture-equipment.htm">Agriculture-->
                                                                        <!--                        Equipment and Supplies</a></p>-->
                                                                        <!--        <ul class="mcsc-list">-->
                                                                        <!--                <li><a href="/indian-suppliers/agricultural-implements.htm">Agricultural-->
                                                                        <!--                                Implements</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/seed-drill.htm">Seed-->
                                                                        <!--                                Drill</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/agriculture-tools.htm">Agriculture-->
                                                                        <!--                                Tools</a></li>-->
                                                                        <!--                <li><a href="/indian-suppliers/pickaxe.htm">Pickaxe</a>-->
                                                                        <!--                </li>-->
                                                                        <!--                <li><a href="/indian-manufacturers/agriculture-equipment.htm" class="silver ts0">View More</a></li>-->
                                                                        <!--        </ul>-->
                                                                        <!--</li>-->
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=16"><img src="https://growindiaexport.com//image/icon/food_product.png" class="svg_icon" alt="FoodProductBeverages" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Food Product & Beverages
                                                                </a>
                                                                <ul class="mcsc" id="sub_cat_10988">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=17">Tea & Coffee</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=35">Flower Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=36">Lemon Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=37">Masala Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=38">Ginger Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=39">Cardamom Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=41">Lemongrass Tea</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=42" class="silver ts0">Mint Tea</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=18">Dry Fruits & Nuts</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=30">Mango</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=103">Apple</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=105">Bananas</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=106">Mangosteen</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=107">Cashew Nuts</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=108">Raisin</a>
                                                                                        </li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=19">Food Grains, Cereals & Flour</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=27">Wheat Flour</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=28">Gram Flour</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=29">Organic Flour</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=58">Banana Flour</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=59">Basmati Rice</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=60">Non Basmati Rice</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=61" class="silver ts0">Brown Rice</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=20">Cooking Spices and Masala</a>
                                                                                </p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=26">Turmeric</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=68">Dry Red Chilli</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=378">Cumin Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=379">Coriander Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=380">Fenugreek Seeds</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=381" class="silver ts0">Natural Cinnamon</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=22">Fresh, Dried & Preserved Vegetables</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=69">Onions</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=70">Potato</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=400">Mushroom</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=401">Lady Finger</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=402">Cabbage</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=403" class="silver ts0">Green Peas</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=53">Edible Oils</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=188">Coconut Oil</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=189">Mustard Oil</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=423">Sesame Oil</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=424">Olive Oil</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=425">Soybean Oil</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=190" class="silver ts0">Clove Oil</a></li>
                                                                                </ul>
                                                                        </li>
                                                                 </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=11"><img src="https://growindiaexport.com//image/icon/clothes.png" class="svg_icon" alt="ApparelFashion" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Apparel
                                                                        & Fashion </a>
                                                                <ul class="mcsc" id="sub_cat_10086">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=13">Men, Women & Kids Footwear</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=23">Men Leather Shoes</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=24">Ladies Leather Shoes</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=557">Leather Moccasin</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=25">Ladies Slippers</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=249">PVC Slippers</a></li>
                                                                                        <li><a href="https://growindiaexport.com/micro-category.php?micro_id=250" class="silver ts0">Casual Slippers</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=16">Womens Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=49">Saree</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=50">Ladies Suits</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=116">Ladies Kurtis</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=117">Ladies Jeans</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=136">Ladies Tops</a></li>
                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=24">Industrial Clothing & Safety Wear</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=53">Industrial Gloves</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=54">Safety Helmets</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=118">Industrial Clothing</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=119">Safety Belts</a>
                                                                                        </li>
                                                                                         
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=29">Leather Bags & Handbags</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=64">Leather Handbag</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=65">Leather Cases</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=120">Leather Bags</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=47">Unisex Clothing</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=90">Shirts</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=121">Trousers</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=122">Nightwear</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=123">T Shirts</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        
                                                                        
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=19"><img src="https://growindiaexport.com//image/icon/experiment.png" class="svg_icon" alt="Chemicals" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Chemicals </a>
                                                                <ul class="mcsc" id="sub_cat_10474">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=34">Petrochemicals & Petroleum Products</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=76">Bio Fuels</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=81">Automotive Fuels</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=155">Solid Paraffin Wax</a>
                                                                                        </li>
                                                                                       
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=44">Catalysts and Absorbents</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=84">Chemical Compound</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=85">Iodine Compounds</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=45">Dyes & Pigments</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=86">Dye Additives</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=87">Inorganic Pigments</a>
                                                                                        </li>
                                                                                     
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=54">Natural and Synthetic Resin</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=101">Resins</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=55">Inorganic and Organic Solvents</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=102">Industrial Solvents</a>
                                                                                        </li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=103">Alcohol Solvents</a>
                                                                                        </li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="mcl-iteam">
                                                                <a href="https://growindiaexport.com/category.php?cat_id=22"><img src="https://growindiaexport.com//image/icon/breakdown.png" class="svg_icon" alt="IndustrialSupplies" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Industrial Supplies </a>
                                                                <ul class="mcsc" id="sub_cat_11220">
                                                                        <li class="mcsc-iteam">
                                                                                <p class="mcsc-heading"><a href="https://growindiaexport.com/sub-cat.php?sub_id=58">Bearings And Bearing Components</a></p>
                                                                                <ul class="mcsc-list">
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=157">Industrial Bearing</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=158">Bearings</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=159">Ball Bearing</a></li>
                                                                                        <li><a href="https://growindiaexport.com/product.php?inner_cat_id=160">Automotive Bearings</a></li>
                                                                                        
                                                                                </ul>
                                                                        </li>
                                                                       
                                                                </ul>
                                                        </li>
                                                        <!--<li class="mcl-iteam">-->
                                                        <!--        <a href="/industry/realestate-construction.htm"><img src="https://growindiaexport.com//image/icon/estate.png" class="svg_icon" alt="ConstructionRealEstate" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Construction & Real Estate-->
                                                        <!--        </a>-->
                                                        <!--        <ul class="mcsc" id="sub_cat_10660">-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/prefab-portable-building.htm">Prefabricated-->
                                                        <!--                                        & Portable Buildings</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/greenhouse.htm">Greenhouse</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/polyhouse.htm">Polyhouse</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/prefabricated-structures.htm">Prefabricated-->
                                                        <!--                                                Structures</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/tensile-structures.htm">Tensile-->
                                                        <!--                                                Structures</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/portable-cabins.htm">Portable-->
                                                        <!--                                                Cabins</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/prefabricated-houses.htm">Prefabricated-->
                                                        <!--                                                Houses</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/prefab-portable-building.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/sanitary-ware-fittings.htm">Sanitary-->
                                                        <!--                                        Ware & Fittings</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/wash-basin.htm">Wash-->
                                                        <!--                                                Basin</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bidets.htm">Bidet</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/kitchen-sink.htm">Kitchen-->
                                                        <!--                                                Sink</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bio-toilet.htm">Bio-->
                                                        <!--                                                Toilet</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/toilet-accessories.htm">Toilet-->
                                                        <!--                                                Accessories</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/water-closet.htm">Water-->
                                                        <!--                                                Closet</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/sanitary-ware-fittings.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/construction-machinery.htm">Construction-->
                                                        <!--                                        Machinery & Equipment</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/construction-equipment.htm">Construction-->
                                                        <!--                                                Equipment</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/brick-making-machine.htm">Brick-->
                                                        <!--                                                Making Machine</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/jaw-crusher.htm">Jaw-->
                                                        <!--                                                Crusher</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/fly-ash-brick-making-machine.htm">Fly-->
                                                        <!--                                                Ash Brick Making Machine</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/hot-mix-plant.htm">Hot-->
                                                        <!--                                                Mix Plant</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/construction-machinery.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/building-materials.htm">Bricks-->
                                                        <!--                                        & Construction Materials</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/plaster-of-paris.htm">Plaster-->
                                                        <!--                                                Of Paris</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/gravel.htm">Gravel</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/cement-bricks.htm">Cement-->
                                                        <!--                                                Bricks</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/hollow-bricks.htm">Hollow-->
                                                        <!--                                                Bricks</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/lightweight-concrete.htm">Lightweight-->
                                                        <!--                                                Concrete</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/building-materials.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/bath-toilet-appliances.htm">Faucet,-->
                                                        <!--                                        Showers & Bathroom Fittings</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/bathroom-fittings.htm">Bathroom-->
                                                        <!--                                                Fittings</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/faucet.htm">Faucet</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bathtub.htm">Bathtub</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/health-faucet.htm">Health-->
                                                        <!--                                                Faucet</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bib-cock.htm">Bib-->
                                                        <!--                                                Cock</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bathroom-taps.htm">Bathroom-->
                                                        <!--                                                Taps</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/bath-toilet-appliances.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/doors-windows.htm">Doors-->
                                                        <!--                                        & Windows</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/upvc-windows.htm">UPVC-->
                                                        <!--                                                Windows</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/flush-doors.htm">Flush-->
                                                        <!--                                                Doors</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/sliding-doors.htm">Sliding-->
                                                        <!--                                                Doors</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/wooden-doors.htm">Wooden-->
                                                        <!--                                                Doors</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/french-window.htm">French-->
                                                        <!--                                                Window</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/upvc-doors.htm">UPVC-->
                                                        <!--                                                Doors</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/doors-windows.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--        </ul>-->
                                                        <!--</li>-->
                                                        <!--<li class="mcl-iteam">-->
                                                        <!--        <a href="/industry/furniture.htm"><img src="https://growindiaexport.com//image/icon/furniture.png" class="svg_icon" alt="Furniture" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Furniture </a>-->
                                                        <!--        <ul class="mcsc" id="sub_cat_13686">-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/metal-furnitures.htm">Metal-->
                                                        <!--                                        Furniture Suppliers</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/steel-furniture.htm">Steel-->
                                                        <!--                                                Furniture</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/recliner-chair.htm">Recliner-->
                                                        <!--                                                Chair</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/steel-table.htm">Steel-->
                                                        <!--                                                Table</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/steel-almirah.htm">Steel-->
                                                        <!--                                                Almirah</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/wrought-iron-furniture.htm">Wrought-->
                                                        <!--                                                Iron Furniture</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/iron-table.htm">Iron-->
                                                        <!--                                                Table</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/metal-furnitures.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/furniture-accessories.htm">Furniture-->
                                                        <!--                                        Hardware & Fittings</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/table-top.htm">Table-->
                                                        <!--                                                Top</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/back-rest.htm">Backrest</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bed-frames.htm">Bed-->
                                                        <!--                                                Frames</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/furniture-hardware.htm">Furniture-->
                                                        <!--                                                Hardware</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/furniture-accessories.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/living-furniture.htm">Living-->
                                                        <!--                                        Room and Plastic Furniture</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/sofa-set.htm">Sofa-->
                                                        <!--                                                Set</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/cupboard.htm">Cupboard</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/tv-unit.htm">TV-->
                                                        <!--                                                Unit</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/chairs.htm">Chairs</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bean-bags.htm">Bean-->
                                                        <!--                                                Bags</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/living-furniture.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/bed-room-furniture.htm">Bedroom,-->
                                                        <!--                                        Bathroom & Kids Furniture</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/almirah.htm">Almirah</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/double-bed.htm">Double-->
                                                        <!--                                                Bed</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/beds.htm">Beds</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/folding-bed.htm">Folding-->
                                                        <!--                                                Bed</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/bunk-beds.htm">Bunk-->
                                                        <!--                                                Bed</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/foldable-wardrobe.htm">Foldable-->
                                                        <!--                                                Wardrobe</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/bed-room-furniture.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--        </ul>-->
                                                        <!--</li>-->
                                                        <!--<li class="mcl-iteam">-->
                                                        <!--        <a href="/industry/health-beauty.htm"><img src="https://growindiaexport.com//image/icon/health.png" class="svg_icon" alt="HealthBeauty" width="22" height="22" loading="lazy" decoding="async" fetchpriority="low" />Health-->
                                                        <!--                & Beauty </a>-->
                                                        <!--        <ul class="mcsc" id="sub_cat_11132">-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/essential-oils.htm">Aromatic-->
                                                        <!--                                        & Essential Oils</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/castor-oil.htm">Castor-->
                                                        <!--                                                Oil</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/tea-tree-oil.htm">Tea-->
                                                        <!--                                                Tree Oil</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/argan-oil.htm">Argan-->
                                                        <!--                                                Oil</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/mentha-oil.htm">Mentha-->
                                                        <!--                                                Oil</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/neem-oil.htm">Neem-->
                                                        <!--                                                Oil</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/essential-oils.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/makeup.htm">Cosmetics,-->
                                                        <!--                                        Hair Care & Beauty Products</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/nail-polish.htm">Nail-->
                                                        <!--                                                Polish</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/lipstick.htm">Lipstick</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/hair-dryer.htm">Hair-->
                                                        <!--                                                Dryer</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/cosmetics.htm">Cosmetics</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/makeup.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/health-care-products.htm">Health-->
                                                        <!--                                        Care Products</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/female-condom.htm">Female-->
                                                        <!--                                                Condom</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/methylcobalamin.htm">Methylcobalamin</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/saccharomyces-boulardii.htm">Saccharomyces-->
                                                        <!--                                                Boulardii</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/adult-diapers.htm">Adult-->
                                                        <!--                                                Diapers</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/health-care-products.htm" class="silver ts0">View More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--                <li class="mcsc-iteam">-->
                                                        <!--                        <p class="mcsc-heading"><a href="/indian-manufacturers/m-equipment.htm">Medical-->
                                                        <!--                                        Equipment & Supplies</a></p>-->
                                                        <!--                        <ul class="mcsc-list">-->
                                                        <!--                                <li><a href="/indian-suppliers/glucometer.htm">Glucometer</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/sphygmomanometer.htm">Sphygmomanometer</a>-->
                                                        <!--                                </li>-->
                                                        <!--                                <li><a href="/indian-suppliers/cpap-machine.htm">CPAP-->
                                                        <!--                                                Machine</a></li>-->
                                                        <!--                                <li><a href="/indian-suppliers/holter-monitor.htm">Holter-->
                                                        <!--                                                Monitor</a></li>-->
                                                        <!--                                <li><a href="/indian-manufacturers/m-equipment.htm" class="silver ts0">View-->
                                                        <!--                                                More</a></li>-->
                                                        <!--                        </ul>-->
                                                        <!--                </li>-->
                                                        <!--        </ul>-->
                                                        <!--</li>-->

                                                </ul>
                                                <div class="all-cl">
                                                        <a href="https://growindiaexport.com/all-category.php" class="all-cl-iteam">
                                                                <img class="all-cl-img" src="image/icon/all-cat.png" alt="All Categories" width="22" height="22" decoding="async" fetchpriority="low">
                                                                All Categories
                                                        </a>
                                                </div>
                                        </div>
                                </aside>
                                <div class="banner  border  border-dark border-2 rounded">
                                        <div id="carouselExample"  class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                                <img src="image/banner/4 (2).jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                         
                                                        <div class="carousel-item">
                                                                <img src="image/banner/3.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="image/banner/4.jpg" height="" class="d-block w-100" alt="...">
                                                        </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- lg nav bar end here -->
        <!-- sm banner -->

        <div class=" d-block d-sm-block d-md-block d-lg-none">
                <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <img src="image/banner/4 (2).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="image/banner/3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="image/banner/4.jpg" class="d-block w-100" alt="...">
                                </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                        </button>
                </div>
        </div>
        <!-- Trending Categories -->
        <div class="container-fluid margin">
                <div class="row">
                        <div class="col-12 ">
                                <div class="py-4 px-3  bg-white shadow-lg rounded">
                                        <a href="https://growindiaexport.com/all-category.php" class="mb-3 fs-4 text-dark mb-2 d-block"> Trending Categories</a>
                                        <!-- owl carousel -->
                                        <div class="owl-carousel owl-theme bg-white">
                                                <?php
                                                include "config.php";
                                                $select1 = "SELECT * from `category`";
                                                $qu1 = mysqli_query($con, $select1);
                                                $s_no = 1;
                                                while ($row1 = mysqli_fetch_array($qu1)) {
                                                        // $micro_id = $row1['micro_id'];
                                                ?>
                                                          <a href="category.php?cat_id=<?php echo $row1['cat_id'] ?>">
                                                                <div class="item item_cat border rounded shadow-sm d-block m-auto py-2">
                                                                        <div class=" d-block  ">
                                                                                <div class=" m-auto  ">
                                                                                        <img src="./admin/<?php echo $row1['cat_image'] ?>"  style="object-fit:cover;border-radius:50%;height:110px !important;width:110px !important" class="d-block m-auto border border-2 border-dark mb-2"   alt="category image">
                                                                                        <div class="px-2 pt-1 border-top  text-center mb-auto">
                                                                                                <p class="text-dark mt-2"><?php echo $row1['cat_name'] ?></p>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </a>
                                                <?php } ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <!--  -->


        <!-- cat  name -->
        <?php



        include "config.php"; // Assuming this file connects to your database ($con)

        // Check if connection to database was successful
        if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
        }

        $select = "SELECT 
            c.cat_name, c.cat_id,
            s.sub_id, s.sub_cat_name, s.sub_cat_image,
            GROUP_CONCAT(CONCAT_WS(':', i.inner_cat_id, i.inner_cat_name) SEPARATOR '|') AS inner_categories
        FROM 
            category c
        LEFT JOIN 
            sub_cat s ON c.cat_id = s.cat_id
        LEFT JOIN 
            inner_cat i ON s.sub_id = i.sub_id
        GROUP BY 
            c.cat_id, s.sub_id";

        $result = mysqli_query($con, $select);

        if (!$result) {
                die("Query failed: " . mysqli_error($con));
        }

        $categories = array(); // Array to store categories and their subcategories

        while ($row = mysqli_fetch_array($result)) {
                $cat_name = $row['cat_name'];
                $cat_id = $row['cat_id'];
                $sub_id = $row['sub_id'];
                $sub_cat_name = $row['sub_cat_name'];
                $sub_cat_image = $row['sub_cat_image']; // Fetch sub_cat_image
                $inner_categories_raw = explode('|', $row['inner_categories']); // Convert string to array

                $inner_categories = array();
                foreach ($inner_categories_raw as $inner_cat_string) {
                        list($inner_cat_id, $inner_cat_name) = explode(':', $inner_cat_string);
                        $inner_categories[] = array(
                                'inner_cat_id' => $inner_cat_id,
                                'inner_cat_name' => $inner_cat_name
                        );
                }

                // Store subcategories and inner categories grouped by categories and subcategories
                if (!isset($categories[$cat_name])) {
                        $categories[$cat_name] = array();
                }

                $categories[$cat_name][] = array(
                        'cat_id' => $cat_id,
                        'sub_id' => $sub_id,
                        'sub_cat_name' => $sub_cat_name,
                        'sub_cat_image' => $sub_cat_image,
                        'inner_categories' => $inner_categories
                );
        }
        // foreach
        $count1 = 0;
        foreach ($categories as $category => $subcategories) {
        ?> <div class="container-fluid margin m-auto my-5 " style="width: 98%;">
                        <div class="row cat_container ">
                                <div class="col-12 border py-3 px-3  bg-white rounded shadow-lg">
                                        <a href="category.php?cat_id=<?php echo $subcategories[0]['cat_id'] ?>">
                                                <h4 class=""><?php echo $category ?></h4>
                                        </a>
                                        <div class="row mt-3">
                                                <div class="col-12 col-md-12">
                                                        <div class="row">
                                                                <!-- sub cat -->

                                                                <?php $count = 0;
                                                                foreach ($subcategories as $subcategory) { ?>
                                                                        <div class="col-12 col-md-6 col-lg-3 my-3">
                                                                                <div class="card cat_responsive_cards p-3">
                                                                                        <a href="sub-cat.php?sub_id=<?php echo  $subcategory['sub_id'] ?>" class="text-decoration-none" style="color: black !important;">
                                                                                                <p class="pb-0 fs-6   w-100 overflow-hidden"><?php echo $subcategory['sub_cat_name'] ?></p>
                                                                                        </a>
                                                                                        <div class="row">
                                                                                                <div class="col-7">
                                                                                                        <!-- inner cat -->
                                                                                                        <?php
                                                                                                        $count2 = 0;
                                                                                                        foreach ($subcategory['inner_categories'] as $innercategory) {
                                                                                                        ?>
                                                                                                                <p class=" p-0 my-1 d-block"><a href="product.php?inner_cat_id=<?php echo $innercategory['inner_cat_id'] ?>" class="text-decoration-none text-orange p-0 m-0">
                                                                                                                                <?php echo $innercategory['inner_cat_name'] ?></a></p>
                                                                                                                <!-- end -->
                                                                                                        <?php $count2++;
                                                                                                                if ($count2 >= 3) {
                                                                                                                        break;
                                                                                                                };
                                                                                                        } ?>

                                                                                                </div>
                                                                                                <div class="col-5 align-self-start border rounded ">

                                                                                                        <img src="./admin/<?php echo  $subcategory['sub_cat_image']  ?>" class="rounded p-2" height="100px" style="object-fit:cover;" width="100%" alt="">
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                <?php $count++;
                                                                        if ($count >= 4) {
                                                                                break;
                                                                        };
                                                                } ?>
                                                                <!-- sub cat end -->
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        <?php $count1++;
                if ($count1 >= 2) {
                        break;
                };
        } ?>

        <!--<div class="container margin alert alert-primary">-->
        <!--        <div class="row">-->
        <!--                <div class="col-12">-->
        <!--                        <div class="owl-carousel owl-theme">-->
        <!--                                <div class="item">-->
        <!--                                        <img src="image/brand/images.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
        <!--                                </div>-->
        <!--                                <div class="item">-->
        <!--                                        <img src="image/brand/download.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
        <!--                                </div>-->
        <!--                                <div class="item">-->
        <!--                                        <img src="image/brand/elixer-jeans-logo.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
        <!--                                </div>-->
        <!--                                <div class="item">-->
        <!--                                        <img src="image/brand/plasto.jpg" height="auto" width="100%" style="object-fit: cover;" alt="">-->
        <!--                                </div>-->
        <!--                                <div class="item">-->
        <!--                                        <img src="image/brand/UNIQUE.webp" height="auto" width="100%" style="object-fit: cover;" alt="">-->
        <!--                                </div>-->


        <!--                        </div>-->
        <!--                </div>-->
        <!--        </div>-->
        <!--</div>-->
        <!--products-->
        <div class="container-fluid bg-light  bg-icon my-5 py-6   p-5">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3"> Featured Products</h1>
                        <p>We are committed to sustainability and environmental stewardship. By implementing eco-friendly
                                farming practices and minimizing waste throughout our operations, </p>
                </div>
                <div class="row justify-content-center ">
                        <div class="col-12 border wow fadeInUp" data-wow-delay="0.3s">
                                <div class="owl-carousel owl-carousel owl-theme  ">
                                        <?php
                                        include "config.php";
                                        $select1 = "SELECT * from `product` limit 15";
                                        $qu1 = mysqli_query($con, $select1);
                                        $s_no = 1;
                                        while ($row  = mysqli_fetch_array($qu1)) {

                                        ?>
                                                <div class="item   ">

                                                        <div class="product_card bg-white  my-2   p-1 rounded shadow-sm">
                                                                <div class="img_card p-1">
                                                                        <img src="./admin/<?php echo $row['product_image1'] ?>" class="border border-3 border-dark  mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="">
                                                                        <hr>
                                                                </div>
                                                                <p style="height: 6rem;"><small><?php echo $row['product_name'] ?></small><i> <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>">Read More</a></i></p>
                                                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-dark w-100" style="background:#2e508a !important">Details</a>
                                                        </div>
                                                </div>
                                        <?php } ?>
                                </div>
                        </div>
                </div>
                <div class="row my-5">
                    <div class="col-12">
                        <h3>Trending Products</h3>
                    </div>
                </div>
                <div class="row justify-content-center ">
                        <div class="col-12 border wow fadeInUp" data-wow-delay="0.3s">
                                <div class="owl-carousel owl-carousel owl-theme  ">
                                        <?php
                                        include "config.php";
                                        $select1 = "SELECT * FROM `product` ORDER BY `pro_id` DESC LIMIT 10 ";
                                        $qu1 = mysqli_query($con, $select1);
                                        $s_no = 1;
                                        while ($row  = mysqli_fetch_array($qu1)) {

                                        ?>
                                                <div class="item   ">

                                                        <div class="product_card bg-white  my-2   p-1 rounded shadow-sm">
                                                                <div class="img_card p-1">
                                                                        <img src="./admin/<?php echo $row['product_image1'] ?>" class="border border-3 border-dark   mb-3 rounded" height="150px" width="100%" style="object-fit: cover;" alt="">
                                                                        <hr>
                                                                </div>
                                                                <p style="height: 6rem;"><small><?php echo $row['product_name'] ?></small><i> <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>">Read More</a></i></p>
                                                                <a href="single-product.php?pro_id=<?php echo $row['pro_id'] ?>" class="btn btn-dark w-100" style="background:#2e508a  !important;">Details</a>
                                                        </div>
                                                </div>
                                        <?php } ?>
                                </div>
                        </div>
                </div>
        </div>
  <style>
                .bg_flxed_image {
                        background-image: url(./image/banner/banner.jpg);
                        width: 100%;
                        background-size: cover;
                        padding: 5rem 0rem;
                        background-attachment: fixed;
                }
                .contect_about-us button{
                    border:none;
                    background:#2e508a;
                    padding:10px 30px;
                    border-radius:30px;
                    color:white;
                }
        </style>
        <section>

                <div class="bg_flxed_image">
                        <div class="container">
                                <div class="row justify-content-center">
                                        <div class="col-11 col-lg-11  shadow-lg my-3 bg-white py-5 rounded">
                                                <div class="row ">
                                                        <div class="col-lg-6 my-4"><div class="port h-100 border border-dark shadow-lg  rounded"></div></div>
                                                        <div class="col-lg-6 my-4">
                                                                <div class="contect_about-us p-3">
                                                                        <h2 style="color:#e77e0f;">Welcome to <span class="text-primary fw-bold">   GrowIndia Export </span> </h2>
                                                                        <p style="text-align:justify;">Welcome to GrowIndiaExport, your trusted partner in connecting sellers and buyers across diverse industries. Founded with the vision of simplifying B2B transactions, our company is dedicated to fostering seamless connections between businesses globally.</p>
                                                                        <p style="text-align:justify;">At GrowIndiaExport, we understand the complexities of international trade and strive to make it more accessible and efficient for our clients. Our platform serves as a bridge, bringing together sellers seeking to expand their market reach and buyers looking for reliable sources of quality products.</p>
                                                                        <p style="text-align:justify;">Our team of experienced professionals is committed to providing exceptional service and support. We leverage advanced technology and industry expertise to ensure that each transaction is smooth and successful. Whether you’re a supplier aiming to enter new markets or a buyer searching for dependable products, GrowIndiaExport offers tailored solutions to meet your needs.</p>
                                                                       <a href="https://growindiaexport.com/about-us.php"> <button >Read More</button></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        
        <!-- news start here-->
        <div class="container mt-20 pb-20 my-5 ">

        <div class="row ">
            <div class="col-12 col-lg-8 col-md-12 col-sm-12 d-none d-md-block">
                <?php
                include "config.php";
                $select = "SELECT * FROM  `news` ORDER BY id DESC limit 4";
                $q = mysqli_query($con, $select);
                $sno1 = 1;
                while ($row = mysqli_fetch_array($q)) {


                ?>
                    <div class="card p-4 my-2">
                        <div class="row">
                            <div class="col-12 ">
                                <p><small><i class="fa-solid fa-calendar-days" style="color: #000b72;"></i> <?php echo $row['date'] ?> </small></p>
                                
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./admin/<?php echo  $row['image']  ?>" class="border border-2 border-dark rounded" width="100%" height="100px" style="object-fit: cover;">
                                        <cite><?php echo $row['about_image'] ?></cite>
                                    </div>
                                    <div class="col-9">
                                        <div class="text">
                                            <h1 style="color: #000b72;" class="fs-5 fw-bold  text-muted mb-2"><?php echo $row['heading'] ?> </h1>
                                            <a href="single-news.php?id=<?php echo $row['id'] ?>">
                                            <p style="color: #000b72;" class=" "><?php echo substr($row['long_para'],0,200).'...'; ?></p>
                                              </a>
                                            <!--<p style="color: #000b72;" class=" "><?php // echo substr($row['long_para'],0,100).'...'; ?></p>-->
                                        </div>
                                    </div>
                                </div>
                              
                                <!--<div class="text-start text-lg-end">-->
                                <!--    <a href="single-news.php?id=<?php echo $row['id'] ?>">-->
                                <!--        <button style="border: none; background: linear-gradient(to right, #ff9d08, #ff5b2e); color: white;" class="p-2 mt-2">Read More </button>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    
                <?php $sno1++ ;   } ?>
            </div>

            <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                <div class="card mt-3 p-2" style="height: 500px; overflow:hidden;">
                    <div class="card-header">
                        <h4>Recent News</h4>
                    </div>
                   
                        <marquee behavior="" direction="up">
                             <?php
                    include "config.php";
                    $select = "SELECT * FROM `news` ORDER BY id DESC ";
                    $q = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($q)) {
                    ?>
                            <a href="single-news.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['heading'] . "-". $row['date'] ?>" class="text-decoration-none">
                                <div class="card p-3 my-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                            <img src="./admin/<?php echo  $row['image']  ?>" class="border border-2 border-dark rounded" width="100%" height="auto" style="object-fit: cover;">
                                        </div>
                                        <div class="col-12  ">
                                            <div class="text">
                                                <h1 style="color: black;" class="fs-6 text-muted fw-bold my-2"><?php echo $row['heading'] ?> </h1>

                                                <p style="color: #000b72;" class=" "><?php echo substr($row['long_para'],0,100).'...'; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                                                <?php   } ?>
                        </marquee>

                </div>
            </div>
        </div>
    </div>
        <!-- news start here-->
        
         <div class="container margin">
                <div class="row">
                        <div class="col-12 mb-4">
                                <h4>Browse By  States</h4>
                        </div>
                        <div class="col-12">
                                <div class="scroll_states  mb-5 pb-3 " style="width: 100%;overflow-X:scroll">

                                        <div class="d-flex align-items-center">
                                                <?php
                                                include "config.php";
                                                $sel = "SELECT * FROM `states`";
                                                $q = mysqli_query($con, $sel);
                                                while ($row = mysqli_fetch_array($q)) {
                                                ?>
                                                        <a href="states.php?state_name=<?php echo $row['state_name'] ?>">
                                                                <div class="card mx-3 rounded border border-dark p-1 shadow-lg text-center" style="width: 210px;height:220px">
                                                                        <img src="image/<?php echo $row['img'] ?>" height="150px" class="rounded" width="200px" style="object-fit: cover;" alt="States Image">
                                                                        <!--<hr>-->
                                                                        <p class="w- "> <?php echo $row['state_name'] ?> </p>
                                                                </div>
                                                        </a>
                                                <?php } ?>
                                        </div>

                                </div>
                        </div>
                </div>
        </div>
        
        <div class="container margin">

                <div class="row mt-5">
                        <p class="fs-4">Popular Category</p>
                        <div class="col-12 d-flex flex-wrap ">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `category`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                        <a href="category.php?cat_id=<?php echo $row['cat_id'] ?>" class="btn btn-light bg-outline-light border m-1 btn-sm"><?php echo $row['cat_name'] ?></a>
                                <?php } ?>
                        </div>
                </div>
        </div>

        <div class="container">
                <div class="row">
                       <p class="fs-4">Popular States</p>
                        <div class="col-12">
                                <?php
                                include "config.php";
                                $sel = "SELECT * FROM `states`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                        <a href="states.php?state_name=<?php echo $row['state_name'] ?>" class="btn btn-light bg-outline-light border m-1 btn-sm"><?php echo $row['state_name'] ?></a>



                                <?php } ?>
                        </div>
                </div>
        </div>

        <script>
                $(document).ready(function() {
                        $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 10,
                                autoplay:true,
                                responsive: {
                                        0: {
                                                items: 1
                                        },
                                        576: {
                                                items: 1
                                        },
                                        768: {
                                                items: 3
                                        },
                                        992: {
                                                items: 6
                                        }
                                }
                        })
                })
        </script>
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
<?php include "footer.php"; ?>