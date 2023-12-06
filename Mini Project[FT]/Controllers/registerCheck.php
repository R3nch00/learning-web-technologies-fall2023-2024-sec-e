<?php

    session_start();

    //require_once '../models/userModel.php';

    require_once '../models/db.php';

    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];

    $user = ['name' => $name, 'email' => $email, 'userid' => $userid, 'password' => $password, 'usertype' => $usertype];


    if ($userid == "" || $password == "" || $cPassword == "" || $name == "" || $email == "" || $usertype == "") {
        header('location: ../views/register.php?err=null');

    } else {
        
        //function validateRegister($userid, $password, $cPassword, $name, $email, $usertype);

        $con = getConnection();
        if($con === false){
            die("ERROR: Could not connect." . mysqli_connect_error());
          }

        $sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        $status = mysqli_query($con, $sql);

        if($status) {
            $_SESSION['user'] = $user;
            header('location: login.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }

?>