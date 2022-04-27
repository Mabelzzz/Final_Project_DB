<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <?php
    require('connect.php');

    $sql = ' SELECT *  FROM employee; ';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <h2>Delete Data : Employee</h2>
    <form action="deleteEmp.php" method="post" name="Employee">
        <table border="1">
            <tr>
                <td>EmpId : </td>
                <td><select name="EmpId">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["EmpId"]; ?>><?php echo $objResult["EmpId"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Delete Data">
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    echo "<br><br>";
    echo "--- END ---";
    ?>
</body>

</html>