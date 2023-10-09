<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>       
    <form action="" method="post">
        Name: <br> 
        <input type="text" name="Name" value="<?php echo isset($_POST['Name']) ? htmlspecialchars($_POST['Name']) : ''; ?>" /> <br>
        <input type="submit" name="Submit" value="Submit" />                          
        <hr> 
    </form>

    <?php
    if(isset($_POST['Submit'])){
        $Name = isset($_POST['Name']) ? htmlspecialchars($_POST['Name']) : '';
        echo "" . $Name ;
    }
    ?>
</body>
</html>