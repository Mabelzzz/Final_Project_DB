<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>36</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<h1>Moonlight Clothes Store</h1>
<hr />
<div id="demo-container">
  <ul id="simple-menu">
    <li><a href="Customer.php" class="current"><span>Customer</span></a></li>
    <li><a href="searchCus.php"><span>Search Customer</span></a></li>
    <li><a href="insertCus.php"><span>Insert Customer</span></a></li>
    <li><a href="deCusId.php"><span>Delete Customer</span></a></li>
    <li><a href="updateCus.php"><span>Update Customer</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
    
  </ul>
</div>


<br><br>
<h1> Customer</h1>
</head>

</body>
</html>
  <?php
  require('connect.php');
  
  
  $sql = ' SELECT * FROM products;';
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]"); 
  
 
  ?>
 <table border="1">
    <tr>
      <th width="70">
        <div align="center">ProductId</div>
      </th>
      <th width="150">
        <div align="center">ProductName</div>
      </th>
      <th width="120">
        <div align="center">ProductColor</div>
      </th>
      <th width="100">
        <div align="center">ProductSize</div>
      </th>
      <th width="100">
        <div align="center">ProductPrice</div>
      </th>
      <th width="100">
        <div align="center">ProductPicture</div>
      </th>
      <th width="100">
        <div align="center">Modify</div>
      </th>
    </tr>
    <?php
    $Id   = $_GET['ProductId'];
    $Name		  = $_GET['ProductName'];
    $Price		  = $_GET['ProductPrice'];
    $Size		  = $_GET['ProductSize'];
    $Color	  = $_GET['ProductColor'];
    $Picture	  = $_GET['ProductPicture'];
    
    ?>
    
      <tr>
        <td>
          <div align="center"><?php echo $Id; ?></div>
        </td>
        <td>
          <div align="center"><?php echo $Name; ?></div>
        </td>
        <td>
          <div align="center"><?php echo $Color; ?></div>
        </td>
        <td>
          <div align="center"><?php echo $Size; ?></div>
        </td>
        <td>
          <div align="center"><?php echo $Price; ?></div>
        </td>
        <td>
          <div align="center"><?php echo $Picture; ?></div>
        </td>


        
        <td><a href='product.php'><?php echo $objResult["ProductPicture"]; ?></a></td>
        <td align="center"><a href="deleteProduct.php?ProductId=<?php echo $objResult["ProductId"]; ?>">Delete</a></td>
      </tr>

  </table>
  <?php
  
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>