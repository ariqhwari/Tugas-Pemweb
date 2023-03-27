<?php
require('conn.php');

$customerNumber = $_GET["customerNumber"];
$dataa = query("SELECT * FROM customers WHERE customerNumber = $customerNumber")[0];
if (isset($_POST["submit"])) {
    if (updatecustomer($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href = 'index.php';
            </script> 
    ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="desaign.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Tilt+Warp&display=swap" rel="stylesheet">

    <title>Database</title>
</head>

<body>
    <div class="Navbar">
        <div class="kiri">
            <h1>Classic Models</h1>
        </div>
        <div class="kanan">
            <a href="product.php" id="#product">Product</a>
            <a href="index.php" id="#customers">Customers</a>
        </div>
    </div>

    <form action="" method="post">
        <table class="insert" cellspacing="1" cellpadding="4">
            <input type="hidden" name="customerNumber" id="customerNumber" value="<?php echo $dataa["customerNumber"]; ?>">
            <tr>
                <td><label for="customerName">Customer Name </label></td>
                <td>:</td>
                <td><input type="text" name="customerName" id="customerName" value="<?php echo $dataa["customerName"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="contactLastName">Customer Last Name </label></td>
                <td>:</td>
                <td><input type="text" name="contactLastName" id="contactLastName" value="<?php echo $dataa["contactLastName"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="contactFirstName">Customer First Name </label></td>
                <td>:</td>
                <td><input type="text" name="contactFirstName" id="contactFirstName" value="<?php echo $dataa["contactFirstName"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="phone">Phone </label></td>
                <td>:</td>
                <td><input type="text" name="phone" id="phone" value="<?php echo $dataa["phone"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="addressLine1">Address Line 1 </label></td>
                <td>:</td>
                <td><input type="text" name="addressLine1" id="addressLine1" value="<?php echo $dataa["addressLine1"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="addressLine2">Address Line 2 </label></td>
                <td>:</td>
                <td><input type="text" name="addressLine2" id="addressLine2" value="<?php echo $dataa["addressLine2"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="city">City </label></td>
                <td>:</td>
                <td><input type="text" name="city" id="city" value="<?php echo $dataa["city"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="state">State </label></td>
                <td>:</td>
                <td><input type="text" name="state" id="state" value="<?php echo $dataa["state"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="postalCode">Postal Code </label></td>
                <td>:</td>
                <td><input type="text" name="postalCode" id="postalCode" value="<?php echo $dataa["postalCode"]; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="country">Country </label></td>
                <td>:</td>
                <td><input type="text" name="country" id="country" value="<?php echo $dataa["country"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="salesRepEmployeeNumber">Sales Rep Employee Number </label></td>
                <td>:</td>
                <td><select class="formsize" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber" value="<?php echo $dataa["salesRepEmployeeNumber"]; ?>">
                        <option value="1002">1002 - Murphy</option>
                        <option value="1056">1056 - Patterson</option>
                        <option value="1076">1076 - Firrelli</option>
                        <option value="1088">1088 - Patterson</option>
                        <option value="1102">1102 - Bondur</option>
                        <option value="1143">1143 - Bow</option>
                        <option value="1165">1165 - Jennings</option>
                        <option value="1166">1166 - Thompson</option>
                        <option value="1188">1188 - Firrelli</option>
                        <option value="1286">1286 - Tseng</option>
                        <option value="1323">1323 - Vanauf</option>
                        <option value="1337">1337 - Bondur</option>
                        <option value="1370">1370 - Hernandez</option>
                        <option value="1401">1401 - Castillo</option>
                        <option value="1501">1501 - Bott</option>
                        <option value="1504">1504 - Jones</option>
                        <option value="1611">1611 - Fixter</option>
                        <option value="1612">1612 - Marsh</option>
                        <option value="1619">1619 - King</option>
                        <option value="1621">1621 - Nishi</option>
                        <option value="1625">1625 - Kato</option>
                        <option value="1702">1702 - Gerard</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="creditLimit">Credit Limit </label></td>
                <td>:</td>
                <td><input type="text" name="creditLimit" id="creditLimit" value="<?php echo $dataa["creditLimit"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"><button class="insert-button" type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>