<?php
session_start();
require_once("../../model/postfunction.php");
require_once("../../controller/postcheck/viewApostfunction.php");

if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view post</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="showallpost" value="Show All Posts">
        <input type="submit" name="showmypost" value="Show My Posts">
    
        <a href="../../view/host/hostprofile.php">Back</a>
    </form>

    <?php
    if(isset($_POST['showmypost'])){
        $data1 = viewpost($_SESSION['afterlogin']['username']);
        displayUserposts($data1);
    } else {
        $data = viewallpost();
        displayAllPosts($data);
    }
       
      

    ?>
</body>
</html>
