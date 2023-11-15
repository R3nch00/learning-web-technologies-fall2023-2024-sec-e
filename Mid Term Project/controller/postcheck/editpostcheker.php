<?php

session_start();
require_once("../../model/postfunction.php");

if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$_SESSION['update_post'] = $_POST;

//send user data to database
updatepost($_SESSION['post_id'], $_POST);
if($_SESSION['updatepostErr'] =="true"){
    $_SESSION['update_post']['address'] = '';
    $_SESSION['update_post']['housenumber'] = '';
    header("Location: ../../view/host/editpost.php");
   
   }
   else{
    unset($_SESSION['update_post']);
    unset($_SESSION['post_id']);
    header("Location: ../../view/host/viewApost.php");
   }


}




?>