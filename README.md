This is an e commerce website.
This website is powered by PHP ad a backend support.
There ase still some updates being made to make to bring it to production.
Track all changes being made up to production phase.

All updates will be initialized here 

This is a database connection properties. Change them to live credentials if used in production stage.

// create database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "rodline";

// connect to the database 
$conn = mysqli_connect($servername, $username, $password, $dbName);