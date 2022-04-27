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
  <li><a href="searchPur.php" class="current"><span>Search Purchase Order</span></a></li>
    <li><a href="insertPur.php"><span>Insert Purchase Order</span></a></li>
    <li><a href="dePurId.php"><span>Delete Purchase Order</span></a></li>
    <li><a href="updatePur.php"><span>Update Purchase Order</span></a></li>    
  </ul>
</div>
<br><br>
<div id="wrapper">
<h1>Search Data from Purchase Order</h1>
</head>
<div align="center">

<body>
  <?php
  $keyword  = $_REQUEST['keyword'];
  require('connect.php');
    echo "<br><br>";
  $sql = "SELECT * 
    FROM purchase_order
    WHERE PurchaseId LIKE '%" . $keyword . "%';
    ";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <div align="center">
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead><br>
    <tr>
      <th width="50">
        <div align="center">No</div>
      </th>
      <th width="200">
        <div align="center">Purchase Order ID</div>
      </th>
      <th width="200">
        <div align="center">Purchase Date</div>
      </th>
      <th width="200">
        <div align="center">Customer ID</div>
      </th>
      <th width="100">
        <div align="center">Delete</div>
      </th>
     
      </tr> 
    </thead>
    <tbody> 
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["PurchaseId"]; ?></td>
        <td><?php echo $objResult["PurchaseDate"]; ?></td>
        <td><?php echo $objResult["CustomerId"]; ?></td>
        <td align="center"><a href="deletePurId.php?PurchaseId=<?php echo $objResult["PurchaseId"]; ?>">Delete</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
   </tbody>
  </table><br>
<td><button><a href="purchase.php">Back to Purchase Order</a></button></td> <br><br>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>