
<?php 
session_start();
require_once("../../model/historydb.php");
require_once("../../controller/historycheck/historyfunction.php");

if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking view</title>
</head>
<body>


<?php 
if(isset( $_SESSION['$review'])){
    echo "Review done";
    unset($_SESSION['$review']);
}
showinformation_history_review_host($_SESSION['afterlogin']['username']);





?>
    
</body>
</html>