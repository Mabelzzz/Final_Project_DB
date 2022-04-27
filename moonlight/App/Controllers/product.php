<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="base.html; charset=utf-8" />
<title>Product List</title>

</head>

<body>
<table width="600" border="1" align="center" bordercolor="#666666">
  <tr>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสินค้า</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
    <td width="60" align="center" bgcolor="#CCCCCC"><strong>สี</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ไซส์</strong></td>
    <td width="60" align="center" bgcolor="#CCCCCC"><strong>สต็อค</strong></td>
  </tr>
  <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"><!-- product Begin -->
                    
                    <a href="Detail.php">
                        
                       <td><img class="img-responsive" src="ProductPicture" alt="Product 1"></td> 
                        
                    </a>
                    
                    <div class="text"><!-- text Begin -->
                        
                        <h1>
                            <a href="Detail.php">
                                Crop Top
                            </a>
                        </h1>
                        
                        <td><h2 class="price">"ProductPrice"</h2></td>
                        
                        <p class="button">
                            
                            <a href="Detail.php" class="btn btn-default">View Details</a>
                            
                            <a href="Details.php" class="btn btn-primary">
                                
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div><!-- text Finish -->
                    
                </div><!-- product Finish -->
                
            </div><!-- col-sm-4 col-sm-6 single Finish -->
  
  <?php
  //connect db
  include("connect.php");
  $sql = "select * from products order by ProductId";  //เรียกข้อมูลมาแสดงทั้งหมด
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
	echo "<td align='center'><img src='img/" . $row["ProductPicture"] ." ' width='80'></td>";
	echo "<td align='left'>" . $row["ProductName"] . "</td>";
    echo "<td align='left'>" . $row["ProductSize"] . "</td>";
    echo "<td align='left'>" . $row["ProductColor"] . "</td>";
    echo "<td align='center'>" .number_format($row["ProductPrice"],2). "</td>";
    echo "<td align='center'>" .number_format($row["ProductStock"],2). "</td>";
    echo "<td align='center'><a href='product_detail.php?ProductId=$row[ProductId]'>คลิก</a></td>";
	echo "</tr>";
  }
  ?>
</table>