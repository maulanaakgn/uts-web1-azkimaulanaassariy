<?php
include_once("../Project2/koneksi/koneksi.php");
 
$result = $database_connection->query("SELECT * FROM data_pendaftar_crud_api ORDER BY id DESC");

?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama Depan</th> <th>Nama Belakang</th> <th>Email</th> <th>Foto</th>
    </tr>
    <?php  
    while ($user_data = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$user_data['nama_depan']."</td>";
        echo "<td>".$user_data['nama_belakang']."</td>";
        echo "<td>".$user_data['email']."</td>";   
        echo "<td><img src='" . $user_data['photo'] . "' alt='User Photo' style='width: 50px; height: 50px;'></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>