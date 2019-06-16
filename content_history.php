<?php
include "conn.php";

$sql = "SELECT * FROM `table` ORDER BY id";
$result = $conn->query($sql);


$conn->close();