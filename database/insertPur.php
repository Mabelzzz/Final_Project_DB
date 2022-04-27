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
  	<li><a href="product.php" ><span>Product</span></a></li>
	<li><a href="size.php" ><span>Size</span></a></li>
    <li><a href="color.php" ><span>Color</span></a></li>
  	<li><a href="lot&stock.php"  ><span>Lot & Stock </span></a></li>
  	<li><a href="lot.php" ><span>Lot </span></a></li>
    <li><a href="stock.php" ><span>Stock </span></a></li>
  	<li><a href="Customer.php" ><span>Customer</span></a></li>
    <li><a href="Employee.php" ><span>Employee</span></a></li> 
    <li><a href="wholesale.php" ><span>Wholesale Store</span></a></li>
    <li><a href="purchase.php" class="current"><span>Purchase</span></a></li>
    <li><a href="order.php" ><span>Order</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
    
  </ul>
</div>

<div id="demo-container">
  <ul id="simple-menu">
  <li><a href="searchPur.php" ><span>Search Purchase Order</span></a></li>
    <li><a href="insertPur.php" class="current"><span>Insert Purchase Order</span></a></li>
    <li><a href="dePurId.php"><span>Delete Purchase Order</span></a></li>
    <li><a href="updatePur.php"><span>Update Purchase Order</span></a></li>    
  </ul>
</div>
<br><br>
<div id="wrapper">
<h1>Insert Data : Purchase Order</h1>
</head>
<div align="center">

    <form action="insertData7.php" method="post" name="Employee">
        <table border="1">
        <tr>
                <td>Purchase Order ID : </td>
                <td><input type="text" name="PurchaseId">
                </td>
            </tr>
            <tr>
                <td>Purchase Date : </td>
                <td><input type="date" name="PurchaseDate"></td>
            </tr>
            <tr>
                <td>Customer ID : </td>
                <td><input type="text" name="CustomerId"></td>
            </tr>
            <tr>         
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <td><button><a href="purchase.php">Back to Purchase Oder</a></button></td>
        <input type="submit" value="Insert Data"> <br>
        
    </form></div>
</body>

</html>