<?php
require_once '../koneksi/koneksi.php';
$id = $_POST['id'];

try {
    $sql = 'DELETE FROM data_pendaftar_crud_api WHERE id = ?';
    $q = $database_connection->prepare($sql);
    $q->execute([$id]);
    echo "Data deleted successfully!";
} catch (PDOException $th) {
    die("Error deleting data: " . $th->getMessage());
}
?>