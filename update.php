<?php
    require 'config.php';
  if(isset($_POST['update'])){
        $companyID =$_GET['$ID'];
        $name = $_POST['C_name'];
        $field = $_POST['fields'];
        $address = $_POST['C_address'];
        $website = $_POST['C_url'];
        $email = $_POST['C_email'];
        $estYr = $_POST['C_estYr'];
        $CEO = $_POST['C_ceo'];
        $Phone = $_POST['C_phone'];
        $noOfemp = $_POST['C_noOfemp'];
        $logo = $_POST['C_logo'];
        $description = $_POST['C_description'];

        $query = "update company set companyName ='".$name."', field='".$field."', headOfficeAddress ='".$address."',website ='".$website."', email ='".$email."', establishedYear =".$estYr.",	CEOname ='".$CEO."',	hotline =".$Phone.", varNOE =".$noOfemp.", description ='".$description."' ";
        echo "$query";
        $result = mysqli_query($conn,$query);
        if($result){
            header("location:companyProfile.php");  
        }
        else{
            echo"Check your query again!";
        }
    }
else{
  header("location:companyProfile.php");  
}

?>
