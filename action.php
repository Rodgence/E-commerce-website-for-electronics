<?php

// create database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "rodline";

// connect to the database 
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Query products from a database

$sql = "SELECT * FROM products";

$all_products = mysqli_query($conn, $sql);

$sql_selling = "SELECT * FROM products WHERE id in (4,1,5,7)";

$selling_products = mysqli_query($conn, $sql_selling);

$top_products = "SELECT * FROM products WHERE id in (1,3,6)";


$top_product = mysqli_query($conn, $top_products);

$top_product_onsale = "SELECT * FROM products WHERE id in (2,4,7)";

$top_product_online = mysqli_query($conn, $top_product_onsale);

$top_product_new = "SELECT * FROM products WHERE id in (7,8,9)";

$new_products = mysqli_query($conn, $top_product_new);
