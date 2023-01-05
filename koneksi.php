<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "api_smkn10";

// Create connection
$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Gagaal Terhubung MySql" . mysqli_connect_error();
}
?>