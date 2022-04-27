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
  	<li><a href="allproduct.php" class="current"><span>All Product</span></a></li>
  	<li><a href="product.php" ><span>Product</span></a></li>
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
<br><br>
<div id="wrapper">
<h1>All Product</h1>
</head>

</body>
</html>
  <?php
  
  require('connect.php');


  $sql = ' SELECT * FROM products INNER JOIN color_product ON products.ProductId = color_product.ProductId
  INNER JOIN size_product ON products.ProductId = size_product.ProductId '; 
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  echo "<br/>";
  if (mysqli_num_rows($result) > 0) {
    echo 'จำนวนรายการสินค้าทั้งหมด = ';
    echo mysqli_num_rows($result);
    echo "<br/>";
  }else{
    echo "EMPTY DATA";
    }
    echo "<br/>";
  ?>
<table id="keywords" cellspacing="10" cellpadding="0">
    <thead>
    <tr>
      <th width="20"><div align="center"><span>No</span></div></th>
      <th width="20"><div align="center"><span>ProductId</span></div></th>
      <th width="500"><div align="center"><span>Name</span></div></th>
      <th width="270"><div align="center"><span>Color</span></div></th>
      <th width="70"><div align="center"><span>Size</span></div></th>
      <th width="70"><div align="center"><span>Price</span></div></th>
      <th width="70"><div align="center"><span>Picture</span></div></th>
      <th width="50"><div align="center"><span>Delete</span></div></th>
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
        <td><?php echo $objResult["ProductId"]; ?></td>
        <td><?php echo $objResult["ProductName"]; ?></td>
        <td><?php echo $objResult["ProductColor"]; ?></td>
        <td><?php echo $objResult["ProductSize"]; ?></td>
        <td><?php echo $objResult["ProductPrice"]; ?></td>
        <td><a href="detailPro.php?ProductId=<?php echo $objResult["ProductId"];?>&ProductColor=<?php echo $objResult["ProductColor"];?>
        &ProductName=<?php echo $objResult["ProductName"];?>&ProductSize=<?php echo $objResult["ProductSize"];?>  
        &ProductPrice=<?php echo $objResult["ProductPrice"];?>&ProductPicture=<?php echo $objResult["ProductPicture"];?>
        ">View</a></td>
        <td align="center"><a href="deleteProId.php?ProductId=<?php echo $objResult["ProductId"]; ?>"><ul id="simple-menu">Delete</ul></a></td>
        </tr>

    <?php
      $i++;
    }
    ?>
  </table>
  <?php
 
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>