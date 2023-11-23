<?php
include '../config/conn.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tplahir =$_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat= $_POST['alamat'];
    $hobi= $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $queryy ="INSERT INTO siswa VALUES(null,'$nama', '$tplahir', '$tglahir', '$alamat', '$hobi', '$cita_cita', '$jm_saudara', '$idkelas', '$idagama')";
    $exe = mysqli_query($connn, $queryy);

    header("Location: ../index_siswa.php");
}
?>