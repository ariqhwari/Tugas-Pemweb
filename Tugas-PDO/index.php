<?php
include('conn.php');
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Link Css -->
    <link rel="stylesheet" href="desaign.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Tilt+Warp&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>database</title>
</head>

<body>
    <!-- Navbar -->
    <div class="Navbar">
        <div class="kiri">
            <!-- array -->
            <h1>Classic Models</h1>
        </div>
        <div class="kanan">
            <a href="product.php" id="#product">Product</a>
            <a href="#customers" id="#customers">Customers</a>
        </div>
    </div>
    <!-- Database -->
    <div class="database">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th colspan="15">Customer</th>
                </tr>
                <tr class="button-insert">
                    <th colspan="15">
                        <button class="home-button"><a href="insert-customer.php" id="#insert">Insert</a></button>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Rep Employee Number</th>
                    <th>Credit Limit</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = $conn->query($query);
                $i = 1; ?>
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["customerNumber"] ?></td>
                        <td><?php echo $row["customerName"] ?></td>
                        <td><?php echo $row["contactLastName"] ?></td>
                        <td><?php echo $row["contactFirstName"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <td><?php echo $row["addressLine1"] ?></td>
                        <td><?php echo $row["addressLine2"] ?></td>
                        <td><?php echo $row["city"] ?></td>
                        <td><?php echo $row["state"] ?></td>
                        <td><?php echo $row["postalCode"] ?></td>
                        <td><?php echo $row["country"] ?></td>
                        <td><?php echo $row["salesRepEmployeeNumber"] ?></td>
                        <td><?php echo $row["creditLimit"] ?></td>
                        <td class="margin">
                            <a href="update-customer.php?customerNumber=<?php echo $row["customerNumber"]; ?>" class="buttons">Update</a>
                            <form method="POST" action="delete-customer.php">
                                <input type="hidden" name="customerNumber" value="<?php echo $row['customerNumber']; ?>">
                                <button type="submit" name="deletes">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>