<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../koneksi/koneksi.php');

function cekLogin($email, $password) {
    global $database_connection;

    $email = htmlspecialchars($email);

    $query = "SELECT * FROM data_register WHERE email = :email";
    $statement = $database_connection->prepare($query);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $hashedPassword = hash('sha256', $password);

        if ($hashedPassword === $result['password']) {
            $namaDepan = $result['namadepan'];
            $namaBelakang = $result['namabelakang'];
            
            echo '<script>alert("Login berhasil.");</script>';
            
            header("Location: ../menu_utama.html?nama=$namaDepan $namaBelakang");
            exit();
        } else {
            echo '<script>alert("Email atau password tidak sesuai.");</script>';
        }
    } else {
        echo '<script>alert("Email tidak ditemukan.");</script>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    cekLogin($email, $password);
}
?>
