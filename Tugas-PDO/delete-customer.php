<?php
require('conn.php');

if (isset($_POST['deletes'])) {
    $customerNumber = $_POST['customerNumber'];

    $query1 = "DELETE FROM orderdetails WHERE orderNumber IN (SELECT orderNumber from orders WHERE customerNumber = '$customerNumber')";
    $result1 = $conn->query($query1);

    $query2 = "DELETE FROM orders WHERE customerNumber = '$customerNumber'";
    $result2 = $conn->query($query2);

    $query3 = "DELETE FROM payments WHERE customerNumber = '$customerNumber'";
    $result3 = $conn->query($query3);

    $query4 = "DELETE FROM customers WHERE customerNumber = '$customerNumber'";
    $result4 = $conn->query($query4);

    if ($result1 && $result2 && $result3 && $result4) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
            </script> 
        ";
    }
}