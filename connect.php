<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="sodexo"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.

$db = mysqli_connect($host, $username, $password, $db_name); 

$connect = new mysqli($host, $username, $password, $db_name);