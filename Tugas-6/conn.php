<?php
// Connect ke database
$conn = mysqli_connect("localhost", "ariq", "ariq", "classicmodels");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahcustomer($data)
{
    global $conn;

    $customerNumber =  htmlspecialchars($data["customerNumber"]);
    $customerName =  htmlspecialchars($data["customerName"]);
    $contactLastName =  htmlspecialchars($data["contactLastName"]);
    $contactFirstName =  htmlspecialchars($data["contactFirstName"]);
    $phone =  htmlspecialchars($data["phone"]);
    $addressLine1 =  htmlspecialchars($data["addressLine1"]);
    $addressLine2 =  htmlspecialchars($data["addressLine2"]);
    $city =  htmlspecialchars($data["city"]);
    $state =  htmlspecialchars($data["state"]);
    $postalCode =  htmlspecialchars($data["postalCode"]);
    $country =  htmlspecialchars($data["country"]);
    $salesRepEmployeeNumber =  htmlspecialchars($data["salesRepEmployeeNumber"]);
    $creditLimit =  htmlspecialchars($data["creditLimit"]);

    $query = "INSERT INTO  customers VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahproduct($data)
{
    global $conn;

    $productCode =  htmlspecialchars($data["productCode"]);
    $productName =  htmlspecialchars($data["productName"]);
    $productLine =  htmlspecialchars($data["productLine"]);
    $productScale =  htmlspecialchars($data["productScale"]);
    $productVendor =  htmlspecialchars($data["productVendor"]);
    $productDescription =  htmlspecialchars($data["productDescription"]);
    $quantityInStock =  htmlspecialchars($data["quantityInStock"]);
    $buyPrice =  htmlspecialchars($data["buyPrice"]);
    $MSRP =  htmlspecialchars($data["MSRP"]);

    $query = "INSERT INTO products VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updatecustomer($data)
{
    global $conn;
    $customerNumber =  $data["customerNumber"];
    $customerName =  htmlspecialchars($data["customerName"]);
    $contactLastName =  htmlspecialchars($data["contactLastName"]);
    $contactFirstName =  htmlspecialchars($data["contactFirstName"]);
    $phone =  htmlspecialchars($data["phone"]);
    $addressLine1 =  htmlspecialchars($data["addressLine1"]);
    $addressLine2 =  htmlspecialchars($data["addressLine2"]);
    $city =  htmlspecialchars($data["city"]);
    $state =  htmlspecialchars($data["state"]);
    $postalCode =  htmlspecialchars($data["postalCode"]);
    $country =  htmlspecialchars($data["country"]);
    $salesRepEmployeeNumber =  htmlspecialchars($data["salesRepEmployeeNumber"]);
    $creditLimit =  htmlspecialchars($data["creditLimit"]);

    $query = "UPDATE customers SET 
                customerName = '$customerName',
                contactLastName = '$contactLastName',
                contactFirstName = '$contactFirstName',
                phone = '$phone',
                addressLine1 = '$addressLine1',
                addressLine2 = '$addressLine2',
                city = '$city',
                state = '$state',
                postalCode = '$postalCode',
                country = '$country',
                salesRepEmployeeNumber = $salesRepEmployeeNumber,
                creditLimit = $creditLimit
                WHERE customerNumber = $customerNumber";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateproduct($data)
{
    global $conn;

    $productCode =  ($data["productCode"]);
    $productName =  htmlspecialchars($data["productName"]);
    $productLine =  htmlspecialchars($data["productLine"]);
    $productScale =  htmlspecialchars($data["productScale"]);
    $productVendor =  htmlspecialchars($data["productVendor"]);
    $productDescription =  htmlspecialchars($data["productDescription"]);
    $quantityInStock =  htmlspecialchars($data["quantityInStock"]);
    $buyPrice =  ($data["buyPrice"]);
    $MSRP =  ($data["MSRP"]);

    $query = "UPDATE products SET
                productName = '$productName',
                productLine = '$productLine',
                productScale = '$productScale',
                productVendor = '$productVendor',
                productDescription = '$productDescription',
                quantityInStock = '$quantityInStock',
                buyPrice = $buyPrice,
                MSRP = $MSRP
                WHERE productCode = '$productCode'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}