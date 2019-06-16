<?php
// menghubungkan web dengan database mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengunjunghotel";

// Menghubungkan DB dengan menerapkan Object Oriented
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
