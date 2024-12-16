<?php
ob_start();
include_once "include/header.php";
include "config.php";

if (isset($_GET['pro_id'])) {
    $pro_id = $_GET['pro_id'];

    $sql = "SELECT * FROM `product` WHERE `pro_id`='$pro_id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);

    $product_name = $row['product_name'];
    $price = $row['price'];
    $unit = $row['unit']; // d
    $product_description = $row['product_description'];
    $company_name = $row['company_name'];
    $moq = $row['moq'];
    $product_image1 = $row['product_image1'];
    
    $company_logo = $row['company_logo'];
    $title = $row['title'];
    $company_experience = $row['company_experience'];
    $number = $row['number'];
    $iec = $row['iec'];
    $gst = $row['gst'];
    $website = $row['website'];
    $state_name = $row['state_name'];
    $country_name = $row['country_name'];
    $packaging_type = $row['packaging_type'];
    $city = $row['city'];
    $company_address = $row['company_address'];
    $client_name = $row['client_name'];
    $plan = $row['plan'];
    
    $about_company = $row['about_company'];
}

if (isset($_POST['submit'])) {
    $pro_id = $_GET['pro_id'];

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $state_name = $_POST['state_name'];
    $country_name = $_POST['country_name'];
    $packaging_type = $_POST['packaging_type'];
    $unit = $_POST['unit'];
    $product_description = $_POST['product_description'];
    $company_name = $_POST['company_name'];
    $moq = $_POST['moq'];
    $title = $_POST['title'];
    $company_experience = $_POST['company_experience'];
    $number = $_POST['number'];
    $iec = $_POST['iec'];
    $gst = $_POST['gst'];
    $plan = $_POST['plan'];
    $website = $_POST['website'];

    $city = $_POST['city'];
    $company_address = $_POST['company_address'];
    $client_name = $_POST['client_name'];
   
    $about_company = $_POST['about_company'];

    // Handle image uploads
    $product_image1 = $row['product_image1'];
    
    $company_logo = $row['company_logo'];

    if ($_FILES["product_image1"]["name"]) {
        $product_image1 = $_FILES["product_image1"]["name"];
        $fld1 = "product-image/" . $product_image1;
        move_uploaded_file($_FILES["product_image1"]["tmp_name"], $fld1);
    }

    

    if ($_FILES["company_logo"]["name"]) {
        $company_logo = $_FILES["company_logo"]["name"];
        $fld4 = "product-image/" . $company_logo;
        move_uploaded_file($_FILES["company_logo"]["tmp_name"], $fld4);
    }

    // Update query
    $sql = "UPDATE `product` SET 
            `product_name`='$product_name',
            `price`='$price',
            `unit`='$unit',
            `product_description`='$product_description',
            `company_name`='$company_name',
            `moq`='$moq',
            `title`='$title',
            `company_experience`='$company_experience',
            `number`='$number',
            `iec`='$iec',
            `plan`='$plan',
            `gst`='$gst',
            `website`='$website',            
            `state_name`='$state_name',
            `country_name`='$country_name',
            `packaging_type`='$packaging_type',
            `client_name`='$client_name',            
            `city`='$city',
            `about_company`='$about_company',
            `company_address`='$company_address'";

    // Append image fields if they are updated
    if ($_FILES["product_image1"]["name"]) {
        $sql .= ", `product_image1`='$fld1'";
    }
    
    if ($_FILES["company_logo"]["name"]) {
        $sql .= ", `company_logo`='$fld4'";
    }

    $sql .= " WHERE `pro_id`='$pro_id'";

    $query1 = mysqli_query($con, $sql);

    if ($query1) {
        header("location:view-product.php");
        exit();
    } else {
        echo "<script>alert('error')</script>";
    }
}
?>

<!-- page content -->
<div class="right_col text-capitalize bg-white" role="main">
    <!-- top tiles -->
    <h3 class="my-3">Update Product Information</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="<?php echo $product_name ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Price</label>
                <input type="text" name="price" value="<?php echo $price ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Unit</label>
                <input type="text" name="unit" value="<?php echo $unit ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Company Name</label>
                <input type="text" name="company_name" value="<?php echo $company_name ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">MOQ</label>
                <input type="text" name="moq" value="<?php echo $moq ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Plan</label>
                <select name="plan" class="form-control mt-1 ">
                    <option value="not-active">Not Active</option>
                   <option value="prime" <?php if ($plan == 'prime') echo 'selected'; ?>>Prime</option>
                   <option value="prime-pro" <?php if ($plan == 'prime-pro') echo 'selected'; ?>>Prime Pro</option>
                   <option value="ultra" <?php if ($plan == 'ultra') echo 'selected'; ?>>Ultra</option>
                   <option value="ultra-pro" <?php if ($plan == 'ultra-pro') echo 'selected'; ?>>Ultra Pro</option>
                  
                </select>
            </div>

            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Company Experience</label>
                <input type="text" name="company_experience" value="<?php echo $company_experience ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Number</label>
                <input type="text" name="number" value="<?php echo $number ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">IEC</label>
                <input type="text" name="iec" value="<?php echo $iec ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">GST</label>
                <input type="text" name="gst" value="<?php echo $gst ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">packaging Type</label>
                <input type="text" name="packaging_type" value="<?php echo $packaging_type ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">Website</label>
                <input type="text" name="website" value="<?php echo $website ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">City</label>
                <input type="text" name="city" value="<?php echo $city ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">company address</label>
                <input type="text" name="company_address" value="<?php echo $company_address ?>" class="form-control mt-1">
            </div>
            <div class="col-12 col-md-4 my-3 text-capitalize">
                <label for="">client name</label>
                <input type="text" name="client_name" value="<?php echo $client_name ?>" class="form-control mt-1">
            </div>
           





            <div class="col-12 col-lg-6 my-2">
                <!--<label for="">add state name </label>-->
                <div class="  my-3 text-capitalize">
                    <label for="">states name</label>
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
            </div>
            
            <div class="col-12 col-lg-6 my-2">
                <!--<label for="">add state name </label>-->
                <div class="  my-3 text-capitalize">
                    <label for=""> Add Countries</label>
                    <select name="country_name" class="form-control" id="category-dropdown">
                        <option value="">------ Select Countries -----</option>
                        <option value="Afghanistan" <?php if ($country_name == 'Afghanistan') echo 'selected'; ?>>Afghanistan</option>




                        <option value="Albania" <?php if ($country_name == 'Albania') echo 'selected'; ?>>Albania</option>
                        <option value="Algeria" <?php if ($country_name == 'Algeria') echo 'selected'; ?>>Algeria</option>
                        <option value="Andorra" <?php if ($country_name == 'Andorra') echo 'selected'; ?>>Andorra</option>
                        <option value="Angola" <?php if ($country_name == 'Angola') echo 'selected'; ?>>Angola</option>
                        <option value="Antigua and Barbuda" <?php if ($country_name == 'Antigua and Barbuda') echo 'selected'; ?>>Antigua and Barbuda</option>
                        <option value="Argentina" <?php if ($country_name == 'Argentina') echo 'selected'; ?>>Argentina</option>
                        <option value="Armenia" <?php if ($country_name == 'Armenia') echo 'selected'; ?>>Armenia</option>
                        <option value="Australia" <?php if ($country_name == 'Australia') echo 'selected'; ?>>Australia</option>
                        <option value="Austria" <?php if ($country_name == 'Austria') echo 'selected'; ?>>Austria</option>
                        <option value="Azerbaijan" <?php if ($country_name == 'Azerbaijan') echo 'selected'; ?>>Azerbaijan</option>
                        <option value="Bahamas" <?php if ($country_name == 'Bahamas') echo 'selected'; ?>>Bahamas</option>
                        <option value="Bahrain" <?php if ($country_name == 'Bahrain') echo 'selected'; ?>>Bahrain</option>
                        <option value="Bangladesh" <?php if ($country_name == 'Bangladesh') echo 'selected'; ?>>Bangladesh</option>
                        <option value="Barbados" <?php if ($country_name == 'Barbados') echo 'selected'; ?>>Barbados</option>
                        <option value="Belarus" <?php if ($country_name == 'Belarus') echo 'selected'; ?>>Belarus</option>
                        <option value="Belgium" <?php if ($country_name == 'Belgium') echo 'selected'; ?>>Belgium</option>
                        <option value="Belize" <?php if ($country_name == 'Belize') echo 'selected'; ?>>Belize</option>
                        <option value="Benin" <?php if ($country_name == 'Benin') echo 'selected'; ?>>Benin</option>
                        <option value="Bhutan" <?php if ($country_name == 'Bhutan') echo 'selected'; ?>>Bhutan</option>
                        <option value="Bolivia" <?php if ($country_name == 'Bolivia') echo 'selected'; ?>>Bolivia</option>
                        <option value="Bosnia and Herzegovina" <?php if ($country_name == 'Bosnia and Herzegovina') echo 'selected'; ?>>Bosnia and Herzegovina</option>
                        <option value="Botswana" <?php if ($country_name == 'Botswana') echo 'selected'; ?>>Botswana</option>
                        <option value="Brazil" <?php if ($country_name == 'Brazil') echo 'selected'; ?>>Brazil</option>
                        <option value="Brunei" <?php if ($country_name == 'Brunei') echo 'selected'; ?>>Brunei</option>
                        <option value="Bulgaria" <?php if ($country_name == 'Bulgaria') echo 'selected'; ?>>Bulgaria</option>
                        <option value="Burkina Faso" <?php if ($country_name == 'Burkina Faso') echo 'selected'; ?>>Burkina Faso</option>
                        <option value="Burundi" <?php if ($country_name == 'Burundi') echo 'selected'; ?>>Burundi</option>
                        <option value="Cabo Verde" <?php if ($country_name == 'Cabo Verde"') echo 'selected'; ?>>Cabo Verde</option>
                        <option value="Cambodia" <?php if ($country_name == 'Cambodia') echo 'selected'; ?>>Cambodia</option>
                        <option value="Cameroon" <?php if ($country_name == 'Cameroon') echo 'selected'; ?>>Cameroon</option>
                        <option value="Canada" <?php if ($country_name == 'Canada') echo 'selected'; ?>>Canada</option>
                        <option value="Central African Republic" <?php if ($country_name == 'Central African Republic') echo 'selected'; ?>>Central African Republic</option>
                        <option value="Chad" <?php if ($country_name == 'Chad') echo 'selected'; ?>>Chad</option>
                        <option value="Chile" <?php if ($country_name == 'Chile') echo 'selected'; ?>>Chile</option>
                        <option value="China" <?php if ($country_name == 'China') echo 'selected'; ?>>China</option>
                        <option value="Colombia" <?php if ($country_name == 'Colombia') echo 'selected'; ?>>Colombia</option>
                        <option value="Comoros" <?php if ($country_name == 'Comoros') echo 'selected'; ?>>Comoros</option>
                        <option value="Congo, Democratic Republic of the" <?php if ($country_name == 'Congo, Democratic Republic of the') echo 'selected'; ?>>Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the" <?php if ($country_name == 'Congo, Republic of the') echo 'selected'; ?>>Congo, Republic of the</option>
                        <option value="Costa Rica" <?php if ($country_name == 'Costa Rica') echo 'selected'; ?>>Costa Rica</option>
                        <option value="Croatia" <?php if ($country_name == 'Croatia') echo 'selected'; ?>>Croatia</option>
                        <option value="Cuba" <?php if ($country_name == 'Cuba') echo 'selected'; ?>>Cuba</option>
                        <option value="Cyprus" <?php if ($country_name == 'Cyprus') echo 'selected'; ?>>Cyprus</option>
                        <option value="Czech Republic" <?php if ($country_name == 'Czech Republic') echo 'selected'; ?>>Czech Republic</option>
                        <option value="Denmark" <?php if ($country_name == 'Denmark') echo 'selected'; ?>>Denmark</option>
                        <option value="Djibouti" <?php if ($country_name == 'Djibouti') echo 'selected'; ?>>Djibouti</option>
                        <option value="Dominica" <?php if ($country_name == 'Dominica') echo 'selected'; ?>>Dominica</option>
                        <option value="Dominican Republic" <?php if ($country_name == 'Dominican Republic') echo 'selected'; ?>>Dominican Republic</option>
                        <option value="East Timor" <?php if ($country_name == 'East Timor') echo 'selected'; ?>>East Timor</option>
                        <option value="Ecuador" <?php if ($country_name == 'Ecuador') echo 'selected'; ?>>Ecuador</option>
                        <option value="Egypt" <?php if ($country_name == 'Egypt') echo 'selected'; ?>>Egypt</option>
                        <option value="El Salvador" <?php if ($country_name == 'El Salvador') echo 'selected'; ?>>El Salvador</option>
                        <option value="Equatorial Guinea" <?php if ($country_name == 'Equatorial Guinea') echo 'selected'; ?>>Equatorial Guinea</option>
                        <option value="Eritrea" <?php if ($country_name == 'Eritrea') echo 'selected'; ?>>Eritrea</option>
                        <option value="Estonia" <?php if ($country_name == 'Estonia') echo 'selected'; ?>>Estonia</option>
                        <option value="Eswatini" <?php if ($country_name == 'Eswatini') echo 'selected'; ?>>Eswatini</option>
                        <option value="Ethiopia" <?php if ($country_name == 'Ethiopia') echo 'selected'; ?>>Ethiopia</option>
                        <option value="Fiji" <?php if ($country_name == 'Fiji') echo 'selected'; ?>>Fiji</option>
                        <option value="Finland" <?php if ($country_name == 'Finland') echo 'selected'; ?>>Finland</option>
                        <option value="France" <?php if ($country_name == 'France') echo 'selected'; ?>>France</option>
                        <option value="Gabon" <?php if ($country_name == 'Gabon') echo 'selected'; ?>>Gabon</option>
                        <option value="Gambia" <?php if ($country_name == 'Gambia') echo 'selected'; ?>>Gambia</option>
                        <option value="Georgia" <?php if ($country_name == 'Georgia') echo 'selected'; ?>>Georgia</option>
                        <option value="Germany" <?php if ($country_name == 'Germany') echo 'selected'; ?>>Germany</option>
                        <option value="Ghana" <?php if ($country_name == 'Ghana') echo 'selected'; ?>>Ghana</option>
                        <option value="Greece" <?php if ($country_name == 'Greece') echo 'selected'; ?>>Greece</option>
                        <option value="Grenada" <?php if ($country_name == 'Grenada') echo 'selected'; ?>>Grenada</option>
                        <option value="Guatemala" <?php if ($country_name == 'Guatemala') echo 'selected'; ?>>Guatemala</option>
                        <option value="Guinea" <?php if ($country_name == 'Guinea') echo 'selected'; ?>>Guinea</option>
                        <option value="Guinea-Bissau" <?php if ($country_name == 'Guinea-Bissau') echo 'selected'; ?>>Guinea-Bissau</option>
                        <option value="Guyana" <?php if ($country_name == 'Guyana') echo 'selected'; ?>>Guyana</option>
                        <option value="Haiti" <?php if ($country_name == 'Haiti') echo 'selected'; ?>>Haiti</option>
                        <option value="Honduras" <?php if ($country_name == 'Honduras') echo 'selected'; ?>>Honduras</option>
                        <option value="Hungary" <?php if ($country_name == 'Hungary') echo 'selected'; ?>>Hungary</option>
                        <option value="Iceland" <?php if ($country_name == 'Iceland') echo 'selected'; ?>>Iceland</option>
                        <option value="India" <?php if ($country_name == 'India') echo 'selected'; ?>>India</option>
                        <option value="Indonesia" <?php if ($country_name == 'Indonesia') echo 'selected'; ?>>Indonesia</option>
                        <option value="Iran" <?php if ($country_name == 'Iran') echo 'selected'; ?>>Iran</option>
                        <option value="Iraq" <?php if ($country_name == 'Iraq') echo 'selected'; ?>>Iraq</option>
                        <option value="Ireland" <?php if ($country_name == 'Ireland') echo 'selected'; ?>>Ireland</option>
                        <option value="Israel" <?php if ($country_name == 'Israel') echo 'selected'; ?>>Israel</option>
                        <option value="Italy" <?php if ($country_name == 'Italy') echo 'selected'; ?>>Italy</option>
                        <option value="Jamaica" <?php if ($country_name == 'Jamaica') echo 'selected'; ?>>Jamaica</option>
                        <option value="Japan" <?php if ($country_name == 'Japan') echo 'selected'; ?>>Japan</option>
                        <option value="Jordan" <?php if ($country_name == 'Jordan') echo 'selected'; ?>>Jordan</option>
                        <option value="Kazakhstan" <?php if ($country_name == 'Kazakhstan') echo 'selected'; ?>>Kazakhstan</option>
                        <option value="Kenya" <?php if ($country_name == 'Kenya') echo 'selected'; ?>>Kenya</option>
                        <option value="Kiribati" <?php if ($country_name == 'Kiribati') echo 'selected'; ?>>Kiribati</option>
                        <option value="Korea, North" <?php if ($country_name == 'Korea, North') echo 'selected'; ?>>Korea, North</option>
                        <option value="Korea, South" <?php if ($country_name == 'Korea, South') echo 'selected'; ?>>Korea, South</option>
                        <option value="Kosovo" <?php if ($country_name == 'Kosovo') echo 'selected'; ?>>Kosovo</option>
                        <option value="Kuwait" <?php if ($country_name == 'Kuwait') echo 'selected'; ?>>Kuwait</option>
                        <option value="Kyrgyzstan" <?php if ($country_name == 'Kyrgyzstan') echo 'selected'; ?>>Kyrgyzstan</option>
                        <option value="Laos" <?php if ($country_name == 'Laos') echo 'selected'; ?>>Laos</option>
                        <option value="Latvia" <?php if ($country_name == 'Latvia') echo 'selected'; ?>>Latvia</option>
                        <option value="Lebanon" <?php if ($country_name == 'Lebanon') echo 'selected'; ?>>Lebanon</option>
                        <option value="Lesotho" <?php if ($country_name == 'Lesotho') echo 'selected'; ?>>Lesotho</option>
                        <option value="Liberia" <?php if ($country_name == 'Liberia') echo 'selected'; ?>>Liberia</option>
                        <option value="Libya" <?php if ($country_name == 'Libya') echo 'selected'; ?>>Libya</option>
                        <option value="Liechtenstein" <?php if ($country_name == 'Liechtenstein') echo 'selected'; ?>>Liechtenstein</option>
                        <option value="Lithuania" <?php if ($country_name == 'Lithuania') echo 'selected'; ?>>Lithuania</option>
                        <option value="Luxembourg" <?php if ($country_name == 'Luxembourg') echo 'selected'; ?>>Luxembourg</option>
                        <option value="Madagascar" <?php if ($country_name == 'Madagascar') echo 'selected'; ?>>Madagascar</option>
                        <option value="Malawi" <?php if ($country_name == 'Malawi') echo 'selected'; ?>>Malawi</option>
                        <option value="Malaysia" <?php if ($country_name == 'Malaysia') echo 'selected'; ?>>Malaysia</option>
                        <option value="Maldives" <?php if ($country_name == 'Maldives') echo 'selected'; ?>>Maldives</option>
                        <option value="Mali" <?php if ($country_name == 'Mali') echo 'selected'; ?>>Mali</option>
                        <option value="Malta" <?php if ($country_name == 'Malta') echo 'selected'; ?>>Malta</option>
                        <option value="Marshall Islands" <?php if ($country_name == 'Marshall Islands') echo 'selected'; ?>>Marshall Islands</option>
                        <option value="Mauritania" <?php if ($country_name == 'Mauritania') echo 'selected'; ?>>Mauritania</option>
                        <option value="Mauritius" <?php if ($country_name == 'Mauritius') echo 'selected'; ?>>Mauritius</option>
                        <option value="Mexico" <?php if ($country_name == 'Mexico') echo 'selected'; ?>>Mexico</option>
                        <option value="Micronesia" <?php if ($country_name == 'Micronesia') echo 'selected'; ?>>Micronesia</option>
                        <option value="Moldova" <?php if ($country_name == 'Moldova') echo 'selected'; ?>>Moldova</option>
                        <option value="Monaco" <?php if ($country_name == 'Monaco') echo 'selected'; ?>>Monaco</option>
                        <option value="Mongolia" <?php if ($country_name == 'Mongolia') echo 'selected'; ?>>Mongolia</option>
                        <option value="Montenegro" <?php if ($country_name == 'Montenegro') echo 'selected'; ?>>Montenegro</option>
                        <option value="Morocco" <?php if ($country_name == 'Morocco') echo 'selected'; ?>>Morocco</option>
                        <option value="Mozambique" <?php if ($country_name == 'Mozambique') echo 'selected'; ?>>Mozambique</option>
                        <option value="Myanmar" <?php if ($country_name == 'Myanmar') echo 'selected'; ?>>Myanmar</option>
                        <option value="Namibia" <?php if ($country_name == 'Namibia') echo 'selected'; ?>>Namibia</option>
                        <option value="Nauru" <?php if ($country_name == 'Nauru') echo 'selected'; ?>>Nauru</option>
                        <option value="Nepal" <?php if ($country_name == 'Nepal') echo 'selected'; ?>>Nepal</option>
                        <option value="Netherlands" <?php if ($country_name == 'Netherlands') echo 'selected'; ?>>Netherlands</option>
                        <option value="New Zealand" <?php if ($country_name == 'New Zealand') echo 'selected'; ?>>New Zealand</option>
                        <option value="Nicaragua" <?php if ($country_name == 'Nicaragua') echo 'selected'; ?>>Nicaragua</option>
                        <option value="Niger" <?php if ($country_name == 'Niger') echo 'selected'; ?>>Niger</option>
                        <option value="Nigeria" <?php if ($country_name == 'Nigeria') echo 'selected'; ?>>Nigeria</option>
                        <option value="North Macedonia" <?php if ($country_name == 'North Macedonia') echo 'selected'; ?>>North Macedonia</option>
                        <option value="Norway" <?php if ($country_name == 'Norway') echo 'selected'; ?>>Norway</option>
                        <option value="Oman" <?php if ($country_name == 'Oman') echo 'selected'; ?>>Oman</option>
                        <option value="Pakistan" <?php if ($country_name == 'Pakistan') echo 'selected'; ?>>Pakistan</option>
                        <option value="Palau" <?php if ($country_name == 'Palau') echo 'selected'; ?>>Palau</option>
                        <option value="Palestine" <?php if ($country_name == 'Palestine') echo 'selected'; ?>>Palestine</option>
                        <option value="Panama" <?php if ($country_name == 'Panama') echo 'selected'; ?>>Panama</option>
                        <option value="Papua New Guinea" <?php if ($country_name == 'Papua New Guinea') echo 'selected'; ?>>Papua New Guinea</option>
                        <option value="Paraguay" <?php if ($country_name == 'Paraguay') echo 'selected'; ?>>Paraguay</option>
                        <option value="Peru" <?php if ($country_name == 'Peru') echo 'selected'; ?>>Peru</option>
                        <option value="Philippines" <?php if ($country_name == 'Philippines') echo 'selected'; ?>>Philippines</option>
                        <option value="Poland" <?php if ($country_name == 'Poland') echo 'selected'; ?>>Poland</option>
                        <option value="Portugal" <?php if ($country_name == 'Portugal') echo 'selected'; ?>>Portugal</option>
                        <option value="Qatar" <?php if ($country_name == 'Qatar') echo 'selected'; ?>>Qatar</option>
                        <option value="Romania" <?php if ($country_name == 'Romania') echo 'selected'; ?>>Romania</option>
                        <option value="Russia" <?php if ($country_name == 'Russia') echo 'selected'; ?>>Russia</option>
                        <option value="Rwanda" <?php if ($country_name == 'Rwanda') echo 'selected'; ?>>Rwanda</option>
                        <option value="Saint Kitts and Nevis" <?php if ($country_name == 'Saint Kitts and Nevis') echo 'selected'; ?>>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia" <?php if ($country_name == 'Saint Lucia') echo 'selected'; ?>>Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines" <?php if ($country_name == 'Saint Vincent and the Grenadines') echo 'selected'; ?>>Saint Vincent and the Grenadines</option>
                        <option value="Samoa" <?php if ($country_name == 'Samoa') echo 'selected'; ?>>Samoa</option>
                        <option value="San Marino" <?php if ($country_name == 'San Marino') echo 'selected'; ?>>San Marino</option>
                        <option value="Sao Tome and Principe" <?php if ($country_name == 'Sao Tome and Principe') echo 'selected'; ?>>Sao Tome and Principe</option>
                        <option value="Saudi Arabia" <?php if ($country_name == 'Saudi Arabia') echo 'selected'; ?>>Saudi Arabia</option>
                        <option value="Senegal" <?php if ($country_name == 'Senegal') echo 'selected'; ?>>Senegal</option>
                        <option value="Serbia" <?php if ($country_name == 'Serbia') echo 'selected'; ?>>Serbia</option>
                        <option value="Seychelles" <?php if ($country_name == 'Seychelles') echo 'selected'; ?>>Seychelles</option>
                        <option value="Sierra Leone" <?php if ($country_name == 'Sierra Leone') echo 'selected'; ?>>Sierra Leone</option>
                        <option value="Singapore" <?php if ($country_name == 'Singapore') echo 'selected'; ?>>Singapore</option>
                        <option value="Slovakia" <?php if ($country_name == 'Slovakia') echo 'selected'; ?>>Slovakia</option>
                        <option value="Slovenia" <?php if ($country_name == 'Slovenia') echo 'selected'; ?>>Slovenia</option>
                        <option value="Solomon Islands" <?php if ($country_name == 'Solomon Islands') echo 'selected'; ?>>Solomon Islands</option>
                        <option value="Somalia" <?php if ($country_name == 'Somalia') echo 'selected'; ?>>Somalia</option>
                        <option value="South Africa" <?php if ($country_name == 'South Africa') echo 'selected'; ?>>South Africa</option>
                        <option value="South Sudan" <?php if ($country_name == 'South Sudan') echo 'selected'; ?>>South Sudan</option>
                        <option value="Spain" <?php if ($country_name == 'Spain') echo 'selected'; ?>>Spain</option>
                        <option value="Sri Lanka" <?php if ($country_name == 'Sri Lanka') echo 'selected'; ?>>Sri Lanka</option>
                        <option value="Sudan" <?php if ($country_name == 'Sudan') echo 'selected'; ?>>Sudan</option>
                        <option value="Suriname" <?php if ($country_name == 'Suriname') echo 'selected'; ?>>Suriname</option>
                        <option value="Sweden" <?php if ($country_name == 'Sweden') echo 'selected'; ?>>Sweden</option>
                        <option value="Switzerland" <?php if ($country_name == 'Switzerland') echo 'selected'; ?>>Switzerland</option>
                        <option value="Syria" <?php if ($country_name == 'Syria') echo 'selected'; ?>>Syria</option>
                        <option value="Taiwan" <?php if ($country_name == 'Taiwan') echo 'selected'; ?>>Taiwan</option>
                        <option value="Tajikistan" <?php if ($country_name == 'Tajikistan') echo 'selected'; ?>>Tajikistan</option>
                        <option value="Tanzania" <?php if ($country_name == 'Tanzania') echo 'selected'; ?>>Tanzania</option>
                        <option value="Thailand" <?php if ($country_name == 'Thailand') echo 'selected'; ?>>Thailand</option>
                        <option value="Togo" <?php if ($country_name == 'Togo') echo 'selected'; ?>>Togo</option>
                        <option value="Tonga" <?php if ($country_name == 'Tonga') echo 'selected'; ?>>Tonga</option>
                        <option value="Trinidad and Tobago" <?php if ($country_name == 'Trinidad and Tobago') echo 'selected'; ?>>Trinidad and Tobago</option>
                        <option value="Tunisia" <?php if ($country_name == 'Tunisia') echo 'selected'; ?>>Tunisia</option>
                        <option value="Turkey" <?php if ($country_name == 'Turkey') echo 'selected'; ?>>Turkey</option>
                        <option value="Turkmenistan" <?php if ($country_name == 'Turkmenistan') echo 'selected'; ?>>Turkmenistan</option>
                        <option value="Tuvalu" <?php if ($country_name == 'Tuvalu') echo 'selected'; ?>>Tuvalu</option>
                        <option value="Uganda" <?php if ($country_name == 'Uganda') echo 'selected'; ?>>Uganda</option>
                        <option value="Ukraine" <?php if ($country_name == 'Ukraine') echo 'selected'; ?>>Ukraine</option>
                        <option value="United Arab Emirates" <?php if ($country_name == 'United Arab Emirates') echo 'selected'; ?>>United Arab Emirates</option>
                        <option value="United Kingdom" <?php if ($country_name == 'United Kingdom') echo 'selected'; ?>>United Kingdom</option>
                        <option value="United States" <?php if ($country_name == 'United States') echo 'selected'; ?>>United States</option>
                        <option value="Uruguay" <?php if ($country_name == 'Uruguay') echo 'selected'; ?>>Uruguay</option>
                        <option value="Uzbekistan" <?php if ($country_name == 'Uzbekistan') echo 'selected'; ?>>Uzbekistan</option>
                        <option value="Vanuatu" <?php if ($country_name == 'Vanuatu') echo 'selected'; ?>>Vanuatu</option>
                        <option value="Vatican City" <?php if ($country_name == 'Vatican City') echo 'selected'; ?>>Vatican City</option>
                        <option value="Venezuela" <?php if ($country_name == 'Venezuela') echo 'selected'; ?>>Venezuela</option>
                        <option value="Vietnam" <?php if ($country_name == 'Vietnam') echo 'selected'; ?>>Vietnam</option>
                        <option value="Yemen" <?php if ($country_name == 'Yemen') echo 'selected'; ?>>Yemen</option>
                        <option value="Zambia" <?php if ($country_name == 'Zambia') echo 'selected'; ?>>Zambia</option>
                        <option value="Zimbabwe" <?php if ($country_name == 'Zimbabwe') echo 'selected'; ?>>Zimbabwe</option>
                    </select>
                </div>
            </div>



            <div class="col-12 col-md-12 my-3 text-capitalize">
                <label for="">Product Description</label>
                <textarea name="product_description" class="form-control" rows="5"><?php echo $product_description ?></textarea>
            </div>
            
            <div class="col-12 col-md-12 my-3 text-capitalize">
                <label for="">About Company</label>
                <textarea name="about_company" class="form-control" rows="5"><?php echo $about_company ?></textarea>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <h6>Product image</h6>

                    </div>
                    <div class="col-3">
                        <img src="<?php echo $product_image1 ?>" height="100px" width="100px" class="my-2" alt="">

                    </div>
                    <div class="col-6">
                        <label for="">Product Image </label>

                        <input type="file" class="form-control" name="product_image1">
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-12">
                        <h6>Comapny Logo image</h6>

                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo $company_logo ?>" height="100px" width="100px" class="my-2" alt="">

                            </div>
                            <div class="col-6">
                                <label for="">Company Logo</label>

                                <input type="file" class="form-control" name="company_logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-4" name="submit" value="Update">
    </form>
</div>
<!-- /page content -->
<?php
include_once "include/footer.php";
ob_end_flush();
?>