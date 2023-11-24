<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$database_hostname = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = 'db_uts_web1_21552011144_azkimaulanaassariy';
$database_port = '3306';

try {
    $database_connection = new PDO("mysql:host=$database_hostname;port=$database_port;dbname=$database_name;charset=utf8",
        $database_username, $database_password);

    $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $database_connection->exec("SET NAMES utf8");

    $cek = "Koneksi Berhasil";
    echo $cek;
} catch (PDOException $x) {
    die("Koneksi Gagal: " . $x->getMessage());
}
?>
