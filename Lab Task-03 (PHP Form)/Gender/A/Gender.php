<?php 
    if(isset($_POST['Gender'])){
        $gender = $_POST['gender'];
        echo "Selected Gender: " . $gender;
    } else {
        echo "Gender not selected";
    }
?>
