<?php
// 4.3
// $servername = "localhost";
// $username = "root";
// $password = "1234";
// $dbname = "epidem";
//  $port = "3306";
// localhost

// $servername = "localhost";
// $username = "root";
// $password = "123456789";
// $dbname = "epidem";
// $port = "3306";



// takis 3
$servername = "61.19.25.207";
$username = "takis3";
$password = "skho@00866";
$dbname = "elderly_clinic";
$port = "3306";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn -> set_charset("utf8");