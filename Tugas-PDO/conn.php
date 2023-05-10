<?php
// Connect ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'classicmodels';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->query("SET FOREIGN_KEY_CHECKS=0;");


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
    $result = $conn->query($query);

    return $result;
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
    $result = $conn->query($query);

    return $result;
}

function updateCustomer($data)
{
    global $conn;

    $customerNumber = $data["customerNumber"];
    $customerName = htmlspecialchars($data["customerName"]);
    $contactLastName = htmlspecialchars($data["contactLastName"]);
    $contactFirstName = htmlspecialchars($data["contactFirstName"]);
    $phone = htmlspecialchars($data["phone"]);
    $addressLine1 = htmlspecialchars($data["addressLine1"]);
    $addressLine2 = htmlspecialchars($data["addressLine2"]);
    $city = htmlspecialchars($data["city"]);
    $state = htmlspecialchars($data["state"]);
    $postalCode = htmlspecialchars($data["postalCode"]);
    $country = htmlspecialchars($data["country"]);
    $salesRepEmployeeNumber = htmlspecialchars($data["salesRepEmployeeNumber"]);
    $creditLimit = htmlspecialchars($data["creditLimit"]);

    $query = "UPDATE customers SET 
                customerName = :customerName,
                contactLastName = :contactLastName,
                contactFirstName = :contactFirstName,
                phone = :phone,
                addressLine1 = :addressLine1,
                addressLine2 = :addressLine2,
                city = :city,
                state = :state,
                postalCode = :postalCode,
                country = :country,
                salesRepEmployeeNumber = :salesRepEmployeeNumber,
                creditLimit = :creditLimit
                WHERE customerNumber = :customerNumber";

    $statement = $conn->prepare($query);
    $statement->bindParam(':customerName', $customerName);
    $statement->bindParam(':contactLastName', $contactLastName);
    $statement->bindParam(':contactFirstName', $contactFirstName);
    $statement->bindParam(':phone', $phone);
    $statement->bindParam(':addressLine1', $addressLine1);
    $statement->bindParam(':addressLine2', $addressLine2);
    $statement->bindParam(':city', $city);
    $statement->bindParam(':state', $state);
    $statement->bindParam(':postalCode', $postalCode);
    $statement->bindParam(':country', $country);
    $statement->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);
    $statement->bindParam(':creditLimit', $creditLimit);
    $statement->bindParam(':customerNumber', $customerNumber);

    $result = $statement->execute();

    return $result;
}

function updateProduct($data)
{
    global $conn;

    $productCode = $data["productCode"];
    $productName = htmlspecialchars($data["productName"]);
    $productLine = htmlspecialchars($data["productLine"]);
    $productScale = htmlspecialchars($data["productScale"]);
    $productVendor = htmlspecialchars($data["productVendor"]);
    $productDescription = htmlspecialchars($data["productDescription"]);
    $quantityInStock = htmlspecialchars($data["quantityInStock"]);
    $buyPrice = $data["buyPrice"];
    $MSRP = $data["MSRP"];

    $query = "UPDATE products SET
                productName = :productName,
                productLine = :productLine,
                productScale = :productScale,
                productVendor = :productVendor,
                productDescription = :productDescription,
                quantityInStock = :quantityInStock,
                buyPrice = :buyPrice,
                MSRP = :MSRP
                WHERE productCode = :productCode";

    $statement = $conn->prepare($query);
    $statement->bindParam(':productName', $productName);
    $statement->bindParam(':productLine', $productLine);
    $statement->bindParam(':productScale', $productScale);
    $statement->bindParam(':productVendor', $productVendor);
    $statement->bindParam(':productDescription', $productDescription);
    $statement->bindParam(':quantityInStock', $quantityInStock);
    $statement->bindParam(':buyPrice', $buyPrice);
    $statement->bindParam(':MSRP', $MSRP);
    $statement->bindParam(':productCode', $productCode);

    $result = $statement->execute();

    return $result;
}