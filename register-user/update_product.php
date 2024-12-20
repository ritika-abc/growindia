<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php

ob_start();

include_once "include1/header.php";
include "config.php";

?>
<!-- insert query -->

<?php
if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];

    $sql = "SELECT * FROM `free-listing-product` WHERE `pro_id`='$pro_id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);

    $product_name = $row['product_name'];
    $price = $row['price'];
    $unit = $row['unit'];
    $product_description = $row['product_description'];
    $company_name = $row['company_name'];

    $state_name = $row['state_name'];
    $user_email = $row['user_email'];
    $state_name = $row['state_name'];
    $location = $row['location'];
    $countries_name = $row['countries_name'];

    // image // cat
}

if (isset($_POST['submit'])) {
    $pro_id = $_GET['pro_id'];

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $product_description = $_POST['product_description'];
    $company_name = $_POST['company_name'];

    $state_name = $_POST['state_name'];
    $user_email = $_POST['user_email'];
    $state_name = $_POST['state_name'];
    $location = $_POST['location'];
    $countries_name = $_POST['countries_name'];

    // Handle image uploads
    $img1 = $row['img1']; // Default image if no new image is uploaded

    // Check if a new image is uploaded
    if ($_FILES["img1"]["name"]) {
        // Create a unique image name with time() for uniqueness
        $img1 =  time() . "_" . $_FILES["img1"]["name"];
        $fld1 = "user-product-image/" . $img1;

        // Move the uploaded file to the desired folder
        move_uploaded_file($_FILES["img1"]["tmp_name"], $fld1);
    }

    // Update query
    $sql = "UPDATE `free-listing-product` SET 
            `product_name`='$product_name',
            `price`='$price',
            `product_description`='$product_description',
            `unit`='$unit',
            `company_name`='$company_name',                     
            `state_name`='$state_name',
            `user_email`='$user_email',
            `state_name`='$state_name',
            `countries_name`='$countries_name',
            `location`='$location'";

    // Append image fields if they are updated
    if ($_FILES["img1"]["name"]) {
        $sql .= ", `img1`='$fld1'";
    }

    $sql .= " WHERE `pro_id`='$pro_id'";

    // Execute the query
    $query1 = mysqli_query($con, $sql);

    if ($query1) {
        // Redirect to the view page after success
        header("location:view-product.php");
        exit();
    } else {
        // Error message if the update fails
        echo "Error updating product: " . mysqli_error($con);
    }
}
?>









<!-- <style>
    input[type='file'] {
        opacity: 0
    }
</style> -->
<div class="  my-5" role="main">
    <div class="container-fluid my-5">

        <div class="row justify-content-center">
            <div class="col-10 bg-white p-4">
                <form action="" method="post" enctype="multipart/form-data" class="text-capitalize">
                    <h5>Update Your products </h5>
                     
                    <div class="row">
                        <div class="col-12 col-lg-6 my-2">
                            <label for="" class=" ">product name</label>
                            <input type="text" name="product_name" value="<?php echo $product_name ?>" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="" class=" ">company name</label>
                            <input type="text" name="company_name" value="<?php echo $company_name ?>" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6 my-2 h-100">
                            <label for=""> Product image </label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="border">
                                                <input class="form-control" value="<?php echo $img1 ?>" type="file" name="img1" id="formFile">
                                            </div>

                                        </div>
                                        <div class="col-12">
                                          
                                            <img src="<?php echo $row['img1']; ?>" height="auto" class="border rounded p-2" width="50%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-2 h-100">
                        <label for="">Product Description</label>
                            <textarea name="product_description" class="form-control" rows="5"><?php echo $product_description ?></textarea>

                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for=""> Price </label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="border">
                                        <input class="form-control" value="<?php echo $price ?>" type="text" name="price" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for=""> Unit </label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="border">
                                        <input class="form-control" type="text" value="<?php echo $unit ?>" name="unit" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="">Company Address </label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="border">
                                        <input class="form-control" value="<?php echo $location ?>" type="text" name="location" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="col-12 col-lg-6 my-2">
                            <label for=""> User Email </label>
                            <input type="text" name="user_email" value="<?php echo $user_email ?>" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6 my-2 text-capitalize">
                            <label for=""> Add Countries</label>
                            <select name="countries_name" class="form-control" id="category-dropdown">
                                <option value="">------ Select Countries -----</option>
                                <option value="Afghanistan" <?php if ($countries_name == 'Afghanistan') echo 'selected'; ?>>Afghanistan</option>




                                <option value="Albania" <?php if ($countries_name == 'Albania') echo 'selected'; ?>>Albania</option>
                                <option value="Algeria" <?php if ($countries_name == 'Algeria') echo 'selected'; ?>>Algeria</option>
                                <option value="Andorra" <?php if ($countries_name == 'Andorra') echo 'selected'; ?>>Andorra</option>
                                <option value="Angola" <?php if ($countries_name == 'Angola') echo 'selected'; ?>>Angola</option>
                                <option value="Antigua and Barbuda" <?php if ($countries_name == 'Antigua and Barbuda') echo 'selected'; ?>>Antigua and Barbuda</option>
                                <option value="Argentina" <?php if ($countries_name == 'Argentina') echo 'selected'; ?>>Argentina</option>
                                <option value="Armenia" <?php if ($countries_name == 'Armenia') echo 'selected'; ?>>Armenia</option>
                                <option value="Australia" <?php if ($countries_name == 'Australia') echo 'selected'; ?>>Australia</option>
                                <option value="Austria" <?php if ($countries_name == 'Austria') echo 'selected'; ?>>Austria</option>
                                <option value="Azerbaijan" <?php if ($countries_name == 'Azerbaijan') echo 'selected'; ?>>Azerbaijan</option>
                                <option value="Bahamas" <?php if ($countries_name == 'Bahamas') echo 'selected'; ?>>Bahamas</option>
                                <option value="Bahrain" <?php if ($countries_name == 'Bahrain') echo 'selected'; ?>>Bahrain</option>
                                <option value="Bangladesh" <?php if ($countries_name == 'Bangladesh') echo 'selected'; ?>>Bangladesh</option>
                                <option value="Barbados" <?php if ($countries_name == 'Barbados') echo 'selected'; ?>>Barbados</option>
                                <option value="Belarus" <?php if ($countries_name == 'Belarus') echo 'selected'; ?>>Belarus</option>
                                <option value="Belgium" <?php if ($countries_name == 'Belgium') echo 'selected'; ?>>Belgium</option>
                                <option value="Belize" <?php if ($countries_name == 'Belize') echo 'selected'; ?>>Belize</option>
                                <option value="Benin" <?php if ($countries_name == 'Benin') echo 'selected'; ?>>Benin</option>
                                <option value="Bhutan" <?php if ($countries_name == 'Bhutan') echo 'selected'; ?>>Bhutan</option>
                                <option value="Bolivia" <?php if ($countries_name == 'Bolivia') echo 'selected'; ?>>Bolivia</option>
                                <option value="Bosnia and Herzegovina" <?php if ($countries_name == 'Bosnia and Herzegovina') echo 'selected'; ?>>Bosnia and Herzegovina</option>
                                <option value="Botswana" <?php if ($countries_name == 'Botswana') echo 'selected'; ?>>Botswana</option>
                                <option value="Brazil" <?php if ($countries_name == 'Brazil') echo 'selected'; ?>>Brazil</option>
                                <option value="Brunei" <?php if ($countries_name == 'Brunei') echo 'selected'; ?>>Brunei</option>
                                <option value="Bulgaria" <?php if ($countries_name == 'Bulgaria') echo 'selected'; ?>>Bulgaria</option>
                                <option value="Burkina Faso" <?php if ($countries_name == 'Burkina Faso') echo 'selected'; ?>>Burkina Faso</option>
                                <option value="Burundi" <?php if ($countries_name == 'Burundi') echo 'selected'; ?>>Burundi</option>
                                <option value="Cabo Verde" <?php if ($countries_name == 'Cabo Verde"') echo 'selected'; ?>>Cabo Verde</option>
                                <option value="Cambodia" <?php if ($countries_name == 'Cambodia') echo 'selected'; ?>>Cambodia</option>
                                <option value="Cameroon" <?php if ($countries_name == 'Cameroon') echo 'selected'; ?>>Cameroon</option>
                                <option value="Canada" <?php if ($countries_name == 'Canada') echo 'selected'; ?>>Canada</option>
                                <option value="Central African Republic" <?php if ($countries_name == 'Central African Republic') echo 'selected'; ?>>Central African Republic</option>
                                <option value="Chad" <?php if ($countries_name == 'Chad') echo 'selected'; ?>>Chad</option>
                                <option value="Chile" <?php if ($countries_name == 'Chile') echo 'selected'; ?>>Chile</option>
                                <option value="China" <?php if ($countries_name == 'China') echo 'selected'; ?>>China</option>
                                <option value="Colombia" <?php if ($countries_name == 'Colombia') echo 'selected'; ?>>Colombia</option>
                                <option value="Comoros" <?php if ($countries_name == 'Comoros') echo 'selected'; ?>>Comoros</option>
                                <option value="Congo, Democratic Republic of the" <?php if ($countries_name == 'Congo, Democratic Republic of the') echo 'selected'; ?>>Congo, Democratic Republic of the</option>
                                <option value="Congo, Republic of the" <?php if ($countries_name == 'Congo, Republic of the') echo 'selected'; ?>>Congo, Republic of the</option>
                                <option value="Costa Rica" <?php if ($countries_name == 'Costa Rica') echo 'selected'; ?>>Costa Rica</option>
                                <option value="Croatia" <?php if ($countries_name == 'Croatia') echo 'selected'; ?>>Croatia</option>
                                <option value="Cuba" <?php if ($countries_name == 'Cuba') echo 'selected'; ?>>Cuba</option>
                                <option value="Cyprus" <?php if ($countries_name == 'Cyprus') echo 'selected'; ?>>Cyprus</option>
                                <option value="Czech Republic" <?php if ($countries_name == 'Czech Republic') echo 'selected'; ?>>Czech Republic</option>
                                <option value="Denmark" <?php if ($countries_name == 'Denmark') echo 'selected'; ?>>Denmark</option>
                                <option value="Djibouti" <?php if ($countries_name == 'Djibouti') echo 'selected'; ?>>Djibouti</option>
                                <option value="Dominica" <?php if ($countries_name == 'Dominica') echo 'selected'; ?>>Dominica</option>
                                <option value="Dominican Republic" <?php if ($countries_name == 'Dominican Republic') echo 'selected'; ?>>Dominican Republic</option>
                                <option value="East Timor" <?php if ($countries_name == 'East Timor') echo 'selected'; ?>>East Timor</option>
                                <option value="Ecuador" <?php if ($countries_name == 'Ecuador') echo 'selected'; ?>>Ecuador</option>
                                <option value="Egypt" <?php if ($countries_name == 'Egypt') echo 'selected'; ?>>Egypt</option>
                                <option value="El Salvador" <?php if ($countries_name == 'El Salvador') echo 'selected'; ?>>El Salvador</option>
                                <option value="Equatorial Guinea" <?php if ($countries_name == 'Equatorial Guinea') echo 'selected'; ?>>Equatorial Guinea</option>
                                <option value="Eritrea" <?php if ($countries_name == 'Eritrea') echo 'selected'; ?>>Eritrea</option>
                                <option value="Estonia" <?php if ($countries_name == 'Estonia') echo 'selected'; ?>>Estonia</option>
                                <option value="Eswatini" <?php if ($countries_name == 'Eswatini') echo 'selected'; ?>>Eswatini</option>
                                <option value="Ethiopia" <?php if ($countries_name == 'Ethiopia') echo 'selected'; ?>>Ethiopia</option>
                                <option value="Fiji" <?php if ($countries_name == 'Fiji') echo 'selected'; ?>>Fiji</option>
                                <option value="Finland" <?php if ($countries_name == 'Finland') echo 'selected'; ?>>Finland</option>
                                <option value="France" <?php if ($countries_name == 'France') echo 'selected'; ?>>France</option>
                                <option value="Gabon" <?php if ($countries_name == 'Gabon') echo 'selected'; ?>>Gabon</option>
                                <option value="Gambia" <?php if ($countries_name == 'Gambia') echo 'selected'; ?>>Gambia</option>
                                <option value="Georgia" <?php if ($countries_name == 'Georgia') echo 'selected'; ?>>Georgia</option>
                                <option value="Germany" <?php if ($countries_name == 'Germany') echo 'selected'; ?>>Germany</option>
                                <option value="Ghana" <?php if ($countries_name == 'Ghana') echo 'selected'; ?>>Ghana</option>
                                <option value="Greece" <?php if ($countries_name == 'Greece') echo 'selected'; ?>>Greece</option>
                                <option value="Grenada" <?php if ($countries_name == 'Grenada') echo 'selected'; ?>>Grenada</option>
                                <option value="Guatemala" <?php if ($countries_name == 'Guatemala') echo 'selected'; ?>>Guatemala</option>
                                <option value="Guinea" <?php if ($countries_name == 'Guinea') echo 'selected'; ?>>Guinea</option>
                                <option value="Guinea-Bissau" <?php if ($countries_name == 'Guinea-Bissau') echo 'selected'; ?>>Guinea-Bissau</option>
                                <option value="Guyana" <?php if ($countries_name == 'Guyana') echo 'selected'; ?>>Guyana</option>
                                <option value="Haiti" <?php if ($countries_name == 'Haiti') echo 'selected'; ?>>Haiti</option>
                                <option value="Honduras" <?php if ($countries_name == 'Honduras') echo 'selected'; ?>>Honduras</option>
                                <option value="Hungary" <?php if ($countries_name == 'Hungary') echo 'selected'; ?>>Hungary</option>
                                <option value="Iceland" <?php if ($countries_name == 'Iceland') echo 'selected'; ?>>Iceland</option>
                                <option value="India" <?php if ($countries_name == 'India') echo 'selected'; ?>>India</option>
                                <option value="Indonesia" <?php if ($countries_name == 'Indonesia') echo 'selected'; ?>>Indonesia</option>
                                <option value="Iran" <?php if ($countries_name == 'Iran') echo 'selected'; ?>>Iran</option>
                                <option value="Iraq" <?php if ($countries_name == 'Iraq') echo 'selected'; ?>>Iraq</option>
                                <option value="Ireland" <?php if ($countries_name == 'Ireland') echo 'selected'; ?>>Ireland</option>
                                <option value="Israel" <?php if ($countries_name == 'Israel') echo 'selected'; ?>>Israel</option>
                                <option value="Italy" <?php if ($countries_name == 'Italy') echo 'selected'; ?>>Italy</option>
                                <option value="Jamaica" <?php if ($countries_name == 'Jamaica') echo 'selected'; ?>>Jamaica</option>
                                <option value="Japan" <?php if ($countries_name == 'Japan') echo 'selected'; ?>>Japan</option>
                                <option value="Jordan" <?php if ($countries_name == 'Jordan') echo 'selected'; ?>>Jordan</option>
                                <option value="Kazakhstan" <?php if ($countries_name == 'Kazakhstan') echo 'selected'; ?>>Kazakhstan</option>
                                <option value="Kenya" <?php if ($countries_name == 'Kenya') echo 'selected'; ?>>Kenya</option>
                                <option value="Kiribati" <?php if ($countries_name == 'Kiribati') echo 'selected'; ?>>Kiribati</option>
                                <option value="Korea, North" <?php if ($countries_name == 'Korea, North') echo 'selected'; ?>>Korea, North</option>
                                <option value="Korea, South" <?php if ($countries_name == 'Korea, South') echo 'selected'; ?>>Korea, South</option>
                                <option value="Kosovo" <?php if ($countries_name == 'Kosovo') echo 'selected'; ?>>Kosovo</option>
                                <option value="Kuwait" <?php if ($countries_name == 'Kuwait') echo 'selected'; ?>>Kuwait</option>
                                <option value="Kyrgyzstan" <?php if ($countries_name == 'Kyrgyzstan') echo 'selected'; ?>>Kyrgyzstan</option>
                                <option value="Laos" <?php if ($countries_name == 'Laos') echo 'selected'; ?>>Laos</option>
                                <option value="Latvia" <?php if ($countries_name == 'Latvia') echo 'selected'; ?>>Latvia</option>
                                <option value="Lebanon" <?php if ($countries_name == 'Lebanon') echo 'selected'; ?>>Lebanon</option>
                                <option value="Lesotho" <?php if ($countries_name == 'Lesotho') echo 'selected'; ?>>Lesotho</option>
                                <option value="Liberia" <?php if ($countries_name == 'Liberia') echo 'selected'; ?>>Liberia</option>
                                <option value="Libya" <?php if ($countries_name == 'Libya') echo 'selected'; ?>>Libya</option>
                                <option value="Liechtenstein" <?php if ($countries_name == 'Liechtenstein') echo 'selected'; ?>>Liechtenstein</option>
                                <option value="Lithuania" <?php if ($countries_name == 'Lithuania') echo 'selected'; ?>>Lithuania</option>
                                <option value="Luxembourg" <?php if ($countries_name == 'Luxembourg') echo 'selected'; ?>>Luxembourg</option>
                                <option value="Madagascar" <?php if ($countries_name == 'Madagascar') echo 'selected'; ?>>Madagascar</option>
                                <option value="Malawi" <?php if ($countries_name == 'Malawi') echo 'selected'; ?>>Malawi</option>
                                <option value="Malaysia" <?php if ($countries_name == 'Malaysia') echo 'selected'; ?>>Malaysia</option>
                                <option value="Maldives" <?php if ($countries_name == 'Maldives') echo 'selected'; ?>>Maldives</option>
                                <option value="Mali" <?php if ($countries_name == 'Mali') echo 'selected'; ?>>Mali</option>
                                <option value="Malta" <?php if ($countries_name == 'Malta') echo 'selected'; ?>>Malta</option>
                                <option value="Marshall Islands" <?php if ($countries_name == 'Marshall Islands') echo 'selected'; ?>>Marshall Islands</option>
                                <option value="Mauritania" <?php if ($countries_name == 'Mauritania') echo 'selected'; ?>>Mauritania</option>
                                <option value="Mauritius" <?php if ($countries_name == 'Mauritius') echo 'selected'; ?>>Mauritius</option>
                                <option value="Mexico" <?php if ($countries_name == 'Mexico') echo 'selected'; ?>>Mexico</option>
                                <option value="Micronesia" <?php if ($countries_name == 'Micronesia') echo 'selected'; ?>>Micronesia</option>
                                <option value="Moldova" <?php if ($countries_name == 'Moldova') echo 'selected'; ?>>Moldova</option>
                                <option value="Monaco" <?php if ($countries_name == 'Monaco') echo 'selected'; ?>>Monaco</option>
                                <option value="Mongolia" <?php if ($countries_name == 'Mongolia') echo 'selected'; ?>>Mongolia</option>
                                <option value="Montenegro" <?php if ($countries_name == 'Montenegro') echo 'selected'; ?>>Montenegro</option>
                                <option value="Morocco" <?php if ($countries_name == 'Morocco') echo 'selected'; ?>>Morocco</option>
                                <option value="Mozambique" <?php if ($countries_name == 'Mozambique') echo 'selected'; ?>>Mozambique</option>
                                <option value="Myanmar" <?php if ($countries_name == 'Myanmar') echo 'selected'; ?>>Myanmar</option>
                                <option value="Namibia" <?php if ($countries_name == 'Namibia') echo 'selected'; ?>>Namibia</option>
                                <option value="Nauru" <?php if ($countries_name == 'Nauru') echo 'selected'; ?>>Nauru</option>
                                <option value="Nepal" <?php if ($countries_name == 'Nepal') echo 'selected'; ?>>Nepal</option>
                                <option value="Netherlands" <?php if ($countries_name == 'Netherlands') echo 'selected'; ?>>Netherlands</option>
                                <option value="New Zealand" <?php if ($countries_name == 'New Zealand') echo 'selected'; ?>>New Zealand</option>
                                <option value="Nicaragua" <?php if ($countries_name == 'Nicaragua') echo 'selected'; ?>>Nicaragua</option>
                                <option value="Niger" <?php if ($countries_name == 'Niger') echo 'selected'; ?>>Niger</option>
                                <option value="Nigeria" <?php if ($countries_name == 'Nigeria') echo 'selected'; ?>>Nigeria</option>
                                <option value="North Macedonia" <?php if ($countries_name == 'North Macedonia') echo 'selected'; ?>>North Macedonia</option>
                                <option value="Norway" <?php if ($countries_name == 'Norway') echo 'selected'; ?>>Norway</option>
                                <option value="Oman" <?php if ($countries_name == 'Oman') echo 'selected'; ?>>Oman</option>
                                <option value="Pakistan" <?php if ($countries_name == 'Pakistan') echo 'selected'; ?>>Pakistan</option>
                                <option value="Palau" <?php if ($countries_name == 'Palau') echo 'selected'; ?>>Palau</option>
                                <option value="Palestine" <?php if ($countries_name == 'Palestine') echo 'selected'; ?>>Palestine</option>
                                <option value="Panama" <?php if ($countries_name == 'Panama') echo 'selected'; ?>>Panama</option>
                                <option value="Papua New Guinea" <?php if ($countries_name == 'Papua New Guinea') echo 'selected'; ?>>Papua New Guinea</option>
                                <option value="Paraguay" <?php if ($countries_name == 'Paraguay') echo 'selected'; ?>>Paraguay</option>
                                <option value="Peru" <?php if ($countries_name == 'Peru') echo 'selected'; ?>>Peru</option>
                                <option value="Philippines" <?php if ($countries_name == 'Philippines') echo 'selected'; ?>>Philippines</option>
                                <option value="Poland" <?php if ($countries_name == 'Poland') echo 'selected'; ?>>Poland</option>
                                <option value="Portugal" <?php if ($countries_name == 'Portugal') echo 'selected'; ?>>Portugal</option>
                                <option value="Qatar" <?php if ($countries_name == 'Qatar') echo 'selected'; ?>>Qatar</option>
                                <option value="Romania" <?php if ($countries_name == 'Romania') echo 'selected'; ?>>Romania</option>
                                <option value="Russia" <?php if ($countries_name == 'Russia') echo 'selected'; ?>>Russia</option>
                                <option value="Rwanda" <?php if ($countries_name == 'Rwanda') echo 'selected'; ?>>Rwanda</option>
                                <option value="Saint Kitts and Nevis" <?php if ($countries_name == 'Saint Kitts and Nevis') echo 'selected'; ?>>Saint Kitts and Nevis</option>
                                <option value="Saint Lucia" <?php if ($countries_name == 'Saint Lucia') echo 'selected'; ?>>Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines" <?php if ($countries_name == 'Saint Vincent and the Grenadines') echo 'selected'; ?>>Saint Vincent and the Grenadines</option>
                                <option value="Samoa" <?php if ($countries_name == 'Samoa') echo 'selected'; ?>>Samoa</option>
                                <option value="San Marino" <?php if ($countries_name == 'San Marino') echo 'selected'; ?>>San Marino</option>
                                <option value="Sao Tome and Principe" <?php if ($countries_name == 'Sao Tome and Principe') echo 'selected'; ?>>Sao Tome and Principe</option>
                                <option value="Saudi Arabia" <?php if ($countries_name == 'Saudi Arabia') echo 'selected'; ?>>Saudi Arabia</option>
                                <option value="Senegal" <?php if ($countries_name == 'Senegal') echo 'selected'; ?>>Senegal</option>
                                <option value="Serbia" <?php if ($countries_name == 'Serbia') echo 'selected'; ?>>Serbia</option>
                                <option value="Seychelles" <?php if ($countries_name == 'Seychelles') echo 'selected'; ?>>Seychelles</option>
                                <option value="Sierra Leone" <?php if ($countries_name == 'Sierra Leone') echo 'selected'; ?>>Sierra Leone</option>
                                <option value="Singapore" <?php if ($countries_name == 'Singapore') echo 'selected'; ?>>Singapore</option>
                                <option value="Slovakia" <?php if ($countries_name == 'Slovakia') echo 'selected'; ?>>Slovakia</option>
                                <option value="Slovenia" <?php if ($countries_name == 'Slovenia') echo 'selected'; ?>>Slovenia</option>
                                <option value="Solomon Islands" <?php if ($countries_name == 'Solomon Islands') echo 'selected'; ?>>Solomon Islands</option>
                                <option value="Somalia" <?php if ($countries_name == 'Somalia') echo 'selected'; ?>>Somalia</option>
                                <option value="South Africa" <?php if ($countries_name == 'South Africa') echo 'selected'; ?>>South Africa</option>
                                <option value="South Sudan" <?php if ($countries_name == 'South Sudan') echo 'selected'; ?>>South Sudan</option>
                                <option value="Spain" <?php if ($countries_name == 'Spain') echo 'selected'; ?>>Spain</option>
                                <option value="Sri Lanka" <?php if ($countries_name == 'Sri Lanka') echo 'selected'; ?>>Sri Lanka</option>
                                <option value="Sudan" <?php if ($countries_name == 'Sudan') echo 'selected'; ?>>Sudan</option>
                                <option value="Suriname" <?php if ($countries_name == 'Suriname') echo 'selected'; ?>>Suriname</option>
                                <option value="Sweden" <?php if ($countries_name == 'Sweden') echo 'selected'; ?>>Sweden</option>
                                <option value="Switzerland" <?php if ($countries_name == 'Switzerland') echo 'selected'; ?>>Switzerland</option>
                                <option value="Syria" <?php if ($countries_name == 'Syria') echo 'selected'; ?>>Syria</option>
                                <option value="Taiwan" <?php if ($countries_name == 'Taiwan') echo 'selected'; ?>>Taiwan</option>
                                <option value="Tajikistan" <?php if ($countries_name == 'Tajikistan') echo 'selected'; ?>>Tajikistan</option>
                                <option value="Tanzania" <?php if ($countries_name == 'Tanzania') echo 'selected'; ?>>Tanzania</option>
                                <option value="Thailand" <?php if ($countries_name == 'Thailand') echo 'selected'; ?>>Thailand</option>
                                <option value="Togo" <?php if ($countries_name == 'Togo') echo 'selected'; ?>>Togo</option>
                                <option value="Tonga" <?php if ($countries_name == 'Tonga') echo 'selected'; ?>>Tonga</option>
                                <option value="Trinidad and Tobago" <?php if ($countries_name == 'Trinidad and Tobago') echo 'selected'; ?>>Trinidad and Tobago</option>
                                <option value="Tunisia" <?php if ($countries_name == 'Tunisia') echo 'selected'; ?>>Tunisia</option>
                                <option value="Turkey" <?php if ($countries_name == 'Turkey') echo 'selected'; ?>>Turkey</option>
                                <option value="Turkmenistan" <?php if ($countries_name == 'Turkmenistan') echo 'selected'; ?>>Turkmenistan</option>
                                <option value="Tuvalu" <?php if ($countries_name == 'Tuvalu') echo 'selected'; ?>>Tuvalu</option>
                                <option value="Uganda" <?php if ($countries_name == 'Uganda') echo 'selected'; ?>>Uganda</option>
                                <option value="Ukraine" <?php if ($countries_name == 'Ukraine') echo 'selected'; ?>>Ukraine</option>
                                <option value="United Arab Emirates" <?php if ($countries_name == 'United Arab Emirates') echo 'selected'; ?>>United Arab Emirates</option>
                                <option value="United Kingdom" <?php if ($countries_name == 'United Kingdom') echo 'selected'; ?>>United Kingdom</option>
                                <option value="United States" <?php if ($countries_name == 'United States') echo 'selected'; ?>>United States</option>
                                <option value="Uruguay" <?php if ($countries_name == 'Uruguay') echo 'selected'; ?>>Uruguay</option>
                                <option value="Uzbekistan" <?php if ($countries_name == 'Uzbekistan') echo 'selected'; ?>>Uzbekistan</option>
                                <option value="Vanuatu" <?php if ($countries_name == 'Vanuatu') echo 'selected'; ?>>Vanuatu</option>
                                <option value="Vatican City" <?php if ($countries_name == 'Vatican City') echo 'selected'; ?>>Vatican City</option>
                                <option value="Venezuela" <?php if ($countries_name == 'Venezuela') echo 'selected'; ?>>Venezuela</option>
                                <option value="Vietnam" <?php if ($countries_name == 'Vietnam') echo 'selected'; ?>>Vietnam</option>
                                <option value="Yemen" <?php if ($countries_name == 'Yemen') echo 'selected'; ?>>Yemen</option>
                                <option value="Zambia" <?php if ($countries_name == 'Zambia') echo 'selected'; ?>>Zambia</option>
                                <option value="Zimbabwe" <?php if ($countries_name == 'Zimbabwe') echo 'selected'; ?>>Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2 text-capitalize">
                            <label for=""> State Name</label>
                            <select name="state_name" class="form-control mt-1" id="">
                                <option value="">------------- select -------------</option>
                                <option value="Andhra Pradesh" <?php if ($state_name == 'Andhra Pradesh') echo 'selected'; ?>>Andhra Pradesh</option>
                                <option value="Arunachal Pradesh" <?php if ($state_name == 'Arunachal Pradesh') echo 'selected'; ?>>Arunachal Pradesh</option>
                                <option value="Assam" <?php if ($state_name == 'Assam') echo 'selected'; ?>>Assam</option>
                                <option value="Bihar" <?php if ($state_name == 'Bihar') echo 'selected'; ?>>Bihar</option>
                                <option value="Chhattisgarh" <?php if ($state_name == 'Chhattisgarh') echo 'selected'; ?>>Chhattisgarh</option>
                                <option value="Goa" <?php if ($state_name == 'Goa') echo 'selected'; ?>>Goa</option>
                                <option value="Gujarat" <?php if ($state_name == 'Gujarat') echo 'selected'; ?>>Gujarat</option>
                                <option value="Haryana" <?php if ($state_name == 'Haryana') echo 'selected'; ?>>Haryana</option>
                                <option value="Himachal Pradesh" <?php if ($state_name == 'Himachal Pradesh') echo 'selected'; ?>>Himachal Pradesh</option>
                                <option value="Jharkhand" <?php if ($state_name == 'Jharkhand') echo 'selected'; ?>>Jharkhand</option>
                                <option value="Karnataka" <?php if ($state_name == 'Karnataka') echo 'selected'; ?>>Karnataka</option>
                                <option value="Kerala" <?php if ($state_name == 'Kerala') echo 'selected'; ?>>Kerala</option>
                                <option value="Madhya Pradesh" <?php if ($state_name == 'Madhya Pradesh') echo 'selected'; ?>>Madhya Pradesh</option>
                                <option value="Maharashtra" <?php if ($state_name == 'Maharashtra') echo 'selected'; ?>>Maharashtra</option>
                                <option value="Manipur" <?php if ($state_name == 'Manipur') echo 'selected'; ?>>Manipur</option>
                                <option value="Meghalaya" <?php if ($state_name == 'Meghalaya') echo 'selected'; ?>>Meghalaya</option>
                                <option value="Mizoram" <?php if ($state_name == 'Mizoram') echo 'selected'; ?>>Mizoram</option>
                                <option value="Nagaland" <?php if ($state_name == 'Nagaland') echo 'selected'; ?>>Nagaland</option>
                                <option value="Odisha" <?php if ($state_name == 'Odisha') echo 'selected'; ?>>Odisha</option>
                                <option value="Punjab" <?php if ($state_name == 'Punjab') echo 'selected'; ?>>Punjab</option>
                                <option value="Rajasthan" <?php if ($state_name == 'Rajasthan') echo 'selected'; ?>>Rajasthan</option>
                                <option value="Sikkim" <?php if ($state_name == 'Sikkim') echo 'selected'; ?>>Sikkim</option>
                                <option value="Tamil Nadu" <?php if ($state_name == 'Tamil Nadu') echo 'selected'; ?>>Tamil Nadu</option>
                                <option value="Telangana" <?php if ($state_name == 'Telangana') echo 'selected'; ?>>Telangana</option>
                                <option value="Tripura" <?php if ($state_name == 'Tripura') echo 'selected'; ?>>Tripura</option>
                                <option value="Uttar Pradesh" <?php if ($state_name == 'Uttar Pradesh') echo 'selected'; ?>>Uttar Pradesh</option>
                                <option value="Uttarakhand" <?php if ($state_name == 'Uttarakhand') echo 'selected'; ?>>Uttarakhand</option>
                                <option value="West Bengal" <?php if ($state_name == 'West Bengal') echo 'selected'; ?>>West Bengal</option>
                                <option value="Andaman and Nicobar Islands" <?php if ($state_name == 'Andaman and Nicobar Islands') echo 'selected'; ?>>Andaman and Nicobar Islands</option>
                                <option value="Chandigarh" <?php if ($state_name == 'Chandigarh') echo 'selected'; ?>>Chandigarh</option>
                                <option value="Dadra and Nagar Haveli" <?php if ($state_name == 'Dadra and Nagar Haveli') echo 'selected'; ?>>Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu" <?php if ($state_name == 'Daman and Diu') echo 'selected'; ?>>Daman and Diu</option>
                                <option value="Lakshadweep" <?php if ($state_name == 'Lakshadweep') echo 'selected'; ?>>Lakshadweep</option>
                                <option value="Delhi" <?php if ($state_name == 'Delhi') echo 'selected'; ?>>Delhi</option>
                                <option value="Puducherry" <?php if ($state_name == 'Puducherry') echo 'selected'; ?>>Puducherry</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        
                        <div class="col-12 my-2">
                            <label for="">Product Description</label>
                            <textarea name="product_description" class="form-control" rows="5"><?php echo $product_description ?></textarea>

                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row my-4 border border-warning p-3 rounded">
                        <div class="col-12">
                            <h5>Company Details / optional details*</h5>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company Name</label>
                                <input class="form-control   " name=" " type="text" id="formFile">
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company experience</label>
                                <input class="form-control   " name="company_experience" type="text" id="formFile">
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company Logo</label>
                                <div class="border">
                                    <input class="form-control   " name="company_experience" type="file" id="formFile">

                                </div>
                            </div>
                            <div class="col-12 col-md-3 my-2">
                                <label for="">Company Type</label>
                                <select name="" class="form-control" id="">
                                    <option value="">---- Select----</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12 my-2">
                                <label for="">Company decsription</label>
                               <textarea name="" class="form-control" id=""></textarea>
                            </div>
                        </div>
                    </div> -->
                    <input type="submit" name="submit" class="btn btn-danger   " style="width:100px">
                    <input type="reset" name="submit" class="btn btn-warning   ">
                </form>
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

<!-- /page content -->
<?php

include_once "include1/footer.php";
ob_end_flush();

?>

<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
        <div class="col-12 col-lg-3">
            <img src="" height="auto" width="100%" alt="">
            <h3>abc</h3>
        </div>
    </div>
</div> -->