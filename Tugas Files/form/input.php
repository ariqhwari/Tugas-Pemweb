<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
    a.button {
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

    a.button:hover {
        background-color: #45a049;
    }
    </style>

</head>

<body>
    <?php

    if ($_GET) {
        //variable penampung
        $buku = $_GET['judul']
            . "-" . $_GET['penerbit']
            . "-" . $_GET['tahun']
            . "-" . $_GET['halaman'] . "\n";
        //simpan ke file
        $file = "buku.txt";
        if (file_put_contents($file, $buku, FILE_APPEND) > 0) {
            echo "data berhasil disimpan";
        } else {
            echo "data gagal disimpan";
        }

        echo '<br><br><a href="index.php">Kembali ke Form</a>';
        echo '<br><br><a href="read.php">Lihat Data</a>';
    } ?>
</body>

</html>