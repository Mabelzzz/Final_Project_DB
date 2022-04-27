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
  	<li><a href="lot&stock.php" ><span>Lot & Stock </span></a></li>
  	<li><a href="lot.php" ><span>Lot </span></a></li>
    <li><a href="stock.php" ><span>Stock </span></a></li>
  	<li><a href="Customer.php" class="current"><span>Customer</span></a></li>
    <li><a href="Employee.php" ><span>Employee</span></a></li>
    <li><a href="wholesale.php" ><span>Wholesale Store</span></a></li>
    <li><a href="purchase.php" ><span>Purchase</span></a></li>
    <li><a href="order.php" ><span>Order</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li> 
  </ul>
</div>
<div id="demo-container">
  <ul id="simple-menu">
    <li><a href="searchCus.php"><span>Search Customer</span></a></li>
    <li><a href="insertCus.php"><span>Insert Customer</span></a></li>
    <li><a href="deCusId.php"><span>Delete Customer</span></a></li>
    <li><a href="updateCus.php" class="current"><span>Update Customer</span></a></li>  
  </ul>
</div>


<br><br>
<div id="wrapper"> <div align="center">
<h1> Update Data : Customer</h1>
</head>

</body>
</html>

<?php
require('connect.php');
echo "<br>";

$update_ID   = $_REQUEST['CustomerId'];
$CustomerId = $update_ID;
$First		 = $_REQUEST['CustomerFirstname'];
$Last		  = $_REQUEST['CustomerLastname'];
$Address	= $_REQUEST['CustomerAddress'];
$Tel	  = $_REQUEST['CustomerTel'];

$sql = " UPDATE customer SET CustomerFirstname = '" . $First . "',  
    CustomerLastname = '" . $Last . "',
    CustomerAddress = '" . $Address . "', 
	  CustomerTel = '" . $Tel . "' WHERE CustomerId = " . $CustomerId . " ; ";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "<br>";
	echo "Record " . $update_ID . " was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";

?></div></div>