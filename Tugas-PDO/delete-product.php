<?php
include('conn.php');

if (isset($_POST['delete'])) {
    $productCode = $_POST['productCode'];

    // Hapus data dari tabel orderdetails yang terkait dengan produk yang akan dihapus
    $query1 = "DELETE FROM orderdetails WHERE productCode = '$productCode'";
    $result1 = $conn->query($query1);

    // Hapus produk dari tabel products
    $query2 = "DELETE FROM products WHERE productCode = '$productCode'";
    $result2 = $conn->query($query2);

    if ($result1 && $result2) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'product.php';
            </script> 
    ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'product.php';
            </script> 
    ";
    }
}