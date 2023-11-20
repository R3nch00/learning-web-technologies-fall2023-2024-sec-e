<?php
require_once 'db.php';

function searchInfo($empname){
    $conn = connection();
    $sql = "SELECT * FROM employers WHERE  EmployerName like '$empname%' or ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        return $result;
    } else {
        return false;
    }
}

?>