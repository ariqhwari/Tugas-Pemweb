<?php
require('conn.php');

if (isset($_POST['deletes'])) {
    $customerNumber = $_POST['customerNumber'];

    $query1 = "DELETE FROM orderdetails WHERE orderNumber IN (SELECT orderNumber from orders WHERE customerNumber = '$customerNumber')";
    $result1 = mysqli_query($conn, $query1);

    $query2 = "DELETE FROM orders WHERE customerNumber = '$customerNumber'";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "DELETE FROM payments WHERE customerNumber = '$customerNumber'";
    $result3 = mysqli_query($conn, $query3);

    $query4 = "DELETE FROM customers WHERE customerNumber = '$customerNumber'";
    $result4 = mysqli_query($conn, $query4);

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

    mysqli_close($conn);
}
