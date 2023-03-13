<?php
require('conn.php');
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
    <h1>Database classic models</h1>
    <div class="database">
        <table border="2" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="12">Customer</th>
            </tr>
            <tr>
                <th>No</th>
                <th>customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Rep Employee Number</th>
                <th>Credit Limit</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["customerNumber"] ?></td>
                    <td><?php echo $row["customerName"] ?></td>
                    <td><?php echo $row["contactLastName"] ?></td>
                    <td><?php echo $row["contactFirstName"] ?></td>
                    <td><?php echo $row["phone"] ?></td>
                    <td><?php echo $row["addressLine1"], " ", $row["addressLine2"] ?></td>
                    <td><?php echo $row["city"] ?></td>
                    <td><?php echo $row["postalCode"] ?></td>
                    <td><?php echo $row["country"] ?></td>
                    <td><?php echo $row["salesRepEmployeeNumber"] ?></td>
                    <td><?php echo $row["creditLimit"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
        <br><br><br>
        <table border="2" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="10">Products</th>
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
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result2)) : ?>
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
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>