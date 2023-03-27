<?php
require('conn.php');
$select = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Link Css -->
    <link rel="stylesheet" href="desaign.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Tilt+Warp&display=swap"
        rel="stylesheet">

    <!-- Tittle -->
    <title>database</title>
</head>

<body>
    <!-- Navbar -->
    <div class="Navbar">
        <div class="kiri">
            <h1>Classic Models</h1>
        </div>
        <div class="kanan">
            <a href="#product" id="#product">Product</a>
            <a href="index.php" id="#customers">Customers</a>
        </div>
    </div>

    <!-- Database -->
    <div class="database">
        <table border="2" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="11">Products</th>
                </tr>
                <tr class="button-insert">
                    <th colspan="11">
                        <button class="home-button"><a href="insert-product.php" id="#insert">Insert</a></button>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Quantity InStock</th>
                    <th>Buy Price</th>
                    <th>MSRP</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($select as $row) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["productCode"] ?></td>
                    <td><?php echo $row["productName"] ?></td>
                    <td><?php echo $row["productLine"] ?></td>
                    <td><?php echo $row["productScale"] ?></td>
                    <td><?php echo $row["productVendor"] ?></td>
                    <td><?php echo $row["productDescription"] ?></td>
                    <td><?php echo $row["quantityInStock"] ?></td>
                    <td><?php echo $row["buyPrice"] ?></td>
                    <td><?php echo $row["MSRP"] ?></td>
                    <td>
                        <a href="update-product.php?productCode=<?php echo $row["productCode"]; ?>"
                            class="buttons">Update</a>
                        <form method="POST" action="delete-product.php">
                            <input type="hidden" name="productCode" value="<?php echo $row['productCode']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>