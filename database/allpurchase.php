
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
    <li><a href="searchPro.php"><span>Search Product</span></a></li>
    <li><a href="insertPro.php"><span>Insert Product</span></a></li>
    <li><a href="deProId.php"><span>Delete Product</span></a></li>
    <li><a href="updatePro.php"><span>Update Product</span></a></li>
  </ul>
</div>
<br><br>
<div id="wrapper">
<h1> Product</h1>
</head>

<?php
  $Pur  = $_GET['PurchaseId'];
  $Date  = $_GET['PurchaseDate'];
  $Cus  = $_GET['CustomerId'];
 
  require('connect.php');
    echo "<br><br>";
    echo "$Pur";
    echo " $Cus ";

  $sql = ' SELECT * FROM purchase_order NATURAL JOIN order 
  WHERE  purchase_order.PurchaseId'  ;
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
 
  
  ?>
<section class="product">
  
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
				
				</div>
				<img src="<?php echo $Picture; ?>"; >
			</div>
			
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1><?php echo $Cus ; ?></h1>
			<span><?php echo $Id; ?></span>
		</div>
		<div class="price">
			TBH <span> <?php echo $Price; ?></span>
		</div>
		<div class="description">
			<h3> <?php echo "Size : $Size"; ?></h3>
			
		</div>
		<button class="buy--btn"><?php echo $Color; ?></button>
	</div>
</section>

<footer>
	<p><a href="https://dribbble.com/shots/5216438-Daily-UI-012">Product</a> </p>
</footer>

</body>
</html>

</head>


 