<?php

session_start();
if(isset($_SESSION['loginApprove'])){
  setcookie("auto",true,time()-180,"/","");
    unset($_SESSION['loginApprove']);
    unset($_SESSION['afterlogin']);
        header("Location: ../view/login.php");
  }







?>




