<?php 
$selected_degrees = [];
if(isset($_POST['Degree'])){
    $selected_degrees = $_POST['Degree'];
}
?>
<html>
<head>
</head>
<body>
    <form action="" method="post">
        <fieldset style="width: 400px;">
            <legend>Degree</legend>

            <input type="checkbox" name="Degree[]" value="SSC" <?php if(in_array('SSC', $selected_degrees)) echo 'checked'; ?> /> SSC
            <input type="checkbox" name="Degree[]" value="HSC" <?php if(in_array('HSC', $selected_degrees)) echo 'checked'; ?> /> HSC
            <input type="checkbox" name="Degree[]" value="BSc" <?php if(in_array('BSc', $selected_degrees)) echo 'checked'; ?> /> BSc
            <input type="checkbox" name="Degree[]" value="MSc" <?php if(in_array('MSc', $selected_degrees)) echo 'checked'; ?> /> MSc 
            <br>
            <hr> 
            <input type="submit" name="Submit" value="Submit">
        </fieldset>
        <br>
    </form>
</body>
</html>
