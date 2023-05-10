<?php
require('conn.php');

if (isset($_POST["submit"])) {
    if (tambahproduct($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert-product.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert-product.php';
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
            <tr>
                <td><label for="productCode">Product Code </label></td>
                <td>:</td>
                <td><input type="text" name="productCode" id="productCode" required></td>
            </tr>
            <tr>
                <td><label for="productName">Product Name </label></td>
                <td>:</td>
                <td><input type="text" name="productName" id="productName"></td>
            </tr>
            <tr>
                <td><label for="productLine">Product Line </label></td>
                <td>:</td>
                <td><select class="formsize" id="productLine" name="productLine">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="Trains">Trains</option>
                        <option value="Trucks and Buses">Trucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="productScale">Product Scale </label></td>
                <td>:</td>
                <td><input type="text" name="productScale" id="productScale"></td>
            </tr>
            <tr>
                <td><label for="productVendor">Product Vendor </label></td>
                <td>:</td>
                <td><input type="text" name="productVendor" id="productVendor"></td>
            </tr>
            <tr>
                <td><label for="productDescription">Product Description </label></td>
                <td>:</td>
                <td><input type="text" name="productDescription" id="productDescription"></td>
            </tr>
            <tr>
                <td><label for="quantityInStock">Quantity in Stock </label></td>
                <td>:</td>
                <td><input type="text" name="quantityInStock" id="quantityInStock"></td>
            </tr>
            <tr>
                <td><label for="buyPrice">Buy Price </label></td>
                <td>:</td>
                <td><input type="text" name="buyPrice" id="buyPrice"></td>
            </tr>
            <tr>
                <td><label for="MSRP">MSRP </label></td>
                <td>:</td>
                <td><input type="text" name="MSRP" id="MSRP"></td>
            </tr>
            <tr>
                <td colspan="3"><button class="insert-button" type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>