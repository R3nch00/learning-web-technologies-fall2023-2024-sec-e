<?php

  require_once "DB_config.php";
  

  function alogin($user){
    $con = getConnection();

    $sql = "SELECT * FROM admin WHERE username='{$user['username']}' and password='{$user['password']}' ";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function slogin($user){
    $con = getConnection();

    $sql = "SELECT * FROM seller WHERE username='{$user['username']}' and password='{$user['password']}' ";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function clogin($user){
    $con = getConnection();

    $sql = "SELECT * FROM customer WHERE username='{$user['username']}' and password='{$user['password']}' ";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function aupdate($user){
    $con = getConnection();

    $sql = "UPDATE admin SET password='{$user['password']}' WHERE username='{$user['username']}' ";
    $result = mysqli_query($con, $sql);
    // $user = mysqli_fetch_assoc($result);

    if($result != null){
        return true;
    }else{
        return false;
    }
  }
  function supdate($user){
    $con = getConnection();

    $sql = "UPDATE seller SET password='{$user['password']}' WHERE username='{$user['username']}' ";
    $result = mysqli_query($con, $sql);

   // $user = mysqli_fetch_assoc($result);
    
    if($user != null){
        return true;
    }else{
        return false;
    }
  }
  function cupdate($user){
    $con = getConnection();

    $sql = "UPDATE customer SET password='{$user['password']}' WHERE username='{$user['username']}' ";
    $result = mysqli_query($con, $sql);
    
    //$user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function insertAuser($user){
    $con = getConnection();

    $sql = "INSERT INTO admin VALUES('', '{$user['username']}',  '{$user['password']}', '{$user['email']}','{$user['mobile_no']}','{$user['role']}', '{$user['dob']}','{$user['gender']}',  '{$user['p_pic']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function insertCuser($user){
    $con = getConnection();

    $sql = "INSERT INTO customer VALUES('', '{$user['username']}',  '{$user['password']}', '{$user['email']}','{$user['mobile_no']}','{$user['role']}', '{$user['dob']}','{$user['gender']}',  '{$user['p_pic']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function insertSuser($user){
    $con = getConnection();

    $sql = "INSERT INTO seller VALUES('', '{$user['username']}',  '{$user['password']}', '{$user['email']}','{$user['mobile_no']}','{$user['role']}', '{$user['dob']}','{$user['gender']}',  '{$user['p_pic']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAllSuser(){
    $con = getConnection();

    $sql = "SELECT * FROM seller ";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAllCuser(){
    $con = getConnection();

    $sql = "SELECT * FROM customer ";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function editSuser(){
    $con = getConnection();

    $sql = "UPDATE seller SET('{$user['username']}', '{$user['password']}', '{$user['email']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function editCuser(){
    $con = getConnection();

    $sql = "UPDATE customer SET('{$user['username']}', '{$user['password']}', '{$user['email']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function deleteSuser(){
    $con = getConnection();

    $sql = "DELETE FROM seller WHERE('{$user['id']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function deleteCuser(){
    $con = getConnection();

    $sql = "DELETE FROM customer WHERE('{$user['id']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAuserByID(){
    $con = getConnection();

    $sql = "SELECT * FROM admin WHERE({$user['username']})";
    
    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function getSuserByID(){
    $con = getConnection();

    $sql = "SELECT * FROM seller WHERE({$user['id']})";
    
    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getCuserByID(){
    $con = getConnection();

    $sql = "SELECT * FROM customer WHERE({$user['id']})";
    
    $status = mysqli_query($con, $sql);
    return $status;
  }

?>