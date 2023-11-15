<?php

require_once("db.php");

function adduser($user,$table){

    if(str_starts_with($user['username'],"Gu-")){
      $username=str_replace("Gu-","",$user['username']);
    } else if( str_starts_with($user['username'],"Ho-")){
        $username=str_replace("Ho-","",$user['username']);
    } else if( str_starts_with($user['username'],"Ad-")){
        $username=str_replace("Ad-","",$user['username']);
    }
    $password=$user['password'];
    $email=$user['email'];
    $phone=$user['phone'];
    $address=$user['address'];
    $name= $user['name'];
    $gender=$user['gender'];

   
    $conn=connection("localhost","root","","payin-guest-project");
    $query= "select phone from $table where  phone ='$phone'";
    $result = mysqli_query($conn, $query);
    $query2= "select username from $table where username='$username'";
    $result2=mysqli_query($conn,$query2);
    
    if( mysqli_num_rows($result)>0){
        $_SESSION['phoneErr']="true";
    }
    else if( mysqli_num_rows($result2)>0){
        $_SESSION['usernameErr']="true";

    }
    else{
        /*insert into name,email,phone,address,gender,username,password*/
        $query3=" insert into $table values('$name','$email','$phone','$address','$gender','$username','$password')";
        $result3=mysqli_query($conn,$query3);
        if($result3){
            $_SESSION['insert']="true";
        }
        
    }
 

}

function checklogin($username,$password,$table){
    $conn=connection("localhost","root","","payin-guest-project");
    $query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        // User exists
        $data=mysqli_fetch_assoc($result);
        $_SESSION['afterlogin']=$data;
        if($table=="guestregistation"){
            $_SESSION['guestrole']="guest";
        }
        else if($table=="hostregistation"){
            $_SESSION['hostrole']="host";
        }
        else if($table=="admin"){
            $_SESSION['adminrole']="admin";
        }
        return true;
    }  
    else {
        // User doesn't exist, 
        return false;
    }

}

function forgetpassword($username,$email,$phone,$table){
    $conn=connection("localhost","root","","payin-guest-project");
    $query = "SELECT * FROM $table WHERE username='$username' AND email='$email' AND phone='$phone'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
   
        return true;
    }  
    else {
       
        return false;
    }

}

function getpassword($username,$table){
    $conn=connection("localhost","root","","payin-guest-project");
    $query = "SELECT password FROM $table WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $data=mysqli_fetch_assoc($result);
        return $data;
    }  
   

}








?>