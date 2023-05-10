<?php
require_once('product.php');
require_once('cdrack.php');
require_once('cdmusic.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Catalog</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0px 200px;
    }

    h4 {
        text-align: center;
    }

    h1 {
        text-align: center;
    }

    .product-list {
        display: flex;
        flex-wrap: wrap;
    }

    .product {
        width: 200px;
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .product-list {
        display: flex;
        justify-content: center;

    }

    .product h2 {
        text-align: center;
    }

    .product p {
        margin: 0;
        display: flex;
        text-align: center;
    }
    </style>
</head>

<body>
    <h1>Product Catalog</h1>
    <h4>Nama : Muhammad Ariq Hawari Adiputra <br>NPM : 21081010149</h4>

    <?php
    echo "<h4>Product List</h4>";

    $products = [
        new Product("A", 90000, 0.1),
        new Product("B", 55000, 0.1),
        new Product("C", 350000, 0.1),
        new Product("D", 150000, 0.1),
        new Product("E", 75000, 0.15),
        new Product("F", 130000, 0.15),
        new Product("G", 290000, 0.15),
        new Product("H", 230000, 0.15),
    ];

    echo "<div class='product-list'>";
    foreach ($products as $product) {
        echo "<div class='product'>";
        echo "<h2>" . $product->getName() . "</h2>";
        echo "<p>Price: " . $product->getPrice() . "</p>";
        echo "<p>Discount: " . ($product->getDiscount() * 100) . "%</p>";
        echo "</div>";
    }
    echo "</div>";

    echo "<h4>Music Product List</h4>";

    $musicProducts = [
        new CDMusic("A", 90000, 0, "ColdPlay", "Rock"),
        new CDMusic("B", 55000, 0, "Maroon 5", "Pop"),
        new CDMusic("C", 350000, 0, "Justin Bieber", "Pop"),
        new CDMusic("D", 150000, 0, "Linkin Park", "Rock"),
    ];

    echo "<div class='product-list'>";
    foreach ($musicProducts as $musicProduct) {
        echo "<div class='product'>";
        echo "<h2>" . $musicProduct->getName() . "</h2>";
        echo "<p>Artist: " . $musicProduct->getArtist() . "</p>";
        echo "<p>Genre: " . $musicProduct->getGenre() . "</p>";
        echo "<p>Price: " . $musicProduct->getPrice() . "</p>";
        echo "<p>Discount: " . ($musicProduct->getDiscount() * 100) . "%</p>";
        echo "<p>Discounted Price: " . $musicProduct->FinalPrice() . "</p>";
        echo "</div>";
    }
    echo "</div>";

    echo "<h4>Rack Product List</h4>";

    $rackProducts = [
        new CDRack("F", 75000, 0, "30", "Rak Dinding"),
        new CDRack("G", 130000, 0, "20", "Rak Sepatu"),
        new CDRack("H", 290000, 0, "10", "Rak Pakaian"),
        new CDRack("I", 230000, 0, "10", "Rak Buku"),
    ];

    echo "<div class='product-list'>";
    foreach ($rackProducts as $rackProduct) {
        echo "<div class='product'>";
        echo "<h2>" . $rackProduct->getName() . "</h2>";
        echo "<p>Model: " . $rackProduct->getModel() . "</p>";
        echo "<p>Capacity: " . $rackProduct->getCapacity() . "</p>";
        echo "<p>Price: " . $rackProduct->getPrice() . "</p>";
        echo "<p>Discount: " . ($rackProduct->getDiscount() * 100) . "%</p>";
        echo "<p>Discounted Price: " . $rackProduct->FinalPrice() . "</p>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</body>

</html>