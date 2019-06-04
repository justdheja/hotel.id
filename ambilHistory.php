<?php
include "conn.php";
$sql = "SELECT `id`, `nama`, `kamar`, `check_in`, `check_out`, `durasi` FROM `table`";

$ambilHistory = [];

if(isset($_GET['id'])){
    $sql .= " WHERE id = ?";
    
    $stmt = $con->stmt_init();
    
    $stmt = $con->prepare($sql);
    
    $stmt->bind_param("i", $id);
    
    $id = $_GET['id'];
    
    $stmt->execute();
    
    $stmt->bind_result($id, $nama, $kamar, $check_in, $check_out, $durasi);
    
    /* fetch values */
    while ($stmt->fetch()) {
        $contentData = [];
        $contentData['id'] = $id;
        $contentData['nama'] = $nama;
        $contentData['kamar'] = $kamar;
        $contentData['check_in'] = $check_in;
        $contentData['check_out'] = $check_out;
        $contentData['durasi'] = $durasi;
        $ambilHistory[] = $contentData;
    }
    
}