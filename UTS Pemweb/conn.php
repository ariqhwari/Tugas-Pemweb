<?php
function connection()
{
   global $conn;
   $dbName = "transupn";
   $conn = mysqli_connect("localhost", "ariq", "ariq", "transupn");
   mysqli_select_db($conn, $dbName);

   return $conn;
}
