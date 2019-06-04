<?php
include "conn.php";

$sql = "SELECT * FROM `table` ORDER BY id";
$result = $conn->query($sql);

// $contentList=[];

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         $content = [];
//         $content['id'] = $row['id'];
//         $content['nama'] = $row['nama'];
//         $content['kamar'] = $row['kamar'];
//         $content['date_time'] = $row['date_time'];
//         $content['durasi'] = $row['durasi'];
//         $contentList[] = $content;
//     }
//     echo "<pre>";
//     print_r($contentList);
//     echo "</pre>";
// } else {
//     echo "0 results";
// }
$conn->close();