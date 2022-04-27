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
  	<li><a href="lot.php" class="current"><span>Lot </span></a></li>
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
    <li><a href="searchLot.php"><span>Search Lot</span></a></li>
    <li><a href="insertLot.php" class="current"><span>Insert Lot</span></a></li>
    <li><a href="deLotId.php" ><span>Delete Lot</span></a></li>
    <li><a href="updateLot.php"><span>Update Lot</span></a></li>  
  </ul>
</div>
<br><br>
<div id="wrapper">
<h1>Insert Data : Lot Products</h1>
</head>
<div align="center">

    <form action="insertData5.php" method="post" name="LotId">
        <table border="1">
        <tr>
                <td>Lot ID : </td>
                <td><input type="text" name="LotId">
                </td>
            </tr>
            <tr>
                <td>Lot Date : </td>
                <td><input type="date" name="LotDate"></td>
            </tr>
            <tr>
                <td>Store ID : </td>
                <td><input type="text" name="StoreId"></td>
            </tr>
            <tr>
            <td>Emplpyee ID : </td>
                <td><input type="text" name="EmpId"></td>
            </tr>
            <tr>          
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <td><button><a href="lot.php">Back to Lot</a></button></td>
        <input type="submit" value="Insert Data"> <br>
        
    </form></div>
</body>

</html>