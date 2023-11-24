<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";
error_reporting(0);

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products_new";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $products = array(); 
}
?>