<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>       
    <form action="" method="post">
        Name: <br> 
        <input type="text" name="Name" /> <br>
        <input type="submit" name="Submit" value="Submit" />                          
        <hr> 
    </form>

    <?php
 
    if(isset($_POST['Submit'])){
        $name = $_POST['Name'];
        echo "" . htmlspecialchars($name); 
    }
    ?>
</body>
</html>
