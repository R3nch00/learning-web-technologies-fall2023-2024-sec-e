<?php 

    session_start();

    $currentPass = $_POST['currentPass'];
    $newPass = $_POST['newPass'];
	  $retypedPass = $_POST['retypedPass'];

   
    if($currentPass=="" || $newPass=="" || $retypedPass==""){
        echo "<h2> One or more fields are empty! </h2>";
    }

    else if($currentPass == $newPass ){
        echo "<h2> Validation failed: You have entered an old password! Please enter a new password. </h2>";
    }

    else if($currentPass != $newPass){
        if(strlen($newPass)<8){
            echo "<h2>Validation failed: Password must be at least 8 characters long! </h2>";
        }
        else if((substr_count($newPass,'@')<1) && (substr_count($newPass,'#')<1) && (substr_count($newPass,'$')<1) && (substr_count($newPass,'%')<1)){
            echo "<h2>Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
        }
        else if($retypedPass == $newPass){
            echo "<h1> Validation Successful: You have successfully changed your password. </h1>";
        } 
        else {
            echo "<h2> Validation Failed: Retyped password do not match with your new password! </h2>";
        }
    }
    
?>