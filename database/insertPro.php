<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>36</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<h1>Moonlight Clothes Store</h1>
<hr />
</head>
<body>
<div id="demo-container">
  <ul id="simple-menu">
  	<li><a href="allproduct.php" ><span>All Product</span></a></li>
  	<li><a href="product.php" class="current"><span>Product</span></a></li>
	<li><a href="size.php" ><span>Size</span></a></li>
    <li><a href="color.php" ><span>Color</span></a></li>
  	<li><a href="lot&stock.php"  ><span>Lot & Stock </span></a></li>
  	<li><a href="lot.php" ><span>Lot </span></a></li>
    <li><a href="stock.php" ><span>Stock </span></a></li>
  	<li><a href="Customer.php" ><span>Customer</span></a></li>
    <li><a href="Employee.php" ><span>Employee</span></a></li> 
    <li><a href="wholesale.php" ><span>Wholesale Store</span></a></li>
    <li><a href="purchase.php" ><span>Purchase</span></a></li>
    <li><a href="order.php" ><span>Order</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
  </ul>
</div>
<div id="demo-container">
  <ul id="simple-menu">
    <li><a href="searchPro.php"><span>Search Product</span></a></li>
    <li><a href="insertPro.php" class="current"><span>Insert Product</span></a></li>
    <li><a href="deProId.php"><span>Delete Product</span></a></li>
    <li><a href="updatePro.php"><span>Update Product</span></a></li>

  </ul>
</div>
<br>
<?php
    
    require('connect.php');

    $sql = ' SELECT *  FROM products; ';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
<br>
<div id="wrapper"><br><div align="center">
    <h1>Insert Data : Product</h1>
    <form action="insertData2.php" method="post" name="Product">
        <table border="1">
        <tr>
                <td>ProductID : </td>
                <td><input type="text" name="ProductId">
                </td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="ProductName"></td>
            </tr>
            <tr>
            <td>Price : </td>
                <td><input type="text" name="ProductPrice"></td>
            </tr>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <td><button><a href="allproduct.php">Back to Product</a></button></td>
        <input type="submit" value="Insert Data">
</div>
    </form>
</body>

</html>