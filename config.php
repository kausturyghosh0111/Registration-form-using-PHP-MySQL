<?php
    try{
        $con=mysqli_connect("localhost", "root", "", "empPractice");
    }catch(Exception $e){
        exit();
        // echo $e->getMessage();
        // // echo $e;
    }
?>