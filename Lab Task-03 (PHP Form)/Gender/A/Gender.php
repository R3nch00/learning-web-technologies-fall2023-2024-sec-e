<?php 
    if(isset($_POST['Gender'])){
        $gender = $_POST['Gender'];
        echo "Selected Gender: " . $gender;
    } else {
        echo "Gender not selected";
    }
?>
