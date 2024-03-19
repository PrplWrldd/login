<?php
$servername = "localhost";
$name = "root";
$psw = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $name, $psw, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: ";
}


?>