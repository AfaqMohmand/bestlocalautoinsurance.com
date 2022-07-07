<?php
    include "db.php";
    if(isset($_POST['submit'])){
        $zip_code=$_POST['zip_code'];
        $v_maker=$_POST['v_maker'];
        $v_model=$_POST['v_model'];
        $v_type=$_POST['v_type'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $universal_leadid = $_POST['universal_leadid'];
        $sql="INSERT INTO clints (zip_code, v_maker, v_model, v_type, name, gender, email, phone, leadiD) VALUES('$zip_code','$v_maker','$v_model','$v_type','$name','$gender','$email','$phone', '$universal_leadid')";

        if(mysqli_query($conn,$sql)){
            
            header("location:thankyou.php");
        }
        else{
            echo "alert ('please try Again!!!');";
        }
    }


?>