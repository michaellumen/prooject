<?php
include './config/conn.php';
$id_siswa = $_GET['siswaId'];

$query = "SELECT * FROM siswa WHERE id=$id_siswa";

$exe = mysqli_query($connn, $query);
$data = mysqli_fetch_array($exe);

$id =$data['id'];
$nama = $data['nama'];
$tplahir =$data['tplahir'];
$tglahir = $data['tglahir'];
$alamat= $data['alamat'];
$hobi= $data['hobi'];
$cita_cita = $data['cita_cita'];
$jm_saudara = $data['jm_saudara'];
$idkelas = $data['idkelas'];
$idagama = $data['idagama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title> Edit Siswa </title>
</head>
<body>
<div class="container">
<br>
<h1 align="center"> Edit Siswa </h1>
<br><br><br>
        <form action="controller/add_siswa.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label"> <b> Nama </b> </label>
                <input type="hidden" name="id" value="<?=$id?>" id="">
                <input type="text" class="form-control" name="nama" value=<?=$nama?> >
            </div>

            <div class="mb-3">
                <label for="tplahir" class="form-label"> <b> Tempat Lahir </b> </label>
                <input type="text" class="form-control" name="tplahir"  value=<?=$tplahir?>>
            </div>

            <div class="mb-3">
                <label for="tglahir" class="form-label"> <b> Tanggal Lahir</b> </label>
                <input type="date" class="form-control" name="tglahir"  value=<?=$tglahir?>>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label"> <b> Alamat </b> </label>
                <textarea name="alamat" id="" cols="10" rows="5" class="form-control"  value=<?=$alamat?>></textarea>
            </div>

            <div class="mb-3">
                <label for="hobi" class="form-label"> <b> Hobi</b> </label>
                <input type="text" class="form-control" name="hobi"  value=<?=$hobi?>>
            </div>

            <div class="mb-3">
                <label for="cita_cita" class="form-label"> <b> Cita Cita</b> </label>
                <input type="text" class="form-control" name="cita_cita"  value=<?=$cita_cita?>>
            </div>

            <div class="mb-3">
                <label for="jm_saudara" class="form-label"> <b> Jumlah Saudara </b> </label>
                <input type="text" class="form-control" name="jm_saudara"  value=<?=$jm_saudara?>>
            </div>

            <div class="mb-3">
            <label for="jm_saudara" class="form-label"> <b> Id Kelas </b> </label>
            <select name="idkelas" class="form-select" aria-label="Default select example"  value=<?=$idkelas?>>
                <option selected>Open this select menu</option>
                <option value="1">XI RPL 1</option>
                <option value="2">XI MM 1 </option>
                <option value="3">XI DKV 2</option>
                <option value="4">XI TKJ 3</option>
                <option value="5">XI SIJA 1</option>
                <option value="6">XI TKR 2</option>
            </select>
            </div>

            <div class="mb-3">
            <label for="jm_saudara" class="form-label"> <b> Id Agama </b> </label>
            <select name="idagama" class="form-select" aria-label="Default select example"  value=<?=$idagama?>>
                <option selected>Open this select menu</option>
                <option value="1">Katolik</option>
                <option value="2">Islam</option>
                <option value="3">Buddha</option>
                <option value="4">Hindu</option>
                <option value="5">Kristen</option>
                <option value="6">Konghuchu</option>
            </select>
            </div>
            
        <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </div>
        </form>
    </div>
</body>
</html>
