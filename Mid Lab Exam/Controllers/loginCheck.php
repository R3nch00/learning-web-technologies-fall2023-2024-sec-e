<?php

session_start();
require_once "../models/dbfunction.php";

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $password=$_POST['password'];
    
    $result=checklogin($id, $password);
   if($result!=false){
    $_SESSION['name']=$result['name'];
    $_SESSION['id']=$result['id'];
    $_SESSION['user']=$result['user'];
    $_SESSION['flag'] = 'true';
   }
   if($result==false){
    $_SESSION['message'] = "fail";
    header("location:../views/login.php");
   }
   else{
    if($result['user']=="admin"){
        
       
       header("location:../views/adminHome.php");
    }
    else{
       
        header("location:../views/userHome.php");
    }
   }
  
}














?>