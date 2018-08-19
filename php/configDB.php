<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ammeletricista";

$servername = "localhost";
$username = "ammeletr_root";
$password = "Mati!¨36";
$dbname = "ammeletr_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>