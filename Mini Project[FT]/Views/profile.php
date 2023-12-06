<?php include_once 'db.php'; ?>

<html>
<head>
  <title>User List | Admin</title>
  <style>
      body {
        display: flex;
        justify-content: center;
        align-content: center:
        
      }
      table {
        width: 400px;
        height: 400px;
      }
      
    </style>
</head>
<body>
  <table border="1"
      style="border-collapse: collapse; margin-top: 20px">
    <tr>
      <td colspan="2"><center>Profile</center></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>

      <?php
        $con = getConnection();
        mysqli_num_rows($result);
        
        
        $id = $row['id'];
        $sql = "SELECT * FROM user WHERE id = $id";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          echo "<center>{$row['name']}</center>";

        } else {
          echo "<td>No data found</td>";
        }
      ?>

      </td>
    </tr>
    <tr>
      <td>NAME</td>
      <td>

      </td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td>

      </td>
    </tr>
    <tr>
      <td>USERTYPE</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td colspan="2"><center><a href="adminHome.php">Go Home</a></center></td>
    </tr>
  </table>
</body>
</html>