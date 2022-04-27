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
	<li><a href="size.php" class="current"><span>Size</span></a></li>
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
  <li><a href="searchSize.php"><span>Search Size</span></a></li>
    <li><a href="insertSize.php" ><span>Insert Size</span></a></li>
    <li><a href="deSize.php" class="current"><span>Delete Size</span></a></li>
    <li><a href="updateSize.php"><span>Update Size</span></a></li>
  </ul>
</div>


<br><br>
<div id="wrapper">
<h1> Delete Data : Product Size</h1>
</head>

<div align="center">
<?php

$delete_ID = $_REQUEST['ProductId'];
$delete_Size = $_REQUEST['ProductSize'];

require('connect.php');
echo "<br>";

$sql = ' DELETE FROM size_product WHERE ProductId = ' . $delete_ID . ', ProductSize = ' . $delete_Size . '; ';
$conn = mysqli_connect($servername, $username, $password, $dbname);

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Successful record " . $delete_ID .  $delete_Size ." was Deleted.";
}else{
    echo "Error : Delete";
}


mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?></div>
</body>
</html>