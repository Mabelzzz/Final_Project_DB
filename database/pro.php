
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
    <li><a href="allproduct.php" class="current"><span>Product</span></a></li>
    <li><a href="searchPro.php"><span>Search Product</span></a></li>
    <li><a href="insertPro.php"><span>Insert Product</span></a></li>
    <li><a href="deProId.php"><span>Delete Product</span></a></li>
    <li><a href="updatePro.php"><span>Update Product</span></a></li>
    <li><a href="/moonlight/public/index.php"><span>Moonlight Clothes Store</span></a></li>
    
  </ul>
</div>
<br><br>
<div id="wrapper">
<h1> Product</h1>
</head>

<?php
  $Id  = $_GET['ProductId'];
  $Name  = $_GET['ProductName'];
  $Color  = $_GET['ProductColor'];
  $Size  = $_GET['ProductSize'];
  $Price  = $_GET['ProductPrice'];
  $Picture  = $_GET['ProductPicture'];
  require('connect.php');
    echo "<br><br>";
    echo "$Id";
    echo "$Color $Name $Color $Size $Price $Picture";
  $sql = ' SELECT * FROM products NATURAL JOIN color_product NATURAL JOIN size_product NATURAL JOIN stock_detail
  WHERE products.ProductId' ;
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $result = mysqli_query($conn, $sql);
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  echo "<br/>";
  
  ?>
<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="<?php echo $Picture; ?>"; alt="green apple slice">
			</div>
			<div class="photo-album">
				<ul>
					<li><img src="<?php echo $Picture; ?>"; alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			TBH <span> <?php echo $Price; ?></span>
		</div>
		<div class="variant">
			<h3>SELECT A COLOR</h3>
			<ul>
				<li><img src="<?php echo $Picture; ?>"; alt="green apple"></li>
				<li><img src="<?php echo $Picture; ?>";  alt="yellow apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
			</ul>
		</div>
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutricious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lowest risk of diabetes</li>
			</ul>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>

<footer>
	<p>Design from <a href="https://dribbble.com/shots/5216438-Daily-UI-012">dribbble shot</a> of <a href="https://dribbble.com/rodrigorramos">Rodrigo Ramos</a></p>
</footer>

</body>
</html>

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
  
  
 