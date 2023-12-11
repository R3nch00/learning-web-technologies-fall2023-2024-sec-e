
<?php
    

    include '../Controller/adminProfilecheck.php';

    if(!isset($_COOKIE['status'])){
        header('location: adminLogin.php?err=login_req');
    }
?>
<html>
    <head>
        <title>Admin Homepage</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">
                
                
                <b><a target="_self" href="adminProfile.php">Profile</a> | </b>
                
                <b><a target="_self" href="adminLogout.php">Logout</a></b>

            </div>

            <div align="left">
                <img src="Pictures/AsianMART.png" width="100px" height="90px">
            </div>

            <center><h1>Home page</h1></center>

            <center><p>Welcome <?php echo $nameOfUser;?></p></center>
               
                <form>
                    
                    <table border="0" align="center" width="75%">
                        <tr>
                            <td align="center"><img src="Pictures/prdctlogo.png" width="200px" height="200px"></td>
                            <td align="center"><img src="Pictures/saleslogo.png" width="200px" height="200px"></td>
                            
                        </tr>
                        <tr>
                            <td align="center"><a href="Ad_viewprod.php">Product Details</a></td>
                            <td align="center"><a href="adminSales.php">Sales Details</a> </td>
                        </tr>
                        <tr>
                            <td align="center"><img src="Pictures/seller.png" width="200px" height="200px"></td>
                            <td align="center"><img src="Pictures/seller.png" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td align="center"><a href="adminSeller.php">Seller Details</a> </td>
                            <td align="center"><a href="adminCustomer.php">Customer Details</a> </td>
                        </tr>
                    </table>                                            
                    </form>
        </fieldset>
    </body>
</html>