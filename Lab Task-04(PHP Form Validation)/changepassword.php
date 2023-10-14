<!--- mes que un club --->

<html>

<head>
    <title>Change Password Form</title>
</head>

<body>
    <form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    <fieldset>
        <legend>CHANGE PASSOWRD</legend>
        <table>
            <tr>
                <td>Current Password</td>
                <td>:</td>
                <td><input type="password" name="currentpass" value=""></td>
            </tr>
            <tr>
                <td style="color: green;">New Password</td>
                <td>:</td>
                <td><input typr="password" name="newpass" value=""></td>
            </tr>
            <tr>
                <td style="color: red;">Retype New Password </td>
                <td>:</td>
                <td><input type="password" name="retypedPass" value=""></td>
              </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td>
                    <td><input type="submit" name="btn" value="Submit"></td>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</body>

</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['currentpass']) && isset($_POST['newpass']) && isset($_POST['retypedPass'])) {
        $currentPass = $_POST['currentpass'];
        $newPass = $_POST['newpass'];
        $retypedPass = $_POST['retypedPass'];

        if ($currentPass == "" || $newPass == "" || $retypedPass == "") {
            echo "<h2> One or more fields are empty!! </h2>";
        } else if ($currentPass == $newPass) {
            echo "<h2> Validation failed: You have entered an old password! Please enter a new password. </h2>";
        } else if ($currentPass != $newPass) {
            if (strlen($newPass) < 8) {
                echo "<h2>Validation failed: Password must be at least 8 characters long!! </h2>";
            } else if (preg_match("/[@#$%]/", $newPass) === 0) {
                echo "<h2>Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
            } else if ($retypedPass == $newPass) {
                echo "<h1> Validation Successful: You have successfully changed your password. </h1>";
            } else {
                echo "<h2> Validation Failed: Retyped password does not match your new password!! </h2>";
            }
        }
    } else {
        echo "<h2> One or more fields are empty!! </h2>";
    }
}
?>
