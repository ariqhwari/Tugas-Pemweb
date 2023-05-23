<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <style>
    h3 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px auto;
        border-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.342);
        border-radius: 10px;
    }

    thead {
        background-color: #333;
        color: #fff;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    th {
        background-color: #373e46;
        color: white;
        font-weight: bold;
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        margin-top: 20px;
        text-align: center;
    }

    a:hover {
        background-color: #45a049;
    }
    </style>

</head>

<body>
    <?php

    echo "<h3>Data Buku</h3>";
    $file = "buku.txt";

    $read = file($file); //arr

    echo "<table border='1'>
    <thead>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Halaman</th>
    </thead>";

    foreach ($read as $buku) {
        $data_buku = explode("-", $buku); //arr
        echo "<tr>";
        echo "<td>$data_buku[0]</td>";
        echo "<td>$data_buku[1]</td>";
        echo "<td>$data_buku[2]</td>";
        echo "<td>$data_buku[3]</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo '<a href="index.php">Kembali ke Form</a>';
    ?>
</body>

</html>