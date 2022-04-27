
<html>
<head><?php include('base.html'); ?> </head>

<body>
  <?php
  
  require('connect.php');
  

  echo Products;
  $sql = ' SELECT * FROM products NATURAL JOIN color_product NATURAL JOIN size_product NATURAL JOIN stock_detail
  WHERE products.ProductId = color_product.ProductId = size_product.ProductId = stock_detail.ProductId' ;
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  
  if (mysqli_num_rows($result) > 0) {
    echo 'จำนวนรายการสินค้าทั้งหมด = ';
    echo mysqli_num_rows($result);
  }else{
    echo "EMPTY DATA";
    }

  ?>

  <table border="1">
    <tr>
    <th width="50">
        <div align="center">No</div>
      </th>
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
      <th width="100">StockAmount</div>
      </th>
      <th width="100">
        <div align="center">ProductPicture</div>
      </th>
      <th width="100">
        <div align="center">Modify</div>
      </th>
    </tr>
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
        <td><?php echo $objResult["StockAmount"]; ?></td>
        <td><a href='product.php'><?php echo $objResult["ProductPicture"]; ?></a></td>
        <td align="center"><a href="deleteProduct.php?ProductId=<?php echo $objResult["ProductId"]; ?>">Delete</a></td>
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