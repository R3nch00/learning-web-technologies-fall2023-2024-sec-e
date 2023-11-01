<?php
session_start();
require_once "../models/dbfunction.php";

if(isset($_POST['submit'])){
    $result=adduser($_POST) ;
   if($result){
    $_SESSION['message'] = "fail";
    header("location:../views/register.php");
   }
   else{
    header("location:../views/login.php");
   }

}





?>