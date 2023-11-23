<?php 
include '../config/conn.php';

if (isset($_GET['siswaId'])) {
    $id = $_GET['siswaId'];

    $query = "DELETE FROM siswa WHERE id=$id";
    $exe = mysqli_query($connn, $query);

    if ($exe) {
        header("Location: ../index.php");
    } else {
        die("Data Tidak Berhasil Ditambahkan");
    }
    
} else {
    header('Tidak Bisa Masuk !');
}
?>