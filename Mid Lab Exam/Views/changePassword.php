<html>

<head>
  <title>Change Password Form</title>
  <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center:
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
        <legend><b>CHANGE PASSWORD</b></legend>
    
        Current Password<br/>
        <input type="password" name="currentPass" value=""><br/>
      
        New Password<br/>
        <input type="password" name="newPass" value=""><br/>

        Retype New Password<br/> 
        <input type="password" name="retypedPass" value=""><br/>
   
      <hr/>
        
      <input type="button" name="btn" value="Change"></td>
      <a href="adminHome.php">Home</a> 
    </fieldset>
  </form>
</body>

</html>
