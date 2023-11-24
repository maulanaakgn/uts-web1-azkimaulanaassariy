<?php
require_once '../koneksi/koneksi.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $sql = 'SELECT * FROM `data_pendaftar_crud_api`';
    $q = $database_connection->prepare($sql);
    $q->execute();

    $data = array();
    while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    echo json_encode($data);
} catch (PDOException $e) {
    http_response_code(500);
    die("Error fetching data: " . $e->getMessage());
}
?>
