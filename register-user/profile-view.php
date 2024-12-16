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
        <div class=" ">
            <div class="row">
                <div class="col-md-12">
                    <div class="progress_bar">
                        <!-- Skill Bars -->
                        <span class="skill" style="width:73%;">Your Profile Status <span class="info_valume">73%</span></span>
                        <div class="progress skill-bar ">
                            <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row   graph">
                <div class="col-lg-12 ">
                    <div class="dash_blog">
                        <div class="dash_blog_inner">
                            <div class="dash_head">
                                <h3><span><i class="fa fa-user yellow_color"></i> Edit Your Profile</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                            </div>

                            <div class="task_list_main">
                                <form action="">
                                    <div class="container-fluid task_list_view">
                                        <div class="list_cont bg-light">
                                            <h5>Update Your Company Details</h5>
                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Your Website*</label>
                                                    <input type="text" class="form-control" placeholder="Your Website">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Primary Business*</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">Primary Business*</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Company Name*</label>
                                                    <input type="text" class="form-control" placeholder="Company Name*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Company's Logo*</label>
                                                    <input type="file" class="form-control" placeholder="Company's Logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row    ">
                                            <div class="col-lg-6 my-3  ">
                                                <div class="">
                                                    <label for="" class=" text-danger">GST Details*</label>
                                                    <input type="text" class="form-control" placeholder="GST Details*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">IEC Details*</label>
                                                    <input type="text" class="form-control" placeholder="IEC Details*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row    ">
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Select Country* </label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">Select Country* </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Select State*</label>
                                                    <select name="" class="form-control" id="">
                                                        <option value="">Select State* </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row    ">
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Phone Number* </label>
                                                    <input type="text" class="form-control" placeholder="Phone Number*">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 my-3 ">
                                                <div class="">
                                                    <label for="" class=" text-danger">Company Address*</label>
                                                    <input type="text" class="form-control" placeholder="Company Address*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Submit</a></div>
                                        </div>
                                    </div>
                                    <!-- details 2  profile-->
                                    <?php
                                    include "profile.php";
                                    ?>
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