<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN'S DASHBOARD</title>
</head>
<body>

 <br>

 <fieldset style="width:25%">
    <legend>Search Employee </legend>

    EmployerName:
        <input type="text" name="ename" id="ename" placeholder="input username " maxlength="3">
        <input type="button" name="click" value="Click" onclick="ajax()"/>
   
   <div id="show"></div>
 </fieldset>


  
    <script type="text/javascript" src="../JavaScript/script.js"></script>
</body>
</html>