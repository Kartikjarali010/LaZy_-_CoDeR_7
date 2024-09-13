<?php
$servername = "sql313.infinityfree.com";
$username = "if0_37302435";
$password = "qbsBSyLETug82M5";
$dbname = "if0_37302435_medisnap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>