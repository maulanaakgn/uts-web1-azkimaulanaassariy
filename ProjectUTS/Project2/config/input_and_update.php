<?php
require_once '../koneksi/koneksi.php';

$nama_depan = $_POST['ndepan'];
$nama_belakang = $_POST['nbelakang'];
$email = $_POST['email'];
$password = $_POST['password'];
$photo_name = $_FILES['filePhoto']['name'];
$photo_tmp = $_FILES['filePhoto']['tmp_name'];


if (!empty($_POST['id'])) {
    try {
        move_uploaded_file($photo_tmp, '../photo/' . $photo_name);
        $sql = 'UPDATE `data_pendaftar_crud_api` SET `nama_depan`=?,`nama_belakang`=?,`email`=?,`password`=?,`photo`=? WHERE id=?';
        $q = $database_connection->prepare($sql);
        $q->execute([$nama_depan, $nama_belakang, $email, sha1($password), 'photo/' . $photo_name, $_POST['id']]);

        echo "Data updated successfully!";
    } catch (PDOException $e) {
        die("Error updating data: " . $e->getMessage());
    }
} else {
    try {
        move_uploaded_file($photo_tmp, '../photo/' . $photo_name);
        $sql = 'INSERT INTO `data_pendaftar_crud_api`(`nama_depan`, `nama_belakang`, `email`, `password`, `photo`) VALUES (?, ?, ?, ?, ?)';
        $q = $database_connection->prepare($sql);
        $q->execute([$nama_depan, $nama_belakang, $email, sha1($password), 'photo/' . $photo_name]);

        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        die("Error inserting data: " . $e->getMessage());
    }
}

?>