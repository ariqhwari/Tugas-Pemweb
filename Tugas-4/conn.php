<?php

// Connect ke database
$conn = mysqli_connect("localhost", "ariq", "ariq", "classicmodels");
// Ambil query pada tabel employees
$result = mysqli_query($conn, "SELECT * FROM customers");
$result2 = mysqli_query($conn, "SELECT * FROM products");
