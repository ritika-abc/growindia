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

        <div class="container-fluid my-3">
            <div class="row   graph">
                <div class="col-lg-12 ">
                    <div class="dash_blog">
                        <div class="dash_blog_inner">
                            <!-- <div class="dash_head">
                                <h3><span><i class="fa fa-user yellow_color"></i> Edit Your Profile</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                            </div> -->

                            <div class="task_list_main">
                                <form action="">
                                    <div class="container-fluid task_list_view2">
                                        <div class="list_cont bg-light">
                                            <h5>Add Your Products</h5>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Product Name</label>
                                                    <input type="text" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">company name</label>
                                                    <input type="text" class="form-control" placeholder="company name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Product image</label>
                                                    <input type="file" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Price</label>
                                                    <input type="text" class="form-control" placeholder="Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Unit</label>
                                                    <input type="text" class="form-control" placeholder="Unit">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold "> location</label>
                                                    <input type="text" class="form-control" placeholder="location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">add Category</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">add Category</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold "> User Email</label>
                                                    <input type="text" class="form-control" placeholder="User Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">Add Countries</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">add Category</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold ">State Name</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">State Name</option>
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
                                                    <textarea name="" style="height:200px" class="form-control" id=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Company Description</label>
                                                    <textarea name="" style="height:200px" class="form-control" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">MOQ</label>
                                                   <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Packaging Type</label>
                                                   <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Product Life</label>
                                                   <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 my-3">
                                                <div class="">
                                                    <label for="" class=" text- fw-bold">Feature</label>
                                                   <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Submit</a></div>
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


<?php
include "include1/footer.php";
?>