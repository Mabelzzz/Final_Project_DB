<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php
  require('connect.php');
  
  echo Employee; 
  $sql = ' SELECT * FROM employee;';
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  
  
  $result = mysqli_query($conn, $sql);
  
  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="2">
    <tr>
      <th width="50">
        <div align="center">Id</div>
      </th>
      <th width="150">
        <div align="center">Firstname</div>
      </th>
      <th width="150">
        <div align="center">Lastname</div>
      </th>
      <th width="570">
        <div align="center">Address</div>
      </th>
      <th width="100">
        <div align="center">Tel</div>
      </th>
      <th width="200">
        <div align="center">Position</div>
      </th>
      <th width="100">
        <div align="center">Salary</div>
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
        
        <td><?php echo $objResult["EmpId"]; ?></td>
        <td><?php echo $objResult["EmpFirstname"]; ?></td>
        <td><?php echo $objResult["EmpLastname"]; ?></td>
        <td><?php echo $objResult["EmpAddress"]; ?></td>
        <td><?php echo $objResult["EmpTel"]; ?></td>
        <td><?php echo $objResult["EmpPosition"]; ?></td>
        <td><?php echo $objResult["EmpSalary"]; ?></td>
        <td align="center"><a href="deleteEmp.php?EmpId=<?php echo $objResult["EmpId"]; ?>">Delete</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  if (mysqli_num_rows($result) > 0) {
        echo 'จำนวนพนักงานทั้งหมด = ';
        echo mysqli_num_rows($result);
    } else {
    echo "EMPTY DATA";
    }
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>