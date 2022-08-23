<?php
require_once("config.php");
try{
    $id=$_GET['id'];
    $del="DELETE FROM employee WHERE id=$id";
    mysqli_query($con, $del);
    header('location:viewEmp.php?msg=Employee data delete successfully');
}catch(Exception $e){
    header('location:viewStd.php?err=Employee data not delete successfully');
}
?>