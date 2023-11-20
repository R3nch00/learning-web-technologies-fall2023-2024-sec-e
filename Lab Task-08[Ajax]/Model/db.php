<?php

$dbhost = "localhost";
$dbname = "lab8";
$dbuser = "root";
$dbpass = "";

function connection(){
    global $dbhost;
    global $dbname;
    global $dbpass;
    global $dbuser;
    return   mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}


?>