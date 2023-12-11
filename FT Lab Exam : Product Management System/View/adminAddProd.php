
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css" />
      
 
        <title>Add Product</title>
    </head>
    <body>
        <fieldset>
           
           
            <div align="right">               
            <b><a target="_self" href="adminHome.php">Home</a> |</b>
            
            <b><a target="_self" href="adminLogout.php">Logout</a></b>
            </div>

            <div align="left">
                <img src="Pictures/a.png" width="80px" height="60px">
            </div>

            <center><h1>Product details</h1></center>

<body>
    <table>
        
                <form method="post" action="../Controller/adminAddProdCheck.php" >

                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="category">
                                <option value="beverage">Beverage</option>
                                <option value="meat">Meat</option>
                                <option value="cosmetic">Cosmetic</option>
                            </select>
                        </td>
                    </tr>          
                    <tr>
                        <td>Product name </td>
                        <td><input type="text" size="30" name="name" value="" placeholder="Enter product name"></td>
                        
                    </tr>
                    <tr>
                        <td>Details </td>
                        <td><input type="text" size="30" name="details" value="" placeholder="Details"></td>
                        
                    </tr>
                    <tr>
                        <td>Quantity </td>
                        <td><input type="text" size="11" name="quantity" value="" placeholder="Quantity"></td>
                        
                    </tr>
                    <tr>
                        <td>Price </td>
                        <td><input type="text" size="30" name="price" value="" placeholder="Price"></td>
                        
                    </tr>
                    <tr>
                        <td>Status </td>
                        <td><input type="text" size="30" name="status" value="" placeholder="Status"></td>
                        
                    </tr>
                    <tr>
                        <td>Enter your product image</td>
                        <td><input type="file" id="p_pic" name="img" accept="image/*"></td>
                        
                    </tr>
                    <tr>
    
						<td align="center"colspan="2"><br><input type="submit" value="Submit"><br>
                        <?php 

                            if(isset($_GET['err'])){
                            
                            if($_GET['err'] == 'null'){
                                // alertMSg("null");
                                echo "Please fill all the requirement";
                            }
                            elseif($_GET['err']=='database_error'){
                                echo "This username is already taken!";;
                            }
                            }
                        ?>
                        
					</tr>
            </fieldset>
        </form>
    </table>

</body>

</html>