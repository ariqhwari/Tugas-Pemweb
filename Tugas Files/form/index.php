<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        padding: 20px;
    }

    h3 {
        color: #333;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
    }

    table {
        width: 100%;
    }

    table tr td:first-child {
        width: 120px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        padding: 8px 16px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .read {
        text-align: center;
        margin-top: 20px;
    }

    .read a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        margin: 0 0 15px 0;
    }

    .read a:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h3>Input Buku</h3>
    <div class="read">
        <a href="read.php">Informasi Buku</a>
    </div>
    <form action="input.php" method="get">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="text" name="halaman"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>