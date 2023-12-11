<?php

  require_once "DB_config.php";
  
  
  function insertprod($product){
    $con = getConnection();

    $sql = "INSERT into beverage VALUES ('', '{$city}', '{$address}', '{$hotline_number}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: ../View/Ad_viewprod.php');
    } else {
      echo "<h2> Database Error!</h2>";
    }

    return $status;
  }
  
  function deleteprod($product){
    $con = getConnection();

    if(isset($_POST['delete'])) {
      $station_id = $_GET['delete'];
      $sql = "DELETE FROM stations WHERE station_id = $station_id";
      $result = mysqli_query($con, $sql);
  
      if($result) {
        echo "<h2>Record deleted successfully</h2>";
        header('location:../View/Ad_viewprod.php');
      } else {
        echo "<h2>Error In Deleting Record: </h2>" . mysqli_error($con);
      }
  
      mysqli_close($con);
      
    }
    return $status;
  
  }
  
  ?>