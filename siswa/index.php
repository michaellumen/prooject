<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title> Data Siswa </title>
</head>

<!-- PHP TERITORIAL  -->
<?php 
    include 'config/conn.php';
    $query = "SELECT * FROM siswa";
    $execute = mysqli_query($connn, $query);
?>

<!-- / PHP TERITORIAL  -->

<body>
    <div class="container">
        <br>
        <h1 align="center"> Halaman Data Siswa </h1>
        <br><br><br>
        <a href="form_add_siswa.php" class="btn btn-success"> Tambah Siswa</a>
        <br><br><br>
        <a href="controller/logout.php" class="btn btn-danger" > Logout </a>
        <br><br><br>
        <!-- TABLE  TRITORIAL  -->
        <table border="1" class="table">
            <tr align="center">
                <th> Id </th>
                <th> Nama </th>
                <th> Tempat Lahir </th>
                <th> Tanggal Lahir </th>
                <th> Alamat </th>
                <th> Hobi </th>
                <th> Cita - Cita </th>
                <th> Jumlah Sudara </th>
                <th> Id Kelas </th>
                <th> Id Agama </th>
                <th> Fitur </th>
                <th> Fitur </th>
                
            </tr>


            <!--  PHP TERITORIAL  -->
            <?php
    $no = 1;
    while ($data = mysqli_fetch_array($execute)) {
    ?>
            <!-- / PHP TERITORIA  -->

            <!-- FORM (MENAMPILKAN ISI DARI DATA DARI DATABAES ) -->
            <tr>
                <td> <?=$no++?> </td>
                <td> <?=$data['nama']?> </td>
                <td> <?=$data['tplahir']?> </td>
                <td> <?=$data['tglahir']?> </td>
                <td align="center"> <?=$data['alamat']?> </td>
                <td> <?=$data['hobi']?> </td>
                <td align="center"> <?=$data['cita_cita']?> </td>
                <td align="center"> <?=$data['jm_saudara']?> </td>
                <td align="center"> <?=$data['idkelas']?> </td>
                <td align="center"> <?=$data['idagama']?> </td>
                <td>
                    <a href="controller/delete_siswa.php?siswaId=<?=$data['id']?>" class="btn btn-danger"> Hapus </a>
                </td>
                <td>
                <a href="form_edit_siswa.php?siswaId=<?=$data['id']?>" class="btn btn-primary"> Ubah </a>
                </td>
            </tr>
            <!-- /TABLE TERITORIAL  -->


            <!--  PHP TERITORIAL  -->
            <?php
    }
    ?>
            <!-- /PHP TERITORIAL  -->


        </table>
        <!-- / FORM TERITORIAL  -->
    </div>

</body>

</html>