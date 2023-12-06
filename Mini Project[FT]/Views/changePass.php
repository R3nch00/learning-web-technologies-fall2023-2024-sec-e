<html>

<head>
  <title>Change Password Form</title>
  <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center;
      }
      table {
        width: 400px;
      }
      fieldset {
        margin-top: 200px;
        width: 400px;
      }
    </style>
</head>

<body>
  <form method="post" action="changePassCheck.php" >

    <fieldset>
      <legend>CHANGE PASSWORD</legend>
      <table>
        <tr>
          <td>Current Password </td>
          <td>:</td>
          <td><input type="password" name="currentPass" value=""></td>
        </tr>
        <tr>
          <td style="color: green;">New Password </td>
          <td>:</td>
          <td><input type="password" name="newPass" value=""></td>
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
