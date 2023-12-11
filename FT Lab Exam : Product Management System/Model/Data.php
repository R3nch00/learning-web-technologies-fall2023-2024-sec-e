<?php

require_once "DB_config.php";

session_start();

$id=$_SESSION['user']['username'];


function getAuserByS(){
    $con = getConnection();

    $sql = "SELECT * FROM admin WHERE username=$id";
    
    $status = mysqli_query($con, $sql);
    $query= mysql_fetch_array($sql);
    $rs = get($query);
    return $rs[0]; //to pass only 1 instance
    
  }


?>