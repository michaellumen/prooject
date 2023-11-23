<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Form Tambah</title>
</head>

<body>
    <h1 align="center"> Tambah siswa </h1>

    <!--  FORM TERITORIAL  -->
    <div class="container">
        <form action="controller/add_siswa.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label"> <b> Nama </b> </label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="mb-3">
                <label for="tplahir" class="form-label"> <b> Tempat Lahir </b> </label>
                <input type="text" class="form-control" name="tplahir">
            </div>

            <div class="mb-3">
                <label for="tglahir" class="form-label"> <b> Tanggal Lahir</b> </label>
                <input type="date" class="form-control" name="tglahir">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label"> <b> Alamat </b> </label>
                <textarea name="alamat" id="" cols="10" rows="5" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="hobi" class="form-label"> <b> Hobi</b> </label>
                <input type="text" class="form-control" name="hobi">
            </div>

            <div class="mb-3">
                <label for="cita_cita" class="form-label"> <b> Cita Cita</b> </label>
                <input type="text" class="form-control" name="cita_cita">
            </div>

            <div class="mb-3">
                <label for="jm_saudara" class="form-label"> <b> Jumlah Saudara </b> </label>
                <input type="text" class="form-control" name="jm_saudara">
            </div>

            <div class="mb-3">
            <label for="jm_saudara" class="form-label"> <b> Id Kelas </b> </label>
            <select name="idkelas" class="form-select" aria-label="Default select example">
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
            <select name="idagama" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Katolik</option>
                <option value="2">Islam</option>
                <option value="3">Buddha</option>
                <option value="4">Hindu</option>
                <option value="5">Kristen</option>
                <option value="6">Konghuchu</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
    </div>
    <!-- / FORM TERITORIAL  -->
</body>

</html>