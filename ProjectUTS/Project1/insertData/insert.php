<?php
require_once '../koneksi/koneksi.php';

$namaDepan = $_POST['namaDepan'];
$namaBelakang = $_POST['namaBelakang'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];

try {
    $hashedPassword = hash('sha256', $password);

    $sql = 'INSERT INTO `data_register`(`namadepan`, `namabelakang`, `email`, `nohp`, `password`) VALUES (?, ?, ?, ?, ?)';
    $q = $database_connection->prepare($sql);
    $q->execute([$namaDepan, $namaBelakang, $email, $nohp, $hashedPassword]);
    header('Location: ../index.html');
    exit();
    echo "Data inserted successfully!";
} catch (PDOException $e) {
    die("Error inserting data: " . $e->getMessage());
}
?>
