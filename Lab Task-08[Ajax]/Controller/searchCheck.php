<?php
require_once '../model/dbfunction.php';

    $username = $_POST['ename'];
    $result = searchInfo($username);
 
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "EmployerName: ".$row['EmployerName']."<br>";
            echo "CompanyName: ".$row['CompanyName']."<br>";
            echo "ContactNo: ".$row['ContactNo']."<br>";
            
        }
    }
     
    else {
        echo "No User Found";
    }
  
  

?>