<?php 
include '../config/conn.php';

$id = $_REQUEST['id'];
$nama = $_REQUEST['nama'];
$tplahir =$_REQUEST['tplahir'];
$tglahir = $_REQUEST['tglahir'];
$alamat= $_REQUEST['alamat'];
$hobi= $_REQUEST['hobi'];
$cita_cita = $_REQUEST['cita_cita'];
$jm_saudara = $_REQUEST['jm_saudara'];
$idkelas = $_REQUEST['idkelas'];
$idagama = $_REQUEST['idagama'];

$query ="UPDATE siswa SET nama= '$nama', tplahir='$tglahir', tglahir= '$tglahir', alamat= '$alamat', hobi='$hobi', cita_-cita='$cita_cita', jm_saudara='$jm_saudara',
idkelas='$idkelas', idagama= '$idagama WHERE id = $id";
$exe = mysqli_query($connn, $query);

if ($exe) {
    echo "<script>alert('  Berhasil Mengubah  ! ') </script>";
} else {
    echo "<script>alert('  Gagal Mengubah  ') </script>";
}

?>