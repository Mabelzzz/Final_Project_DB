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
	<li><a href="size.php"  ><span>Size</span></a></li>
    <li><a href="color.php" class="current"><span>Color</span></a></li>
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
  <li><a href="searchCol.php" class="current"><span>Search Color</span></a></li>
    <li><a href="insertCol.php"><span>Insert Color</span></a></li>
    <li><a href="deCol.php"><span>Delete Color</span></a></li>
    <li><a href="updateCol.php"><span>Update Color</span></a></li>
  </ul>
</div><br>
<div id="wrapper">
    <h1>Search Data from Product Color</h1>
    <div align="center">
    <form action="searchData4.php" method="GET" name="ProductColor">
        
            <tr>
                <td>Product Color keyword : </td>
                <td><input type="text" name="keyword"></td>
            </tr>
        <br>
        <br><td><button><a href="color.php">Back to Color</a></button></td>
        
        <input type="submit" value="Search Data">
        </form>
        <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
    ?></div></div>
</body>
