<style>
    .sp {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background-color: #e97b01;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0%;
        left: 0%;
        font-weight: bold;
        color: white;
    }
</style>



<?php
include "include1/header.php";
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

        <section class="mt-5">
            <h4 class="my-3  text-wh ite p-3"  >Manage Your Products</h4>
            <hr>
            <div class="container-fluid my-3 my-4" style="position:relative">
                <div class="row    ">
                    <div class="col-lg-12 ">
                        <div class="dash_blog">
                            <div class="dash_blog_inner border ">
                                <div class="container-fluid ">
                                    <div class="box_view  my-3">
                                        <div class="row">
                                            <div class="col-lg-3 my-2 text-center">
                                                <img src="../Assam.jpg" height="200px" width="200px" style="object-fit: cover;" class="rounded" alt="">
                                            </div>
                                            <div class="col-lg-9 my-2">
                                                <div class="border px-3 h-100">
                                                    <ul class="nav">
                                                        <li class="nav-item"><a href="" class="nav-link">yoyo</a></li>
                                                        <li class="nav-item"><a href="" class="nav-link">kush@gmail.com</a></li>
                                                    </ul>
                                                    <h4>my product name</h4>
                                                    <p><i class="fa fa-rupee"></i> 435345</p>
                                                    <div class=" " style="height: 50px;overflow-x:auto">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, debitis! Sit, asperiores! Libero nam repellat vero dolorem magni architecto quasi.</p>
                                                    </div>
                                                    <a href="" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp ">1</div>
            </div>
        </section>
    </div>
</div>


<?php
include "include1/footer.php";
?>