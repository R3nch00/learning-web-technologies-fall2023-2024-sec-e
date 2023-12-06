<?php

  session_start();
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  //$pattern = "\b([1-9]|[1-9][0-9]|100)\d";

  if($userid == "") {
    echo "<h2> Validation failed: User ID missing! </h2>";
  } else if($password == "") {
    echo "<h2> Validation failed: Password is missing! </h2>";
  }


  
  else if(strlen($password)<8) {
      echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
  } else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1)) {
      echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
  } else {

      //echo "<h1> Validation Successful!  </h1>";

      if(['usertype'] == 'admin') {
        header('location: ../views/adminHome.php');
      } else {
        $_SESSION['user'];

        //setcookie('user', , time()+3600 , '/')
        
        header('location: ../views/userHome.php');
      }
  }

?>