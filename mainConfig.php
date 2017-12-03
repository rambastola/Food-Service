<?php

$hostname = "localhost";

$username = "root";

$pass = "";

$dbname = "sodexo";

$conn = new mysqli($hostname, $username, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

