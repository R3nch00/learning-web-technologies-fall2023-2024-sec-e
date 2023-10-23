<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
  header('location: Login.php?err=null');
} else if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
  $_SESSION['status'] = "true";
  header('location: Dashboard.php');
} else {
  echo "invalid user";
}

?>
