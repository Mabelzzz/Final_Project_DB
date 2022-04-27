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
    <li><a href="stock.php" class="current"><span>Stock </span></a></li>
  	<li><a href="Customer.php" ><span>Customer</span></a></li>
    <li><a href="Employee.php" ><span>Employee</span></a></li>
    <li><a href="wholesale.php" ><span>Wholesale Store</span></a></li>
    <li><a href="purchase.php" ><span>Purchase</span></a></li>
    <li><a href="order.php" ><span>Order</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
  </ul>
</div>
</body>

<body>
<div id="demo-container">
<ul id="simple-menu">
    <li><a href="searchStock.php"><span>Search Stock</span></a></li>
    <li><a href="insertStock.php"><span>Insert Stock</span></a></li>
    <li><a href="deStockId.php"><span>Delete Stock</span></a></li>
    <li><a href="updateStock.php"><span>Update Stock</span></a></li>
  </ul>
</div>


<br><br>
<div id="wrapper">
<h1> Lot Products (In stock)</h1>
</head>

</body>
</html>
  <?php
  require('connect.php');
  
  
  $sql = ' SELECT * FROM stock_detail;';
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]"); 
  if (mysqli_num_rows($result) > 0) {
    echo "<br/>";
        echo 'จำนวนรายการสินค้าในแต่ล่ะล็อต = ';
        echo mysqli_num_rows($result);
        echo "<br/>";
    } else {
    echo "EMPTY DATA";
    }
  ?>
 <table id="keywords" cellspacing="0" cellpadding="0">
    <thead><br>
    <tr>
      <th width="100"><div align="center"><span>LotId</span></div></th>
      <th width="150"><div align="center"><span>ProductId</span></div></th>
      <th width="150"><div align="center"><span>StockAmount</span></div></th>
      <th width="100"><div align="center"><span>Delete</span></div></th>
      <th width="100"><div align="center"><span>Update</span></div></th>
     
    </tr> 
    </thead>
    <tbody>
    
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        
        <td><?php echo $objResult["LotId"]; ?></td>
        <td><?php echo $objResult["ProductId"]; ?></td>
        <td><?php echo $objResult["StockAmount"]; ?></td>
        <td><a href="deleteStock.php?LotId=<?php echo $objResult["LotId"];?>&ProductId=<?php echo $objResult["ProductId"];?>">Delete</a></td>
        <td><a href="updateStock.php?LotId=<?php echo $objResult["LotId"];?>&ProductId=<?php echo $objResult["ProductId"];?>">Update</a></td>
        
        
      </tr>
    <?php
      $i++;
    }
    ?>
  </tbody>
  </table>
  <?php
  
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>