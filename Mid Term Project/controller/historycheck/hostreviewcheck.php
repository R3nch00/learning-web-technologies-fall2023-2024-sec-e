<?php 


session_start();
require_once("../../model/historydb.php");
if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}

if(isset($_POST['submit'])){
    $history_id=$_POST['history_id'];
    $review=$_POST['host_review'];

   if(update_host_review($history_id,$review)){
        header("Location: ../../view/guest/showhistory.php");
        $_SESSION['$review']='true';
    } else {
        echo "Error";
   


   }

    
}











?>