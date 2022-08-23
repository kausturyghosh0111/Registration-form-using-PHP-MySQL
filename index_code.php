<?php
    require_once("config.php");
    $name=$_POST['name'];
    $email_id=$_POST['email_id'];
    $pass=$_POST['pass'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $language=implode(",",$_POST['language']); // Converting Array to string 
    $city=$_POST['city'];
    $address=$_POST['address'];
    try{
        $sql="INSERT INTO employee (name,email_id, pass, dob, gender, language, city, address) VALUES ('$name','$email_id','$pass','$dob','$gender','$language','$city','$address')";
        mysqli_query($con, $sql);
        header('location:index.php?msg=Registration is successfull');
        // echo "Registration Successfull";
    }catch(Exception $e){
        // echo $e;
        header('location:index.php?err=Registration is unsuccessfull');
    }
?>

