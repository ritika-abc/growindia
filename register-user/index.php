<!-- Total Accessed Buyleads || Total Product || Total Buyleads -->

<?php
include "include1/header.php";
include "config.php";

$user_email =  $_SESSION["user_email"];

$sel = "SELECT * FROM `user` where `user_email`='$user_email'";
$q = mysqli_query($con, $sel);
while ($row = mysqli_fetch_array($q)) {


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


         <div class="container-fluid">
            <div class="row   graph">
               <div class="col-lg-8 ">
                  <div class="dash_blog">
                     <div class="dash_blog_inner">
                        <div class="dash_head">
                           <h3><span><i class="fa fa-user yellow_color"></i> PROFILE</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                        </div>
                        <div class="list_cont">
                           <p>Welcome <span class="fw-bold"><u><?php echo $_SESSION["user_name"] ?> </u></span> to <span class="text-success "> Grow India Export</span></p>
                        </div>
                        <div class="task_list_main">
                           <ul class="task_list">
                              <li><a href="#">Your Plan</a><br><strong><?php echo $row["plan"] ?> </strong></li>
                              <li><a href="#">Email</a><br><strong><?php echo $row["user_email"] ?></strong></li>
                              <li><a href="#">Your Plan expire</a><br><strong> <?php echo $row["expire"] ?></strong></li>


                           </ul>
                        </div>
                        <div class="read_more">
                           <div class="center"><a class="main_bt read_bt" href="../register-user/profile-view.php">Your Profile</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="col-12 mb-4">
                     <div class="full socile_icons fb margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-facebook"></i>
                        </div>
                        <div class=" text-center my-3">
                           <h4 class="text-success">Total Buyleads</h4>
                           <h5>5645646</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 mb-4">
                     <div class="full socile_icons tw margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-twitter"></i>
                        </div>
                        <div class=" text-center my-3">
                           <h4 class="text-success">Total Buyleads</h4>
                           <h5>5645646</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 mb-4">
                     <div class="full socile_icons google_p margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-google-plus"></i>
                        </div>
                        <div class=" text-center my-3">
                           <h4 class="text-success">Total Buyleads</h4>
                           <h5>5645646</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- <div class="row column2 graph margin_bottom_30">
         <div class="col-md-l2 col-lg-12">
            <div class="white_shd full">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Extra Area Chart</h2>
                  </div>
               </div>
               <div class="full graph_revenue">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="content">
                           <div class="area_chart">
                              <canvas height="120" id="canvas"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
         <!-- end graph -->

      </div>
      <div class="container-fluid bg-white py-4">
         <div class="row">
            <div class="col-lg-6 my-5">
               <h5>Personal Information</h5>
               <div class="alert alert-warning h-100 mt-3">
                  <ul>
                     <li class="fw-bold my-2">Name : <?php echo $row["user_name"] ?></li>
                     <li class="fw-bold my-2">Email : <?php echo $row["user_email"] ?></li>
                     <li class="fw-bold my-2">Phone Number : <?php echo $row["user_phone"] ?></li>
                     <li class="fw-bold my-2">Country  : <?php echo $row["country_name"] ?></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6 my-5">
               <h5>Company Details</h5>
               <div class="alert alert-success h-100 mt-3">
                  <ul>
                  <li class="fw-bold my-2"><img src="<?php   echo $row['image'] ?>" height="auto" width="30%" alt="<?php echo $row["company_name"] ?>"> </li>
                     <li class="fw-bold my-2">Company Name : <?php echo $row["company_name"] ?></li>                     
                     <li class="fw-bold my-2">GST Code : <?php echo $row["gst"] ?></li>
                     <li class="fw-bold my-2">IEC Details : <?php echo $row["iec_code"] ?></li>
                     <li class="fw-bold my-2">Address : <?php echo $row["company_address"] ?></li>
                     
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
 
<?php } ?>
<?php
include "include1/footer.php";
?>